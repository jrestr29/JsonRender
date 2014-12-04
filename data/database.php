<?php

//namespace data;

class Database {

    private $pdo;
    private $database_name = 'prueba_tecnica';
    private $database_user = 'root';
    private $database_password = 'Jose342';
    private $database_host = 'localhost';

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->database_host . ';dbname=' . $this->database_name, $this->database_user, $this->database_password);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            exit;
        }
    }

    public function getPdo() {
        return $this->pdo;
    }

}
