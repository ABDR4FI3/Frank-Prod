<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addProduit':
            addProduit($_POST);
            break;
        case 'editProduit':
            editProduit($_POST);
            break;
        case 'deleteProduit':
            deleteProduit($_POST);
            break;
        case "enableProduit":
            enableProduit($_POST);
            break;
        case 'deleteProduits':
            deleteProduits($_POST);
            break;
        case 'enableProduits':
            enableProduits($_POST);
            break;
    }
}

function addProduit($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildProduit($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editProduit($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildProduit($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteProduit($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $produit = produit::find($id, $_SESSION["langue"]);
        if ($produit->delete() == 1) {

            if (file_exists("../../../../images/produit/" . $produit->getCover())) {
                @unlink("../../../../images/produit/" . $produit->getCover());
            }
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteProduits($data)
{
    $indices = array("ids");
    if (fieldCheck($data, $indices)) {
        $photos = produit::findPhotosName($data['ids']);
        if (produit::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/produit/" . $photo)) {
                        @unlink("../../../../images/produit/" . $photo);
                    }
                }

            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enableProduit($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $produit = new produit();
        $produit->setId($data['id']);
        $produit->setActive($data['state'] == "oui" ? 0 : 1);
        if ($produit->enable() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enableProduits($data)
{
    $indices = array("ids", "active");
    if (fieldCheck($data, $indices)) {
        $data["active"] = ($data["active"] == "oui") ? 1 : 0;
        $res = produit::enableMultiple($data);
        if ($res == 1)
            echo '1';
        else
            echo '2';
    } else
        echo '0';
}



function buildProduit($data, $id = null)
{
    $produit = new produit();

    if ($id) {
        $produit = produit::find($id);
    }

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        if (!empty($produit->getPhoto())) {
            @unlink("../../../../images/produit/" . $produit->getPhoto());
        }
        $var = uploadFiles('photo', '../../../../images/produit/', array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
        $produit->setPhoto($var[0]);
    }

    $produit->setCategorie(categorie::find($data['id_categorie'],$_SESSION['langue']));
	$produit->setTitre($data['titre']);
	$produit->setDescription($data['description']);
	$produit->setPrix($data['prix']);
    $produit->setActive(isset($data['active']) ? 1 : 0);
    $produit->setDateAdd(date("Y-m-d  h:i:s"));
    $produit->setLastEdit(date("Y-m-d  h:i:s"));
    $produit->setLangue($_SESSION['langue']);

    return $produit;
}
