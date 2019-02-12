<?php

class Garage {

	/**
	 * Array of parking lots. TRUE if occupied, FALSE if free.
	 *
	 * @var array
	 */
	protected $lots = [];

	/**
	 * Total number of parking lots in the garage.
	 *
	 * @var int
	 */
	protected $total_nbr_of_lots;

	/**
	 * Create a new Garage.
	 *
	 * @param int $nbr_of_lots Number of lots that this Garage should have
	 */
	public function __construct($nbr_of_lots) {
		// $nbr_of_lots = 28
		for ($lot_nbr = 1; $lot_nbr <= $nbr_of_lots; $lot_nbr++) {
			$this->lots[$lot_nbr] = false;
		}
		$this->total_nbr_of_lots = $nbr_of_lots;
	}

	/**
	 * Is a parking lot occupied?
	 *
	 * @param int $lot_nbr Parking lot number
	 * @return boolean
	 */
	public function isOccupied($lot_nbr) {
		if (isset($this->lots[$lot_nbr])) {
			return $this->lots[$lot_nbr];
		}
		trigger_error("Den där parkingsplatsen finns minsann inte!", E_USER_WARNING);
	}

	/**
	 * Is a parking lot free?
	 *
	 * @param int $lot_nbr Parking lot number
	 * @return boolean
	 */
	public function isFree($lot_nbr) {
		// om platsen INTE är upptagen, returneras TRUE
		return ($this->isOccupied($lot_nbr) == false);
		// return !$this->isOccupied();
	}

	/**
	 * Get total number of available lots.
	 *
	 * @return int
	 */
	public function getNumberOfLots() {
		return $this->total_nbr_of_lots;
	}

	/**
	 * Mark a parking lot as occupied.
	 *
	 * @param int $lot_nbr Parking lot number
	 * @return void
	 */
	protected function allocate($lot_nbr) {
		$this->lots[$lot_nbr] = true;
	}

	/**
	 * Try parking in a parking lot.
	 *
	 * @param int $lot_nbr Parking lot number
	 * @return boolean true if successful
	 */
	public function park($lot_nbr) {
		if ($this->isFree($lot_nbr)) {
			$this->allocate($lot_nbr);
			return true;
		}
		// körs bara om den INTE var ledig
		return false;
	}

	/**
	 * Get total number of free lots in the garage.
	 *
	 * @return int
	 */
	public function getTotalFreeLots() {}

	/**
	 * Get total number of occupied lots in the garage.
	 *
	 * @return int
	 */
	public function getTotalOccupiedLots() {}
}
