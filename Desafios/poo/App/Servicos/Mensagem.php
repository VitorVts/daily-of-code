<?php

namespace App\Servicos;

class Mensagem
{
    public function enviar($texto)
    {
        echo "Enviando: " . $texto . PHP_EOL;
    }
}
