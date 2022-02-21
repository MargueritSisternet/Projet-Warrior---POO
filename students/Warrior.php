<?php

require_once __DIR__ . "/../base/LocalWarrior.php";
$GLOBALS['warriorName'] = 'Lara';
abstract class Warrior extends LocalWarrior {   
    public string $name; 
    public int $speed; 
    public int $life; 
    public int $shield; 
    public string $imageUrl;
    function __construct(string $warriorName) {
        $this->speed = 30; 
        $this->life = 100; 
        $this->shield = 20;
        $this->name = $warriorName; 
    }
}