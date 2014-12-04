<?php

include_once('html_element.php');

class Text extends Element {

    public function __construct($id) {
        $this->setType("text");
        $this->setName($id);
        $this->setId($id);
        $this->createLabel();
        $this->createStyle();
    }

    public function generateHTML() {
        $div_style = implode("; ", $this->getDiv_style());
        $style = implode("; ", $this->getStyle());


        $html = null;
        $html .= "<div class='display_inline' style='".$div_style."'><label for='" . $this->getLabel()->getFor() . "'>" . $this->getLabel()->getText() . "</label>"; //Label
        $html .= "<input type='text' name='" . $this->getName() . "' id='" . $this->getId() . "' style='".$style."'></div>";

        return $html;
    }

}
