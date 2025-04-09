<?php

class Calculadora {
    public function somar(float $a, float $b): float {
        return $a + $b;
    }

    public function subtrair(float $a, float $b): float {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b): float {
        return $a * $b;
    }

    public function dividir(float $a, float $b): float {
        if ($b == 0 || $a == 0) {
            echo"Divisão por zero não é permitida.";
        }
        return $a / $b;
    }
    
    public function calcula(string $operacao, float $a, float $b ){
       
       $retornoOperacao = match ($operacao) {
            '+' => $this->somar($a, $b),
            '-' => $this->subtrair($a, $b),
            '*' => $this->multiplicar($a, $b),
            '/' => $this->dividir($a, $b),
            default => "Operação inválida",
        };
        if ($operacao == '/' && $b == 0 || $a == 0) {
            return "Divisão por zero não é permitida.";
        }
        return $retornoOperacao;

    }
}

$calculadora = new Calculadora();


echo $calculadora->calcula('+', 10, 20);
$calculadora->calcula('-', 10, 20);
$calculadora->calcula('*', 10, 20);
$calculadora->calcula('/', 10, 20);