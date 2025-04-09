
<!-- 🚀 1. Classe Pessoa com métodos simples

Crie uma classe Pessoa com os atributos:

    nome

    idade

E métodos:

    falar(): que retorna "Olá, meu nome é {nome} e tenho {idade} anos."

✅ Objetivos:

    Criar classes e métodos

    Trabalhar com construtores e atributos -->


<?php

class Pessoa {
    public string $nome;
    public int $idade;

    public function __construct( string $nome, int $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function falar(){
        echo "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos.";
    }
}

$pessoa = new Pessoa("Vitor", 25);

$pessoa->falar();