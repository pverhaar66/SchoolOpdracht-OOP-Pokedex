<?php

namespace Pokemon;

use Pokemon\PokemonData;
use Pokemon\Types\EnergyType;
use Pokemon\Types\Weakness;
use Pokemon\Types\Resistance;
use Pokemon\Moves\Attack;

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
		$this->weakness = new Weakness(new EnergyType("water"), 2);
		$this->resistance = new Resistance(new EnergyType("Electric"), 10);
		$this->moves = [new Attack("Flare", 30), new Attack("headbutt", 10)];
	}

}
