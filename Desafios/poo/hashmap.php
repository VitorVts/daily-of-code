<?php

// Desafio:
// Crie um script em PHP que conte quantas vezes cada palavra aparece em uma determinada frase,
// utilizando um array associativo no formato array<string, int> para armazenar os resultados.
$frase = "A Vida é um morango vida morango vida" . PHP_EOL;

$palavras =  explode(" ", $frase);

$n = 1;
$map = [];

foreach ($palavras as $palavra) {
    $palavra = strtolower($palavra);

    if (array_key_exists($palavra, $map)) {
        $map[$palavra] += $n;
        continue;
    }

    $map[$palavra] = $n;
}

var_dump($map);
