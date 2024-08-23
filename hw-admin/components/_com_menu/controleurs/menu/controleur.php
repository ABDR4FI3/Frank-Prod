<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addMenu':
            addMenu($_POST);
            break;
        case 'editMenu':
            editMenu($_POST);
            break;
        case 'deleteMenu':
            deleteMenu($_POST);
            break;
    }
}

/* -------------------------------- addMenu -------------------------------- */
function addMenu($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        $menu = new menu();
        $menu->setTitre($data['titre']);
        if ($menu->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- editMenu -------------------------------- */
function editMenu($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        $menu = new menu();
        $menu = menu::find($data['id']);
        $menu->setTitre($data['titre']);
        if ($menu->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}


/* -------------------------------- deleteMenu -------------------------------- */
function deleteMenu($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $menu = menu::find($data["id"]);
        if ($menu->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}
