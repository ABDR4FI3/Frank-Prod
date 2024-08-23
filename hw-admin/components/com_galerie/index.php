<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_galerie')) {
            $action = "components/com_galerie/controleurs/router.php?task=addGalerie";
            $submitName = "add";
            $submitValue = "Ajouter galerie";
            include_once("components/com_galerie/views/galerie/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_galerie')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $galerie = galerie::find($id, $_SESSION['langue']);
                $action = "components/com_galerie/controleurs/router.php?task=editGalerie";
                $submitName = "edit";
                $submitValue = "Modifier galerie";
                include_once("components/com_galerie/views/galerie/edit.php");
            }
        }
        break;
    case 'galeriephotos':
        if ($_SESSION['user']->hasDroit('add', 'com_galerie')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $galerie = galerie::find($id);
                $galerie_photos = galerie_photo::findAll($id);
                if (isset($_GET['id_photo']) && !empty($_GET['id_photo'])) {
                    $photo = galerie_photo::find(intval($_GET['id_photo']));
                }

                if (isset($photo)) {
                    $action = "components/com_galerie/controleurs/router.php?task=editGaleriePhoto";
                    $submitName = "edit";
                    $submitValue = "Modifier photo";
                } else {
                    $action = "components/com_galerie/controleurs/router.php?task=addGaleriePhoto";
                    $submitName = "add";
                    $submitValue = "Ajouter photo";
                }
                include_once("components/com_galerie/views/galerie_photo/galeriephotos.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_galerie')) {
            $galeries = galerie::findAll($_SESSION["langue"], false);
            include_once("components/com_galerie/views/galerie/list.php");
        }
        break;
}
