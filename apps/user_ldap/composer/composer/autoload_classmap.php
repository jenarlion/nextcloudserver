<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = $vendorDir;

return array(
    'OCA\\User_LDAP\\Access' => $baseDir . '/../lib/Access.php',
    'OCA\\User_LDAP\\AccessFactory' => $baseDir . '/../lib/AccessFactory.php',
    'OCA\\User_LDAP\\AppInfo\\Application' => $baseDir . '/../lib/AppInfo/Application.php',
    'OCA\\User_LDAP\\BackendUtility' => $baseDir . '/../lib/BackendUtility.php',
    'OCA\\User_LDAP\\Command\\CheckUser' => $baseDir . '/../lib/Command/CheckUser.php',
    'OCA\\User_LDAP\\Command\\CreateEmptyConfig' => $baseDir . '/../lib/Command/CreateEmptyConfig.php',
    'OCA\\User_LDAP\\Command\\DeleteConfig' => $baseDir . '/../lib/Command/DeleteConfig.php',
    'OCA\\User_LDAP\\Command\\ResetUser' => $baseDir . '/../lib/Command/ResetUser.php',
    'OCA\\User_LDAP\\Command\\Search' => $baseDir . '/../lib/Command/Search.php',
    'OCA\\User_LDAP\\Command\\SetConfig' => $baseDir . '/../lib/Command/SetConfig.php',
    'OCA\\User_LDAP\\Command\\ShowConfig' => $baseDir . '/../lib/Command/ShowConfig.php',
    'OCA\\User_LDAP\\Command\\ShowRemnants' => $baseDir . '/../lib/Command/ShowRemnants.php',
    'OCA\\User_LDAP\\Command\\TestConfig' => $baseDir . '/../lib/Command/TestConfig.php',
    'OCA\\User_LDAP\\Command\\UpdateUUID' => $baseDir . '/../lib/Command/UpdateUUID.php',
    'OCA\\User_LDAP\\Command\\UuidUpdateReport' => $baseDir . '/../lib/Command/UpdateUUID.php',
    'OCA\\User_LDAP\\Configuration' => $baseDir . '/../lib/Configuration.php',
    'OCA\\User_LDAP\\Connection' => $baseDir . '/../lib/Connection.php',
    'OCA\\User_LDAP\\ConnectionFactory' => $baseDir . '/../lib/ConnectionFactory.php',
    'OCA\\User_LDAP\\Controller\\ConfigAPIController' => $baseDir . '/../lib/Controller/ConfigAPIController.php',
    'OCA\\User_LDAP\\Controller\\RenewPasswordController' => $baseDir . '/../lib/Controller/RenewPasswordController.php',
    'OCA\\User_LDAP\\Events\\GroupBackendRegistered' => $baseDir . '/../lib/Events/GroupBackendRegistered.php',
    'OCA\\User_LDAP\\Events\\UserBackendRegistered' => $baseDir . '/../lib/Events/UserBackendRegistered.php',
    'OCA\\User_LDAP\\Exceptions\\AttributeNotSet' => $baseDir . '/../lib/Exceptions/AttributeNotSet.php',
    'OCA\\User_LDAP\\Exceptions\\ConstraintViolationException' => $baseDir . '/../lib/Exceptions/ConstraintViolationException.php',
    'OCA\\User_LDAP\\Exceptions\\NoMoreResults' => $baseDir . '/../lib/Exceptions/NoMoreResults.php',
    'OCA\\User_LDAP\\Exceptions\\NotOnLDAP' => $baseDir . '/../lib/Exceptions/NotOnLDAP.php',
    'OCA\\User_LDAP\\FilesystemHelper' => $baseDir . '/../lib/FilesystemHelper.php',
    'OCA\\User_LDAP\\GroupPluginManager' => $baseDir . '/../lib/GroupPluginManager.php',
    'OCA\\User_LDAP\\Group_LDAP' => $baseDir . '/../lib/Group_LDAP.php',
    'OCA\\User_LDAP\\Group_Proxy' => $baseDir . '/../lib/Group_Proxy.php',
    'OCA\\User_LDAP\\Handler\\ExtStorageConfigHandler' => $baseDir . '/../lib/Handler/ExtStorageConfigHandler.php',
    'OCA\\User_LDAP\\Helper' => $baseDir . '/../lib/Helper.php',
    'OCA\\User_LDAP\\IGroupLDAP' => $baseDir . '/../lib/IGroupLDAP.php',
    'OCA\\User_LDAP\\ILDAPGroupPlugin' => $baseDir . '/../lib/ILDAPGroupPlugin.php',
    'OCA\\User_LDAP\\ILDAPUserPlugin' => $baseDir . '/../lib/ILDAPUserPlugin.php',
    'OCA\\User_LDAP\\ILDAPWrapper' => $baseDir . '/../lib/ILDAPWrapper.php',
    'OCA\\User_LDAP\\IUserLDAP' => $baseDir . '/../lib/IUserLDAP.php',
    'OCA\\User_LDAP\\Jobs\\CleanUp' => $baseDir . '/../lib/Jobs/CleanUp.php',
    'OCA\\User_LDAP\\Jobs\\Sync' => $baseDir . '/../lib/Jobs/Sync.php',
    'OCA\\User_LDAP\\Jobs\\UpdateGroups' => $baseDir . '/../lib/Jobs/UpdateGroups.php',
    'OCA\\User_LDAP\\LDAP' => $baseDir . '/../lib/LDAP.php',
    'OCA\\User_LDAP\\LDAPProvider' => $baseDir . '/../lib/LDAPProvider.php',
    'OCA\\User_LDAP\\LDAPProviderFactory' => $baseDir . '/../lib/LDAPProviderFactory.php',
    'OCA\\User_LDAP\\LDAPUtility' => $baseDir . '/../lib/LDAPUtility.php',
    'OCA\\User_LDAP\\LogWrapper' => $baseDir . '/../lib/LogWrapper.php',
    'OCA\\User_LDAP\\Mapping\\AbstractMapping' => $baseDir . '/../lib/Mapping/AbstractMapping.php',
    'OCA\\User_LDAP\\Mapping\\GroupMapping' => $baseDir . '/../lib/Mapping/GroupMapping.php',
    'OCA\\User_LDAP\\Mapping\\UserMapping' => $baseDir . '/../lib/Mapping/UserMapping.php',
    'OCA\\User_LDAP\\Migration\\GroupMappingMigration' => $baseDir . '/../lib/Migration/GroupMappingMigration.php',
    'OCA\\User_LDAP\\Migration\\RemoveRefreshTime' => $baseDir . '/../lib/Migration/RemoveRefreshTime.php',
    'OCA\\User_LDAP\\Migration\\UUIDFix' => $baseDir . '/../lib/Migration/UUIDFix.php',
    'OCA\\User_LDAP\\Migration\\UUIDFixGroup' => $baseDir . '/../lib/Migration/UUIDFixGroup.php',
    'OCA\\User_LDAP\\Migration\\UUIDFixInsert' => $baseDir . '/../lib/Migration/UUIDFixInsert.php',
    'OCA\\User_LDAP\\Migration\\UUIDFixUser' => $baseDir . '/../lib/Migration/UUIDFixUser.php',
    'OCA\\User_LDAP\\Migration\\Version1010Date20200630192842' => $baseDir . '/../lib/Migration/Version1010Date20200630192842.php',
    'OCA\\User_LDAP\\Migration\\Version1120Date20210917155206' => $baseDir . '/../lib/Migration/Version1120Date20210917155206.php',
    'OCA\\User_LDAP\\Migration\\Version1130Date20211102154716' => $baseDir . '/../lib/Migration/Version1130Date20211102154716.php',
    'OCA\\User_LDAP\\Migration\\Version1130Date20220110154717' => $baseDir . '/../lib/Migration/Version1130Date20220110154717.php',
    'OCA\\User_LDAP\\Migration\\Version1130Date20220110154718' => $baseDir . '/../lib/Migration/Version1130Date20220110154718.php',
    'OCA\\User_LDAP\\Migration\\Version1130Date20220110154719' => $baseDir . '/../lib/Migration/Version1130Date20220110154719.php',
    'OCA\\User_LDAP\\Notification\\Notifier' => $baseDir . '/../lib/Notification/Notifier.php',
    'OCA\\User_LDAP\\PagedResults\\IAdapter' => $baseDir . '/../lib/PagedResults/IAdapter.php',
    'OCA\\User_LDAP\\PagedResults\\Php54' => $baseDir . '/../lib/PagedResults/Php54.php',
    'OCA\\User_LDAP\\PagedResults\\Php73' => $baseDir . '/../lib/PagedResults/Php73.php',
    'OCA\\User_LDAP\\PagedResults\\TLinkId' => $baseDir . '/../lib/PagedResults/TLinkId.php',
    'OCA\\User_LDAP\\Proxy' => $baseDir . '/../lib/Proxy.php',
    'OCA\\User_LDAP\\Settings\\Admin' => $baseDir . '/../lib/Settings/Admin.php',
    'OCA\\User_LDAP\\Settings\\Section' => $baseDir . '/../lib/Settings/Section.php',
    'OCA\\User_LDAP\\UserPluginManager' => $baseDir . '/../lib/UserPluginManager.php',
    'OCA\\User_LDAP\\User\\DeletedUsersIndex' => $baseDir . '/../lib/User/DeletedUsersIndex.php',
    'OCA\\User_LDAP\\User\\Manager' => $baseDir . '/../lib/User/Manager.php',
    'OCA\\User_LDAP\\User\\OfflineUser' => $baseDir . '/../lib/User/OfflineUser.php',
    'OCA\\User_LDAP\\User\\User' => $baseDir . '/../lib/User/User.php',
    'OCA\\User_LDAP\\User_LDAP' => $baseDir . '/../lib/User_LDAP.php',
    'OCA\\User_LDAP\\User_Proxy' => $baseDir . '/../lib/User_Proxy.php',
    'OCA\\User_LDAP\\Wizard' => $baseDir . '/../lib/Wizard.php',
    'OCA\\User_LDAP\\WizardResult' => $baseDir . '/../lib/WizardResult.php',
);
