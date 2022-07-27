-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: Govaccine
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Maryulianti','Yulhy27',12345),(2,'Marbela Sosang Timbo','Marbela',151101);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informasi`
--

DROP TABLE IF EXISTS `informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `nama_info` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informasi`
--

LOCK TABLES `informasi` WRITE;
/*!40000 ALTER TABLE `informasi` DISABLE KEYS */;
INSERT INTO `informasi` VALUES (1,'Syarat Untuk Vaksinasi','ketentuan.jpg'),(2,'Perbedaan Vaksin dan Imunisasi','Perbedaan Vaksin dan Imunisasi.jpeg');
/*!40000 ALTER TABLE `informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` VALUES (1,'Maryulianti','indahsari@gmail.com','wahhhh.... ini sangat membantu, saya tidak perlu antri lagi'),(2,'jackma sapuddin','jacma@gmail.com','bagus sekali aplikasinya\r\nbest dah... terbaikkkkkk'),(11,'Marbela Sosang Timbo','maryulianti27@gmail.com','aku manis dahhh semangat');
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `Id_Login` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`Id_Login`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'maryulianti27@gmail.com','Maryulianti','Yulhy27',12345),(3,'jacma@gmail.com','jackma sapuddin','jacma',334545),(4,'marbelasosang15@gmail.com','Marbela Sosang Timbo','Marbela',12345),(5,'andini@gmail.com','andini putri','Andini',334455);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendaftaran`
--

DROP TABLE IF EXISTS `pendaftaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `NIK` int(20) NOT NULL,
  `Nama_Lengkap` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(30) NOT NULL,
  `Berat_badan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Pilih_Tanggal` date NOT NULL,
  `Riwayat_Penyakit` varchar(30) NOT NULL,
  `Alamat_Saat_ini` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pendaftaran`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendaftaran`
--

LOCK TABLES `pendaftaran` WRITE;
/*!40000 ALTER TABLE `pendaftaran` DISABLE KEYS */;
INSERT INTO `pendaftaran` VALUES (1,123456789,'Maryulianti','maryulianti27@gmail.com','Perempuan','0000-00-00','Islam','56','Mahasiswa','Enrekang','2021-07-16','Maag','Makassar'),(2,983774,'Andi Tenri Wulan','jacma@gmail.com','Laki-laki','2021-07-06','Islam','34','hjjkjhjfg','mnhgfghjkjhg','2021-07-21','kjhgfdgfhgjkjljhdtfy','mvcxdfdtryuiolkjhgfyu'),(3,2147483647,'Marbela Sosang Timbo','marbelasosang15@gmail.com','Perempuan','2001-11-15','Katolik','55','pelajar','jln.sejati','2021-07-29','sakit hati','jalan sejati'),(4,123456789,'Marbela Sosang Timbo','maryulianti27@gmail.com','Perempuan','2021-02-10','Islam','55','Mahasiswa','damai no.1','2021-07-30','Sakit Hati','sejati no.1 '),(5,123454321,'Andi Tenri Wulan','anditenri22@gmail.com','Perempuan','2020-09-15','Islam','44','Mahasiswa','PK 7','2021-08-07','Sakit Perut','PK 7'),(6,123454321,'Andi Tenri Wulan','anditenri22@gmail.com','Perempuan','2020-09-15','Islam','44','Mahasiswa','PK 7','2021-08-07','Sakit Perut','PK 7'),(7,123454321,'Andi Tenri Wulan','anditenri22@gmail.com','Perempuan','2020-09-15','Islam','44','Mahasiswa','PK 7','2021-08-07','Sakit Perut','PK 7'),(8,2147483647,'Yuniar','yinuar44@gmail.com','Perempuan','2020-03-18','Islam','44','Mahasiswa','Alauddin No. 3','2021-09-10','Demam','Alauddin No. 3'),(9,2147483647,'AMEL','amel@gmail.com','Perempuan','2020-08-19','Islam','40','Mahasiswa','kelinci no.5','2021-08-02','Sakit Perut','kelinci no.5');
/*!40000 ALTER TABLE `pendaftaran` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-03 15:24:00
