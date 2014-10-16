<?php

session_start();

# on nettoie la variable d'input
$lid = 0;
if( isset($_GET['lid']) and
	is_numeric($_GET['lid'])
){
	$lid = intval($_GET['lid']);
}

$from = 0;
if( isset($_GET['from']) and
	is_numeric($_GET['from'])
){
	$from = intval($_GET['from']);
}






/**
	============================================================ 
	CREATION DES COMMENTAIRES
	============================================================
*/




include 'functions.php';
$link = get_db_link();


$livre = array();

$sql = "
	SELECT  
		`comments`.`name` ,  
		`comments`.`text` 

	FROM  `comments` 
";


if($lid)
{
	$sql .= "
		WHERE `comments_lid`.`lego_id` = " . $lid . "
	";
}

# si $from est OK, on complète cette chaîne
$sql .= "
	LIMIT " . $from . " , 5
";






$q = mysqli_query($link, $sql);

while ($data = mysqli_fetch_array($q, MYSQLI_ASSOC))
{
	$livre[] = array(
		'name' => ucfirst($data['name']),
		'text' => $data['text'],
	);
}

/**
	============================================================ $sql2 $q2 $data2
	PAGINATION
	============================================================
*/

$paginations = array();

# construction de la chaine (string), qui servira de requête SQL
$sql2 = "
	SELECT
		COUNT(*) AS n
	FROM `comments_lid`
";

# si $cid est OK, on complète cette chaîne
if($lid){
	$sql2 .= "
		WHERE `lego_id` = " . $lid . "
	";
}

# envoi de cette requête à MySQL
$q2 = mysqli_query($link, $sql2);

# on stocke dans un tableau provisoire les données
$data2= mysqli_fetch_array($q2, MYSQLI_ASSOC);

# calcul du nombre de pages
$n_legos = $data2['n'];
$n_pages = ceil( $n_legos / 5 );

# on stocke dans un tableau provisoire les données utiles à la pagination
for ($i=1; $i <= $n_pages; $i++)
{
	$f = ($i - 1) * 5;
	$paginations[] = array(
		'page_number' => $i,
		'uri' => "?lid=" . $lid . "&from=" . $f,
	);
}
# ... s'il n'y a qu'une page, on "vide" (en l'écrasant) le tableau
if ($n_pages <= 1){
	$paginations = array();
}