<?php

require_once 'PokemonInterface.php';

class Pokemon implements PokemonInterface {
    private $name;
    private $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function attack() {
        return "attack !";
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }
}
