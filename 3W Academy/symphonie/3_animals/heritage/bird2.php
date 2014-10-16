<?php

namespace Arche;

use Noe\Animal;

class Bird extends Animal
{
    public function voler()
    {
    	return 'je sais voler plus vite';
    }

    public function dormir()
    {
    	return $this->sleep();
    }

}
