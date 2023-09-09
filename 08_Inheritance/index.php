<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    protected const MY_CONSTANT = "MY_CONSTANT";

    public function getProperty2(): string
    {
        return $this->property2;
    }

    public function printText(string $text)
    {
        echo $text;
    }
}

class ChildClass extends ParentClass
{
    public $property1 = '11';
    protected $property2 = '22';

    public function getProperty2(): string
    {
        $result = parent::getProperty2();
        return "Something " . $result;
    }

    public function printText(string $text)
    {
        echo "Somthing " . $text;
    }

    public static function getConstatnt()
    {
        return self::MY_CONSTANT;
    }
}

$obj = new ChildClass();
echo $obj->property1;
echo "<br>";
echo $obj->getProperty2();

$obj->printText('asd');

echo ChildClass::getConstatnt();