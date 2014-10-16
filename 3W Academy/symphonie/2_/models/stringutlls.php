<?php

class StringUtils
{

	private $value;
	

	public function __construct($string)
	{
		$this -> value = $string;
	}
/**
	
	4) FUNCTION GET & SET

*/


	public function getValue()
	{
		return $this -> value;
	}

	public function setValue($string)
	{
		$this -> value = $string;
		return $this;
	}


/**
	
	FUNCTION
*/


	public function getLenght()
	{
		return strlen ($this -> value);
	}
	
	public function concat($ConcatValue)
	{
		$this -> value .= $ConcatValue;
	}

	
	public function startWith($string)
	{
		$start = strpos($this -> value, $string);
		
		if($start === 0)
		{
			return "oui";
		}
		
		else
		{
			return "non";
		}
	}


	public function endsWith($string)
	{
		$start = strrpos($this -> value, $string);
		
		if($start === 0)
		{
			return "oui";
		}
		
		else
		{
			return "non";
		}
	}



	public function __toString()
	{
		return $this -> getValue();
	}


	public function isInside($string)
	{
		$pos = strpos($this -> value, $string);

		if($pos == false)
		{
			return "non";
		}
		return "oui";
	}	


	public function removeChar()
	{
		$this -> value = substr($this -> value, 0 , -1);
	}

	public function removeNChar($pos)
	{
		$start 	= substr($this -> value, 0 , $pos);
		$end 	= substr($this -> value, $pos+1 , $this -> getLenght() );
		
		$this -> value = $start.$end;
	}
}



/**

	CODE !

*/
$s = new stringUtils('0123456789');

$s -> concat(' hello world');
$s -> startWith('hell');
$s -> endsWith('world');




$s -> removeNChar(7);


echo $s;
