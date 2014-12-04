<?php

//namespace JsonRender\controller;
//require '../data/dao.php';

include('data/dao.php');
//include('util/html_element.php');
include('util/imagen_element.php');
include('util/radio_element.php');
include('util/text_element.php');
include('util/checkbox_element.php');
include('util/select_element.php');

class Controller {

    public function load($counter) {

        $db = new DAO();
        $rows = $db->consultaJSON($counter);

        $html_return = null;

        $ctrl = 0;

        $this->processJSON($rows);

        /* foreach ($rows as $row) {
          $json_format = json_decode($row['json'], true);

          $html_return .= $this->convertHtml($json_format, $ctrl);
          $ctrl++;
          } */

        return $html_return;
    }

    public function processJSON($json_main) {
        $ctrl = 0;
        $arr_dom_elements = array();

        foreach ($json_main as $json_child) {
            foreach (json_decode($json_child['json']) as $json) {
                foreach ($json as $elemento) {
                    foreach ($elemento as $key => $atributos) {
                        echo "<br>" . $key;
                        if ($key == "text") {
                            $element = new Text("DOM_" . $ctrl);
                        } else if ($key == "radiobutton") {
                            $element_id = $this->checkForRadio($arr_dom_elements);
                            if(is_null($element_id))
                                $element_id = "DOM_" . $ctrl;
                            
                            $element = new Radio($element_id);
                            

                        } else if ($key == "img") {
                            $element = new Imagen("DOM_" . $ctrl);
                            //Propiedades especificas de IMG: 
                            $element->setSrc($atributos->src);
                            unset($atributos->src);

                            if (array_key_exists("with", $atributos)) {
                                $element->setWidth($atributos->with);
                                unset($atributos->with);
                            }

                            if (array_key_exists("eight", $atributos)) {
                                $element->setHeight($atributos->eight);
                                unset($atributos->eight);
                            }
                        }


                        //Aqui vamos a procesar los atributos de cada elemento
                        foreach ($atributos as $key => $attr)
                            if (($key == 'x') || ($key == 'y')) {
                                if ($key == 'x')
                                    $key = 'left';
                                else if ($key == 'y')
                                    $key = 'top';

                                $attr = $attr . " px";
                            }

                        $element->setStyle($key, $attr);
                        
                        array_push($arr_dom_elements, $element);
                    }

                    $ctrl++;
                }
            }
        }

        //var_dump($arr_dom_elements);
        //exit;
        
        return $arr_dom_elements;
    } 
    
    public function generateHTML($arr_dom_elements){
        
    }

    public function checkForRadio($arr_dom_elements) {
        //Se busca si ya hay un elemento del tipo radio creado
        foreach ($arr_dom_elements as $e) {
            if ($e->getType() == "radio")
                return $e->getId();
        }

        return null;
    }

}
