-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
<<<<<<< HEAD
-- Généré le : jeu. 22 mai 2025 à 23:15
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12
=======
-- Généré le : dim. 18 mai 2025 à 01:31
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28
>>>>>>> edae396f902c6c128094976df61f02852c4d36da

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
(1, 'royalemirald', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` varchar(30) NOT NULL,
  `pn2` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `tw`, `iframe`) VALUES
(1, 'HOTEL, ROYAL EMIRALD', 'https://maps.app.goo.gl/wE8G99Q7RQhNj1Xk9', ' 212000000000', ' 212000000000', 'ask.royalemirald@gmail.com', 'facebook.com', 'instagram.com/royalemirald', 'twitter.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6771.891146101964!2d-4.420873!3d31.935235!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd984a94517783e1:0xef82d926649ed5f6!2sHotel Kenzi Rissani!5e0!3m2!1sfr!2sma!4v1747926743047!5m2!1sfr!2sma');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_about`, `shutdown`) VALUES
<<<<<<< HEAD
(1, 'ROYAL \n', 0);
=======
(1, 'royal', 0);
>>>>>>> edae396f902c6c128094976df61f02852c4d36da

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin-cred`
--
ALTER TABLE `admin-cred`
  ADD PRIMARY KEY (`sr-no`);

--
-- Index pour la table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin-cred`
--
ALTER TABLE `admin-cred`
  MODIFY `sr-no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
