<?php
class PokemonWarrior extends Warrior {
    public int $level;
    function __construct(string $warriorName) {
    }
    public function getPower () {
    return $this->level;
}
}