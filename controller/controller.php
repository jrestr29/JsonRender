<?php

//namespace JsonRender\controller;
//require '../data/dao.php';

include('data/dao.php');

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


        foreach ($json as $child) {
            foreach ($child as $c) {
                $html_type = key($c);

                foreach ($c as $key => $attrs) {
                    //Primero buscamos el atributo label en caso de que exista y luego lo eliminamos y procesamos
                    if (array_key_exists("label", $attrs)) {

                        $html .= $this->parseLabels($attrs['label'], "DOM_" . $id . "_" . $ctrl);
                        //$this->parseLabels($attrs['label'], "DOM_".$id);
                        unset($attrs['label']);
                    }

                    foreach ($attrs as $key => $attribute) {
                        $attributes .= $key . '="' . $attribute . '" ';
                    }
                    $ctrl++;
                }
            }
        }

        $html .= "<input name='DOM_" . $id . "_" . $ctrl . "' id='DOM_" . $id . "' type=" . $html_type . " " . $attributes . ">";
        return $html;
//        echo $html;
//        exit;
    }

    public function parseLabels($labelJSON, $DOM_ID) {
        $labelJSON = str_replace('"', "'", $labelJSON);
        $labelJSON = str_replace("\\", "", $labelJSON);
        $labelJSON = str_replace("/", "", $labelJSON);
        $label = "<label for=" . $DOM_ID . ">" . $labelJSON . "</label>";

        return $label;
    }

}
