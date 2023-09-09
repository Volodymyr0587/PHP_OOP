<?php

class Car
{
    private $color = 'red';
    private $weight = 2000;

    public function __construct($color, $weight)
    {
        echo "Creating class " . get_class($this) . "<br>";
        $this->color = $color;
        $this->weight = $weight;
    }

    public function __destruct()
    {
        echo "I am destroyed: $this->color <br>";
    }

    public function get_color()
    {
        return $this->color . "<br>";
    }
}

$myCar = new Car('red', 3000);
$myCar2 = new Car('white', 2000);

echo $myCar->get_color();
echo $myCar2->get_color();

unset($myCar);
sleep(2);