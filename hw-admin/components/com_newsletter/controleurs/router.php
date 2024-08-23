<?php

require_once("../../../config.php");
require_once("../../../instanceDb.php");
require_once("../../../includes/functions/functions.php");
session_start();

if (isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task) {
        case 'deleteNewsletter':
            if ($_SESSION['user']->hasDroit('delete', 'com_newsletter')) {
                include_once("newsletter/controleur.php");
            }
            break;
        case 'enableNewsletter':
            if ($_SESSION['user']->hasDroit('edit', 'com_newsletter')) {
                include_once("newsletter/controleur.php");
            }
            break;
        case 'disableNewsletter':
            if ($_SESSION['user']->hasDroit('edit', 'com_newsletter')) {
                include_once("newsletter/controleur.php");
            }
            break;
    }
}
