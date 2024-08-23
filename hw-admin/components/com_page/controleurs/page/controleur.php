<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addPage':
            addPage($_POST);
            break;
        case 'editPage':
            editPage($_POST);
            break;
        case 'duplicatePage':
            duplicatePage($_POST);
            break;
        case 'deletePage':
            deletePage($_POST);
            break;
        case "enablePage":
            enablePage($_POST);
            break;
    }
}

function addPage($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildPage($data)->add() == 1) {
			seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function editPage($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildPage($data, $data['id'])->edit() == 1) {
			seo();
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function deletePage($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $id = $data["id"];
        $page = page::find($id, $_SESSION["langue"]);

        if ($page->delete() == 1) {
            if (file_exists("../../../images/pages/" . $page->getPhoto())) {
                @unlink("../../../images/pages/" . $page->getPhoto());
            }
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- dupliquerPage -------------------------------- */
function duplicatePage($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $duplicata = page::find($data["id"], $_SESSION["langue"]);


        $photo = "";
        if ($duplicata->getPhoto() != "") {
            $image = "../../../images/pages/" . $duplicata->getPhoto();
            $image_copy = "../../../images/pages/copy-" . $duplicata->getPhoto();
            @copy($image, $image_copy);
            $duplicata->setPhoto("copy-" . $duplicata->getPhoto());
        }
        if ($duplicata->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function enablePage($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $page = page::find($data['id'], $_SESSION["langue"]);

        $page->setActive($data['state'] == "oui" ? 0 : 1);
        if ($page->enable() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function validatePage($data = array(), $indices = array())
{
    foreach ($indices as $indice) {
        if (!isset($data[$indice]) || empty($data[$indice])) {
            return false;
        }
    }
    return true;
}

function buildPage($data, $id = null)
{
    $page = new page();
    $photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/pages/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $page->setId($id);
        if (isset($photo[0])) {
            $page->setPhoto($photo[0]);
			//echo $photo[0];
            if (file_exists("../../../../images/pages/" . page::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/pages/" . page::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $page->setPhoto(page::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $page->setPhoto($photo[0]);
        } else {
            $page->setPhoto(null);
        }
    }


    $page->setActive(isset($data['active']) ? 1 : 0);
    $page->setType($data['type']);
    $page->setTitre($data['titre']);
    $page->setSeoTitre($data['seo_titre']);
    $page->setSeoDescription($data['seo_description']);
    $page->setUrl($data['url']);
    $page->setIdGalerie($data['id_galerie']);
    $page->setExterne($data['externe']);
    $page->setExtrait($data['extrait']);
    $page->setTexte($data['texte']);
    $page->setLangue($_SESSION['langue']);

    return $page;
}
