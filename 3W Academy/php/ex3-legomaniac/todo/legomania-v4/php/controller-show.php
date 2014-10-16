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





# si $lid est vide, je redirige l'utilisateur par sécurité
if(!$lid){
	header("location: index.php");
}

include 'functions.php';

$link = get_db_link();

/**
	============================================================
	Les infos du lego
	============================================================
*/

# on créé notre future requête SQL ...
$sql = "
	SELECT

		`legos`.`lego_id`,

		`legos`.`category_id`,

		`legos`.`name`,

		`categorys`.`name` AS category_name,

		(
			`legos`.`price` * ( `categorys`.`margin_rate` + 1 )
			+ `categorys`.`expedition_price`
		) AS total_price

	FROM  `legos`

	LEFT JOIN `categorys`
		ON `categorys`.`category_id` = `legos`.`category_id`

	WHERE `lego_id` = " . $lid . "
";

# envoi de cette requête à MySQL
$q = mysqli_query($link, $sql);

# on stocke dans un tableau provisoire les données
$data = mysqli_fetch_array($q, MYSQLI_ASSOC);

$lego = array(
	'lego_id' 		=> $data['lego_id'],
	'name' 			=> ucfirst(utf8_encode($data['name'])),
	'total_price' 	=> round($data['total_price'], 2),
	'category_id' 	=> $data['category_id'],
	'category' 		=> ucfirst($data['category_name']),
);




/**
	============================================================ $sql2 $q2 $data2
	LISTING COMMENTAIRE
	============================================================
*/
$livre = array();

$sql2 = "
	SELECT  
		`comments_lid`.`name` ,  
		`comments_lid`.`text`

	FROM  `comments_lid`
";

if($lid)
{
	$sql2 .= "
		WHERE `comments_lid`.`lego_id` = " . $lid . "
	";
}

# si $from est OK, on complète cette chaîne
$sql2 .= "
	LIMIT " . $from . " , 5
";


# envoi de cette requête à MySQL
$q2 = mysqli_query($link, $sql2);

while ($data2 = mysqli_fetch_array($q2, MYSQLI_ASSOC))
{
	$livre[] = array(
		'name'		=> ucfirst(utf8_encode($data2['name'])),
		'text' 		=> $data2['text'],
	);
}



/**
	============================================================ $sql3 $q3 $data3
	PAGINATION
	============================================================
*/

$paginations = array();

# construction de la chaine (string), qui servira de requête SQL
$sql3 = "
	SELECT
		COUNT(*) AS n
	FROM `comments_lid`
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
$data3= mysqli_fetch_array($q3, MYSQLI_ASSOC);

# calcul du nombre de pages
$n_legos = $data3['n'];
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