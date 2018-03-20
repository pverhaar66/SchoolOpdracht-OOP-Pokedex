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

	public function weaknessChecker($pokemon, $target) {
		if ($pokemon->type == $target->getEnergyType()) {
			return true;
		}
		return false;
	}

	public function resistanceChecker($pokemon, $target) {
		if ($pokemon->type == $target->getEnergyType()) {
			return true;
		}
		return false;
	}

//	public function attack($pokemon, $attack, $target) {
//		print_r($pokemon);
//		print_r($attack);
//		print_r($target);
//		if ($this->weaknessChecker($pokemon, $target)) {
//			$attack->getDamage() - 
//			print_r($pokemon."attacks". $taget . "with" . $attack->getName(). $target . "loses" . $attack->getDamage() . "HP");
//		}
//	}

}
