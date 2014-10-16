<?php


if (!isset($_GET['cid']) || empty($_GET['cid']))
	{	
		header("Location:main.php");
	}


$categorieManager	= New ProduitManager($db);

$categorie 			= $categorieManager -> getCategorie();
$produitcate		= $categorieManager -> getProduitCategorie();


if(!$categorie)
	{	
		header("Location:main.php");
	}

