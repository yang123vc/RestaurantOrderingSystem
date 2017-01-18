<?php

namespace OrderingSystem\Drink;


class CustomerDrink extends DrinkAbstract
{

    public function __construct($name)
    {
        parent::__construct();
        $this->name = $name;
        $this->price = 5;
    }

}