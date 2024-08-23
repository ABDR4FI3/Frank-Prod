<?php

@$task = $_GET['task'];
switch ($task)
{
    case "showDetails":
        if(isset($_GET["id"]) && !empty($_GET["id"])) {
            $id = intval($_GET["id"]);
            $galerie = galerie::find($id, $_SESSION["lang"]);
			$photos = galerie_photo::findAllByGalerie($_SESSION['lang'],$id);
            include_once("views/galerie/detail.php");
        }
        break;
	case "exclusive":
		$page = getComponent("com_produit&task=exclusive");
		$produits = produit::findAll($_SESSION["lang"], true, false, false, false, true);		
		include_once("views/produit/exclusive.php");

		break;
	case "estimer":
		$page = getComponent("com_produit&task=estimer");
		$categories = categorie::findAll($_SESSION["lang"], true, true);
		include_once("views/produit/estimer.php");

		break;	
    default :
		$productPerPage = 12;
		$currentPage = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
		$limit = (($currentPage - 1) * $productPerPage).", ".$productPerPage;
		$trie = isset($_SESSION['trie']) ? $_SESSION['trie'] : false;
		
        $id_page = intval($_GET["id"]);
        $id_operation = isset($_GET["op"]) ? intval($_GET["op"]) : null;
        $id_categorie = isset($_GET["cat"]) ? intval($_GET["cat"]) : null;
		$id_localisation = isset($_GET["loc"]) && !empty($_GET["loc"]) ? intval($_GET["loc"]) : 0;
        $produits = produit::search($_SESSION["lang"], $id_categorie, false, $id_operation, false, false, false, false, false, false, $limit, $trie);
		$allProduct = produit::search($_SESSION["lang"], $id_categorie, false, $id_operation);
        
		
		if(isset($_POST["home-search"])) { // Filtrer par operation - categorie - prix
            $id_operation = isset($_POST["op"]) && !empty($_POST["op"]) ? intval($_POST["op"]) : 0;
            $id_categorie = isset($_POST["cat"]) && !empty($_POST["cat"]) ? intval($_POST["cat"]) : 0;
			$id_localisation = isset($_POST["loc"]) && !empty($_POST["loc"]) ? intval($_POST["loc"]) : 0;
            $room = isset($_POST["room"]) && !empty($_POST["room"]) ? $_POST["room"] : false;
			$sdb = isset($_POST["sdb"]) && !empty($_POST["sdb"]) ? $_POST["sdb"] : false;
			$salon = isset($_POST["salon"]) && !empty($_POST["salon"]) ? $_POST["salon"] : false;
			$etat = isset($_POST["etat"]) && !empty($_POST["etat"]) ? $_POST["etat"] : false;
			
			// filtre prix
			$range = str_replace('MAD','',$_POST["prix"]);
			$t = explode('-',$range);
			$prix = intval(preg_replace('/[^0-9]/', '', $t[0])) . '-' . intval(preg_replace('/[^0-9]/', '', $t[1]));
			
			// filtre surface
			$range = str_replace('m²','',$_POST["surface"]);
			$t = explode('-',$range);
			$surface = intval(preg_replace('/[^0-9]/', '', $t[0])) . '-' . intval(preg_replace('/[^0-9]/', '', $t[1]));
			
			
			// filtre equipement
			$amenities = false;
			if(isset($_POST["equipements"]) && !empty($_POST["equipements"])){
				$amenities = implode(',',$_POST["equipements"]);
			}
			
			if(isset($_POST["ref"]) && !empty($_POST["ref"])){
				$produits = produit::search($_SESSION["lang"], false, false, false, false, false, false, false, false, $_POST["ref"], $limit, $trie);
				$allProduct = produit::search($_SESSION["lang"], false, false, false, false, false, false, false, false, $_POST["ref"]);
			}else{
				$produits = produit::search($_SESSION["lang"], $id_categorie, $id_localisation, $id_operation, $prix, $surface, $room, $sdb, $salon, $amenities, $etat, false, $limit, $trie);
				$allProduct = produit::search($_SESSION["lang"], $id_categorie, $id_localisation, $id_operation, $prix, $surface, $room, $sdb, $salon, $amenities, $etat, false);
			}
        }
		
        $page = new page($id_page, $db, $_SESSION["lang"]);
        $localisations = localisation::findAll($_SESSION["lang"], true, true);
		$categories = categorie::findAll($_SESSION["lang"], true, true);
		$operations = operation::findAll($_SESSION["lang"], true, true);
		$equipements = equipement::findAll($_SESSION['lang'], true);
		
        $pageSelection = false;
        if($id_page == getComponent("com_produit&task=selection")->getId()) {
            $pageSelection = true;
            $produits = [];
            if (isset($_COOKIE['meurice']) && !empty($_COOKIE['meurice'])) {
                $cookie = $_COOKIE['meurice'];
                $cookie = stripslashes($cookie);
                $ids = json_decode($cookie, true);
                foreach($ids as $id) {
                    $produit = produit::find($id, $_SESSION["lang"]);
                    array_push($produits, $produit);
                }
            }
			$allProduct = $produits;
        }
		
		$nbrPage = ceil(sizeof($allProduct) / $productPerPage);
		if(isset($_SESSION['view']) && $_SESSION['view'] == 'map')
			include_once("views/produit/map-list.php");
		else
        	include_once("views/produit/list.php");
        break;
}