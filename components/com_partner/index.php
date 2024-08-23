<?php

@$task = $_GET['task'];
switch ($task)
{
    
    default :
        $page = getComponent("com_partner");
		$pageNbr = isset($_GET['page']) ? intval($_GET['page']) : 1;
		$itemPerPage = 9;
		$limit = (($pageNbr - 1) * $itemPerPage) . ", $itemPerPage";

		 $categories = categorie::findAll($_SESSION["lang"], false,false,true);
		 $temoignages = temoignage::findAll($_SESSION['lang'], true);
		 $partners = partner::findAll($_SESSION['lang'], true);
		//$categorie = categorie::find($id_categorie,$_SESSION["lang"]);
		// $posts = produit::findAll($_SESSION["lang"],true);
		// $posts = produit::findAll($_SESSION["lang"],true,false,$limit);
		// $nbrPage = ceil(count($posts)/$itemPerPage);
		// $prevLink = ($pageNbr > 1) ? $pageNbr- 1 : $pageNbr; // lien bouton précedent
		// $nextLink = $nbrPage > $pageNbr ? $pageNbr+1 : $pageNbr; // lien bouton suivant
		
        
		
        include_once("components/com_partner/views/partner/list.php");
        break;
}