<?php

class Animal
{
    public function fazerSom()
    {
        echo "Fazendo som" . PHP_EOL;
    }

}

class Gato extends Animal
{
    public function fazerSom()
    {
        parent::fazerSom();
        echo "Miau" . PHP_EOL;
    }
}

$cachorro = new Gato();

$cachorro->fazerSom();