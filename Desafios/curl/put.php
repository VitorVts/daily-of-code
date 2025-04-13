<?php

$curl = curl_init();

$data = [
    "id" => 1,
    "title" => "Títul atualizado via Curl",
    "body" => "Este é o novo conteúdo do post.",
    "userId" => 1,
];

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ],
]);

$result = curl_exec($curl);

if(curl_errno($curl))
{
    echo "Erro:". curl_error($curl);
}else{
    $data = json_decode($result,true);
    echo "ID: " . $data["id"] . " | Title: " . $data["title"] . PHP_EOL;
}

curl_close($curl);
