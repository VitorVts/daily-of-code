<?php

require __DIR__ . "App/Servicos/Mensagem.php";

use App\Servicos\Mensagem;

$msg = new Mensagem();
$msg->enviar("Olá, Vitor!");
