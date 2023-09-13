-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 sep. 2023 à 09:55
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `samples`
--

-- --------------------------------------------------------

--
-- Structure de la table `android`
--

CREATE TABLE `android` (
  `id` int(10) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `date_validation` date NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `Modele` varchar(255) NOT NULL,
  `Version_software` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `Commentaires` varchar(255) NOT NULL,
  `Confirmé_FOTA` varchar(255) NOT NULL,
  `Date_lancement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `android`
--

INSERT INTO `android` (`id`, `brand`, `date_validation`, `Marque`, `Modele`, `Version_software`, `Etat`, `Commentaires`, `Confirmé_FOTA`, `Date_lancement`) VALUES
(4, 'Samsung', '2022-07-05', 's10+', 'sm300', 'SP1A.210812.016.G975FXXUFHVG4 \r\n', 'Validé', '', 'oui', '2023-08-23'),
(5, 'Samsung', '2016-08-02', 's9', 'sm782', 'SP1A.210812.016.G975FXXUFHVG4 \r\n', 'validé', '', 'oui', '2022-07-06'),
(6, 'Samsung', '2021-06-08', 's20', 'sm700', 'SP1A.210812.016.G975FXXUFHVG4 \r\n', 'validé', '', 'oui', '2023-08-08'),
(7, 'xiaomi', '2017-09-05', 'redmi 12', 'sg100', 'SP1A.210812.016.G975FXXUFHVG4 \r\n', 'non validé', 'probleme', 'non', '0000-00-00'),
(8, 'xiaomi', '2017-09-05', 'redmi 17', 'sg100', 'SP1A.210812.016.G975FXXUFHVG4 \r\n', 'non validé', 'probleme', 'non', '2017-09-05'),
(9, 'Oppo', '2023-09-18', 'reno 8', 'azerty', 'jkgnklgnklrgnklz', 'pas encore', 'encore de test', 'non', '2023-09-11'),
(10, 'Samsung', '2023-07-05', 's20', 'sg102', '123456789', 'Pas encore', '', 'non', '2023-09-11'),
(11, 'Huawei', '0000-00-00', 'P30 Pro', 'Nio', 'P2', 'Validé avec résérve', 'APN HOS', 'Non', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `android`
--
ALTER TABLE `android`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `android`
--
ALTER TABLE `android`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
