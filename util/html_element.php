<?php

include('label_element.php');
include('style_element.php');

class Element {

    private $id;
    private $name;
    private $style;
    private $div_style;
    private $type;
    private $label;
    
    function getDiv_style() {
        return $this->div_style->getStyle();
    }

    function setDiv_style($value) {
        $this->div_style->setStyle($value);
    }

    
    function createStyle() {
        $this->style = new Style();
        $this->div_style = new Style();
    }

    function createLabel() {
        $this->label = new Label(null, $this->getId());
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getStyle() {
        return $this->style->getStyle();
    }

    function getType() {
        return $this->type;
    }

    function getLabel() {
        return $this->label;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setStyle($value) {
        $this->style->setStyle($value);
    }

    function setType($type) {
        $this->type = $type;
    }

    function setLabel($label) {
        $this->label->setText($label);
    }

    public function getHTML() {
        
    }

}
