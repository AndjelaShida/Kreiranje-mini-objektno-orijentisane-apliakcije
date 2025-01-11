-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2024 at 07:10 AM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobilniuredjaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobilni`
--

DROP TABLE IF EXISTS `mobilni`;
CREATE TABLE IF NOT EXISTS `mobilni` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `proizvodjac` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `godinaProizvodnje` int(11) NOT NULL,
  `dateTim` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mobilni`
--

INSERT INTO `mobilni` (`ID`, `proizvodjac`, `model`, `cena`, `godinaProizvodnje`, `dateTim`) VALUES
(4, 'Samsung', 'S24', '2000.00', 2024, '2024-03-31 08:50:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
