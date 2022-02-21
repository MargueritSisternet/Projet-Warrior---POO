<?php

class MarvelWarrior extends Warrior {

    public int $superPower;
    function __construct() {
    }
    public function getPower() {
        return $this->superPower;
    }
}
    