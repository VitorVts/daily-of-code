<?php

// <!-- Crie uma classe Aluno com:

//     Propriedades: nome, notas (array de floats)

//     Método adicionarNota(float $nota)

//     Método calcularMedia(): float

//     Método verificarAprovacao(): string
//     (Aprovado se média ≥ 7) -->

class Aluno {

    public string $nome;

    private array $notas = [];

    public function __construct(string $nome, array $notas) {
        $this->nome = $nome;
        $this->notas = $notas;
    }

    public function adicionarNota(float $nota): void {
        $this->notas[] = $nota;
    }

    public function calcularMedia(): float {
        if (count($this->notas) === 0) {
            return 0.0;
        }
        $soma = array_sum($this->notas);
        return $soma / count($this->notas);
    }

    public function verificarAprovacao(): string {
        $media = $this->calcularMedia();
        return $media >= 7 ? "Aprovado" : "Reprovado";
    }

    public function exibirNotas(): void {
        echo "Notas: " . implode(", ", $this->notas) . "\n";
    }

}


$aluno1 = new Aluno("Vitor", [8.5, 7.0, 9.0]);

$aluno1->adicionarNota(6.5);
echo $aluno1->calcularMedia() . "\n";
echo $aluno1->verificarAprovacao() . "\n";
echo $aluno1->exibirNotas();