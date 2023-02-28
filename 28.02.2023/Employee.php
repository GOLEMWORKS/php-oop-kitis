<?php
class Employee 
{
    public $name;
    public $age;
    public $salary;

    public function ShowName() {
        echo  $this->name;
    }

    public function CheckAge() {
        if($this->age > 18) {
            return "true";
        } 
        else {
            return "false";
        }
    }

    public function setName($name){
        $this->name = $name;
    }
}

$employee1 = new Employee;
$employee1->name = 'John';
$employee1->age = 16;
$employee1->salary = 1000;

$employee2 = new Employee;
$employee2->name = 'Eric';
$employee2->age = 25;
$employee2->salary = 2000;

echo( "Сумма зарплат: ".$employee1->salary + $employee2->salary."</br>");
echo( "Сумма возрастов ".$employee1->age + $employee2->age);

class User {
    public function show($str) {
        return $str."!!!";
    }
}

$user = new User;
echo ("</br>".$user->show('bebra'));

$employee2->ShowName();

echo "</br>".$employee1->CheckAge();

class Rectangle {
    public $width;
    public $height;

    public function getSquare() {
        $sqr = $this->width * $this->height;
        return $sqr;
    }

    public function getPerimeter() {
        $per = $this->width * 2 + $this->height * 2;
        return $per;
    }
}

$rect = new Rectangle;
$rect->width=15;
$rect->height=22;
echo "</br>perimeter: ".$rect->getPerimeter();
echo "</br>square: ".$rect->getSquare();

class Bombaster {
    public $name;
    public $age;

    private function isAgeCorrect($age) {
        if($age<14) {
            return true; 
        } else {
            return false;
        }
    }

    public function setAge($age) {
        if($this->isAgeCorrect($age)){
            $this->age = $age;
        } else {
            return "Ты слишком стар для бомбастера!";
        }
    }

    public function addAge($years) {
        $newAge = $this->age - $years;

        if($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        }
    }

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}

echo "</br>";
$chelik = new Bombaster('Jenya',14);
var_dump($chelik);