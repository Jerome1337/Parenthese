-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Juillet 2015 à 02:33
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bicravart`
--

-- --------------------------------------------------------

--
-- Structure de la table `contactartist`
--

CREATE TABLE IF NOT EXISTS `contactartist` (
`id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contactartist`
--

INSERT INTO `contactartist` (`id`, `name`, `email`, `tel`, `message`) VALUES
(1, 'ocer', 'aaaa@aaa.coma', '', ''),
(2, 'ocer', 'aaaa@aaa.coma', '', ''),
(3, 'ocerzz', 'aaaa@aaa.coma', '', ''),
(4, 'azert', 'deees@aa.com', '0608980074', 'efhsrsrh\\n'),
(5, 'azert', 'deees@aa.com', '0608980074', 'efhsrsrh\\n'),
(6, 'azerh', 'aezerg@aze.fr', '6054789642', 'f rgqer gqrgqreg'),
(7, 'aaaa', 'a@a.fr', '0505', 'aaaaaa'),
(8, 'aaaa', 'a@a.fr', '0505', 'aaaaaa'),
(9, 'aaaa', 'aaaa@a.fr', '7575', 'aaaaa'),
(10, 'sddffQZ', 'AAA@AA.RF', '0848', 'FRGGR'),
(11, 'aaa', 'a@r.gt', '45445', 'eeeee'),
(12, 'aaa', 'a@a.fr', '55', 'jdjdfj'),
(13, 'aaa', 'a@a.fr', '555', 'jdjdfj'),
(14, 'aaa', 'a@e.de', '4864646', 'aazazfgargztgztg'),
(15, 'aaa', 'a@e.de', '4864646', 'aazazfgargztgztg'),
(16, 'aaa', 'eed@af.fr', '5456', 'rferferf'),
(17, 'aaaa', 'eed@af.fr', '5456', 'rferferf'),
(18, 'aaa', 'eed@af.fr', '5456', 'rferferf'),
(19, 'aaaa', 'aaa@azertyh.fr', 'defzf', 'fzrfergerg'),
(20, 'aaaa', 'aaa@azertyh.fr', 'defzf', 'fzrfergerg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contactartist`
--
ALTER TABLE `contactartist`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contactartist`
--
ALTER TABLE `contactartist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
