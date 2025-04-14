<?php

// Objetivo:
// Faça uma requisição GET para listar os posts de um usuário específico na API https://jsonplaceholder.typicode.com/posts.

//     Simule a busca por posts de um usuário específico, usando o parâmetro userId.

//     Exiba os títulos desses posts de forma organizada.

$curl = curl_init();

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Accept: application/json"
    ],
]);

$response = curl_exec($curl);

$data = json_decode($response, true);


if (curl_errno($curl)) {
    echo "Erro: ". curl_error($curl);
}

$count = 0;

foreach ($data as $key => $value) {
    if ($value['userId'] == 1) {
        echo $count + 1 . ". " . 'Posts: ' . $value['title'] . PHP_EOL;
        $count++;
    }
}

echo "Total de posts do usuário 1: $count" . PHP_EOL;