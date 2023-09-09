<?php
const BR = '<br>';

trait FlyableTrait
{
    public $a = 10;
    abstract public function fly();
    public function hello()
    {
        echo "Hello, I can fly";
    }
}

trait EngineTrait
{
    public function hello()
    {
        echo "I have an engine";
    }
}

class Plain
{
    use FlyableTrait, EngineTrait{
        FlyableTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
    }
    public function fly()
    {
        echo "I am a Plain and flying 800 km/h";
    }
}

// class Helicopter
// {
//     use FlyableTrait, EngineTrait;
//     public function fly()
//     {
//         echo "I am a Helicopter and flying 400 km/h";
//     }
// }

// class Car
// {
//     use EngineTrait;
// }

$plain = new Plain();
echo $plain->a . BR;
// $helicopter = new Helicopter();
// echo $helicopter->a . BR;
$plain->fly();
echo BR;
$plain->hello();
echo BR;
$plain->engineHello();
// $helicopter->fly();