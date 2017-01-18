<?php
namespace OrderingSystem\Lunch\Dessert;

use OrderingSystem\Lunch\Cuisine\PolishCuisine;

class PolishDessert extends PolishCuisine
{
    private $name;
    private $price;

    public function __construct()
    {
        parent::__construct();
        $this->price = 5.75;
        $this->name = "Polish Dessert";
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