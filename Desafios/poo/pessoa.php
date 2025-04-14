
<?php 

/* CLASSE PESSOA "NOME", "SOBRENOME", "IDADE", idade não pode sermenor que 0 e nome tem que vir nome e sobrenome quando necesasrio atributos privados */

class Pessoa
{
   protected string $nome;
   protected string $sobrenome;
   private int $idade;

   public function __construct(string $nome, string $sobrenome, int $idade)
   {
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->idade = $this->validateIdade($idade);
   }

   public function validateIdade(int $idade): int
   {
    if ($idade < 0) {
        throw new ErrorException("A idade deve ser maior que 0");
    }
    return $idade;
   }

   public function getFullName(): string
   {
    return sprintf("%s %s",$this->nome, $this->sobrenome);
   }
}

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, string $sobrenome, int $idade, string $cargo)
    {
        parent::__construct($nome,$sobrenome,$idade);
        $this->cargo = $cargo;
    }
    public function getCargo(): string
    {
        echo $this->nome;
        echo $this->sobrenome;
        return $this->cargo;
    }

}

$func1 = new Funcionario("Vitor","Gomes",25,"Desempregado");


echo $func1->getCargo();