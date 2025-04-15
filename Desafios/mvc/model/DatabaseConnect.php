<?php

class DatabaseConnect
{

    public function __construct(
        private string $db,
        private string $host,
        private int $port,
        private string $username,
        private string $password
    ) {
       
    }

    public function connect()
    {
        try {

            $dsn = sprintf("mysql:host=%s;dbname=%s", $this->host, $this->db);
            $conn = new PDO($dsn, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage() . PHP_EOL;
        }
        
    }
}


$database = new DatabaseConnect("cliente","localhost",3306,"root","");
$conn = $database->connect();

if ($conn) {
    $query = $conn->query("SELECT * FROM tb_cliente");

    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    var_dump($results);
}