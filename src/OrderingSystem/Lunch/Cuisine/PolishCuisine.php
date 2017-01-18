<?php

namespace OrderingSystem\Lunch\Cuisine;

class PolishCuisine extends CuisineAbstract
{

    public function __construct()
    {
        $this->cuisine = "Polish Cuisine";
        $this->desc = "If you want to try traditional Polish cuisine, stop counting your calories. 
        Typical meals are very hearty and often contain a lot of meat.";
    }

}