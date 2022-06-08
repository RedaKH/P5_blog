-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 11:37
-- Version du serveur : 5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id_com`),
  KEY `fk_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id_com`, `content`, `name`, `time`, `approved`, `post_id`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et enim a quam porttitor auctor. In varius risus lorem, et rutrum nisl hendrerit eu. Vestibulum id auctor leo, ac tempor orci. Sed aliquam ac magna sit amet cursus. Donec est est, porttitor eget nunc eget, dapibus dignissim mi. Praesent fermentum gravida tortor, ultrices aliquam mauris fermentum eu. Etiam sit amet velit tempor, efficitur sapien ac, laoreet nisi.\r\n\r\nSed erat ante, consectetur a augue vitae, lacinia sollicitudin quam. Donec vitae pharetra urna. In eget suscipit ex. Pellentesque at quam mauris. Ut nisi sapien, iaculis nec libero ut, varius dapibus enim. Aliquam ut ante id ligula varius maximus at vel ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam porta justo quam, ac rutrum neque malesuada vulputate. Curabitur viverra gravida lacinia. Suspendisse interdum ullamcorper maximus. Mauris a velit scelerisque, dignissim est in, aliquam tortor. Donec sit amet nunc ligula. Sed id luctus nisl.\r\n\r\nAliquam erat volutpat. In rutrum nulla sit amet placerat placerat. Maecenas sem massa, elementum eu rhoncus sed, imperdiet vel arcu. Ut velit odio, blandit ut volutpat vitae, ultrices sed libero. Etiam id tristique neque. Sed vehicula risus eu placerat rhoncus. Duis orci quam, tempus eu dui eu, aliquam porttitor eros. Mauris vestibulum est nec magna sodales pellentesque. Fusce ut suscipit urna. Aliquam erat urna, dapibus sed tincidunt non, consectetur ac neque. Duis iaculis cursus quam vel posuere. Ut ultricies, nulla vitae eleifend placerat, elit mauris maximus eros, non tincidunt ex nunc sit amet turpis. Integer vel ipsum massa. Nulla sit amet ex eu tellus porta dapibus quis et erat. Integer id sagittis ligula.\r\n\r\nDuis mollis non nunc quis suscipit. Quisque vel elementum erat, vel egestas orci. Nulla facilisi. In sodales massa ipsum, a pharetra urna ullamcorper ac. Maecenas gravida urna risus, quis sollicitudin arcu viverra id. Donec nunc neque, lobortis ac porta rhoncus, aliquam id massa. Cras blandit arcu at erat placerat, nec placerat arcu rutrum. Integer posuere sodales dolor eu condimentum. Morbi ut nunc eleifend, rutrum sem at, pharetra eros.\r\n\r\nProin a augue consequat, tristique orci vitae, consectetur neque. Etiam rhoncus dui in tellus vulputate mattis. Proin malesuada lorem suscipit, consectetur orci ac, efficitur eros. Sed accumsan nisl at dui sagittis consequat. Fusce ac elit arcu. Quisque et massa auctor, congue justo vel, dapibus purus. Nunc elementum aliquet mi, ac dignissim nisl tempor sed.', 'lorem', '2022-06-08 11:32:10', 1, 1);

--
-- Déclencheurs `comment`
--
DROP TRIGGER IF EXISTS `time_comment`;
DELIMITER $$
CREATE TRIGGER `time_comment` BEFORE INSERT ON `comment` FOR EACH ROW SET NEW.time= CURRENT_TIMESTAMP
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `title`, `img`, `content`, `created_at`) VALUES
(1, 'lorem', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et enim a quam porttitor auctor. In varius risus lorem, et rutrum nisl hendrerit eu. Vestibulum id auctor leo, ac tempor orci. Sed aliquam ac magna sit amet cursus. Donec est est, porttitor eget nunc eget, dapibus dignissim mi. Praesent fermentum gravida tortor, ultrices aliquam mauris fermentum eu. Etiam sit amet velit tempor, efficitur sapien ac, laoreet nisi.\r\n\r\nSed erat ante, consectetur a augue vitae, lacinia sollicitudin quam. Donec vitae pharetra urna. In eget suscipit ex. Pellentesque at quam mauris. Ut nisi sapien, iaculis nec libero ut, varius dapibus enim. Aliquam ut ante id ligula varius maximus at vel ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam porta justo quam, ac rutrum neque malesuada vulputate. Curabitur viverra gravida lacinia. Suspendisse interdum ullamcorper maximus. Mauris a velit scelerisque, dignissim est in, aliquam tortor. Donec sit amet nunc ligula. Sed id luctus nisl.\r\n\r\nAliquam erat volutpat. In rutrum nulla sit amet placerat placerat. Maecenas sem massa, elementum eu rhoncus sed, imperdiet vel arcu. Ut velit odio, blandit ut volutpat vitae, ultrices sed libero. Etiam id tristique neque. Sed vehicula risus eu placerat rhoncus. Duis orci quam, tempus eu dui eu, aliquam porttitor eros. Mauris vestibulum est nec magna sodales pellentesque. Fusce ut suscipit urna. Aliquam erat urna, dapibus sed tincidunt non, consectetur ac neque. Duis iaculis cursus quam vel posuere. Ut ultricies, nulla vitae eleifend placerat, elit mauris maximus eros, non tincidunt ex nunc sit amet turpis. Integer vel ipsum massa. Nulla sit amet ex eu tellus porta dapibus quis et erat. Integer id sagittis ligula.\r\n\r\nDuis mollis non nunc quis suscipit. Quisque vel elementum erat, vel egestas orci. Nulla facilisi. In sodales massa ipsum, a pharetra urna ullamcorper ac. Maecenas gravida urna risus, quis sollicitudin arcu viverra id. Donec nunc neque, lobortis ac porta rhoncus, aliquam id massa. Cras blandit arcu at erat placerat, nec placerat arcu rutrum. Integer posuere sodales dolor eu condimentum. Morbi ut nunc eleifend, rutrum sem at, pharetra eros.\r\n\r\nProin a augue consequat, tristique orci vitae, consectetur neque. Etiam rhoncus dui in tellus vulputate mattis. Proin malesuada lorem suscipit, consectetur orci ac, efficitur eros. Sed accumsan nisl at dui sagittis consequat. Fusce ac elit arcu. Quisque et massa auctor, congue justo vel, dapibus purus. Nunc elementum aliquet mi, ac dignissim nisl tempor sed.', '2022-06-08 11:31:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `email`, `role`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'reda.khaldi@gmail.com', 1),
(11, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.com', 0),
(12, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.com', 0),
(13, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test.com', 0),
(14, 'test3', '098f6bcd4621d373cade4e832627b4f6', 'test3@test.com', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
