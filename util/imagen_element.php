<?php

include_once('html_element.php');

class Imagen extends Element {

    private $src;
    private $width;
    private $height;

    public function __construct($id) {
        $this->setType("img");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
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

    public function generateHTML() {
        $style = implode(";", $this->getStyle());

        $html = null;
        $html .= "<img src='" . $this->getSrc() . "' width='" . $this->getWidth() . "' height='" . $this->getHeight() . "'  style='" . $style . "'>";

        return $html;
    }

}
