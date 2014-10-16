<?php

$sql 		= 'SELECT * FROM produit ';

$req 		=  $db -> prepare($sql);
$req 		-> setFetchMode(PDO::FETCH_CLASS , "produit");
$req 		-> execute();

$produits	=  $req -> fetchAll();






/**
	MOYENNE DE "NOTE"
*/

$sql 	= 'SELECT pid, AVG(note) as moyenne, count(id) as nb
		  FROM commentaire
	      GROUP BY pid';

$req 	=  $db -> prepare($sql);
$req 	-> execute();

$moyenne= $req -> fetchAll();
$moy 	= array();
$com 	= array();

foreach($moyenne as $m)
{
	$pid = $m['pid'];
	$moy[$pid] = round($m['moyenne']);
	$com[$pid] = $m['nb'];
}




/**
	public function getAllProduits() "models/produitmanager.class.php"
*/


$produitManager = New ProduitManager($db);
$produit		= $produitManager -> getAllProduits();