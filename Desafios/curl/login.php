<?php

$loginData = json_encode([
    "email"=> "eve.holt@reqres.in",
    "password"=> "cityslicka",
]);


$loginCurl = curl_init();

curl_setopt_array($loginCurl,[
    CURLOPT_URL => "https://reqres.in/api/login",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => $loginData,
]);

$loginResponse = curl_exec($loginCurl);
curl_close($loginCurl);


$loginResult = json_decode($loginResponse, true);

if (isset($loginResult['token'])) {
    echo "Token Recebido " . $loginResult["token"] . PHP_EOL;

    $token = $loginResult["token"];

    $protectedCurl = curl_init();

    curl_setopt_array($protectedCurl,[
        CURLOPT_URL => "https://reqres.in/api/users/2",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $token"
        ]
        ]);

        $protectedResponse = curl_exec($protectedCurl);
        curl_close($protectedCurl);

        $user = json_decode($protectedResponse, true);

        echo "👤 Nome do usuário: " . $user['data']['first_name'] . " " . $user['data']['last_name'] . PHP_EOL;

    } else {
        echo "❌ Erro ao fazer login!" . PHP_EOL;
        var_dump($loginResult);
    }