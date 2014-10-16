<?php

class Student

{
	private $name;
	private $datenaissance;
	private $adress;
	private $S_notes;



/**
	
	3) CONSTRUCT

*/
	public function __construct($name			= NULL, 
								$datenaissance	= NULL, 
								$adress			= NULL )
	{

		$this -> setName($name);
		$this -> setDatenaissance($datenaissance);
		$this -> setAdress($adress);
		$this -> S_notes = array();

	}



/**
	
	4) FUNCTION GET & SET

*/


/**
	FUNCTION SET
*/
	public function setName($name)
	{

		$this -> name = $name;
		return $this;

	}

	public function setDatenaissance($datenaissance)
	{

		$this -> datenaissance = $datenaissance;
		return $this;

	}

	public function setAdress($adress)
	{

		$this -> adress = $adress;
		return $this;

	}

	public function setS_Notes($S_notes)
	{

		$this -> S_notes = $S_notes;
		return $this;

	}

	
/**
	FUNCTION GET
*/
	public function getName()
	{
		return $this -> name;
	}

	public function getDatenaissance()
	{
		return $this -> datenaissance;
	}

	public function getAdress()
	{
		return $this -> adress;
	}

	public function getS_Notes()
	{
		return $this -> S_notes;
	}


/**
	
	FUNCTION
*/
	public function addNote($note)
	{

		$this -> S_notes[] = $note;

	}


	public function getAverage()
	{
		
		$fSum = 0.0;
		foreach ($this -> S_notes as $note)
		{
			$fSum += $note;
		//	IDEM QUE : $fsum = $fsum + $note
		}

		$fAverage = $fSum / count($this -> S_notes);
		$fAverage = floatval(number_format($fAverage, 2));

		return $fAverage;

	}




	public function getMin()
	{

		if (count($this -> S_notes) === 0 )
		{
			return 0;
		}

			$fMin = $this -> S_notes[0];

			foreach ($this -> S_notes as $note)
			{
				if ($note < $fMin)
				{
					$fMin = $fNote;
				}
			}

			return $fMin;

	}

	public function getMax()
	{

		if (count($this -> S_notes) === 0 )
		{
			return 0;
		}

			$fMax = $this -> S_notes[0];

			foreach ($this -> S_notes as $note)
			{
				if ($note > $fMax)
				{
					$fMax = $fNote;
				}
			}

			return $fMax;

	}




	public function __toString()
	{
		return $this -> getName() . ', born on ' . $this -> getDatenaissance() . '. Live in ' . $this -> getAdress() . '<br>';
	}


}



/**

	CODE !

*/


$student1 = new Student();


				// GETNAME / GETDATENAISSANCE / GETADRESS
$student1 = new Student('robert' , '01/02/2000' , 'lol');

$student1 -> addNote(20);
$student1 -> addNote(15);

echo $student1;

$note = $student1 -> getS_Notes();

foreach($note as $n)
{
	echo $n . '<br>';
}