<?php

class Lot {
	protected $occupied = false;

	// should return true if Lot is occupied
	public function isOccupied() {
		return $this->occupied;
	}

	public function setAsFree() {
		$this->occupied = false;
	}
	public function setAsOccupied() {
		$this->occupied = true;
	}
}
