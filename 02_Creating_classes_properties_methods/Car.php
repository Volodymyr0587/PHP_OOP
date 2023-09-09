<?php

class Car
{
    private $color;
    public $weight;
    private $year;
    private $availableColors = [
        'red', 'green', 'blue', 'yellow', 'brown', 'black',
    ];

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setColor($color)
    {
        if (in_array($color, $this->availableColors)) {
            $this->color = $color;
        } 
        // else {
        //     throw new Exception("Unavailable color.");
        // }
        
    }

    public function getColor()
    {
        return $this->color;
    }
}

$myCar = new Car;
// $myCar->color = 'red';
// $myCar->setYear(2023);
// echo $myCar->getYear();
// echo $myCar->color;
$myCar->setColor('blue');
echo $myCar->getColor();