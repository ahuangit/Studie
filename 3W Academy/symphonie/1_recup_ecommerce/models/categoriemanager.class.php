<?php

class CategorieManager
{
	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getCategorie($id_categorie)
	{
		$sql = 'SELECT * FROM categorie WHERE id = :id_categorie';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "categorie");
		$req->execute(array(':id_categorie' => (int)$id_categorie));
		return $req->fetch();
	}

	public function getAllProducts($id_categorie)
	{
		$sql = '
			SELECT p.*
			FROM produit_categorie pc
			LEFT JOIN produit p ON p.id = pc.id_produit
			WHERE pc.id_categorie = :id_categorie';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "produit");
		$req->execute(array(':id_categorie' => (int)$id_categorie));
		return $req->fetchAll();
	}

	public function getAllCategorie()
	{
		$sql = '
			SELECT *
			FROM categorie';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "categorie");
		$req->execute();
		return $req->fetchAll();
	}

	/**
	* Récupère les catégories d'un produit
	* @param integer $id_produit
	* @return object categorie
	*/
	public function getCategorieByIdProduit($id_produit)
	{
		$sql = '
			SELECT *
			FROM categorie
			LEFT JOIN produit_categorie ON id = id_categorie
			WHERE id_produit = :idp';
		$req = $this->db->prepare($sql);
		$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "categorie");
		$req->execute(array(':idp' => $id_produit));
		return $req->fetchAll();
	}

	public function getNbProduitByCategorie()
	{
		$sql = '
			SELECT id_categorie, COUNT(id_produit) as nbProd
			FROM produit_categorie
			GROUP BY id_categorie';
		$req = $this->db->prepare($sql);
		$req->execute();
		return $req->fetchAll();
	}
}