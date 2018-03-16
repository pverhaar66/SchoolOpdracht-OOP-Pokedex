<?php

namespace Pokemon;

use Pokemon\PokemonData;

/**
 * Description of Pikachu
 *
 * @author Peter Verhaar
 */
class Pikachu extends PokemonData {

	public function __construct($name) {
		$this->name = $name;
		$this->type = "electric";
		$this->hitpoints = 60;
		$this->weakness = "Ground";
		$this->resistance = "Fighting";
		$this->moves = ["Electric Ring", "Pika Punch", null, null];
		$this->movesdmg = [50, 10, null, null];
	}

}
