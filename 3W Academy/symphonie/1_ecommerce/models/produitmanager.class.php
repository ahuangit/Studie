<?php

class ProduitManager
{
	private $db;



/**
FUNCTION LIE A "web/..."
*/





/**

home.php

*/

	public function getAllProduits()
	{
		$sql = "SELECT * FROM produit ";
		
		$req = $this -> db -> prepare($sql);
		$req -> setFetchMode(PDO::FETCH_CLASS , "produit");
		$req -> execute();

		return $req -> fetchAll();

	}

	public function __construct($dbVar)
	{
		$this -> db = $dbVar;
	}


/**

produits.php

*/


	public function getProduit()

	{
		$sql 		= 'SELECT * FROM produit WHERE p_id = :p_id';

		$req 		=  $this -> db -> prepare($sql);
		$req 		-> setFetchMode(PDO::FETCH_CLASS , "produit");
		$req 		-> execute(array(':p_id' => (int)$_GET['pid']));

		return $req -> fetch();
	}



	public function getCommunProduit()
	{
	
		$sql		= 	'SELECT * 
						FROM  `produit` 
						RIGHT JOIN  `produit_categorie` ON  `produit_categorie`.`id_produit` =  `produit`.`p_id` 
						WHERE  `id_categorie`

						IN (SELECT `id_categorie`
							FROM `produit_categorie`
							WHERE `id_produit` = :pid)

						ORDER BY  `produit_categorie`.`id_produit` DESC 
						LIMIT 0 , 3 ';
		
		$req 		=  $this -> db -> prepare($sql);
		$req 		-> setFetchMode(PDO::FETCH_CLASS , "produit");
		$req 		-> execute(array(':pid' => (int)$_GET['pid']));

		return $req -> fetchAll();



	}




/**

categorie.php - main.php

*/



	public function getCommentaires()
	{
		$sql 		= 'SELECT * FROM commentaire WHERE pid = :pid';

		$req 		=  $this -> db -> prepare($sql);
		$req 		-> setFetchmode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE , "commentaire");
		$req 		-> execute(array(':pid' => (int)$_GET['pid'] ));

		return $req -> fetchAll();
	}







/**

categorie.php

*/

	public function getCategorie()
	{
		$sql 		= 	'SELECT  *

						FROM  `categorie` 

						WHERE  `categories_id` = :cid
						';



		$req 		=  $this -> db -> prepare($sql);
		$req 		-> setFetchMode(PDO::FETCH_CLASS , "categorie");
		$req 		-> execute(array(':cid' => (int)$_GET['cid'] ));

		return $req -> fetch();
	}


		public function getProduitCategorie()
	{
		$sql 		= 	'SELECT *
						
						FROM  `produit` 

						RIGHT JOIN  `produit_categorie` ON  `produit_categorie`.`id_produit` =  `produit`.`p_id` 

						WHERE  `id_categorie` = :cid
						';



		$req 		=  $this -> db -> prepare($sql);
		$req 		-> setFetchMode(PDO::FETCH_CLASS , "produit");
		$req 		-> execute(array(':cid' => (int)$_GET['cid'] ));

		return $req -> fetchAll();
	}




/**

categories.php

*/

	public function getAllCategories()
	{
		$sql = "SELECT * FROM categorie ";
		
		$req = $this -> db -> prepare($sql);
		$req -> setFetchMode(PDO::FETCH_CLASS , "categorie");
		$req -> execute();

		return $req -> fetchAll();
	}



	public function getTotalProduit()
	{
		$sql 		= 'SELECT COUNT(id_produit) as nbProd, id_categorie 
						FROM  `produit` 
						RIGHT JOIN  `produit_categorie` ON  `produit_categorie`.`id_produit` =  `produit`.`p_id` 
						GROUP BY `id_categorie`

						';

		$req 		=  $this -> db -> prepare($sql);
		$req 		-> execute();

		return $req -> fetchAll();
	}

























}

