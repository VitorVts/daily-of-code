<?php

interface Autenticavel
{
  public function autenticar(string $senha): bool;
}

class Usuario implements Autenticavel
{
  public function autenticar(string $senha): bool
  {
    if ($senha != "1234")
    {
      return false;
    }
    return true;
  }
}

$vitor = new Usuario();
var_dump($vitor->autenticar("12")); 
$usuario = new Usuario();
var_dump($usuario->autenticar("1234"));