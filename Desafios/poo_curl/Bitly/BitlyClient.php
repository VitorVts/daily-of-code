<?php

class BitlyClient
{
    private $accessToken = "e8f2ee8d39d9f3c07754b81f1e42149d6313af1f";
    private $apiUrl = "https://api-ssl.bitly.com/v4/shorten";

    public function makeHttpRequest(string $url)
    {
        $data = [
            "long_url" => $url
        ];

        $curl = curl_init($this->apiUrl);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$this->accessToken}",
                "Content-Type: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $result = json_decode($response, true);

        if ($httpCode === 200 && isset($result['link'])) {
            echo "Link encurtado: " . $result['link'];
        } else {
            echo "Erro ao encurtar:\n";
            print_r($result);
        }
    }
}

$bitly = new BitlyClient();
$bitly->makeHttpRequest("https://www.google.com/maps?q=-23.55052,-46.633308");
