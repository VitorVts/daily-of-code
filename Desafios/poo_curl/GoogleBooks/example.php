<?php

require_once 'GoogleBooksClient.php';
require_once 'Book.php';
use VtsLibrary\GoogleBooks\GoogleBooksClient;

$apiKey = "AIzaSyCfpL6Urn8IfEmY8S7SnXJIPeeL-KTE_O4";

$client = new GoogleBooksClient($apiKey);

$response = $client->searchBooks("Eragon");

foreach ($response['items'] as $item) {
    $info = $item['volumeInfo'];

    $title = $info['title'] ?? 'Sem título';
    $authors = $info['authors'] ?? ['Autor desconhecido'];

    $book = new Book($title, $authors);
    $book->display();
}
