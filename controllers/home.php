<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:02
 */

$titulo = 'Bienvenidos';
$contenido = '.....Cuestinario.......';

$pregun = new preguntas();

$variables = array('formulario'=>$pregun->mostrarPreguntas());

view('home',$variables);
