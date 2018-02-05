-- MySQL dump 10.16  Distrib 10.2.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: GQS
-- ------------------------------------------------------
-- Server version	10.2.10-MariaDB

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
-- Table structure for table `static`
--

DROP TABLE IF EXISTS `static`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `short_title` varchar(24) NOT NULL,
  `title` varchar(240) NOT NULL,
  `byline` varchar(512) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static`
--

LOCK TABLES `static` WRITE;
/*!40000 ALTER TABLE `static` DISABLE KEYS */;
INSERT INTO `static` VALUES (1,'home','Home Page','Welcome to the Generic Quotation System. ','<p>You can create custom products that have unique configurations</p>\r\n<p>Customers can get a price for their perfect product, based on choices they make</p>','home.png'),(2,'about','About Us','We are software developers making generic solutions to generic problems','<p>We charge a lot of money to do very little</p>\r\n<p>Try this generic Quotation System Now to see what we can do for you</p>','about.png'),(3,'philosophy','Philosophy','Our goals and Ideals','<p>We have None</p>','philosophy.png'),(5,'contact','Contact Us','We\'re not very available, there is no certainty that we\'ll get back to you','<p>11 Foobar Ct</p>\r\n<p>NOWHEREVILLE</p>\r\n<p>Qld 4999</p>\r\n<p>Australia</p>','contact.png');
/*!40000 ALTER TABLE `static` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `isadmin` varchar(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'asdf','asdf','asdf','asdf','',''),(2,'qwer','qwer','qwer','qwer','',''),(3,'zxcv','zxcv','zxcv','xzcv','','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-05 15:57:31
