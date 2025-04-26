-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 10:57
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet fdt`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin-cred`
--

CREATE TABLE `admin-cred` (
  `sr-no` int(11) NOT NULL,
  `admin-name` varchar(150) NOT NULL,
  `admin-pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin-cred`
--

INSERT INTO `admin-cred` (`sr-no`, `admin-name`, `admin-pass`) VALUES
(1, 'tjwebdev', '12345');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin-cred`
--
ALTER TABLE `admin-cred`
  ADD PRIMARY KEY (`sr-no`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin-cred`
--
ALTER TABLE `admin-cred`
  MODIFY `sr-no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
