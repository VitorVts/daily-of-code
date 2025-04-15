<?php

require_once 'GoogleBooksClient.php';

class Book
{
    public string $title;
    public array $authors = [];

    public function __construct(string $title, array $authors)
    {
        $this->title = $title;
        $this->authors = $authors;
    }

    public function display(): void
    {
        $autoresFormatados = implode(', ', $this->authors);
        echo sprintf('Título: %s | Autores: %s', $this->title, $autoresFormatados) . PHP_EOL;
    }
}
