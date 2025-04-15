<?php

class Calculadora
{
    public static function somar($a,$b)
    {
        return $a + $b;
    }
}

echo Calculadora::somar(5,10);