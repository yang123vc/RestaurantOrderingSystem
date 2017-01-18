<?php

namespace OrderingSystem\Lunch\MainCourse;

use OrderingSystem\Lunch\Cuisine\PolishCuisine;

class PolishMainCourse extends PolishCuisine
{
    private $price;
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->price = 25.50;
        $this->name = "Polish Main Course";
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