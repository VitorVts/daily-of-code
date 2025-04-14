<?php 

// Objetivo:
// Consuma uma API que exige autenticação por Bearer Token.

//     Simule uma API de autenticação que retorna um token (use um exemplo fixo, como your_token_here).

//     Use esse token para fazer uma requisição GET para um endpoint protegido, como https://jsonplaceholder.typicode.com/posts/1.

//     Exiba a resposta com o conteúdo do post.

$curl = curl_init();

$token = "12345";

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $token",
        "Accept: application/json"    
    ],
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo "Erro: ". curl_error($curl);
    return;
}

$statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($statusCode !== 200) {
    echo "Falha Na requisição HTTP: " . $statusCode . PHP_EOL;
    return;
}

$response = json_decode($response, true);

echo "Post Pego com sucesso" . PHP_EOL;
echo "ID do post " . $response['id'] . PHP_EOL;