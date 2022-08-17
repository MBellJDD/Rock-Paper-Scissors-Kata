<?php
class PlayerClass
{
    // Declaración de una propiedad
    public $name = '';
    public $play = ["rock", "paper", "scissors"];

    public function __construct($name, $play)
    {
        $this->name = $name;
        $this->play = $play;
    }
    // Declaración de un método
    public function getGesture()
    {
        return $this->play[rand(0, 2)];
    }
}
