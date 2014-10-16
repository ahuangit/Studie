<?php
session_start();

include 'functions.php';

$link = get_db_link();








/**

	CREATION DE COMMENTAIRE DANS LID

*/
# on nettoie les variables d'input
$name		= mysqli_real_escape_string	($link, $_POST['name']);
$comment	= mysqli_real_escape_string	($link, $_POST['comment']);
$lid		= 							$_POST['lid'];

if( empty($comment))
{
	header ('location:show.php?lid='.$lid. '&' .'error=Say something !'. '');
	exit;
}


# on créé notre requête SQL ...
$sql = "

	INSERT INTO  `comments_lid`
	(
		`name`,
		`text`,
		`lego_id`
	)
	VALUES
	(
		'" . $name . "',
		'" . $comment . "',
		 " . $lid . "
	)

";

# envoi de cette requête à MySQL
mysqli_query($link, $sql);

# redirection HTTP à la fin du traitement
header ('location:show.php?lid='.$lid. '');
