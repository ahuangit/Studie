<?php

$categorieManager = new CategorieManager($db);
$categories = $categorieManager->getAllCategorie();

$nbProd = $categorieManager->getNbProduitByCategorie();

$nbProduitsIncateg = array();

foreach($nbProd as $m)
{
	$nbProduitsIncateg[$m['id_categorie']] = $m['nbProd'];
}