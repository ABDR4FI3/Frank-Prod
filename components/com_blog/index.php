<?php

@$task = $_GET['task'];
switch ($task)
{
    case "showDetails":
        if(isset($_GET["id"]) && !empty($_GET["id"])){
						
			$id = $_GET["id"];
            $post = blog::find($id, $_SESSION["lang"]);
			$recentPosts = blog::findAll($_SESSION["lang"],true, false, '0,3');
			$categories = categorie_blog::findAll($_SESSION["lang"],true);
			
			$page = getComponent("com_blog");
		
            include_once("components/com_blog/views/blog/detail.php");
        }
        break;
    default :
        $page = getComponent("com_blog");
		$pageNbr = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$itemPerPage = 9;
		$limit = (($pageNbr - 1) * $itemPerPage) . ", $itemPerPage";
		
		$posts = blog::findAll($_SESSION["lang"],true);
		$posts = blog::findAll($_SESSION["lang"],true,false,$limit);
		$nbrPage = ceil(count($posts)/$itemPerPage);
		$prevLink = ($pageNbr > 1) ? $pageNbr- 1 : $pageNbr; // lien bouton précedent
		$nextLink = $nbrPage > $pageNbr ? $pageNbr+1 : $pageNbr; // lien bouton suivant
		
        
		
        include_once("components/com_blog/views/blog/list.php");
        break;
}