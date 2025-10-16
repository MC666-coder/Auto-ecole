-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 16 oct. 2025 à 02:31
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `auto_ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_Eleve` int NOT NULL,
  `id_moniteur` int NOT NULL,
  `status` enum('attente','accepte','refuse') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'attente',
  PRIMARY KEY (`id_demande`),
  KEY `id_Eleve` (`id_Eleve`),
  KEY `id_moniteur` (`id_moniteur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_demande`, `id_Eleve`, `id_moniteur`, `status`) VALUES
(1, 1, 1, 'accepte'),
(2, 1, 2, 'accepte');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `id_Eleve` int NOT NULL AUTO_INCREMENT,
  `nom_Eleve` varchar(150) NOT NULL,
  `prenom_Eleve` varchar(150) NOT NULL,
  `email_Eleve` varchar(150) NOT NULL,
  `ddn_Eleve` date NOT NULL,
  `sexe_Eleve` varchar(50) NOT NULL,
  `permis_Eleve` varchar(150) NOT NULL,
  `id_formule` int NOT NULL,
  `id_ville` int NOT NULL,
  PRIMARY KEY (`id_Eleve`),
  KEY `id_formule` (`id_formule`),
  KEY `id_ville` (`id_ville`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_Eleve`, `nom_Eleve`, `prenom_Eleve`, `email_Eleve`, `ddn_Eleve`, `sexe_Eleve`, `permis_Eleve`, `id_formule`, `id_ville`) VALUES
(1, 'Prigent', 'Vanoe', 'vprigent@myges.fr', '2006-08-23', 'masculin', 'Permis A', 1, 2),
(2, 'chris', 'dassidi', 'malambassa235@gmail.com', '2025-09-13', 'masculin', 'Permis A', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `formules`
--

DROP TABLE IF EXISTS `formules`;
CREATE TABLE IF NOT EXISTS `formules` (
  `id_formule` int NOT NULL AUTO_INCREMENT,
  `nom_formule` varchar(150) NOT NULL,
  PRIMARY KEY (`id_formule`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formules`
--

INSERT INTO `formules` (`id_formule`, `nom_formule`) VALUES
(1, 'Aventure'),
(2, 'Départ_Rapide');

-- --------------------------------------------------------

--
-- Structure de la table `moniteur`
--

DROP TABLE IF EXISTS `moniteur`;
CREATE TABLE IF NOT EXISTS `moniteur` (
  `id_moniteur` int NOT NULL AUTO_INCREMENT,
  `nom_moniteur` varchar(150) NOT NULL,
  `prenom_moniteur` varchar(150) NOT NULL,
  `email_moniteur` varchar(150) NOT NULL,
  `ddn_moniteur` date NOT NULL,
  `sexe_moniteur` varchar(50) NOT NULL,
  `id_ville` int NOT NULL,
  PRIMARY KEY (`id_moniteur`),
  KEY `id_ville` (`id_ville`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `moniteur`
--

INSERT INTO `moniteur` (`id_moniteur`, `nom_moniteur`, `prenom_moniteur`, `email_moniteur`, `ddn_moniteur`, `sexe_moniteur`, `id_ville`) VALUES
(1, 'lili', 'Agent', 'liliagent@gmail.com', '2025-09-13', 'Feminin', 1),
(2, 'MBOUROU', 'Claude Marvine', 'mbourouclaudemarvine@gmail.com', '2025-09-18', 'Masculin', 3);

-- --------------------------------------------------------

--
-- Structure de la table `moniteur_eleve`
--

DROP TABLE IF EXISTS `moniteur_eleve`;
CREATE TABLE IF NOT EXISTS `moniteur_eleve` (
  `id_Eleve` int NOT NULL,
  `id_moniteur` int NOT NULL,
  PRIMARY KEY (`id_Eleve`,`id_moniteur`),
  KEY `id_moniteur` (`id_moniteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int NOT NULL AUTO_INCREMENT,
  `nom_ville` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`) VALUES
(1, 'Poitiers 86000'),
(2, 'Poitiers '),
(3, 'Nantes'),
(4, 'Nantes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
