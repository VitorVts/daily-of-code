<?php

class ConversorDeMoeda
{
  public static function realParaDolar(float $valorEmReais): float
  {
    return $valorEmReais / 5.25;
  }
  public static function dolarParaReal(float $valorEmDolares): float
  {
    return $valorEmDolares * 5.25;
  }
}


echo ConversorDeMoeda::realParaDolar(5.25) . PHP_EOL;
echo ConversorDeMoeda::dolarParaReal(1) . PHP_EOL;