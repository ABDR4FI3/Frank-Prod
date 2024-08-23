<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_produit')) {
            $action = "components/com_produit/controleurs/router.php?task=addProduit";
            $submitName = "add";
            $submitValue = "Ajouter produit";
            include_once("components/com_produit/views/produit/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_produit')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $produit = produit::find($id, $_SESSION['langue']);
                $action = "components/com_produit/controleurs/router.php?task=editProduit";
                $submitName = "edit";
                $submitValue = "Modifier produit";
                include_once("components/com_produit/views/produit/edit.php");
            }
        }
        break;
    case 'produitphotos':
        if ($_SESSION['user']->hasDroit('add', 'com_produit')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $produit = produit::find($id);
                $produit_photos = produit_photo::findAll($id);
                if (isset($_GET['id_photo']) && !empty($_GET['id_photo'])) {
                    $photo = produit_photo::find(intval($_GET['id_photo']));
                }

                if (isset($photo)) {
                    $action = "components/com_produit/controleurs/router.php?task=editProduitPhoto";
                    $submitName = "edit";
                    $submitValue = "Modifier photo";
                } else {
                    $action = "components/com_produit/controleurs/router.php?task=addProduitPhoto";
                    $submitName = "add";
                    $submitValue = "Ajouter photo";
                }
                include_once("components/com_produit/views/produit_photo/produitphotos.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_produit')) {
            $produits = produit::findAll($_SESSION["langue"], false);
            include_once("components/com_produit/views/produit/list.php");
        }
        break;
}
