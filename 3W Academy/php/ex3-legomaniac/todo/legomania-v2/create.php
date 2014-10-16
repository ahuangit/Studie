<?php 

include 'php/db-connect.php';
include 'php/controller-index.php';




$category_id 	=	$_POST["category_id"];
$name			=	$_POST["name"];
$price			=	$_POST["price"];



$create = "
INSERT INTO `legos` 	(`category_id`, `name`, `price`)
VALUES 			  	(". $category_id .",
				   	 '". $name ."',
				   	 ". $price .")
"; 

mysqli_query($link, $create);
?>







<a href="index.php" class="btn btn-success">
			<span class="glyphicon glyphicon-chevron-left"></span>
			Retour à l'acceuil
		</a>