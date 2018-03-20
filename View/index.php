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

/**
 * Description of index
 *
 * @author Peter Verhaar
 */

$pikachu = new Pikachu("JaCk");

$charmeleon = new Charmeleon("Embers");

echo"<pre>";
print_r($pikachu);
print_r($charmeleon);

