-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.0.38-MariaDB-0ubuntu0.16.04.1 - Ubuntu 16.04
-- Операционная система:         debian-linux-gnu
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных yii2basic
CREATE DATABASE IF NOT EXISTS `yii2basic` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `yii2basic`;

-- Дамп структуры для таблица yii2basic.country
CREATE TABLE IF NOT EXISTS `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы yii2basic.country: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` (`code`, `name`, `population`) VALUES
	('AI', 'Azaza', 123123123),
	('AU', 'Australia', 24016400),
	('BL', 'Belarus', 9475600),
	('BR', 'Brazil', 205722000),
	('CA', 'Canada', 35985751),
	('CN', 'China', 1375210000),
	('DE', 'Germany', 81459000),
	('FR', 'France', 64513242),
	('GB', 'United Kingdom', 65097000),
	('IN', 'India', 1285400000),
	('RU', 'Russia', 146519759),
	('US', 'United States', 322976000);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;

-- Дамп структуры для таблица yii2basic.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы yii2basic.product: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `price`, `created_at`) VALUES
	(1, 'TSP FASTY', '5040', '2019-04-05'),
	(2, 'Andro Temper Tech All+', '3249', '2019-04-06'),
	(3, 'Donic Ovcharov', '7380', '2019-04-07'),
	(4, 'Stiga Carbonado 45', '15120', '2019-04-08'),
	(5, 'Butterfly SK CARBON', '8910', '2019-04-09'),
	(6, 'TTSPORT ALL+', '970', '2019-04-09'),
	(9, 'Wolf Off', '', '0000-00-00'),
	(10, '111', '980', '2019-04-10'),
	(11, '222', '120', '2019-04-11'),
	(12, '333', '340', '2019-04-12'),
	(13, '222', '1652', '2019-04-14');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
