-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 mai 2021 à 11:54
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
-- Base de données : `gestion etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `CODE` int NOT NULL AUTO_INCREMENT,
  `NOM` varchar(50) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `PHOTO` varchar(50) NOT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CODE`, `NOM`, `MAIL`, `PHOTO`) VALUES
(20, '', '', ''),
(12, 'LARIORO', '', 'BOO.jfif'),
(14, 'TESTE', '', 'deadpool.png'),
(5, 'sgqserg', '', 'Toadette-Mario-Party-10-e1562929869862.jpg'),
(6, 'sfefzef', 'efsefef@jfjd.com', 'background.png'),
(16, '', '', ''),
(19, '', '', ''),
(18, 'ffrfrr', '', 'deadpool.png'),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(26, 'dfsf', 'hdjfj@djjd.com', 'background.png'),
(27, 'dfsf', 'hdjfj@djjd.com', 'background.png'),
(28, 'rolan', 'rolan@gg.com', 'Toadette-Mario-Party-10-e1562929869862.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `LOGIN` varchar(50) NOT NULL,
  `PASSWORD` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `NIVEAU` int NOT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`LOGIN`, `PASSWORD`, `NIVEAU`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
