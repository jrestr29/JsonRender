<?php
define('URL_EJECUCION', 'http://74.208.132.152/JsonRender/');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['load'])) {
    require_once('controller/controller.php');
    $controller = new Controller();

    if (isset($_GET['func'])) {
        if (isset($_POST['counter'])) {
            echo json_encode($controller->{$_GET['func']}($_POST['counter']));
        } else {
            echo json_encode($controller->{$_GET['func']}());
        }
    }
} else {
    require_once ('view/render.php');
}