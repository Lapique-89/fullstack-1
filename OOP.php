<?php

class Car {

    public $brand;
    public $model;
    public $year;
//protected только внутри класса или наследуемых классов
    public function __construct($b, $m, $y) {
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
    }

    public function drive() {
        echo "$this->brand  $this->model  driving<br>";
    }

}

$audi = new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020);
//$another_car = new Car();
$vesta->year = 2016;
$audi->drive();//вызов метода
$vesta->drive();
//$another_car->drive();