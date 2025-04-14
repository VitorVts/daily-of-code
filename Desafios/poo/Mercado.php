<?php

// 🔹 Desafio 8 – Carrinho de Compras

// Crie:

//     Classe Item: nome, quantidade, precoUnitario

//     Classe Carrinho: contém vários Items

// Métodos do Carrinho:

//     adicionarItem(Item $item)

//     calcularTotal(): float

//     listarItens()

class Item {
    private const  ITEM_RETORNO = "Nome: %s, Quantidade: %d, Preco: R$ %.2f ";
    private float $precoUnitario; 
    public string $nome;
    public int $quantidade;
  
    public function __construct(string $nome, int $quantidade,float $precoUnitario = 0.00)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    public function getPreco(): float
    {
        return $this->precoUnitario;
    }

    public function setPreco(float $preco): void
    {
        $this->precoUnitario = $preco;
    }
    public function __toString(): string
    {
        return sprintf(self::ITEM_RETORNO,$this->nome,$this->quantidade,$this->precoUnitario);
    }
}



class Carrinho 
{
    public array $itensCarrinho = [];
    public float $total = 0.0 ;

    public function adicionarItem(item $item): void 
    {
        $this->itensCarrinho[] = $item;
    }

    public function calcularTotal(): float
    {
        foreach($this->itensCarrinho as $item) {
            $this->total += $item->getPreco() * $item->quantidade;
        }

        return $this->total;
    }
    
    public function listarItens():void
    {
        foreach($this->itensCarrinho as $item) {
            echo $item . "\n";
        }
    }
}

$carrinho1 = new Carrinho();

$item1 = new Item("Macarrão",05,5.50);
$item2 = new Item("Arroz",05,35.50);
$carrinho1->adicionarItem($item1);
$carrinho1->adicionarItem($item2);

$carrinho1->listarItens();
echo$carrinho1->calcularTotal();
