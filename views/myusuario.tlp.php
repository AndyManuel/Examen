<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 16/10/14
 * Time: 20:06
 */
require ('./template/menu.php');

$usuario02 = new Usuario();
?>

<html>
    <head></head>
<body>
<h1><?php echo"$titulo"; ?> </h1>
<p> <?php echo"$contenido"; ?> </p>
<p> <?php echo"$nombre"; ?> </p>
<p>
    <?php
$usuario02->setUsuario();
$usuario02->getUsuario();

    $usuario02->consultaGeneral();
?>
</p>
</body>
</html>