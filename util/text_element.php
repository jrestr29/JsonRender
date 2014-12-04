<?php

include_once('html_element.php');

class Text extends Element{
    public function __construct() {
        $this->setType("text");
    }
    
    //private $options;
}
