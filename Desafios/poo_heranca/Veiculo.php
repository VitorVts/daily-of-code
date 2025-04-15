<?php

class Veiculo
{
    public function mover()
    {
        echo "Andou 5KM" . PHP_EOL;
    }
}

class Carro extends Veiculo
{
    public function mover()
    {
        parent::mover();
        echo "Andou 10KM" . PHP_EOL;
    }   
}

$carro = new Carro();
$carro->mover();