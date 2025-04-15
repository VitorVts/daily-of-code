<?php

class Animal
{
    
    
    public function __construct(public string $animalName)
    {

    }

    public function fazerSom()
    {
        echo "Algum som" . PHP_EOL;
    }
}

class Cachorro extends Animal
{
    public function fazerSom() {
        echo $this->animalName . "Latido". PHP_EOL;
    }
}

$dog = new Cachorro("Crypto");

$dog->fazerSom();

interface Voador {
    public function voar();
}

class Passaro implements Voador {
    public function voar() {
        echo "Voando com asas" . PHP_EOL;
    }
}

$passaro = new Passaro();

$passaro->voar();