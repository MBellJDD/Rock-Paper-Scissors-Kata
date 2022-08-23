<?php

namespace App\Models;

use App\Models\Gesture;

class Papper extends Gesture
{

    public function __construct()
    {
        $this->type = "Papper";
    }
}
