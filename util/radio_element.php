<?php

include_once('html_element.php');

class Radio extends Element{
    //private $options;
    
    public function __construct() {
        $this->setType("radio");
    }
}

