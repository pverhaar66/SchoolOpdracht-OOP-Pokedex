<?php

namespace Pokemon\Types;

/**
 * Description of EnergyType
 *
 * @author Peter Verhaar
 */
class EnergyType {

	private $_energyType;

	public function __construct($energyType) {
		$this->_energyType = $energyType;
	}

	public function getEnergyType() {
		return $this->_energyType;
	}

	public function setEnergyType($energyType) {
		$this->_energyType = $energyType;
	}

}
