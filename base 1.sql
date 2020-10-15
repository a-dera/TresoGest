-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 08 Février 2020 à 09:19
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tresorerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `num_compte` int(5) NOT NULL,
  `date_op` date NOT NULL,
  `libe` varchar(50) NOT NULL,
  `mont` int(5) NOT NULL,
  `genre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `num_compte`, `date_op`, `libe`, `mont`, `genre`) VALUES
(1, 571, '2020-02-08', 'Achats de fourniture de bureau', 1000000, 'débit');

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nature` varchar(50) NOT NULL,
  `niveau` int(5) NOT NULL,
  `descrip` longtext NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='les users y indiquent les soucis rencontrés' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `num_compte` int(5) NOT NULL,
  `date` date NOT NULL,
  `libe` varchar(50) NOT NULL,
  `mont` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `test`
--

INSERT INTO `test` (`id`, `num_compte`, `date`, `libe`, `mont`) VALUES
(1, 571, '2020-01-29', 'Achat de marchandises', 50000);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `identifiant` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='base des utilisateurs';

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`identifiant`, `mdp`, `date`, `username`) VALUES
('Admin', 'Admin123', '2020-02-03', 'Amédée DERA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
