<?php

namespace Pokemon;



use Pokemon\PokemonData;
use Pokemon\Types\EnergyType;
use Pokemon\Types\Weakness;
use Pokemon\Types\Resistance;
use Pokemon\Moves\Attack;

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
		$this->weakness = new Weakness(new EnergyType("Fire"), 1.5);
		$this->resistance = new Resistance(new EnergyType("Fighting"), 20);
		$this->moves = [new Attack("Pika Punch", 20),new Attack("Electric Ring" , 50) ];
	}

}
