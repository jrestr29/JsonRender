<?php

class Style {

    private $style;

    public function __construct() {
        $this->style = array();
    }

    function getStyle() {
        return $this->style;
    }

    function setStyle($property, $value) {
        $this->style[$property] = $value;
//        array_push($this->style, $style);
    }

}
