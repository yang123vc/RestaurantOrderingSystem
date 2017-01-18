<?php

namespace OrderingSystem\Drink;

class Tea extends DrinkAbstract {


    public function __construct()
    {
        parent::__construct();
        $this->name = "Strawberry Tea";
        $this->price = 3.5;
    }

}

