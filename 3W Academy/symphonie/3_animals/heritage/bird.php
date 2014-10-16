<?php

namespace Noe;

use Noe\Animal;

class Bird extends Animal
{
    public function voler()
    {
    	return 'je sais voler';
    }

    public function dormir()
    {
    	return $this->sleep();
    }

}
