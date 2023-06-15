<?php

require_once 'PokemonInterface.php';
require_once 'Pokemon.php';
require_once 'PokemonEvolve.php';

$pokemon1 = new Pokemon("Pikachu", "Électrique");
$pokemon2 = new PokemonEvolve("Bulbasaur", "Plante", "Ivysaur");
echo "Nom: " . $pokemon1->getName() . PHP_EOL;
echo "Type: " . $pokemon1->getType() . PHP_EOL;
echo "Nom: " . $pokemon2->getName() . PHP_EOL;
echo "Type: " . $pokemon2->getType() . PHP_EOL;
echo "Évolution: " . $pokemon2->getEvolution() . PHP_EOL;
echo $pokemon2->getEvolution() . " " . $pokemon2->attack() . PHP_EOL;
