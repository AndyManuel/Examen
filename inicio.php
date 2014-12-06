<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:01
 */

require('helpers.php');
require('clases/Usuario.php');
require('clases/preguntas.php');
require('template/header.php');
require ('template/menu.php');
require('bd/bd.php');

$cuestionario = new preguntas();

if(isset($_REQUEST['url'])){
    switch($_REQUEST['url']){
        case "validar":
            $cuestionario->validar();
            
            break;


    }
}


if(empty($_GET['url'])){
    $_GET['url']='home';

controller($_GET['url']);
}else {
    controller($_GET['url']);
}

require ('template/footer.php');
?>

