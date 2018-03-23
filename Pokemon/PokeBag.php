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

	/**
	 * adds one pokemon to the storage array 
	 * 
	 * @param type $pokemon - the pokemon object
	 */
	public function addOneToStorage($pokemon) {
		if (sizeof($this->storage < 10)) {
			$this->storage[] = $pokemon;
		} else {
			print_r("bag is full");
		}
	}

	/**
	 *  deletes the pokemon in the array by name
	 * 
	 * @param type $pokemonName - the name in the pokemon object
	 */
	public function deleteOneFromStorage($pokemonName) {
		for ($i = 0; $i < sizeof($this->storage); $i++) {
			if ($this->storage[$i]->name == $pokemonName) {
				unset($this->storage[$i]);
			}
		}
	}

	/**
	 * deletes everything in the array
	 */
	public function deleteAllFromStorage() {
		$this->storage = null;
	}

}
