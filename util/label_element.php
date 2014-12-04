<?php

class Label {

    private $text;
    private $for;

    public function __construct($text=null, $for=null){
        if(!is_null($text))
            $this->setText ($text);
        
        if(!is_null($for))
            $this->setFor ($for);        
    }
    
    function getText() {
        return $this->text;
    }

    function getFor() {
        return $this->for;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setFor($for) {
        $this->for = $for;
    }

}
