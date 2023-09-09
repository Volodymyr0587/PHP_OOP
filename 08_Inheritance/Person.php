<?php

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return "Hello from Person class";
    }

    final public function getAge()
    {
        return $this->age;
    }
}

class Employee extends Person
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }
}


class Student extends Person
{
    public $studentNumber;

    public function __construct($name, $age, $phone, $studentNumber)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNumber = $studentNumber;
    }

    public function hello()
    {
        return "Hello, I am Student $this->name. With NO: $this->studentNumber";
    }
}

$employee = new Employee("John", 27, '+1234567890', 2000);
// echo $employee->hello();
$student = new Student("Mike", 19, '+9876543210', '1415926');
echo $student->hello();