<?php

namespace App\Models;

use App\Models\Gesture;

class Rock extends Gesture
{

    public function __construct()
    {
        $this->type = "Rock";
    }
}
