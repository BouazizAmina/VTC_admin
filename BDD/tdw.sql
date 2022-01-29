-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2022 at 12:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `mdp`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `depart` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `arrive` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_transport` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `poid` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `volume` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `moyen_transport` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `type_user` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `archive` int(1) DEFAULT NULL,
  `valide` int(1) DEFAULT NULL,
  `tarif` varchar(10) COLLATE ascii_bin DEFAULT NULL,
  `etat` varchar(30) COLLATE ascii_bin DEFAULT NULL,
  `date` varchar(30) COLLATE ascii_bin DEFAULT NULL,
  `trans` varchar(30) COLLATE ascii_bin DEFAULT NULL,
  `note` int(2) DEFAULT NULL,
  `id_transporteur` int(2) DEFAULT NULL,
  `trans_postuler` varchar(10) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `depart`, `arrive`, `titre`, `image`, `texte`, `type_transport`, `poid`, `volume`, `moyen_transport`, `id_user`, `type_user`, `archive`, `valide`, `tarif`, `etat`, `date`, `trans`, `note`, `id_transporteur`, `trans_postuler`) VALUES
(2, 'Adrar', 'Laghouat', 'hhhhhhhh', '../assets/annonces/colis.jpg', 'Je veux transporter un colis de ma maison qui se situe a alger centre a la maison de mes parents a bab zouar', 'Colis', 'entre 10kg et50kg', 'entre 0 et10m3', 'Voiture', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-10', '', NULL, NULL, NULL),
(3, 'Batna', 'Alger', 'Machine a Laver', '../assets/annonces/machine.jpg', 'Je veux transporter une machine a laver du magasin a ma maison ', 'electromenager', 'entre 50kg et 100kg', 'entre 0 et 100m3', 'Fourgon', 1, '1', NULL, NULL, '0', 'en attente', '2021-01-10', 'bouaziz mahdi', NULL, NULL, NULL),
(4, 'Adrar', 'Adrar', 'Demenagement', '../assets/annonces/demenagememt.jpg', 'Je veux transporter tous les bien de mon acienne maison a la nouvelle maison qui se situe a bab zouar', 'demenagement', 'entre 100kg et 1000kg', 'entre 0 et 100m3', 'Camionnette', 1, '1', NULL, 1, '1000', 'terminee', '2022-05-10', 'bouaziz mahdi', 3, 5, NULL),
(5, 'Laghouat', 'Alger', 'Transport Cuisiniere', '../assets/annonces/cuisiniere.jpg', 'Je suis a la recherche d un fourgon  pour deplacer une cuisiniere a Samar ville', 'electromenager', 'entre 10kg et 50kg', 'entre 0 et 100m3', 'Fourgon', 1, '1', 1, NULL, '0', 'en attente', '2022-01-18', NULL, NULL, NULL, NULL),
(6, 'Alger', 'Batna', 'Transport Fauteuil', '../assets/annonces/fauteuil.jpg', 'Je veux transporter des fauteuils de ma maison a klea a gue de constantine', 'meuble', 'entre 10kg et 50kg', 'entre 0 et 100m3', 'Fourgon', 1, '1', NULL, 1, '400', 'terminee', '2022-07-30', 'brahimi amina', NULL, 3, '5 3'),
(7, 'Alger', 'Laghouat', 'Transport Colis', '../assets/annonces/colis.jpg', 'Je suis a la recherche de quelqu un pour envoyer un colis a bab zouar', 'colis', 'entre 100gr et 1kg', 'entre 0 et 100m3', 'Voiture', 1, '0', NULL, 1, '500', 'en cours', '2018-01-10', NULL, NULL, NULL, '5 '),
(8, 'Adrar', 'Batna', 'Transport Lettre', '../assets/annonces/lettre.jpg', 'Je veux transporter une lettre a cheraga', 'lettre', 'entre 0 et 100gr', 'entre 0 et 100m3', 'Voiture', 5, '0', NULL, 1, '2000', 'terminee', '2019-01-10', 'bouaziz mahdi', NULL, 5, NULL),
(9, 'Adrar', 'Adrar', 'Transport Hotte Aspirante', '../assets/annonces/aspirateur.jpg', 'Je veux transporter un hotte aspirateur de 4kg a thnia', 'electromenager', 'entre 1kg et 5kg', 'entre 0 et 100m3', 'Fourgon', 4, '0', NULL, NULL, '0', 'en attente', '2020-04-10', NULL, NULL, NULL, NULL),
(29, 'Adrar', 'Adrar', 'telephone', '../assets/annonces/colis.jpg', 'transport de telephone', 'Lettre', 'entre 0 et100gr', 'entre 0 et10m3', 'Voiture', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-29', NULL, NULL, NULL, NULL),
(41, 'Adrar', 'Batna', 'annonce', '../assets/annonces/lettre.jpg', 'je veux transporter une lettre', 'Lettre', 'entre 0 et100gr', 'entre 0 et10m3', 'Voiture', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-29', NULL, NULL, NULL, NULL),
(40, 'Adrar', 'Batna', 'lettre', '../assets/annonces/lettre.jpg', 'je veux transporter un lettre ', 'Lettre', 'entre 0 et100gr', 'entre 0 et10m3', 'Voiture', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-30', NULL, NULL, NULL, NULL),
(39, 'Batna', 'Alger', 'meuble', '../assets/annonces/fauteuil.jpg', 'je veux transporter un meuble', 'Meuble', 'entre 10kg et50kg', 'entre 50m3 et100m3', 'Camionnette', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-10', NULL, NULL, NULL, NULL),
(38, 'Adrar', 'Batna', 'aspirateur', '../assets/annonces/aspirateur.jpg', 'je veux transporter un aspirateur', 'Electromenager', 'entre 100gr et1kg', 'entre 10m3 et50m3', 'Voiture', 1, '1', NULL, NULL, '0', 'en attente', '2022-01-29', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(10) NOT NULL,
  `adresse` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `banir` varchar(3) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `tel`, `adresse`, `mdp`, `banir`) VALUES
(1, 'bouaziz', 'amina', 'ia_bouaziz@esi.dz', 665812520, 'batna', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `adresse`, `tel`, `skype`, `mail`) VALUES
(1, '121, Alger Centre', '+216 665812520', '', 'vtc@gmail.con');

-- --------------------------------------------------------

--
-- Table structure for table `critere`
--

DROP TABLE IF EXISTS `critere`;
CREATE TABLE IF NOT EXISTS `critere` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `annonce` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `critere`
--

INSERT INTO `critere` (`id`, `annonce`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `critere_sel_annonce`
--

DROP TABLE IF EXISTS `critere_sel_annonce`;
CREATE TABLE IF NOT EXISTS `critere_sel_annonce` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `critere_sel_annonce`
--

INSERT INTO `critere_sel_annonce` (`id`, `nom`) VALUES
(1, 'Plus recente'),
(3, 'Validee');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

DROP TABLE IF EXISTS `docs`;
CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `docsValide` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `docsRefus` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`id`, `docsValide`, `docsRefus`) VALUES
(1, 'LTA : Lettre de Transport Aerien ou Air Way Bill (AWB)</br>Le B/L : Bill of Lading ou connaissement maritime</br>Le FBL : FIATA Multimodal Bill of Lading</br>Le Sea Waybill', 'Vous ne disposez pas des criteres suffisantes pour etre un transporteur chez nous');

-- --------------------------------------------------------

--
-- Table structure for table `moyen_transport`
--

DROP TABLE IF EXISTS `moyen_transport`;
CREATE TABLE IF NOT EXISTS `moyen_transport` (
  `id_moyen_transport` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_moyen_transport`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `moyen_transport`
--

INSERT INTO `moyen_transport` (`id_moyen_transport`, `nom`) VALUES
(1, 'Voiture'),
(2, 'Fourgon'),
(3, 'Camionnette');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_ajout` varchar(30) COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `texte`, `image`, `lien`, `date_ajout`) VALUES
(1, 'Transmission du Covid-19', 'La place choisie dans les transports pourrait avoir des consequences sur la transmission du Covid-19, selon une nouvelle etude. Alors, vaut-il mieux s installer au couloir ou e la fenetre ? Des scientifiques ont leve le voile sur cette question.  Quelle est la meilleure place pour limiter les risques d une contamination au Covid-19 ?  Alors, laquelle est-ce ? Selon les scientifiques, la place la plus a risque serait celle cote couloir. Pour demontrer cela, ils ont fait prononcer plusieurs fois la lettre A aux personnes selectionnees pour l etude. Le systeme de ventilation aspire les gouttelettes expirees vers le bas, grace aux bouches d aeration situees pres des fenetres.', '../assets/news/Transmission_Covid-19.jpg', 'https://www.femmeactuelle.fr/sante/news-sante/transmission-du-covid-19-quelle-place-choisir-dans-les-transports-pour-limiter-les-risques-2125844', '2022-01-10'),
(2, 'Norfolk: What does the future hold for countys new transport and energy schemes?', 'Turning three sections of the A47 into dual carriageways has been a long-term ambition of the National Highways agency, but despite improvements being agreed in 2014, work has yet to start.  Consultation on parts of the scheme finished earlier this month, with more expected to be held in January and February.  The 300m plans include proposals to dual sections of the road between North Tuddenham and Easton and from Blofield to North Burlingham.  It also includes proposed changes to the Thickthorn roundabout, on the edge of Norwich.  Hearings about the North Tuddenham to Easton scheme will take place on 5 and 6 January.  Hearings about the Thickthorn scheme - which would include a new slip road off the A11 - will start on 31 January and continue each day until 3 February.', '../assets/news/new_transport.jpg', 'https://www.bbc.com/news/uk-england-norfolk-59812450', '2022-02-18'),
(3, 'La technologie au service du transport de marchandises en Afrique', 'Benson Ndumu Mwangi est chauffeur routier depuis dix ans, il navigue sur les routes du Kenya et de l Afrique de l Est.  C est un metier qui peut etre difficile : le camionnage au Kenya est un defi, certaines routes sont tres difficiles a manoeuvrer, ce qui entraine des problemes mecaniques et des retards.  Dans certaines regions, le risque de vol est eleve et nous devons donc etre tres prudents, explique-t-il.  M. Mwangi et d autres personnes travaillant dans le secteur de la logistique esperent qu une nouvelle zone de libre-echange africaine favorisera les ameliorations.', '../assets/news/village.jpg', 'https://www.bbc.com/afrique/region-59581079', '2021-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `poid`
--

DROP TABLE IF EXISTS `poid`;
CREATE TABLE IF NOT EXISTS `poid` (
  `id_poid` int(4) NOT NULL,
  `min` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `max` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_poid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `poid`
--

INSERT INTO `poid` (`id_poid`, `min`, `max`) VALUES
(1, '0', '100gr'),
(2, '100gr', '1kg'),
(3, '1kg', '5kg'),
(4, '10kg', '50kg'),
(5, '50kg', '100kg');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(11) NOT NULL,
  `texte` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `texte`, `image`, `video`) VALUES
(1, 'VTC est un site web dÃ©dier aux transports de marchandises et colis. Il permet de voir les annonces de clients voulons transportÃ©s un bien. Il faut que l\'utilisateur soit connectÃ© pour qu\'il puisse dÃ©poser ou rÃ©pondre Ã  une annonce.Les annonces sont divisÃ©es en deux types: </br></br>1. les annonces pour un transport non garanti dÃ©diÃ© aux colis lÃ©gers (lettre, petit colisâ€¦etc.), oÃ¹ le client et le transporteur peuvent sâ€™entendre sur le tarif. Ce type de transport peut Ãªtre effectuÃ© par nâ€™importe quel transporteur sans garantit de la part du site.</br>2. Le deuxiÃ¨me type de transport est le transport garanti dont seuls les transporteurs certifiÃ©s auprÃ¨s du site peuvent faire la transaction via le site.</br></br>Un transporteur certifiÃ© est un transporteur ayant dÃ©posÃ© un dossier et en ayant signÃ© un contrat de travail auprÃ¨s de lâ€™entreprise gÃ©rant le site.', '../assets/news/pexels-quintin-gellar-2199293.jpg', 'https://www.youtube.com/watch?v=gUPzVNvuSts');

-- --------------------------------------------------------

--
-- Table structure for table `signalement`
--

DROP TABLE IF EXISTS `signalement`;
CREATE TABLE IF NOT EXISTS `signalement` (
  `id_signalement` int(4) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(2) NOT NULL,
  `nom_utilisateur` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_user` int(2) NOT NULL,
  `id_transporteur` int(2) DEFAULT NULL,
  `nom_transporteur` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `texte_signalement` varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_annonce` int(2) DEFAULT NULL,
  `id_client` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_signalement`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `signalement`
--

INSERT INTO `signalement` (`id_signalement`, `id_utilisateur`, `nom_utilisateur`, `type_user`, `id_transporteur`, `nom_transporteur`, `texte_signalement`, `id_annonce`, `id_client`) VALUES
(1, 1, 'bouaziz amina', 1, 5, 'bouaziz', 'nn', 4, NULL),
(2, 1, 'bouaziz amina', 1, 5, 'bouaziz', 'hhsdffgyujiojlfnfhcg', 4, NULL),
(3, 1, 'bouaziz amina', 1, 5, 'bouaziz', 'zsxdfhbjn', 4, NULL),
(4, 5, 'bouaziz mahdi', 0, NULL, NULL, 'rrrrrrrrrrrrrrrrrrrr', 2, 1),
(5, 5, 'bouaziz mahdi', 0, NULL, NULL, 'signalement d\'un transporteur\r\n', 2, 1),
(10, 1, 'bouaziz amina', 1, 5, '', 'wsedrgyjik zshj asdgyji dfgjhj', 3, NULL),
(9, 5, 'bouaziz mahdi', 0, NULL, NULL, 'fvgjhasdftgyhuj sdfuio sdfgyjukil', 2, 1),
(11, 1, 'bouaziz amina', 1, 5, 'bouaziz mahdi', 'zxsfvgbjnmk,l zasxdhjnmk,l sdtfik', 3, NULL),
(12, 1, 'bouaziz amina', 1, 5, 'bouaziz mahdi', 'probleme sdfghjk sdfghjksdfhjk', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE IF NOT EXISTS `tarif` (
  `id_tarif` int(4) NOT NULL AUTO_INCREMENT,
  `depart` varchar(30) COLLATE ascii_bin NOT NULL,
  `arrive` varchar(30) COLLATE ascii_bin NOT NULL,
  `tarif` int(30) NOT NULL,
  PRIMARY KEY (`id_tarif`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`id_tarif`, `depart`, `arrive`, `tarif`) VALUES
(1, 'Adrar', 'Adrar', 1000),
(2, 'Batna', 'Batna', 700),
(3, 'Adrar', 'Batna', 2000),
(4, 'Batna', 'Adrar', 2000),
(5, 'Laghouat', 'Alger', 500),
(6, 'Alger', 'Laghouat', 500),
(7, 'Alger', 'Batna', 400),
(8, 'Batna', 'Alger', 400);

-- --------------------------------------------------------

--
-- Table structure for table `transporteur`
--

DROP TABLE IF EXISTS `transporteur`;
CREATE TABLE IF NOT EXISTS `transporteur` (
  `id_transporteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(10) NOT NULL,
  `adresse` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wilayasD` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wilayasA` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `certifie` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE ascii_bin DEFAULT NULL,
  `banir` varchar(3) COLLATE ascii_bin DEFAULT NULL,
  `id_annonce` varchar(10) COLLATE ascii_bin DEFAULT NULL,
  `trans_effectue` varchar(30) COLLATE ascii_bin DEFAULT NULL,
  `note` float DEFAULT NULL,
  `gain` varchar(30) COLLATE ascii_bin DEFAULT NULL,
  PRIMARY KEY (`id_transporteur`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `transporteur`
--

INSERT INTO `transporteur` (`id_transporteur`, `nom`, `prenom`, `email`, `tel`, `adresse`, `mdp`, `wilayasD`, `wilayasA`, `certifie`, `status`, `banir`, `id_annonce`, `trans_effectue`, `note`, `gain`) VALUES
(1, 'hadi', 'brahimi', 'ia_nana@esi.dz', 665812520, 'Adrar', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Adrar Batna', 'Adrar Batna', 'non', 'en attente', NULL, NULL, NULL, NULL, NULL),
(5, 'bouaziz', 'mahdi', 'ia_bouaziz@esi.dz', 665812520, 'batna', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Adrar Batna', 'Adrar Alger', 'oui', 'valide', NULL, '2 22 4 3', '2 4 3 ', 3.25, '400'),
(3, 'brahimi', 'amina', 'ia_bouz@esi.dz', 665812520, 'batna', '110c8a30c16070bf2813480d9492a1a170a7d80a', 'Batna', 'Batna', 'oui', 'refus', NULL, NULL, '6 ', NULL, NULL),
(4, 'hadi', 'ababsa', 'ia_bo@esi.dz', 665812520, 'Alger', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Laghouat Alger', 'Alger', 'non', 'valide', '1', NULL, NULL, NULL, NULL),
(11, 'bouaziz', 'sabra', 'ia_brahimi@esi.dz', 665812520, 'batna', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ' Adrar Batna', ' Adrar Alger', 'oui', 'en attente', NULL, NULL, NULL, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `type_transport`
--

DROP TABLE IF EXISTS `type_transport`;
CREATE TABLE IF NOT EXISTS `type_transport` (
  `id_type_transport` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_type_transport`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `type_transport`
--

INSERT INTO `type_transport` (`id_type_transport`, `nom`) VALUES
(1, 'Lettre'),
(2, 'Colis'),
(3, 'Meuble'),
(4, 'Electromenager'),
(5, 'Demenagement');

-- --------------------------------------------------------

--
-- Table structure for table `volume`
--

DROP TABLE IF EXISTS `volume`;
CREATE TABLE IF NOT EXISTS `volume` (
  `id_volume` int(4) NOT NULL,
  `min` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `max` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_volume`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `volume`
--

INSERT INTO `volume` (`id_volume`, `min`, `max`) VALUES
(1, '0', '10m3'),
(2, '10m3', '50m3'),
(3, '50m3', '100m3'),
(4, '100m3', '500m3');

-- --------------------------------------------------------

--
-- Table structure for table `wilaya`
--

DROP TABLE IF EXISTS `wilaya`;
CREATE TABLE IF NOT EXISTS `wilaya` (
  `id_wilaya` int(4) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_wilaya`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `wilaya`
--

INSERT INTO `wilaya` (`id_wilaya`, `nom`) VALUES
(1, 'Adrar'),
(2, 'Chlef'),
(3, 'Laghouat'),
(4, 'Oum El Bouaghi'),
(5, 'Batna'),
(6, 'Bejaia'),
(7, 'Biskra'),
(8, 'Bechar'),
(9, 'Blida'),
(10, 'Bouira'),
(11, 'Tamanrasset'),
(12, 'Tebessa'),
(13, 'Tlemcen'),
(14, 'Tiaret'),
(15, 'Tizi Ouzou'),
(16, 'Alger'),
(17, 'Djelfa'),
(18, 'Djijel'),
(19, 'Setif'),
(20, 'Saida'),
(21, 'Skikda'),
(22, 'Sidi Bel Abbes'),
(23, 'Annaba'),
(24, 'Guelma'),
(25, 'Constantine'),
(26, 'Medea'),
(27, 'Mostaganem'),
(28, 'MSila'),
(29, 'Mascara'),
(30, 'Ouargla'),
(31, 'Oran'),
(32, 'El Bayadh'),
(33, 'Illizi'),
(34, 'Bordj Bou Arreridj'),
(35, 'Boumerdes'),
(36, 'El Tarf'),
(37, 'Tindouf'),
(38, 'Tissemsilt'),
(39, 'El Oued'),
(40, 'Khenchela'),
(41, 'Souk Ahras'),
(42, 'Tipaza'),
(43, 'Mila'),
(44, 'Ain Defla'),
(45, 'Naama'),
(46, 'Ain Temouchent'),
(47, 'Ghardaia'),
(48, 'Relizane'),
(49, 'El MGhair'),
(50, 'El Meniaa'),
(51, 'Ouled Djellal'),
(52, 'Bordj Badji Mokhtar'),
(53, 'Beni Abbes'),
(54, 'Timimoun'),
(55, 'Touggourt'),
(56, 'Djanet'),
(57, 'In Salah'),
(58, 'In Guezzam');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
