<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addMenuItem':
            addMenuItem($_POST);
            break;
        case 'editMenuItem':
            editMenuItem($_POST);
            break;
        case 'deleteMenuItem':
            deleteMenuItem($_POST);
            break;
    }
}

/* -------------------------------- addMenuItem -------------------------------- */
function addMenuItem($data)
{


    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        if (buildMenuItem($data)->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}


/* -------------------------------- editMenuItem -------------------------------- */
function editMenuItem($data)
{
    $indices = array("id", "titre");
    if (fieldCheck($data, $indices)) {
        if (buildMenuItem($data, $data['id'])->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}


/* -------------------------------- deleteMenuItem -------------------------------- */
function deleteMenuItem($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $menu_item = menu_item::find($data["id"]);
        if ($menu_item->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

function buildMenuItem($data, $id = null)
{

    $menu_item = new menu_item();

    if ($id) {
        $menu_item = menu_item::find($id);
    }


    $menu_item->setIdMenu($data['id_menu']);
    $menu_item->setItemParent($data['parent_id']);
    $menu_item->setType($data['type']);
    if($data['type'] != 'ext') $menu_item->setIdItem($data['id_item_'.$data['type']]);
    $menu_item->setBlank(isset($data['blank']) ? 1 : 0);
    $menu_item->setOrdre($data['ordre']);
    $menu_item->setTitre($data['titre']);
    $menu_item->setLien($data['lien']);
    $menu_item->setLangue($_SESSION['langue']);

    return $menu_item;
}
