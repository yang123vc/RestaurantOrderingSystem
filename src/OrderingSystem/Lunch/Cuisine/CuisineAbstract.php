<?php

namespace OrderingSystem\Lunch\Cuisine;

abstract class CuisineAbstract
{
    protected $cuisine;
    protected $desc;

    public function getCuisine() {
        return $this->cuisine;
    }

    public function getDesc()
    {
        return $this->desc;
    }

}