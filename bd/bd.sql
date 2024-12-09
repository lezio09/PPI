CREATE DATABASE  IF NOT EXISTS `romulo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `romulo`;
 SET NAMES utf8 ;


DROP TABLE IF EXISTS `usuario`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `usuario` WRITE;
INSERT INTO `usuario` VALUES (1,'da','ad@a'),(2,'da','ad@a');
UNLOCK TABLES;

