<label>Nom</label>

<form action="index.php" method="POST">
	<input type="text" name="name">
	<input type="submit">
<form>

<hr>

<?php

include 'model_user.php';

$test = $_POST['name'];

if(isset($test) || empty($test))
{

echo 'nop';

}

?>

<hr>

