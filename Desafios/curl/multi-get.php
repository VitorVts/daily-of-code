<?php 

$curl = curl_init();

curl_setopt_array($curl,[
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/users",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPGET => true,
    CURLOPT_HTTPHEADER => [
        "Content-type: application/json "
        ]
]);

$response = curl_exec($curl);

if (curl_errno($curl)) 
{
    echo "Erro: ". curl_error($curl);
    return;
}

$data = json_decode($response,true);

foreach ($data as $key => $value) {
    echo $key + 1 . ". Nome: " . $value["name"] . " | Email: " . $value["email"] . PHP_EOL;
    echo str_repeat("-", 30) . PHP_EOL; // Separador para cada item
}
