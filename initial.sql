-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: revalutalaravel
-- ------------------------------------------------------
-- Server version	5.5.53-0+deb8u1

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

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'nza.terrence@gmail.com','0715549960','who is terrence','2015-12-14 05:46:29','2015-12-14 05:46:29'),(2,'ns@g.com','0715549960','who','2015-12-14 05:49:23','2015-12-14 05:49:23'),(3,'antiflu@gmail.com','0616798193','Blablabla','2015-12-17 08:50:32','2015-12-17 08:50:32');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1024) NOT NULL,
  `answer` varchar(1024) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Revaluta Bank explained','One Worthalot can be handed out to a person who is, or who has done something amazing. The note is a sign of appreciation for a very special individual.','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Where are you from','The Nederlands','2016-01-19 22:34:27','2016-01-19 21:34:27');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `generaltexts`
--

DROP TABLE IF EXISTS `generaltexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `generaltexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `homepage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `walmodal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `walsubtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wallink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `walsinglewelcome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `walsinglesuccess` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omamodal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omasubtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omalink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglesuccess` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglewelcomenoproject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglewelcomehasproject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `omasingleWelcomeexpired` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ztemodal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ztesubtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ztelink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `generaltexts`
--

LOCK TABLES `generaltexts` WRITE;
/*!40000 ALTER TABLE `generaltexts` DISABLE KEYS */;
/*!40000 ALTER TABLE `generaltexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `homepagetexts`
--

DROP TABLE IF EXISTS `homepagetexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `homepagetexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `homepagetitle` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `homepagetext` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `wallink` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `walmodal` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omalink` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omamodal` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `ztelink` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `ztemodal` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `homepagetexts`
--

LOCK TABLES `homepagetexts` WRITE;
/*!40000 ALTER TABLE `homepagetexts` DISABLE KEYS */;
INSERT INTO `homepagetexts` VALUES (1,'How it Works','The owner of a Revaluta Note enters the number, \r\nand has the possibility to register the details to the banking account, \r\ndedicating the note to a special purpose: to trade, to crowdfund, to validate, \r\nto redefine, or to challenge the receiver of the note. The receiver of the note, \r\ncan open the bank note and unlock ownership of the note, by reading the message of appreciation, \r\nconsidering the funding request, verifying the trade offer, or accepting the challenge, \r\nthat the previous owner has dedicated the note to.','Value someone','With the Worthalot, the receiver can read the message of appreciation registered, forever, on the note. After reading, the receiver unlocks ownership of the note, and can thereby dedicate the note to a new worthwile person. Entering the note number will display all messages of appreciation, connected to the Worthalot note.','Challenge someone','With the One Man Army, aka OMA, the receiver can accept a challenge, that the owner is daring him or her to do. After completing the challenge to upgrade their organisation for the benefit of the world, the receiver unlocks ownership of the note. Entering the note number will display all challenges the receivers are dared to.','Join the club','With the Zero Trillion Euro, the owner is granted access to join the secret club of zero trillionaires. After the owner is granted access, the note can be kept, or given to another person.','2016-01-29 12:20:55','2016-01-29 12:21:08');
/*!40000 ALTER TABLE `homepagetexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2015_10_30_111237_add_cats_and_breeds_table',1),('2015_12_23_074106_create_walnotehistoryitems_table',2),('2015_12_23_080707_create_walnotes_table',2),('2015_12_23_080810_create_walnotes_walnotehistoryitems_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omanotehistoryitems`
--

DROP TABLE IF EXISTS `omanotehistoryitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omanotehistoryitems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `omanote_id` int(11) NOT NULL,
  `nameFrom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailFrom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `companyTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aboutTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omanotehistoryitems`
--

LOCK TABLES `omanotehistoryitems` WRITE;
/*!40000 ALTER TABLE `omanotehistoryitems` DISABLE KEYS */;
INSERT INTO `omanotehistoryitems` VALUES (1,9,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:26','2016-01-13 21:07:26'),(2,9,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:26','2016-01-13 21:07:26'),(3,9,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:26','2016-01-13 21:07:26'),(4,10,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(5,10,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(6,10,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(7,11,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(8,11,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(9,11,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','SunflowerIT','is a fast-growing company','this is the first omanote recieved from Tom to Terrence','2016-01-13 21:07:27','2016-01-13 21:07:27'),(10,9,'terence','daniel','nza.terro@gmail.com','dan@gmail.com','The giver can input a name of the receiver (the person called “one man army”) , the company or project they have to make better','The giver can input a name of the receiver (the person called “one man army”) , the company or project they have to make better','The giver can input a name of the receiver (the person called “one man army”) , the company or project they have to make better','2016-01-13 21:50:19','2016-01-13 21:50:19');
/*!40000 ALTER TABLE `omanotehistoryitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omanotes`
--

DROP TABLE IF EXISTS `omanotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omanotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omanotes`
--

LOCK TABLES `omanotes` WRITE;
/*!40000 ALTER TABLE `omanotes` DISABLE KEYS */;
INSERT INTO `omanotes` VALUES (9,400000,'2016-01-13 21:07:26','2016-01-13 21:07:26'),(10,400001,'2016-01-13 21:07:26','2016-01-13 21:07:26'),(11,400002,'2016-01-13 21:07:26','2016-01-13 21:07:26'),(12,400003,'2016-01-13 21:07:26','2016-01-13 21:07:26');
/*!40000 ALTER TABLE `omanotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omapagetexts`
--

DROP TABLE IF EXISTS `omapagetexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omapagetexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `omapagesubtitle` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omapagewelcome` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglesuccess` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglewelcomenoproject` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglewelcomehasproject` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `omasinglewelcomeexpired` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omapagetexts`
--

LOCK TABLES `omapagetexts` WRITE;
/*!40000 ALTER TABLE `omapagetexts` DISABLE KEYS */;
INSERT INTO `omapagetexts` VALUES (1,'To feel abundant forever','With the One Man Army, aka OMA, the receiver can accept a challenge, that the owner is daring him or her to do. \r\n                After completing the challenge to upgrade their organisation for the benefit of the world, the receiver unlocks ownership of the note. \r\n                Entering the note number will display all challenges the receivers are dared to.','Yay you have sent the message','No project started yet! Do you want to start a new project','Hey, X has started this project and would like your funding support!','','2016-01-29 13:27:27','2016-01-29 17:00:18');
/*!40000 ALTER TABLE `omapagetexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `omaprojects`
--

DROP TABLE IF EXISTS `omaprojects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `omaprojects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `omanote_id` int(11) NOT NULL,
  `projectTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `projectDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `targetAmount` int(255) NOT NULL,
  `starterName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `starterEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `omaprojects`
--

LOCK TABLES `omaprojects` WRITE;
/*!40000 ALTER TABLE `omaprojects` DISABLE KEYS */;
INSERT INTO `omaprojects` VALUES (1,9,'My first OMA project','My first OMA project is all about raising money for the needy.',30000,'Terernce Nzaywa','nza.terrence@gmail.com','02-02-2016','2016-01-28 19:20:12','2016-01-28 19:20:12'),(2,9,'ccccccccccccc','cccccccccccccccccccccccccccccccc',300000000,'terence','nza.terrence@gmail.com','1455235200','2016-01-29 08:18:16','2016-01-29 08:18:16'),(3,10,'ddddd','dddddddddddddddddddddddd',22222,'terence','nza.terrence@gmail.com','1453248000','2016-01-29 09:01:08','2016-01-29 09:01:08'),(4,11,'ssssssssss','sssssssssssssssssssss',22222,'terence','nza.terrence@gmail.com','1453248000','2016-01-29 09:03:08','2016-01-29 09:03:08'),(5,9,'First Project','This note is meant for raising money to help the sick.',300000,'Tony','tony@gmail.com','1455494400','2016-01-29 10:45:06','2016-01-29 10:45:06');
/*!40000 ALTER TABLE `omaprojects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Tom','terence','info@sunflower.com','$2y$10$9kCNz5l8J0Sf21KlxR/WReQ1UjkveEkC7oyseVIscC3W2rLotf66m','Mi2ghaAl17dvKV3QIaTXwoLDOThnCdJXe70CgM7CBK9YzrjwlXhVw5IBTdFs','2015-12-17 12:32:03','2016-01-30 09:51:40'),(2,'','stosh@gmail.com','stosh@gmail.com','stosh',NULL,'2015-12-21 04:57:09','2015-12-21 04:57:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walnotehistoryitems`
--

DROP TABLE IF EXISTS `walnotehistoryitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walnotehistoryitems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `walnote_id` int(10) unsigned NOT NULL,
  `nameFrom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nameTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailFrom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailTo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `walnote_id` (`walnote_id`),
  CONSTRAINT `walnotehistoryitems_ibfk_1` FOREIGN KEY (`walnote_id`) REFERENCES `walnotes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walnotehistoryitems`
--

LOCK TABLES `walnotehistoryitems` WRITE;
/*!40000 ALTER TABLE `walnotehistoryitems` DISABLE KEYS */;
INSERT INTO `walnotehistoryitems` VALUES (1,1,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','this is the first worthlalot note recieved from Tom to Terrence','2015-12-24 06:02:58','2015-12-24 06:02:58'),(2,1,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','this is the second worthlalot note recieved from terence to winnie.','2015-12-24 06:02:58','2015-12-24 06:02:58'),(3,1,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','this is the third worthlalot note recieved from winnie to Eric','2015-12-24 06:02:58','2015-12-24 06:02:58'),(4,2,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','this is the first worthlalot note recieved from Tom to Terrence','2015-12-24 06:02:58','2015-12-24 06:02:58'),(5,2,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','this is the second worthlalot note recieved from terence to winnie.','2015-12-24 06:02:58','2015-12-24 06:02:58'),(6,2,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','this is the third worthlalot note recieved from winnie to Eric','2015-12-24 06:02:58','2015-12-24 06:02:58'),(7,3,'Tom Blauwendraat','Terrence Nzaywa','antiflu@gmail.com','nza.terrence@gmail.com','this is the first worthlalot note recieved from Tom to Terrence','2015-12-24 06:02:58','2015-12-24 06:02:58'),(8,3,'Terrence Nzaywa','Winnie Chepkoech','nza.terrence@gmail.com','winnie@gmail.com','this is the second worthlalot note recieved from terence to winnie.','2015-12-24 06:02:58','2015-12-24 06:02:58'),(9,1,'Winnie Chepkoech','Eric Munene','winnie@gmail.com','eric@gmail.com','this is the third worthlalot note recieved from winnie to Eric','2015-12-24 06:02:58','2015-12-24 06:06:33'),(10,1,'Terrence','Tom','nza.terrence@gmail.com','antiflu@gmail.com','this note is very prescious','2015-12-24 08:35:53','2016-01-19 21:16:05');
/*!40000 ALTER TABLE `walnotehistoryitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walnotes`
--

DROP TABLE IF EXISTS `walnotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walnotes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walnotes`
--

LOCK TABLES `walnotes` WRITE;
/*!40000 ALTER TABLE `walnotes` DISABLE KEYS */;
INSERT INTO `walnotes` VALUES (1,300000,'2015-12-24 06:02:58','2015-12-24 06:02:58'),(2,300001,'2015-12-24 06:02:58','2015-12-24 06:02:58'),(3,300002,'2015-12-24 06:02:58','2015-12-24 06:02:58'),(4,300003,'2015-12-24 06:02:58','2015-12-24 06:02:58'),(5,300004,'2016-01-19 21:16:26','2016-01-19 21:16:26');
/*!40000 ALTER TABLE `walnotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walnotes_walnotehistoryitems`
--

DROP TABLE IF EXISTS `walnotes_walnotehistoryitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walnotes_walnotehistoryitems` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `walnotes_id` int(11) NOT NULL,
  `walnotehistoryitems_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walnotes_walnotehistoryitems`
--

LOCK TABLES `walnotes_walnotehistoryitems` WRITE;
/*!40000 ALTER TABLE `walnotes_walnotehistoryitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `walnotes_walnotehistoryitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `walpagetexts`
--

DROP TABLE IF EXISTS `walpagetexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `walpagetexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `walpagesubtitle` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `walpagewelcome` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `walsinglewelcome` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `walsinglesuccess` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `walpagetexts`
--

LOCK TABLES `walpagetexts` WRITE;
/*!40000 ALTER TABLE `walpagetexts` DISABLE KEYS */;
INSERT INTO `walpagetexts` VALUES (1,'To validate someone valuable','With the Worthalot, the receiver can read the message of appreciation registered, forever, on the note. After reading, the receiver unlocks ownership of the note, and can thereby dedicate the note to a new worthwile person. Entering the note number will display all messages of appreciation, connected to the Worthalot note.','Yay! Person X thinks you are very valuable and are worthy to have a note dedicated to saying so. \r\n                Here is a personal message:','Yay you have sent the message','2016-01-29 13:32:35','2016-01-29 13:32:40');
/*!40000 ALTER TABLE `walpagetexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ztepagetexts`
--

DROP TABLE IF EXISTS `ztepagetexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ztepagetexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztepagesubtitle` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `ztepagewelcome` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ztepagetexts`
--

LOCK TABLES `ztepagetexts` WRITE;
/*!40000 ALTER TABLE `ztepagetexts` DISABLE KEYS */;
INSERT INTO `ztepagetexts` VALUES (1,'To feel abundant forever','With the Zero Trillion Euro, the owner is granted access to join the secret club of zero trillionaires. After the owner is granted access, the note can be kept, or given to another person.','2016-01-29 13:21:06','2016-01-29 13:21:12');
/*!40000 ALTER TABLE `ztepagetexts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-15 13:17:48
