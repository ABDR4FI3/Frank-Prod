<?php

require_once ("../../../config.php");
require_once ("../../../instanceDb.php");
require_once ("../../../includes/functions/functions.php");
session_start();

if(isset($_GET['task']) && !empty($_GET['task'])) {
    @$task = $_GET['task'];
    switch ($task)
    {
        case 'addProduit' :
            if ($_SESSION['user']->hasDroit('add', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'editProduit' :
            if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'deleteProduit' :
            if ($_SESSION['user']->hasDroit('delete', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'enableProduit' :
            if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'deleteProduits' :
            if ($_SESSION['user']->hasDroit('delete', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'enableProduits' :
            if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
                include_once ("produit/controleur.php");
            }
            break;
        case 'addProduitPhoto' :
            if ($_SESSION['user']->hasDroit('add', 'com_produit')) {
                include_once ("produit_photo/controleur.php");
            }
            break;
        case 'editProduitPhoto' :
            if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
                include_once ("produit_photo/controleur.php");
            }
            break;
        case 'deleteProduitPhoto' :
            if ($_SESSION['user']->hasDroit('delete', 'com_produit')) {
                include_once ("produit_photo/controleur.php");
            }
            break;
        case 'deleteProduitPhotos' :
            if ($_SESSION['user']->hasDroit('delete', 'com_produit')) {
                include_once ("produit_photo/controleur.php");
            }
            break;
		case 'orderPhoto' :
            if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
                include_once ("produit_photo/controleur.php");
            }
            break;	
        
    }
}