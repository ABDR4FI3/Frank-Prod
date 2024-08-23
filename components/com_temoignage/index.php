<?php

@$task = $_GET['task'];
switch ($task)
{
    default :
        $page = getComponent("com_temoignage");
        $temoignages = temoignage::findAll($_SESSION['lang'], true, true);
               
        include_once("components/com_temoignage/views/temoignage/list.php");
        break;
}