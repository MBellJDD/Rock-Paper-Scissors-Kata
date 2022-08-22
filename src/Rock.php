<?php
class RockClass
{
    private $gesture;

    public function __construct()
    {
        $this->gesture = "Rock";
    }

    public function getGesture()
    {
        return $this->gesture;
    }
}
