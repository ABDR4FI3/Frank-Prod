<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_menu')) {
            $action = "components/com_menu/controleurs/router.php?task=addMenu";
            $submitName = "add";
            $submitValue = "Ajouter menu";
            include_once("components/com_menu/views/menu/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_menu')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $menu = menu::find($id);
                $action = "components/com_menu/controleurs/router.php?task=editMenu";
                $submitName = "edit";
                $submitValue = "Modifier menu";
                include_once("components/com_menu/views/menu/edit.php");
            }
        }
        break;
    case 'items':
        if ($_SESSION['user']->hasDroit('add', 'com_menu')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $menu = menu::find($id);
                $menus_items = menu_item::findAll($id, $_SESSION['langue']);
                if (isset($_GET['id_item']) && !empty($_GET['id_item'])) {
                    $i = menu_item::find(intval($_GET['id_item']),$_SESSION['langue']);
                }

                if (isset($i)) {
                    var_dump($i);
                    $action = "components/com_menu/controleurs/router.php?task=editMenuItem";
                    $submitName = "edit";
                    $submitValue = "Modifier élément";
                } else {
                    $action = "components/com_menu/controleurs/router.php?task=addMenuItem";
                    $submitName = "add";
                    $submitValue = "Ajouter élément";
                }
                include_once("components/com_menu/views/menu_item/items.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_menu')) {
            $menus = menu::findAll();
            include_once("components/com_menu/views/menu/list.php");
        }
        break;
}
