<?php

if (isset($task) && !empty($task)) {
    switch ($task) {
        case 'filterPlat':
            filterPlat($_POST);
            break;
    }
}

function filterPlat($data)
{
    global $siteURL;
    $indices = array("id");
    if (validatePlat($data, $indices)) {

        $ids_categories = array();

        if (isset($_SESSION["filter"]["categories"]) && sizeof($_SESSION["filter"]["categories"]) > 0) {
            $items = $_SESSION["filter"]["categories"];
            if (in_array($data["id"], $items)) {
                $array = array();
                foreach ($items as $item) {
                    if ($data["id"] != $item) array_push($array, $item);
                }
                $_SESSION["filter"]["categories"] = $array;
            } else {
                array_push($items, $data["id"]);
                $_SESSION["filter"]["categories"] = $items;
            }
        } else {
            $_SESSION["filter"]["categories"] = array($data["id"]);
        }
        if (sizeof($_SESSION["filter"]["categories"]) > 0) {
            $ids_categories = $_SESSION["filter"]["categories"];
        }

        $plats = array();
        if(count($ids_categories)) {
            foreach($ids_categories as $id_categorie){
                $categorie = categorie::find($id_categorie, $_SESSION["lang"]);
                $plats_array = plat::findAllByCategorie($_SESSION["lang"], $categorie->getId(), 2);
                $plats = array_merge($plats, $plats_array);
            }
        } else {
            $categories = categorie::findAll($_SESSION['lang'], true, true);
            foreach($categories as $categorie){
                $plats_array = plat::findAllByCategorie($_SESSION["lang"], $categorie->getId(), 2);
                $plats = array_merge($plats, $plats_array);
            }
        }

        ?>
        <?php if (count($plats)): ?>
            <?php $i = 1; ?>
            <div class="row colonne">
            <?php foreach($plats as $plat): ?>
                <div class="col-sm-6 plat-item">
                    <div class="plat-img">
                        <?php if($plat->getPhoto()): ?>
                            <a href="<?= $siteURL; ?>images/plats/<?= $plat->getPhoto();?>"
                               data-fancybox="gallerie_plat" data-caption="<?= $plat->getTitre();?>">
                                <div class="overlay"><i class="fa fa-cutlery"></i></div>
                                <img src="<?= $siteURL; ?>images/plats/<?= $plat->getPhoto();?>" alt="<?= $plat->getTitre();?>"/>
                            </a>
                        <?php else: ?>
                            <div class="overlay"><i class="fa fa-cutlery"></i></div>
                            <img src="<?= $siteURL; ?>images/no-image.png" alt="<?= $plat->getTitre();?>"/>
                        <?php endif; ?>
                    </div>
                    <div class="plat-text">
                        <span class="plat-prix"><?= $plat->getPrix();?> DHS</span>
                        <h3 class="plat-titre"><?= $plat->getTitre();?></h3>
                        <div class="plat-p"><?= $plat->getDescription();?></div>
                        <a class="plat-reserve add-to-cart" id="plat_<?= $plat->getId();?>" href="javascript:void(0)"><i class="fa fa-shopping-basket"></i>
                            Ajouter au panier</a>
                    </div>
                    <div class="plat-sep"></div>
                </div>
                <?php if($i > 1 && $i < count($plats) && $i%2 == 0): ?>
                    </div><div class="row colonne">
                <?php endif; ?>
                <?php $i++; endforeach; ?>
            </div>
        <?php else: ?>
            <div class="col-sm-12 alert alert-warning" style="margin-top: 20px;">
                <p style="text-align: center;">Aucun plat trouvé !</p>
            </div>
        <?php endif; ?>

        <?php
    } else {
        echo "0";
    }
}

function validatePlat($data = array(), $indices = array())
{
    foreach ($indices as $indice) {
        if (!isset($data[$indice]) || empty($data[$indice])) {
            return false;
        }
    }
    return true;
}