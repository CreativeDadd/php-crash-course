<?php
class Song {
    public $name;
    public $numbersOfPlayers;

    public function __construct(string $name, int $numbersOfPlayers){
        $this->name = $name;
        $this->numbersOfPlayers = $numbersOfPlayers;
    }
}


