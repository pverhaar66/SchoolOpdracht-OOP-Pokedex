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
		if ($pokemon->type->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
			return true;
		}
		return false;
	}

	public function resistanceChecker($pokemon, $target) {
		if ($pokemon->type->getEnergyType() === $target->weakness->getEnergyType()->getEnergyType()) {
			return true;
		}
		return false;
	}

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
