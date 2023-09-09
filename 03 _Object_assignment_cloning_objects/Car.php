<?php

class Car
{
    public $color = 'red';
    public $weight;
    public $year;
}

$car = new Car;

$car2 = clone $car;
var_dump($car, $car2);
var_dump($car === $car2);

echo "<br>";

$car2 = $car;
var_dump($car, $car2);
var_dump($car === $car2);