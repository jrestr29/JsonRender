<?php

//namespace data;

include 'database.php';

class DAO{
    
    private $pdo_instance;
    
    public function __construct() {
        $this->pdo_instance = $this->getPdoInstance();
    }
    
    private function getPdoInstance(){
        $database = new Database();
        $this->pdo_instance = $database->getPdo();
    }
    
    public function getRow(){
        
    }
    
}

