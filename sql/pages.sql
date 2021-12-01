-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 déc. 2021 à 14:00
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
-- Base de données : `users`
--

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `pageid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `backf` varchar(255) NOT NULL,
  `h1` varchar(50) NOT NULL,
  `paraf` text NOT NULL,
  `backs` varchar(255) NOT NULL,
  `h2` varchar(50) NOT NULL,
  `paras` text NOT NULL,
  `imgbodyf` varchar(255) NOT NULL,
  `imgbodys` varchar(255) NOT NULL,
  `backt` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,

  PRIMARY KEY (`pageid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`pageid`, `title`, `backf`, `h1`, `paraf`, `backs`, `h2`, `paras`, `imgbodyf`, `imgbodys`, `backt`, `background`) VALUES

('1', 'C Project', './img/c/connect1.png', 'About the C language', 'C is a high-level and general-purpose programming language that is ideal for developing firmware or portable applications. Originally intended for writing system software, C was developed at Bell Labs by Dennis Ritchie for the Unix Operating System in the early 1970s.', './img/c/connect2.png', 'Our C Project', 'After learning Git/Github and how works Debian WSL (linux environnement on Microsoft), the aim was to create a Connect-4 with some bonus, if it was possible to do them.<br> The bonus are a modifiable table to play on more columns and rows, the detection of the winner and a multiplayer like 6 players at the same time on the same board. This project was a bit hard to realise because understand how works Github was the first difficulty and after the configuration on Debian was even more <br>But it was very enriching.', 'img/c/carouc1.png', 'img/c/carouc2.png', './img/c/connect3.png', './index/c_programming.png'),
('2', 'Python Project', './img/python/blog-async.jpeg', 'About Python language', 'Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. Python is simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse. It is one of the most used language, and had changed the way of coding for many programmers with his unique syntax.', './img/python/stats_python.png', 'Our Python Project', 'Our first project was about python language and algorithm, the goal was to create a \"The Price is Right\" in a terminal, in order to train ourselves in algorithm. It was a funny project, not very hard, but the real purpose was to create some add-ons. <br>The two images below are a shell with the game and the code in python.', './img/python/python_code1.png', './img/python/python_code2.png', './img/python/python_with_logo.png', './index/python_programming1.jpg'),
('3', 'The Witcher 3 : Wild Hunt', './img/the_witcher/paral1_witcher.png', 'The aim of the project', 'The purpose of this project, is to train us on HTML with CSS and the rules of SEO. We learned the significance of organizing our ideas and setting up our schedule in order to not be overhelmed by the two weeks we had to create this site that we\'re proud of.', './img/the_witcher/paral2_witcher.png', 'About The Witcher III : Wild Hunt', 'The Witcher III : Wild Hunt is a game developped by <span class=\'red-text \'\'>CD PROJEKT: RED</span>, a well-known polish studio in 2015. We choose this game because we <span><a class=\'white-text\' target=\'blank\' href=\'UwU.php\'>love</a></span> the universe of the saga, and the gameplay of this rewareded RPG open world is a pleasure to play. The artistic direction of the game is wonderful and landscapes are even more. When you launch the game, you\'ll be took in an incredible environement and a beautiful journey.', 'NULL', 'NULL', './img/the_witcher/preview_site.png', './index/witcher3_back.png"),
('4', 'The Team', 'NULL', 'The Team', 'NULL', 'NULL', 'Student Developer', 'NULL', 'NULL', 'NULL', 'NULL', './index/team_code.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
