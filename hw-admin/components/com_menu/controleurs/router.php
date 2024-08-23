<?php

require_once("../../../config.php");
require_once("../../../instanceDb.php");
require_once("../../../includes/functions/functions.php");
session_start();

if (isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task) {
        case 'addMenu':
            if ($_SESSION['user']->hasDroit('add', 'com_menu')) {
                include_once("menu/controleur.php");
            }
            break;
        case 'editMenu':
            if ($_SESSION['user']->hasDroit('edit', 'com_menu')) {
                include_once("menu/controleur.php");
            }
            break;
        case 'deleteMenu':
            if ($_SESSION['user']->hasDroit('delete', 'com_menu')) {
                include_once("menu/controleur.php");
            }
            break;
        case 'editMenuItem':
            if ($_SESSION['user']->hasDroit('edit', 'com_menu')) {
                include_once("menu_item/controleur.php");
            }
            break;
        case 'addMenuItem':
            if ($_SESSION['user']->hasDroit('add', 'com_menu')) {
                include_once("menu_item/controleur.php");
            }
            break;
        case 'deleteMenuItem':
            if ($_SESSION['user']->hasDroit('delete', 'com_menu')) {
                include_once("menu_item/controleur.php");
            }
            break;
    }
}
