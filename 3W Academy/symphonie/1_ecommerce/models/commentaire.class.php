<?php

class Commentaire
{

	private $id;
	private $auteur;
	private $contenu;
	private $date_c;
	private $note;
	private $pid;




/**
	FUNCTION GET
*/
	
	public function getId()
	{
		return $this -> id;
	}

	public function getAuteur()
	{
		return $this -> auteur;
	}

	public function getContenu()
	{
		return $this -> contenu;
	}

	public function getdate_c()
	{
		return $this -> date_c;
	}

	public function getNote()
	{
		return $this -> note;
	}

	public function getIdProduit()
	{
		return $this -> pid;
	}


/**
	FUNCTION SET
*/

	public function setAuteur($auteur)
	{
		$this -> auteur = $auteur;
	}

	public function setContenu($contenu)
	{
		$this -> contenu = $contenu;
	}

	public function setDate_c($date_c)
	{
		$this -> date_c = $date_c;
	}

	public function setNote($note)
	{
		$this -> note = $note;
	}

	public function setPid($pid)
	{
		$this -> pid = $pid;
	}


}







/**
	EXPERIENCE
*/