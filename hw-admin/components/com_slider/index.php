<?php

@$task = $_GET['task'];
switch ($task) {
    case 'add':
        if ($_SESSION['user']->hasDroit('add', 'com_slider')) {
            $action = "components/com_slider/controleurs/router.php?task=addSlider";
            $submitName = "add";
            $submitValue = "Ajouter slider";
            include_once("components/com_slider/views/slider/add.php");
        }
        break;
    case 'edit':
        if ($_SESSION['user']->hasDroit('edit', 'com_slider')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $slider = slider::find($id);
                $action = "components/com_slider/controleurs/router.php?task=editSlider";
                $submitName = "edit";
                $submitValue = "Modifier slider";
                include_once("components/com_slider/views/slider/edit.php");
            }
        }
        break;
    case 'slides':
        if ($_SESSION['user']->hasDroit('add', 'com_slider')) {
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = intval($_GET['id']);
                $slider = slider::find($id);
                $slides = slide::findAll($id);
                if (isset($_GET['id_s']) && !empty($_GET['id_s'])) {
                    $s = slide::find(intval($_GET['id_s']));
                }

                if (isset($s)) {
                    $action = "components/com_slider/controleurs/router.php?task=editSlide";
                    $submitName = "edit";
                    $submitValue = "Modifier slide";
                } else {
                    $action = "components/com_slider/controleurs/router.php?task=addSlide";
                    $submitName = "add";
                    $submitValue = "Ajouter slide";
                }
                include_once("components/com_slider/views/slide/slides.php");
            }
        }
        break;
    default:
        if ($_SESSION['user']->hasDroit('view', 'com_slider')) {
            $sliders = slider::findAll();
            include_once("components/com_slider/views/slider/list.php");
        }
        break;
}
