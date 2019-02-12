<?php

/** parent is none */
/** grandparents are none */
class Vehicle {
	protected $doors = 0;
	protected $wheels = 0;

	public function getInfo() {
		return "I have {$this->doors} doors and {$this->wheels} wheels.<br><br>";
	}
}


/**
 * children to Vehicle
 */

/** parent is Vehicle */
/** grandparents are none */
class Bicycle extends Vehicle {
	protected $wheels = 2;
}

/** parent is Vehicle */
/** grandparents are none */
class MotorVehicle extends Vehicle {
	protected $engine = true;
	protected $fuel = "Unknown";

	public function getInfo() {
		return "I have {$this->doors} doors, {$this->wheels} wheels and an engine using {$this->fuel}.<br><br>";
	}
}


/**
 * children to MotorVehicle
 */

/** parent is MotorVehicle */
/** grandparents are Vehicle */
class MotorCycle extends MotorVehicle {
	protected $wheels = 2;
}

/** parent is MotorVehicle */
/** grandparents are Vehicle */
class Car extends MotorVehicle {
	protected $doors = 4;
	protected $wheels = 4;
	protected $trunk = true;
}


/**
 * children to Car
 */

/** parent is Car  */
/** grandparents are MotorVehicle, Vehicle  */
class CompactCar extends Car {
	protected $doors = 2;
	protected $fuel = "Fred Flintstone";
}

/** parent is Car  */
/** grandparents are MotorVehicle, Vehicle  */
class Van extends Car {
	protected $doors = 5;
	protected $fuel = "Rocket Fuel";
}
