<?php

//* ТРЕЙТ В ІНШОМУ ТРЕЙТІ

trait Trait1
{
    public function method1()
    {
        echo "foo";
    }
}

trait Trait2
{
    public function method2()
    {
        echo "bar";
    }
}

trait Trait3
{
    use Trait1, Trait2;

    public function method3()
    {
        echo "baz";
    }
}

class MyClass
{
    use Trait3;
}

$a = new MyClass();
$a->method1();
$a->method2();
$a->method3();