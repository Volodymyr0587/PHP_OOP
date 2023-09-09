<?php

//* НАСЛІДУВАННЯ ТА ТРЕЙТИ. ПЕРЕВИЗНАЧЕННЯ (Override) МЕТОДІВ

class A
{
    public $varA = 10;
    public  function hello()
    {
        echo "Hello from class A";
    }
}

trait TraitA
{
    public function hello()
    {
        echo "Hello from trait TraitA " . parent::hello();
    }
}

class B extends A
{
    use TraitA;
}

$b = new B();
$b->hello(); // Hello from trait TraitAHello from trait TraitA