<?php

namespace App\Models;

abstract class Gesture
{

    protected $type;

    public function getType()
    {
        return $this->type;
    }
}
