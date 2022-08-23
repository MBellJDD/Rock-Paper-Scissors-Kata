<?php

namespace App\Models;

class Player
{

    private $gesture;

    public function getGesture()
    {
        return $this->gesture;
    }

    public function chose(string $gesture)
    {
        if ($gesture == "Rock") {
            $this->gesture = new Rock;
        }

        if ($gesture == "Scissors") {
            $this->gesture = new Scissors;
        }
        if ($gesture == "Papper") {
            $this->gesture = new Papper;
        }
    }
}
