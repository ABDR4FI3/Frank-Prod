<?php
require_once ("../../../config.php");
require_once ("../../../instanceDb.php");
require_once ("../../../includes/functions/functions.php");
session_start();

if(isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task)
    {
        case 'addPartner' :
            if ($_SESSION['user']->hasDroit('add', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
        case 'editPartner' :
            if ($_SESSION['user']->hasDroit('edit', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
        case 'deletePartner' :
            if ($_SESSION['user']->hasDroit('delete', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
        case 'enablePartner' :
            if ($_SESSION['user']->hasDroit('edit', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
        case 'deletePartners' :
            if ($_SESSION['user']->hasDroit('delete', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
        case 'enablePartners' :
            if ($_SESSION['user']->hasDroit('edit', 'com_partner')) {
                include_once ("partner/controleur.php");
            }
            break;
    }
}