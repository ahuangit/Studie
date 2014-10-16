<?php

$produitManager = new ProduitManager($db);
$produits = $produitManager->getAllProducts($db);

$commentaireManager = new commentaireManager($db);
$moyenne = $commentaireManager->getAllMoyenne();

$moy = array();
foreach($moyenne as $m)
{
	$moy[$m['id_produit']] = round($m['moyenne']);
}