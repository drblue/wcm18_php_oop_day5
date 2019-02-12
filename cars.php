<?php

require("includes/Car.php");

// Array som kommer innehålla alla våra bilar av klassen Car
$cars = [];

$car = new Car("Nissan", "Qashqai");
$car->setYear("LOLZ");
$car->setRegistrationNumber("FUO102");
$car->drive(500);
$car->drive(600); // mätarställningen borde efter detta vara 1100 km
array_push($cars, $car);

$car = new Car("Toyota", "RAV4", 2014, 80000);
$car->setRegistrationNumber("SUV4LIFE");
$car->drive(750);
$car->drive(580);
$car->drive(1200); // mätarställningen borde efter detta vara 82 530 km
array_push($cars, $car);

$car = new Car("Tesla", "Model 3", false, 500);
$car->setRegistrationNumber("LOLGAS");
$car->drive(20); // mätarställningen borde efter detta vara 520 km
array_push($cars, $car);

foreach ($cars as $car) {
	echo $car->getInfo();
}
