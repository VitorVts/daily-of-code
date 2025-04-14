<?php 

$curl = curl_init();

$data = "title=MeuPost&body=Conteudo+do+post";

curl_setopt_array($curl,[
    CURLOPT_URL => "https://httpbin.org/post",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/x-www-form-urlencoded"
    ],
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo "Erro :". curl_error($curl);
}

curl_close($curl);

$response = json_decode($response, true);

echo "Dados enviados com sucesos" . PHP_EOL;
echo "Título: " . $response['form']['title'] . PHP_EOL;
echo "Corpo: " . $response['form']['body'] . PHP_EOL;