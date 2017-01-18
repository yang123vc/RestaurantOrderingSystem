<?php

namespace OrderingSystem\Lunch\MainCourse;

use OrderingSystem\Lunch\Cuisine\ItalianCuisine;

class ItalianMainCourse extends ItalianCuisine
{
    private $price;
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->price = 16.50;
        $this->name = "Italian Main Course";
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