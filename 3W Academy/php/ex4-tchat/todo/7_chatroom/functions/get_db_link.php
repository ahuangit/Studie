<?php


# création d'une connection au serveur MySQL
# voir http://www.w3schools.com/php/func_mysqli_connect.asp
function get_db_link ()
{

	return mysqli_connect(
//		'192.168.1.2', 	# adresse du serveur
		'localhost', 	# adresse du serveur
		'root',			# login
		'troiswa',		# password
		'chat'			# nom de la base de donnée
	);

}

