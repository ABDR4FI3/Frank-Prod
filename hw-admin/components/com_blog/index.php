<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_blog')) {
            $action = "components/com_blog/controleurs/router.php?task=addPost";
            $submitName = "add";
            $submitValue = "Ajouter article";
            $categories = categorie_blog::findAll($_SESSION["langue"], true, true);
            include_once("components/com_blog/views/blog/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_blog')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $blog = blog::find($id, $_SESSION['langue']);
                $action = "components/com_blog/controleurs/router.php?task=editPost";
                $submitName = "edit";
                $submitValue = "Modifier article";
                $categories = categorie_blog::findAll($_SESSION["langue"], true, true);
                include_once("components/com_blog/views/blog/edit.php");
            }
        }
        break;
    case 'addCategorie':
        if ($_SESSION['user']->hasDroit('add', 'com_blog')) {
            $action = "components/com_blog/controleurs/router.php?task=addCategorie";
            $submitName = "add";
            $submitValue = "Ajouter catégorie";
            include_once("components/com_blog/views/categorie/add.php");
        }
        break;

    case 'editCategorie':
        if ($_SESSION['user']->hasDroit('edit', 'com_blog')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $categorie = categorie_blog::find($id, $_SESSION['langue']);
                $action = "components/com_blog/controleurs/router.php?task=editCategorie";
                $submitName = "edit";
                $submitValue = "Modifier catégorie";
                include_once("components/com_blog/views/categorie/edit.php");
            }
        }
        break;
    case 'categorie':
        if ($_SESSION['user']->hasDroit('view', 'com_blog')) {
            $categories = categorie_blog::findAll($_SESSION["langue"]);
            include_once("components/com_blog/views/categorie/list.php");
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_blog')) {
            $posts = blog::findAll($_SESSION["langue"]);
            include_once("components/com_blog/views/blog/list.php");
        }
        break;
}
