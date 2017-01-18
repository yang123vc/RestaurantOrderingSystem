<?php

namespace OrderingSystem;

use OrderingSystem\Drink\CustomerDrink;
use OrderingSystem\Drink\Option\IceCubes;
use OrderingSystem\Drink\Option\Lemon;
use OrderingSystem\Drink\Tea;
use OrderingSystem\Lunch\Dessert\PolishDessert;
use OrderingSystem\Lunch\Lunch;
use OrderingSystem\Lunch\MainCourse\PolishMainCourse;

ini_set('xdebug.var_display_max_depth', 5);

require_once "src/autoload.php";

//Restaurant creating new order
$order = new Order();
//Restaurant creating new order with increasing ID
//$order2 = new Order();
echo "<br>";

//Customer ordering a tea
$tea = new Tea();
//Customer wants lemon and ice cubes as an addition to his tea
$tea->addOption(new IceCubes());   // OR/AND
$tea->addOption(new Lemon());
//Customer cannot have more than 2 additions -> appropriate message
$tea->addOption(new Lemon());

//Methods getPrice() and getName() in use for specified drink
echo "<br>";
echo "Your tea has a following name in the menu: " . $tea->getName() . ".";
echo "<br>";
echo "Your tea costs: " . $tea->getPrice() . " PLN.";
echo "<br>";

//Drink finalized and added to an appropriate order
$order->orderDrink($tea);

//Customer ordering a drink of his own - special delivery, with constant price of 5PLN
$customerDrink = new CustomerDrink("Apple juice");
$customerDrink->addOption(new IceCubes());

echo "<br>";
echo "Your custom drink has a following name: " . $customerDrink->getName() . ".";
echo "<br>";
echo "Your custom costs: " . $customerDrink->getPrice() . " PLN.";
echo "<br>";

//var_dump($tea->getOptions());
//var_dump($customerDrink->getOptions());

$order->orderDrink($customerDrink);

///////////////////////////////////////////////////////////////////////////////////////////

//Customer orders a lunch
//He can choose from one of three cuisines: Polish, Mexican and Italian
//Assumption has been made, that lunch consists of just one cuisine, so customer
//cannot choose for example Polish Main Course and Italian Dessert

$lunch = new Lunch();
$lunch->chooseCuisine("Polish");
echo "Price for a lunch is equal to: " . $lunch->getLunchPrice() . "PLN. <br>";

//Customer checking if lunch/dessert prices/names are correct
echo "Dessert name: " . $lunch->getDessert()->getName() .
    ". Dessert price: " . $lunch->getDessert()->getPrice() . "<br>";

echo "Main course name: " . $lunch->getMainCourse()->getName() .
    ". Main course price: " . $lunch->getMainCourse()->getPrice() . "<br>";

//Customers wants to know more about chosen cuisine
//echo $lunch->getMainCourse()->getDesc();

//Lunch chosen, checked and added to an appropriate order
$order->orderLunch($lunch);

//Customer checks out and is given a final bill
echo "<br>The final price for your order is equal to: " . $order->getTotalPrice() . " PLN.";

var_dump($order);


