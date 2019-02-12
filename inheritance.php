<?php

require("includes/Vehicle.php");

$vehicle = new Vehicle();
echo "<h1>Vehicle</h1>";
var_dump($vehicle);

$motorcycle = new MotorCycle();
echo "<h1>MotorCycle</h1>";
var_dump($motorcycle);

$car = new Car();
echo "<h1>Car</h1>";
var_dump($car);

$compactcar = new CompactCar();
echo "<h1>CompactCar</h1>";
var_dump($compactcar);
