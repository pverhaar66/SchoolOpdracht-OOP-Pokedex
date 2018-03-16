<?php

namespace Pokemon;

use Pokemon\PokemonData;

/**
 * Description of Charmeleon
 *
 * @author Peter Verhaar
 */
class Charmeleon extends PokemonData {

	public function __construct($name) {
		$this->name = $name;
		$this->type = "Fire";
		$this->hitpoints = 60;
		$this->weakness = "Water";
		$this->resistance = "Electric";
		$this->moves = ["Flare", "Headbutt", null, null];
		$this->movesdmg = [30, 50, null, null];
	}

}
