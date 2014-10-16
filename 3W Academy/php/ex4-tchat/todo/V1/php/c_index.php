<?php

include 'functions.php';

$link = get_db_link();


$comment = array();

$sql = "
	
	SELECT *
	FROM `comment`

";

$q = mysqli_query($link, $sql);

while ($data = mysqli_fetch_array($q, MYSQLI_ASSOC))
{
	$comment[] = array(
		'comment' 	=> $data['comment'],
		'name' 		=> $data['name'],
	);
}

