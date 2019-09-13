-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 13 sep. 2019 à 09:41
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
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `new_mdp` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `pseudo`, `mail`, `mdp`, `new_mdp`) VALUES
(71, 'romain', 'romain@gmail.com', '$2y$10$Lk0pjHlslqw0ic.uEhufUu/yFWANhRBy.CsbttB6RMVFMOMTwG7nm', 0),
(70, 'fred', 'fred@gmail.com', '$2y$10$K/P6ytNm8T/8sFxED1sKO.4qDbcCjMR3tel1QtPkSTnjkFUeQTDj6', 0),
(69, 'erdal5', 'erdaltest@gmail.com', '$2y$10$ALbVQvCk7oW8E38AcFDKK.M8SZx46.OwSLEy.VA8Gwamj6XnBloKG', 0),
(68, 'ben', 'codintag@gmail.com', '$2y$10$V0ofCRjahoBH7J3cBUqNsOIwlhf1BdGl69rYAJNga7GQvvbu5nLsq', 0),
(67, 'erdal11', 'codintag@gmail.com', '$2y$10$FMLfT5fKzm/JRhQf6Nb7xe7p7iPNDwDy6UQ/eyTPWZ6/zhanBvhJu', 0),
(66, 'erdal5', 'codintag@gmail.com', '$2y$10$ndiUFg8ux2L5kT2JXTtsSuXigCvyX6EM.NP2vILa/ODNgbvfM7X.y', 0),
(65, 'benjamin5', 'codintag@gmail.com', '$2y$10$3YKaFaTwU37mjvS17DvCMeiQ8Fgkymd7zf5xr2Bsvf1wYZAhOP1jW', 0),
(64, 'benjamin', 'codintag@gmail.com', '$2y$10$Rpza.fUShlbYIFtnGbHQuuhgKuDtE.8Qaem4gNP20K.q0gcWD3VCq', 0),
(63, 'erdal', 'codintag@gmail.com', '$2y$10$xpFJnCYxFvfGgp1fKrbSKujtmLFwT/qYVAKwmpM4w0AAVtMlOmIRC', 0),
(62, 'ben', 'benbrizard@gmail.com', '$2y$10$nZ2zN30noFGsG4d/JqTAReV1/hSbZ/sLU6OxHMEMHORI21ooUsy.6', 0),
(72, 'auriane', 'auriane.mensah@gmail.com', '$2y$10$0cDrMQ2TJSI9g7ZudsPLFuZbU07IJ4v9BaXAfgwVG5UclVH9wYzLe', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
