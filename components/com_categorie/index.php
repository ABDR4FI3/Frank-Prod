<?php

@$task = $_GET['task'];
switch ($task)
{
    case "showDetails":
        if(isset($_GET["id"]) && !empty($_GET["id"])) {
			$productPerPage = 12;
			$currentPage = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
			$limit = (($currentPage - 1) * $productPerPage).", ".$productPerPage;
			$trie = isset($_SESSION['trie']) ? $_SESSION['trie'] : false;
			
			$categories = categorie::findAll($_SESSION["lang"], true, true,true);
			
            $id_categorie = intval($_GET["id"]);
			$categorie = categorie::find($id_categorie,$_SESSION["lang"]);
			$page = getComponent("com_produit");
						
			$produits = produit::search($_SESSION["lang"], $id_categorie, $limit, $trie);
			$allProduct = produit::search($_SESSION["lang"], $id_categorie);
			
			$nbrPage = ceil(sizeof($allProduct) / $productPerPage);
            include_once("components/com_produit/views/produit/list.php");
        }
        break;
}