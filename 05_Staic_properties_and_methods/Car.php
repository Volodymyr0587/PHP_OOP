<?php

namespace Car;
class Car
{
    private $color = 'red';
    private $weight = 2000;
    static public $availableColors = [
        'red', 'green', 'blue', 'white',
    ];

    public static function getAvailableColors()
    {
        return self::$availableColors;
    }

    static $counter = 0;
    public $myCounter = 0;

    public function __construct()
    {
        // Car::$counter++;
        self::$counter++;
        $this->myCounter++;
    }
}

$myCar = new Car();
echo Car::$counter . ' ' . $myCar->myCounter . "<br>";

$myCar = new Car();
echo Car::$counter . ' ' . $myCar->myCounter . "<br>";

$myCar = new Car();
echo Car::$counter . ' ' . $myCar->myCounter . "<br>";

var_dump(Car::getAvailableColors());