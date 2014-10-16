<?php
include 'db-connect.php';
include 'functions.php';


session_start();

$_SESSION['user_id'] = 0;

if(!isset($_POST['email']) || (!isset($_POST['email'])	))
	{
	header("location: auth.php?error=variables_not_set");
	exit;
}