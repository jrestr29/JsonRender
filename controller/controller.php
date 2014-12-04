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

    public function h() {
        echo "todo bien";
    }

    public function load($counter) {

        $db = new DAO();
        $rows = $db->consultaJSON($counter);

        $html_return = null;

        $ctrl = 0;
        foreach ($rows as $row) {
            $json_format = json_decode($row['json'], true);

            $html_return .= $this->convertHtml($json_format, $ctrl);
            $ctrl++;
        }

        //var_dump($rows);
        //exit;

        return $html_return;

        //return "llamado: " . $counter;
    }

    public function convertHtml($json, $id) {
        $html = null;

        $html_type = null;
        $attributes = null;
        $ctrl = 0;

        $elements = array();


        foreach ($json as $child) {
            //echo sizeof($child);
            //exit;

            foreach ($child as $c) {
                foreach ($c as $key => $attrs) {
                    $html_type = $key;
                    if ($html_type == 'radiobutton')
                        $html_type = 'radio';

                    if ($html_type == 'radio') {
                        $element = new Radio();
                    } else if ($html_type == 'img') {
                        $element = new Imagen();

                        $element->setSrc($attrs['src']);
                        unset($attrs['src']);

                        if (array_key_exists("with", $attrs)) {
                            $element->setWidth($attrs['with']);
                            unset($attrs['with']);
                        }

                        if (array_key_exists("eight", $attrs)) {
                            $element->setHeight($attrs['eight']);
                            unset($attrs['eight']);
                        }
                    } else if ($html_type == 'text') {
                        $element = new Text();
                    } else if ($html_type == 'checkbox') {
                        //$element = new
                    } else if ($html_type == 'select') {
                        $element = new Select();
                    }

                    if (array_key_exists("label", $attrs)) {
                        $element->setLabel($attrs['label']);
                        unset($attrs['label']);
                    }
                    
                    foreach ($attrs as $key => $attribute) {
                        $element->setStyle($key, $attribute);
                    }




                    /*                   $element->setType($html_type);

                      if (array_key_exists("label", $attrs)) {
                      $element->setLabel($attrs['label']);
                      unset($attrs['label']);
                      }

                      foreach ($attrs as $key => $attribute) {
                      $element->setStyle($key, $attribute);
                      } */
                }


                /* foreach ($c as $key => $attrs) {
                  $html_type = $key;
                  if($html_type =='radiobutton')
                  $html_type = 'radio';

                  if (array_key_exists("label", $attrs)) {
                  //echo $attrs['label']; exit;

                  $html .= $this->parseLabels($attrs['label'], "DOM_" . $id . "_" . $ctrl);

                  unset($attrs['label']);
                  }

                  foreach ($attrs as $key => $attribute) {
                  $attributes .= $key . '="' . $attribute . '" ';
                  }
                  } */



                //$html .= "<input name='DOM_" . $id . "_" . $ctrl . "' id='DOM_" . $id . "_" . $ctrl . "' type='" . $html_type . "' " . $attributes . ">";
                //$html_type = null;
                //$attributes = null;
                array_push($elements, $element);
                $ctrl++;
            }
            //       echo $html; exit;
        }


        //echo sizeof($elements);
        var_dump($elements);
        exit;

        /* foreach ($json as $child) {
          foreach ($child as $c) {
          $html_type = key($c);
          foreach ($c as $key => $attrs) {
          //Primero buscamos el atributo label en caso de que exista y luego lo eliminamos y procesamos
          //var_dump($attrs); exit;
          if (array_key_exists("label", $attrs)) {

          $html .= $this->parseLabels($attrs['label'], "DOM_" . $id . "_" . $ctrl);
          unset($attrs['label']);
          }

          foreach ($attrs as $key => $attribute) {
          $attributes .= $key . '="' . $attribute . '" ';
          }
          }
          }
          $html .= "<input name='DOM_" . $id . "_" . $ctrl . "' id='DOM_" . $id . "' type=" . $html_type . " " . $attributes . ">";
          $ctrl++;
          //exit;
          } */


        return $html;
    }

    /* public function parseLabels($labelJSON, $DOM_ID) {
      $labelJSON = str_replace('"', "'", $labelJSON);
      $labelJSON = str_replace("\\", "", $labelJSON);
      $labelJSON = str_replace("/", "", $labelJSON);
      $label = "<label for=" . $DOM_ID . ">" . $labelJSON . "</label>";

      return $label;
      }

      public function parseStyle() {

      } */

    public function checkForRadio() {
        
    }

}
