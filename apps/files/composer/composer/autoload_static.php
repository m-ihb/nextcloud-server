<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitFiles
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\Files\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Files\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'OCA\\Files\\Activity\\FavoriteProvider' => __DIR__ . '/..' . '/../lib/Activity/FavoriteProvider.php',
        'OCA\\Files\\Activity\\Filter\\Favorites' => __DIR__ . '/..' . '/../lib/Activity/Filter/Favorites.php',
        'OCA\\Files\\Activity\\Filter\\FileChanges' => __DIR__ . '/..' . '/../lib/Activity/Filter/FileChanges.php',
        'OCA\\Files\\Activity\\Helper' => __DIR__ . '/..' . '/../lib/Activity/Helper.php',
        'OCA\\Files\\Activity\\Provider' => __DIR__ . '/..' . '/../lib/Activity/Provider.php',
        'OCA\\Files\\Activity\\Settings\\FavoriteAction' => __DIR__ . '/..' . '/../lib/Activity/Settings/FavoriteAction.php',
        'OCA\\Files\\Activity\\Settings\\FileActivitySettings' => __DIR__ . '/..' . '/../lib/Activity/Settings/FileActivitySettings.php',
        'OCA\\Files\\Activity\\Settings\\FileChanged' => __DIR__ . '/..' . '/../lib/Activity/Settings/FileChanged.php',
        'OCA\\Files\\Activity\\Settings\\FileFavoriteChanged' => __DIR__ . '/..' . '/../lib/Activity/Settings/FileFavoriteChanged.php',
        'OCA\\Files\\App' => __DIR__ . '/..' . '/../lib/App.php',
        'OCA\\Files\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Files\\BackgroundJob\\CleanupDirectEditingTokens' => __DIR__ . '/..' . '/../lib/BackgroundJob/CleanupDirectEditingTokens.php',
        'OCA\\Files\\BackgroundJob\\CleanupFileLocks' => __DIR__ . '/..' . '/../lib/BackgroundJob/CleanupFileLocks.php',
        'OCA\\Files\\BackgroundJob\\DeleteExpiredOpenLocalEditor' => __DIR__ . '/..' . '/../lib/BackgroundJob/DeleteExpiredOpenLocalEditor.php',
        'OCA\\Files\\BackgroundJob\\DeleteOrphanedItems' => __DIR__ . '/..' . '/../lib/BackgroundJob/DeleteOrphanedItems.php',
        'OCA\\Files\\BackgroundJob\\ScanFiles' => __DIR__ . '/..' . '/../lib/BackgroundJob/ScanFiles.php',
        'OCA\\Files\\BackgroundJob\\TransferOwnership' => __DIR__ . '/..' . '/../lib/BackgroundJob/TransferOwnership.php',
        'OCA\\Files\\Capabilities' => __DIR__ . '/..' . '/../lib/Capabilities.php',
        'OCA\\Files\\Collaboration\\Resources\\Listener' => __DIR__ . '/..' . '/../lib/Collaboration/Resources/Listener.php',
        'OCA\\Files\\Collaboration\\Resources\\ResourceProvider' => __DIR__ . '/..' . '/../lib/Collaboration/Resources/ResourceProvider.php',
        'OCA\\Files\\Command\\Delete' => __DIR__ . '/..' . '/../lib/Command/Delete.php',
        'OCA\\Files\\Command\\DeleteOrphanedFiles' => __DIR__ . '/..' . '/../lib/Command/DeleteOrphanedFiles.php',
        'OCA\\Files\\Command\\Get' => __DIR__ . '/..' . '/../lib/Command/Get.php',
        'OCA\\Files\\Command\\RepairTree' => __DIR__ . '/..' . '/../lib/Command/RepairTree.php',
        'OCA\\Files\\Command\\Scan' => __DIR__ . '/..' . '/../lib/Command/Scan.php',
        'OCA\\Files\\Command\\ScanAppData' => __DIR__ . '/..' . '/../lib/Command/ScanAppData.php',
        'OCA\\Files\\Command\\TransferOwnership' => __DIR__ . '/..' . '/../lib/Command/TransferOwnership.php',
        'OCA\\Files\\Controller\\AjaxController' => __DIR__ . '/..' . '/../lib/Controller/AjaxController.php',
        'OCA\\Files\\Controller\\ApiController' => __DIR__ . '/..' . '/../lib/Controller/ApiController.php',
        'OCA\\Files\\Controller\\DirectEditingController' => __DIR__ . '/..' . '/../lib/Controller/DirectEditingController.php',
        'OCA\\Files\\Controller\\DirectEditingViewController' => __DIR__ . '/..' . '/../lib/Controller/DirectEditingViewController.php',
        'OCA\\Files\\Controller\\OpenLocalEditorController' => __DIR__ . '/..' . '/../lib/Controller/OpenLocalEditorController.php',
        'OCA\\Files\\Controller\\TemplateController' => __DIR__ . '/..' . '/../lib/Controller/TemplateController.php',
        'OCA\\Files\\Controller\\TransferOwnershipController' => __DIR__ . '/..' . '/../lib/Controller/TransferOwnershipController.php',
        'OCA\\Files\\Controller\\ViewController' => __DIR__ . '/..' . '/../lib/Controller/ViewController.php',
        'OCA\\Files\\Db\\OpenLocalEditor' => __DIR__ . '/..' . '/../lib/Db/OpenLocalEditor.php',
        'OCA\\Files\\Db\\OpenLocalEditorMapper' => __DIR__ . '/..' . '/../lib/Db/OpenLocalEditorMapper.php',
        'OCA\\Files\\Db\\TransferOwnership' => __DIR__ . '/..' . '/../lib/Db/TransferOwnership.php',
        'OCA\\Files\\Db\\TransferOwnershipMapper' => __DIR__ . '/..' . '/../lib/Db/TransferOwnershipMapper.php',
        'OCA\\Files\\DirectEditingCapabilities' => __DIR__ . '/..' . '/../lib/DirectEditingCapabilities.php',
        'OCA\\Files\\Event\\LoadAdditionalScriptsEvent' => __DIR__ . '/..' . '/../lib/Event/LoadAdditionalScriptsEvent.php',
        'OCA\\Files\\Event\\LoadSidebar' => __DIR__ . '/..' . '/../lib/Event/LoadSidebar.php',
        'OCA\\Files\\Exception\\TransferOwnershipException' => __DIR__ . '/..' . '/../lib/Exception/TransferOwnershipException.php',
        'OCA\\Files\\Helper' => __DIR__ . '/..' . '/../lib/Helper.php',
        'OCA\\Files\\Listener\\LegacyLoadAdditionalScriptsAdapter' => __DIR__ . '/..' . '/../lib/Listener/LegacyLoadAdditionalScriptsAdapter.php',
        'OCA\\Files\\Listener\\LoadSidebarListener' => __DIR__ . '/..' . '/../lib/Listener/LoadSidebarListener.php',
        'OCA\\Files\\Migration\\Version11301Date20191205150729' => __DIR__ . '/..' . '/../lib/Migration/Version11301Date20191205150729.php',
        'OCA\\Files\\Migration\\Version12101Date20221011153334' => __DIR__ . '/..' . '/../lib/Migration/Version12101Date20221011153334.php',
        'OCA\\Files\\Notification\\Notifier' => __DIR__ . '/..' . '/../lib/Notification/Notifier.php',
        'OCA\\Files\\Search\\FilesSearchProvider' => __DIR__ . '/..' . '/../lib/Search/FilesSearchProvider.php',
        'OCA\\Files\\Service\\DirectEditingService' => __DIR__ . '/..' . '/../lib/Service/DirectEditingService.php',
        'OCA\\Files\\Service\\OwnershipTransferService' => __DIR__ . '/..' . '/../lib/Service/OwnershipTransferService.php',
        'OCA\\Files\\Service\\TagService' => __DIR__ . '/..' . '/../lib/Service/TagService.php',
        'OCA\\Files\\Settings\\PersonalSettings' => __DIR__ . '/..' . '/../lib/Settings/PersonalSettings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitFiles::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitFiles::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitFiles::$classMap;

        }, null, ClassLoader::class);
    }
}
