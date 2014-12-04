<?php

include_once('html_element.php');

class Checkbox extends Element{
    //private $options;
    public function __construct() {
        $this->setType("checkbox");
    }
}

