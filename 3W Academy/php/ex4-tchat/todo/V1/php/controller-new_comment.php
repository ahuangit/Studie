<?php
session_start();

include 'functions.php';

$link = get_db_link();








/**

	CREATION DE NOM-MESSAGE LIVRE D'OR

*/
# on nettoie les variables d'input
$name		= mysqli_real_escape_string($link, $_POST['name']);
$comment	= mysqli_real_escape_string($link, $_POST['comment']);

# on créé notre requête SQL ...
$sql = "

	INSERT INTO  `comment`
	(
		`name`,
		`comment`
	)

	VALUES
	(
		'" . $name . "',
		'" . $comment . "'
	)

";

# envoi de cette requête à MySQL
mysqli_query($link, $sql);

# redirection HTTP à la fin du traitement
header("location: index.php");