<?php

declare(strict_types=1);
/**
 * SPDX-FileCopyrightText: 2016 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCA\AdminAudit\Actions;

use OCP\Share\IShare;

/**
 * Class Sharing logs the sharing actions
 *
 * @package OCA\AdminAudit\Actions
 */
class Sharing extends Action {
	/**
	 * Logs sharing of data
	 *
	 * @param array $params
	 */
	public function shared(array $params): void {
		if ($params['shareType'] === IShare::TYPE_LINK) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared via link with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_USER) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the user "%s" with permissions "%s"  (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_GROUP) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the group "%s" with permissions "%s"  (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_ROOM) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the room "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_EMAIL) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the email recipient "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_CIRCLE) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the circle "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_REMOTE) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the remote user "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_REMOTE_GROUP) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the remote group "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_DECK) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the deck card "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_SCIENCEMESH) {
			$this->log(
				'The %s "%s" with ID "%s" has been shared to the ScienceMesh user "%s" with permissions "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'path',
					'itemSource',
					'shareWith',
					'permissions',
					'id',
				]
			);
		}
	}

	/**
	 * Logs unsharing of data
	 *
	 * @param array $params
	 */
	public function unshare(array $params): void {
		if ($params['shareType'] === IShare::TYPE_LINK) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_USER) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the user "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_GROUP) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the group "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_ROOM) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the room "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_EMAIL) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the email recipient "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_CIRCLE) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the circle "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_REMOTE) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the remote user "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_REMOTE_GROUP) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the remote group "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_DECK) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the deck card "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		} elseif ($params['shareType'] === IShare::TYPE_SCIENCEMESH) {
			$this->log(
				'The %s "%s" with ID "%s" has been unshared from the ScienceMesh user "%s" (Share ID: %s)',
				$params,
				[
					'itemType',
					'fileTarget',
					'itemSource',
					'shareWith',
					'id',
				]
			);
		}
	}

	/**
	 * Logs the updating of permission changes for shares
	 *
	 * @param array $params
	 */
	public function updatePermissions(array $params): void {
		$this->log(
			'The permissions of the shared %s "%s" with ID "%s" have been changed to "%s"',
			$params,
			[
				'itemType',
				'path',
				'itemSource',
				'permissions',
			]
		);
	}

	/**
	 * Logs the password changes for a share
	 *
	 * @param array $params
	 */
	public function updatePassword(array $params): void {
		$this->log(
			'The password of the publicly shared %s "%s" with ID "%s" has been changed',
			$params,
			[
				'itemType',
				'token',
				'itemSource',
			]
		);
	}

	/**
	 * Logs the expiration date changes for a share
	 *
	 * @param array $params
	 */
	public function updateExpirationDate(array $params): void {
		if ($params['date'] === null) {
			$this->log(
				'The expiration date of the publicly shared %s with ID "%s" has been removed',
				$params,
				[
					'itemType',
					'itemSource',
				]
			);
		} else {
			$this->log(
				'The expiration date of the publicly shared %s with ID "%s" has been changed to "%s"',
				$params,
				[
					'itemType',
					'itemSource',
					'date',
				]
			);
		}
	}

	/**
	 * Logs access of shared files
	 *
	 * @param array $params
	 */
	public function shareAccessed(array $params): void {
		$this->log(
			'The shared %s with the token "%s" by "%s" has been accessed.',
			$params,
			[
				'itemType',
				'token',
				'uidOwner',
			]
		);
	}
}
