<?php

$curl = curl_init();

$data = [
    'title' => 'Meu Post de teste',
    'body' => 'Esse é o conteúdo do post.',
    'userId' => 1,
];

$jsonData = json_encode($data);

curl_setopt_array($curl,[
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $jsonData,
    CURLOPT_HTTPHEADER => [
        'Content-Type> application/json',
        'Content-Length' . strlen($jsonData)
    ],
]);

$response = curl_exec($curl);

if(curl_errno($curl))
{
    echo 'Erro: '. curl_error($curl);
} else {
    $resposta = json_decode($response, true);
    var_dump($resposta);
    echo "Post cirado com sucesso!" . PHP_EOL;
    echo "ID do post: " . $resposta['id'] . PHP_EOL;
}

curl_close($curl);

