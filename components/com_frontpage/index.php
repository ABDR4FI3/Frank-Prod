<?php

@$task = $_GET['task'];
switch ($task)
{
    default :
		
        $id_slider = 1;
		$slides = slide::findAll($id_slider);
		
		$whyFrank = page::find(1,$_SESSION["lang"]);

		$photos = galerie_photo::findAllByGalerie($_SESSION['lang'],1);
		$categories = categorie::findAll($_SESSION['lang'], true, true ,true);
		$temoignages = temoignage::findAll($_SESSION['lang'], true);
		$partners = partner::findAll($_SESSION['lang'], true);
		$blogs = blog::findAll($_SESSION['lang'], true);
		
		$contactPage = getComponent("com_contact");

		$productPage = getComponent("com_produit");
		$temoignagePage = getComponent("com_temoignage");
		$partnerPage = getComponent("com_partner");
		$BlogsPage = getComponent("com_blog");
		$Frank = getComponent("com_frank");
		
		
        include_once("views/frontpage/list.php");
        break;
}