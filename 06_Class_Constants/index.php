<?php

class Car
{
    public $color;
    public $manufacturer;

    const MANUFACTURER_BMW = 'BMW';
    const MANUFACTURER_TESLA = 'Tesla';
    const MANUFACTURER_MERCEDES = 'Mercedes';
    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
    }
}

$myCar = new Car(Car::COLOR_GREEN, Car::MANUFACTURER_MERCEDES);

var_dump($myCar);