<?php

if (!isset($_GET['idc']) || empty($_GET['idc']))
{
	header("Location:main.php");
}

$categorieManager = new CategorieManager($db);
$categorie = $categorieManager->getCategorie($_GET['idc']);

if ($categorie == false)
{
	header("Location:main.php");
}

$produits = $categorieManager->getAllProducts($_GET['idc']);