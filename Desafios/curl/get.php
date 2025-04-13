<?php
// Fazer uma requisição GET com cURL em PHP, enviando um header com um token fictício de autenticação no formato:
//     Authorization: Bearer MEU_TOKEN_FAKE

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

if(curl_errno($curl)) {
    echo "Erro". curl_error($curl);
} else {
    $data = json_decode($response, true);
    echo "Título do post" . $data['title'] . PHP_EOL;
}

curl_close($curl);