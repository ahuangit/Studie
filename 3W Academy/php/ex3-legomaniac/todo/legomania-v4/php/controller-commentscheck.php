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

if( empty($comment))
{
	header("location: comments.php?error=Say something !");
	exit;
}


# on créé notre requête SQL ...
$sql = "

	INSERT INTO  `comments`
	(
		`name`,
		`text`
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
header("location: comments.php");