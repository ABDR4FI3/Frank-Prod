<?php

@$task = $_GET['task'];
switch ($task)
{
    default :
        if ($_SESSION['user']->hasDroit('view', 'com_dashboard')) {
			$devisNumber = devis::count(false, date('Y'));
			$devisNumberInvalide = devis::count(2, date('Y'));
			
			$factureNumber = facture::count(false, date('Y'));
			$factureTotal = facture::total(false, date('Y'));
			$factureTotalEur = facture::total(false, date('Y'),'€');
			$factureTotalPound = facture::total(false, date('Y'),'£');
			$creances = facture::getCreance();
			$creancesYear = facture::getCreance(date('Y'));
			$clientNumber = client::count();
			$clientNumberYear = client::count(date('Y'));
			
			$lastFactures = facture::findAll(false, false, false, true, 5);
			$lastDevis = devis::findAll(false, true, 5);
            include_once("components/com_dashboard/views/dashboard/list.php");
        }
        break;
}