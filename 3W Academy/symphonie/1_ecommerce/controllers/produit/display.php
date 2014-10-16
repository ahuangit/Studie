<?php

if (!isset($_GET['pid']) || empty($_GET['pid']))
	{	
		header("Location:main.php");
	}


$produitManager = New ProduitManager($db);
$produit 		= $produitManager -> getProduit();
$produitcommun	= $produitManager -> getCommunProduit();


if(!$produit)
	{	
		header("Location:main.php");
	}





/**
REMPLACER PAR 
	public function getProduit() "models/produitmanager.class.php"


$sql 		= 'SELECT * FROM produit WHERE p_id = :p_id';

$req 		=  $db -> prepare($sql);
$req 		-> setFetchMode(PDO::FETCH_CLASS , "produit");
$req 		-> execute(array(':p_id' => (int)$_GET['pid']));

$produit 	= $req -> fetch();

*//**
REMPLACER PAR 
	public function getCommentaires(); "models/produitmanager.class.php"


// récupération des commentaires

$sql 		= 'SELECT * FROM commentaire WHERE pid = :pid';

$req 		=  $db -> prepare($sql);
$req 		-> setFetchmode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE , "commentaire");
$req 		-> execute(array(':pid' => (int)$_GET['pid'] ));
$produit
$commentaires= $req -> fetchAll();
*/





/**
	MOYENNE DES NOTES D'AVIS
*/

$sql		= 'SELECT AVG( `note` ) AS moyenne FROM commentaire WHERE pid = :pid';

$req 		= $db -> prepare($sql);
$req 		-> execute(array(':pid' => (int)$_GET['pid'] ));

$moyenne	= $req -> fetch();
$moyenne 	= round($moyenne['moyenne']);



/**
	public function getCommentaires(); "models/produitmanager.class.php"
*/



$commentaires	= $produitManager -> getCommentaires();