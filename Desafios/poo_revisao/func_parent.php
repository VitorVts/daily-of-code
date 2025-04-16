<?php

class Funcionario
{
  public function trabalhar(): void
  {
    echo "Fazendo tarefas Básicas" . PHP_EOL;
  }
}

class Desenvolvedor extends Funcionario
{
  public function trabalhar(): void
  {
    parent::trabalhar();
    echo "Codando em PHP". PHP_EOL;
  }
}

$vitor = new Desenvolvedor();

$vitor->trabalhar();