-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 15 Février 2020 à 15:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `messages`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `index` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `firstname` text,
  `email` text,
  `msg` text,
  `date_msg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(11) NOT NULL,
  PRIMARY KEY (`index`),
  UNIQUE KEY `index` (`index`),
  KEY `id` (`index`),
  KEY `index_2` (`index`),
  KEY `index_3` (`index`),
  FULLTEXT KEY `username` (`name`,`firstname`,`email`,`msg`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`index`, `name`, `firstname`, `email`, `msg`, `date_msg`, `ip`) VALUES
(116, '', '', 'ac.paternoster@gmail.com', 'a', '2020-02-15 13:11:17', ''),
(117, '', '', 'ac.paternoster@gmail.com', 'aaaaaaaaaaa btgseggf ', '2020-02-15 13:13:51', ''),
(118, '', '', 'd.dddd@mail.com', 'dddddddddddddddddddddddddddddddédé', '2020-02-15 13:15:44', ''),
(119, '', '', 'a.g@mail.com', 'a', '2020-02-15 13:17:05', ''),
(120, '', '', 'aaa.aaa@mail.mail', 'a', '2020-02-15 13:20:45', ''),
(121, 'Test', 'test', 'test@test.com', 'sjqdkfhkjqsdhjfkljqsfhklqshkdjfhqsf', '2020-02-15 13:46:54', '127.0.0.1'),
(122, 'dfsqdf', 'ac', 'a.g@mail.com', 'qsdfqsd', '2020-02-15 14:34:29', '127.0.0.1'),
(123, '', '', 'g.green@mail.gr', 'gg', '2020-02-15 14:36:46', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
