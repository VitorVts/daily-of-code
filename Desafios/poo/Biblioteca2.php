<?php

namespace App\Biblioteca;

class Livro
{
    private const LIVRO_INFO = "Título: %s, Autor: %s, Disponível: %s ";
    public string $titulo;
    public string $autor;
    public bool $disponivel;

    public function __construct(string $titulo, string $autor, bool $disponivel = true)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = $disponivel;
    }

    public function emprestar(): void
    {
        if (!$this->disponivel) {
            echo "Livro: " . $this->titulo .  " Indisponível para emprestar" . PHP_EOL;
            return;
        }

        echo "Livro: " . $this->titulo .  " Pego emprestado" . PHP_EOL;
        $this->disponivel = false;
        return;
    }

    public function devolver()
    {
        echo "Livro:" . $this->titulo . " Devolvido" . PHP_EOL;
        $this->disponivel = true;
    }

    public function exibirInfo()
    {
        echo sprintf(self::LIVRO_INFO, $this->titulo, $this->autor, $this->disponivel ? 'Sim' : 'Não') . PHP_EOL;
    }
}

class Biblioteca
{
    public array $livros = [];

    public function adicionarLivro(Livro $livro): void
    {
        $this->livros[] = $livro;
    }

    public function listarLivros(): void
    {
        foreach ($this->livros as $livro) {
            $livro->exibirInfo();
        }
    }

    public function emprestarLivro(string $titulo): void
    {
        foreach ($this->livros as $livro) {
            if (str_contains($livro->titulo, $titulo)) {
                $livro->emprestar();
            }
        }
    }

    public function devolverLivro(string $titulo): void
    {
        foreach ($this->livros as $livro) {
            if (str_contains($livro->titulo, $titulo)) {
                $livro->devolver();
            }
        }
    }
}
// $livro1 = new Livro("Eragon", "Cristopher Paolini");
// $livro2 = new Livro("Dom Quixote", "Miguel de Cervantes");
// $biblioteca1 = new Biblioteca();



// // $livro1->emprestar();
// // $livro1->emprestar();
// // $livro1->devolver();
// // $livro1->exibirInfo();

//  $biblioteca1->adicionarLivro($livro1);
//  $biblioteca1->adicionarLivro($livro2);
// $biblioteca1->listarLivros();
// $biblioteca1->emprestarLivro("Eragon");
// $biblioteca1->devolverLivro("Eragon");
// $biblioteca1->emprestarLivro("Eragon");
// $biblioteca1->listarLivros();
