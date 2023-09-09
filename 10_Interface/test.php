<?php

//* Інтерфейси дозволяють визначити сигнатуру метода без тіла та змушують класс реалізовувати
//* метод. Дозволяє описати набір функцій, а потім приховати остаточну реалізацію цих фунцкій
//* у класі реалізації. Це дозволяє змінювати реалізацію цих фунуцій, не змінюючи способу їх
//* використання.


interface MyInterface
{
    public function method1();
}

interface MyInterface2 extends MyInterface
{
    public function method2();
}


class MyClass implements MyInterface2
{
    public function method1()
    {

    }

    public function method2()
    {

    }
}

$myClass = new MyClass();