-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 nov. 2021 à 14:03
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Users`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admin` tinyint NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pseudo` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `admin`, `email`, `first_name`, `last_name`, `pseudo`, `password`) VALUES
(1, 0, '', 'd', 'z', 'Gotvna', 'passphrase'),
(69, 0, '', 'd', 'z', 'Orrigine', 'passphrase');

-- --------------------------------------------------------
/*
--
-- Structure de la table `normal_users`
--

DROP TABLE IF EXISTS `normal_users`;
CREATE TABLE IF NOT EXISTS `normal_users` (
  `email` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `normal_users`
--

INSERT INTO `normal_users` (`email`, `first_name`, `last_name`, `username`, `password`) VALUES
('cc@cc.com', 'cc', 'cc', 'cc', 'cc'),
('a@a.com', 'a', 'a', 'a', 'a'),
('b@b.com', 'b', 'b', 'b', 'b'),
('d@d.com', 'd', 'd', 'd', 'd'),
('z@z.com', 'z', 'z', 'z', 'z'),
('y@y.com', 'y', 'y', 'y', 'y'),
('t@t.com', 't', 't', 't', 't'),
('f@f.com', 'f', 'f', 'f', 'f'),
('g@g.com', 'g', 'g', 'g', 'g'),
('x@x.com', 'x', 'x', 'x', 'x'),
('n@n.com', 'n', 'n', 'n', 'n');
COMMIT;
*/
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
