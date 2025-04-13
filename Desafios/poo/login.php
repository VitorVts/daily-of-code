<?php

class Usuario
{
    private string $nome;
    private string $senhaHash;
    public function __construct(string $nome, string $senha)
    {
        $this->nome = $nome;
        $this->senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function verificarSenha(string $senha): bool
    {
        return password_verify($senha, $this->senhaHash);
    }
}

class Sistema
{
    private array $usuarios = [];

    public function cadastrarUsuario(string $nome, string $senha): void
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getNome() === $nome) {
                echo "Usuário já existe!\n";
                return;
            }
        }

        $novoUsuario = new Usuario($nome, $senha);
        $this->usuarios[] = $novoUsuario;
        echo "Usuário '$nome' cadastrado com sucesso!\n";
    }

    public function fazerLogin(string $nome, string $senha): void
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getNome() === $nome) {
                if ($usuario->verificarSenha($senha)) {
                    echo "Login bem-sucedido! Bem-vindo, $nome.\n";
                } else {
                    echo "Senha incorreta!\n";
                }
                return;
            }
        }
        echo "Usuário '$nome' não encontrado.\n";
    }
}

$sistema = new Sistema();

$sistema->cadastrarUsuario("vitor", "senha123");

$sistema->fazerLogin("vitor", "senha123");
