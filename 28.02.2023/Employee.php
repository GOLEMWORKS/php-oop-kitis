<?php
class Employee {
    public $name;
    public $age;
    public $salary;
}

$employe1 = new Employee;
$employe1->name = 'John';
$employe1->age = 26;
$employe1->salary = 1000;

$employe2 = new Employee;
$employe2->name = 'Eric';
$employe2->age = 25;
$employe2->salary = 2000;

echo( $employe1->salary + $employe2->salary."</br>");

class User
	{
		public $name;
		public $age;
	}
	
	// Первый объект
	$user1 = new User; // создаем первый объект
	$user1->name = 'john'; // записываем имя
	$user1->age = 25; // записываем возраст
	
	// Второй объект
	$user2 = new User; // создаем второй объект
	$user2->name = 'eric'; // записываем имя
	$user2->age = 30; // записываем возраст
	
	// Найдем сумму возрастов:
	echo $user1->age + $user2->age; // выведет 55