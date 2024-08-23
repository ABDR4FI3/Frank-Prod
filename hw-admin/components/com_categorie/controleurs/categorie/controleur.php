<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addCategorie':
            addCategorie($_POST);
            break;
        case 'editCategorie':
            editCategorie($_POST);
            break;
        case 'deleteCategorie':
            deleteCategorie($_POST);
            break;
        case "enableCategorie":
            enableCategorie($_POST);
            break;
        
    }
}

function addCategorie($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildCategorie($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editCategorie($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildCategorie($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteCategorie($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $categorie = categorie::find($id, $_SESSION["langue"]);
        if ($categorie->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enableCategorie($data)
{
    $indices = array("id", "state");
    if (validateCategorie($data, $indices)) {
        $categorie = categorie::find($data['id'], $_SESSION["langue"]);
        $categorie->setActive($data['state'] == "oui" ? 0 : 1);
        if ($categorie->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function validateCategorie($data = array(), $indices = array())
{
    foreach ($indices as $indice) {
        if (!isset($data[$indice]) || empty($data[$indice])) {
            return false;
        }
    }
    return true;
}

function buildCategorie($data, $id = null)
{
    $categorie = new categorie();
	$photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/categories/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $categorie->setId($id);
        if (isset($photo[0])) {
            $categorie->setPhoto($photo[0]);
			//echo $photo[0];
            if (file_exists("../../../../images/categories/" . categorie::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/categories/" . categorie::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $categorie->setPhoto(categorie::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $categorie->setPhoto($photo[0]);
        } else {
            $categorie->setPhoto(null);
        }
    }

    $categorie->setActive(isset($data['active']) ? 1 : 0);
    $categorie->setOrdre($data['ordre']);
    $categorie->setTitre($data['titre']);
    $categorie->setSeoTitre($data['seo_titre']);
    $categorie->setSeoDescription($data['seo_description']);
    $categorie->setParent($data['parent']);
    $categorie->setDateAdd(date("Y-m-d"));
    $categorie->setLastEdit(date("Y-m-d"));
    $categorie->setLangue($_SESSION['langue']);

    return $categorie;
}
