<?php

// Objetivo:
// Faça uma requisição PUT para atualizar um post em https://jsonplaceholder.typicode.com/posts/10.

//     Atualize o título e o conteúdo do post.

//     Simule um erro (como enviar um título vazio) e trate a resposta de erro da API.

$curl = curl_init();

$data = [
    "id"=> "1",
    "title"=> "ADAS",
    "body" => "Este é o novo conteúdo do post",
    "userId" => 1,
];

if($data['title'] == "")
{
    echo "Title não pode estar vazio.". PHP_EOL;
    return;
}

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts/10",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ],
]);

$response = curl_exec($curl);


if (curl_errno($curl))
{
    echo "Erro". curl_error($curl);
    return;
}

$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($statusCode !== 200) 
{
    echo "Erro na requisição . Código de status HTTP". $statusCode . PHP_EOL;
    return;
}

$response = json_decode($response, true);

echo "Post atualizado com sucesso!" . PHP_EOL;
echo "ID: " . $response['id'] . PHP_EOL;
echo "Título: " . $response['title'] . PHP_EOL;
echo "Conteúdo: " . $response['body'] . PHP_EOL;

curl_close($curl);
