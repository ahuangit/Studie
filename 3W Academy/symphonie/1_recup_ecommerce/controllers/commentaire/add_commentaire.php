<?php

if (isset($_POST))
{
	if (isset($_POST['id_produit']) && !empty($_POST['id_produit']))
	{
		if (isset($_POST['auteur']) && !empty($_POST['auteur']) &&
			isset($_POST['contenu']) && !empty($_POST['contenu']) && 
			isset($_POST['score']) && preg_match("/^[0-5]$/", $_POST['score']))
		{
			$commentaire = new Commentaire();
			$commentaire->hydrate($_POST);

			$commentaireManager = new commentaireManager($db);
			$commentaireManager->save($commentaire);
		}
		header('Location:produit.php?idp='.$_POST['id_produit']);
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