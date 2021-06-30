<?php

declare(strict_types=1);

function adminer_object()
{
    $curDir = __DIR__;
    // required to run any plugin
    include_once "{$curDir}/plugins/plugin.php";

    // autoloader
    foreach (glob("{$curDir}/plugins/*.php") as $filename) {
        include_once (string) $filename;
    }

    $plugins = [
        // specify enabled plugins here
        // new AdminerDumpXml,
        // new AdminerTinymce,
        // new AdminerFileUpload("data/"),
        // new AdminerSlugify,
        // new AdminerTranslation,
        // new AdminerForeignSystem,
        new AdminerTablesFilter,
    ];

    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */

    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include 'adminer-4.8.1-en.php';
