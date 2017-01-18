<?php

namespace OrderingSystem\Lunch\Dessert;


use OrderingSystem\Lunch\Cuisine\PolishCuisine;

class MexicanDessert extends PolishCuisine
{
    private $price;
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->price = 3.5;
        $this->name = "Mexican Dessert";
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}