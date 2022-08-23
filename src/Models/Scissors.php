<?php

namespace App\Models;

use App\Models\Gesture;

class Scissors extends Gesture
{

    public function __construct()
    {
        $this->type = "Scissors";
    }
}
