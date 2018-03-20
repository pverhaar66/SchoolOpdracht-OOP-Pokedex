<?php

namespace Pokemon\Types;

/**
 * Description of Resistances
 *
 * @author peter
 */
class Resistance {

	private $_energyType;
	private $_resistvalue;

	public function __construct($energyType, $resistvalue) {
		$this->_energyType = $energyType;
		$this->_resistvalue = $resistvalue;
	}

}
