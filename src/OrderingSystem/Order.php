<?php

namespace OrderingSystem;

use OrderingSystem\Drink\DrinkAbstract;
use OrderingSystem\Lunch\Lunch;

class Order
{

    private static $id;
    private $totalPrice;
    private $items=[];

    public function __construct()
    {
        self::$id++;
        $this->totalPrice = 0;
        echo "Order number: " . self::$id . "<br>";
    }

    /**
     * @return mixed
     */
    public static function getId()
    {
        return self::$id;
    }

    public function orderLunch (Lunch $lunch) {

        $this->items[] = $lunch;
        $this->totalPrice += $lunch->getLunchPrice();
    }

    public function orderDrink (DrinkAbstract $drink) {

        $this->items[] = $drink;
        $this->totalPrice += $drink->getPrice();
    }

    public function getTotalPrice() {

        return $this->totalPrice;
    }


}