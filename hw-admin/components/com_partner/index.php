<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_partner')) {
            $action = "components/com_partner/controleurs/router.php?task=addPartner";
            $submitName = "add";
            $submitValue = "Ajouter partenaire";
            include_once("components/com_partner/views/partner/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_partner')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $partner = partner::find($id, $_SESSION['langue']);
                $action = "components/com_partner/controleurs/router.php?task=editPartner";
                $submitName = "edit";
                $submitValue = "Modifier partenaire";
                include_once("components/com_partner/views/partner/edit.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_partner')) {
            $partners = partner::findAll($_SESSION["langue"]);
            include_once("components/com_partner/views/partner/list.php");
        }
        break;
}
