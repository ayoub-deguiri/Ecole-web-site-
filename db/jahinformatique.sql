-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2023 at 02:42 PM
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
  `code` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`Id`, `Nom`, `Prenom`, `Email`, `UserName`, `Password`, `Role`, `code`) VALUES
(1, 'nouiti', 'jamal', 'Jah.informatique@gmail.com', 'jamal', '123', 'SuperAdmin', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flayers`
--

INSERT INTO `flayers` (`id`, `name`, `image`, `type`) VALUES
(9, 'image1.jpg', 'Flayers/Gestion/image1.jpg', 'Gestion'),
(7, 'image1.jpg', 'Flayers/Hijama/image1.jpg', 'Hijama'),
(8, 'image2.jpg', 'Flayers/Hijama/image2.jpg', 'Hijama'),
(6, 'image2.jpg', 'Flayers/Gestion/image2.jpg', 'Gestion'),
(10, 'image1.jpg', 'Flayers/Secourisme/image1.jpg', 'Secourisme'),
(11, 'modelisme1.jpg', 'Flayers/Modeliste/modelisme1.jpg', 'Modeliste');

-- --------------------------------------------------------

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `niveau` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formation`
--

INSERT INTO `formation` (`Id`, `Nom`, `type`, `niveau`) VALUES
(17, 'Engins de Chantiers Ø§Ù„Ø§Øª Ø§Ù„Ø­ÙØ± ÙˆØ§Ù„Ø´Ø­Ù† ÙˆØ§Ù„Ø±Ø§ÙØ¹Ø§Øª Ø§Ù„Ø´ÙˆÙƒÙŠØ©', 'Formation', 'Aucun'),
(16, 'Presse et MÃ©dia Ø§Ù„ØµØ­Ø§ÙØ© ÙˆØ§Ù„Ø§Ø¹Ù„Ø§Ù…', 'Formation', 'Aucun'),
(15, 'Secourisme Ø§Ù„Ø§Ø³Ø¹Ø§ÙØ§Øª Ø§Ù„Ø§ÙˆÙ„ÙŠØ©', 'Formation', 'Aucun'),
(18, ' Professeurs de l\'Education Physique et Sportive (EPS) ØªÙƒÙˆÙŠÙ† Ø§Ø³Ø§ØªØ°Ø© Ø§Ù„ØªØ±Ø¨ÙŠØ© Ø§Ù„Ø¨Ø¯Ù†ÙŠØ©', 'Formation', 'Aucun'),
(19, 'ModÃ©liste et Styliste Ù…Ø¬Ø§Ù„ Ø§Ù„Ø§Ø²ÙŠØ§Ø¡ Ø§Ù„ÙØµØ§Ù„Ø© ÙˆØ§Ù„Ø®ÙŠØ§Ø·Ø©', 'Formation', 'Aucun'),
(20, 'PÃ¢tisserie Confiserie et Chocolaterie Ø§Ù„Ø­Ù„ÙˆÙŠØ§Øª', 'Formation', 'Aucun'),
(21, 'Ø§Ù„Ø­Ø¬Ø§Ù…Ø© Ø§Ù„Ø¹ØµØ±ÙŠØ© ÙˆØ§Ù„Ø¹Ù„Ø§Ø¬ Ø§Ù„Ù†Ø§Ø±ÙŠ', 'Formation', 'Aucun'),
(22, 'Technicien SpÃ©cialisÃ© en Gestion dâ€™Entreprise', 'Diplome', 'BACOUPlus'),
(23, 'Technicien en Gestion InformatisÃ©e', 'Diplome', '2BAC'),
(24, 'Qualification OpÃ©rateur de Saisie', 'Diplome', '9AEF'),
(25, 'Gestion', 'Formation', 'Aucun'),
(26, 'Informatique ', 'Formation', 'Aucun'),
(27, 'Langues Vivantes ', 'Formation', 'Aucun'),
(28, 'Cours SupplÃ©mentaires dans toutes les matiÃ¨res ', 'Formation', 'Aucun'),
(29, 'MEI : Master EuropÃ©en d\'Informatique', 'Master', 'BAC+3'),
(30, 'MECSPCN : Master EuropÃ©en en Communication-StratÃ©gies Publicitaires et Communication NumÃ©rique', 'Master', 'BAC+3'),
(31, 'MEMRH : Master EuropÃ©en en Management des Ressources Humaines', 'Master', 'BAC+3'),
(32, 'MEMSE : Master EuropÃ©en de Logistien Management et StratÃ©gie d\'Entreprise', 'Master', 'BAC+3'),
(33, 'DEESINF : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures Informatique et RÃ©seaux', 'Licence', 'BAC+2'),
(34, 'DEESTNM : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures Techniques NumÃ©riques et MultimÃ©dia', 'Licence', 'BAC+2'),
(35, 'DEESWEB : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures Webmaster', 'Licence', 'BAC+2'),
(36, 'DEESARH : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures Assistant(e) de Gestion Ressources Humaines', 'Licence', 'BAC+2'),
(37, 'DEESFI : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures en Finance', 'Licence', 'BAC+2'),
(38, 'DEESGEST : DiplÃ´me EuropÃ©en d\'Etudes SupÃ©rieures en Management et Gestion des PME', 'Licence', 'BAC+2');

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`, `type`) VALUES
(23, 'engines9.jpg', 'Images/Engins/engines9.jpg', 'Engins'),
(21, 'engines5.jpg', 'Images/Engins/engines5.jpg', 'Engins'),
(22, 'engines7.jpg', 'Images/Engins/engines7.jpg', 'Engins'),
(20, 'engines3.jpg', 'Images/Engins/engines3.jpg', 'Engins'),
(18, 'engines1.jpg', 'Images/Engins/engines1.jpg', 'Engins'),
(19, 'engines2.jpg', 'Images/Engins/engines2.jpg', 'Engins'),
(16, '8.jpeg', 'Images/Diplome/8.jpeg', 'Diplome'),
(17, '9.jpeg', 'Images/Diplome/9.jpeg', 'Diplome'),
(14, '5.jpeg', 'Images/Diplome/5.jpeg', 'Diplome'),
(15, '6.jpeg', 'Images/Diplome/6.jpeg', 'Diplome'),
(13, '4.jpeg', 'Images/Diplome/4.jpeg', 'Diplome'),
(11, '2.jpeg', 'Images/Diplome/2.jpeg', 'Diplome'),
(12, '3.jpeg', 'Images/Diplome/3.jpeg', 'Diplome'),
(10, '1.jpeg', 'Images/Diplome/1.jpeg', 'Diplome'),
(24, 'hijama2.jpg', 'Images/Hijama/hijama2.jpg', 'Hijama'),
(25, 'hijama3.jpg', 'Images/Hijama/hijama3.jpg', 'Hijama'),
(26, 'hijama4.jpg', 'Images/Hijama/hijama4.jpg', 'Hijama'),
(27, 'hijama6.jpg', 'Images/Hijama/hijama6.jpg', 'Hijama'),
(28, 'hijama7.jpg', 'Images/Hijama/hijama7.jpg', 'Hijama'),
(29, 'hijama8.jpg', 'Images/Hijama/hijama8.jpg', 'Hijama'),
(30, 'modelisme01.jpg', 'Images/ModÃ©liste/modelisme01.jpg', 'ModÃ©liste'),
(31, 'modeliste.jpg', 'Images/ModÃ©liste/modeliste.jpg', 'ModÃ©liste'),
(32, 'modeliste1.jpg', 'Images/ModÃ©liste/modeliste1.jpg', 'ModÃ©liste'),
(33, 'modeliste2.jpg', 'Images/ModÃ©liste/modeliste2.jpg', 'ModÃ©liste'),
(34, 'modeliste6.jpg', 'Images/ModÃ©liste/modeliste6.jpg', 'ModÃ©liste'),
(35, 'modeliste7.jpg', 'Images/ModÃ©liste/modeliste7.jpg', 'ModÃ©liste'),
(36, 'modeliste8.jpg', 'Images/ModÃ©liste/modeliste8.jpg', 'ModÃ©liste'),
(37, 'modeliste10.jpg', 'Images/ModÃ©liste/modeliste10.jpg', 'ModÃ©liste'),
(38, 'Patisserie.jpg', 'Images/PÃ¢tisserie/Patisserie.jpg', 'PÃ¢tisserie'),
(39, 'isaafat1.jpg', 'Images/Secourisme/isaafat1.jpg', 'Secourisme'),
(40, 'isaafat2.jpg', 'Images/Secourisme/isaafat2.jpg', 'Secourisme'),
(41, 'isaafat3.jpg', 'Images/Secourisme/isaafat3.jpg', 'Secourisme'),
(42, 'isaafat7.jpg', 'Images/Secourisme/isaafat7.jpg', 'Secourisme'),
(43, 'isaafat11.jpg', 'Images/Secourisme/isaafat11.jpg', 'Secourisme'),
(44, 'sport.jpg', 'Images/PrÃ©parateur/sport.jpg', 'PrÃ©parateur'),
(45, 'sport1.jpg', 'Images/PrÃ©parateur/sport1.jpg', 'PrÃ©parateur'),
(46, 'sport5.jpg', 'Images/PrÃ©parateur/sport5.jpg', 'PrÃ©parateur'),
(47, 'sport6.jpg', 'Images/PrÃ©parateur/sport6.jpg', 'PrÃ©parateur'),
(48, 'sport8.jpg', 'Images/PrÃ©parateur/sport8.jpg', 'PrÃ©parateur');

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
(1, 24, 240, 20);

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
