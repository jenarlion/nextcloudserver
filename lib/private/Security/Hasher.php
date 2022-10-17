<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2016, ownCloud, Inc.
 *
 * @author Arthur Schiwon <blizzz@arthur-schiwon.de>
 * @author Christoph Wurst <christoph@winzerhof-wurst.at>
 * @author Lukas Reschke <lukas@statuscode.ch>
 * @author MichaIng <micha@dietpi.com>
 * @author Roeland Jago Douma <roeland@famdouma.nl>
 *
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OC\Security;

use OCP\IConfig;
use OCP\Security\IHasher;

/**
 * Class Hasher provides some basic hashing functions. Furthermore, it supports legacy hashes
 * used by previous versions of ownCloud and helps migrating those hashes to newer ones.
 *
 * The hashes generated by this class are prefixed (version|hash) with a version parameter to allow possible
 * updates in the future.
 * Possible versions:
 * 	- 1 (Initial version)
 *
 * Usage:
 * // Hashing a message
 * $hash = \OC::$server->getHasher()->hash('MessageToHash');
 * // Verifying a message - $newHash will contain the newly calculated hash
 * $newHash = null;
 * var_dump(\OC::$server->getHasher()->verify('a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', $newHash));
 * var_dump($newHash);
 *
 * @package OC\Security
 */
class Hasher implements IHasher {
	/** @var IConfig */
	private $config;
	/** @var array Options passed to password_hash and password_needs_rehash */
	private $options = [];
	/** @var string Salt used for legacy passwords */
	private $legacySalt = null;

	/**
	 * @param IConfig $config
	 */
	public function __construct(IConfig $config) {
		$this->config = $config;

		if (\defined('PASSWORD_ARGON2ID') || \defined('PASSWORD_ARGON2I')) {
			// password_hash fails, when the minimum values are undershot.
			// In this case, apply minimum.
			$this->options['threads'] = max($this->config->getSystemValueInt('hashingThreads', PASSWORD_ARGON2_DEFAULT_THREADS), 1);
			// The minimum memory cost is 8 KiB per thread.
			$this->options['memory_cost'] = max($this->config->getSystemValueInt('hashingMemoryCost', PASSWORD_ARGON2_DEFAULT_MEMORY_COST), $this->options['threads'] * 8);
			$this->options['time_cost'] = max($this->config->getSystemValueInt('hashingTimeCost', PASSWORD_ARGON2_DEFAULT_TIME_COST), 1);
		}

		$hashingCost = $this->config->getSystemValue('hashingCost', null);
		if (!\is_null($hashingCost)) {
			$this->options['cost'] = $hashingCost;
		}
	}

	/**
	 * Hashes a message using PHP's `password_hash` functionality.
	 * Please note that the size of the returned string is not guaranteed
	 * and can be up to 255 characters.
	 *
	 * @param string $message Message to generate hash from
	 * @return string Hash of the message with appended version parameter
	 */
	public function hash(string $message): string {
		$alg = $this->getPrefferedAlgorithm();

		if (\defined('PASSWORD_ARGON2ID') && $alg === PASSWORD_ARGON2ID) {
			return 3 . '|' . password_hash($message, PASSWORD_ARGON2ID, $this->options);
		}

		if (\defined('PASSWORD_ARGON2I') && $alg === PASSWORD_ARGON2I) {
			return 2 . '|' . password_hash($message, PASSWORD_ARGON2I, $this->options);
		}

		return 1 . '|' . password_hash($message, PASSWORD_BCRYPT, $this->options);
	}

	/**
	 * Get the version and hash from a prefixedHash
	 * @param string $prefixedHash
	 * @return null|array Null if the hash is not prefixed, otherwise array('version' => 1, 'hash' => 'foo')
	 */
	protected function splitHash(string $prefixedHash) {
		$explodedString = explode('|', $prefixedHash, 2);
		if (\count($explodedString) === 2) {
			if ((int)$explodedString[0] > 0) {
				return ['version' => (int)$explodedString[0], 'hash' => $explodedString[1]];
			}
		}

		return null;
	}

	/**
	 * Verify legacy hashes
	 * @param string $message Message to verify
	 * @param string $hash Assumed hash of the message
	 * @param null|string &$newHash Reference will contain the updated hash
	 * @return bool Whether $hash is a valid hash of $message
	 */
	protected function legacyHashVerify($message, $hash, &$newHash = null): bool {
		if (empty($this->legacySalt)) {
			$this->legacySalt = $this->config->getSystemValue('passwordsalt', '');
		}

		// Verify whether it matches a legacy PHPass or SHA1 string
		$hashLength = \strlen($hash);
		if (($hashLength === 60 && password_verify($message.$this->legacySalt, $hash)) ||
			($hashLength === 40 && hash_equals($hash, sha1($message)))) {
			$newHash = $this->hash($message);
			return true;
		}

		// Verify whether it matches a legacy PHPass or SHA1 string
		// Retry with empty passwordsalt for cases where it was not set
		$hashLength = \strlen($hash);
		if (($hashLength === 60 && password_verify($message, $hash)) ||
			($hashLength === 40 && hash_equals($hash, sha1($message)))) {
			$newHash = $this->hash($message);
			return true;
		}

		return false;
	}

	/**
	 * Verify V1 (blowfish) hashes
	 * Verify V2 (argon2i) hashes
	 * Verify V3 (argon2id) hashes
	 * @param string $message Message to verify
	 * @param string $hash Assumed hash of the message
	 * @param null|string &$newHash Reference will contain the updated hash if necessary. Update the existing hash with this one.
	 * @return bool Whether $hash is a valid hash of $message
	 */
	protected function verifyHash(string $message, string $hash, &$newHash = null): bool {
		if (password_verify($message, $hash)) {
			if ($this->needsRehash($hash)) {
				$newHash = $this->hash($message);
			}
			return true;
		}

		return false;
	}

	/**
	 * @param string $message Message to verify
	 * @param string $hash Assumed hash of the message
	 * @param null|string &$newHash Reference will contain the updated hash if necessary. Update the existing hash with this one.
	 * @return bool Whether $hash is a valid hash of $message
	 */
	public function verify(string $message, string $hash, &$newHash = null): bool {
		$splittedHash = $this->splitHash($hash);

		if (isset($splittedHash['version'])) {
			switch ($splittedHash['version']) {
				case 3:
				case 2:
				case 1:
					return $this->verifyHash($message, $splittedHash['hash'], $newHash);
			}
		} else {
			return $this->legacyHashVerify($message, $hash, $newHash);
		}

		return false;
	}

	private function needsRehash(string $hash): bool {
		$algorithm = $this->getPrefferedAlgorithm();

		return password_needs_rehash($hash, $algorithm, $this->options);
	}

	private function getPrefferedAlgorithm() {
		$default = PASSWORD_BCRYPT;
		if (\defined('PASSWORD_ARGON2I')) {
			$default = PASSWORD_ARGON2I;
		}

		if (\defined('PASSWORD_ARGON2ID')) {
			$default = PASSWORD_ARGON2ID;
		}

		// Check if we should use PASSWORD_DEFAULT
		if ($this->config->getSystemValue('hashing_default_password', false) === true) {
			$default = PASSWORD_DEFAULT;
		}

		return $default;
	}
}
