<?php

class Produto {

    public string $nome;
    
    public float $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirDetalhes()
    {
        return "Produto: {$this->nome}, Preço: R$ {$this->preco}";
    }


}

class Estoque {
    public array $produtos = [];
    
    public function adicionaProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }

    public function listarProdutos(){
        foreach ($this->produtos as $produto) {
            echo $produto->exibirDetalhes() . PHP_EOL;
        }
    }

}

$estoque = new Estoque();
$produto1 = new Produto("Produto A", 10.99);

$estoque->adicionaProduto($produto1);
$estoque->listarProdutos();