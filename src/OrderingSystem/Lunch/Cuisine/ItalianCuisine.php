<?php

namespace OrderingSystem\Lunch\Cuisine;


class ItalianCuisine extends CuisineAbstract
{
    public function __construct()
    {
        $this->cuisine = "Italian Cuisine";
        $this->desc = "Italian cuisine is characterized by its simplicity,
         with many dishes having only four to eight ingredients.";
    }
}