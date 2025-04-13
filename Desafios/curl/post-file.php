<?php

$filePath = realpath(__DIR__ . '/exemplo.txt');

if (!$filePath) {
    die(" Arquivo não encontrado");
}

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://file.io",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'file' => new CURLFile($filePath),
    ],
    CURLOPT_FOLLOWLOCATION => true, // <- adiciona isso!
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo '❌ Erro: ' . curl_error($curl);
} else {
    echo "Arquivo enviado" . PHP_EOL;
    echo "Resposta: $response" . PHP_EOL;
}

curl_close($curl);
