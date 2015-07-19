-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Juillet 2015 à 23:31
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

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
(20, 'aaaa', 'aaa@azertyh.fr', 'defzf', 'fzrfergerg'),
(21, 'ocer', 'aaaa@aaa.coma', '5255', 'rqrgtgzstg'),
(22, 'aaa', 'a@a.fr', '456564', '64556'),
(23, 'aee', 'r@af.r', '4556', 'frfr');

-- --------------------------------------------------------

--
-- Structure de la table `contactentreprise`
--

CREATE TABLE IF NOT EXISTS `contactentreprise` (
`id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contactentreprise`
--

INSERT INTO `contactentreprise` (`id`, `name`, `email`, `tel`, `message`) VALUES
(1, 'azert', 'deees@aa.com', '0608980074', 'efhsrsrh\\n'),
(2, 'edf', 'edf@a.fr', '+33123456789', 'azeyq ygqrge'),
(3, 'TIC TAC', 'azt@a.dr', '0650010101', 'gqstyhsrthsrthrthdyhtyhtyhh'),
(4, 'TIC TAC', 'azt@a.dr', '0650010101', 'gqstyhsrthsrthrthdyhtyhtyhh');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE IF NOT EXISTS `entreprises` (
`id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dateproj` date NOT NULL,
  `lieu` varchar(300) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `name`, `email`, `dateproj`, `lieu`, `description`) VALUES
(1, 'aaaa', 'aaa@aaa.com', '2015-02-21', 'nice', 'azertyuhgf'),
(2, 'aze\\''eee', 'p-jerome@hotmail.fr', '0045-03-12', 'azergbvc', '<script>alert(\\''lol\\'');</script>'),
(3, 'aze\\''eee', 'p-jerome@hotmail.fr', '0045-03-12', 'azergbvc', '<script>alert(\\''lol\\'');</script>'),
(4, 'aze\\''eee', 'p-jerome@hotmail.fr', '0045-03-12', 'azergbvc', '<script>alert(\\''lol\\'');</script>'),
(5, 'aazergehtgbd\\''y', 'agence.parenthese@gmail.com', '0000-00-00', 'nice', '<script>alert(\\''lol);<script>'),
(6, 'test ennnnp', 'a@a.fr', '2015-07-30', 'Lille', 'sgbsg sg ths th'),
(7, 'aaaa', 'a@a.dr', '2015-07-04', '5546', 'gshshsrth'),
(8, 'aaa', 'a@a.de', '2015-07-11', 'fvnnsfgn', 'gnsnsgbhshsgh'),
(9, 'aa', 'aer@a.de', '2015-07-18', 'aeraqyhyh', 'fgqth'),
(10, 'carfourre', 'zef@aa.de', '2015-07-28', 'qzthzthzr', 'gztgztgztgztg'),
(11, 'rgztghz', 'gatgqzt@de.de', '2015-07-28', 'qzthzthzr', 'gztgztgztgztg'),
(12, 'aaaa', 'aaa@aaa.de', '2015-07-18', 'aaaaa', 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `graffeurs`
--

CREATE TABLE IF NOT EXISTS `graffeurs` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(200) NOT NULL,
  `competences` text NOT NULL,
  `salaire` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `graffeurs`
--

INSERT INTO `graffeurs` (`id`, `name`, `age`, `tel`, `email`, `website`, `competences`, `salaire`) VALUES
(1, 'test', 22, '0765040302', 'testestest@gmail.com', 'www.google.com', 'pochoire, bombe, caricatures', '500'),
(2, 'test', 22, '0765040302', 'testestest@gmail.com', 'www.google.com', 'pochoire, bombe, caricatures', '500'),
(3, 'aaa', 1, '1', 'p-jerome@hotmail.fr', 'http://azert.com', 'aze', '21'),
(4, 'a', 1, '', '', 'http://azertyui.com', '', ''),
(5, 'aaaa', 0, '', '', 'http://azerty.com', '', ''),
(6, 'aaa', 0, '', '', 'http://g.com', '', ''),
(7, 'aaa', 0, '', '', 'http://go.com', '', ''),
(8, 'aaa', 0, '', '', 'http://g.com', '', ''),
(9, 'test', 7, '1234567890', 'p-jerome@hotmail.fr', 'http://google.com', 'azertyjnbvderthbv', '13'),
(10, 'aerqz', 45, '666666666', 'a@ert.gt', 'http://google.de', 'artjyjedtyj', '26'),
(11, 'aaaaaa', 21, 'aaa', 'p-jerome@hotmail.fr', 'http://', 'ae', '21'),
(12, 'aaaaaa', 21, 'aaa', 'p-jerome@hotmail.fr', 'http://', 'ae', '21'),
(13, 'aaaaaa', 21, 'aaa', 'p-jerome@hotmail.fr', 'http://azr.com', 'ae', '21'),
(14, 'fegz', 21, '25', 'zrty@a.fr', 'http://a.de', 'aergz', '54'),
(15, 'fegz', 21, '25', 'zrty@a.fr', 'http://a.de', 'aergz', '54'),
(16, 'eqR', 21, '2', 'a@de.fr', 'http://a.fr', 'a', '21'),
(17, 'aez', 57, 'ghs', 'y@a.fr', 'http://aaa.fr', 'fgqg', '64'),
(18, 'dffff', 64, '266', 'p-jerome@hotmail.fr', 'http://aaa.fr', 'fgqg', '64'),
(19, 'rgqrg', 25, '25', 'p-a@fr.fr', 'http://aaa.fr', 'aaa', '54');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contactartist`
--
ALTER TABLE `contactartist`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contactentreprise`
--
ALTER TABLE `contactentreprise`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `graffeurs`
--
ALTER TABLE `graffeurs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contactartist`
--
ALTER TABLE `contactartist`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `contactentreprise`
--
ALTER TABLE `contactentreprise`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `graffeurs`
--
ALTER TABLE `graffeurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
