<?php

/* -------------------------------- installation -------------------------------- */
function install_com_newsletter()
{
    $install = new installation();
    $createSQL =
        $install
        ->init()
        ->table("newsletter")
        ->column("nom", "VARCHAR(250) NULL")
        ->column("email", "VARCHAR(250) NOT NULL")
        ->column("date_add", "DATE NULL")
        ->column("confirm", "INT NULL")
        ->create();

    $createSQL =
        $install
        ->init()
        ->module("com_newsletter")
        ->addPermissions();
    if ($createSQL) {
        return 1;
    } else {
        return 0;
    }
}

/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_newsletter()
{
    $desinstall = new installation();
    $deleteSQL = $desinstall->init()->table("newsletter")->drop();
    $result = $desinstall->init()->module("com_newsletter")->revokePermissions();

    if ($deleteSQL && $result) {
        return 1;
    } else {
        return 0;
    }
}
