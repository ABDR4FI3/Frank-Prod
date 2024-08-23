<?php

/* -------------------------------- installation -------------------------------- */
function install_com_page()
{
    $install = new installation();
    $result1 =
        $install
        ->init()
        ->table("page")
        ->column("type", "VARCHAR(20) NOT NULL")
        ->column("id_galerie", "INT NULL")
        ->column("photo", "VARCHAR(255) NULL")
        ->column("order_p", "INT NULL")
        ->column("active", "INT NULL")
        ->create();
    $result2 =
        $install
        ->init()
        ->table("details_page")
        ->column("id_page", "INT NULL")
        ->column("seo_titre", "VARCHAR(255) NULL")
        ->column("seo_description", "VARCHAR(300) NULL")
        ->column("titre", "VARCHAR(250) NOT NULL")
        ->column("url", "VARCHAR(255) NULL")
        ->column("texte", "TEXT NULL")
        ->column("externe", "VARCHAR(255) NULL")
        ->column("extrait", "TEXT NULL")
        ->column("langue", "VARCHAR(3) NULL")
        ->create();

    $result3 =
        $install
        ->init()
        ->module("com_page")
        ->addPermissions();
    if ($result1 && $result2 && $result3) {
        $install
            ->init()
            ->file("pages", "images")
            ->fileCreate();
        return 1;
    } else {
        return 0;
    }
}

/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_page()
{
    $desinstall = new installation();
    $result1 = $desinstall->init()->table("page")->drop();
    $result2 = $desinstall->init()->table("details_page")->drop();
    $result3 = $desinstall->init()->module("com_page")->revokePermissions();
    if ($result1 && $result2 && $result3) {
        $desinstall->init()->file("pages", "images")->fileRemove();
        return 1;
    } else {
        return 0;
    }
}
