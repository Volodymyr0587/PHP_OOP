<?php

abstract class Shape
{
    public $color;

    abstract public function getArea(): float;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    public $height;
    public $base;

    public function __construct($color, $height, $base)
    {
        parent::__construct($color);
        $this->height = $height;
        $this->base = $base;
    }
    public function getArea(): float
    {
        return ($this->height * $this->base) / 2;
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return  $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape
{
    public $width;
    public $length;

    public function __construct($color, $width, $length)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->length = $length;
    }
    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}

$r = new Rectangle('red', 10, 5);
echo $r->getArea();
echo "<br>";
$c = new Circle('blue', 5);
echo $c->getArea();
echo "<br>";
$t = new Triangle('yellow', 5, 10);
echo $t->getArea();