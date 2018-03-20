<?php

define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);
require ROOT . 'Pokemon/PokemonData.php';
require ROOT . 'Pokemon/Types/EnergyType.php';
require ROOT . 'Pokemon/Types/Weaknes.php';
require ROOT . 'Pokemon/Types/Resistance.php';
require ROOT . 'Pokemon/Moves/Attack.php';
require ROOT . 'Pokemon/Pikachu.php';
require ROOT . 'Pokemon/Charmeleon.php';

use Pokemon\Pikachu;
use Pokemon\Charmeleon;
use Pokemon\PokemonData;

/**
 * Description of index
 *
 * @author Peter Verhaar
 */
$pikachu = new Pikachu("JaCk");

$charmeleon = new Charmeleon("Embers");

echo"<pre>";

$pikachu->attack($pikachu->moves[1], $charmeleon);
echo"\n";
$charmeleon->attack($charmeleon->moves[0], $pikachu);
