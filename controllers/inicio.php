<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:02
 */

$titulo = 'Bienvenidos al Inicio';
$contenido = '.....Welcome.......';

$variables = array('titulo'=>$titulo, 'contenido'=> $contenido,);

view('home',$variables);
