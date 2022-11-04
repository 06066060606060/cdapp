-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 04 nov. 2022 à 14:57
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `nom`, `prenom`, `admin`) VALUES
(1, 'xmicky@hotmail.fr', '$2y$10$SEfkcxuL3UJ077crZ8vYOO8t0BvZuxJSb3NG4Sq.K.LK7yhthaSqC', '', '', 1),
(2, 'test@gmail.com', '$2y$10$SEfkcxuL3UJ077crZ8vYOO8t0BvZuxJSb3NG4Sq.K.LK7yhthaSqC', 'joe', 'jack', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `work_time` time NOT NULL,
  `date` date NOT NULL,
  `h_rate` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `work_time`, `date`, `h_rate`, `created_at`, `updated_at`) VALUES
(3, 1, '02:00:00', '2022-11-01', '10', '2022-11-01 07:01:52', '2022-10-31 07:01:52'),
(4, 1, '04:00:00', '2022-11-02', '10', '2022-11-01 18:47:19', '2022-10-31 01:01:52'),
(5, 2, '02:00:00', '2022-10-09', '12', '2022-11-03 18:49:04', '2022-10-31 09:48:49'),
(6, 2, '04:00:00', '2022-10-21', '25', '2022-11-09 18:48:50', '2022-10-31 09:48:49'),
(7, 1, '02:00:00', '2022-10-25', '25', '2022-10-30 07:01:52', '2022-10-31 07:01:52'),
(8, 1, '04:00:00', '2022-10-12', '10', '2022-10-29 02:01:52', '2022-10-31 01:01:52'),
(9, 2, '02:00:00', '2022-09-16', '12', '2022-10-28 09:48:49', '2022-10-31 09:48:49'),
(10, 2, '04:00:00', '2022-09-19', '35', '2022-10-26 09:48:49', '2022-10-31 09:48:49'),
(11, 1, '02:00:00', '2022-11-03', '25', '2022-11-03 06:31:23', '2022-11-03 06:31:23'),
(12, 1, '04:00:00', '2022-09-30', '30', '2022-11-03 07:18:06', '2022-11-03 07:18:06'),
(15, 1, '01:00:00', '2022-10-10', '10', '2022-11-03 15:23:15', '2022-11-03 15:23:15'),
(16, 1, '01:01:10', '2022-10-10', '10', '2022-11-03 15:24:12', '2022-11-03 15:24:12'),
(18, 1, '02:01:00', '2022-10-22', '25', '2022-11-03 16:03:04', '2022-11-03 16:03:04'),
(24, 1, '05:00:00', '2022-11-04', '10', '2022-11-04 04:28:48', '2022-11-04 04:28:48'),
(25, 1, '01:00:00', '2022-11-02', '10', '2022-11-04 04:41:51', '2022-11-04 04:41:51'),
(26, 1, '02:00:00', '2022-11-03', '5', '2022-11-04 04:42:45', '2022-11-04 04:42:45'),
(27, 1, '01:00:00', '2022-11-05', '55', '2022-11-04 05:14:17', '2022-11-04 05:14:17'),
(28, 1, '02:00:00', '2022-11-06', '22', '2022-11-04 05:20:47', '2022-11-04 05:20:47'),
(29, 1, '00:00:05', '2022-11-15', '55', '2022-11-04 05:37:31', '2022-11-04 05:37:31'),
(31, 1, '02:02:00', '2022-11-30', '10', '2022-11-04 09:02:10', '2022-11-04 09:02:10'),
(32, 1, '00:02:00', '2022-09-04', '55', '2022-11-04 10:31:55', '2022-11-04 10:31:55'),
(33, 1, '00:02:00', '2022-08-07', '55', '2022-11-04 10:32:10', '2022-11-04 10:32:10'),
(34, 1, '00:02:00', '2022-08-01', '55', '2022-11-04 10:32:40', '2022-11-04 10:32:40'),
(35, 1, '04:02:00', '2022-11-18', '15', '2022-11-04 10:41:43', '2022-11-04 10:41:43');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKuser` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `FKuser` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
