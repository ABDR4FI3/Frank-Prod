<?php

@$task = $_GET['task'];
switch ($task)
{
    case "showDetails":
        if(isset($_GET["id"]) && !empty($_GET["id"])){
						
			$id = $_GET["id"];
			$id_categorie = intval($_GET["id"]);
            $post = blog::find($id, $_SESSION["lang"]);
			$produit =produit::find($id, $_SESSION["lang"]);
			$categories = categorie::findAll($_SESSION["lang"], true, true,true);
			$categorie = categorie::find($id_categorie,$_SESSION["lang"]);
			// $categorie =categorie::find($produit->getCategorie());
			// $recentPosts = blog::findAll($_SESSION["lang"],true, false, '0,3');
			// $categories = categorie_blog::findAll($_SESSION["lang"],true);
			
			$page = getComponent("com_produit");
		
            include_once("components/com_produit/views/produit/detail.php");
        }
        break;
    default :
        $page = getComponent("com_produit");
		$pageNbr = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$itemPerPage = 9;
		$limit = (($pageNbr - 1) * $itemPerPage) . ", $itemPerPage";

		$categories = categorie::findAll($_SESSION["lang"], false,false,true);
	
	     
		//$categorie = categorie::find($id_categorie,$_SESSION["lang"]);
		$posts = produit::findAll($_SESSION["lang"],true);
		$posts = produit::findAll($_SESSION["lang"],true,false,$limit);
		$nbrPage = ceil(count($posts)/$itemPerPage);
		$prevLink = ($pageNbr > 1) ? $pageNbr- 1 : $pageNbr; // lien bouton précedent
		$nextLink = $nbrPage > $pageNbr ? $pageNbr+1 : $pageNbr; // lien bouton suivant
		
        
		
        include_once("components/com_produit/views/produit/categories.php");
        break;
}