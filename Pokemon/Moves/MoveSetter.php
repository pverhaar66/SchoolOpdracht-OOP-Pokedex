<?php

namespace Pokemon\Moves;

/**
 * Description of Move
 *
 * @author Peter Verhaar
 */
class MoveSetter {
	private $_move1;
	private $_move1dmg;
	private $_move2;
	private $_move2dmg;
	private $_move3;
	private $_move3dmg;
	private $_move4;
	private $_move4dmg;

	public function __construct($move1, $move1dmg, $move2 =null, $move2dmg =null, $move3 =null, $move3dmg =null, $move4 = null, $move4dmg =null) {
		
		{$this->_move1 = $move1;$this->_move1dmg = $move1dmg;}
		{$this->_move2 = $move2;$this->_move2dmg = $move2dmg;}
		{$this->_move3 = $move3;$this->_move3dmg = $move3dmg;}
		{$this->_move4 = $move4;$this->_move4dmg = $move4dmg;}
	}

}
