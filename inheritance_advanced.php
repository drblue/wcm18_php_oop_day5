<?php

require("includes/VehicleAdvanced.php");

function test_classes($obj) {
	echo "Class: ";
	echo get_class($obj);
	echo "<br>";
	echo "Parent class: ";
	echo get_parent_class($obj);
	echo "<br><br>";

	echo "Is a Vehicle? ";
	if ($obj instanceof Vehicle) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a Bicycle? ";
	if ($obj instanceof Bicycle) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a MotorVehicle? ";
	if ($obj instanceof MotorVehicle) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a MotorCycle? ";
	if ($obj instanceof MotorCycle) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a Car? ";
	if ($obj instanceof Car) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a CompactCar? ";
	if ($obj instanceof CompactCar) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}

	echo "Is a Van? ";
	if ($obj instanceof Van) {
		echo "Yes!<br>";
	} else {
		echo "Nope<br>";
	}
}

$vehicle = new Vehicle();
echo "<h1>Vehicle</h1>";
var_dump($vehicle);
echo $vehicle->getInfo();
test_classes($vehicle);

$bicycle = new Bicycle();
echo "<h1>Bicycle</h1>";
var_dump($bicycle);
echo $bicycle->getInfo();
test_classes($bicycle);

$motorvehicle = new MotorVehicle();
echo "<h1>MotorVehicle</h1>";
var_dump($motorvehicle);
echo $motorvehicle->getInfo();
test_classes($motorvehicle);

$motorcycle = new MotorCycle();
echo "<h1>MotorCycle</h1>";
var_dump($motorcycle);
echo $motorcycle->getInfo();
test_classes($motorcycle);

$car = new Car();
echo "<h1>Car</h1>";
var_dump($car);
echo $car->getInfo();
test_classes($car);

$compactcar = new CompactCar();
echo "<h1>CompactCar</h1>";
var_dump($compactcar);
echo $compactcar->getInfo();
test_classes($compactcar);

$van = new Van();
echo "<h1>Van</h1>";
var_dump($van);
echo $van->getInfo();
test_classes($van);
