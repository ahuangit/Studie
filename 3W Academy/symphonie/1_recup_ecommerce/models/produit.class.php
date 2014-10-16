<?php

class Produit
{

	private $id;

	private $titre;
	
	private $description;

	private $prix;

	private $image;	

/**

*/

	public function getId()
	{
		return $this->id;
	}

	public function getTitre()
	{
		return $this->titre;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPrix()
	{
		return $this->prix;
	}

	public function getImage()
	{
		return $this->image;
	}



/**

*/


	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function setTitre($titre)
	{
		$this->titre = $titre;
	}

	public function setPrix($prix)
	{
		$this->prix = $prix;
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

/**

*/
	public function getShortDescription($length = 50)
	{
		if(strlen($this->description) <= $length)
		{
			return $this->description;
		}

		$string = substr($this->description, 0, $length);
		$pos = strrpos($string, ' ');

		return substr($string,0,$pos).'...';
	}

	public function hydrate($data)
	{
		$this -> titre 		= $data['titre'];
		$this -> description= $data['description'];
		$this -> prix 		= $data['prix'];
	}
}