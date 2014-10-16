<?php

namespace Noe;

class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function marcher()
    {
        return 'je sais marcher';
    }

    public function crier()
    {
        return 'je sais crier';
    }

    public function  __toString()
    {
        return 'je m\'appelle ' . $this->name . '.';
    }

    protected function sleep()
    {
        return 'je dors';
    }

}
