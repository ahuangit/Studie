<?php

if (!isset($_GET['idp']) || empty($_GET['idp']))
{
	header("Location:main.php");
}

$produitManager = new ProduitManager($db);
$produit = $produitManager->getProduit($_GET['idp']);


if ($produit == false)
{
	header("Location:main.php");
}





/**

*/


$commentaireManager = new CommentaireManager($db);
$commentaires = $commentaireManager->getAllCommentaire($_GET['idp']);

$moyenne = $commentaireManager->getMoyenne($_GET['idp']);


/**

*/


$categorieManager = new CategorieManager($db);
$categories = $categorieManager->getCategorieByIdProduit($_GET['idp']);
$tabCat = array();

foreach($categories as $c)
{
	$tabCat[] = $c->getId();
}

$crossSelling = $produitManager->getCrossSelling($_GET['idp']);