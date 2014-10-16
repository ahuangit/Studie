<?php

# création d'une connection au serveur MySQL
# voir http://www.w3schools.com/php/func_mysqli_connect.asp
	function get_db_link ()
	{

		return mysqli_connect(
			'localhost', 	# adresse du serveur
			'root',			# login
			'troiswa',		# password
			'legomania'		# nom de la base de donnée
		);

	}



# Renvoi 'true' si l'internaute est authentifié, 'false' sinon
	function is_connected ()
	{
		if(isset($_SESSION['user_id']) and $_SESSION['user_id'] == true)
		{
			return true;
		}
		return false;
	}




# Obtenir l'utilisateur connecté (ou pas)
function get_connected_user ()
{

	$not_connected_user = array(
		'user_id' => 0,
		'name' => 'Offline',
	);

	if( !isset($_SESSION['user_id']) || ($_SESSION['user_id'] == 0) )
	{
		return $not_connected_user;
	}


	$sql = "
		SELECT *
		FROM `login`
		WHERE `user_id` = " . intval($_SESSION['user_id']) . "
	";

	$link = get_db_link();

	# envoi de cette requête à MySQL
	$q = mysqli_query($link, $sql);

	# on stocke dans un tableau provisoire les données
	$data = mysqli_fetch_array($q, MYSQLI_ASSOC);

	if(empty($data))
	{
		return $not_connected_user;
	}

	return array(
		'user_id' => $data['user_id'],
		'name' => $data['name'],
	);

}

