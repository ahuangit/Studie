<?php
session_start();

include 'functions.php';

$link = get_db_link();




	# on nettoie les variables d'input
$name		= mysqli_real_escape_string($link, $_POST['name']);

$sql	= "
			
		INSERT INTO  `login`
		(
			`name`
		)

		VALUES
		(
		'" . $name . "'
		)
";

# envoi de cette requête à MySQL
mysqli_query($link, $sql);

# redirection HTTP à la fin du traitement
header("location: index.php");