<?php

// <!-- 🔹 Desafio 7 – Sistema de Tarefas

// Crie uma classe Tarefa com:

//     Propriedades: titulo, descricao, status (padrão: "pendente")

//     Métodos: concluir(), exibirDetalhes()

// Crie também a classe ListaDeTarefas, que:

//     Adiciona várias Tarefas

//     Lista todas com listarTarefas() -->

class Tarefa {

    public string $titulo;

    public string $descricao;

    private string $status ;

    public function __construct(string $titulo, string $descricao, string $status = "pendente"){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->status = $status;
    }

    public function concluir(): void{
        $this->status = "Concluído";
    }

    public function exibirDetalhes(): void{
        echo "Título: " . $this->titulo ."\n";
        echo "Descrição: " . $this->descricao ."\n";
        echo "Status: " . $this->status ."\n";
    }


}

class ListadeTarefas{
    public array $tarefas = [];

    
    public function adicionarTarefa($tarefa){
        $this->tarefas[] = $tarefa;
    }

    public function listarTarefa() {
        foreach($this->tarefas as $tarefa)
        {
            $tarefa->exibirDetalhes() . "\n";
        }
    }

}

$ListaTarefa = new ListadeTarefas();

$tarefa1 = new Tarefa("Quarto","Arrumar o quarto ");


$ListaTarefa->adicionarTarefa($tarefa1);

echo $ListaTarefa->listarTarefa();

$tarefa1->concluir();
echo $ListaTarefa->listarTarefa();