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

	/**
	 * checks if the attacking pokemon's type is the same as the weakness of the target pokemon
	 * 
	 * @param type $pokemon - the attacking pokemon
	 * @param type $target
	 * @return boolean
	 */
	public function weaknessChecker($pokemon, $target) {
		if ($pokemon->type->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
			return true;
		}
		return false;
	}
	
	/**
	 * checks if the attacking pokemon's type is the same as the resistance of the target pokemon
	 * 
	 * @param type $pokemon - the attacking pokemon
	 * @param type $target
	 * @return boolean
	 */
	public function resistanceChecker($pokemon, $target) {
		if ($pokemon->type->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
			return true;
		}
		return false;
	}
	/**
	 * calculates the damage done by the attacking opponent and the target's HP and prints it out.
	 * 
	 * @param type $attack
	 * @param type $target
	 * @return type string
	 */
	public function attack($attack, $target) {
		print($this->name . " current HP = " . $this->hitpoints . "\n");
		if ($this->weaknessChecker($this, $target) == true) {
			$dmg = $attack->getDamage() * $target->weakness->getWeaknessMultiplier();
			$result = $target->hitpoints - $dmg;
			print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
			return print("\n" . "$target->name new HP = " . $result);
		}
		if ($this->resistanceChecker($this, $target) == true) {
			$dmg = $attack->getDamage() - $target->getResistvalue();
			$result = $target->hitpoints - $dmg;
			print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
			return print("\n" . "$target->name new HP = " . $result);
		}
		$dmg = $attack->getDamage();
		$result = $target->hitpoints - $dmg;
		print_r($this->name . " attacks " . $target->name . " with " . $attack->getName() . " " . $target->name . " loses " . $dmg . " HP");
		return print("\n" . "$target->name new HP = " . $result);
	}

}
