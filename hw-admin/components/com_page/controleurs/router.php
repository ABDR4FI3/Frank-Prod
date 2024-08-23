<?php

require_once("../../../config.php");
require_once("../../../instanceDb.php");
require_once("../../../includes/functions/functions.php");
session_start();

if (isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task) {
        case 'addPage':
            if ($_SESSION['user']->hasDroit('add', 'com_page')) {
                include_once("page/controleur.php");
            }
            break;
        case 'editPage':
            if ($_SESSION['user']->hasDroit('edit', 'com_page')) {
                include_once("page/controleur.php");
            }
            break;
        case 'deletePage':
            if ($_SESSION['user']->hasDroit('delete', 'com_page')) {
                include_once("page/controleur.php");
            }
            break;
        case 'enablePage':
            if ($_SESSION['user']->hasDroit('edit', 'com_page')) {
                include_once("page/controleur.php");
            }
            break;
        case 'duplicatePage':
            if ($_SESSION['user']->hasDroit('add', 'com_page')) {
                include_once("page/controleur.php");
            }
            break;
    }
}
