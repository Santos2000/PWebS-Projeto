-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2020 at 05:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `idscore` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `datajogo` date NOT NULL,
  `pontos` int(11) DEFAULT NULL,
  PRIMARY KEY (`idscore`),
  KEY `fk_userid` (`userid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`idscore`, `userid`, `datajogo`, `pontos`) VALUES
(1, 36, '0000-00-00', 50),
(2, 38, '0000-00-00', 49),
(3, 39, '0000-00-00', 25),
(4, 40, '0000-00-00', 12),
(5, 41, '0000-00-00', 56),
(6, 42, '0000-00-00', 35),
(7, 43, '0000-00-00', 25),
(8, 44, '0000-00-00', 60),
(9, 45, '0000-00-00', 98),
(10, 46, '0000-00-00', 45),
(11, 47, '0000-00-00', 74);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(100) NOT NULL,
  `datanasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `estado` enum('Normal','Banido') NOT NULL,
  `tipo` enum('A','C') NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
