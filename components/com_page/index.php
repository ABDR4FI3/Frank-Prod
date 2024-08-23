<?php

@$task = $_GET['task'];
switch ($task)
{
    default :
        if(isset($_GET["id"]) && !empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            $page = page::find($id, $_SESSION["lang"]);
            include_once("components/com_page/views/page/detail.php");
        }
        break;
}