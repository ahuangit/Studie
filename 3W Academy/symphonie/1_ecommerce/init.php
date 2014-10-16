<?php

# on démarre la gestion des sessions
session_start();

# on definie quelques constantes
define('VIEWS_DIR', __DIR__ . '/views/');
define('CTRLRS_DIR', __DIR__ . '/controllers/');


function __autoload($class)
{
	include 'models/' . strtolower($class) . '.class.php';
}





include 'models/get_db_link.php';
include 'models/commentaire.class.php';
include 'models/c_produit.php';
include 'models/categorie.php';

# on include la bonne view avec le bon controller
if(!isset($object)) exit('context not set !');
if(!isset($action)) exit('context not set !');

	# le controller ...
	$controllers_file = CTRLRS_DIR . $object . '/' . $action . '.php';
	if(is_file($controllers_file)) include $controllers_file;

	# la view ...
	$view_file = VIEWS_DIR . $object . '/' . $action . '.php';
	if(is_file($view_file)) include $view_file;