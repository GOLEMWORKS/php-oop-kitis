<?php
class Employee {
    public $name;
    public $age;
    public $salary;
}

$employe1 = new Employee;
$employee1 -> name = 'John';
$employee1 -> age = 26;
$employee1 -> salary = 1000;

$employe2 = new Employee;
$employee2 -> name = 'Eric';
$employee2 -> age = 25;
$employee2 -> salary = 2000;

echo( $employee1->salary + $employee2->salary);