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
	
	public function __construct($name, $damage){
		$this->_name = $name;
		$this->_damage = $damage;
	}
}
