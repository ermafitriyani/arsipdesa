-- MySQL dump 10.15  Distrib 10.0.28-MariaDB, for debian-linux-gnueabihf (armv7l)
--
-- Host: hlp_arsip    Database: hlp_arsip
-- ------------------------------------------------------
-- Server version	10.0.28-MariaDB-2+b1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_dokumen`
--

DROP TABLE IF EXISTS `tbl_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_dokumen` varchar(100) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dokumen`
--

LOCK TABLES `tbl_dokumen` WRITE;
/*!40000 ALTER TABLE `tbl_dokumen` DISABLE KEYS */;
INSERT INTO `tbl_dokumen` VALUES (1,1,'RKP Desa Tayu',2020,'11/A/B','1_20211121113326.pdf',''),(9,2,'RKP Desa Tayu',0000,'AA/1/2','',''),(10,1,'RKP Desa Tayu',2002,'AA/1/2','',''),(11,1,'RKP Desa Tayu',2002,'AA/1/2','',''),(12,1,'RKP Desa Tayu',2002,'AA/1/2','',''),(13,1,'RKP Desa Tayu',2002,'AA/1/2','',''),(14,1,'RKP Desa Tayu',2002,'AA/1/2','',''),(15,1,'RKP Desa Tayu',2002,'AA/1/2','','');
/*!40000 ALTER TABLE `tbl_dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_kategori_dokumen`
--

DROP TABLE IF EXISTS `tbl_kategori_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_kategori_dokumen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) DEFAULT NULL,
  `status` enum('Aktif','Tidak') DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_kategori_dokumen`
--

LOCK TABLES `tbl_kategori_dokumen` WRITE;
/*!40000 ALTER TABLE `tbl_kategori_dokumen` DISABLE KEYS */;
INSERT INTO `tbl_kategori_dokumen` VALUES (1,'RKP Desa','Aktif'),(4,'2','Aktif'),(5,'APBT','Aktif');
/*!40000 ALTER TABLE `tbl_kategori_dokumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `level` enum('Admin','Lurah') DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','Erma Fitriyani','Admin'),('lurah','04960f28e4129aac5bdc9da32056560d','Pak Lurah Desa','Lurah');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-25 15:18:30
