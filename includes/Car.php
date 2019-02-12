<?php

// Klasser skrivs alltid med UpperCamelCase
class Car {

	public $manufacturer;
	public $model;
	protected $year;
	public $registrationNumber;
	protected $milage;

	public function __construct($manufacturer, $model, $year = null, $milage = 0) {
		$this->setManufacturer($manufacturer);
		$this->setModel($model);
		$this->setYear($year);
		$this->setMilage($milage);

		// Hämta nuvarande år, fyra siffror
		// date("Y");
	}

	public function getInfo() {
		return "<p>Jag är en {$this->getManufacturer()} {$this->getModel()} av årsmodell {$this->getYear()} med registreringsnummer {$this->getRegistrationNumber()} och har mätarställningen {$this->getMilage()}.</p>";
	}

	public function drive($km) {
		if (is_numeric($km) && $km > 0) {
			$this->milage += $km;
			// $this->milage = $this->milage + $km;  // samma som raden ovan
		}
	}

	public function getManufacturer() {
		return $this->manufacturer;
	}
	public function setManufacturer($manufacturer) {
		$this->manufacturer = $manufacturer;
	}

	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
	}

	public function getYear() {
		return $this->year;
	}
	protected function setYear($year) {
		if (is_numeric($year)) {
			$this->year = $year;
		} else {
			$this->year = date("Y");
		}
	}

	public function getRegistrationNumber() {
		return $this->registrationNumber;
	}
	public function setRegistrationNumber($registrationNumber) {
		$this->registrationNumber = $registrationNumber;
	}

	public function getMilage() {
		return number_format($this->milage, 0, ",", " ") . " km";
	}
	protected function setMilage($milage) {
		if (is_numeric($milage) && $milage > 0) {
			$this->milage = $milage;
		}
	}

}
