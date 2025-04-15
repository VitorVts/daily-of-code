<?php

class Calculadora
{
    public static function somar($a, $b)
    {
        return $a + $b;
    }

    public static function multiplica($a, $b)
    {
        return $a * $b;
    }
}



echo Calculadora::somar(5,5);

echo Calculadora::multiplica(5,5);