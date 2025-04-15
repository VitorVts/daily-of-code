<?php

namespace App\Model;

class Produto
{
    public int $id;
    public string $nome;
    public float $preco;

    public function __construct(int $id, string $nome, float $preco)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public static function todos(): array
    {
        return [
            new Produto(1, "Notebook", 3499.90),
            new Produto(2, "Mouse Gamer", 199.99),
            new Produto(3, "Teclado Mecânico", 299.99),
        ];
    }

    public static function buscarPorId(int $id): ?self
    {
        foreach (self::todos() as $produto) {
            if ($produto->id === $id) {
                return $produto;
            }
        }
        return null;
    }
}
