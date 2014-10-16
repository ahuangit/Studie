<?php

if (isset($_POST))
{
	if (isset($_POST['pid']) && !empty($_POST['pid']))
	
	{
	
		if (isset($_POST['nom']) 	&& !empty($_POST['nom']) &&
			isset($_POST['comment'])&& !empty($_POST['comment']) &&
			isset($_POST['note']) 	&& preg_match("/[0-5]/", $_POST['note']))
	
		{

			$sql = 'INSERT INTO commentaire (auteur, contenu, date_c, note, pid)
					VALUES 				    (:auteur, :contenu, :date_c, :note, :pid)';

			$req = $db -> prepare($sql);
			$req -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "produit");
			$req -> execute(array(
				
				':auteur'	=>	$_POST['nom'],
				':contenu'	=>	$_POST['comment'],
				':date_c'	=>	date("Y-m-d h:i:s"),
				':note'		=>	$_POST['note'],
				':pid'		=>	$_POST['pid'],

			));
			
		}
		header('Location:produits.php?pid=' .$_POST['pid']);
	}
	
	else
	{
		header('Location:main.php');
	}

}

else
{
	header('Location:main.php');
}