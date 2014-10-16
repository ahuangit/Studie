<?php

class Commentaire
{

	private $id;

	private $auteur;
	
	private $contenu;

	private $datecommentaire;

	private $note;

	private $id_produit;

	public function __construct()
	{
		$date = new DateTime('now');
		$this->datecommentaire = $date->format('Y-m-d h:i:s');
	}

	public function getId()
	{
		return $this->id;
	}

	public function getAuteur()
	{
		return $this->auteur;
	}

	public function getContenu()
	{
		return $this->contenu;
	}

	public function getDatecommentaire()
	{
		return $this->datecommentaire;
	}

	public function getNote()
	{
		return $this->note;
	}

	public function getIdProduit()
	{
		return $this->id_produit;
	}

	public function setAuteur($auteur)
	{
		$this->auteur = $auteur;
	}

	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}

	public function setDatecommentaire($datecommentaire)
	{
		$this->datecommentaire = $datecommentaire;
	}

	public function setNote($note)
	{
		$this->note = $note;
	}

	public function setIdProduit($id_produit)
	{
		$this->id_produit = $id_produit;
	}

	public function hydrate($data)
	{
		$this->auteur = $data['auteur'];
		$this->note = $data['score'];
		$this->contenu = $data['contenu'];
		$this->id_produit = $data['id_produit'];
	}
}