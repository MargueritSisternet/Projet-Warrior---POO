<?php
class StartrekWarrior extends Warrior {
public int $mentalPower;
function __construct() {
}
public function getPower () {
    return $this->mentalPower;
}
}
