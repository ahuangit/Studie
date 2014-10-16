<?php

class Produit
{
	private $titre;
	private $description;
	private $prix;
	private $p_id;

		public function getDescription()
		{
			return $this -> description;
		}	

		public function setDescription($d)
		{
			$this -> description = $d;
		}


		public function getTitre()
		{
			return $this -> titre;
		}	

		public function setTitre($t)
		{
			$this -> titre = $t;
		}


		public function getPrice()
		{
			return $this -> prix;
		}
		
		// public function __construct($p)
		// {
		// 	$this -> prix = $p;
		// }


		public function getId()
		{
			return $this -> p_id;
		}
}

// $produit = new Produit();

// $produit -> setDescription('lorem');
// $produit -> setTitre('titre');
// $produit -> __construct('10');

// echo $produit -> getDescription();
// echo $produit -> getTitre();
// echo $produit -> getPrice();