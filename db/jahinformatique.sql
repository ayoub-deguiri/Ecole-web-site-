-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2023 at 09:08 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jahinformatique`
--

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL DEFAULT 'Admin',
  `code` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`Id`, `Nom`, `Prenom`, `Email`, `UserName`, `Password`, `Role`, `code`) VALUES
(1, 'dakiri', 'ayoub', 'vodkaayoub1@gmail.com', 'ayoub', '123', 'SuperAdmin', 0),
(2, 'dakiri', 'ayoub', 'vodkaayoub1@gmail.com', 'achraff', '123', 'Admin', 0),
(3, 'dakiri', 'ayoub', 'vodkaayoub1@gmail.com', 'test', '123', 'Admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flayers`
--

DROP TABLE IF EXISTS `flayers`;
CREATE TABLE IF NOT EXISTS `flayers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `image` longtext NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flayers`
--

INSERT INTO `flayers` (`id`, `name`, `image`, `type`) VALUES
(1, 'Screenshot 2023-03-09 114242.png', 'Flayers/Secourisme/Screenshot 2023-03-09 114242.png', 'Secourisme'),
(2, 'Screenshot 2023-03-14 165951.png', 'Flayers/Gestion/Screenshot 2023-03-14 165951.png', 'Gestion'),
(3, 'Screenshot 2023-03-14 165951.png', 'Flayers/Gestion/Screenshot 2023-03-14 165951.png', 'Gestion'),
(4, 'Screenshot 2023-03-09 112908.png', 'Flayers/Hijama/Screenshot 2023-03-09 112908.png', 'Hijama');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`Id`, `Nom`, `type`, `niveau`) VALUES
(1, 'Presse et MÃ©dia  Ø§Ù„ØµØ­Ø§ÙØ© ÙˆØ§Ù„Ø§Ø¹Ù„Ø§Ù…', 'Diplome', 'BACOuPlus'),
(2, 'test', 'FEDE', 'BAC+2'),
(3, 'test1', 'Formation', '9AEF'),
(4, 'test2formation', 'Formation', '2BAC'),
(5, 'dakiri', 'Diplome', '2BAC'),
(6, 'master', 'FEDE', 'BAC+2'),
(7, 'licence', 'FEDE', 'BAC+3');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` longtext NOT NULL,
  `image` longtext NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `type`) VALUES
(1, 'Screenshot 2023-03-12 161100.png', 'Images/Secourisme/Screenshot 2023-03-12 161100.png', 'Secourisme'),
(2, 'Screenshot 2023-03-14 165951.png', 'Images/Secourisme/Screenshot 2023-03-14 165951.png', 'Secourisme'),
(3, 'Screenshot 2023-03-09 112908.png', 'Images/PrÃ©parateur/Screenshot 2023-03-09 112908.png', 'PrÃ©parateur'),
(4, 'Screenshot 2023-03-09 114130.png', 'Images/PrÃ©parateur/Screenshot 2023-03-09 114130.png', 'PrÃ©parateur'),
(5, 'Screenshot 2023-03-09 114242.png', 'Images/PrÃ©parateur/Screenshot 2023-03-09 114242.png', 'PrÃ©parateur'),
(6, 'Screenshot 2023-03-12 161100.png', 'Images/PrÃ©parateur/Screenshot 2023-03-12 161100.png', 'PrÃ©parateur'),
(7, 'Screenshot 2023-03-14 165951.png', 'Images/PrÃ©parateur/Screenshot 2023-03-14 165951.png', 'PrÃ©parateur'),
(8, 'Screenshot 2023-03-09 112759.png', 'Images/ModÃ©liste/Screenshot 2023-03-09 112759.png', 'ModÃ©liste'),
(9, '950183.png', 'Images/ModÃ©liste/950183.png', 'ModÃ©liste');

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `Id` int(11) NOT NULL,
  `Formations` int(11) NOT NULL,
  `Etudiants` int(11) NOT NULL,
  `Certificates` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`Id`, `Formations`, `Etudiants`, `Certificates`) VALUES
(1, 240, 3000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NomComplete` varchar(100) NOT NULL,
  `CIN` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `Tele` varchar(100) NOT NULL,
  `NiveauScolaire` varchar(100) NOT NULL,
  `Choix` varchar(100) NOT NULL,
  `TypeFormation` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL DEFAULT 'encoure',
  `DateInscription` date NOT NULL,
  `HeureInscription` time NOT NULL,
  `filename` longtext NOT NULL,
  `filename2` longtext NOT NULL,
  `filename3` longtext,
  `filename4` longtext,
  `filename5` longtext,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inscription`
--

INSERT INTO `inscription` (`Id`, `NomComplete`, `CIN`, `adresse`, `Tele`, `NiveauScolaire`, `Choix`, `TypeFormation`, `Email`, `Type`, `DateInscription`, `HeureInscription`, `filename`, `filename2`, `filename3`, `filename4`, `filename5`) VALUES
(7, 'dakiri', 'ee678372', 'loudaya city', '0661333736', 'aucun', 'rien', 'Formation', 'vodkaayoubb1@gmail.com', 'encoure', '2023-04-14', '02:39:07', '1098180.png', '950183.png', NULL, NULL, NULL),
(6, 'dakiri', 'ee678372', 'loudaya city', '0661333736', 'aucun', 'rien', 'Formation', 'vodkaayoubb1@gmail.com', 'Accepter', '2023-04-14', '01:30:56', 'Screenshot 2023-03-09 114242.png', 'Screenshot 2023-03-12 161100.png', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
