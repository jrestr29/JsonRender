<?php

include_once('html_element.php');

class Checkbox extends Element{
    //private $options;
    public function __construct($id) {
        $this->setType("checkbox");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
    }
}

