<?php

class Categorie
{
	private $id;

	private $titre;

	private $description;

	public function getId()
	{
		return $this->id;
	}

	public function getTitre()
	{
		return $this->titre;
	}

	public function setTitre($titre)
	{
		$this->titre = $titre;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}
}