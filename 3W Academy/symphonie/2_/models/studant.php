<?php

/**
ORDRE DE CONSTRUCTION :

	CLASS, 			
	PROPRIETE		*PRIVATE & PUBLIC*, 
	CONSTRUCTEUR	*__construct*
	GET - SET 		*FUNCTION GET & SET
	TO STRING 		* FUNCTION "RACOURCIS" *
	/ CODE ! /		*exemple : $student1 & $student2

*/












/**
	
	1) CLASS

*/


class Student
{


/**
	
	2) PROPRIETE

*/

	private $nom;
	private $prenom;
	private $datenaissance;


/**
	
	3) CONSTRUCT

*/


/*
	public function __construct($p = NULL)
	{
		$this -> nom 			= 'nom';
		$this -> prenom 		= 'prenom';
		$this -> datenaissance 	= 1;
	}
*/

	public function __construct($lenom = NULL, 
								$leprenom = NULL, 
								$ladatenaissance = NULL)
	{
		$this -> nom 			= $lenom;
		$this -> prenom 		= $leprenom;
		$this -> datenaissance 	= $ladatenaissance;
	}







/**
	
	4) FUNCTION GET & SET

*/

/**
	FUNCTION GET
*/

	public function getNom()
	{
		return $this -> nom;
	}

	public function getPrenom()
	{
		return $this -> prenom;
	}

	public function getDatenaissance()
	{
		return $this -> datenaissance;
	}

/**
	FUNCTION SET
*/

	public function setNom($nom)
	{
		$this -> nom = $nom;
		return $this;
	}
	public function setPrenom($prenom)
	{
		$this -> prenom = $prenom;
		return $this;
	}

	public function setDatenaissance($datenaissance)
	{
		$this -> datenaissance = $datenaissance;
		return $this;
	}




/**
	
	5) TO STRING

*/

	public function __tostring()
	{
		return 	$this -> nom 	. ' ' .
				$this -> prenom . ' ' .
				$this -> datenaissance . '<br>';
	}

}	// FIN DE class




/**
	
	6) CODE !

*/

// IL A 2 METHODE D'ECRIRE DES DONNEES . ENTRE STUDENT1 ET STUDENT2

$student1 = new Student();

$student1 -> setNom('lala')
		  -> setPrenom('lolo')
		  -> setDatenaissance('01/01/1950');

echo $student1;




$student2 = new Student('coucou' , 'vacquerie' , '01/02/2000');

echo $student2;



