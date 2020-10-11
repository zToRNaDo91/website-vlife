-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 11 oct. 2020 à 13:37
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vlife`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` smallint(6) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'En attente'),
(2, 'Accepter'),
(3, 'Refuser'),
(4, 'Banni'),
(5, 'Refuser'),
(6, '0');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `numero` smallint(6) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `passion` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `discord` varchar(50) NOT NULL,
  `category_id` smallint(6) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `micro` enum('Oui','Non') NOT NULL,
  `gta` enum('Oui','Non') NOT NULL,
  `conge` varchar(100) NOT NULL,
  `travail` varchar(100) NOT NULL,
  `absent` varchar(100) NOT NULL,
  `dispo` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `XP` varchar(350) NOT NULL,
  `RP` varchar(350) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `metier` enum('Oui','Non') NOT NULL,
  `met` varchar(100) NOT NULL,
  `motive` varchar(350) NOT NULL,
  `scenario` varchar(350) NOT NULL,
  `autre` varchar(150) NOT NULL,
  `avatar` varchar(60) NOT NULL,
  `validation` varchar(15) NOT NULL,
  `duplicate` smallint(6) NOT NULL,
  `raison` varchar(50) NOT NULL DEFAULT 'Trop jeune'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

CREATE TABLE `recruteur` (
  `Number` int(11) NOT NULL,
  `date_traitement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `traitement` varchar(70) NOT NULL,
  `numero2` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `oral` enum('Accepter','Refuser') DEFAULT NULL,
  `commentaire` varchar(400) NOT NULL,
  `recrutoral` varchar(100) NOT NULL,
  `date_recrutoral` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `raison_oral` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `numero` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `discord_id` varchar(50) NOT NULL,
  `role` enum('Admin','Recruteur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`numero`, `nom`, `discord_id`, `role`) VALUES
(1, 'AuraAngel', '258310766384513025', 'Admin'),
(2, 'Brayan Vagler', '217177855157600256', 'Admin'),
(3, 'Nicolas d\'Olan', '280051105348583425', 'Recruteur'),
(4, 'Steven Grenzo', '280638077008084992', 'Recruteur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`numero`);

--
-- Index pour la table `recruteur`
--
ALTER TABLE `recruteur`
  ADD PRIMARY KEY (`Number`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `info`
--
ALTER TABLE `info`
  MODIFY `numero` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recruteur`
--
ALTER TABLE `recruteur`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
