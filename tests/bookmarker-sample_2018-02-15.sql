# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.28-MariaDB)
# Datenbank: bookmarker-sample
# Erstellt am: 2018-02-15 19:14:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle actor_photos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `actor_photos`;

CREATE TABLE `actor_photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) DEFAULT NULL,
  `photo_type` int(11) DEFAULT NULL COMMENT '1: main photo; 2:Extra photo',
  `file` varchar(255) NOT NULL DEFAULT '' COMMENT 'File name',
  `height_px` int(11) NOT NULL DEFAULT '0' COMMENT 'height in Pixel',
  `width_px` int(11) NOT NULL DEFAULT '0' COMMENT 'width in Pixel',
  PRIMARY KEY (`id`),
  KEY `actor_id` (`actor_id`),
  CONSTRAINT `actor_photos_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `actor_photos` WRITE;
/*!40000 ALTER TABLE `actor_photos` DISABLE KEYS */;

INSERT INTO `actor_photos` (`id`, `actor_id`, `photo_type`, `file`, `height_px`, `width_px`)
VALUES
	(1,1,1,'Demo/Juliana - 4.jpg',512,384),
	(5,2,1,'Demo/Tina - 4.jpg',512,384),
	(9,2,2,'Demo/Tina - 1.jpg',512,384),
	(10,3,1,'Demo/Marco - 4.jpg',512,384),
	(11,2,2,'Demo/Tina - 2.jpg',512,384),
	(12,2,2,'Demo/Tina - 3.jpg',512,384),
	(13,1,2,'Demo/Juliana - 3.jpg',512,384),
	(14,1,2,'Demo/Juliana - 2.jpg',512,384),
	(15,1,2,'Demo/Juliana - 1.jpg',512,384),
	(16,3,2,'Demo/Marco - 1.jpg',512,384),
	(17,3,2,'Demo/Marco - 3.jpg',512,384),
	(18,3,2,'Demo/Marco - 2.jpg',512,384),
	(19,4,1,'Demo/Ralf - 1.jpg',512,384);

/*!40000 ALTER TABLE `actor_photos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
