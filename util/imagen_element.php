<?php

include_once('html_element.php');

class Imagen extends Element {

    private $src;
    private $width;
    private $height;

    public function __construct() {
        $this->setType("img");
    }

    function getSrc() {
        return $this->src;
    }

    function getWidth() {
        return $this->width;
    }

    function getHeight() {
        return $this->height;
    }

    function setSrc($src) {
        $this->src = $src;
    }

    function setWidth($width) {
        $this->width = $width;
    }

    function setHeight($height) {
        $this->height = $height;
    }

}
