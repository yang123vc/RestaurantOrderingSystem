<?php


namespace OrderingSystem\Lunch\Dessert;


use OrderingSystem\Lunch\Cuisine\ItalianCuisine;

class ItalianDessert extends ItalianCuisine
{
    private $price;
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->price = 2.35;
        $this->name = "Italian Dessert";
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