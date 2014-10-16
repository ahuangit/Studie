<?php

# on nettoie les variables d'input
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
===================================================
LOGIN
===================================================
*/
$link = mysqli_connect(
	'localhost', 	# adresse du serveur
	'root',			# login
	'troiswa',		# password
	'legomania'		# nom de la base de donnée
);






/**
===================================================
	EXPERIMENTATION
===================================================
*/










/**
===================================================
	AFFICHAGE DES ARTICLES CATEGORIES - NOM - PRIX
===================================================
*/



$lego = array();

# on créé le premier morceau de la chaine (string)
# de notre future requête SQL ...
$sql2 = "
	SELECT
		`legos`.`name`,
		(`categorys`.`name`) AS category,
		
		(
			( `legos`.`price` * `categorys`.`margin_rate` )
			+ `categorys`.`expedition_price`
		) AS total_price

	FROM  `legos`
	LEFT JOIN `categorys`
		ON `categorys`.`category_id` = `legos`.`category_id`
";

# si $lid est OK, on complète cette chaîne
if($lid){
	$sql2 .= "
		WHERE `legos`.`lego_id` = " . $lid . "
	";
}

# si $from est OK, on complète cette chaîne
$sql2 .= "
	LIMIT " . $from . " , 1
";

# envoi de cette requête à MySQL
$q2 = mysqli_query($link, $sql2);

# on stocke dans un tableau provisoire les données
while ($data = mysqli_fetch_array($q2, MYSQLI_ASSOC))
{
	$lego[] = array(
		'name' 		=> ucfirst($data['name']),
		'price' 	=> round($data['total_price'], 2),
		'category'	=> ucfirst($data['category']),
	);
}

/**
===================================================
	PAGINATION
===================================================
*/

$paginations = array();

# construction de la chaine (string), qui servira de requête SQL
$sql3 = "
	SELECT
		COUNT(*) AS n
	FROM `legos`
";
# si $cid est OK, on complète cette chaîne
if($lid){
	$sql3 .= "
		WHERE `lego_id` = " . $lid . "
	";
}

# envoi de cette requête à MySQL
$q3 = mysqli_query($link, $sql3);

# on stocke dans un tableau provisoire les données
$data = mysqli_fetch_array($q3, MYSQLI_ASSOC);

# calcul du nombre de pages
$n_legos = $data['n'];
$n_pages = ceil( $n_legos );

# on stocke dans un tableau provisoire les données utiles à la pagination
for ($i=1; $i <= $n_pages; $i++)
{
	$lid = ($i - 1) ;
	$paginations[] = array(
		'page_number' => $i,
		'uri' => "?lid=" . $lid ,
	);
}
# ... s'il n'y a qu'une page, on "vide" (en l'écrasant) le tableau
if ($n_pages <= 1){
	$paginations = array();
}
