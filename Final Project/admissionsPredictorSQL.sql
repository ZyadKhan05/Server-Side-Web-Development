-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: admissionsPredictor
-- ------------------------------------------------------
-- Server version	5.5.68-MariaDB

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
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colleges` (
  `collegeName` varchar(54) NOT NULL,
  `avgSAT` int(11) NOT NULL,
  `avgGPA` float NOT NULL,
  `city` varchar(60) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`collegeName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
INSERT INTO `colleges` VALUES ('Boston College',1420,3.96,NULL,NULL,NULL),('Boston University',1420,3.71,NULL,NULL,NULL),('Brown University',1485,4.08,NULL,NULL,NULL),('California Institute of Technology',1545,4.19,NULL,NULL,NULL),('Carnegie Mellon University',1510,3.84,NULL,NULL,NULL),('Columbia University',1505,4.12,NULL,NULL,NULL),('Cornell University',1480,4.07,NULL,NULL,NULL),('Dartmouth College',1500,4.11,NULL,NULL,NULL),('Duke University',1510,4.13,NULL,NULL,NULL),('Emory University',1435,3.78,NULL,NULL,NULL),('Georgetown University',1450,4.01,NULL,NULL,NULL),('Georgia Institute of Technology',1465,4.07,NULL,NULL,NULL),('Harvard University',1520,4.18,NULL,NULL,NULL),('Johns Hopkins University',1505,3.92,NULL,NULL,NULL),('Massachusetts Institute of Technology',1535,4.17,NULL,NULL,NULL),('New York University',1370,3.69,NULL,NULL,NULL),('Northwestern University',1495,4.1,NULL,NULL,NULL),('Princeton University',1505,3.9,NULL,NULL,NULL),('Rice University',1505,4.12,NULL,NULL,NULL),('Stanford University	',1505,3.96,NULL,NULL,NULL),('Tufts University',1465,4.04,NULL,NULL,NULL),('University of California - Berkeley',1415,3.89,NULL,NULL,NULL),('University of California - Davis',1280,4.03,NULL,NULL,NULL),('University of California - Irvine',1310,4,NULL,NULL,NULL),('University of California - Los Angeles',1405,3.9,NULL,NULL,NULL),('University of California - San Diego',1360,4.07,NULL,NULL,NULL),('University of California - Santa Barbara',1355,4.12,NULL,NULL,NULL),('University of California - Santa Cruz',1285,3.55,NULL,NULL,NULL),('University of Chicago',1520,4.48,NULL,NULL,NULL),('University of Colorado Boulder',1160,3.66,NULL,NULL,NULL),('University of Florida',1360,4.42,NULL,NULL,NULL),('University of Georgia',1325,4,NULL,NULL,NULL),('University of Illinois at Urbana-Champaign',1350,3.83,NULL,NULL,NULL),('University of Maryland - College Park',1380,4.32,NULL,NULL,NULL),('University of Miami',1355,3.6,NULL,NULL,NULL),('University of Michigan - Ann Arbor',1435,3.88,NULL,NULL,NULL),('University of Minnesota - Twin Cities',1351,3.83,NULL,NULL,NULL),('University of North Carolina at Chapel Hill',1395,4.39,NULL,NULL,NULL),('University of Notre Dame',1475,4.06,NULL,NULL,NULL),('University of Pennsylvania',1500,3.9,NULL,NULL,NULL),('University of Pittsburgh',1350,4.07,NULL,NULL,NULL),('University of Rochester',1340,3.8,NULL,NULL,NULL),('University of Southern California',1440,3.79,NULL,NULL,NULL),('University of Texas at Austin',1240,3.83,NULL,NULL,NULL),('University of Virginia',1340,4.32,NULL,NULL,NULL),('University of Washington',1220,3.8,NULL,NULL,NULL),('University of Wisconsin - Madison',1390,3.86,NULL,NULL,NULL),('Vanderbilt University',1505,3.83,NULL,NULL,NULL),('Washington University in St. Louis',1470,4.15,NULL,NULL,NULL),('Yale University',1515,4.14,NULL,NULL,NULL);
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-14 22:03:27
