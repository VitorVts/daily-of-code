<?php

require __DIR__ ."/vendor/autoload.php";

use App\Model\Usuario;
use App\Servicos\LoginService;


$usuario = new Usuario("vitor@gmail.com", "123456");
$servico = new LoginService();

$servico->login($usuario);