<?php

namespace Pokemon\Moves;

/**
 * Description of Attack
 *
 * @author Peter Verhaar
 */
class Attack {

	private $_name;
	private $_damage;

	public function __construct($name, $damage) {
		$this->_name = $name;
		$this->_damage = $damage;
	}

	public function getName() {
		return $this->_name;
	}

	public function getDamage() {
		return $this->_damage;
	}

}
