<?php

/* -------------------------------- installation -------------------------------- */
function install_com_slider()
{
    $install = new installation();
    $result1 =
        $install
        ->init()
        ->table("slider")
        ->column("titre", "VARCHAR(100) NULL")
        ->column("actif", "INT NULL")
        ->create();

    $result2 =
        $install
        ->init()
        ->table("slides")
        ->column("id_slider", "INT NULL")
        ->column("photo", "VARCHAR(200) NULL")
        ->column("ordre", "INT NULL")
        ->column("actif", "INT NULL")
        ->create();

    $result3 =
        $install
        ->init()
        ->table("details_slides")
        ->column("titre", "VARCHAR(100) NULL")
        ->column("description", "VARCHAR(200) NULL")
        ->column("url", "VARCHAR(200) NULL")
        ->column("langue", "VARCHAR(5) NULL")
        ->create();

    $result4 =
        $install
        ->init()
        ->module("com_slider")
        ->addPermissions();

    if ($result1 && $result2 && $result3 && $result4) {
        $install
            ->init()
            ->file("slides", "images")
            ->fileCreate();
        return 1;
    } else {
        return 0;
    }
}

/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_slider()
{

    $desinstall = new installation();
    $result1 = $desinstall->init()->table("slider")->drop();
    $result2 = $desinstall->init()->table("slides")->drop();
    $result3 = $desinstall->init()->table("details_slides")->drop();
    $result4 = $desinstall->init()->module("com_slider")->revokePermissions();
    if ($result1 && $result2 && $result3 && $result4) {
        $desinstall->init()->file("slides", "images")->fileRemove();
        return 1;
    } else {
        return 0;
    }
}
