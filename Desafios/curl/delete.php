<?php 
// Fazer uma requisição DELETE para apagar um post na API https://jsonplaceholder.typicode.com/posts/1.

$curl = curl_init();


curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
]);


$result = curl_exec($curl);

if(curl_errno($curl))
{
    echo "Erro". curl_error($curl);
} else {
    echo "Deletou o ID 1 | Status da requisição: " . curl_getinfo($curl, CURLINFO_HTTP_CODE) . PHP_EOL;
}

curl_close($curl);
