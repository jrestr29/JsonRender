<?php

class Style {

    private $style;

    public function __construct() {
        $this->style = array();
    }

    function getStyle() {
        return $this->style;
    }

    function setStyle($value) {
        array_push($this->style, $value);
    }

}
