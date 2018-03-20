<?php

namespace Pokemon\Types;

/**
 * Description of Weaknes
 *
 * @author Peter Verhaar
 */
class Weakness {

	private $_energyType;
	private $_weaknessMultiplier;

	public function __construct($energyType, $weaknessMultiplier) {
		$this->_energyType = $energyType;
		$this->_weaknessMultiplier = $weaknessMultiplier;
	}

	public function getEnergyType() {
		return $this->_energyType;
	}

	public function getWeaknessMultiplier() {
		return $this->_weaknessMultiplier;
	}

}
