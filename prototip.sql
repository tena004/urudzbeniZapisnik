-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 06:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prototip`
--

-- --------------------------------------------------------

--
-- Table structure for table `korespodenti`
--

DROP TABLE IF EXISTS `korespodenti`;
CREATE TABLE IF NOT EXISTS `korespodenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` text COLLATE utf8_croatian_ci NOT NULL,
  `ulica_broj` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `postanski_broj` int(11) NOT NULL,
  `grad` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `drzava` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `korespodenti`
--

INSERT INTO `korespodenti` (`id`, `naziv`, `ulica_broj`, `postanski_broj`, `grad`, `drzava`) VALUES
(5, 'Sveučilište u Dubrovniku', 'Ul. branitelja Dubrovnika 29', 20000, 'Dubrovnik', 'Hrvatska'),
(3, 'Studentski centar Dubrovnik', 'Ul. kralja Tomislava 7', 20000, 'Dubrovnik', 'Hrvatska'),
(4, 'Rektorat Sveučilišta u Dubrovniku', 'Ul. branitelja Dubrovnika 29', 20000, 'Dubrovnik', 'Hrvatska');

-- --------------------------------------------------------

--
-- Table structure for table `prijava`
--

DROP TABLE IF EXISTS `prijava`;
CREATE TABLE IF NOT EXISTS `prijava` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `prijava`
--

INSERT INTO `prijava` (`id`, `ime_prezime`, `username`, `pwd`) VALUES
(1, 'Pero Perić', 'pperic', 'pero123'),
(5, 'Ana Anić', 'aanic', 'ana123');

-- --------------------------------------------------------

--
-- Table structure for table `prijava_admin`
--

DROP TABLE IF EXISTS `prijava_admin`;
CREATE TABLE IF NOT EXISTS `prijava_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime_prezime` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `prijava_admin`
--

INSERT INTO `prijava_admin` (`id`, `ime_prezime`, `username`, `pwd`) VALUES
(1, 'Ivo Ivić', 'iivic', 'ivo123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
