<?php

@$task = $_GET['task'];
switch ($task)
{
    case "showDetails":
        if(isset($_GET["id"]) && !empty($_GET["id"])){
						
			$id = $_GET["id"];
            $service = new service($id, $db, $_SESSION["lang"]);
			$services = service::findAll($_SESSION["lang"],true);
			$page = getComponent("com_service");
			
			if($id == 2) $photos = galerie_photo::findAllByGalerie($_SESSION['lang'],3);
			
            include_once("components/com_service/views/service/detail.php");
        }
        break;
    default :
        $page = getComponent("com_service");
        $services = service::findAll($_SESSION["lang"],true);
		$photos = galerie_photo::findAllByGalerie($_SESSION['lang'],2);
		
        include_once("components/com_service/views/service/list.php");
        break;
}