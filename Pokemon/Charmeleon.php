<?php

namespace Pokemon;

use Pokemon\PokemonData;
use Pokemon\Types\EnergyType;
use Pokemon\Types\Weakness;
use Pokemon\Types\Resistance;
use Pokemon\Moves\MoveSetter;

/**
 * Description of Charmeleon
 *
 * @author Peter Verhaar
 */
class Charmeleon extends PokemonData {

	public function __construct($name) {
		$this->name = $name;
		$this->type = new EnergyType("Fire");
		$this->hitpoints = 60;
		$this->weakness = new Weakness("Water");
		$this->resistance = new Resistance("Electric");
		$this->moves = new MoveSetter("Flare", 30, "Headbutt", 50);
	}

}
