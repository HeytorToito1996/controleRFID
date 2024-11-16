<?php

$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        putenv($line); // Define cada linha como uma variável de ambiente
    }
}

class Connection{
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct(){
        $this->host = getenv('DB_HOST');
        $this->username = getenv('DB_USER');
        $this->password = getenv('DB_PASS');
        $this->database = getenv('DB_NAME');
    }

    public function conectar() {

        try {

            $conexao = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexao;


        } catch (PDOException $e) {

            echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();

            exit;

        }

    }
}

?>