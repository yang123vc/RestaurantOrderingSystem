<?php

namespace OrderingSystem\Lunch\Cuisine;


class MexicanCuisine extends CuisineAbstract
{
    public function __construct()
    {
        $this->cuisine = "Mexican Cuisine";
        $this->desc = "In addition to staples, such as corn and chile peppers,
         native ingredients include tomatoes, squashes, avocados, cocoa and vanilla";
    }
}