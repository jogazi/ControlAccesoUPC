-- MySQL dump 10.16  Distrib 10.2.31-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u892058990_AOMJK
-- ------------------------------------------------------
-- Server version	10.2.31-MariaDB

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
-- Table structure for table `audit01`
--

DROP TABLE IF EXISTS `audit01`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit01` (
  `idpers` int(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `frstnam` varchar(45) NOT NULL,
  `scondnam` varchar(45) DEFAULT NULL,
  `frstlstnam` varchar(45) NOT NULL,
  `scondlstnam` varchar(45) DEFAULT NULL,
  `numphone` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idpers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit01`
--

LOCK TABLES `audit01` WRITE;
/*!40000 ALTER TABLE `audit01` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit01` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `audit05`
--

DROP TABLE IF EXISTS `audit05`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit05` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `audit05_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit05`
--

LOCK TABLES `audit05` WRITE;
/*!40000 ALTER TABLE `audit05` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit05` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit06`
--

DROP TABLE IF EXISTS `audit06`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit06` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `audit06_name_unique` (`name`),
  UNIQUE KEY `audit06_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit06`
--

LOCK TABLES `audit06` WRITE;
/*!40000 ALTER TABLE `audit06` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit06` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit02`
--

DROP TABLE IF EXISTS `audit02`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit02` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit02_permission_id_index` (`permission_id`),
  KEY `audit02_user_id_index` (`user_id`),
  CONSTRAINT `audit02_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `audit05` (`id`) ON DELETE CASCADE,
  CONSTRAINT `audit02_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit02`
--

LOCK TABLES `audit02` WRITE;
/*!40000 ALTER TABLE `audit02` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit02` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit03`
--

DROP TABLE IF EXISTS `audit03`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit03` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit03_permission_id_index` (`permission_id`),
  KEY `audit03_role_id_index` (`role_id`),
  CONSTRAINT `audit03_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `audit05` (`id`) ON DELETE CASCADE,
  CONSTRAINT `audit03_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `audit06` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit03`
--

LOCK TABLES `audit03` WRITE;
/*!40000 ALTER TABLE `audit03` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit03` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit04`
--

DROP TABLE IF EXISTS `audit04`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit04` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit04_role_id_index` (`role_id`),
  KEY `audit04_user_id_index` (`user_id`),
  CONSTRAINT `audit04_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `audit06` (`id`) ON DELETE CASCADE,
  CONSTRAINT `audit04_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit04`
--

LOCK TABLES `audit04` WRITE;
/*!40000 ALTER TABLE `audit04` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit04` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit07`
--

DROP TABLE IF EXISTS `audit07`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit07` (
  `id_sys` int(11) NOT NULL,
  `sys_act` enum('C','R','U','D') NOT NULL,
  `sys_date` datetime NOT NULL,
  `iduser` bigint(20) NOT NULL,
  PRIMARY KEY (`id_sys`),
  KEY `fk_audsys_users1_idx` (`iduser`),
  CONSTRAINT `fk_audsys_users1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit07`
--

LOCK TABLES `audit07` WRITE;
/*!40000 ALTER TABLE `audit07` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit07` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit08`
--

DROP TABLE IF EXISTS `audit08`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit08` (
  `idauddsys` int(11) NOT NULL,
  `idsys` int(11) NOT NULL,
  `dsyscontroller` varchar(45) NOT NULL,
  `dsysmethod` varchar(45) NOT NULL,
  `dsysip` varchar(45) NOT NULL,
  `dsysbrowser` varchar(45) NOT NULL,
  PRIMARY KEY (`idauddsys`),
  KEY `fk_auddsys_audsys1_idx` (`idsys`),
  CONSTRAINT `fk_auddsys_audsys1` FOREIGN KEY (`idsys`) REFERENCES `audit07` (`id_sys`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit08`
--

LOCK TABLES `audit08` WRITE;
/*!40000 ALTER TABLE `audit08` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit08` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit09`
--

DROP TABLE IF EXISTS `audit09`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit09` (
  `idactors` int(11) NOT NULL AUTO_INCREMENT,
  `surnames` varchar(45) NOT NULL,
  `names` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`idactors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit09`
--

LOCK TABLES `audit09` WRITE;
/*!40000 ALTER TABLE `audit09` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit09` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit10`
--

DROP TABLE IF EXISTS `audit10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit10` (
  `idactorxfil` int(11) NOT NULL AUTO_INCREMENT,
  `idactor` int(11) NOT NULL,
  `idfilms` int(11) NOT NULL,
  PRIMARY KEY (`idactorxfil`),
  KEY `idactor_idx` (`idactor`),
  KEY `idfilms_idx` (`idfilms`),
  CONSTRAINT `idactor` FOREIGN KEY (`idactor`) REFERENCES `audit09` (`idactors`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idfilms` FOREIGN KEY (`idfilms`) REFERENCES `audit12` (`idfilms`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit10`
--

LOCK TABLES `audit10` WRITE;
/*!40000 ALTER TABLE `audit10` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit11`
--

DROP TABLE IF EXISTS `audit11`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit11` (
  `idaudit11` int(11) NOT NULL AUTO_INCREMENT,
  `iddirectors` int(11) NOT NULL,
  `idfilms` int(11) NOT NULL,
  PRIMARY KEY (`idaudit11`),
  KEY `fk_audit111_audit131_idx` (`iddirectors`),
  KEY `fk_audit111_audit121_idx` (`idfilms`),
  CONSTRAINT `fk_audit111_audit121` FOREIGN KEY (`idfilms`) REFERENCES `audit12` (`idfilms`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit111_audit131` FOREIGN KEY (`iddirectors`) REFERENCES `audit13` (`iddirectors`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit11`
--

LOCK TABLES `audit11` WRITE;
/*!40000 ALTER TABLE `audit11` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit11` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit12`
--

DROP TABLE IF EXISTS `audit12`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit12` (
  `idfilms` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `premiere` varchar(10) NOT NULL,
  `image` blob DEFAULT NULL,
  PRIMARY KEY (`idfilms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit12`
--

LOCK TABLES `audit12` WRITE;
/*!40000 ALTER TABLE `audit12` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit12` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit13`
--

DROP TABLE IF EXISTS `audit13`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit13` (
  `iddirectors` int(11) NOT NULL AUTO_INCREMENT,
  `surnames` varchar(45) NOT NULL,
  `names` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`iddirectors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit13`
--

LOCK TABLES `audit13` WRITE;
/*!40000 ALTER TABLE `audit13` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit13` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit14`
--

DROP TABLE IF EXISTS `audit14`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit14` (
  `idfunction` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `price` double NOT NULL,
  `idroomss` int(11) NOT NULL,
  `idfilms` int(11) NOT NULL,
  PRIMARY KEY (`idfunction`),
  KEY `idroomss_idx` (`idroomss`),
  KEY `fk_function_films1_idx` (`idfilms`),
  CONSTRAINT `fk_function_films1` FOREIGN KEY (`idfilms`) REFERENCES `audit12` (`idfilms`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idrooms` FOREIGN KEY (`idroomss`) REFERENCES `audit15` (`idrooms`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit14`
--

LOCK TABLES `audit14` WRITE;
/*!40000 ALTER TABLE `audit14` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit14` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit15`
--

DROP TABLE IF EXISTS `audit15`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit15` (
  `idrooms` int(11) NOT NULL AUTO_INCREMENT,
  `quality` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`idrooms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit15`
--

LOCK TABLES `audit15` WRITE;
/*!40000 ALTER TABLE `audit15` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit15` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit16`
--

DROP TABLE IF EXISTS `audit16`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit16` (
  `idseating` int(11) NOT NULL AUTO_INCREMENT,
  `row` int(2) NOT NULL,
  `number` int(2) NOT NULL,
  `idrooms` int(11) NOT NULL,
  PRIMARY KEY (`idseating`),
  KEY `idrooms_idx` (`idrooms`),
  CONSTRAINT `idrooms2` FOREIGN KEY (`idrooms`) REFERENCES `audit15` (`idrooms`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit16`
--

LOCK TABLES `audit16` WRITE;
/*!40000 ALTER TABLE `audit16` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit16` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit19`
--

DROP TABLE IF EXISTS `audit19`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit19` (
  `iddettran` int(11) NOT NULL,
  `idtrans` int(11) NOT NULL,
  `dtranfile` varchar(45) NOT NULL,
  `dtranvnew` varchar(45) NOT NULL,
  PRIMARY KEY (`iddettran`),
  KEY `fk_auddtran_audtrans1_idx` (`idtrans`),
  CONSTRAINT `fk_auddtran_audtrans1` FOREIGN KEY (`idtrans`) REFERENCES `audit20` (`idtrans`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit19`
--

LOCK TABLES `audit19` WRITE;
/*!40000 ALTER TABLE `audit19` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit19` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit20`
--

DROP TABLE IF EXISTS `audit20`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit20` (
  `idtrans` int(11) NOT NULL,
  `transtable` varchar(45) NOT NULL,
  `audtranscol` varchar(45) NOT NULL,
  `transuser` varchar(45) NOT NULL,
  `transdate` datetime NOT NULL,
  PRIMARY KEY (`idtrans`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit20`
--

LOCK TABLES `audit20` WRITE;
/*!40000 ALTER TABLE `audit20` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit20` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit21`
--

DROP TABLE IF EXISTS `audit21`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit21` (
  `idpaytyp` int(11) NOT NULL AUTO_INCREMENT,
  `detpay` varchar(45) NOT NULL,
  PRIMARY KEY (`idpaytyp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit21`
--

LOCK TABLES `audit21` WRITE;
/*!40000 ALTER TABLE `audit21` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit21` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit22`
--

DROP TABLE IF EXISTS `audit22`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit22` (
  `idticketsale` int(11) NOT NULL AUTO_INCREMENT,
  `salevalue` double NOT NULL,
  `saletime` datetime NOT NULL,
  `idfunction` int(11) NOT NULL,
  `idpaytyp` int(11) NOT NULL,
  `id` bigint(20) NOT NULL,
  `idseating` int(11) NOT NULL,
  PRIMARY KEY (`idticketsale`),
  KEY `idpaymenttype_idx` (`idpaytyp`),
  KEY `idfuncion_idx` (`idfunction`),
  KEY `idusers_idx` (`id`),
  KEY `fk_audit22_audit161_idx` (`idseating`),
  CONSTRAINT `fk_audit22_audit161` FOREIGN KEY (`idseating`) REFERENCES `audit16` (`idseating`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idfuncion` FOREIGN KEY (`idfunction`) REFERENCES `audit14` (`idfunction`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idpaymenttype` FOREIGN KEY (`idpaytyp`) REFERENCES `audit21` (`idpaytyp`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit22`
--

LOCK TABLES `audit22` WRITE;
/*!40000 ALTER TABLE `audit22` DISABLE KEYS */;
/*!40000 ALTER TABLE `audit22` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit23`
--

DROP TABLE IF EXISTS `audit23`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audit23` (
  `idfile` int(11) NOT NULL AUTO_INCREMENT,
  `route1` varchar(200) NOT NULL,
  `extension1` enum('T','C') NOT NULL,
  `size1` varchar(10) NOT NULL,
  `route2` varchar(200) NOT NULL,
  `extension2` enum('T','C') NOT NULL,
  `size2` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` bigint(20) NOT NULL,
  PRIMARY KEY (`idfile`),
  KEY `fk_audit23_users1_idx` (`id`),
  CONSTRAINT `fk_audit23_users1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit23`
--

LOCK TABLES `audit23` WRITE;
/*!40000 ALTER TABLE `audit23` DISABLE KEYS */;
INSERT INTO `audit23` VALUES (1,'public/archivos/2020-04-09-06-25-29--1--prueba.csv','C','193 Bytes','public/archivos/2020-04-09-06-25-29--2--software_auditoria.txt','T','1.4 Kb','2020-04-09 18:25:29',1),(2,'public/archivos/2020-04-09-10-33-02--1--software_auditoria.txt','T','1.4 Kb','public/archivos/2020-04-09-10-33-02--2--software_auditoria.txt','T','1.4 Kb','2020-04-09 22:33:02',1);
/*!40000 ALTER TABLE `audit23` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `idpass` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `token` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idprof` int(11) DEFAULT NULL,
  `idpers` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_users_profile1_idx` (`idprof`),
  KEY `fk_users_persons1_idx` (`idpers`),
  CONSTRAINT `fk_users_persons1` FOREIGN KEY (`idpers`) REFERENCES `audit01` (`idpers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_profile1` FOREIGN KEY (`idprof`) REFERENCES `audit06` (`idprof`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'johan','johan123garciaherran@gmail.com',NULL,'$2y$10$LwG2Rl9gDFURHwt6UDAUDeYe9HA20A/yjavNBP5xtBxjJVGKI3c9S',NULL,'2020-04-09 18:18:47','2020-04-09 18:18:47',NULL,NULL),(2,'Ricardo Rico Lozada','ricardorico101@gmail.com',NULL,'$2y$10$M7mXgVpIGKsTCwzxVI3wU.qX3Q/zR2qFCIHBPqIoeJmC./sfwEEge',NULL,'2020-04-09 19:48:35','2020-04-09 19:48:35',NULL,NULL),(3,'Karen','fontechakaren@gmail.com',NULL,'$2y$10$EN4mSH711OC8.KQsFXnN3.y3q3.iZRJkYX0P0.IlbpeinpICWVrxO',NULL,'2020-04-09 23:32:30','2020-04-09 23:32:30',NULL,NULL),(4,'johan2','johan_arley@hotmail.com',NULL,'$2y$10$Jxl4Uzr84Pq/EXheQ8lzPO5gWC8hWCEeFFPbJizUbMypxvQsWLoS2',NULL,'2020-04-10 21:49:38','2020-04-10 21:49:38',NULL,NULL);
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

-- Dump completed on 2020-04-10 23:57:43
