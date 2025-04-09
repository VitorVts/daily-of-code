<?php

class Livros {
    public string $titulo;

    public string $autor;


    public function __construct(string $titulo, string $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
}

class Biblioteca {
    public array $biblioteca = [];
    public function adicionarLivro(Livros $livro) {
        $this->biblioteca[] = $livro;
    }
    public function listarLivros(){
        foreach ($this->biblioteca as $Livro)
        {
            echo "Título: {$Livro->titulo}, Autor: {$Livro->autor} \n";
        }
    }
}

$biblioteca = new Biblioteca();

$livro1 = new Livros("O Senhor dos Anéis", "J.R.R. Tolkien");
$livro2 = new Livros("1984", "George Orwell");

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

$biblioteca->listarLivros();
