<?php

namespace Pokemon;

use Pokemon\PokemonData;
use Pokemon\Types\EnergyType;
use Pokemon\Types\Weakness;
use Pokemon\Types\Resistance;
use Pokemon\Moves\MoveSetter;

/**
 * Description of Pikachu
 *
 * @author Peter Verhaar
 */
class Pikachu extends PokemonData {

	public function __construct($name) {
		$this->name = $name;
		$this->type = new EnergyType("Lightning");
		$this->hitpoints = 60;
		$this->weakness = new Weakness("Ground");
		$this->resistance = new Resistance("Fighting");
		$this->moves = new MoveSetter("Electric Ring", 50, "Pika Punch", 10);
	}

}
