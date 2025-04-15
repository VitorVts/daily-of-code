<?php

namespace App\Servicos;

use App\Model\Usuario;
use App\Utils\ValidadorEmail;


class LoginService
{
    public function login(Usuario $usuario): void
    {
        if (!ValidadorEmail::validar($usuario->email)) {
            echo "Email inválido: {$usuario->email}" . PHP_EOL;
            return;
        }

        echo "Login feito com sucesso para {$usuario->email}" . PHP_EOL;
    }
}