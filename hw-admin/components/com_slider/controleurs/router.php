<?php

require_once("../../../config.php");
require_once("../../../instanceDb.php");
require_once("../../../includes/functions/functions.php");
session_start();

if (isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task) {
        case 'addSlider':
            if ($_SESSION['user']->hasDroit('add', 'com_slider')) {
                include_once("slider/controleur.php");
            }
            break;
        case 'editSlider':
            if ($_SESSION['user']->hasDroit('edit', 'com_slider')) {
                include_once("slider/controleur.php");
            }
            break;
        case 'deleteSlider':
            if ($_SESSION['user']->hasDroit('delete', 'com_slider')) {
                include_once("slider/controleur.php");
            }
            break;

        case 'enableSlider':
            if ($_SESSION['user']->hasDroit('edit', 'com_slider')) {
                include_once("slider/controleur.php");
            }
            break;
        case 'addSlide':
            if ($_SESSION['user']->hasDroit('add', 'com_slider')) {
                include_once("slide/controleur.php");
            }
            break;
        case 'editSlide':
            if ($_SESSION['user']->hasDroit('edit', 'com_slider')) {
                include_once("slide/controleur.php");
            }
            break;
        case 'deleteSlide':
            if ($_SESSION['user']->hasDroit('delete', 'com_slider')) {
                include_once("slide/controleur.php");
            }
            break;
        case 'orderSlide':
            if ($_SESSION['user']->hasDroit('delete', 'com_slider')) {
                include_once("slide/controleur.php");
            }
            break;
    }
}
