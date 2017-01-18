<?php

namespace OrderingSystem\Drink;

use OrderingSystem\Drink\Option\OptionAbstract;

abstract class DrinkAbstract
{

    protected $name;
    protected $price;
    protected $options;

    public function __construct()
    {
        $this->options = [];
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function addOption (Option\OptionAbstract $option) {

        if (count($this->options) > 1) {
            echo "You can have only 2 additions to your drink.";
            return false;
        }
        $this->options[] = $option;
        $this->price += $option->getPrice();
        return true;
    }

}