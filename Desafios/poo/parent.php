<?php 

class FuncionarioDev
{
    protected string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        echo "Funcionário criado : $nome" . PHP_EOL;
    }
    public function trabalhar(): void
    {
        echo "Executando Tarefas Genéricas" . PHP_EOL;
    }
}

class Programador extends FuncionarioDev
{
    protected string $linguagem;
    public function __construct(string $nome, string $linguagem)
    {   
        parent::__construct($nome);
        $this->linguagem =$linguagem;
        echo "Linguagem preferida: $linguagem" . PHP_EOL;
    }
    public function trabalhar(): void
    {
        parent::trabalhar();
        echo "Escrevendo Código em php". PHP_EOL;
    }
}

class Gerente extends FuncionarioDev
{
    protected string $departamento;
    public function __construct(string $nome, string $departamento)
    {
        parent::__construct($nome);
        $this->departamento = $departamento;
        echo "Departamento: " . $departamento . PHP_EOL;
    }
}

$vitor = new Programador("Vitor" , "php");

$joana = new Gerente("Joana","TI");