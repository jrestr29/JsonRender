<?php

include_once('html_element.php');

class Select extends Element{
    //private $options;
    public function __construct() {
        $this->setType("select");
    }
}
