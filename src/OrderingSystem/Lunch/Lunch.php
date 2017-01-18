<?php

namespace OrderingSystem\Lunch;

use OrderingSystem\Lunch\Dessert\ItalianDessert;
use OrderingSystem\Lunch\Dessert\MexicanDessert;
use OrderingSystem\Lunch\Dessert\PolishDessert;
use OrderingSystem\Lunch\MainCourse\ItalianMainCourse;
use OrderingSystem\Lunch\MainCourse\MexicanMainCourse;
use OrderingSystem\Lunch\MainCourse\PolishMainCourse;

class Lunch
{
    private $mainCourse;
    private $dessert;
    private $lunchPrice;

    public function __construct()
    {
        $this->lunchPrice = 0;
        echo "Choose a cuisine from: ". "<br>-Polish<br>-Mexican<br>-Italian<br>";

    }

    public function getLunchPrice() {

        return $this->lunchPrice;
    }

    public function chooseCuisine($cuisine) {

        if ($cuisine === "Polish") {
            $dessert = new PolishDessert();
            $this->dessert = $dessert;
            $mainCourse = new PolishMainCourse();
            $this->mainCourse = $mainCourse;
            $this->lunchPrice += $dessert->getPrice() + $mainCourse->getPrice();
            echo "You have chosen a Polish Cuisine<br>";
        }
        else if ($cuisine === "Italian") {
            $dessert = new ItalianDessert();
            $this->dessert = new $dessert;
            $mainCourse = new ItalianMainCourse();
            $this->mainCourse = new $mainCourse;
            $this->lunchPrice += $dessert->getPrice() + $mainCourse->getPrice();
            echo "You have chosen an Italian Cuisine<br>";
        }
        else if ($cuisine === "Mexican") {
            $dessert = new MexicanDessert();
            $this->dessert = $dessert;
            $mainCourse = new MexicanMainCourse();
            $this->mainCourse = $mainCourse;
            $this->lunchPrice += $dessert->getPrice() + $mainCourse->getPrice();
            echo "You have chosen a Mexican Cuisine<br>";
        }
        else {
            echo "Please, choose a correct cuisine.<br>";
        }
    }

    /**
     * @return mixed
     */
    public function getMainCourse()
    {
        return $this->mainCourse;
    }

    /**
     * @return mixed
     */
    public function getDessert()
    {
        return $this->dessert;
    }



}