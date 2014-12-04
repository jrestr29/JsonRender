<?php

include_once('html_element.php');

class Text extends Element{
    public function __construct($id) {
        $this->setType("text");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
    }
    
    //private $options;
}
