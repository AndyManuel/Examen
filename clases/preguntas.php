<?php
/**
 * Created by PhpStorm.
 * User: Machine-Andrew
 * Date: 20/10/14
 * Time: 20:06
 */
class preguntas{
    public $id_p;
    public $Pregunta;
    public $Respuesta;
    public $R1;
    public $R2;
    public $R3;

    public function mostrarPreguntas(){
        echo "<form action='validar' method='POST'>";
        echo"<table>";

        for($y=0;$y<=9;$y++)
        {
        $n=$y+1;
        $x=rand(1,15);
        $sql="SELECT * FROM preguntas where id_p=$x;";
        $consulta=mysql_query($sql);
        $cuantos = mysql_num_rows($consulta);
        $id_p = mysql_result($consulta,0,'id_p');
        $Pregunta = mysql_result($consulta,0,'Pregunta');
        $Respuesta = mysql_result($consulta,0,'Respuesta');
	$R1 = mysql_result($consulta,0,'R1');
	$R2 = mysql_result($consulta,0,'R2');
        echo"<tr><td>Pregunta $n:</td></tr><td>$Pregunta</td></tr>";
        echo"<tr><td><input type=radio name=r$n value='$Respuesta'>$Respuesta</input></td></tr>";
	echo"<tr><td><input type=radio name=r$n value='$R1'>$R1</input></td></tr>";
	echo"<tr><td><input type=radio name=r$n value='$R2'>$R2</input></td></tr>";
    echo"<input type=text name=idp$n hidden value=$id_p>";


}
        echo"<tr><td><center><input type=submit value=Enviar></center></td></tr>";
        echo"</table></form>";

    }
    public function validar(){
        $suma=0;
        for($y=0;$y<=9;$y++)
        {
            $n=$y+1;
            @$respuesta=$_POST['r'.$n];
            @$id_p=$_POST['idp'.$n];
            $sql="SELECT Respuesta FROM preguntas WHERE Respuesta='$respuesta' AND id_p=$id_p;";
            $consulta=mysql_query($sql) or die ("Error en la consulta");
            $cont=mysql_num_rows($consulta);
            if($cont!=0)
            {
                $suma=$suma+1;


            }
        }
        $sql2="INSERT INTO detalle_respuestas (nom_u,num_ac) VALUES (1,$suma);";
        $consulta2=mysql_query($sql2) or die ("Error en la consulta12213");
        echo$consulta2;
        echo"<center><h2>Numero de Aciertos: $suma</h2></center>";
        $_GET['url']='home';
    }





}
?>