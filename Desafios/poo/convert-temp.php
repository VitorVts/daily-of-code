
<?php

class ConversorTemperatura
{
    /**
     * Converte Celsius para Fahrenheit
     */
    public static function celsiusParaFahrenheit($celsius)
    {
        return $celsius*9/5+32;
    }
    /**
     * Converte Fahrenheit para Celsius
     */
    public static function fahrenheitParaCelsius($fahrenheit)
    {
        return ($fahrenheit-32)*5/9;
    }
}

echo ConversorTemperatura::celsiusParaFahrenheit(25);
echo ConversorTemperatura::fahrenheitParaCelsius(77);