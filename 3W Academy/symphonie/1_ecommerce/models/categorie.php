<?php

class Categorie
{

	private $categories_id;
	private $titre;
	private $description;



/**
	FUNCTION GET
*/
	
	public function getCategories_id()
	{
		return $this -> categories_id;
	}
	
	public function getTitre()
	{
		return $this -> titre;
	}
	
	public function getDescription()
	{
		return $this -> description;
	}


/**
	FUNCTION SET
*/

	public function setCategories_id($categories_id)
	{
		$this -> categories_id = $categories_id;
	}

	public function setTitre($titre)
	{
		$this -> titre = $titre;
	}
	public function setDescription($description)
	{
		$this -> description = $description;
	}
}