<?php 

interface Aparelho
{
    public function ligar();
}

class Celular implements Aparelho
{
    public function ligar(): void
    {
        echo "Ligando......". PHP_EOL;
    }
}

class Luminaria implements Aparelho
{
    public function ligar()
    {
        echo "Haja Luz!". PHP_EOL;
    }
}

class Notebook implements Aparelho
{
    public function ligar()
    {
        echo "Ligando..........". PHP_EOL;
    }
}

class Computador implements Aparelho
{
    public function ligar()
    {
        echo "Ligar". PHP_EOL;
    }
}