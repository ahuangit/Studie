<?php


//die(var_dump(strrchr('photo.jpg', '.') ));


if (isset($_POST))
{

	if(isset($_POST['titre']) && !empty($_POST['titre']) && 
	isset($_POST['description']) && !empty($_POST['description']) && 
	isset($_POST['prix']) && !empty($_POST['prix'])	&&
	isset($_FILES['image']) && !empty($_FILES['image']) )
	{
		if ($_FILES['image']['error'] === 0)
		{
			$extensions_valides = array('jpg' , 'jpeg' , 'gif' , 'png' );
			$extension_upload	= strtolower(substr(strrchr($_FILES['image']['name'], '.') ,1) );

			if ( in_array($extension_upload, $extensions_valides) )
			{
				$nom = str_replace(' ', '-', $_POST['titre']) . '-' . uniqid();
				$nom = $nom . strrchr($_FILES['image']['name'], '.');

				$resultat = move_uploaded_file($_FILES['image']['tmp_name'], UPLOAD_DIR.$nom);
				if ($resultat)
				{
					$produit = new Produit();
					$produit->hydrate($_POST);
					$produit->setImage($nom);

					$produitManager = new ProduitManager($db);
					$produitManager->getNewProduit($produit);
				}
			}
		}

	header('Location:new_produit.php');

	}
}
else
{
	header('Location:new_produit.php');
}