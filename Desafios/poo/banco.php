<?php 

class ContaBancaria {

    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor): void {
        if ($valor <= 0){    
            echo "Valor inválido para depósito.\n";
            return;
        }
        $this->saldo += $valor;
    }
    
    public function sacar(float $valor): void {
        if ($valor <= 0 || $valor > $this->saldo){
            echo "Valor inválido para saque.\n";
            return;
        }
        $this->saldo -= $valor;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setTitular(string $titular): void {
        $this->titular = $titular;
    }

    public function getTitular(): string {
        return $this->titular;
    }
}

$conta = new ContaBancaria("Vitor", 1000.00);
$conta->depositar(500.00);
$conta->sacar(200);
echo "Saldo atual: " . $conta->getSaldo() . "\n";

$conta->sacar(1500.00); 
$conta->setTitular("Lucas");

echo "Titular da conta: " . $conta->getTitular() . "\n";
echo "Saldo final: " . $conta->getSaldo() . "\n";
