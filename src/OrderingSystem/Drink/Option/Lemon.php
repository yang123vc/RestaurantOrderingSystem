<?php

namespace OrderingSystem\Drink\Option;

class Lemon extends OptionAbstract
{

    public function __construct()
    {
        $this->name = "Fresh Lemon";
        $this->price = 0.3;
    }
}