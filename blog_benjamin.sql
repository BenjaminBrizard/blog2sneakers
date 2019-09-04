-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 01 sep. 2019 à 20:14
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog_benjamin`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_produit` varchar(20) DEFAULT NULL,
  `pseudo` varchar(20) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `code_produit`, `pseudo`, `commentaire`) VALUES
(4, NULL, 'fred', 'test2'),
(5, 'parra', 'ben', 'test7'),
(6, 'parra', 'ben', 'test8'),
(7, 'air_force1', 'ben', 'test1'),
(8, 'air_max_shematic', 'ben', 'test'),
(9, 'air_force1', 'ben', 'test'),
(10, 'air_force1', 'ben', 'test9'),
(11, 'air_force1', 'ben', 'test'),
(12, 'tailwind', 'ben', 'test'),
(13, 'air_max_tokyomaze', 'ben', 'test'),
(14, 'tailwind', 'erdal', 'wouah !'),
(15, 'air_max_tokyomaze', 'ben', 'elle est super  '),
(16, 'air_max_tokyomaze', 'ben', 'elle est super  '),
(17, 'air_max_tokyomaze', 'ben', 'elle est super  '),
(18, 'tailwind', 'ben', 'elle est super  '),
(19, 'tailwind', 'benj', '...'),
(20, 'tailwind', 'benja', 'ttt'),
(21, 'tailwind', 'benja', 'ttt'),
(22, 'tailwind', 'ben', 'elle est super  '),
(23, 'air_force1', 'benj', 'air force 1'),
(24, 'air_force1', 'benjamin', 'commentaire'),
(25, 'air_force1', 'benjamin', 'commentaire'),
(26, 'air_force1', 'benjamin', 'commentaire'),
(27, 'air_force1', 'benjamin', 'commentaire'),
(28, 'air_force1', 'benjamin', '^gggg'),
(29, 'air_force1', 'benjamin', '^gggg'),
(30, 'air_force1', 'benjamin', '^gggg'),
(31, 'air_force1', 'benjamin', 'test0'),
(32, 'air_force1', 'benjamin', 'test0'),
(33, 'air_force1', 'benjamin', 'test0'),
(34, 'air_force1', 'benjamin', 'test0'),
(35, 'air_force1', 'benjamin', 'test0'),
(36, 'air_force1', 'benjamin', 'test0'),
(37, 'air_force1', 'benjamin', 'test0'),
(38, 'tailwind', 'zak', 'elle est super  '),
(39, 'tailwind', 'nico', 'wesh'),
(40, 'tailwind', 'benj', 'elle est super  '),
(41, 'tailwind', 'benj', 'elle est super  '),
(42, 'tailwind', 'benjamin', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
(43, 'tailwind', 'benjamin', 'La Tailwind 4, initialement sortie en 1999, la Tailwind 4 est un modÃ¨le de running, c\'est grace Ã  la marque New-Yorkaise &quot;Supreme&quot; que la marque au swosh amorce la rÃ©Ã©dition d\'un modÃ¨le au mois de mars 2119 qui sera finalement '),
(44, 'air_max_shematic', 'ben', '&quot;test&quot;'),
(45, 'air_max_shematic', 'ben', '&quot;test&quot;'),
(46, 'air_max_shematic', 'ben', 'test &lt;p&gt;hfdhfh&lt;/p&gt;'),
(47, 'air_max_shematic', 'ben', 'test &lt;p&gt;hfdhfh&lt;/p&gt;'),
(48, 'air_max_shematic', 'ben', 'test &lt;p&gt;hfdhfh&lt;/p&gt;'),
(49, 'air_max_shematic', 'ben', 'test &lt;p&gt;hfdhfh&lt;/p&gt;'),
(50, 'air_max_shematic', 'ben', 'test &lt;p&gt;hfdhfh&lt;/p&gt;'),
(51, 'air_force1', 'benj', 'jjjj'),
(52, 'air_max_shematic', 'benjamin', 'shema'),
(53, 'air_max_shematic', 'benjamin', 'shema'),
(54, 'air_max_shematic', 'benjamin', 'shema'),
(55, 'tailwind', 'Ben77', 'test248');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `pseudo`, `mail`, `mdp`) VALUES
(5, 'Ben77', 'Benbrizard@gmail.com', 'juju'),
(4, 'Ben77', 'Benbrizard@gmail.com', 'juju'),
(6, 'Ben77', 'Benbrizard@gmail.com', 'juju'),
(7, 'antoine', 'pierini.antoine@gmail.com', 'a'),
(8, 'Ben77', 'Benbrizard@gmail.com', 'juju'),
(9, 'Ben77', 'Benbrizard@gmail.com', 'juju'),
(10, 'jean', 'test@gmail.com', 'juju'),
(11, 'antoine', 'pierini.antoine@gmail.com', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
