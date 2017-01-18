<?php

namespace OrderingSystem\Lunch\MainCourse;


use OrderingSystem\Lunch\Cuisine\MexicanCuisine;

class MexicanMainCourse extends MexicanCuisine
{

    private $price;
    private $name;

    public function __construct()
    {
        parent::__construct();
        $this->price = 20;
        $this->name = "Mexican Main Course";
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