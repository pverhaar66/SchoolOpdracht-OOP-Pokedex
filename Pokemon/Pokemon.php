<?php

namespace Pokemon;

/**
 * Description of pokemon
 *
 * @author Peter Verhaar
 */
class Pokemon {

	public function __construct($name, $type, $hitpoints, $weakness, $resistance, $move1, $move1dmg, $move2 = null, $move2dmg = null, $move3 = null, $move3dmg = null, $move4 = null, $move4dmg = null) {
		$this->name = $name;
		$this->type = $type;
		$this->hitpoints = $hitpoints;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
		$this->move1 = $move1;
		$this->move1dmg = $move1dmg;
		$this->move2 = $move2;
		$this->move2dmg = $move2dmg;
		$this->move3 = $move3;
		$this->move3dmg = $move3dmg;
		$this->move4 = $move4;
		$this->move4dmg = $move4dmg;
	}

}
