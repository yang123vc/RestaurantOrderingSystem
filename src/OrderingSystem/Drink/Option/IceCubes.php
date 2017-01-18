<?php

namespace OrderingSystem\Drink\Option;

class IceCubes extends OptionAbstract
{

    public function __construct()
    {
        $this->name = "Ice cubes";
        $this->price = 0.25;
    }
}