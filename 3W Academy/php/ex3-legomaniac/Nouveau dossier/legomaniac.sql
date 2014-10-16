-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 04 Juin 2014 à 15:44
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `legomaniac`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categorie_id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT 'untitled',
  `margin` float NOT NULL DEFAULT '0.15',
  `expedition_price` float NOT NULL DEFAULT '7',
  PRIMARY KEY (`categorie_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `name`, `margin`, `expedition_price`) VALUES
(1, 'enfant', 0.15, 10),
(2, 'collection', 0.15, 10),
(3, 'super-hero', 0.15, 10),
(4, 'classique', 0.15, 10);

-- --------------------------------------------------------

--
-- Structure de la table `legos`
--

CREATE TABLE IF NOT EXISTS `legos` (
  `lego_id` int(3) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(2) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL DEFAULT 'untitled',
  `price` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`lego_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `legos`
--

INSERT INTO `legos` (`lego_id`, `categorie_id`, `name`, `price`) VALUES
(1, 1, 'pirate', 2),
(2, 1, 'space', 2),
(3, 1, 'cow-boy', 10),
(4, 3, 'superman', 10),
(5, 2, 'starsky et hutch', 40),
(7, 4, 'blue block', 1),
(8, 4, 'boîte de 100 multicolores', 15),
(9, 4, 'boîte de 1000 multicolores', 30),
(10, 2, 'james bond', 40),
(11, 2, 'mission impossible', 35),
(12, 3, 'hulk ', 15),
(13, 3, 'batman', 20),
(14, 1, 'unjnkjnikn', 52);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
