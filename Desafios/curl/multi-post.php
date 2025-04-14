<?php
// Objetivo:
// Faça uma requisição POST para criar vários posts de uma vez (em um único corpo de requisição). Simule o envio de um "lote" de dados para a API https://jsonplaceholder.typicode.com/posts.

$curl = curl_init();

$data = [
    "title"=> "Post pra testar",
    "body"=> "Conteudo do post",
    "userId"=> "1",
];

$jsonData = json_encode($data);

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $jsonData,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Content-Lenght: " . strlen($jsonData)
    ],

]);

$response = curl_exec($curl);

if (curl_errno($curl))
{
    echo "Erro: ". curl_error($curl);
    return;
} 
$response = json_decode($response, true);
var_dump($response);
echo "Post Criado" . PHP_EOL;
echo "ID do post: " . $response['id'] . PHP_EOL;

curl_close( $curl );