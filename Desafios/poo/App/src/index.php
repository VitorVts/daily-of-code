<?php

require "autoload.php";

use App\Servicos\Mensagem;

$msg = new Mensagem();
$msg->enviar("Olá, Vitor!");
