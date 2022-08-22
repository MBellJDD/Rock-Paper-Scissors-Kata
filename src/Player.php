<?php

namespace App;

class PlayerClass
{
    // Declaración de una propiedad
    public $name = '';

    public function __construct()
    {
    }
    // Declaración de un método
    public function getGesture()
    {
        return $this->play[rand(0, 2)];
    }
}
