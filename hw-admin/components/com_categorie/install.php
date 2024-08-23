<?php
/* -------------------------------- installation -------------------------------- */
function install_com_categorie()
{
    $install = new installation();
    $result1 =
        $install
        ->init()
        ->table("categorie")
        ->column("photo", "VARCHAR(250) NULL")
        ->column("active", "INT(3) NULL")
        ->column("ordre", "INT NULL")
        ->column("parent", "VARCHAR(250) NULL")
        ->column("date_add", "DATE NULL")
        ->column("last_edit", "DATE NULL")
        ->create();
    $result2 =
        $install
        ->init()
        ->table("details_categorie")
        ->column("id_categorie", "INT NULL")
        ->column("seo_titre", "VARCHAR(200) NULL")
        ->column("seo_description", "VARCHAR(300) NULL")
        ->column("titre", "VARCHAR(250) NULL")
        ->column("langue", "VARCHAR(3) NULL")
        ->create();
    $result3 =
        $install
        ->init()
        ->module("com_categorie")
        ->addPermissions();
    if ($result1 && $result2 && $result3) {
        $install
            ->init()
            ->file("categories", "images")
            ->fileCreate();
        return 1;
    } else {
        return 0;
    }
}/* -------------------------------- désinstallation -------------------------------- */
function desinstall_com_categorie()
{
    $desinstall = new installation();
    $result1 = $desinstall->init()->table("categorie")->drop();
    $result2 = $desinstall->init()->table("details_categorie")->drop();
    $result3 = $desinstall->init()->module("com_categorie")->revokePermissions();
    if ($result1 && $result2 && $result3) {
        $desinstall->init()->file("categories", "images")->fileRemove();
        return 1;
    } else {
        return 0;
    }
}
