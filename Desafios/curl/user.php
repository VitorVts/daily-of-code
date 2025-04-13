<?php
// Objetivo: Usar cURL no PHP para fazer uma requisição GET na API JSONPlaceholder e exibir o nome e e-mail do usuário.

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users/1");

curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response,true);

echo "Nome: " . $data['name'] . PHP_EOL;
echo "Email: " . $data['email'] . PHP_EOL; 