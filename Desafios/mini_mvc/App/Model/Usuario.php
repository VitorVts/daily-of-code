<?php

namespace App\Model;

class Usuario
{
    public string $email;
    public string $senha;


    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }
}