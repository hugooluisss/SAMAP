CREATE DATABASE  IF NOT EXISTS `samap` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `samap`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: samap
-- ------------------------------------------------------
-- Server version	5.6.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `idReporte` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idUsuario` bigint(20) unsigned NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `latitud` varchar(20) DEFAULT '0',
  `longitud` varchar(20) DEFAULT '0',
  `direccion` text,
  PRIMARY KEY (`idReporte`),
  KEY `fk_usuario` (`idUsuario`),
  CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
INSERT INTO `reporte` VALUES (5,11,'2015-12-08 18:57:42','17.0637447','-96.7253164','RUTA INDEPENDENCIA, Centro, Oaxaca, Oax., México'),(6,11,'2015-12-08 18:58:55','17.0637447','-96.7253164','RUTA INDEPENDENCIA, Centro, Oaxaca, Oax., México'),(7,11,'2015-12-08 19:10:00','17.07978129386852','-96.70957803725915','Reforma, Oaxaca, Oax., México'),(8,11,'2015-12-08 19:16:13','17.0637447','-96.7253164','RUTA INDEPENDENCIA, Centro, Oaxaca, Oax., México'),(9,11,'2015-12-23 07:48:38','17.026587499999998','-96.7088816','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(10,11,'2015-12-23 07:48:48','17.026587499999998','-96.7088816','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(11,11,'2015-12-23 16:23:37','17.0265758','17.0265758','Reporte a solicitud de administrador'),(12,11,'2015-12-23 16:50:35','17.0266491','17.0266491','Reporte a solicitud de administrador'),(13,11,'2015-12-23 17:05:18','17.0266159','17.0266159','Reporte a solicitud de administrador'),(14,11,'2015-12-23 17:33:29','17.026597199999998','-96.7088835','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(15,11,'2015-12-23 17:39:16','17.0265914','-96.7088926','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(16,11,'2015-12-23 17:40:21','17.0266253','-96.70890039999999','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(17,11,'2015-12-23 17:41:23','17.0265961','-96.7088859','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(18,11,'2015-12-23 17:43:19','17.02665','-96.70889749999999','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(19,11,'2015-12-23 17:44:20','17.0266035','-96.70890759999999','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(20,11,'2015-12-23 17:45:34','17.0266301','-96.7089122','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México'),(21,11,'2015-12-23 17:46:42','17.026604','-96.70887979999999','3ra Seccionparte Baja, 71236 San Antonio de la Cal, Oax., México');
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-23 11:54:11
