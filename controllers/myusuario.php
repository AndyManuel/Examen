<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 16/10/14
 * Time: 20:06
 */

$usuario = new Usuario();

$titulo = 'Bienvenidos al MyUsuario';
$contenido = 'Contenido de la variable...';

$variables = array ('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

view('myusuario', $variables);

?>