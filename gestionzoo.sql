-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: 127.0.0.1
-- Généré le : Mer 27 Mars 2024 à 21:06
-- Version du serveur: 5.5.10
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gestionzoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE IF NOT EXISTS `animaux` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sexe` char(5) DEFAULT NULL,
  `Pseudo` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `Commentaire` varchar(10) DEFAULT NULL,
  `Id_Especes` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Animaux_Especes_FK` (`Id_Especes`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `animaux`
--

INSERT INTO `animaux` (`Id`, `Sexe`, `Pseudo`, `date_naissance`, `Commentaire`, `Id_Especes`) VALUES
(20, 'M', 'Olivierrrrrr', '2023-04-04', 'blabla', 1),
(23, 'F', 'gros chat', '2000-03-04', 'Gentil 2.0', 2),
(24, 'M', 'Olivier', '2023-04-01', 'blablpoi', 5),
(25, 'M', 'Olivierrrrrr', '2023-04-12', 'lkoipumj', 1),
(26, 'M', 'Olivierrrrrr', '2023-04-12', 'lkoipumj', 1);

-- --------------------------------------------------------

--
-- Structure de la table `enclos`
--

CREATE TABLE IF NOT EXISTS `enclos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Capaciter` int(11) DEFAULT NULL,
  `Taille` float DEFAULT NULL,
  `Eau` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `enclos`
--

INSERT INTO `enclos` (`Id`, `Nom`, `Capaciter`, `Taille`, `Eau`) VALUES
(1, 'henry', 52, 29.8, 'o'),
(3, 'henry', 52, 29.8, 'o');

-- --------------------------------------------------------

--
-- Structure de la table `especes`
--

CREATE TABLE IF NOT EXISTS `especes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Espece` varchar(50) DEFAULT NULL,
  `Nourriture` varchar(255) DEFAULT NULL,
  `Duree_de_vie` int(11) DEFAULT NULL,
  `Habitat` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `especes`
--

INSERT INTO `especes` (`Id`, `Nom_Espece`, `Nourriture`, `Duree_de_vie`, `Habitat`) VALUES
(1, 'Singe', 'Carrottes', 10, 'ForÃªt'),
(2, 'Lion', 'Carrottes', 2000, 'Savane'),
(5, 'Perroquet', 'CacahuÃ¨te', 75, 'Jungle'),
(6, 'Gros Chat', 'Grosse Croquettes', 115, 'Grosse Mai');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `Mot_de_passe` varchar(255) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `sexe` char(5) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Salaire` float DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`Id`, `login`, `Mot_de_passe`, `Nom`, `prenom`, `sexe`, `date_naissance`, `Profession`, `Adresse`, `Salaire`) VALUES
(10, 'admin', 'jythrg', 'Maxence', '', 'M', '2023-04-08', 'Comptable', '22', 22);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `Animaux_Especes_FK` FOREIGN KEY (`Id_Especes`) REFERENCES `especes` (`Id`);
