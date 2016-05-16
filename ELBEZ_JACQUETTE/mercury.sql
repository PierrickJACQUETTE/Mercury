-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 16 Mai 2016 à 15:45
-- Version du serveur: 5.5.47-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mercury`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `advert_id` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A45BDDC1D07ECCB6` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `application`
--

INSERT INTO `application` (`id`, `date`, `advert_id`, `valid`, `author`) VALUES
(9, '2016-05-16 10:57:56', 9, 0, 'Samuel1'),
(10, '2016-05-16 10:58:03', 10, 0, 'Samuel1'),
(11, '2016-05-16 10:58:56', 8, 0, 'Camille67'),
(12, '2016-05-16 10:59:01', 9, 0, 'Camille67');

-- --------------------------------------------------------

--
-- Structure de la table `applicationRecrutement`
--

CREATE TABLE IF NOT EXISTS `applicationRecrutement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `l_dm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `cv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B7BF6D5AD07ECCB6` (`advert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `applicationRecrutement`
--

INSERT INTO `applicationRecrutement` (`id`, `advert_id`, `author`, `date`, `l_dm`, `valid`, `cv`) VALUES
(1, 2, 'Dupont francis', '2016-05-16 15:17:05', 'phpO49yiD', 0, 'phpRqsNmB'),
(2, 2, 'Bertrand Lucien', '2016-05-16 15:17:33', 'phpXTyI1u', 0, 'phpaJ8Gyw'),
(3, 3, 'Julie Boregard', '2016-05-16 15:18:13', 'phpS63p69', 0, 'phpMpS3yk'),
(4, 4, 'Marine Bertrand', '2016-05-16 15:33:48', 'phpY4YMm6', 0, 'phpdNnBEj');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `time` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nb` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `date`, `title`, `author`, `content`, `requirements`, `at`, `updated_at`, `time`, `cost`, `responsable`, `nb`) VALUES
(8, '2016-05-16 10:10:01', 'Developpement Symfony3 (Base)', 'Mathieu1', 'Apprendre à utiliser symfony3 et ses bundles pour créer un site php.', 'Compréhension du PHP', 'Mercury', '2016-05-16 10:27:01', 2, 23, 'Mathieu', 5),
(9, '2016-05-16 10:12:18', 'Developpement NodeJS (Introduction)', 'Mathieu1', 'Conception d''un environnement NodeJS', 'Avoir une voiture, Bases solides en Javascript', '34, rue des Moulinaux, Paris 75005', NULL, 1, 34, 'Mathieu', 1),
(10, '2016-05-16 10:23:14', 'Management & Team Spirit', 'Mathieu1', 'Formation en ANGLAIS\r\nApprendre les bases du management et encourager une équipe de développement', 'None', '12, rue des Moulins', NULL, 1, 23, 'Cecile GHILTA', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth` datetime NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `contrat` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `superieur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `formation` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A6BCF3DEF85E0677` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id`, `fname`, `pname`, `birth`, `sex`, `contrat`, `time`, `salary`, `superieur`, `date`, `formation`, `username`) VALUES
(1, 'Dupont', 'Mathieu', '1990-04-23 00:00:00', 0, 1, 0, 2300, 'Mathieu', '2016-05-15 12:32:00', 7, 'Mathieu1'),
(2, 'Adams', 'Douglas', '1984-07-23 00:00:00', 0, 1, 0, 2150, 'Mathieu', '2016-05-15 12:59:08', 7, 'Douglas2'),
(3, 'Martin', 'Julie', '1992-12-08 00:00:00', 1, 0, 32, 1780, 'Mathieu', '2016-05-15 13:06:19', 7, 'Julie3'),
(4, 'Brooks', 'Hiromu', '1994-07-05 00:00:00', 1, 1, 0, 2000, 'Hiromu', '2016-05-16 10:35:25', 7, 'Hiro34'),
(5, 'Rodrigez', 'Samuel', '1985-03-27 00:00:00', 0, 0, 24, 1750, 'Hiromu', '2016-05-16 10:53:22', 5, 'Samuel1'),
(6, 'Harraps', 'Camille', '1996-07-01 00:00:00', 1, 0, 12, 1650, 'Mathieu', '2016-05-16 10:54:40', 4, 'Camille67'),
(7, 'Phoenix', 'Marcus', '1994-11-01 00:00:00', 0, 0, 14, 1500, 'Hiromu', '2016-05-16 10:55:40', 7, 'Marc54'),
(8, 'Larreya', 'Phillipe', '1995-08-15 00:00:00', 0, 1, 0, 1760, 'Douglas', '2016-05-16 10:56:58', 7, 'Phil93');

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

CREATE TABLE IF NOT EXISTS `recrutement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `time` int(11) NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `recrutement`
--

INSERT INTO `recrutement` (`id`, `date`, `title`, `author`, `content`, `requirements`, `at`, `updated_at`, `time`, `responsable`) VALUES
(2, '2016-05-16 15:11:03', 'Développeur Web PHP5 - Confirmé', '1', 'L’analyste expert aura à charge d''accompagner notamment sur les plateformes de dev à disposition des développeurs mais aussi de certains partenaires (agence de com etc…)', 'Linux (CentOS, Ubuntu & Redhat) • Apache/​Tomcat • SGBDR (Oracle & PostGreSQL)', 'paris', NULL, 365, '3'),
(3, '2016-05-16 15:11:53', 'Developpeur web', '1', 'Vous avez une très bonne maîtrise des technologies PHP7, JavaScript, XML, HTML, CSS et de bonnes connaissances d''Angular JS, ainsi que des applications mobiles Iphone et Android seraient un plus.​ Vous êtes curieux, aimez le travail en équipe et les challenges.​ Vous connaissez les méthodologies Agile (scrum).​', 'DESS, DEA, Grandes Ecoles, Bac +​ 5', 'paris', NULL, 365, '3'),
(4, '2016-05-16 15:12:56', 'Développeur Web et Mobilité', '1', 'Notre client est un groupe dont l''activité tourne autour de la protection sociale et du bien-être de l''Homme.​ Son positionnement l''amène a créer de nouvelles offres sur un marché très dynamique.​\r\n\r\nUne structure de type « start-up » pilotée directement par la direction générale prend en charge le développement de ces nouveaux marchés.​ Dans ce cadre, nous construisons cette nouvelle équipe et recherchons un développeur Web et Mobilité qui intègrera cette nouvelle activité en plein essor.​', 'ous maîtrisez le PHP (idéalement CodeIgniter), Angular JS, MySQL…', 'Lyon', NULL, 365, '5'),
(5, '2016-05-16 15:16:22', 'Développeur Web Symfony', '1', 'Notre client est une PME dynamique spécialisée dans les services associés à la Voyance.​ En 5 ans, elle a réussi a s’implanter et à se développer sur un marché ultra concurrentiel.​ Ses services sont structurés autour d’une galaxie de sites web, en perpétuelle expansion et évolution, basée sur une même application de gestion .​', 'Maitrise de la programmation sur les technologies suivantes : Symfony 2.​x, HTML, CSS, PHP, JavaScript, MySQL.​', 'Bordeaux', NULL, 365, '6');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `perso_id` int(11) DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D6495126AC48` (`mail`),
  UNIQUE KEY `UNIQ_8D93D6491221E019` (`perso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `mail`, `perso_id`, `salt`, `role`) VALUES
(1, 'Mathieu1', '$2y$13$KRImWytgdZPF8gpOGPOtuecXFLr9hgrU1vaip3dlgsivqaTGmbts6', 'mathieu@mail.com', 1, '', 'ROLE_ADMIN'),
(2, 'Douglas2', '$2y$13$s8L/GtFY46oAkDRb4.l2iuji50Thu73lMxoI72.geT9Y7J0YabYca', 'doug@mail.com', 2, '', 'ROLE_ADMIN'),
(3, 'Julie3', '$2y$13$fTz.czvL93.b/2nlREKGSO3fP70UEg6MOBpoPCSjcZb//FhwQ/QfC', 'julie@mail.com', 3, '', 'ROLE_USER'),
(4, 'Hiro34', '$2y$13$BqCAEbVJF7sOniO/5wbP0emizwgXpKFcPiibz8d/t6K/EzC8AQpSK', 'hiromu@gmail.com', 4, '', 'ROLE_ADMIN'),
(5, 'Samuel1', '$2y$13$YaK812wjc9AG75EBFsRrc.5EswPsXXlcxihURQmSmTjdfcrKSIGcS', 'samuel@mail.com', 5, '', 'ROLE_USER'),
(6, 'Camille67', '$2y$13$c.t5YMH96B5ZsWfbQCche.BHcdL33Ms.WOdc6xkVeiPT9pOtXqiVe', 'camille@mail.com', 6, '', 'ROLE_USER'),
(7, 'Marc54', '$2y$13$gcV5Sw.l..NScOlFmQ4.z.GXy6/aGLNTwIYXTcPXx1j1iRQohKrki', 'marc@mail.com', 7, '', 'ROLE_USER'),
(8, 'Phil93', '$2y$13$P92hQWSqtGA9Q3HXjLmubuG5Ua022XKdI4R7khkTbuZTZhY.sK7aC', 'phil@mail.com', 8, '', 'ROLE_USER');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC1D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `formation` (`id`);

--
-- Contraintes pour la table `applicationRecrutement`
--
ALTER TABLE `applicationRecrutement`
  ADD CONSTRAINT `FK_B7BF6D5AD07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `recrutement` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6491221E019` FOREIGN KEY (`perso_id`) REFERENCES `personnel` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
