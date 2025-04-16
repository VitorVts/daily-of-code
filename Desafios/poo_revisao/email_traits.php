<?php

trait Mensagem
{
  public function enviar(string $mensagem): void
  {
    echo "Mensagem enviada: $mensagem" . PHP_EOL;
  }
}

class Email
{
  use Mensagem;

  public function enviaEmail(): void
  {
    echo "Salvando usuário...". PHP_EOL;
    $this->enviar("Usuário salvo com sucesso!");
  }
}

$email = new Email();
$email->enviaEmail();
