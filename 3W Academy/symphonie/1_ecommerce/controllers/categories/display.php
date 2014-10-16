<?php


$produitManager = New ProduitManager($db);

$allcategories	= $produitManager -> getAllCategories();
$totalproduit	= $produitManager -> getTotalProduit();


$total 	= array();

foreach($totalproduit as $tp)
{
	$cid = $tp['id_categorie'];
	$total[$cid] = round($tp['nbProd']);
}