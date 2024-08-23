<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addGalerie':
            addGalerie($_POST);
            break;
        case 'editGalerie':
            editGalerie($_POST);
            break;
        case 'deleteGalerie':
            deleteGalerie($_POST);
            break;
        case "enableGalerie":
            enableGalerie($_POST);
            break;
        case 'deleteGaleries':
            deleteGaleries($_POST);
            break;
        case 'enableGaleries':
            enableGaleries($_POST);
            break;
    }
}

function addGalerie($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildGalerie($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editGalerie($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildGalerie($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteGalerie($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $galerie = galerie::find($id, $_SESSION["langue"]);
        if ($galerie->delete() == 1) {

            if (file_exists("../../../images/galerie/" . $galerie->getCover())) {
                @unlink("../../../images/galerie/" . $galerie->getCover());
            }
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deleteGaleries($data)
{
    $indices = array("ids");
    if (fieldCheck($data, $indices)) {
        $photos = galerie::findPhotosName($data['ids']);
        if (galerie::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/galerie/" . $photo)) {
                        @unlink("../../../../images/galerie/" . $photo);
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

function enableGalerie($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $galerie = new galerie();
        $galerie->setId($data['id']);
        $galerie->setActive($data['state'] == "oui" ? 0 : 1);
        if ($galerie->enable() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enableGaleries($data)
{
    $indices = array("ids", "active");
    if (fieldCheck($data, $indices)) {
        $data["active"] = ($data["active"] == "oui") ? 1 : 0;
        $res = galerie::enableMultiple($data);
        if ($res == 1)
            echo '1';
        else
            echo '2';
    } else
        echo '0';
}



function buildGalerie($data, $id = null)
{
    $galerie = new galerie();

    if ($id) {
        $galerie = galerie::find($id);
    }

    if (isset($_FILES['cover']) && $_FILES['cover']['name'][0] != '') {
        if (!empty($galerie->getCover())) {
            @unlink("../../../images/galerie/" . $galerie->getCover());
        }
        $var = uploadFiles('cover', '../../../images/galerie/', array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
        $galerie->setCover($var[0]);
    }

    $galerie->setTitre($data['titre']);
    $galerie->setActive(isset($data['active']) ? 1 : 0);
    $galerie->setDateAdd(date("Y-m-d  h:i:s"));
    $galerie->setLastEdit(date("Y-m-d  h:i:s"));
    $galerie->setLangue($_SESSION['langue']);

    return $galerie;
}
