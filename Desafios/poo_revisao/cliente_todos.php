<?php

interface Registravel
{
    public function registrar();
}

trait Logger
{
  public function log(string $mensagem): void
  {
    echo "[LOG]: $mensagem" . PHP_EOL;
  }
}

class Pessoa implements Registravel
{
  use Logger;
  protected string $nome;

  public function __construct(string $nome)
  {
    $this->nome = $nome;
  }

  public function registrar(): void
  {
    echo "Registrando pessoa...." . PHP_EOL;
    $this->log("Pessoa {$this->nome} registrada.");
  }
}

class Cliente extends Pessoa
{
  public function registrar(): void
  {
    echo "Registrando Cliente...." . PHP_EOL;
    $this->log("Cliente {$this->nome} registrada.");
  }
}

$vitor = new Pessoa("Vitor");
$vitor->registrar();

$yasmin = new Cliente("Yasmin");
$yasmin->registrar();