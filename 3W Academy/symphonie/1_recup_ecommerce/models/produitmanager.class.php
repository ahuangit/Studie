<?php

class ProduitManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getAllProducts()
	{
		$sql = 'SELECT * FROM produit';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "produit");
		$req->execute();
		return $req->fetchAll();
	}

	public function getProduit($id_produit)
	{
		$sql = 'SELECT * FROM produit WHERE id = :id';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "produit");
		$req->execute(array(':id' => (int)$id_produit));
		return $req->fetch();
	}

	public function getCrossSelling($id_produit)
	{
		$sql = 'SELECT DISTINCT(id_produit), p.*
				FROM produit p
				LEFT JOIN produit_categorie ON id_produit = id
				WHERE id_categorie IN (
					SELECT id_categorie
					FROM produit_categorie
					WHERE id_produit = :idp
					)
				AND id_produit != :idp
				ORDER BY id DESC
				LIMIT 3';

		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "produit");
		$req->execute(array(':idp' => (int)$id_produit));
		return $req->fetchAll();
	}



/**

*/

	public function getNewProduit($produit)
	{
		$sql = 'INSERT INTO produit (titre, description, prix, image)
			VALUES 					(:titre, :description, :prix, :image)';
			$req = $this->db->prepare($sql);
			$req->execute(array(
				':titre' 	  	=> $produit->getTitre(),
				':description' 	=> $produit->getDescription(),
				':prix' 		=> $produit->getPrix(),
				':image' 		=> $produit->getImage(),

			));
	}
}