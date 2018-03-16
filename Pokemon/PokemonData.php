<?php

namespace Pokemon;

/**
 * Description of PokemonData
 *
 * @author Peter Verhaar
 */
class PokemonData {

	public function __construct($name, $type, $hitpoints, $weakness, $resistance, $moves, $movesdmg) {
		$this->name = $name;
		$this->type = $type;
		$this->hitpoints = $hitpoints;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
		$this->moves = $moves;
		$this->movesdmg = $movesdmg;
	}

}
