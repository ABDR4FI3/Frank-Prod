<?php

@$task = $_GET['task'];
switch ($task)
{
    case 'add' :
        if ($_SESSION['user']->hasDroit('add', 'com_users')) {
			$profils = profil::findAll();
			unset($user);
            $action = "components/com_users/controleurs/router.php?task=addUser";
            $submitName = "add";
            $submitValue = "Ajouter utilisateur";
            include_once("components/com_users/views/user/add.php");
        }
        break;
    case 'edit' :
        if ($_SESSION['user']->hasDroit('edit', 'com_users')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $user = user::find($id);
				$profils = profil::findAll();
                $action = "components/com_users/controleurs/router.php?task=editUser";
                $submitName = "edit";
                $submitValue = "Modifier utilisateur";
                include_once("components/com_users/views/user/edit.php");
            }
        }
        break;
	case 'profil' :
        if ($_SESSION['user']->hasDroit('view', 'com_users')) {
			$profils = profil::findAll();
			include_once("components/com_users/views/profil/list.php");
        }
        break;
	case 'editProfil' :
        if ($_SESSION['user']->hasDroit('edit', 'com_users')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $profil = profil::find($id);
                $action = "components/com_users/controleurs/router.php?task=editProfil";
                $submitName = "edit";
                $submitValue = "Modifier profil";
                include_once("components/com_users/views/profil/edit.php");
            }
        }
        break;	
	case 'addProfil' :
        if ($_SESSION['user']->hasDroit('add', 'com_users')) {
            $action = "components/com_users/controleurs/router.php?task=addProfil";
            $submitName = "add";
            $submitValue = "Ajouter profil";
            include_once("components/com_users/views/profil/add.php");
        }
        break;
	case 'droits' :
        if ($_SESSION['user']->hasDroit('edit', 'com_users')) {
			if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $profil = profil::find($id);
				$actions = array('view', 'add', 'edit', 'delete');
				$modules = module::findAll();
				
				include_once("components/com_users/views/profil/droits.php");
			}
        }
        break;	
    default :
        if ($_SESSION['user']->hasDroit('view', 'com_users')) {
            $users = user::findAll();
            include_once("components/com_users/views/user/list.php");
        }
        break;
}