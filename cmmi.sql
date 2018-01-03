-- MySQL dump 10.13  Distrib 5.7.15, for Win64 (x86_64)
--
-- Host: localhost    Database: cmmi
-- ------------------------------------------------------
-- Server version	5.7.15-log

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
-- Table structure for table `cmmi_attr`
--

DROP TABLE IF EXISTS `cmmi_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_attr` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL DEFAULT '',
  `color` char(10) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_attr`
--

LOCK TABLES `cmmi_attr` WRITE;
/*!40000 ALTER TABLE `cmmi_attr` DISABLE KEYS */;
INSERT INTO `cmmi_attr` VALUES (2,'dasdasd','#FFF'),(3,'adsada','#FF0'),(5,'1号','#FFF'),(6,'big男','#0070a6'),(7,'红色','#F00');
/*!40000 ALTER TABLE `cmmi_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_blog`
--

DROP TABLE IF EXISTS `cmmi_blog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '',
  `content` text,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL,
  `del` tinyint(1) NOT NULL DEFAULT '0',
  `money` double NOT NULL DEFAULT '0',
  `year` int(10) DEFAULT NULL,
  `month` int(10) DEFAULT NULL,
  `day` int(10) DEFAULT NULL,
  `vid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_blog`
--

LOCK TABLES `cmmi_blog` WRITE;
/*!40000 ALTER TABLE `cmmi_blog` DISABLE KEYS */;
INSERT INTO `cmmi_blog` VALUES (2,'asd',' d',1514524575,2,0,7856,2017,4,8,2),(3,'d',' 1',1514524605,1,0,0,5874,12,1,0),(4,'打',' 111',1514525037,1,1,4978.5,2036,1,8,0),(5,'zc',' sda',1514535332,3,0,984612,523,1,3,0),(6,'3',' dsa',1514541484,2,0,9525,2017,4,8,2);
/*!40000 ALTER TABLE `cmmi_blog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_blog_attr`
--

DROP TABLE IF EXISTS `cmmi_blog_attr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_blog_attr` (
  `bid` int(10) unsigned NOT NULL,
  `aid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_blog_attr`
--

LOCK TABLES `cmmi_blog_attr` WRITE;
/*!40000 ALTER TABLE `cmmi_blog_attr` DISABLE KEYS */;
INSERT INTO `cmmi_blog_attr` VALUES (2,6),(3,2),(4,2),(5,2),(6,3);
/*!40000 ALTER TABLE `cmmi_blog_attr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_cate`
--

DROP TABLE IF EXISTS `cmmi_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_cate` (
  `id` int(10) unsigned NOT NULL,
  `name` char(15) NOT NULL DEFAULT '',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(6) NOT NULL DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_cate`
--

LOCK TABLES `cmmi_cate` WRITE;
/*!40000 ALTER TABLE `cmmi_cate` DISABLE KEYS */;
INSERT INTO `cmmi_cate` VALUES (1,'html',0,1),(2,'cssdiv',0,2),(3,'js',0,3),(4,'php',0,4),(5,'mysql',0,5),(6,'linux',0,6),(11,'jQuery',3,2),(12,'ajax',3,1),(13,'字符串',4,1),(14,'数组',4,3),(15,'对象',4,2),(16,'123',3,100),(17,'zxc',2,100),(18,'zxc',11,100);
/*!40000 ALTER TABLE `cmmi_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_user`
--

DROP TABLE IF EXISTS `cmmi_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `logintime` int(10) unsigned NOT NULL DEFAULT '0',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `admin` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `password_UNIQUE` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_user`
--

LOCK TABLES `cmmi_user` WRITE;
/*!40000 ALTER TABLE `cmmi_user` DISABLE KEYS */;
INSERT INTO `cmmi_user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3',1514530118,'0.0.0.0',1),(2,'123456','e10adc3949ba59abbe56e057f20f883e',1514523849,'0.0.0.0',0);
/*!40000 ALTER TABLE `cmmi_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_username`
--

DROP TABLE IF EXISTS `cmmi_username`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_username` (
  `id` int(11) DEFAULT NULL,
  `username` text,
  `logintime` int(11) DEFAULT NULL,
  `password` text,
  `loginip` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_username`
--

LOCK TABLES `cmmi_username` WRITE;
/*!40000 ALTER TABLE `cmmi_username` DISABLE KEYS */;
INSERT INTO `cmmi_username` VALUES (1,'test',1514370889,'test','0.0.0.0');
/*!40000 ALTER TABLE `cmmi_username` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cmmi_visitor`
--

DROP TABLE IF EXISTS `cmmi_visitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cmmi_visitor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cmmi_visitor`
--

LOCK TABLES `cmmi_visitor` WRITE;
/*!40000 ALTER TABLE `cmmi_visitor` DISABLE KEYS */;
INSERT INTO `cmmi_visitor` VALUES (2,'dsfsd',23542,'dfsf'),(3,'123',1813186156,'`asdasda'),(4,'',NULL,NULL);
/*!40000 ALTER TABLE `cmmi_visitor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-29 18:48:09
