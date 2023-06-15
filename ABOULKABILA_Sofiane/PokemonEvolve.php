<?php

require_once 'Pokemon.php';

class PokemonEvolve extends Pokemon {
    private $evolution;

    public function __construct($name, $type, $evolution) {
        parent::__construct($name, $type);
        $this->evolution = $evolution;
    }

    public function getEvolution() {
        return $this->evolution;
    }
}
