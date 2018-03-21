<?php

namespace Pokemon;

/**
 * Description of PokeBag
 *
 * @author peter
 */
class PokeBag {

	public $storage;

	/**
	 * prints whats in the storage
	 */
	public function showStorage() {

		print_r($this->storage);
		if($this->storage == null){
			echo"Empty";
		}
	}

	public function addOneToStorage($pokemon) {
		if (sizeof($this->storage < 10)) {
			$this->storage[] = $pokemon;
		} else {
			print_r("bag is full");
		}
	}

	public function deleteOneFromStorage($pokemonName) {
		for ($i = 0; $i < sizeof($this->storage); $i++) {
			if ($this->storage[$i]->name == $pokemonName) {
				unset($this->storage[$i]);
			}
		}
	}

	public function deleteAllFromStorage() {
		$this->storage = null;
	}

}
