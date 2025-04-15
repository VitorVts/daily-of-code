<?php

require __DIR__ ."/vendor/autoload.php";

use App\Controller\ProdutoController;

$controller = new ProdutoController();

if (isset($_GET['detalhe'])) {
    $controller->detalhe((int)$_GET['detalhe']);
} else {
    $controller->listar();
}