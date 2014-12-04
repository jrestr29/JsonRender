<?php

include 'database.php';

class DAO{
    
    
    public function consultaJSON($counter){
        $database = new Database();
        
        $offset = $counter - 1;
        if($offset < 0)
            $offset = 0;
        
        $stmt = $database->getPdo()->prepare("SELECT json FROM JSON_Elementos LIMIT  1 OFFSET :offset ");
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
}

