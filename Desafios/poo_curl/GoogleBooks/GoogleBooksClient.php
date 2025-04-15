<?php

/**
 * Cliente para interagir com a API do Google Books.
 */

namespace VtsLibrary\GoogleBooks;

class GoogleBooksClient
{
    private string $apiKey;
    private string $apiUrl = "https://www.googleapis.com/books/v1/volumes";

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    private function makeHttpRequest(string $url)
    {
        $curl = curl_init($url);

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
            ],
            ]);

            $response = curl_exec($curl);
            $error = curl_error($curl);

            curl_close($curl);

            $data = json_decode($response, true);

            return $data;
    }
    private function buildSearchUrl(string $query): string
    {
        return sprintf('%s?q=%s&key=%s', $this->apiUrl, urlencode($query), $this->apiKey);
    }

    public function searchBooks(string $query)
    {
        $searchUrl = $this->buildSearchUrl($query);
        $results = $this->makeHttpRequest($searchUrl);

        return $results;
    }
}
