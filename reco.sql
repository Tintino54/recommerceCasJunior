-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 oct. 2018 à 16:53
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `reco`
--

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(30) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'hyev'),
(2, 'hyev'),
(3, 'tulor'),
(4, 'outoti');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `brand_id`, `product_name`) VALUES
(1, 1, 'bonjou'),
(2, 1, 'bonjou'),
(3, 1, 'bonjou'),
(4, 2, 'tralala'),
(5, 2, 'trilili'),
(6, 3, 'titu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
