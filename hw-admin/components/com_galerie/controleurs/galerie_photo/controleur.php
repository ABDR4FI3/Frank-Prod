<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addGaleriePhoto':
            addGaleriePhoto($_POST);
            break;
        case 'editGaleriePhoto':
            editGaleriePhoto($_POST);
            break;
        case 'deleteGaleriePhoto':
            deleteGaleriePhoto($_POST);
            break;
        case 'orderPhoto':
            orderPhoto($_POST);
            break;
    }
}

function addGaleriePhoto($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildGaleriePhoto($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editGaleriePhoto($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        if (buildGaleriePhoto($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteGaleriePhoto($data)
{
    $indices = array("id");
    if (validateGaleriePhoto($data, $indices)) {
        $id = $data["id"];
        $galerie_photo = galerie_photo::find($id, $_SESSION["langue"]);
        if ($galerie_photo->delete() == 1) {
            if (file_exists("../../../../images/galerie/" . $galerie_photo->getPhoto())) {
                @unlink("../../../../images/galerie/" . $galerie_photo->getPhoto());
            }
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteGaleriePhotos($data)
{
    $indices = array("ids");
    if (validateGaleriePhoto($data, $indices)) {
        $photos = reference::findPhotosName($data['ids']);
        if (galerie_photo::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/galerie/" . $photo)) {
                        @unlink("../../../../images/galerie/" . $photo);
                    }
                }

            echo "1";
        } else
            echo "2";
    } else {
        echo "0";
    }
}

function validateGaleriePhoto($data = array(), $indices = array())
{
    foreach ($indices as $indice) {
        if (!isset($data[$indice]) || (empty($data[$indice]) && $data[$indice] != 0)) {
            return false;
        }
    }
    return true;
}

function buildGaleriePhoto($data, $id = null)
{
    $galerie_photo = new galerie_photo();
    $photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/galerie/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $galerie_photo->setId($id);
        if (isset($photo[0])) {
            $galerie_photo->setPhoto($photo[0]);
            if (file_exists("../../../../images/galerie/" . galerie_photo::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/galerie/" . galerie_photo::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $galerie_photo->setPhoto(galerie_photo::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $galerie_photo->setPhoto($photo[0]);
        } else {
            $galerie_photo->setPhoto(null);
        }
    }

    $galerie_photo->setGalerie($data['id_galerie']);
    $galerie_photo->setOrdre($data['ordre']);
    $galerie_photo->setTitre($data['titre']);
    $galerie_photo->setDateAdd(date("Y-m-d  h:i:s"));
    $galerie_photo->setLastEdit(date("Y-m-d  h:i:s"));
    $galerie_photo->setLangue($_SESSION['langue']);

    return $galerie_photo;
}

function orderPhoto($data)
{
    $indices = array("ordre");
    if (validateGaleriePhoto($data, $indices)) {
        $id_photos = $data["ordre"];
        $i = 1;
        foreach ($id_photos as $id_photo) {
            $photo = galerie_photo::find($id_photo, $_SESSION["langue"]);
            $photo->setOrdre($i);
            $photo->edit();
            $i++;
        }
        echo "1";
    } else {
        echo "0";
    }
}
