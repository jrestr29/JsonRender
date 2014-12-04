<?php

include 'database.php';

class DAO{
    
    
    public function consultaJSON($counter){
        $database = new Database();
        
        $stmt = $database->getPdo()->prepare("SELECT json FROM JSON_Elementos LIMIT :limit");
        $stmt->bindValue(':limit', (int)$counter, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
}

