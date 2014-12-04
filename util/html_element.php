<?php

include('label_element.php');
include('style_element.php');

class Element {

    private $id;
    private $name;
    private $style;
    private $type;
    private $label;

    function createStyle() {
        $this->style = new Style();
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
        return $this->style;
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

    function setStyle($property, $Value) {
        $this->style->setStyle($property, $Value);
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
