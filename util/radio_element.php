<?php

include_once('html_element.php');

class Radio extends Element{
    //private $options;
    
    public function __construct($id) {
        $this->setType("radio");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
    }
    
    public function generateHTML(){
        $html = null;
        $html .= "<label for='".$this->getLabel()->getFor()."'>".$this->getLabel()->getText()."</label>"; //Label
        $html .= "<input type='radio' name='".$this->getName()."' id='".$this->getId()."' style='".  implode('; ', $this->getStyle())."'>";
        
        return $html;
    }
}

