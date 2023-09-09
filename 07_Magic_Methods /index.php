<?php

class Person 
{
    static $counter = 0;
    // public $name = "Jane";
    // private $phone = 123456;
    public $name;
    public $phone;

    // public function __construct()
    // {
    //     echo "__construct is called <br>";
    // }

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        self::$counter++;
    }

    public function __destruct()
    {
        echo "__destruct is called <br>";
    }
    public function __toString()
    {
        return "Name: $this->name. Phone: $this->phone";
    }

    public function __get($propertyName)
    {
        if ($propertyName === 'username') {
            return $this->name;
        }
        return "Property $propertyName does not exist";
    }

    public function __set($propertyName, $value)
    {
        if ($propertyName === 'username') {
            $this->name = $value;
        }
    }
    
    public function __call($name, $arguments)
    {
        if ($name === 'getMobilePhone') {
            return $this->getPhone();
        } elseif ($name === 'setMobilePhone') {
            call_user_func_array([$this, 'setPhone'], $arguments);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        echo "\"$name\" static method was called<br>";
    }

    public function __invoke()
    {
        return "Calling an object as a function. Hello from __invoke<br>";
    }

    public function __sleep()
    {
        unset($this->phone);
        return ['name'];
    }

    public function __wakeup()
    {
        echo "I am __wakeup() method";
    }

    public function __clone()
    {
        self::$counter++;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}

// $person = new Person();
// echo $person->username2;
// $person->username = "Marry";
// echo $person->name;
// echo $person->getMobilePhone();
// $person->setMobilePhone('1111111');
// echo $person->getMobilePhone();
// Person::hello();

// var_dump(is_callable($person)); // true if __invoke method implemets
// echo $person();

$person = new Person("Jane", "1234567");
// $serialized = serialize($person);

// $newPerson = unserialize($serialized);
// var_dump($newPerson);
// var_dump($newPerson === $person);

$newPerson = clone $person;
echo Person::$counter;