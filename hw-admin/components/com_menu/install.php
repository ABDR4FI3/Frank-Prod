<?php

/* -------------------------------- installation -------------------------------- */
function install_com_menu()
{
    $install = new installation();
    $result1 =
        $install
        ->init()
        ->table("menu_items")
        ->column("id_menu", "INT NOT NULL")
        ->column("parent_id", "INT NULL")
        ->column("type", "VARCHAR(10) NOT NULL")
        ->column("id_item", "INT NULL")
        ->column("blank", "INT NULL")
        ->column("ordre", "INT NULL")
        ->create();
    $result2 =
        $install
        ->init()
        ->table("details_menu_items")
        ->column("titre", "VARCHAR(100) NOT NULL")
        ->column("lien", "VARCHAR(200) NULL")
        ->column("langue", "VARCHAR(3) NULL")
        ->create();
    $result3 =
        $install
        ->init()
        ->table("menu")
        ->column("titre", "VARCHAR(100) NOT NULL")
        ->create();

    $result4 =
        $install
        ->init()
        ->module("com_menu")
        ->addPermissions();
    if ($result1 && $result2 && $result3 && $result4) {
        $install
            ->init()
            ->file("menus", "images")
            ->fileCreate();
        return 1;
    } else {
        return 0;
    }
}


/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_menu()
{
    $desinstall = new installation();
    $result1 = $desinstall->init()->table("menu_items")->drop();
    $result2 = $desinstall->init()->table("details_menu_items")->drop();
    $result3 = $desinstall->init()->table("menu")->drop();
    $result4 = $desinstall->init()->module("com_menu")->revokePermissions();
    if ($result1 && $result2 && $result3 && $result4) {
        $desinstall->init()->file("menus", "images")->fileRemove();
        return 1;
    } else {
        return 0;
    }
}
