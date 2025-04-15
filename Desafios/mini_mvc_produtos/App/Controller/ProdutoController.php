<?php

namespace App\Controller;

use App\Model\Produto;

class ProdutoController
{
    public function listar()
    {
        $produtos = Produto::todos();
        require __DIR__ . "/../View/lista.php";
    }

    public function detalhe(int $id)
    {
        $produto = Produto::buscarPorId($id);
        require __DIR__ . "/../View/detalhe.php";
    }
}
