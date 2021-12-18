-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: url_short
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `url`
--

DROP TABLE IF EXISTS `url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `url` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(45) NOT NULL,
  `destiny` text NOT NULL,
  `title` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_UNIQUE` (`url`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `url`
--

LOCK TABLES `url` WRITE;
/*!40000 ALTER TABLE `url` DISABLE KEYS */;
INSERT INTO `url` VALUES (1,'O','https://www.google.com/','Google'),(2,'F','https://www.google.com/',NULL),(3,'b','https://www.yahoo.com/',NULL),(5,'R','https://www.yahoo.com/',NULL),(6,'M','https://www.yahoo.com/',NULL),(7,'n','https://www.yahoo.com/',NULL),(8,'C','https://www.yahoo.com/',NULL),(10,'7','https://www.yahoo.com/',NULL),(12,'S','https://www.yahoo.com/',NULL),(13,'Q','https://www.yahoo.com/',NULL),(14,'2','https://www.yahoo.com/',NULL),(15,'u','https://www.yahoo.com/',NULL),(16,'6','https://www.yahoo.com/',NULL),(17,'z','https://www.yahoo.com/',NULL),(18,'h','https://www.yahoo.com/',NULL),(19,'4','https://www.yahoo.com/','Google'),(20,'y','https://www.yahoo.com/','Google'),(21,'d','https://www.yahoo.com/','Google');
/*!40000 ALTER TABLE `url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `url_count`
--

DROP TABLE IF EXISTS `url_count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `url_count` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUrl` int NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `url_count`
--

LOCK TABLES `url_count` WRITE;
/*!40000 ALTER TABLE `url_count` DISABLE KEYS */;
INSERT INTO `url_count` VALUES (1,1,'2021-12-17 23:29:58'),(2,1,'2021-12-17 23:35:12'),(3,21,'2021-12-17 23:56:01'),(4,1,'2021-12-17 23:59:50');
/*!40000 ALTER TABLE `url_count` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-17 19:05:17
