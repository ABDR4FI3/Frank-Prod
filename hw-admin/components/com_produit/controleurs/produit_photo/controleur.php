<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addProduitPhoto':
            addProduitPhoto($_POST);
            break;
        case 'editProduitPhoto':
            editProduitPhoto($_POST);
            break;
        case 'deleteProduitPhoto':
            deleteProduitPhoto($_POST);
            break;
        case 'orderPhoto':
            orderPhoto($_POST);
            break;
    }
}

function addProduitPhoto($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildProduitPhoto($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editProduitPhoto($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        if (buildProduitPhoto($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteProduitPhoto($data)
{
    $indices = array("id");
    if (validateProduitPhoto($data, $indices)) {
        $id = $data["id"];
        $produit_photo = produit_photo::find($id, $_SESSION["langue"]);
        if ($produit_photo->delete() == 1) {
            if (file_exists("../../../../images/produit/" . $produit_photo->getPhoto())) {
                @unlink("../../../../images/produit/" . $produit_photo->getPhoto());
            }
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteProduitPhotos($data)
{
    $indices = array("ids");
    if (validateProduitPhoto($data, $indices)) {
        $photos = reference::findPhotosName($data['ids']);
        if (produit_photo::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/produit/" . $photo)) {
                        @unlink("../../../../images/produit/" . $photo);
                    }
                }

            echo "1";
        } else
            echo "2";
    } else {
        echo "0";
    }
}

function validateProduitPhoto($data = array(), $indices = array())
{
    foreach ($indices as $indice) {
        if (!isset($data[$indice]) || (empty($data[$indice]) && $data[$indice] != 0)) {
            return false;
        }
    }
    return true;
}

function buildProduitPhoto($data, $id = null)
{
    $produit_photo = new produit_photo();
    $photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/produit/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $produit_photo->setId($id);
        if (isset($photo[0])) {
            $produit_photo->setPhoto($photo[0]);
            if (file_exists("../../../../images/produit/" . produit_photo::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/produit/" . produit_photo::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $produit_photo->setPhoto(produit_photo::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $produit_photo->setPhoto($photo[0]);
        } else {
            $produit_photo->setPhoto(null);
        }
    }

    $produit_photo->setProduit(produit::find($data['id_produit'],$_SESSION['langue']));
    $produit_photo->setOrdre($data['ordre']);
    $produit_photo->setTitre($data['titre']);
    $produit_photo->setDateAdd(date("Y-m-d  h:i:s"));
    $produit_photo->setLastEdit(date("Y-m-d  h:i:s"));
    $produit_photo->setLangue($_SESSION['langue']);

    return $produit_photo;
}

function orderPhoto($data)
{
    $indices = array("ordre");
    if (validateProduitPhoto($data, $indices)) {
        $id_photos = $data["ordre"];
        $i = 1;
        foreach ($id_photos as $id_photo) {
            $photo = produit_photo::find($id_photo, $_SESSION["langue"]);
            $photo->setOrdre($i);
            $photo->edit();
            $i++;
        }
        echo "1";
    } else {
        echo "0";
    }
}
