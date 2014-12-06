<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 16/10/14
 * Time: 20:00
 */
class Usuario{

    private $name;

    public function getUsuario(){
        echo "<br>Mostrar Usuario:".$this->name;
    }

    public function setUsuario(){
        $this->name = "Ra&uacute;l";
        return $this->name;
    }

    public function consultaGeneral(){
        $sql04 = "SELECT * FROM usuario WHERE Estatus = 1 ORDER BY ApellidoPaterno ASC;";
        $consulta04 = mysql_query($sql04)or die("Error de consulta 1");
        echo"<div class='table-responsive'>";
        echo"<table class='table table-striped'>";
        echo"<tr><td colspan='5' align='center'><strong>Lista de Usuarios</strong></td></tr>";
        echo"<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th>";

        while($field = mysql_fetch_array($consulta04)){
            $this->Id = $field['Id'];
            $this->Nombre = $field['Nombre'];
            $this->ApellidoPaterno = $field['ApellidoPaterno'];
            $this->ApellidoMaterno = $field['ApellidoMaterno'];
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo"<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$this->Nivel</td></tr></tr>";
        }
        echo"</table>";
        echo"</div>";
    }
}

?>