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