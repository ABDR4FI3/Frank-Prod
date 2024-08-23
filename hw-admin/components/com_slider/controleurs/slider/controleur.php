<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'addSlider':
            addSlider($_POST);
            break;
        case 'editSlider':
            editSlider($_POST);
            break;
        case 'deleteSlider':
            deleteSlider($_POST);
            break;
        case 'enableSlider':
            enableSlider($_POST);
            break;
    }
}

/* -------------------------------- addSlider -------------------------------- */
function addSlider($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        $slider = new slider();
        $slider->setTitre($data['titre']);
        $slider->setActif(isset($data['actif']) ? 1 : 0);
        if ($slider->add() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}


/* -------------------------------- editSlider -------------------------------- */
function editSlider($data)
{
    $indices = array("titre");
    if (fieldCheck($data, $indices)) {
        $slider = new slider();
        $slider = slider::find($data['id']);
        $slider->setTitre($data['titre']);
        $slider->setActif(isset($data['actif']) ? 1 : 0);
        if ($slider->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- enableSlider -------------------------------- */
function enableSlider($data)
{
    $indices = array("id", "state");
    if (fieldCheck($data, $indices)) {
        $slider = new slider();
        $slider = slider::find($data['id']);
        $slider->setActif($data['state'] == "oui" ? 0 : 1);
        if ($slider->edit() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}

/* -------------------------------- deleteSlider -------------------------------- */
function deleteSlider($data)
{
    $indices = array("id");
    if (fieldCheck($data, $indices)) {
        $slider = slider::find($data["id"]);
        if ($slider->delete() == 1) {
            echo "1";
        } else {
            echo "2";
        }
    } else {
        echo "0";
    }
}
