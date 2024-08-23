<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addSlide':
            addSlide($_POST);
            break;
        case 'editSlide':
            editSlide($_POST);
            break;
        case 'deleteSlide':
            deleteSlide($_POST);
            break;
        case 'orderSlide':
            orderSlide($_POST);
            break;
    }
}


/* -------------------------------- editSlide -------------------------------- */
function editSlide($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        if (buildSlide($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- addSlide -------------------------------- */
function addSlide($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildSlide($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- deleteSlide -------------------------------- */
function deleteSlide($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $slide = slide::find($data["id"]);
        if ($slide->delete() == 1) {
            if (file_exists("../../../images/slides/" . $slide->getPhoto())) {
                @unlink("../../../images/slides/" . $slide->getPhoto());
            }

            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- orderSlide -------------------------------- */
function orderSlide($data)
{

    $indices = array("ordre");
    global $db;
    $cpt = 1;
    if (fieldCheck($data, $indices)) {
        foreach ($data['ordre'] as $item) {
            $SQLupdate = sprintf(
                "UPDATE " . __prefixe_db__ . "slides SET ordre=%s WHERE id=%s",
                GetSQLValueString($cpt, "int"),
                GetSQLValueString($item, "int")
            );
            if (!$db->query($SQLupdate))
                $cpt++;
        }
        echo '1';
    }
}


function buildSlide($data, $id = null)
{
    $slide = new slide();
    $photo = array();

    if (isset($_FILES['photo']) && $_FILES['photo']['name'][0] != '') {
        $photo = uploadFiles('photo', '../../../../images/slides/',  array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'));
    }

    if ($id) {
        $slide->setId($id);
        if (isset($photo[0])) {
            $slide->setPhoto($photo[0]);
            if (file_exists("../../../../images/slides/" . slide::find($id, $_SESSION['langue'])->getPhoto())) {
                @unlink("../../../../images/slides/" . slide::find($id, $_SESSION['langue'])->getPhoto());
            }
        } else {
            $slide->setPhoto(slide::find($id, $_SESSION['langue'])->getPhoto());
        }
    } else {
        if (isset($photo[0])) {
            $slide->setPhoto($photo[0]);
        } else {
            $slide->setPhoto(null);
        }
    }

    $slide->setIdSlider($data['id_slider']);
    $slide->setOrdre($data['ordre']);
    $slide->setActif(isset($data['actif']) ? 1 : 0);
    $slide->setTitre($data['titre']);
    $slide->setDescription($data['description']);
    $slide->setURL($data['url']);
    $slide->setLangue($_SESSION['langue']);

    return $slide;
}
