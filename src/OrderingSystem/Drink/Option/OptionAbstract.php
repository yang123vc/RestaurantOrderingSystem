<?php

namespace OrderingSystem\Drink\Option;


class OptionAbstract
{

    protected $name;
    protected $price;

    public function getPrice ()
    {
        return $this->price;
    }

}