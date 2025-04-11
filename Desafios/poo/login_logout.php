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

class SistemaSessao
{
    private array $usuarios = [];
    private ?Usuario $usuarioLogado = null;

    public function cadastrarUsuario(string $nome, string $senha): void
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getNome() === $nome) {
                echo "Usuário '$nome' já existe." . PHP_EOL;
                return;
            }
        }
        $this->usuarios[] = new Usuario($nome, $senha);
        echo "Usuário '$nome' cadastrado com sucesso!" . PHP_EOL;
    }

    public function login(string $nome, string $senha): void
    {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->getNome() === $nome && $usuario->verificarSenha($senha)) {
                $this->usuarioLogado = $usuario;
                echo "Usuário '$nome' logado com sucesso!" . PHP_EOL;
                return;
            }
        }
        echo "Credenciais inválidas." . PHP_EOL;
    }

    public function logout(): void
    {
        if ($this->usuarioLogado) {
            echo "Usuário '{$this->usuarioLogado->getNome()}' fez logout." . PHP_EOL;
            $this->usuarioLogado = null;
        } else {
            echo "Nenhum usuário está logado." . PHP_EOL;
        }
    }

    public function verificarUsuarioLogado(): void
    {
        if ($this->usuarioLogado) {
            echo "Usuário logado: {$this->usuarioLogado->getNome()}" . PHP_EOL;
        } else {
            echo "Nenhum usuário está logado." . PHP_EOL;
        }
    }
}
// $sistema = new SistemaSessao();
// $sistema->cadastrarUsuario("vitor", "123");
// $sistema->cadastrarUsuario("Yasmin", "24");
// $sistema->verificarUsuarioLogado();
// $sistema->login("vitor", "123");
// $sistema->verificarUsuarioLogado();
// $sistema->logout();
// $sistema->verificarUsuarioLogado();
