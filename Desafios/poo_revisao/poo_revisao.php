<?php

interface Registravel
{
  public function registrar();
}

trait Logavel
{
  public function log(string $mensagem): void
  {
    echo "[LOG]: $mensagem" . PHP_EOL;
  }

  public static function logSistema()
  {
    echo "[LOG]: Sistema inicializado" . PHP_EOL;
  }
}

class Pessoa implements Registravel
{
    use Logavel;

    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function registrar(): void
    {
        $this->log("Pessoa $this->nome registrada.");
    }
}


class Funcionario extends Pessoa
{
  protected string $cargo;

  public function __construct(string $nome, string $cargo)
  {
    parent::__construct($nome);
    $this->cargo = $cargo;
  }

  public function registrar(): void
  {
    parent::registrar();
    $this->log("Cargo Atribuído: {$this->cargo}" . PHP_EOL);
  }
}

class Cliente extends Pessoa
{
  protected string $cpf;

  public function __construct(string $nome, string $cpf)
  {
    parent::__construct($nome);
    $this->cpf = $cpf;
  }

  public function registrar(): void
  {
    parent::registrar();
    $this->log("CPF: $this->cpf" . PHP_EOL);
  }
}


$ana = new Pessoa("Ana");
$ana->registrar();

echo PHP_EOL;

$vitor = new Funcionario("vitor", "Programador");
$vitor->registrar();

Cliente::logSistema();
$cliente = new Cliente("Carlos", "123.456.789-00");
$cliente->registrar();
echo PHP_EOL;
$cliente->logSistema();
echo PHP_EOL;
$cliente->log("Log do cliente");