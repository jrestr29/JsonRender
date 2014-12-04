<?php

include_once('html_element.php');

class Select extends Element{
    //private $options;
    public function __construct($id) {
        $this->setType("select");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
    }
}
