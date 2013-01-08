-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 08 Janvier 2013 à 18:23
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `palaso`
--

-- --------------------------------------------------------

--
-- Structure de la table `cdd`
--

CREATE TABLE IF NOT EXISTS `cdd` (
  `cdd_id` int(11) NOT NULL,
  `cdd_type` varchar(25) NOT NULL,
  `cdd_dureeMois` int(11) NOT NULL,
  KEY `FK_CDD_CDM` (`cdd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cdd`
--

INSERT INTO `cdd` (`cdd_id`, `cdd_type`, `cdd_dureeMois`) VALUES
(1, 'CDD', 2);

-- --------------------------------------------------------

--
-- Structure de la table `cdi`
--

CREATE TABLE IF NOT EXISTS `cdi` (
  `cdi_id` int(11) NOT NULL,
  KEY `FK_CDI_CDM` (`cdi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `civilites`
--

CREATE TABLE IF NOT EXISTS `civilites` (
  `civ_id` int(11) NOT NULL AUTO_INCREMENT,
  `civ_code` varchar(4) NOT NULL,
  `civ_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`civ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `civilites`
--

INSERT INTO `civilites` (`civ_id`, `civ_code`, `civ_libelle`) VALUES
(1, 'Mlle', 'Mademoiselle'),
(2, 'Mme', 'Madame'),
(3, 'Mr', 'Monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_de_mission`
--

CREATE TABLE IF NOT EXISTS `contrat_de_mission` (
  `cdm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdm_date` date NOT NULL,
  `cdm_dateDebut` date NOT NULL,
  `cdm_dossier` int(11) NOT NULL,
  `cdm_offre` int(11) NOT NULL,
  PRIMARY KEY (`cdm_id`),
  KEY `FK_CDM_DOS` (`cdm_dossier`),
  KEY `FK_CDM_OFFRE` (`cdm_offre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contrat_de_mission`
--

INSERT INTO `contrat_de_mission` (`cdm_id`, `cdm_date`, `cdm_dateDebut`, `cdm_dossier`, `cdm_offre`) VALUES
(1, '2012-11-30', '2012-12-01', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

CREATE TABLE IF NOT EXISTS `diplome` (
  `dip_id` int(11) NOT NULL AUTO_INCREMENT,
  `dip_code` varchar(10) NOT NULL,
  `dip_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`dip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `diplome`
--

INSERT INTO `diplome` (`dip_id`, `dip_code`, `dip_libelle`) VALUES
(1, 'BAC S', 'Baccalaureat scientifique'),
(2, 'BAC ES', 'Baccalaureat sciences economiques'),
(3, 'BAC L', 'Baccalaureat litteraire'),
(4, 'BTS IG', 'BTS informatique de gestion'),
(5, 'BTS SIO', 'BTS Services d''information aux organisations'),
(6, 'BAC+5', 'Ingénierie informatique');

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_code` varchar(5) NOT NULL,
  `doc_libelle` varchar(65) NOT NULL,
  `doc_chemin` text,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `documents`
--

INSERT INTO `documents` (`doc_id`, `doc_code`, `doc_libelle`, `doc_chemin`) VALUES
(1, 'CV', 'Curriculum Vitae', 'Documents/DUPOND/modele_cv.jpg'),
(2, 'ID', 'Carte d''identite', 'Documents/DUPOND/id-card.jpg'),
(3, 'Doc3', 'Document 3', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `dossier`
--

CREATE TABLE IF NOT EXISTS `dossier` (
  `dos_id` int(11) NOT NULL AUTO_INCREMENT,
  `dos_date` date NOT NULL,
  `dos_chemin` varchar(95) NOT NULL,
  `dos_interimaire` int(11) NOT NULL,
  `dos_document` int(11) NOT NULL,
  PRIMARY KEY (`dos_id`),
  UNIQUE KEY `dos_id` (`dos_id`),
  KEY `FK_DOS_INT` (`dos_interimaire`),
  KEY `FK_DOS_DOC` (`dos_document`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `dossier`
--

INSERT INTO `dossier` (`dos_id`, `dos_date`, `dos_chemin`, `dos_interimaire`, `dos_document`) VALUES
(1, '2012-12-01', 'Documents/DUPOND', 1, 1),
(2, '2012-12-01', 'Documents/DUPOND', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nom` varchar(45) NOT NULL,
  `emp_prenom` varchar(45) NOT NULL,
  `emp_adresse1` varchar(45) NOT NULL,
  `emp_adresse2` varchar(45) NOT NULL,
  `emp_CP` varchar(5) NOT NULL,
  `emp_ville` varchar(45) NOT NULL,
  `emp_telephone` varchar(10) NOT NULL,
  `emp_mail` varchar(45) NOT NULL,
  `emp_fonction` int(11) NOT NULL,
  `emp_login` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `FK_FCTEMP` (`emp_fonction`),
  KEY `FK_LOG_EMP` (`emp_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`emp_id`, `emp_nom`, `emp_prenom`, `emp_adresse1`, `emp_adresse2`, `emp_CP`, `emp_ville`, `emp_telephone`, `emp_mail`, `emp_fonction`, `emp_login`) VALUES
(1, 'SOUAN', 'Edouard', '1 rue Coolzor', 'Appartement A1', '33000', 'Bordeaux', '0500102030', 'e.souanmarcelon@epsi.fr', 1, 1),
(2, 'PALLAS', 'Amandine', '3 rue Bobo', 'Appartement B1', '33000', 'Bordeaux', '0510203040', 'a.pallas@epsi.fr', 3, 2),
(3, 'LARRUE', 'Florent', '6 rue Blabla', 'Lieu-dit Very', '24700', 'Montpon', '0553807853', 'f.larrue@epsi.fr', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `ent_id` int(11) NOT NULL AUTO_INCREMENT,
  `ent_siret` varchar(14) NOT NULL,
  `ent_raisonsociale` varchar(65) NOT NULL,
  `ent_adresse1` varchar(45) NOT NULL,
  `ent_adresse2` varchar(45) DEFAULT NULL,
  `ent_CP` varchar(5) NOT NULL,
  `ent_ville` varchar(45) NOT NULL,
  `ent_telephone` varchar(10) NOT NULL,
  `ent_fax` varchar(10) DEFAULT NULL,
  `ent_mail` varchar(45) DEFAULT NULL,
  `ent_login` int(11) NOT NULL,
  PRIMARY KEY (`ent_id`),
  KEY `FK_ENT_LOG` (`ent_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`ent_id`, `ent_siret`, `ent_raisonsociale`, `ent_adresse1`, `ent_adresse2`, `ent_CP`, `ent_ville`, `ent_telephone`, `ent_fax`, `ent_mail`, `ent_login`) VALUES
(1, '12345678912345', 'Ford', '9 rue Imaginaire', 'Impasse B', '33000', 'Bordeaux', '0568635458', '0568635459', 'ford@fake.com', 7),
(2, '98765432103214', 'Apple', '7 avenue Bastille', 'Rez de chaussée', '33000', 'Bordeaux', '0512245687', NULL, 'apple@fake.com', 8);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_code` varchar(2) NOT NULL,
  `exp_libelle` varchar(25) NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`exp_id`, `exp_code`, `exp_libelle`) VALUES
(1, '1', '1 année'),
(2, '2', '2 ans'),
(3, '3', '3 ans');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE IF NOT EXISTS `fonction` (
  `fct_id` int(11) NOT NULL AUTO_INCREMENT,
  `fct_code` varchar(5) NOT NULL,
  `fct_libelle` varchar(35) NOT NULL,
  PRIMARY KEY (`fct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`fct_id`, `fct_code`, `fct_libelle`) VALUES
(1, '1', 'ADMINISTRATEUR'),
(2, '2', 'EMPLOYE'),
(3, '3', 'SECRETAIRE');

-- --------------------------------------------------------

--
-- Structure de la table `interimaire`
--

CREATE TABLE IF NOT EXISTS `interimaire` (
  `int_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_ss` varchar(15) NOT NULL,
  `int_nom` varchar(45) NOT NULL,
  `int_prenom` varchar(45) NOT NULL,
  `int_adr1` varchar(45) NOT NULL,
  `int_adr2` varchar(45) DEFAULT NULL,
  `int_cp` varchar(5) NOT NULL,
  `int_ville` varchar(45) NOT NULL,
  `int_telephone` varchar(10) NOT NULL,
  `int_mobile` varchar(10) DEFAULT NULL,
  `int_mail` varchar(45) NOT NULL,
  `int_metier` int(11) NOT NULL,
  `int_civilite` int(11) NOT NULL,
  `int_login` int(11) NOT NULL,
  `int_valid` int(11) DEFAULT NULL,
  `int_picture` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`int_id`),
  KEY `FK_INTERMETIER` (`int_metier`),
  KEY `FK_CIV_INTERIMAIRE` (`int_civilite`),
  KEY `FK_LOG_INT` (`int_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `interimaire`
--

INSERT INTO `interimaire` (`int_id`, `int_ss`, `int_nom`, `int_prenom`, `int_adr1`, `int_adr2`, `int_cp`, `int_ville`, `int_telephone`, `int_mobile`, `int_mail`, `int_metier`, `int_civilite`, `int_login`, `int_valid`, `int_picture`) VALUES
(1, '112233445566771', 'DUPOND', 'Alex', '4 rue Yes', 'Appt B', '33000', 'Bordeaux', '0532346564', '', 'a.dupond@test.fr', 1, 3, 5, 1, NULL),
(2, '221133445566772', 'VIAUD', 'Alice', '5 rue No', '', '33000', 'Pessac', '0514748798', '0612546563', 'a.viaud@lol.com', 3, 1, 6, 1, 'Phototech/Alice.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_log` varchar(25) NOT NULL,
  `log_pwd` varchar(8) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`log_id`, `log_log`, `log_pwd`) VALUES
(1, 'administrateur', 'admin000'),
(2, 'secretariat', '12345678'),
(3, 'employe1', 'test'),
(4, 'employe2', '12345678'),
(5, 'user1', '12345678'),
(6, 'user2', '12345678'),
(7, 'ent1', '12345678'),
(8, 'ent2', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `metier`
--

CREATE TABLE IF NOT EXISTS `metier` (
  `met_id` int(11) NOT NULL AUTO_INCREMENT,
  `met_code` varchar(15) NOT NULL,
  `met_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`met_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `metier`
--

INSERT INTO `metier` (`met_id`, `met_code`, `met_libelle`) VALUES
(1, 'DEV', 'Developpeur'),
(2, 'ARC_RES', 'Architecture reseau'),
(3, 'ANA', 'Analyste');

-- --------------------------------------------------------

--
-- Structure de la table `motif_de_recours`
--

CREATE TABLE IF NOT EXISTS `motif_de_recours` (
  `mot_id` int(11) NOT NULL AUTO_INCREMENT,
  `mot_code` varchar(15) NOT NULL,
  `mot_libelle` varchar(45) NOT NULL,
  PRIMARY KEY (`mot_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `motif_de_recours`
--

INSERT INTO `motif_de_recours` (`mot_id`, `mot_code`, `mot_libelle`) VALUES
(1, 'A1', 'Urgence'),
(2, 'A2', 'Remplacement');

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE IF NOT EXISTS `offre` (
  `off_numero` int(11) NOT NULL AUTO_INCREMENT,
  `off_libelle` varchar(95) NOT NULL,
  `off_dateDebutPrevisionnel` date NOT NULL,
  `off_dateFinPrevisionnel` date DEFAULT NULL,
  `off_periodeEssaiJours` int(11) NOT NULL,
  `off_nombrePersonnes` int(11) NOT NULL,
  `off_motif` int(11) NOT NULL,
  `off_type` int(11) NOT NULL,
  `off_employe` int(11) NOT NULL,
  `off_entreprise` int(11) NOT NULL,
  `off_metier` int(11) NOT NULL,
  `off_valid` int(11) DEFAULT NULL,
  PRIMARY KEY (`off_numero`),
  KEY `FK_MOTIF_OFFRE` (`off_motif`),
  KEY `FK_TYPE_OFFRE` (`off_type`),
  KEY `FK_EMPLOYE_OFFRE` (`off_employe`),
  KEY `FK_ENTREPRISE_OFFRE` (`off_entreprise`),
  KEY `FK_METIER_OFFRE` (`off_metier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `offre`
--

INSERT INTO `offre` (`off_numero`, `off_libelle`, `off_dateDebutPrevisionnel`, `off_dateFinPrevisionnel`, `off_periodeEssaiJours`, `off_nombrePersonnes`, `off_motif`, `off_type`, `off_employe`, `off_entreprise`, `off_metier`, `off_valid`) VALUES
(1, 'Offre 1', '2012-12-01', '2013-02-01', 3, 1, 1, 1, 2, 1, 1, 1),
(2, 'Offre 2', '2012-12-15', '0000-00-00', 3, 1, 2, 2, 3, 2, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `qual_metier` int(11) NOT NULL,
  `qual_experience` int(11) NOT NULL,
  `qual_diplome` int(11) NOT NULL,
  `qual_interimaire` int(11) NOT NULL,
  `qual_offre` int(11) NOT NULL,
  KEY `FK_QUAL_METIER` (`qual_metier`),
  KEY `FK_QUAL_EXP` (`qual_experience`),
  KEY `FK_QUAL_DIPLOME` (`qual_diplome`),
  KEY `FK_QUAL_INT` (`qual_interimaire`),
  KEY `FK_QUAL_OFF` (`qual_offre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_offre`
--

CREATE TABLE IF NOT EXISTS `type_offre` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_code` varchar(3) NOT NULL,
  `type_libelle` varchar(60) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type_offre`
--

INSERT INTO `type_offre` (`type_id`, `type_code`, `type_libelle`) VALUES
(1, 'CDD', 'Contrat &agrave dur&eacutee d&eacutetermin&eacutee'),
(2, 'CDI', 'Contrat &agrave dur&eacutee ind&eacutetermin&eacutee'),
(3, 'SAI', 'Contrat saisonnier');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `cdd`
--
ALTER TABLE `cdd`
  ADD CONSTRAINT `FK_CDD_CDM` FOREIGN KEY (`cdd_id`) REFERENCES `contrat_de_mission` (`cdm_id`);

--
-- Contraintes pour la table `cdi`
--
ALTER TABLE `cdi`
  ADD CONSTRAINT `FK_CDI_CDM` FOREIGN KEY (`cdi_id`) REFERENCES `contrat_de_mission` (`cdm_id`);

--
-- Contraintes pour la table `contrat_de_mission`
--
ALTER TABLE `contrat_de_mission`
  ADD CONSTRAINT `FK_CDM_DOS` FOREIGN KEY (`cdm_dossier`) REFERENCES `dossier` (`dos_id`),
  ADD CONSTRAINT `FK_CDM_OFFRE` FOREIGN KEY (`cdm_offre`) REFERENCES `offre` (`off_numero`);

--
-- Contraintes pour la table `dossier`
--
ALTER TABLE `dossier`
  ADD CONSTRAINT `FK_DOS_DOC` FOREIGN KEY (`dos_document`) REFERENCES `documents` (`doc_id`),
  ADD CONSTRAINT `FK_DOS_INT` FOREIGN KEY (`dos_interimaire`) REFERENCES `interimaire` (`int_id`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `FK_FCTEMP` FOREIGN KEY (`emp_fonction`) REFERENCES `fonction` (`fct_id`),
  ADD CONSTRAINT `FK_LOG_EMP` FOREIGN KEY (`emp_login`) REFERENCES `login` (`log_id`);

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_ENT_LOG` FOREIGN KEY (`ent_login`) REFERENCES `login` (`log_id`);

--
-- Contraintes pour la table `interimaire`
--
ALTER TABLE `interimaire`
  ADD CONSTRAINT `FK_CIV_INTERIMAIRE` FOREIGN KEY (`int_civilite`) REFERENCES `civilites` (`civ_id`),
  ADD CONSTRAINT `FK_INTERMETIER` FOREIGN KEY (`int_metier`) REFERENCES `metier` (`met_id`),
  ADD CONSTRAINT `FK_LOG_INT` FOREIGN KEY (`int_login`) REFERENCES `login` (`log_id`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `FK_EMPLOYE_OFFRE` FOREIGN KEY (`off_employe`) REFERENCES `employe` (`emp_id`),
  ADD CONSTRAINT `FK_ENTREPRISE_OFFRE` FOREIGN KEY (`off_entreprise`) REFERENCES `entreprise` (`ent_id`),
  ADD CONSTRAINT `FK_METIER_OFFRE` FOREIGN KEY (`off_metier`) REFERENCES `metier` (`met_id`),
  ADD CONSTRAINT `FK_MOTIF_OFFRE` FOREIGN KEY (`off_motif`) REFERENCES `motif_de_recours` (`mot_id`),
  ADD CONSTRAINT `FK_TYPE_OFFRE` FOREIGN KEY (`off_type`) REFERENCES `type_offre` (`type_id`);

--
-- Contraintes pour la table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `FK_QUAL_DIPLOME` FOREIGN KEY (`qual_diplome`) REFERENCES `diplome` (`dip_id`),
  ADD CONSTRAINT `FK_QUAL_EXP` FOREIGN KEY (`qual_experience`) REFERENCES `experience` (`exp_id`),
  ADD CONSTRAINT `FK_QUAL_INT` FOREIGN KEY (`qual_interimaire`) REFERENCES `interimaire` (`int_id`),
  ADD CONSTRAINT `FK_QUAL_METIER` FOREIGN KEY (`qual_metier`) REFERENCES `metier` (`met_id`),
  ADD CONSTRAINT `FK_QUAL_OFF` FOREIGN KEY (`qual_offre`) REFERENCES `offre` (`off_numero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
