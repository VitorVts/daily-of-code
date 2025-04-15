<?php

interface Eletrico
{
    public function carregarBateria();
}

class Tesla implements Eletrico
{
    public function carregarBateria(): void
    {
        echo "Bateria Carregando" . PHP_EOL;
    }
}

class Bike implements Eletrico
{
    public function carregarBateria(): void
    {
        echo "Carregando bicicleta". PHP_EOL;
    }
}

class Patinete implements Eletrico
{
    public function carregarBateria(): void
    {
        echo "Carregando Patinete". PHP_EOL;
    }
}


$tesla1 = new Tesla();
$tesla1->carregarBateria();

$bike1 = new Bike();
$bike1->carregarBateria();

$patinete1 = new Patinete();
$patinete1->carregarBateria();