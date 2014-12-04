<?php

//namespace JsonRender\controller;

//require '../data/dao.php';

include('data/dao.php');

class Controller {

    private $db;
    
    public function __construct() {
        $this->db = $this->getDatabase();
    }

    public function getDatabase() {
        $db = new DAO();
    }

    public function h() {
        echo "todo bien";
    }
    
    public function load($counter=null){
        return "llamado: ".$counter;
    }
    
    public function convertHtml($json){
        $html = null;
    }

}
