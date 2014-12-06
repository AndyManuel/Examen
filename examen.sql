/*
SQLyog Ultimate v8.61 
MySQL - 5.6.20 : Database - examen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`examen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `examen`;

/*Table structure for table `detalle_respuestas` */

DROP TABLE IF EXISTS `detalle_respuestas`;

CREATE TABLE `detalle_respuestas` (
  `id_calif` int(11) NOT NULL AUTO_INCREMENT,
  `nom_u` varchar(50) DEFAULT NULL,
  `num_ac` int(11) DEFAULT NULL,
  UNIQUE KEY `id_calif` (`id_calif`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `detalle_respuestas` */

insert  into `detalle_respuestas`(`id_calif`,`nom_u`,`num_ac`) values (7,'2',0),(8,'1',0),(9,'1',0),(10,'1',0),(11,'1',2),(12,'1',2),(13,'1',2),(14,'1',0),(15,'1',0),(16,'1',0);

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` varchar(300) DEFAULT NULL,
  `Respuesta` varchar(300) DEFAULT NULL,
  `R1` varchar(200) DEFAULT NULL,
  `R2` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id_p`,`Pregunta`,`Respuesta`,`R1`,`R2`) values (1,'¿Se utiliza para especificar el paquete que pertenece a una clase?','package','paquete','caja'),(2,'¿Permite importar una clase contenida en un paquete?','import','require','include'),(3,'¿Permite retornar un valor cuando un metodo es llamado?','return','void','returns'),(4,'¿Permite a un metodo declarar la lista de excepciones que puede lanzar?','trhows','exception','value'),(5,'¿Sirve para declarar datos que contienen una parte decimal?','float','int','double'),(6,'¿Permite crear una clase o un metodo con proteccion de tipo publico?','public','static','private'),(7,'¿Se utiliza para crear una clase?','class','new','new class'),(8,'¿Indica que el metodo no devuelve algun valor?','void','return','returns'),(9,'Se utiliza para detener las interacciones de un ciclo','break','romper','while'),(10,'Permite declarar una variable de tipo entero','int','double','string'),(11,'Permite crear una instruccion condicional o doble','if','while','for'),(12,'Permite ejecutar instrucciones repetidamente un numero determinado de veces','while','if','case'),(13,'Permite declarar un dato de tipo caracter','varchar','double','string'),(14,'Permite ejecutar una o varias acciones, en funcion del valor de una variable o expresion','switch','while','if'),(15,'Cual de las siguientes es una palabra reservada en JAVA','args','public','string');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`Nombre`,`password`) values (1,'Andy','1234'),(2,'Manuel','1234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
