<?php

class Vehicle {
	public $doors = 0;
	public $engine = false;
	public $wheels = 0;
	public $fuel = "Unknown";
	// public $color;
}

class MotorCycle extends Vehicle {
	public $engine = true;
	public $wheels = 2;
}

class Car extends Vehicle {
	public $doors = 4;
	public $engine = true;
	public $wheels = 4;
	public $trunk = true;
}

class CompactCar extends Car {
	public $doors = 2;
}
