<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_page')) {
            $action = "components/com_page/controleurs/router.php?task=addPage";
            $submitName = "add";
            $submitValue = "Ajouter page";
            include_once("components/com_page/views/page/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_page')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $page = page::find($id, $_SESSION['langue']);
                $action = "components/com_page/controleurs/router.php?task=editPage";
                $submitName = "edit";
                $submitValue = "Modifier page";
                include_once("components/com_page/views/page/edit.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_page')) {
            $pages = page::findAll($_SESSION['langue']);
            include_once("components/com_page/views/page/list.php");
        }
        break;
}
