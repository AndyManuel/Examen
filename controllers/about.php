<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:59
 */


$titulo = 'Bienvenidos al About';
$contenido = '.....Acerca de Nosotros.......';

$variables = array('titulo'=>$titulo, 'contenido'=> $contenido,);

view('home',$variables);