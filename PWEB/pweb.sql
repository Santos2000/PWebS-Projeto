-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 04:58 PM
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
-- Table structure for table `jogador`
--

DROP TABLE IF EXISTS `jogador`;
CREATE TABLE IF NOT EXISTS `jogador` (
  `idJogador` int(11) NOT NULL AUTO_INCREMENT,
  `NomeJogador` varchar(100) NOT NULL,
  `DataNascimento` date NOT NULL,
  `EmailJogador` varchar(100) NOT NULL,
  `PasswordJogador` varchar(50) NOT NULL,
  `Vitorias` int(11) NOT NULL,
  `estado` enum('Normal','Banido') NOT NULL,
  PRIMARY KEY (`idJogador`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jogador`
--

INSERT INTO `jogador` (`idJogador`, `NomeJogador`, `DataNascimento`, `EmailJogador`, `PasswordJogador`, `Vitorias`, `estado`) VALUES
(36, 'pedro', '2000-11-15', 'pedromonteiro@outlook.pt', '1234', 0, 'Normal'),
(38, 'monteiro', '2000-11-15', 'pedromonteiroescola@outlook.pt', '1234', 0, 'Normal'),
(39, 'admin', '1980-09-15', 'amanhaprojeto@outlook.pt', 'admin', 0, 'Normal'),
(40, 'santos', '2000-12-08', 'as@outlook.pt', '4321', 0, 'Normal'),
(41, 'matias', '2000-06-23', 'fm@outlook.pt', 'testpass', 0, 'Normal'),
(42, 'andres', '2020-06-09', 'anteste@outlook.pt', 'passinho', 0, 'Normal'),
(43, 'Pedro Monteiro', '2020-06-04', 'pedromonteiro@hotmail.com', '1234567890', 0, 'Normal'),
(44, '8', '2020-06-08', '8@hotmail.com', '8', 8, 'Normal'),
(45, '9', '2020-06-19', '9@outlook.pt', '9', 9, 'Banido'),
(46, '10', '2020-06-10', '10@outlook.com', '10', 10, 'Banido'),
(47, '11', '2020-06-11', '11@live.com.pt', '11', 11, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `idScore` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idJogador` int(11) NOT NULL,
  `totalScore` int(11) DEFAULT NULL,
  PRIMARY KEY (`idScore`),
  KEY `fk_idJogador` (`idJogador`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`idScore`, `idJogador`, `totalScore`) VALUES
(1, 36, 50),
(2, 38, 49),
(3, 39, 25),
(4, 40, 12),
(5, 41, 56),
(6, 42, 35),
(7, 43, 25),
(8, 44, 60),
(9, 45, 98),
(10, 46, 45),
(11, 47, 74);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
