<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addPartner':
            addPartner($_POST);
            break;
        case 'editPartner':
            editPartner($_POST);
            break;
        case 'deletePartner':
            deletePartner($_POST);
            break;
        case "enablePartner":
            enablePartner($_POST);
            break;
        case 'deletePartners':
            deletePartners($_POST);
            break;
        case 'enablePartners':
            enablePartners($_POST);
            break;
    }
}

function addPartner($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildBlog($data)->add() == 1) {
            seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editPartner($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildBlog($data, $data['id'])->edit() == 1) {
            seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deletePartner($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $partner = partner::find($id, $_SESSION["langue"]);
        if ($partner->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deletePartners($data)
{
    $indices = array("ids");
    if (fieldCheck($data, $indices)) {
        $photos = partner::findPhotosName($data['ids']);
        if (partner::deleteMultiple($data) == 1) {
            if ($photos)
                foreach ($photos as $photo) {
                    if (file_exists("../../../../images/partner/" . $photo)) {
                        @unlink("../../../../images/partner/" . $photo);
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

function enablePartner($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $partner = new partner();
        $partner->setId($data['id']);
        $partner->setActive($data['state'] == "oui" ? 0 : 1);
        if ($partner->enable() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enablePartners($data)
{
    $indices = array("ids", "active");
    if (fieldCheck($data, $indices)) {
        $res = partner::enableMultiple($data);
        if ($res == 1)
            echo '1';
        else
            echo '2';
    } else
        echo '0';
}


function buildBlog($data, $id = null)
{
    global $db;
    $partner = new partner();

    $photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/partner/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $partner->setId($id);
        if (isset($photo[0])) {
            $partner->setPhoto($photo[0]);
            if (file_exists("../../../../images/partner/" . partner::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/partner/" . partner::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $partner->setPhoto(partner::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $partner->setPhoto($photo[0]);
        } else {
            $partner->setPhoto(null);
        }
    }

    $partner->setActive(isset($data['active']) ? 1 : 0);
    $partner->setTitre($data['titre']);
    $partner->setExtrait($data['extrait']);
    $partner->setTexte($data['texte']);
    $partner->setDateAdd(date("Y-m-d"));
    $partner->setLastEdit(date("Y-m-d"));
    $partner->setLangue($_SESSION['langue']);

    return $partner;
}
