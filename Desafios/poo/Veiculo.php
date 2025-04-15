<?php
//classe base
class Veiculo
{
    public function mover()
    {
        echo "Andou 5KM" . PHP_EOL;
    }
}
//classe derivada sobrescrevendo comportamento
class Carro extends Veiculo
{
    public function mover()
    {
        echo "Andou 10KM" . PHP_EOL;
    }
}
//Interface que define o contrato de "carregar Bateria"
interface Eletrico
{
    public function carregarBateria();
}
//Tesla herda de Carro e implementa a interface Eletrico
class Tesla extends Carro implements Eletrico
{
    public function carregarBateria()
    {
        echo "Bateria carregando" . PHP_EOL;
    }
}

class BicicletaEletrica extends Veiculo implements Eletrico
{
    public function carregarBateria()
    {
        echo "Bicicleta carregando". PHP_EOL;
    }
    
    public function pedalar()
    {
        echo "Pedalando na bike eletrica" . PHP_EOL;
    }

}

//testes
$veiculo = new Veiculo();
$carro1 = new Carro();
$carro2 = new Tesla();

$veiculo->mover();
$carro1->mover();
$carro2->mover();
$carro2->carregarBateria();

$bike = new BicicletaEletrica();
$bike->pedalar();
$bike->carregarBateria();
$bike->mover();
