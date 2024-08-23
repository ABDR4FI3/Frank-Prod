-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juil. 2021 à 13:39
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `cms_categorie`
--

CREATE TABLE `cms_categorie` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `active` int(3) DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_categorie`
--

INSERT INTO `cms_categorie` (`id`, `photo`, `active`, `ordre`, `date_add`, `last_edit`) VALUES
(1, NULL, 1, 1, '2018-05-09', '2021-07-26'),
(2, NULL, 1, 2, '2018-05-09', '2021-02-01'),
(3, NULL, 1, 3, '2018-05-09', '2021-02-01'),
(4, NULL, 1, 4, '2018-05-09', '2021-02-11'),
(6, NULL, 1, 5, '2021-02-01', '2021-02-01'),
(7, NULL, 1, 6, '2021-02-01', '2021-02-01'),
(8, NULL, 1, 4, '2021-02-11', '2021-02-11'),
(9, NULL, 1, 5, '2021-02-11', '2021-02-11'),
(10, NULL, 1, 1, '2021-02-11', '2021-02-11'),
(11, NULL, 1, 6, '2021-02-11', '2021-02-11'),
(12, NULL, 1, 7, '2021-02-11', '2021-02-11'),
(13, NULL, 1, 5, '2021-02-16', '2021-02-16'),
(14, NULL, 1, 10, '2021-02-17', '2021-02-17'),
(15, NULL, 1, 9, '2021-03-04', '2021-03-04'),
(16, NULL, 1, 6, '2021-03-05', '2021-03-05'),
(17, NULL, 1, 2, '2021-03-09', '2021-03-09'),
(18, NULL, 1, 3, '2021-03-09', '2021-03-09'),
(19, NULL, 1, 5, '2021-03-09', '2021-03-09'),
(20, NULL, 1, 5, '2021-03-12', '2021-03-12'),
(21, NULL, 1, 2, '2021-03-22', '2021-03-22'),
(22, NULL, 1, 2, '2021-03-24', '2021-03-24'),
(23, NULL, 1, 12, '2021-03-25', '2021-03-25'),
(24, NULL, 1, 10, '2021-03-31', '2021-03-31'),
(25, NULL, 1, 2, '2021-04-23', '2021-04-23'),
(26, NULL, 1, 10, '2021-04-29', '2021-04-29'),
(27, NULL, 1, 22, '2021-05-11', '2021-05-11'),
(28, NULL, 1, 33, '2021-06-07', '2021-06-07');

-- --------------------------------------------------------

--
-- Structure de la table `cms_client`
--

CREATE TABLE `cms_client` (
  `id` int(11) NOT NULL,
  `titre` varchar(10) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `raison_social` varchar(100) DEFAULT NULL,
  `ice` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `tel2` varchar(50) DEFAULT NULL,
  `tel3` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `adresse2` varchar(250) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `active` int(3) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_client`
--

INSERT INTO `cms_client` (`id`, `titre`, `prenom`, `nom`, `raison_social`, `ice`, `tel`, `tel2`, `tel3`, `email`, `password`, `cp`, `adresse`, `adresse2`, `ville`, `region`, `pays`, `photo`, `active`, `date_add`, `last_edit`) VALUES
(1, 'Mr', 'Zakaria', 'EL HABOUSSI', 'HW LABEL', '002142777000089', '06 74 50 71 62', NULL, NULL, 'support@helloworld-agency.com', NULL, NULL, 'residence Amira 3 GuÃ©liz Marrakech', NULL, NULL, NULL, NULL, 'logo_hello_world1.png', 1, '2021-01-28', '2021-06-14'),
(3, 'Mr', 'JEMEL', 'ALAOUI', 'MUR & PRESTIGE', NULL, '06 60 02 86 65 ', '06 65 10 71 59', NULL, 'contact@muretprestige.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Maroc', 'download8.png', 1, '2021-01-28', '2021-06-14'),
(6, 'Mlle', 'SARAH', 'LATRACHE', 'LE MEURICE IMMOBILIER', '002719387000022', NULL, NULL, NULL, 'sarah.elatrache91@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-10', '2021-05-24'),
(7, 'Mr', 'TOM', 'BRUCE MITFORD ', 'LES BORJS DE LA KASBAH', NULL, '06 59 93 14 78', NULL, NULL, 'tom@lesborjs.com', NULL, NULL, 'Rue du MÃ©chouar La Kasbah Marrakech Morocco', NULL, 'Marrakech', NULL, 'Maroc', 'lys_borjs_dy_lu_kusbuh_logo.png', 1, '2021-02-11', '2021-06-14'),
(8, 'Mr', 'MERIAM', 'AMRAOUI', 'TOTAL MAROC', NULL, NULL, NULL, NULL, 'meriem.amraoui@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-12', '2021-06-14'),
(9, 'Mr', 'ZAKIA ', 'MANASS', 'NOUR BOUGIE', NULL, '06 63 74 68 73', NULL, NULL, 'nourbougie@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download9.png', 1, '2021-02-15', '2021-06-14'),
(10, 'Mr', 'AHMED', 'YASSINE', 'ADEMIA', NULL, '06 60 81 62 69', '06 39 01 19 91', NULL, 'choubani12@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-02-15', '2021-05-24'),
(11, 'Mr', 'ZINEB ', 'BENSLIMAN', 'CAESA-MENA   ', ' ICE : 001734866000015', '06 98 98 77 54', NULL, NULL, 'info@caesa-mena.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download10.png', 1, '2021-02-16', '2021-06-14'),
(12, 'Mr', 'AFAF', NULL, 'MARRAKECH SUNSET', NULL, '06 17 47 03 43 (Raja)', NULL, NULL, 'afaf@marrakechsunset.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images.jpg', 1, '2021-02-17', '2021-06-14'),
(13, 'Mr', 'SABRINA', NULL, 'NOUR BOUGIE CONCEPT ', NULL, '05 24 33 57 18', '06 61 53 31 33', NULL, 'nourbougie@gmail.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'download12.png', 1, '2021-02-17', '2021-06-14'),
(14, 'Mr', 'ZAHRAN', 'OUARDA', 'OUARDA ZAHRAN', NULL, '06 60 51 38 69 ', NULL, NULL, 'ouarda.zahrane@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-01', '2021-05-20'),
(15, 'Mr', 'LAURENT', 'DELORD', 'MELLIBER APPART HOTEL', NULL, '06 62 06 07 22 ', NULL, NULL, 'contact@melliber-apparthotel.com', NULL, NULL, NULL, NULL, 'Casablanca', NULL, NULL, 'logo_melliber1.png', 1, '2021-03-04', '2021-06-14'),
(16, 'Mr', 'BERRADA', 'DRISS', 'FUTURIS ', NULL, '06 61 40 85 60', NULL, NULL, 'idrissberrada1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download7.png', 1, '2021-03-05', '2021-06-14'),
(17, 'Mr', 'NISRINE', 'ZAKARI', 'AKSESS //CANTINETTA', NULL, '05 20 72 50 93/94', '06 93 77 71 13 (comptable)', NULL, 'n.zakari@ngi.ma', NULL, '20000', NULL, NULL, 'Casablanca', NULL, 'Maroc', 'download6.png', 1, '2021-03-05', '2021-06-14'),
(18, 'Mr', 'IHAB', 'GOURICH', 'IBN GHAZI PREPA', NULL, '06 62 77 15 76', NULL, NULL, 'ihabgourich@gmail.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'cpge-ibn-al-ghazi.png', 1, '2021-03-09', '2021-06-14'),
(19, 'Mr', 'FAROUK', 'KADIRI', NULL, NULL, '0662347772', NULL, NULL, 'kadiri.farouk@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-03-10', '2021-05-24'),
(20, 'Mr', 'REDA', NULL, 'MON BIJOU', NULL, '06 62 14 67 96', NULL, NULL, 'reda.sekal@gmail.com', NULL, NULL, 'reda.sekal@gmail.com', NULL, NULL, NULL, NULL, 'download5.jpg', 1, '2021-03-12', '2021-06-14'),
(21, 'Mr', 'Mlle HAJAR', 'OUANIT', 'OLAYA', NULL, '06 63 05 22 39', NULL, NULL, 'hajarouanit17@gmail.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', NULL, 1, '2021-03-24', '2021-05-24'),
(22, 'Mr', 'NABIL', 'BLAL', 'NBS', NULL, '06 91 91 91 19 ', NULL, NULL, 'blalnabil@gmail.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'logo-nbs.jpg', 1, '2021-03-24', '2021-06-14'),
(23, 'Mr', 'ZAKARIA', 'BLIBIL', 'MYTRIP  DMC', NULL, '07 01 04 20 43 ', NULL, NULL, 'contacte@mytripdmc.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download5.png', 1, '2021-03-25', '2021-06-14'),
(24, 'Mr', NULL, 'MERYEM', 'Da Damme', NULL, NULL, NULL, NULL, 'm.oumeryem@gmail.com', NULL, NULL, NULL, NULL, 'Casablanca', NULL, 'Maroc', NULL, 1, '2021-03-31', '2021-05-24'),
(25, 'Mr', 'ADIL', 'BENJELLOUN', 'HERBORISTERIE PRINCIPALE', NULL, '00971 52 525 0110', NULL, NULL, 'adil.benjelloun@mail.mcgill.ca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download4.png', 1, '2021-03-31', '2021-06-14'),
(26, 'Mr', 'THOMA', 'ROUSSEAU', 'MARRAKECH GOLF LOCATION', NULL, '06 82 60 33 10', NULL, NULL, 'thmrousseau@aol.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'nouveau_logo.png', 1, '2021-04-05', '2021-06-14'),
(27, 'Mr', 'SOUKAINA ', NULL, 'AL FAHD GALLERY', NULL, '06 00 34 34 10', NULL, NULL, 'contact@alfahd-gallery.com', NULL, '20000', NULL, NULL, 'Casablanca', NULL, 'Maroc', 'logo1.png', 1, '2021-04-05', '2021-06-14'),
(28, 'Mr', 'SIHAME', 'ENNAJBI ', NULL, NULL, '06 65 32 17 57', NULL, NULL, 'ennajbisiham@gmail.com', NULL, NULL, NULL, NULL, 'Marrakech', NULL, 'Maroc', NULL, 1, '2021-04-16', '2021-05-24'),
(29, 'Mr', 'JAWAD', NULL, 'MERZOUGA LUXURY DESERT LODGE ', NULL, '06 06 61 50 57', NULL, NULL, 'jawad@merzougaluxurydesertcamps.com', NULL, NULL, NULL, NULL, 'Marrakech', NULL, 'Maroc', NULL, 1, '2021-04-21', '2021-05-24'),
(30, 'Mr', 'IMAD', 'EL HASSNAOUI', 'RIAD TURQUOISE', NULL, '06 10 20 14 01', NULL, NULL, 'riad_turquoise@hotmail.fr', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'download3.png', 1, '2021-04-22', '2021-06-14'),
(31, 'Mr', NULL, 'Mme HAJAR', 'LABORATOIRE ESITH ', NULL, '06 69 74 43 10', NULL, NULL, 'karam@esith.ac.ma', NULL, NULL, 'karam@esith.ac.ma', NULL, 'Casablanca', NULL, NULL, 'download4.jpg', 1, '2021-04-28', '2021-06-14'),
(32, 'Mr', 'GHITA', 'BOUKILI', 'OFFICIUM', NULL, '06 65 22 71 38', NULL, NULL, 'officium.print.com@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'g06onh0d.jpg', 1, '2021-04-29', '2021-06-14'),
(33, 'Mr', 'TAHIRI', 'JALIL', 'TJH.GROUP', NULL, '06 61 79 39 01', NULL, NULL, 'Jalil@palm-real-estate.net', NULL, NULL, ' Jalil@palm-real-estate.net', NULL, 'Marrakech', NULL, 'Maroc', 'palm_real_estate.jpg', 1, '2021-04-30', '2021-06-14'),
(34, 'Mr', 'SOUFIANE', NULL, 'CABINET DENTAIRE ', NULL, '06 76 86 83 17', NULL, NULL, 'dr.zghari@gmail.com', NULL, NULL, 'dr.zghari@gmail.com', NULL, 'Marrakech', NULL, 'Maroc', NULL, 1, '2021-05-04', '2021-05-24'),
(35, 'Mr', 'JAWAD', NULL, 'THE WHITE CAMEL', '002105450000088', '06 06 61 50 57', NULL, NULL, 'comptabilitemerzouga@gmail.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'acaia-1.png', 1, '2021-05-04', '2021-06-14'),
(36, 'Mr', 'ROKAIA', 'NAMIRA', 'KINGS & QUEENS', NULL, '0044 74 60 12 61 36', NULL, NULL, 'info@kqcloset.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-05-04', '2021-05-24'),
(37, 'Mme', 'FADMA', 'BARAOUZE', 'AGRO-FOOD ', NULL, '06 71 85 58 18', NULL, NULL, 'marketing@agrofoodindustrie.com', NULL, NULL, 'marketing@agrofoodindustrie.com', NULL, NULL, NULL, 'Maroc', NULL, 1, '2021-05-10', '2021-06-14'),
(38, 'Mr', NULL, 'LAMIA', 'CONSEIL REGIONAL DE TOURISME Dâ€™AGADIR SOUSS MASSA', NULL, '05 28 84 26 29/38/58  ', NULL, NULL, 'rpcomcrtagadirsm@gmail.com', NULL, NULL, 'rpcomcrtagadirsm@gmail.com', NULL, NULL, NULL, NULL, 'download2.png', 1, '2021-05-11', '2021-06-14'),
(39, 'Mr', 'KENZA', 'BERRADA', 'DABA PNEU', '001840628000024', '06 60 21 21 21', NULL, NULL, 'Kberrada@knbmarketing.ma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download2.jpg', 1, '2021-05-11', '2021-06-14'),
(40, 'Mr', 'THIERY', 'RATEFIAROSY', 'COPYRIGHT AF MOROCCO S.A.R.L', NULL, '06 69 12 90 32', NULL, NULL, 'zerktouni@anytimefitness.ma', NULL, NULL, 'zerktouni@anytimefitness.ma', NULL, 'Thiery Ratefiarosy', NULL, NULL, NULL, 1, '2021-05-12', '2021-05-24'),
(42, 'Mr', 'NADIA', 'CHELLOUI ', 'CHELLOUI NADIA', NULL, '06 61 46 15 36', NULL, NULL, 'contact@nadiachellaoui.com', NULL, NULL, '267, Bd Mohamed Zerktouni, 2Ã©me Etage. Appt. 18 - Casablanca, MAROC', NULL, NULL, NULL, 'Maroc', NULL, 1, '2021-05-18', '2021-05-24'),
(43, 'Mr', NULL, 'Mr BERGADI', 'LA COMMUNE DE MARRAKECH', NULL, '06 61 11 17 21 ', NULL, NULL, NULL, NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'download3.jpg', 1, '2021-05-20', '2021-06-14'),
(44, 'Mr', 'MOHAMMED', 'IRAQUI', 'LITHO TYPO MAROCAINE (LT) ', NULL, '0 5 22 66 10 10 ', NULL, NULL, 'miraqui@ltm.ma', NULL, '20590', 'Z.I. Sidi Bernoussi, Bd. Al Binaa Casablanca - 20590 Maroc', NULL, 'Casablanca', NULL, 'Maroc', NULL, 1, '2021-05-20', '2021-05-24'),
(45, 'Mr', 'BADR', 'AATTI', 'GREEN FEAT', NULL, '0033 00 771 596 377 ', NULL, NULL, 'aatti.badr@live.fr', NULL, NULL, NULL, NULL, NULL, NULL, 'France', '000483-md.png', 1, '2021-05-20', '2021-06-14'),
(46, 'Mr', 'Laurent ', 'DELORD', 'MELLIBER APPART HOTEL', '001812086000090', '06 62 06 07 22 ', NULL, NULL, 'laurentdelord@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Maroc', 'logo_melliber.png', 1, '2021-05-20', '2021-06-14'),
(48, 'Mr', 'BADR', 'EL GHAZI ', ' ASSOCIATION OUM KELTOUM - CENTRE CULTUREL EL GHALI', NULL, '06 60 90 47 44', NULL, NULL, 'ismail.berrada.pro@gmail.com', NULL, '20000', 'Z.I. Sidi Bernoussi, Bd. Al Binaa Casablanca - 20590 Maroc', NULL, 'Casablanca', NULL, 'Maroc', 'download1.png', 1, '2021-05-24', '2021-06-14'),
(49, 'Mr', 'ABDERRAHMAN ', ' EL BOUHADDIOUI ', 'VILLA DIAF JOHANNE', NULL, '06 61 42 08 83 ', NULL, NULL, 'contact@villa-diaf-johanne.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Maroc', 'logo.png', 1, '2021-05-24', '2021-06-14'),
(50, 'Mr', NULL, 'EL KADIOUI', 'ECOLE PRIVEE IBTISSAMA', NULL, '06 61 25 66 34', NULL, NULL, 'elkadioui2002@gmail.com', NULL, NULL, NULL, NULL, 'Casablanca', NULL, 'Maroc', 'download1.jpg', 1, '2021-05-24', '2021-06-14'),
(51, 'Mr', 'MARIE-JEANNE ', 'PILATI ', 'MAKTIFIMMO', NULL, '05 24 44 69 00', '06 61 08 93 40 ', NULL, 'contact@amphora-immobilier.com', NULL, '4000', NULL, NULL, 'Marrakech', NULL, 'Maroc', 'unnamed.jpg', 1, '2021-05-24', '2021-06-14'),
(52, 'Mr', NULL, 'MERYEM', 'M LUXURY', NULL, '06 73 75 73 84 ', NULL, NULL, 'mluxuryma@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mluxury_logo_2.jpg', 1, '2021-06-02', '2021-06-14'),
(53, 'Mr', NULL, 'AMINE', 'Villa SHAYANNE', NULL, '06 61 13 38 60', NULL, NULL, 'amine.b@amed.ma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'download.png', 1, '2021-06-02', '2021-06-14'),
(54, 'Mr', 'HASSAN', 'MEDAGHRI ALAOUI', 'FINANCIAL ADVISORY IMPACT STARTUP STUDIO', NULL, '06 61 35 32 96 ', NULL, NULL, 'hma@act-finance.com', NULL, '20100', NULL, NULL, 'Casablanca', NULL, 'Maroc', NULL, 1, '2021-06-07', '2021-06-07'),
(55, 'Mr', NULL, 'Mme SAFADI', 'CAFE RESTAURANT LE NARJISSE 26 ', NULL, '00 33 1 77 18 94 71', NULL, NULL, 'hako79@hotmail.fr', NULL, NULL, '26 Rue Brey, 75017 Paris, France', NULL, NULL, NULL, NULL, 'download.jpg', 1, '2021-06-07', '2021-06-14'),
(56, NULL, 'Bouamrani ', 'FayÃ§al', 'World Travel Tour vip', NULL, '00 34 672 11 00 97', NULL, NULL, 'info@worldtraveltourvip.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(57, NULL, 'munia', 'mounia', 'healty life style', NULL, '0672771847', NULL, NULL, 'wedinmarrakech@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(58, NULL, 'Mamias', 'Laurence ', 'riad chamali', NULL, '(+33) 06 14 90 24 14 ', NULL, NULL, 'contact@riad-chamali.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(59, NULL, 'drissi daoudi', 'ghita', 'master foot', NULL, '0661318520', NULL, NULL, 'ghitadds@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(60, NULL, 'omara', 'abder', 'oh my bike', NULL, '0540514903', NULL, NULL, 'abcdemenagements@orange.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(61, NULL, 'Mme siham', 'IMZI ', 'Imzi-Tours-Travel', NULL, '+212650220633 ', NULL, NULL, 'imzitours@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(62, NULL, 'COUZY', 'COSY', 'COsY FLAT', NULL, '0604582618', NULL, NULL, 'k.gascoin75@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(63, NULL, 'namira', 'latifa', 'eliascleaners', NULL, '00447984299693 ', NULL, NULL, 'office@eliascleaners.co.uk', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'uk', NULL, 1, '2020-01-01', NULL),
(64, NULL, 'LAURENT', 'GIMEL', 'S.A.N.A', NULL, '0700704808', NULL, NULL, 'laurent.gimel@soafnagro.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(65, NULL, 'Michael', ' collins ', 'Michael collins ', NULL, NULL, NULL, NULL, 'mcainteriors@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(66, NULL, 'MARIE ANNE', 'CARIS', 'groupe ZEPHIR ', NULL, '0033622440465', NULL, NULL, 'Â mac@groupe-zephir.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(67, NULL, 'MICHEL ', 'MICHEL ', 'ROYAL KIDS', NULL, '00 33 76 08 30 004', NULL, NULL, 'michel.marmottan@royalkids.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(68, NULL, 'ABDERRAHMAN ', ' EL BOUHADDIOUI ', 'VILLA DIAF JOHANNE', NULL, '06 61 42 08 83 ', NULL, NULL, 'sagafri@yahoo.fr\'', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(69, NULL, 'Wiam ', 'Wiam ', 'Wiam Secret', NULL, '0700711812', NULL, NULL, 'contact@wiamsecret.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(70, NULL, 'Vincent', 'Jaquet', 'LVDS', NULL, '212608015015', NULL, NULL, 'vincent@lvdstravel.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(71, NULL, 'Mr JAWAD', 'Av. Hassan II, Koutoubia centre II 1er Etage Bureaux NÂ°5, Marrakech, MOROCCO ', 'MERZOUGA LUXURY DESERT LODGE ', NULL, '2147483647', NULL, NULL, 'jawad@merzougaluxurydesertcamps.com\'', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(72, NULL, 'HICHAM', 'EL BARDAI', 'HICHAM EL BARDAI', NULL, NULL, NULL, NULL, 'hichamberdai1@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(73, NULL, 'Zouheir', 'Zouheir', 'Riad Assou', NULL, '0524377280', NULL, NULL, 'riadassou@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(74, NULL, 'Abdel ilah ', 'ZAHAL', 'AZ PLOMBIER  PARIS', NULL, '0617721431', NULL, NULL, 'artisan.zahal@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(75, NULL, 'ZAKIA ', 'MANASS', 'NOUR BOUGIE', NULL, '0663746873', NULL, NULL, 'nourbougie@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(76, NULL, 'Noureddine', 'Idsaid', 'Shams Home Immobilier', NULL, ' +212 661 481 519 | +212 661 481 518', NULL, NULL, 'contact@shamshome.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(77, NULL, 'Abderrahmane', 'Mazigh', 'LA COMMUNE MARRAKECH', NULL, NULL, NULL, NULL, 'cummarrakech@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(78, NULL, 'HASSNA', 'HASSNA', 'RAMA BIO', NULL, '06 81 59 80 80', NULL, NULL, 'rama.hasna@hotmail.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(79, NULL, 'florian', 'florian', 'loiseau de la medina', NULL, '0614141969', NULL, NULL, 'contactcatamedina@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(80, NULL, 'Amine ', 'Amine', 'Villa SHAYANNE', NULL, '06 61 13 38 60', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(81, NULL, 'SEFFAR', 'ADIL ', 'LA TABLE DU MARCHE', NULL, '0667793998', NULL, NULL, 'chefprojet.communication@hivernage-collection.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 0, '2020-01-01', NULL),
(82, NULL, 'BILLY', 'BILLY', 'BILLY STAY', NULL, NULL, NULL, NULL, 'mypurestay@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(83, NULL, 'BERTO', 'PIERRE', 'LE PLAZZA ', NULL, '00 33 2 47 05 67 74', NULL, NULL, 'scott-pb@orange.fr ', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'france', NULL, 1, '2020-01-01', NULL),
(84, NULL, 'EL BARAKATI ', 'EL BARAKATI ', 'RACHAT AUTO CASH ', NULL, '06 27 08 98 80 //+33 6 45 47 39 47', NULL, NULL, 'contact@rachat-auto-cash.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(85, NULL, 'SAIDIA', 'COLLECTION ', 'Be Live collection saÃ¯dia ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 0, '2020-01-01', NULL),
(86, NULL, 'momo', 'ARMANI', 'MASSIMO', NULL, '0661153163', NULL, NULL, 'contact@hotel-massimo-marrakech.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(87, NULL, 'STE CALA', 'STE CALA', 'STE CALA', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(88, NULL, 'events ', 'pack ', 'Pack Events ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(89, NULL, 'Abdelghni', 'Ait haj moulay ', 'Ahma', NULL, '+212 661-568425', NULL, NULL, 'ahma.jouha@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(90, NULL, 'Salma', 'Boukra ', 'Boukra Salma', NULL, '0649802286', NULL, NULL, 'salma.boukrarsb@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(91, NULL, 'Emili', 'Emili', ' SILVER - TOURS ', NULL, '06 61 33 58 73 ', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(92, NULL, 'ali', 'sidi ', 'SIDI ALI', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(93, NULL, 'ABDELALI ', 'BAJJA', 'GLOB ALI', NULL, '660120307', NULL, NULL, 'contact@globali.immo', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(94, NULL, 'hasib', 'meryama', 'Maison thai spa marrakech', NULL, ' +212 524 20 16 50 / +212 766 52 56 52', NULL, NULL, 'contact@maisonthai-spamarrakech.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(95, NULL, 'YOUSSEF', 'ELFEZZAZI', 'BY MARRAKECH PRESTIGE', NULL, '0660151104', NULL, NULL, 'elfezzazicom@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(96, NULL, 'houda', 'Ajdae', 'Moi M\'aime', NULL, ' +212 (0) 668 950 011', NULL, NULL, 'contact@moimaime.ma', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(97, NULL, 'Olivier ', ' Dasilva', 'ODS FIESTA MARRAKECH', NULL, '+212 606-626626', NULL, NULL, 'ods@fiesta-group.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(98, NULL, 'NAOUAL', 'DENIA ', 'Episaveur', NULL, '0661270427', NULL, NULL, 'nawal-d@live.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 0, '2020-01-01', NULL),
(99, NULL, 'AHMED', 'AHMED', 'LOVE VIEW  MARRAKECH ', NULL, '06 06 81 09 09', NULL, NULL, 'ahmed.hamdane.first@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(100, NULL, 'AMOOR', 'TRAITEUR', 'TRAITEUR AMOOR', NULL, '06 61 41 52 99 ', NULL, NULL, 'asma.amoor@yahoo.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(101, NULL, 'SALIMA ', 'HIJAMA THERAPIE ', 'HIJAMA THERAPIE ', NULL, '06 50 32 44 75 ', NULL, NULL, 'hijama.sk@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(102, NULL, 'HASSAN ', 'AMDJAHDI', 'KUI-ZIN', NULL, '06 71 81 16 16 // 06 53 10 00 88', NULL, NULL, 'kuizin.marrakech@gmail.com ', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(103, NULL, 'ADAM', 'Tavernier', 'Black Label Concierge', NULL, '2071927308', NULL, NULL, 'contact@blacklabelconcierge.co.uk', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'uk', NULL, 1, '2020-01-01', NULL),
(104, NULL, 'Pizza Piri', 'Pizza ', 'Pizza Piri', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(105, NULL, 'AHLAM', 'CHAKIB', 'YIELD SMART', NULL, '06 00 01 15 06 ', NULL, NULL, 'contact@yield-smart.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(106, NULL, 'Rachid ', 'OBH', 'ComPub Conseil', NULL, NULL, NULL, NULL, 'oueld.benhouman@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'france', NULL, 1, '2020-01-01', NULL),
(107, NULL, 'Othman ', 'Othman', 'MADISSON TRAVEL', NULL, '06 65 89 05 29 ', NULL, NULL, '\'contact.madissontravel@gmail.com\'', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(108, NULL, 'TITIM', 'TITIM', 'Lilya Garden', NULL, '06 61 45 25 96 ', NULL, NULL, 'lilyagarden.paysage@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(109, NULL, 'Zakaria ', 'Zakaria ', 'Zak collection ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(110, NULL, 'KENZA', 'BERRADA', 'KNB MARKETING', NULL, '06 60 21 21 21', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(111, NULL, 'Dounia', 'Dounia', 'La Maison du PralinÃ© ', NULL, ' 05-22-39-98-58', NULL, NULL, 'lamaisondupraline@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(112, NULL, 'chauffeur 24', 'chauffeur 24', 'Chauffeur 24', NULL, '+212 6 22 14 13 85 ou +212 6 61 92 05 19', NULL, NULL, 'info@chauffeu24.ma', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(113, NULL, 'SOUFIANE', 'CHAHBY', 'FUD LEADER', NULL, '06 60 78 83 66 ', NULL, NULL, '\'fudleader02@gmail.com\'', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(114, NULL, 'BIGLOSSA ', 'BIGLOSSA ', 'BIGLOSSA ', NULL, NULL, NULL, NULL, 'alfioune@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(115, NULL, 'CÃ©cile and Olivier ', 'CÃ©cile and Olivier ', 'DAR BIONA ', NULL, '0673-810088 // 06 18 85 63 ', NULL, NULL, 'oriolo99@gmail.com ', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(116, NULL, 'NABIL', 'EL HAMDOUCHI', 'EL HAMDOUCHI NABIL ', NULL, '06 61 11 62 92', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(117, NULL, 'Bader', 'Moukhir', 'MENA BILIAT SUD', NULL, '06 61 55 42 85 ', NULL, NULL, 'moukhir@menabilia.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(118, NULL, 'TAARIJI', 'EL GHALI ', 'SEHI', NULL, '05 22 35 21 40', NULL, NULL, 'g.taariji@sehigroup.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(119, NULL, ' ZAKARIA ', 'EL HATAB ', 'EL HATAB ZAKARIA ', NULL, NULL, NULL, NULL, 'elhatabzakaria@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(120, NULL, 'mechrah', 'khalid', 'somasteel', NULL, '0661817767//0522 672 008', NULL, NULL, 'hassansomasteel@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', 'logo-500.png', 1, '2020-01-01', NULL),
(121, NULL, 'PUREBEAU', 'PUREBEAU', 'PUREBEAU', NULL, '	0522-00 00 00', NULL, NULL, 'INFO@PUREBEAU.MA', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(122, NULL, 'ZINEB ', 'BENSLIMAN', 'CAESA-MENA   RISINWORLD', NULL, '06 98 98 77 54', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(123, NULL, 'Mehdi ', 'ALAOUI', 'Mehdi ALAOUI', NULL, '07 62 92 31 34', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(124, NULL, 'YOUSSEF', 'CHAMI', 'Ocean Park Appart Hotel', NULL, '0661761601', NULL, NULL, ' ycarchitecte@gmail.com  ', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(125, NULL, 'REM SA', 'BP', 'BP REM SA', NULL, '000800303000024', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(126, NULL, 'hotel', 'kech ', 'Kech Boutique HÃ´tel & Spa', NULL, ' 05243-88787', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 0, '2020-01-01', NULL),
(127, NULL, 'Siham', 'Siham ', 'house spa marrakech', NULL, '05244-38674 // 06 14 14 14 28', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(128, NULL, 'ismail ', 'ismail Alami', 'DARSOLARENERGY', NULL, '0662183111', NULL, NULL, 'i.alami@darsolarenergy.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(129, NULL, 'AssÃ¯a ', 'ARTIS ', 'ARTIS ', NULL, '06 69 14 26 04', NULL, NULL, 'AYATILLAH', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(130, NULL, 'abdelkabir ', 'abdelkabir ', 'Auto imane 24', NULL, '0661574370', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(131, NULL, 'Venezia Ice', 'Venezia Ice', 'Venezia Ice', NULL, '06 62 14 41 43 ', NULL, NULL, 'amine@venezia-ice.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(132, NULL, 'ZIRAOUI PRINT', 'ZIRAOUI PRINT', 'ZIRAOUI PRINT ', NULL, '05222-28722', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(133, NULL, ' SAAD', 'Rabha', 'DALIL\'IMMO', NULL, '+33 652117057', NULL, NULL, ' r.saad@dalilimmo.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(134, NULL, ' LAACHIR', 'IMANE', 'KILIM SOCIETE ', NULL, NULL, NULL, NULL, 'kilimlaachirimane@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(135, NULL, ' INTER CAD', ' INTER CAD', ' INTER CAD', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(136, NULL, 'BENHAMZA', 'NAWAL ', 'LUXURIA', NULL, '06 61 20 62 49', NULL, NULL, 'nawal@luxuriaconsulting.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(137, NULL, 'BERRADA', 'HAMZA', ' HAMZA BERRADA', NULL, NULL, NULL, NULL, 'HBERRADA@Alliances.co.ma', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(138, NULL, 'ELHAIRACH', 'LAILA', 'LAILA ELHAIRACH', NULL, NULL, NULL, NULL, 'laila.elhairach@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(139, NULL, 'SOUKAINA ', 'REGUIG ', 'ADEMIA ', NULL, '+33 4 67 97 00 65', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(140, NULL, 'Adil ', 'Sadki ', 'American Language Center Of Marrakesh ALC', NULL, '05244-47259', NULL, NULL, 'infosadki@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(141, NULL, 'ELMRINI', 'MARWAN', 'MARWAN ELMRINI ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(142, NULL, 'FARAH', 'FARAH ', 'TEX MEX', NULL, '05229-84806', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(143, NULL, 'JÃ©rÃ©mie', ' PERALES ', 'JEREMIE  PERALES ', NULL, '+212 7 07 16 07 47', NULL, NULL, 'jeremieperales@dabago.net', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(144, NULL, 'CHARAF', 'CHARAF', 'CHARAF RENT CAR ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(146, NULL, 'MANDALOUN ', 'MANDALOUN ', 'MANDALOUN ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(147, NULL, 'DAGDAG', 'MOHAMME', 'Club Action Maroc - CÃ´te dâ€™Ivoire CAMCI // Fondation MAO', NULL, '0777 777 774', NULL, NULL, 'mohamed.dagdag75@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(148, NULL, 'EL MOUFTI', 'KAMAL', 'KAMAL AL MOUFTI', NULL, '06 14 14 05 56', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(149, NULL, 'Bader', 'Jalal ', ' Highdelivery', NULL, '0661081807', NULL, NULL, 'J.bader@nexttel.ma ', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(150, NULL, 'Cap Excellence', 'Cap Excellence', 'Cap Excellence', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(151, NULL, 'SAGHIR ', 'SAGHIR', 'Douceurs de la nature', NULL, '06 66 66 66 66', NULL, NULL, 'rhmaroc2020@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(152, NULL, 'Le MaÃ®tre des lÃ©gumes', 'Le MaÃ®tre des lÃ©gumes', 'Le MaÃ®tre des lÃ©gumes', NULL, '06 61 95 29 07', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(153, NULL, 'KARIM', ' BELGHAZI', 'E COBIODIS ', NULL, '06 62 82 58 90', NULL, NULL, 'belghazi.karim@flp.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(154, NULL, 'benchekroun youssef', 'benchekroun youssef', 'benchekroun youssef', NULL, '0661373818', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(155, NULL, 'HandynTrendy', 'HandynTrendy', 'HandynTrendy', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(156, NULL, 'Attijariwafa Bank', 'Attijariwafa Bank', 'Attijariwafa Bank', NULL, NULL, NULL, NULL, 'Attijariwafa Bank', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(157, NULL, 'soukaina', 'alfahd gallery', 'alfahd gallery', NULL, '0600-343410', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(158, NULL, 'KARIM', 'KARIM', 'BALZATEX', NULL, '06 61 62 30 09', NULL, NULL, 'commercial@balzatex.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(159, NULL, 'Wazo HÃ´tel', 'Wazo HÃ´tel', 'Wazo HÃ´tel', NULL, ' 05242-98400', NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(160, NULL, 'ISMAIL', 'BSR PROTECTION ', 'BSR PROTECTION ', NULL, NULL, NULL, NULL, 'smail.bonnetmarconnet@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(161, NULL, 'SIFANY', 'CHAIMAA', 'THE TOUCH WOMEN', NULL, '0662152557', NULL, NULL, 'S.chaimaa.marketing@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(162, NULL, 'SARL AUNAMAS', 'SARL AUNAMAS', 'SARL AUNAMAS', NULL, '06 66 82 76 17 ', NULL, NULL, 'annehelenemas@hotmail.fr', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(163, NULL, 'Walls Luxury Premier', 'Walls Luxury Premier', 'Walls Luxury Premier', NULL, ' 00212 6 34 37 89 95 / 00212 7 000 888 18', NULL, NULL, ' contact@walls-luxury-premier.com', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(164, NULL, ' MECANIC ', 'ALLO', 'ALLO MECANIC ', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(165, NULL, 'latrache ', 'sarah ', 'Le Meurice immobilier', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL),
(166, NULL, 'TOTAL MAROC', 'TOTAL MAROC', 'TOTAL MAROC', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, 'morocco', NULL, 1, '2020-01-01', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cms_config`
--

CREATE TABLE `cms_config` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `tel` varchar(200) DEFAULT NULL,
  `tel2` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `x` varchar(30) DEFAULT NULL,
  `y` varchar(30) DEFAULT NULL,
  `id_slider` int(11) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `gplus` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `snapshat` varchar(255) DEFAULT NULL,
  `tumblr` varchar(255) DEFAULT NULL,
  `viadeo` varchar(255) DEFAULT NULL,
  `analytic` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_config`
--

INSERT INTO `cms_config` (`id`, `logo`, `email`, `tel`, `tel2`, `fax`, `x`, `y`, `id_slider`, `facebook`, `twitter`, `gplus`, `youtube`, `instagram`, `pinterest`, `linkedin`, `snapshat`, `tumblr`, `viadeo`, `analytic`) VALUES
(0, 'logo_hello_world2.png', 'contact@helloworld-agency.com', '+212 05 24 42 31 56', '0674507162', NULL, '31.6345873', '-8.0171462', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cms_details_categorie`
--

CREATE TABLE `cms_details_categorie` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `seo_titre` varchar(200) DEFAULT NULL,
  `seo_description` varchar(300) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `langue` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_details_categorie`
--

INSERT INTO `cms_details_categorie` (`id`, `id_categorie`, `seo_titre`, `seo_description`, `titre`, `langue`) VALUES
(1, 1, 'Villa', 'Villa', 'Création site internet', 'fr'),
(2, 2, NULL, NULL, 'Community Management', 'fr'),
(3, 3, 'Riad ', 'Riad ', 'SEO', 'fr'),
(4, 4, 'Terrain', 'Terrain', 'Shooting photo', 'fr'),
(6, 6, NULL, NULL, 'Design', 'fr'),
(7, 7, NULL, NULL, 'StratÃ©gie Marketing', 'fr'),
(8, 8, NULL, NULL, ' HÃ©bergement Et Nom De Domaine', 'fr'),
(9, 9, NULL, NULL, 'Certificat Ssl', 'fr'),
(10, 10, NULL, NULL, ' Communication Web Pour Un Site E-Commerce', 'fr'),
(11, 11, NULL, NULL, 'Shooting vidÃ©o ', 'fr'),
(12, 12, NULL, NULL, 'Modification Site Web', 'fr'),
(13, 13, NULL, NULL, 'Sponsorisation rÃ©seaux sociaux', 'fr'),
(14, 14, NULL, NULL, 'Relation influenceurs', 'fr'),
(15, 15, NULL, NULL, 'Mise Ã  jour site internet', 'fr'),
(16, 16, NULL, NULL, 'charte graphique', 'fr'),
(17, 17, NULL, NULL, 'Acheter d\'espace de stockage', 'fr'),
(18, 18, NULL, NULL, 'Acheter d\'espace mailing', 'fr'),
(19, 19, NULL, NULL, 'Traduction site CAESA-MENA', 'fr'),
(20, 20, NULL, NULL, 'Frais de gestion ', 'fr'),
(21, 21, NULL, NULL, 'Cartes Visites ', 'fr'),
(22, 22, NULL, NULL, 'CrÃ©ation LOGO', 'fr'),
(23, 23, NULL, NULL, 'CrÃ©ation plateforme de rÃ©servation voyage', 'fr'),
(24, 24, NULL, NULL, 'DÃ©veloppement application Mobile ', 'fr'),
(25, 25, NULL, NULL, 'Habillage De VÃ©hicule', 'fr'),
(26, 26, NULL, NULL, 'CrÃ©ation d\'une landing page ', 'fr'),
(27, 27, NULL, NULL, 'Plan Marketing Et Accompagnement', 'fr'),
(28, 28, NULL, NULL, 'DÃ©veloppement une application web et mobile', 'fr');

-- --------------------------------------------------------

--
-- Structure de la table `cms_details_config`
--

CREATE TABLE `cms_details_config` (
  `id_config` int(11) NOT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `titre` varchar(200) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `langue` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_details_config`
--

INSERT INTO `cms_details_config` (`id_config`, `nom`, `titre`, `description`, `adresse`, `langue`) VALUES
(0, 'Hello World', 'Hello World', 'Hello World', 'SALAM 144, APPT 13 3 ETG BAB DOUKALA', 'fr');

-- --------------------------------------------------------

--
-- Structure de la table `cms_details_localisation`
--

CREATE TABLE `cms_details_localisation` (
  `id` int(11) NOT NULL,
  `id_localisation` int(11) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `langue` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_details_localisation`
--

INSERT INTO `cms_details_localisation` (`id`, `id_localisation`, `titre`, `langue`) VALUES
(1, 1, 'GuÃ©liz', 'fr'),
(2, 2, 'Golf ', 'fr'),
(3, 3, 'Palemerie', 'fr');

-- --------------------------------------------------------

--
-- Structure de la table `cms_details_service`
--

CREATE TABLE `cms_details_service` (
  `id` int(11) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `intervenant` varchar(250) DEFAULT NULL,
  `unite` varchar(250) DEFAULT NULL,
  `langue` varchar(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_details_service`
--

INSERT INTO `cms_details_service` (`id`, `id_service`, `titre`, `description`, `intervenant`, `unite`, `langue`) VALUES
(1, 1, 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 'Chef de projet, DÃ©veloppeur web, rÃ©fÃ©renceur web, OpÃ©rateur de saisie', 'Jour/Homme', 'fr'),
(3, 3, 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 'OpÃ©rateur de saisie, rÃ©fÃ©renceur web', 'Mois', 'fr'),
(4, 4, 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 'Directeur artistique', 'Mois', 'fr'),
(14, 14, 'Relation influenceurs ', '<ul>\r\n	<li>Prise de contact avec l influenceuse MERIAM ZOUBIR</li>\r\n	<li>Gestion de relation entre MERIAM ZOUBIR&nbsp;et NOUR BOUGIE</li>\r\n	<li>Suivit les produits partages sur les r&eacute;seaux sociaux</li>\r\n	<li>Reporting&nbsp;</li>\r\n</ul>\r\n', 'Chef de projet', 'Jour/Homme', 'fr'),
(5, 5, 'RÃ©fÃ©rencement naturel Â ', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Organiser des pages de site.</li>\r\n	<li>&nbsp;Changer le contenu.</li>\r\n	<li>&nbsp;Optimiser toutes les pages.</li>\r\n	<li>&nbsp;Etablir les &eacute;changes de lien avec des sites et des annuaires de qualit&eacute;.</li>\r\n	<li>&nbsp;08 mots cl&eacute;s.</li>\r\n	<li>&nbsp;D&eacute;veloppement du taux de transformation du site.</li>\r\n	<li>&nbsp;Rapport mensuel.</li>\r\n	<li>&nbsp;Google Map<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 'RÃ©fÃ©renceur web, DÃ©veloppeur Web', 'Mois', 'fr'),
(6, 6, 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 'DÃ©veloppeur Web', 'An', 'fr'),
(7, 7, 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 'Chef de projet Web', 'An', 'fr'),
(8, 8, 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 'Chef de projet Web', 'An', 'fr'),
(9, 9, 'DÃ©veloppement des Composants du site web (Prestashop)', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique pour un site E-Commerce</strong></u></h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Brief de la charte graphique</li>\r\n	<li>&nbsp;Responsive design</li>\r\n	<li>&nbsp;Conception de la charte graphique (Logo-Image-textes)</li>\r\n	<li>&nbsp;Guide de mise en page &bull; D&eacute;coupe graphique XHTML/CSS</li>\r\n	<li>&nbsp;Mise en place de l&#39;environnement de production (Installation, configuration CMS, BD)</li>\r\n</ul>\r\n\r\n<h3><u><strong>Phase de conception fonctionnelle pour un site E-Commerce</strong></u></h3>\r\n\r\n<ul>\r\n	<li>Planning projet</li>\r\n	<li>Conseil et accompagnement</li>\r\n	<li>Cartographie site web (Plan du site) Plan de zone de gabarits</li>\r\n	<li>Plan de page mod&egrave;le (Template) â€ Page de contenu</li>\r\n	<li>Sp&eacute;cifications fonctionnelles (maquettes, documentation, descriptif)</li>\r\n	<li>Elaboration du plan de travail</li>\r\n</ul>\r\n\r\n<h3><u><strong>D&eacute;veloppement des Composants du site web (Prestashop)</strong></u></h3>\r\n\r\n<ul>\r\n	<li>Site auto administrable</li>\r\n	<li>Gestion de contenu (Textes-Images-Vid&eacute;os-logo-films)</li>\r\n	<li>Gestion des pages</li>\r\n	<li>Gestion des produits</li>\r\n	<li>Gestion des clients</li>\r\n	<li>Gestion des commandes</li>\r\n	<li>Gestion du stock</li>\r\n	<li>Gestion des tarifs</li>\r\n	<li>Gestion des utilisateurs</li>\r\n	<li>Gestion de langue (Fran&ccedil;ais)</li>\r\n	<li>Gestion des liens vers r&eacute;seaux sociaux</li>\r\n	<li>Gestion des cat&eacute;gories</li>\r\n	<li>d&eacute;veloppement du module des leads</li>\r\n</ul>\r\n', 'Chef de projet, DÃ©veloppeur web, rÃ©fÃ©renceur web, OpÃ©rateur de saisie', 'Jour/Homme', 'fr'),
(13, 13, 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 'RÃ©fÃ©renceur web, DÃ©veloppeur Web', 'Mois', 'fr'),
(10, 10, 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 'photographe, cameraman ', 'Jour/Homme', 'fr'),
(11, 11, 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 'photographe, cameraman ', 'Jour/Homme', 'fr'),
(12, 12, 'Modification site web \'www.lesborjsdelakasbah.com/\'', '<ul>\r\n	<li>Changement sur le module : gestion du pop-up</li>\r\n	<li>Laison pop-up et pages&nbsp;</li>\r\n</ul>\r\n', 'Chef de projet Web', 'Jour/Homme', 'fr'),
(15, 15, 'Mise Ã  jour site internet ', '<ul>\r\n	<li><strong>Modification sur le site internet</strong></li>\r\n	<li><strong>Am&eacute;liore la s&eacute;curit&eacute; de site internet</strong></li>\r\n	<li><strong>Optimisation de la vitesse de chargement et la vitesse de contenu</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, '1', 'fr'),
(16, 16, 'charte graphique', NULL, NULL, '1', 'fr'),
(17, 17, 'Acheter d\'espace de stockage', NULL, '2', 'Jour/Homme', 'fr'),
(18, 18, 'Acheter d\'espace mailing', NULL, NULL, 'An', 'fr'),
(19, 19, 'Traduction site CAESA-MENA', '<p>- Cr&eacute;ation du fichier de traduction Arabi<br />\r\n- Traduction des pages du sites<br />\r\n- Ajout du &quot;s&eacute;lecteur de langue</p>\r\n', NULL, NULL, 'fr'),
(20, 20, 'Frais de gestion ', '<ul>\r\n	<li><strong>Etude Marketing et analyse concurrentielle</strong></li>\r\n	<li><strong>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</strong></li>\r\n	<li><strong>Cr&eacute;ation de la campagne Facebook</strong></li>\r\n	<li><strong>Gestion de la campagne sponsoris&eacute;e sur Facebook</strong></li>\r\n	<li><strong>Analyse de la demande des comp&eacute;titeurs</strong></li>\r\n	<li><strong>Etude Marketing et analyse concurrentielle.</strong></li>\r\n	<li><strong>Cr&eacute;ation et Gestion de la campagne</strong></li>\r\n</ul>\r\n', NULL, 'Jour/Homme', 'fr'),
(21, 21, 'Cartes visites', '<ul>\r\n	<li>Cartes visites R/V sur papier 350g (<strong>400 unit&eacute; langue Francais</strong>)</li>\r\n	<li>Cartes visites R/V sur papier 350g (<strong>800 unit&eacute; langue Arab</strong>)</li>\r\n</ul>\r\n', NULL, '1200', 'fr'),
(22, 22, 'RÃ©alisation du logo', '<ul>\r\n	<li>Recherche d&rsquo;id&eacute;e&nbsp;</li>\r\n	<li>Esquisse et croquis</li>\r\n	<li>D&eacute;veloppement d&rsquo;id&eacute;e</li>\r\n	<li>Dessin perspective</li>\r\n	<li>R&eacute;aliser deux logos</li>\r\n</ul>\r\n', 'Chef de projet Web', '1', 'fr'),
(23, 23, 'CrÃ©ation plateforme de rÃ©servation voyage', '<p><u><strong>Partie backoffice :</strong></u></p>\r\n\r\n<ul>\r\n	<li>Gestion utilisateur</li>\r\n	<li>Gestion des programmes</li>\r\n	<li>Gestion des h&eacute;bergements</li>\r\n	<li>Gestion des moyen de transport</li>\r\n	<li>Gestion des activit&eacute;s</li>\r\n	<li>Gestions des guides</li>\r\n	<li>Gestion des chauffeurs</li>\r\n	<li>Gestion des agents (revendeur)</li>\r\n	<li>Gestion des clients</li>\r\n	<li>Gestion des r&eacute;servations</li>\r\n	<li>Gestion des factures</li>\r\n	<li>Gestion des villes</li>\r\n	<li>Gestion des promotions</li>\r\n</ul>\r\n\r\n<p><u><strong>Partie front office :&nbsp;</strong></u></p>\r\n\r\n<ul>\r\n	<li>Cr&eacute;ation de l&#39;interface utilisateur (template diff&eacute;rentes pages)</li>\r\n	<li>Version mobile</li>\r\n	<li>Espace clients</li>\r\n	<li>Int&eacute;gration paiement en ligne cmi</li>\r\n</ul>\r\n', 'Chef de projet, DÃ©veloppeur web, rÃ©fÃ©renceur web, OpÃ©rateur de saisie', 'Jour/Homme', 'fr'),
(24, 24, 'DÃ©veloppement application Mobile ', '<ul>\r\n	<li>Cr&eacute;er une application Android</li>\r\n	<li>Faire certifier l&rsquo;appli par les plates-formes de t&eacute;l&eacute;chargement</li>\r\n	<li>Conception &amp; Design de l&#39;application&nbsp;</li>\r\n	<li>D&eacute;veloppement de l&#39;application</li>\r\n	<li>Tester l&#39;application&nbsp;</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Maintenance et la mise a jour de l&#39;application&nbsp;</li>\r\n</ul>\r\n', 'Chef de projet, DÃ©veloppeur web, Designer web, DÃ©veloppeur Android, DÃ©veloppeur IOS ', 'Mois', 'fr'),
(25, 25, 'Habillage De VÃ©hicule', '<ul>\r\n	<li><strong>Habillage du v&eacute;hicule Dacia Dokker</strong></li>\r\n	<li><strong>D&eacute;coration de la flotte de v&eacute;hicules.</strong></li>\r\n	<li><strong>Marquage publicitaire.</strong></li>\r\n	<li><strong>Impression sticker v&eacute;hicule.</strong></li>\r\n	<li><strong>Adh&eacute;sif sp&eacute;cial (11m&sup2;)</strong></li>\r\n</ul>\r\n', NULL, 'Jour/Homme', 'fr'),
(26, 26, 'CrÃ©ation d\'une landing page ', '<p>D&eacute;veloppement des Composants du site web ( Landing page)</p>\r\n\r\n<ul>\r\n	<li><strong>Optimisation landing page</strong></li>\r\n	<li><strong>Responsive landing page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></li>\r\n	<li><strong>Landing page personnalis&eacute;e</strong></li>\r\n	<li><strong>Formulaire de contact</strong></li>\r\n	<li><strong>Section galerie</strong></li>\r\n	<li><strong>T&eacute;l&eacute;chargements des contrats PDF</strong></li>\r\n</ul>\r\n', 'RÃ©fÃ©renceur web, DÃ©veloppeur Web', 'Mois', 'fr'),
(27, 27, 'Marketing et stratÃ©gique', '<ul>\r\n	<li>Sondage et questionnaire</li>\r\n	<li>&Eacute;tude de marche</li>\r\n	<li>&Eacute;tude concurrentielle</li>\r\n	<li>R&eacute;alisation cahier de charge</li>\r\n	<li>Technique de segmentation</li>\r\n	<li>Technique de ciblage</li>\r\n	<li>Technique de positionnement</li>\r\n	<li>Gestion des r&eacute;seaux sociaux</li>\r\n	<li>Politiques de communication et publicit&eacute;</li>\r\n	<li>Politique marque; gamme; produit</li>\r\n</ul>\r\n', NULL, 'Jour/Homme', 'fr'),
(28, 28, 'Distribution flyerÂ Â ', '<p>Distribution flyer&nbsp;&nbsp;</p>\r\n', NULL, 'Jour/Homme', 'fr'),
(29, 29, 'DÃ©veloppement une application web et mobile', '<ul>\r\n	<li>D&eacute;finissez l&rsquo;id&eacute;e d&#39;application web</li>\r\n	<li>Cr&eacute;ez les maquettes de l&rsquo;application web</li>\r\n	<li>D&eacute;finissez la conception graphique de l&rsquo;application</li>\r\n	<li>Concevez un site web ou une landing page pour promouvoir l&rsquo;application</li>\r\n	<li>D&eacute;veloppez l&rsquo;application web.</li>\r\n	<li>Cr&eacute;er une application Android</li>\r\n	<li>Faire certifier l&rsquo;appli par les plates-formes de t&eacute;l&eacute;chargement</li>\r\n	<li>Conception &amp; Design de l&#39;application&nbsp;</li>\r\n	<li>D&eacute;veloppement de l&#39;application&nbsp;</li>\r\n	<li>Tester l&#39;application&nbsp;</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Maintenance et la mise &agrave; jour de l&#39;application&nbsp;</li>\r\n</ul>\r\n', 'Chef de projet, DÃ©veloppeur web, Designer web, DÃ©veloppeur Android, DÃ©veloppeur IOS ', 'Mois', 'fr');

-- --------------------------------------------------------

--
-- Structure de la table `cms_devis`
--

CREATE TABLE `cms_devis` (
  `id` int(11) NOT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `date_devis` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `statu` int(3) DEFAULT NULL,
  `devise` varchar(10) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `discount_val` double DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `last_edit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_devis`
--

INSERT INTO `cms_devis` (`id`, `numero`, `id_client`, `date_devis`, `total`, `statu`, `devise`, `discount`, `discount_val`, `date_add`, `last_edit`) VALUES
(2, '2021020002', 6, '2021-02-10', 54024, 1, 'DH', NULL, NULL, '2021-02-11 11:26:29', '2021-06-11 17:12:01'),
(3, '2021020003', 7, '2021-02-11', 2160, 1, 'DH', NULL, NULL, '2021-02-11 12:41:15', '2021-05-12 15:39:37'),
(4, '2021020004', 12, '2021-02-17', 62640, 1, 'DH', NULL, NULL, '2021-02-17 09:08:06', '2021-05-12 15:41:58'),
(5, '2021020005', 9, '2021-02-17', 4800, 0, 'DH', NULL, NULL, '2021-02-17 15:04:55', '2021-02-17 15:04:55'),
(6, '2021020006', 13, '2021-02-17', 9600, 1, 'DH', NULL, NULL, '2021-02-17 15:07:56', '2021-05-12 15:42:02'),
(7, '2021030007', 14, '2021-03-01', 9000, 0, 'DH', NULL, NULL, '2021-03-01 12:36:12', '2021-03-01 12:48:02'),
(8, '2021030008', 17, '2021-03-05', 70560, 1, 'DH', NULL, NULL, '2021-03-05 15:54:35', '2021-05-12 15:43:59'),
(9, '2021030009', 18, '2021-03-09', 70200, 1, 'DH', NULL, NULL, '2021-03-09 09:26:18', '2021-05-12 15:44:04'),
(10, '2021030010', 19, '2021-03-10', 42840, 0, 'DH', NULL, NULL, '2021-03-10 14:25:41', '2021-03-10 16:19:23'),
(11, '2021030011', 7, '2021-03-11', 1596, 1, 'DH', NULL, NULL, '2021-03-11 14:46:30', '2021-05-12 15:44:09'),
(13, '2021030013', 20, '2021-03-12', 22800, 0, 'DH', NULL, NULL, '2021-03-12 14:24:15', '2021-03-12 15:59:12'),
(14, '2021030014', 9, '2021-03-18', 11400, 0, 'DH', NULL, NULL, '2021-03-18 11:28:33', '2021-03-18 11:29:31'),
(15, '2021030015', 18, '2021-03-22', 1612.8, 1, 'DH', NULL, NULL, '2021-03-22 11:07:36', '2021-05-12 15:44:14'),
(16, '2021030016', 21, '2021-03-24', 32520, 1, 'DH', NULL, NULL, '2021-03-24 08:16:06', '2021-05-12 15:44:22'),
(17, '2021030017', 23, '2021-03-25', 172800, 0, 'DH', NULL, NULL, '2021-03-25 15:25:48', '2021-03-25 15:27:48'),
(18, '2021030018', 24, '2021-03-31', 6000, 0, 'DH', NULL, NULL, '2021-03-31 09:17:00', '2021-03-31 09:18:41'),
(19, '2021030019', 25, '2021-03-31', 30000, 1, 'DH', NULL, NULL, '2021-03-31 10:08:16', '2021-05-12 15:44:26'),
(20, '2021040020', 28, '2021-04-16', 36120, 0, 'DH', NULL, NULL, '2021-04-16 11:41:14', '2021-04-19 10:47:03'),
(21, '2021040021', 17, '2021-04-23', 20400, 1, 'DH', NULL, NULL, '2021-04-23 15:34:43', '2021-05-12 15:44:34'),
(22, '2021040022', 31, '2021-04-28', 26400, 1, 'DH', NULL, NULL, '2021-04-28 10:03:30', '2021-05-12 15:44:44'),
(23, '2021040023', 35, '2021-04-29', 5760, 1, 'DH', NULL, NULL, '2021-04-29 12:10:33', '2021-05-12 15:41:08'),
(24, '2021040024', 32, '2021-04-29', 11640, 0, 'DH', NULL, NULL, '2021-04-29 15:23:50', '2021-04-29 15:28:03'),
(25, '2021050025', 34, '2021-05-04', 42480, 0, 'DH', NULL, NULL, '2021-05-04 11:18:34', '2021-05-04 11:21:56'),
(26, '2021050026', 36, '2021-05-04', 3000, 1, 'Â£', NULL, NULL, '2021-05-04 11:53:52', '2021-05-12 15:44:49'),
(27, '2021050027', 37, '2021-05-10', 20400, 0, 'DH', NULL, NULL, '2021-05-10 15:16:37', '2021-05-10 15:17:27'),
(28, '2021050028', 38, '0000-00-00', 32000.016, 0, 'DH', NULL, NULL, '2021-05-11 10:40:36', '2021-05-11 10:50:37'),
(29, '2021050029', 40, '2021-05-12', 65100, 0, 'DH', NULL, NULL, '2021-05-12 14:26:13', '2021-05-12 14:58:02'),
(30, '2021050030', 39, '2021-05-17', 22080, 1, 'DH', NULL, NULL, '2021-05-17 16:12:40', '2021-05-21 15:32:09'),
(31, '2021050031', 42, '2021-05-18', 67080, 0, 'DH', NULL, NULL, '2021-05-18 08:21:35', '2021-05-18 15:28:03'),
(32, '2021050032', 22, '2021-05-19', 4200, 0, 'DH', NULL, NULL, '2021-05-19 10:35:00', '2021-05-19 16:43:39'),
(33, '2021050033', 18, '2021-05-19', 18000, 0, 'DH', NULL, NULL, '2021-05-19 10:40:19', '2021-05-19 16:45:41'),
(34, '2021050034', 39, '2021-05-20', 10800, 1, 'DH', NULL, NULL, '2021-05-20 11:55:56', '2021-05-21 15:32:28'),
(35, '2021050035', 44, '2021-05-20', 38400, 0, 'DH', NULL, NULL, '2021-05-20 15:56:13', '2021-05-25 09:40:30'),
(36, '2021050036', 46, '2021-05-20', 3775.488, 0, 'DH', NULL, NULL, '2021-05-20 16:47:36', '2021-05-20 16:49:35'),
(37, '2021050037', 27, '2021-05-21', 2000.004, 0, 'DH', NULL, NULL, '2021-05-21 08:56:58', '2021-05-21 09:05:56'),
(38, '2021050038', 22, '2021-03-09', 35520, 1, 'DH', NULL, NULL, '2021-05-21 15:39:55', '2021-05-21 15:50:35'),
(39, '2021050039', 12, '2021-05-31', 21600, 0, 'DH', NULL, NULL, '2021-05-31 16:03:14', '2021-05-31 16:08:51'),
(40, '2021060040', 33, '2021-06-07', 2400, 1, 'DH', 'percentage', 20, '2021-06-07 14:07:57', '2021-06-08 17:13:10'),
(41, '2021060041', 54, '2021-06-14', 283920, 0, 'DH', NULL, NULL, '2021-06-07 16:36:45', '2021-06-14 13:39:56'),
(42, '2021060042', 55, '0000-00-00', 7080, 1, 'DH', NULL, NULL, '2021-06-07 17:14:13', '2021-06-15 08:36:32');

-- --------------------------------------------------------

--
-- Structure de la table `cms_droits`
--

CREATE TABLE `cms_droits` (
  `id` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `module` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_droits`
--

INSERT INTO `cms_droits` (`id`, `id_profil`, `module`, `action`) VALUES
(1, 1, 'com_users', 'view'),
(2, 1, 'com_users', 'add'),
(3, 1, 'com_users', 'edit'),
(4, 1, 'com_users', 'delete'),
(5, 1, 'com_config', 'view'),
(6, 1, 'com_config', 'add'),
(7, 1, 'com_config', 'edit'),
(8, 1, 'com_config', 'delete'),
(9, 1, 'com_lang', 'view'),
(10, 1, 'com_lang', 'add'),
(11, 1, 'com_lang', 'edit'),
(12, 1, 'com_lang', 'delete'),
(13, 1, 'com_dashboard', 'view'),
(14, 1, 'com_dashboard', 'add'),
(15, 1, 'com_dashboard', 'edit'),
(16, 1, 'com_dashboard', 'delete'),
(17, 1, 'com_module', 'view'),
(18, 1, 'com_module', 'add'),
(19, 1, 'com_module', 'edit'),
(20, 1, 'com_module', 'delete'),
(99, 1, 'com_service', 'delete'),
(98, 1, 'com_service', 'edit'),
(97, 1, 'com_service', 'add'),
(96, 1, 'com_service', 'view'),
(67, 1, 'com_categorie', 'edit'),
(66, 1, 'com_categorie', 'add'),
(65, 1, 'com_categorie', 'view'),
(87, 1, 'com_localisation', 'view'),
(86, 1, 'com_localisation', 'add'),
(63, 1, 'com_localisation', 'edit'),
(64, 1, 'com_localisation', 'delete'),
(68, 1, 'com_categorie', 'delete'),
(88, 1, 'com_client', 'view'),
(89, 1, 'com_client', 'add'),
(90, 1, 'com_client', 'edit'),
(91, 1, 'com_client', 'delete'),
(92, 1, 'com_facture', 'view'),
(93, 1, 'com_facture', 'add'),
(94, 1, 'com_facture', 'edit'),
(95, 1, 'com_facture', 'delete'),
(100, 1, 'com_devis', 'view'),
(101, 1, 'com_devis', 'add'),
(102, 1, 'com_devis', 'edit'),
(103, 1, 'com_devis', 'delete'),
(104, 1, 'com_rappel', 'view'),
(105, 1, 'com_rappel', 'add'),
(106, 1, 'com_rappel', 'edit'),
(107, 1, 'com_rappel', 'delete'),
(108, 1, 'com_charge', 'view'),
(109, 1, 'com_charge', 'add'),
(110, 1, 'com_charge', 'edit'),
(111, 1, 'com_charge', 'delete');

-- --------------------------------------------------------

--
-- Structure de la table `cms_facture`
--

CREATE TABLE `cms_facture` (
  `id` int(11) NOT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `date_facture` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `statu` int(3) DEFAULT NULL,
  `devise` varchar(10) DEFAULT NULL,
  `discount` varchar(20) DEFAULT NULL,
  `discount_val` double DEFAULT NULL,
  `proforma` int(11) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_facture`
--

INSERT INTO `cms_facture` (`id`, `numero`, `id_client`, `date_facture`, `total`, `statu`, `devise`, `discount`, `discount_val`, `proforma`, `date_add`, `last_edit`) VALUES
(23, '2021040023', 26, '2021-04-05', 3036, 1, 'DH', NULL, NULL, NULL, '2021-04-05', '2021-04-06'),
(33, '2021050033', 27, '2021-01-06', 1440, 1, 'DH', NULL, NULL, NULL, '2021-05-20', '2021-05-20'),
(32, '2021050032', 43, '2021-01-15', 42840, 2, 'DH', NULL, NULL, NULL, '2021-05-20', '2021-05-20'),
(8, '2021020008', 9, '2021-02-16', 3408.012, 1, 'DH', NULL, NULL, NULL, '2021-02-15', '2021-02-16'),
(9, '2021020009', 10, '2021-02-15', 1440, 1, 'DH', NULL, NULL, NULL, '2021-02-15', '2021-02-15'),
(12, '2021020012', 9, '2021-03-01', 12240, 1, 'DH', NULL, NULL, NULL, '2021-02-16', '2021-02-17'),
(13, '2021020013', 11, '2021-02-09', 1080, 1, 'DH', NULL, NULL, NULL, '2021-02-16', '2021-03-24'),
(16, '2021030016', 16, '2021-03-18', 1548, 0, 'DH', NULL, NULL, NULL, '2021-03-05', '2021-05-20'),
(17, '2021030017', 7, '2021-03-05', 3240, 1, 'DH', NULL, NULL, NULL, '2021-03-05', '2021-03-09'),
(18, '2021030018', 18, '2021-03-09', 70200, 2, 'DH', NULL, NULL, NULL, '2021-03-09', '2021-03-09'),
(19, '2021030019', 11, '2021-01-05', 17902.464, 2, 'DH', NULL, NULL, NULL, '2021-03-09', '2021-03-10'),
(20, '2021030020', 22, '2021-03-24', 4320, 0, 'DH', NULL, NULL, NULL, '2021-03-24', '2021-03-24'),
(21, '2021030021', 7, '2021-03-29', 1596, 1, 'DH', NULL, NULL, NULL, '2021-03-29', '2021-03-29'),
(22, '2021040022', 21, '2021-04-01', 34920, 2, 'DH', NULL, NULL, NULL, '2021-04-01', '2021-04-01'),
(24, '2021040024', 27, '2021-04-06', 1080, 1, 'DH', NULL, NULL, NULL, '2021-04-05', '2021-04-06'),
(40, '2021050040', 48, '2020-12-29', 1176, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(26, '2021040026', 29, '2021-04-21', 2280, 1, 'DH', NULL, NULL, NULL, '2021-04-21', '2021-04-21'),
(27, '2021040027', 30, '2021-04-22', 1080, 1, 'DH', NULL, NULL, NULL, '2021-04-22', '2021-04-22'),
(28, '2021040028', 33, '2021-04-30', 1440, 1, 'DH', NULL, NULL, NULL, '2021-04-30', '2021-04-30'),
(30, '2021050030', 35, '2021-05-04', 5760, 2, 'DH', NULL, NULL, NULL, '2021-05-04', '2021-05-04'),
(31, '2021050031', 39, '2021-05-11', 10580.04, 1, 'DH', NULL, NULL, NULL, '2021-05-11', '2021-05-11'),
(34, '2021050034', 45, '2021-01-28', 235, 1, 'â‚¬', NULL, NULL, 1, '2021-05-20', '2021-06-07'),
(35, '2021050035', 3, '2021-02-03', 9999.996, 1, 'DH', NULL, NULL, NULL, '2021-05-20', '2021-05-20'),
(36, '2021050036', 12, '2021-03-31', 32100, 1, 'DH', NULL, NULL, NULL, '2021-05-20', '2021-05-20'),
(37, '2021050037', 39, '2021-05-21', 22080, 2, 'DH', NULL, NULL, NULL, '2021-05-21', '2021-05-21'),
(38, '2021050038', 39, '2021-05-21', 9999.996, 1, 'DH', NULL, NULL, NULL, '2021-05-21', '2021-05-24'),
(39, '2021050039', 22, '2021-05-21', 34320, 2, 'DH', NULL, NULL, 0, '2021-05-21', '2021-06-08'),
(41, '2021050041', 49, '2020-12-28', 1440, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(42, '2021050042', 29, '2020-12-21', 3240, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(43, '2021050043', 50, '2020-10-06', 2520, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(44, '2021050044', 11, '2020-10-06', 3648, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(45, '2021050045', 51, '2020-08-07', 7800, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(46, '2021050046', 48, '2020-01-21', 34320, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(47, '2021050047', 50, '2020-07-23', 27480, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(48, '2021050048', 13, '2021-03-04', 21120, 2, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(49, '2021050049', 17, '2021-04-15', 70560, 2, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(50, '2021050050', 46, '2020-10-22', 31279.968, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(51, '2021050051', 39, '2020-09-11', 2520, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(52, '2021050052', 29, '2020-04-12', 1080, 1, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(53, '2021050053', 7, '2021-05-24', 2520, 0, 'DH', NULL, NULL, NULL, '2021-05-24', '2021-05-24'),
(54, '2021050054', 45, '2021-05-25', 115, 0, 'â‚¬', NULL, NULL, 1, '2021-05-25', '2021-05-26'),
(55, '2021060055', 42, '2021-06-07', 5880, 0, 'DH', NULL, NULL, 0, '2021-06-07', '2021-06-07'),
(58, '2021060058', 33, '2021-06-08', 2400, 1, 'DH', 'percentage', 20, NULL, '2021-06-08', '2021-06-08'),
(57, '2021060057', 55, '2021-06-08', 5900, 0, 'DH', NULL, NULL, 1, '2021-06-08', '2021-06-08'),
(59, '2021060059', 6, '2021-06-11', 45020, 2, 'DH', NULL, NULL, 1, '2021-06-11', '2021-06-11');

-- --------------------------------------------------------

--
-- Structure de la table `cms_item_devis`
--

CREATE TABLE `cms_item_devis` (
  `id` int(11) NOT NULL,
  `id_devis` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `qte` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `unite` varchar(100) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_item_devis`
--

INSERT INTO `cms_item_devis` (`id`, `id_devis`, `id_service`, `qte`, `prix`, `total`, `unite`, `titre`, `description`, `ordre`) VALUES
(17, 2, 1, 10, 2900, 29000, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(41, 8, 3, 1, 0, 0, 'Mois', 'Gestion des rÃ©seaux sociaux (offert)', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 3),
(55, 13, 14, 1, 15000, 15000, 'Mois', 'Relation influenceurs ', '<ul>\r\n	<li>Prise de contact avec deux&nbsp;influenceuse&nbsp;</li>\r\n	<li>Gestion de relation entre les i<b>nfluenceuse</b>&nbsp;et <b>MON BIJOU</b></li>\r\n	<li>Suivit les produits partages sur les r&eacute;seaux sociaux (Les images et GIF,les vid&eacute;os et lives.,les infographies, les jeux, concours, les podcasts, les story &hellip;&hellip;etc)</li>\r\n	<li>Objectif marketing Instagram&nbsp;: <b>10&nbsp;</b><b>000 abonn&eacute;s&nbsp;</b></li>\r\n	<li>Reporting hebdomadaire&nbsp;pour la gestion de projet</li>\r\n</ul>\r\n', 0),
(40, 8, 1, 20, 2450, 49000, 'Jour/Homme', 'CrÃ©ation site vitrine professionnel et site E-commerce', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&#39; fran&ccedil;ais&#39;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Leadâ€‹</p>\r\n\r\n<p>&nbsp;&bull;&nbsp;Vente en ligne&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(18, 2, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<h3>&nbsp;</h3>\r\n\r\n<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 1),
(19, 2, 5, 3, 2000, 6000, 'Mois', 'RÃ©fÃ©rencement naturel Â ', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Organiser des pages de site.</li>\r\n	<li>&nbsp;Changer le contenu.</li>\r\n	<li>&nbsp;Optimiser toutes les pages.</li>\r\n	<li>&nbsp;Etablir les &eacute;changes de lien avec des sites et des annuaires de qualit&eacute;.</li>\r\n	<li>&nbsp;08 mots cl&eacute;s.</li>\r\n	<li>&nbsp;D&eacute;veloppement du taux de transformation du site.</li>\r\n	<li>&nbsp;Rapport mensuel.</li>\r\n	<li>&nbsp;Google Map<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 2),
(20, 2, 6, 1, 1080, 1080, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 3),
(21, 2, 7, 1, 1440, 1440, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 4),
(22, 2, 11, 1, 5000, 5000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 5),
(23, 3, 12, 2, 900, 1800, 'Jour/Homme', 'Modification site web \'lesborjsdelakasbah.com\'', '<ul>\r\n	<li>Mise &agrave; jour module : gestion du pop-up</li>\r\n	<li>Laison pop-up et pages&nbsp;</li>\r\n	<li>Cr&eacute;ation page pr&eacute;vention Covid-19</li>\r\n	<li>Ajout badge Covid-19 sur tous les pages de site web</li>\r\n</ul>\r\n', 0),
(30, 4, 3, 1, 3500, 3500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(44, 9, 11, 1, 6000, 6000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 3),
(47, 10, 4, 1, 6000, 6000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n	<li>R&eacute;alisation des papier&nbsp;en-t&ecirc;tes et enveloppes</li>\r\n	<li>R&eacute;alisation des badge, carte correspondance, pochette.</li>\r\n</ul>\r\n', 4),
(45, 9, 10, 1, 8000, 8000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 4),
(33, 4, 1, 20, 1850, 37000, 'Jour/Homme', 'CrÃ©ation site vitrine', '<p><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></p>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<p><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></p>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues (fran&ccedil;ais)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 1),
(35, 5, 14, 1, 4000, 4000, 'Jour/Homme', 'Prise de contact ', '<ul>\r\n	<li>Prise de contact avec l influenceuse MERIAM ZOUBIR</li>\r\n	<li>Gestion de relation entre MERIAM ZOUBIR&nbsp;et NOUR BOUGIE</li>\r\n	<li>Suivit les produits partages sur les r&eacute;seaux sociaux</li>\r\n	<li>Reporting&nbsp;</li>\r\n</ul>\r\n', 0),
(36, 6, 14, 1, 8000, 8000, 'Jour/Homme', 'Prise de contact ', '<ul>\r\n	<li>Prise de contact avec l influenceuse MERIAM ZOUBIR</li>\r\n	<li>Gestion de relation entre MERIAM ZOUBIR&nbsp;et NOUR BOUGIE</li>\r\n	<li>Suivit les produits partages sur les r&eacute;seaux sociaux</li>\r\n	<li>Reporting&nbsp;</li>\r\n</ul>\r\n', 0),
(34, 4, 5, 3, 3900, 11700, 'Mois', 'RÃ©fÃ©rencement naturel Â ', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Organiser des pages de site.</li>\r\n	<li>&nbsp;Changer le contenu.</li>\r\n	<li>&nbsp;Optimiser toutes les pages.</li>\r\n	<li>&nbsp;Etablir les &eacute;changes de lien avec des sites et des annuaires de qualit&eacute;.</li>\r\n	<li>&nbsp;08 mots cl&eacute;s.</li>\r\n	<li>&nbsp;D&eacute;veloppement du taux de transformation du site.</li>\r\n	<li>&nbsp;Rapport mensuel.</li>\r\n	<li>&nbsp;Google Map<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 3),
(37, 7, 1, 10, 750, 7500, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;(1&nbsp;langue fran&ccedil;ais )<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\nâ€‹</p>\r\n', 1),
(38, 8, 4, 1, 9800, 9800, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>Charte graphique</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 2),
(43, 9, 3, 3, 4000, 12000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (3&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(46, 9, 1, 20, 1625, 32500, 'Jour/Homme', 'CrÃ©ation site internet ', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<p><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></p>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seaux sociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(48, 10, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 3),
(49, 10, 3, 1, 3500, 3500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram,linkedin)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; Cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; D&eacute;veloppement des interactions des followers</p>\r\n', 2),
(50, 10, 1, 10, 2500, 25000, 'Jour/Homme', 'CrÃ©ation site vitrine', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seaux sociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(51, 11, 12, 1, 1330, 1330, 'Jour/Homme', 'Modification site web \'www.lesborjsdelakasbah.com/\'', '<ul>\r\n	<li>Cr&eacute;ation nouvelle gestion des badges&nbsp;</li>\r\n</ul>\r\n', 0),
(60, 16, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 4),
(59, 16, 1, 10, 1700, 17000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues (1&nbsp;langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seaux sociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(56, 13, 20, 1, 4000, 4000, 'Mois', 'Frais de gestion ', '<ul>\r\n	<li>Cr&eacute;ation et Gestion de la campagne&nbsp;<b>Instagram</b></li>\r\n	<li>Etude Marketing et analyse concurrentielle</li>\r\n	<li>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</li>\r\n	<li>Cr&eacute;ation de la campagne <b>Instagram</b></li>\r\n	<li>Gestion de contenu</li>\r\n	<li>Gestion de la campagne sponsoris&eacute;e sur <b>Instagram</b></li>\r\n	<li>Analyse de la demande des comp&eacute;titeurs</li>\r\n	<li>Etude Marketing et analyse concurrentielle.</li>\r\n</ul>\r\n', 1),
(57, 14, 11, 1, 9500, 9500, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 0),
(58, 15, 21, 1200, 1.12, 1344, '1200', 'Cartes visites', '<ul>\r\n	<li>Cartes visites R/V sur papier 350g pellicul&eacute; mat (<b>400 unit&eacute; langue Francais</b>)</li>\r\n	<li>Cartes visites R/V sur papier 350g pellicul&eacute; mat(<b>800 unit&eacute; langue Arab</b>)</li>\r\n</ul>\r\n', 0),
(64, 17, 23, 4, 36000, 144000, 'Mois', 'CrÃ©ation plateforme de rÃ©servation voyage', '<p><b>Partie backoffice :</b></p>\r\n\r\n<ul>\r\n	<li>Gestion utilisateur</li>\r\n	<li>Gestion des programmes</li>\r\n	<li>Gestion des h&eacute;bergements</li>\r\n	<li>Gestion des moyen de transport</li>\r\n	<li>Gestion des activit&eacute;s</li>\r\n	<li>Gestions des guides</li>\r\n	<li>Gestion des chauffeurs</li>\r\n	<li>Gestion des agents (revendeur)</li>\r\n	<li>Gestion des clients</li>\r\n	<li>Gestion des r&eacute;servations</li>\r\n	<li>Gestion des factures</li>\r\n	<li>Gestion des villes</li>\r\n	<li>Gestion des promotions</li>\r\n</ul>\r\n\r\n<p><b>Partie front office :&nbsp;</b></p>\r\n\r\n<ul>\r\n	<li>Cr&eacute;ation de l&#39;interface utilisateur (template diff&eacute;rentes pages)</li>\r\n	<li>Version mobile</li>\r\n	<li>Espace clients</li>\r\n	<li>Int&eacute;gration paiement en ligne cmi</li>\r\n</ul>\r\n', 0),
(62, 16, 4, 1, 7000, 7000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 3),
(63, 16, 22, 1, 1900, 1900, '1', 'RÃ©alisation du logo', '<ul>\r\n	<li>Recherche d&rsquo;id&eacute;e&nbsp;</li>\r\n	<li>Esquisse et croquis</li>\r\n	<li>D&eacute;veloppement d&rsquo;id&eacute;e</li>\r\n	<li>Dessin perspective</li>\r\n	<li>R&eacute;aliser deux logos</li>\r\n</ul>\r\n', 2),
(65, 18, 11, 1, 5000, 5000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel&nbsp;avec mannequin&nbsp;</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 0),
(66, 19, 24, 1, 25000, 25000, 'Mois', 'DÃ©veloppement application Mobile ', '<ul>\r\n	<li>Cr&eacute;er une application Android</li>\r\n	<li>Faire certifier l&rsquo;appli par les plates-formes de t&eacute;l&eacute;chargement</li>\r\n	<li>Conception &amp; Design de l&#39;application&nbsp;</li>\r\n	<li>D&eacute;veloppement de l&#39;application</li>\r\n	<li>Tester l&#39;application&nbsp;</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Int&eacute;grer l&rsquo;analyse dans votre application mobile</li>\r\n	<li>Maintenance et la mise a jour de l&#39;application&nbsp;</li>\r\n</ul>\r\n\r\n<p><b>Description fonctionnelle&nbsp;</b></p>\r\n\r\n<p>Arborescence du de l&rsquo;application :</p>\r\n\r\n<p><b>MENU PRINCIPALE </b>:<br />\r\nDoit contenir la m&ecirc;me arborescence du site :<br />\r\n- Menu et sous menu&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Alimentation bio</li>\r\n	<li>Boissons</li>\r\n	<li>Compl&eacute;ments alimentaires</li>\r\n	<li>Cosm&eacute;tique naturelle</li>\r\n	<li>Plantes M&eacute;dicinales</li>\r\n	<li>Produits d&acute;aromath&eacute;rapie</li>\r\n	<li>Produits du terroir Maroc</li>\r\n</ul>\r\n\r\n<p>- Espace promotions&nbsp;<br />\r\n- Espace magazine<br />\r\n- Espace client :</p>\r\n\r\n<ul>\r\n	<li>Les commandes clients&nbsp;</li>\r\n	<li>Information client&nbsp;</li>\r\n	<li>Possibilit&eacute; d&rsquo;inscription&nbsp;</li>\r\n</ul>\r\n\r\n<p>- Espace contact et Mapp du magasin&nbsp;<br />\r\n- Espace coup de c&oelig;ur&nbsp;</p>\r\n\r\n<p>- Langage de d&eacute;veloppement FLATTER UN langage d&eacute;velopp&eacute; par Google ce dernier va nous permettre de g&eacute;n&eacute;rerles deux version iOS et Android</p>\r\n\r\n<p>- L&rsquo;interaction avec Base de donn&eacute;es sera effectuer &agrave; travers un flux J-SON ce qui va nous permettre d&rsquo;avoir une interaction directe avec la Base de donn&eacute;es</p>\r\n\r\n<p>- L&rsquo;application sera s&eacute;curis&eacute; a travers &nbsp;des certificats ssl sp&eacute;cialement con&ccedil;ue pour les application&nbsp;</p>\r\n', 0),
(67, 20, 1, 10, 1700, 17000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seaux sociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(72, 21, 25, 4, 3500, 14000, 'Jour/Homme', 'Habillage De VÃ©hicule', '<ul>\r\n	<li><strong>Habillage du v&eacute;hicule Dacia Dokker</strong></li>\r\n	<li><strong>D&eacute;coration de la flotte de v&eacute;hicules.</strong></li>\r\n	<li><strong>Marquage publicitaire.</strong></li>\r\n	<li><strong>Impression sticker v&eacute;hicule.</strong></li>\r\n	<li><strong>Adh&eacute;sif sp&eacute;cial (11m&sup2;)</strong></li>\r\n</ul>\r\n', 1),
(68, 20, 22, 1, 1900, 1900, '1', 'RÃ©alisation du logo', '<ul>\r\n	<li>Recherche d&rsquo;id&eacute;e&nbsp;</li>\r\n	<li>Esquisse et croquis</li>\r\n	<li>D&eacute;veloppement d&rsquo;id&eacute;e</li>\r\n	<li>Dessin perspective</li>\r\n	<li>R&eacute;aliser deux logos</li>\r\n</ul>\r\n', 2),
(69, 20, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 5),
(70, 20, 4, 1, 7000, 7000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 3),
(71, 20, 13, 1, 3000, 3000, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 4),
(73, 21, 4, 1, 3000, 3000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 1),
(74, 22, 1, 10, 1600, 16000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull;Gestion des utilisateurs<br />\r\n&bull; Gestion des langues &quot;fran&ccedil;ais&quot;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de moteur de rechercheâ€‹</p>\r\n\r\n<p>- Gestion des pages&nbsp;pr&eacute;sentation, essais laboratoire, v&ecirc;tement image, formation et adulte, information pratique, contacts.</p>\r\n', 1),
(80, 24, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 1),
(77, 22, 10, 1, 6000, 6000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 1),
(78, 23, 12, 4, 1200, 4800, 'Jour/Homme', 'Modifications site merzougaluxurydesertcamps.com', '<p>- Ajout nouveau camp sur la page d&#39;accueil<br />\r\n- R&eacute;solution probleme des photos d&eacute;form&eacute;es<br />\r\n- Remplacer la page service par transport<br />\r\n- Changement design page transport + liaison avec la page &quot;Getting there&quot;<br />\r\n- Gestion des r&eacute;servations + disponibilit&eacute; r&eacute;el<br />\r\n- V&eacute;rification et activation du paiement en ligne</p>\r\n', 0),
(79, 24, 26, 1, 6000, 6000, 'Mois', 'CrÃ©ation d\'une landing page ', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><b>D&eacute;veloppement des Composants du site web ( Landing page)</b></li>\r\n	<li><b>Optimisation landing page</b></li>\r\n	<li><b>Responsive landing page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></li>\r\n	<li><b>Landing page personnalis&eacute;e</b></li>\r\n	<li><b>Formulaire de contact</b></li>\r\n	<li><b>Section galerie</b></li>\r\n	<li><b>T&eacute;l&eacute;chargements des contrats PDF</b></li>\r\n</ul>\r\n', 0),
(81, 24, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(82, 25, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(83, 25, 1, 10, 1500, 15000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seaux sociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 1),
(90, 26, 1, 10, 90, 900, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(84, 25, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 4),
(85, 25, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 3),
(86, 25, 11, 1, 5000, 5000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 5),
(87, 25, 10, 1, 7000, 7000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 5),
(88, 25, 22, 1, 800, 800, '1', 'RÃ©alisation du logo', '<ul>\r\n	<li>Recherche d&rsquo;id&eacute;e&nbsp;</li>\r\n	<li>Esquisse et croquis</li>\r\n	<li>D&eacute;veloppement d&rsquo;id&eacute;e</li>\r\n	<li>Dessin perspective</li>\r\n	<li>R&eacute;aliser deux logos</li>\r\n</ul>\r\n', 6),
(89, 25, 4, 1, 3000, 3000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 7),
(91, 26, 3, 3, 290, 870, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (3&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(92, 26, 4, 1, 610, 610, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 3),
(96, 27, 1, 10, 1700, 17000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 0),
(94, 26, 7, 1, 120, 120, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 5),
(97, 28, 10, 4, 6666.67, 26666.68, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>Pr&eacute;paration des reportages en capsules vid&eacute;o respectant les th&eacute;matiques et sp&eacute;cificit&eacute;s d&eacute;finies par le CRT d&rsquo;Agadir Souss Massa (APPEL A CONSULTATION N&deg; 01/21 CRT)</li>\r\n	<li>&Eacute;criture d&rsquo;un synopsis et r&eacute;alisation d&rsquo;un story-board des reportages pour validation avec la commission de suivi du projet compos&eacute; de l&rsquo;&eacute;quipe du CRT Agadir SM et de l&rsquo;ONMT et montage conforme &agrave; ce qui a &eacute;t&eacute; d&eacute;cid&eacute; en commun accord avec la commission</li>\r\n	<li>Choix et fourniture de l&#39;illustration sonore (musiques originales, bruitages, &hellip;) des diff&eacute;rentes vid&eacute;os.</li>\r\n	<li>Organisation des s&eacute;ances de tournages</li>\r\n	<li>Prise en compte des remarques du CRT</li>\r\n	<li>Finalisation des reportages vid&eacute;o en concertation avec la commission du suivi</li>\r\n	<li>Version adapt&eacute;e au public malentendant (sous-titrage en Anglais &amp; H&eacute;breu).</li>\r\n	<li>Version adapt&eacute;e au public anglophone en cas de besoin (commentaire ou sous-titrage en Allemand...).</li>\r\n	<li>Cr&eacute;ation de fichiers vid&eacute;o aux formats 4K r&eacute;el,</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n</ul>\r\n', 1),
(98, 28, 11, NULL, NULL, 0, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 2),
(99, 29, 3, 6, 4500, 27000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (6&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 1),
(100, 29, 4, 1, 9000, 9000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 2),
(101, 29, 10, 1, 13000, 13000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 3),
(102, 29, 11, 1, 5000, 5000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 4),
(103, 29, 28, 1, 250, 250, 'Jour/Homme', 'Distribution flyerÂ Â ', '<p>Distribution flyer&nbsp;&nbsp;</p>\r\n', 4),
(104, 30, 3, 2, 4000, 8000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (2 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 0),
(105, 30, 4, 1, 3000, 3000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n</ul>\r\n', 1),
(115, 34, 10, 1, 9000, 9000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>s&eacute;quence 1 : le pneu anim&eacute;&nbsp;<br />\r\n	s&eacute;quence 2 : le lien du site web avec phrase d accroche &ldquo; lancement de la plateforme N&deg;1 de vente de pneu au maroc&rdquo;&nbsp;<br />\r\n	s&eacute;quence 3 : passage du camion daba pneu pour effac&eacute; le site et la phrase d&rsquo;accroche apparition du texte &ldquo; livraison montage &eacute;quilibrage gratuit &nbsp; avec 250dh bar&eacute;&rdquo;<br />\r\n	s&eacute;quence 4 : apparition d&rsquo;un technicien&nbsp;<br />\r\n	s&eacute;quence 5 : apparition du texte &ldquo; diagnostique gratuit &nbsp;300dh bar&eacute;&rdquo;<br />\r\n	s&eacute;quence 6 : apparition du texte &ldquo; offre valable jusqu&rsquo;a xx/xx/2021&rdquo;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 0),
(106, 30, 13, 1, 5500, 5500, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 2),
(107, 30, 20, 1, 1900, 1900, 'Jour/Homme', 'Frais de gestion ', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><b>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</b></li>\r\n	<li><b>Cr&eacute;ation de la campagne Facebook</b></li>\r\n	<li><b>Gestion de la campagne sponsoris&eacute;e sur Facebook</b></li>\r\n	<li><b>Analyse de la demande des comp&eacute;titeurs</b></li>\r\n	<li><b>Etude Marketing et analyse concurrentielle.</b></li>\r\n	<li><b>Cr&eacute;ation et Gestion de la campagne</b></li>\r\n</ul>\r\n', 3),
(116, 35, 3, 3, 9000, 27000, 'Mois', 'Community manager ', '<ul>\r\n	<li>Cr&eacute;ation des comptes (si n&eacute;cessaire)</li>\r\n	<li>Animation des pages (Facebook, Instagram)</li>\r\n	<li>5 partages par semaine sur chaque r&eacute;seau</li>\r\n	<li>Cr&eacute;ation du calendrier &eacute;ditorial (3&nbsp;mois)</li>\r\n	<li>D&eacute;veloppement des interactions des followers</li>\r\n	<li>Gestion des trois pages (LYTO TYP, JET.SAC, AFE)</li>\r\n</ul>\r\n', 0),
(108, 31, 1, 10, 1500, 15000, 'Jour/Homme', 'Refonte de site internet ', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(113, 32, 11, 1, 3500, 3500, 'Jour/Homme', 'Shooting Professional portraits', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo portraits</li>\r\n	<li>prise de photo&nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 0),
(109, 31, 3, 6, 4000, 24000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (6&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2);
INSERT INTO `cms_item_devis` (`id`, `id_devis`, `id_service`, `qte`, `prix`, `total`, `unite`, `titre`, `description`, `ordre`) VALUES
(110, 31, 13, 1, 7900, 7900, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 3),
(111, 31, 4, 1, 5000, 5000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 5),
(112, 31, 20, 1, 4000, 4000, 'Jour/Homme', 'Frais de gestion ', '<ul>\r\n	<li><strong>Etude Marketing et analyse concurrentielle</strong></li>\r\n	<li><strong>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</strong></li>\r\n	<li><strong>Cr&eacute;ation de la campagne Facebook</strong></li>\r\n	<li><strong>Gestion de la campagne sponsoris&eacute;e sur Facebook</strong></li>\r\n	<li><strong>Analyse de la demande des comp&eacute;titeurs</strong></li>\r\n	<li><strong>Etude Marketing et analyse concurrentielle.</strong></li>\r\n	<li><strong>Cr&eacute;ation et Gestion de la campagne</strong></li>\r\n</ul>\r\n', 4),
(114, 33, 10, 3, 5000, 15000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation 3 vid&eacute;o&nbsp;de promotion 3min</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 0),
(118, 36, 7, 1, 286.56, 286.56, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>Achat h&eacute;bergement : association-oumkeltoum.com&nbsp;</p>\r\n', 0),
(119, 36, 7, 1, 286.56, 286.56, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>Achat h&eacute;bergement : futuris-logistics.com&nbsp;</p>\r\n', 1),
(120, 36, 7, 1, 286.56, 286.56, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>Achat h&eacute;bergement : residence-melliber.com</p>\r\n', 2),
(121, 36, 7, 1, 286.56, 286.56, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>Achat h&eacute;bergement : yorklights.com</p>\r\n', 3),
(122, 36, 20, 1, 2000, 2000, 'Jour/Homme', 'Frais de gestion ', '<p>Frais de gestion&nbsp;</p>\r\n', 4),
(123, 37, 12, 1, 1666.67, 1666.67, 'Jour/Homme', 'Modification site web ', '<ul>\r\n	<li><b>Chang&eacute; Le nom de la rubrique vernissage en catalogue pour &ecirc;tre plus global.</b></li>\r\n	<li><b>Le pop-up mis en place au d&eacute;but et supprim&eacute; &agrave; remettre avec option changement des titre en fonction des nouveaut&eacute;s &agrave; la galerie), et comme titre &quot;new, commandez et faite vous livr&eacute; vos &oelig;uvres&raquo; avec un bouton qui m&egrave;nera vers la fiche d&#39;enregistrement d&eacute;j&agrave; en place.</b></li>\r\n	<li><b>Active le bouton achat ou commander </b></li>\r\n	<li><b>Ajouter un bouton qui m&egrave;ne vers la fiche client comme commande et on re&ccedil;oit le mail plut&ocirc;t que payer et mener nul part </b></li>\r\n	<li><b>Activit&eacute; le premier bouton de lire la suite</b></li>\r\n</ul>\r\n', 0),
(124, 38, 1, 10, 1980, 19800, 'Jour/Homme', ' Dynamic Website Creation', '<h3><b>Integration and graphic design phase</b></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Brief of the graphic charter</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Responsive design</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Design of the graphic charter (Logo-Image-texts)</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Layout guide</h3>\r\n	</li>\r\n	<li>\r\n	<h3>XHTML / CSS graphic cutout</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Setting up the production environment (Installation, CMS, BD con fi guration)</h3>\r\n	</li>\r\n</ul>\r\n\r\n<p><b>Functional design phase</b></p>\r\n\r\n<p>&bull; Project planning</p>\r\n\r\n<p>&bull; Advice and support</p>\r\n\r\n<p>&bull; Website mapping (Site map) Template area plan</p>\r\n\r\n<p>&bull; Template page plan - Content page</p>\r\n\r\n<p>&bull; Functional speci fi cations (models, documentation, description)</p>\r\n\r\n<p>&bull; Development of the work plan</p>\r\n\r\n<p><b>Development of website components</b></p>\r\n\r\n<p>Self-administered site</p>\r\n\r\n<p>&bull; Pages management</p>\r\n\r\n<p>&bull;User Management</p>\r\n\r\n<p>&bull; Language management (1 language)</p>\r\n\r\n<p>&bull; Management of links to social networks</p>\r\n\r\n<p>&bull; Newsletter module &bull; Addition of products (...)</p>\r\n\r\n<p>&bull; Customer connection management</p>\r\n\r\n<p>&bull; Customer management</p>\r\n\r\n<p>&bull; Contact management</p>\r\n\r\n<p>&bull; Photo management</p>\r\n', 0),
(130, 41, 29, 7, 33800, 236600, 'Mois', 'DÃ©veloppement une application Web et Mobile ', '<p><b>Cr&eacute;ation &nbsp;et conception des maquettes l&rsquo;App mobile bas&eacute; sur les couleurs choisis - Nous choisirons&nbsp;<br />\r\n-conception de l&rsquo;application en respectant &nbsp;l&#39;exp&eacute;rience utilisateur (UI)&nbsp;<br />\r\n- tester les designs en utilisant adobe xd&nbsp;<br />\r\nCr&eacute;ation de l&rsquo;interface d&rsquo;administration de l&rsquo;App<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des utilisateurs<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des comptes (particulier/corporate)<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des partenaires par type (fournisseur, assurance, banque, etc)<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des produits (pi&egrave;ces de rechanges)<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des langues (Fran&ccedil;ais/Dialecte)<br />\r\n-&nbsp;&nbsp; &nbsp;Gestion des points fid&eacute;lit&eacute;<br />\r\nCr&eacute;ation de L&rsquo;API qui fera la liaison entre l&rsquo;administration (base de donn&eacute;es) et l&rsquo;application mobile<br />\r\nD&eacute;veloppement Application mobile<br />\r\n-&nbsp;&nbsp; &nbsp;Identification par t&eacute;l&eacute;phone / N&deg; s&eacute;rie carte de carburant (client corporate)<br />\r\n-&nbsp;&nbsp; &nbsp;Inscription (cr&eacute;ation compte client)<br />\r\n-&nbsp;&nbsp; &nbsp;Tableau de bord (solde points + cashback + d&eacute;penses mensuelles carburant et lubrifiant)<br />\r\n-&nbsp;&nbsp; &nbsp;Tableau de bord d&eacute;taill&eacute; (corporate) : consommation mensuelle du carburant/lubrifiant + kilom&eacute;trage parcouru du parc + d&eacute;pense mensuelle flotte + historique par v&eacute;hicule + &eacute;conomie g&eacute;n&eacute;r&eacute;e.<br />\r\n-&nbsp;&nbsp; &nbsp;Ajout des alertes sur les prochaines vidanges + proposition de lubrifiant<br />\r\n-&nbsp;&nbsp; &nbsp;Volet fournisseur carburant (historique des op&eacute;ration)<br />\r\n-&nbsp;&nbsp; &nbsp;Volet assurance : consulter le d&eacute;tail du contrat + demande de devis + alerte &eacute;ch&eacute;ance<br />\r\n-&nbsp;&nbsp; &nbsp;Volet banque : consulter solde de la carte pr&eacute;pay&eacute;e + transfert argent vers compte retraite<br />\r\n-&nbsp;&nbsp; &nbsp;Volet prestataire t&eacute;l&eacute;com : catalogue des prestations<br />\r\n-&nbsp;&nbsp; &nbsp;Volet pi&egrave;ces de rechange : catalogue + paiement en ligne<br />\r\n-&nbsp;&nbsp; &nbsp;Volet g&eacute;olocalisation : liste des offres partenaire + demande de devis<br />\r\nPS : L&rsquo;acc&egrave;s aux donn&eacute;es des partenaires d&eacute;pendra des solutions et API qu&rsquo;ils proposent.</b></p>\r\n', 0),
(125, 38, 1, 4, 1225, 4900, 'Jour/Homme', ' Creation Static Website N Â° 1', '<h3><b>â€‹Functional design phase</b></h3>\r\n\r\n<h3>&bull; Project planning</h3>\r\n\r\n<h3>&bull; Advice and support</h3>\r\n\r\n<h3>&bull; Website mapping (Site map) Template area plan</h3>\r\n\r\n<h3>&bull; Template page plan - Content page</h3>\r\n\r\n<h3>&bull; Functional speci fi cations (models, documentation, description)</h3>\r\n\r\n<h3>&bull; Development of the work plan</h3>\r\n\r\n<p><b>Development of website components </b></p>\r\n\r\n<p>&bull; Register a domain.</p>\r\n\r\n<p>&bull; Buy a web host.</p>\r\n\r\n<p>&bull; Design your web page.</p>\r\n\r\n<p>&bull; Validation and testing of your website.</p>\r\n\r\n<p>&bull; Focus and development.</p>\r\n\r\n<p><b>Integration and graphic design phase</b></p>\r\n\r\n<p>&bull; Brief of the graphic charter</p>\r\n\r\n<p>&bull; Responsive design</p>\r\n\r\n<p>&bull; Design of the graphic charter (Logo-Image-texts)</p>\r\n\r\n<p>&bull; Layout guide &bull; XHTML / CSS graphic cutout</p>\r\n\r\n<p>&bull; Setting up the production environment (Installation, CMS, BD con fi guration)</p>\r\n', 1),
(127, 35, 4, 1, 5000, 5000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des&nbsp;story&nbsp;</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des&nbsp;highlight&nbsp;</li>\r\n</ul>\r\n', 2),
(128, 39, 6, 12, 1500, 18000, 'Mois', 'Maintenance site web (1 An)', '<ul>\r\n	<li><b>Mise &agrave; jour du contenu</b></li>\r\n	<li><b>Gestion des comptes emails</b></li>\r\n	<li><b>Mise &agrave; jour de la structure</b></li>\r\n	<li><b>Gestion serveur d&#39;h&eacute;bergement</b></li>\r\n	<li><b>La mise &agrave; jour r&eacute;guli&egrave;re du CMS, du th&egrave;me utilis&eacute; ainsi qu&rsquo;aux modules install&eacute;s&nbsp;</b></li>\r\n	<li><b>L&rsquo;optimisation basique de la base de donn&eacute;es&nbsp;</b></li>\r\n	<li><b>La sauvegarde des pages et de la base de donn&eacute;es&nbsp;</b></li>\r\n	<li><b>Les mesures pr&eacute;ventives qui sembleront n&eacute;cessaires afin de garantir la stabilit&eacute;, la coh&eacute;rence et la s&eacute;curit&eacute; du site </b></li>\r\n	<li><b>Les modifications ou ajout de pages, articles, textes, images, vid&eacute;os, sons etc&hellip;</b></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(126, 38, 1, 4, 1225, 4900, 'Jour/Homme', 'Static Website Creation N Â° 2', '<h3><b>â€‹Functional design phase</b></h3>\r\n\r\n<h3>&bull; Project planning</h3>\r\n\r\n<h3>&bull; Advice and support</h3>\r\n\r\n<h3>&bull; Website mapping (Site map) Template area plan</h3>\r\n\r\n<h3>&bull; Template page plan - Content page</h3>\r\n\r\n<h3>&bull; Functional speci fi cations (models, documentation, description)</h3>\r\n\r\n<h3>&bull; Development of the work plan</h3>\r\n\r\n<p><b>Development of website components </b></p>\r\n\r\n<p>&bull; Register a domain.</p>\r\n\r\n<p>&bull; Buy a web host.</p>\r\n\r\n<p>&bull; Design your web page.</p>\r\n\r\n<p>&bull; Validation and testing of your website.</p>\r\n\r\n<p>&bull; Focus and development.</p>\r\n\r\n<p><b>Integration and graphic design phase</b></p>\r\n\r\n<p>&bull; Brief of the graphic charter</p>\r\n\r\n<p>&bull; Responsive design</p>\r\n\r\n<p>&bull; Design of the graphic charter (Logo-Image-texts)</p>\r\n\r\n<p>&bull; Layout guide &bull; XHTML / CSS graphic cutout</p>\r\n\r\n<p>&bull; Setting up the production environment (Installation, CMS, BD con fi guration)</p>\r\n', 2),
(129, 40, 12, 1, 2500, 2500, 'Jour/Homme', 'Modification site web', '<p>- Ajout case &agrave; cocher &quot;Mubawab&quot; dans la fiche produit (Gestion des produits)<br />\r\n- Diagnostiquer le flux Mubawab + restituer les produits manquants sur le flux</p>\r\n\r\n<p>-&nbsp;update des dernieres versions des plugins&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 0),
(131, 42, 15, 4, 1475, 5900, '1', 'Mise Ã  jour site internet ', '<ul>\r\n	<li><b>Modification sur le site internet</b></li>\r\n	<li><b>Am&eacute;liore la s&eacute;curit&eacute; de site internet</b></li>\r\n	<li><b>Optimiser et augmenter la vitesse de chargement de votre site web</b></li>\r\n	<li><b>Mise &agrave; jour les fonctionnalit&eacute;s du site web</b></li>\r\n	<li><b>Ajouter pop-up&nbsp;</b></li>\r\n	<li><b>Correction du bug</b></li>\r\n	<li><b>Mise &agrave; jour l&rsquo;administration</b></li>\r\n	<li><b>R&eacute;solution des probl&egrave;mes d&#39;affichage des fichiers PDF</b></li>\r\n</ul>\r\n', 0);

-- --------------------------------------------------------

--
-- Structure de la table `cms_item_facture`
--

CREATE TABLE `cms_item_facture` (
  `id` int(11) NOT NULL,
  `id_facture` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL,
  `qte` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `unite` varchar(100) DEFAULT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_item_facture`
--

INSERT INTO `cms_item_facture` (`id`, `id_facture`, `id_service`, `qte`, `prix`, `total`, `unite`, `titre`, `description`, `ordre`) VALUES
(78, 37, 13, 1, 5500, 5500, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 2),
(79, 37, 20, 1, 1900, 1900, 'Jour/Homme', 'Frais de gestion ', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><b>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</b></li>\r\n	<li><b>Cr&eacute;ation de la campagne Facebook</b></li>\r\n	<li><b>Gestion de la campagne sponsoris&eacute;e sur Facebook</b></li>\r\n	<li><b>Analyse de la demande des comp&eacute;titeurs</b></li>\r\n	<li><b>Etude Marketing et analyse concurrentielle.</b></li>\r\n	<li><b>Cr&eacute;ation et Gestion de la campagne</b></li>\r\n</ul>\r\n', 3),
(77, 37, 4, 1, 3000, 3000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n</ul>\r\n', 1),
(54, 23, 12, 1, 1330, 1330, 'Jour/Homme', 'Modification site web \"www.marrakech-golf-location.com\"', '<ul>\r\n	<li>Int&eacute;gration &quot;visite virtuel&quot; sur les pages produits</li>\r\n</ul>\r\n', 1),
(52, 23, 8, 1, 1200, 1200, 'An', 'Renouvellement nom de domaine et l hÃ©bergement ', '<p><br />\r\nwww.marrakech-golf-location.com<br />\r\n&nbsp;</p>\r\n', 0),
(53, 24, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 0),
(72, 35, 15, 1, 8333.33, 8333.33, '1', 'Mise Ã  jour site internet ', '<ul>\r\n	<li><strong>Modification sur le site internet</strong></li>\r\n	<li><strong>Am&eacute;liore la s&eacute;curit&eacute; de site internet</strong></li>\r\n	<li><strong>Optimisation de la vitesse de chargement et la vitesse de contenu</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(73, 36, 1, 10, 2465, 24650, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(17, 0, 1, 7, 1500, 10500, 'Jour/Homme', 'CrÃ©ation site', '<ul>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n</ul>\r\n', 0),
(18, 0, 3, 3, 1500, 4500, 'Mois', 'Gestion page Facebook', '<ul>\r\n	<li>Cr&eacute;ation de la page si n&eacute;cessaire</li>\r\n	<li>Cr&eacute;ation d&#39;un tableau de partage</li>\r\n	<li>Cr&eacute;tion des visuels</li>\r\n	<li>Partage de la page sur les groupes</li>\r\n</ul>\r\n', 1),
(19, 0, 1, 7, 1500, 10500, 'Jour/Homme', 'CrÃ©ation site', '<ul>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n	<li><span class=\"fontstyle0\">Organiser des pages de site</span></li>\r\n</ul>\r\n', 0),
(20, 0, 3, 3, 1500, 4500, 'Mois', 'Gestion page Facebook', '<ul>\r\n	<li>Cr&eacute;ation de la page si n&eacute;cessaire</li>\r\n	<li>Cr&eacute;ation d&#39;un tableau de partage</li>\r\n	<li>Cr&eacute;tion des visuels</li>\r\n	<li>Partage de la page sur les groupes</li>\r\n</ul>\r\n', 1),
(68, 32, 15, 1, 35700, 35700, '1', 'Maintenance et Mise Ã  jour site internet ', '<ul>\r\n	<li>Maintenance, mise &agrave; jour et r&eacute;f&eacute;rencement du site Officiel de la commune de Marrakech</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(69, 33, 8, 1, 1200, 1200, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 0),
(70, 34, 8, 1, 120, 120, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 0),
(71, 34, 6, 1, 115, 115, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 1),
(22, 8, 8, 1, 1140, 1140, 'An', 'Renouvellement nom de domaine et l hÃ©bergement ', '<ul>\n	<li>Renouvellement nom de domaine et l h&eacute;bergement &quot;nour-bougie.com&quot; Remise de 5% sur 1200.00DH</li>\n</ul>\n\n<p>&nbsp;</p>\n', 1),
(23, 9, 8, 1, 1200, 1200, 'An', 'Renouvellement nom de domaine et l hÃ©bergement ', '<ul>\n	<li>Renouvellement nom de domaine et l h&eacute;bergement &quot;ademiacenter.com&quot;</li>\n</ul>\n', 0),
(24, 8, 13, 3, 566.67, 1700.01, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 0),
(27, 12, 3, 12, 850, 10200, 'Mois', 'Gestion des rÃ©seaux sociaux', '<ul>\r\n	<li>Cr&eacute;ation des comptes (si n&eacute;cessaire)</li>\r\n	<li>Animation des pages (Facebook, Youtube et Instagram)</li>\r\n	<li>cr&eacute;ation du calendrier &eacute;ditorial</li>\r\n	<li>d&eacute;veloppement des interactions des Flower</li>\r\n	<li>4 partages par semaine sur Facebook</li>\r\n</ul>\r\n', 0),
(28, 13, 6, 1, 900, 900, 'An', 'Certificat Ssl CAESA-MENA', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 0),
(31, 16, 15, 1, 0, 0, '1', 'Mise Ã  jour site internet ', '<ul>\r\n	<li><b>Mise &agrave; jour&nbsp;et maintenance site internet (offert)</b></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 2),
(40, 18, 1, 20, 1625, 32500, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(34, 16, 6, 1, 1290, 1290, 'An', 'Certificat Ssl', '<ul>\r\n	<li>Installation et mise en place du certificat SSL&nbsp;et s&eacute;curisation du site internet</li>\r\n</ul>\r\n', 1),
(35, 17, 12, 2, 900, 1800, 'Jour/Homme', 'Modification site web \'www.lesborjsdelakasbah.com/\'', '<ul>\r\n	<li>Mise &agrave;&nbsp;jour module : gestion du pop-up</li>\r\n	<li>Laison pop-up et pages&nbsp;</li>\r\n	<li>Ajout badge Covid-19 sur tous les pages de site web</li>\r\n	<li>Cr&eacute;ation page pr&eacute;vention Covid-19</li>\r\n</ul>\r\n', 1),
(36, 17, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 1),
(37, 18, 11, 1, 6000, 6000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 4),
(41, 19, 19, 1, 9000, 9000, 'Mois', 'Traduction site CAESA-MENA', '<p>- Cr&eacute;ation du fichier de traduction Arabi<br />\r\n- Traduction des pages du sites<br />\r\n- Ajout du &quot;s&eacute;lecteur de langue</p>\r\n', 1),
(38, 18, 10, 1, 8000, 8000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 3),
(39, 18, 3, 3, 4000, 12000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (3&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(42, 19, 3, 1, 3500, 3500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (3&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(43, 19, 18, 12, 19, 228, 'Mois', 'Acheter d\'espace Mailing', '<p>Acheter d&#39;espace Mailing</p>\r\n', 3),
(44, 19, 17, 2, 364, 728, 'Jour/Homme', 'Acheter d\'espace de stockage pour CAESA-MENA', '<p>Acheter d&#39;espace de stockage pour CAESA-MENA</p>\r\n', 4),
(45, 19, 17, 1, 1462.72, 1462.72, 'Jour/Homme', 'Acheter d\'espace de stockage pour RISINWORLD', '<p>Acheter d&#39;espace de stockage pour RISINWORLD</p>\r\n', 4),
(46, 20, 7, 3, 1200, 3600, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><b>Nbs Travel</b></li>\r\n	<li><b>NBS Propri&eacute;t&eacute;&nbsp;</b></li>\r\n	<li><b>NBS Finance&nbsp;</b></li>\r\n</ul>\r\n', 0),
(47, 21, 12, 1, 1330, 1330, 'Jour/Homme', 'Modification site web \'www.lesborjsdelakasbah.com/\'', '<ul>\r\n	<li>Cr&eacute;ation nouvelle gestion des badges</li>\r\n</ul>\r\n', 0),
(48, 22, 22, 1, 1900, 1900, '1', 'RÃ©alisation du logo', '<ul>\r\n	<li>Recherche d&rsquo;id&eacute;e&nbsp;</li>\r\n	<li>Esquisse et croquis</li>\r\n	<li>D&eacute;veloppement d&rsquo;id&eacute;e</li>\r\n	<li>Dessin perspective</li>\r\n	<li>R&eacute;aliser deux logos</li>\r\n</ul>\r\n', 2),
(49, 22, 1, 10, 1700, 17000, 'Jour/Homme', 'CrÃ©ation site', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais&nbsp;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits&nbsp;<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n<br />\r\nâ€‹</p>\r\n', 1),
(50, 22, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 4),
(51, 22, 4, 1, 9000, 9000, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 3),
(88, 43, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 0),
(89, 43, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 1),
(90, 44, 7, 1, 900, 900, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>Achat nom de domaine RISINWORLD</p>\r\n', 0),
(91, 44, 1, 1, 1100, 1100, 'Jour/Homme', 'Acheter d\'espace de stockage', '<h3>Acheter d&#39;espace de stockage</h3>\r\n', 1),
(95, 46, 1, 8, 1225, 9800, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(87, 42, 1, 1, 1500, 1500, 'Jour/Homme', 'RÃ©cupÃ©rer le contenu du site (backup) ', '<h3>R&eacute;cup&eacute;rer le contenu du site (backup)</h3>\r\n', 1),
(86, 42, 8, 1, 1200, 1200, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 0),
(84, 40, 8, 1, 980, 980, 'An', 'IMPRESSION DE LA FENETRE FOREX', '<p>IMPRESSION DE LA FENETRE FOREX</p>\r\n', 0),
(85, 41, 8, 1, 1200, 1200, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 0),
(60, 26, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 1),
(61, 26, 12, 1, 1000, 1000, 'Jour/Homme', 'Modification site web ', '<ul>\r\n	<li>\r\n	<p>Installation backup site sur nouveau serveur</p>\r\n\r\n	<p><br />\r\n	&nbsp;</p>\r\n	</li>\r\n</ul>\r\n', 2),
(63, 27, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 0),
(64, 28, 8, 1, 1200, 1200, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 0),
(74, 36, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 1),
(75, 36, 8, 1, 1200, 1200, 'An', 'renouvellement nom de domaine et l hÃ©bergement ', NULL, 2),
(76, 37, 3, 2, 4000, 8000, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (2 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 0),
(66, 30, 12, 4, 1200, 4800, 'Jour/Homme', 'Modifications site merzougaluxurydesertcamps.com', '<p>- Ajout nouveau camp sur la page d&#39;accueil<br />\r\n- R&eacute;solution probleme des photos d&eacute;form&eacute;es<br />\r\n- Remplacer la page service par transport<br />\r\n- Changement design page transport + liaison avec la page &quot;Getting there&quot;<br />\r\n- Gestion des r&eacute;servations + disponibilit&eacute; r&eacute;el<br />\r\n- V&eacute;rification et activation du paiement en ligne</p>\r\n', 0),
(67, 31, 27, 6, 1469.45, 8816.7, 'Jour/Homme', 'Marketing et stratÃ©gique', '<ul>\r\n	<li>Sondage et questionnaire</li>\r\n	<li>&Eacute;tude de marche</li>\r\n	<li>&Eacute;tude concurrentielle</li>\r\n	<li>R&eacute;alisation cahier de charge</li>\r\n	<li>Technique de segmentation</li>\r\n	<li>Technique de ciblage</li>\r\n	<li>Technique de positionnement</li>\r\n	<li>Gestion des r&eacute;seaux sociaux</li>\r\n	<li>Politiques de communication et publicit&eacute;</li>\r\n	<li>Politique marque; gamme; produit</li>\r\n</ul>\r\n', 0),
(80, 38, 10, 1, 8333.33, 8333.33, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>s&eacute;quence 1 : le pneu anim&eacute;&nbsp;<br />\r\n	s&eacute;quence 2 : le lien du site web avec phrase d accroche &ldquo; lancement de la plateforme N&deg;1 de vente de pneu au maroc&rdquo;&nbsp;<br />\r\n	s&eacute;quence 3 : passage du camion daba pneu pour effac&eacute; le site et la phrase d&rsquo;accroche apparition du texte &ldquo; livraison montage &eacute;quilibrage gratuit &nbsp; avec 250dh bar&eacute;&rdquo;<br />\r\n	s&eacute;quence 4 : apparition d&rsquo;un technicien&nbsp;<br />\r\n	s&eacute;quence 5 : apparition du texte &ldquo; diagnostique gratuit &nbsp;300dh bar&eacute;&rdquo;<br />\r\n	s&eacute;quence 6 : apparition du texte &ldquo; offre valable jusqu&rsquo;a xx/xx/2021&rdquo;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 0),
(81, 39, 1, 10, 2500, 25000, 'Jour/Homme', ' Dynamic Website Creation', '<p><b>Integration and graphic design phase</b></p>\r\n\r\n<ul>\r\n	<li>Brief of the graphic charter</li>\r\n	<li>Responsive design</li>\r\n	<li>Design of the graphic charter (Logo-Image-texts)</li>\r\n	<li>Layout guide</li>\r\n	<li>XHTML / CSS graphic cutout</li>\r\n	<li>Setting up the production environment (Installation, CMS, BD con fi guration)</li>\r\n</ul>\r\n\r\n<p><b>Functional design phase</b></p>\r\n\r\n<ul>\r\n	<li>Project planning</li>\r\n	<li>Advice and support</li>\r\n	<li>Website mapping (Site map) Template area plan</li>\r\n	<li>Template page plan - Content page</li>\r\n	<li>Functional speci fi cations (models, documentation, description)</li>\r\n	<li>Development of the work plan</li>\r\n</ul>\r\n\r\n<p><b>Development of website components</b></p>\r\n\r\n<ul>\r\n	<li>Self-administered site</li>\r\n	<li>Pages management</li>\r\n	<li>User Managemen</li>\r\n	<li>Language management (1 language)</li>\r\n	<li>Management of links to social networks</li>\r\n	<li>Newsletter module &bull; Addition of products (...)</li>\r\n	<li>Customer connection management</li>\r\n	<li>Customer management</li>\r\n	<li>Contact management</li>\r\n	<li>Photo management</li>\r\n</ul>\r\n', 0),
(128, 58, 12, 1, 2500, 2500, 'Jour/Homme', 'Modification site web', '<p>- Ajout case &agrave; cocher &quot;Mubawab&quot; dans la fiche produit (Gestion des produits)<br />\r\n- Diagnostiquer le flux Mubawab + restituer les produits manquants sur le flux</p>\r\n\r\n<p>-&nbsp;update des dernieres versions des plugins&nbsp;</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n', 0),
(129, 59, 1, 10, 2900, 29000, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(130, 59, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<h3>&nbsp;</h3>\r\n\r\n<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 1),
(92, 44, 1, 1, 1040, 1040, 'Jour/Homme', 'RÃ©alisation carte visite', '<h3>R&eacute;alisation carte visite</h3>\r\n', 2),
(93, 45, 5, 2, 2000, 4000, 'Mois', 'RÃ©fÃ©rencement naturel Â ', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Organiser des pages de site.</li>\r\n	<li>&nbsp;Changer le contenu.</li>\r\n	<li>&nbsp;Optimiser toutes les pages.</li>\r\n	<li>&nbsp;Etablir les &eacute;changes de lien avec des sites et des annuaires de qualit&eacute;.</li>\r\n	<li>&nbsp;08 mots cl&eacute;s.</li>\r\n	<li>&nbsp;D&eacute;veloppement du taux de transformation du site.</li>\r\n	<li>&nbsp;Rapport mensuel.</li>\r\n	<li>&nbsp;Google Map<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 1),
(94, 45, 1, 1, 2500, 2500, 'Jour/Homme', 'Business Manager', '<h3><b>Animation de la page Google My Business Amphora</b></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>&bull; Cr&eacute;er la fiche Google My Business.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>&bull; optimiser votre fiche Google My Business.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>&bull; Mettre &agrave; jour votre fiche info Google.</h3>\r\n	</li>\r\n	<li>\r\n	<h3>&bull; pratiques pour &ecirc;tre (bien) r&eacute;f&eacute;renc&eacute; sur Google.</h3>\r\n	</li>\r\n</ul>\r\n', 2),
(96, 46, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 1),
(97, 46, 13, 1, 2000, 2000, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 2),
(98, 46, 7, 1, 1400, 1400, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 3),
(99, 46, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 4),
(100, 46, 10, 1, 6000, 6000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 5),
(101, 46, 11, 1, 6000, 6000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 6),
(102, 47, 1, 8, 987.5, 7900, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(103, 47, 13, 1, 3500, 3500, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 1),
(104, 47, 3, 1, 2500, 2500, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(105, 47, 10, 1, 9000, 9000, 'Jour/Homme', 'shooting vidÃ©o professionnel', '<ul>\r\n	<li>prise de vue</li>\r\n	<li>R&eacute;alisation vid&eacute;o&nbsp;de promotion&nbsp;</li>\r\n	<li>Prestation du cameraman&nbsp;&amp; la mise &agrave; disposition du mat&eacute;riel d&rsquo;&eacute;clairage et de prise de vue</li>\r\n	<li>Traitement &amp; montage vid&eacute;o</li>\r\n	<li>Cr&eacute;ation vid&eacute;o pour entreprise.</li>\r\n</ul>\r\n', 3),
(106, 48, 1, 10, 1100, 11000, 'Jour/Homme', 'CrÃ©ation site', '<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</strong></u></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><u><strong>Phase d&rsquo;int&eacute;gration et de conception graphique</strong></u></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)<span class=\"fontstyle0\">â€‹</span></p>\r\n\r\n<p><strong><u>D&eacute;veloppement des Composants du site web</u></strong></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues fran&ccedil;ais et anglais (2 langue)<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Ajout des produits (Villas, appartements, autres)<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de panier<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Lead<br />\r\nâ€‹</p>\r\n', 0),
(107, 48, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 1),
(108, 48, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 2),
(109, 48, 11, 1, 4500, 4500, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 3),
(110, 49, 1, 20, 2450, 49000, 'Jour/Homme', 'CrÃ©ation site vitrine professionnel et site E-commerce', '<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique&nbsp;</b></h3>\r\n\r\n<p>&bull; Planning projet<br />\r\n&bull; Conseil et accompagnement<br />\r\n&bull; Cartographie site web (Plan du site) Plan de zone de gabarits<br />\r\n&bull; Plan de page mod&egrave;le (Template) â€ Page de contenu<br />\r\n&bull; Sp&eacute;cificationsfonctionnelles(maquettes,documentation,descriptif)<br />\r\n&bull; Elaboration du plan de travail</p>\r\n\r\n<h3><b>Phase d&rsquo;int&eacute;gration et de conception graphique</b></h3>\r\n\r\n<p><br />\r\n&bull; Brief de la charte graphique<br />\r\n&bull; Responsive design<br />\r\n&bull; Conception de la charte graphique (Logo-Image-textes)<br />\r\n&bull; Guide de mise en page<br />\r\n&bull; D&eacute;coupe graphique XHTML/CSS<br />\r\n&bull; Mise en place de l&#39;environnement de production (Installation,<br />\r\nconfiguration CMS, BD)â€‹</p>\r\n\r\n<p><b>D&eacute;veloppement des Composants du site web</b></p>\r\n\r\n<p>&bull; Site auto administrable<br />\r\n&bull; Gestion des pages<br />\r\n&bull; Gestion des utilisateurs<br />\r\n&bull; Gestion des langues&#39; fran&ccedil;ais&#39;<br />\r\n&bull; Gestion des liens vers r&eacute;seauxsociaux<br />\r\n&bull; Module Newsletter<br />\r\n&bull; Gestion des connections clients<br />\r\n&bull; Gestion des clients<br />\r\n&bull; Gestion des contacts<br />\r\n&bull; Gestion de photo<br />\r\n&bull; Gestion de moteur de recherche<br />\r\n&bull; Gestion formulaire Leadâ€‹</p>\r\n\r\n<p>&nbsp;&bull;&nbsp;Vente en ligne&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(111, 49, 4, 1, 9800, 9800, 'Mois', 'Conception de lâ€™identitÃ© visuelle', '<ul>\r\n	<li>R&eacute;alisation Logo</li>\r\n	<li>Charte graphique</li>\r\n	<li>R&eacute;alisation des affiches</li>\r\n	<li>R&eacute;alisation des sliders</li>\r\n	<li>R&eacute;alisation des offres</li>\r\n	<li>R&eacute;alisation des flyers</li>\r\n	<li>R&eacute;alisation des brochures&nbsp;</li>\r\n	<li>R&eacute;alisation des cartes visites</li>\r\n</ul>\r\n', 2),
(112, 49, 3, 1, 0, 0, 'Mois', 'Gestion des rÃ©seaux sociaux (offert)', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1&nbsp;mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 3),
(113, 50, 13, 2, 2583.33, 5166.66, 'Mois', 'Sponsorisation rÃ©seaux sociaux', '<ul>\r\n	<li>Sponsorisation Facebook&nbsp;</li>\r\n	<li>Sponsorisation Instagram&nbsp;</li>\r\n</ul>\r\n', 0),
(114, 50, 20, 1, 6000, 6000, 'Jour/Homme', 'Frais de gestion ', '<ul>\r\n	<li><strong>Etude Marketing et analyse concurrentielle</strong></li>\r\n	<li><strong>Etude et choix d&rsquo;audience cibl&eacute;e par rapport aux int&eacute;r&ecirc;ts &nbsp;</strong></li>\r\n	<li><strong>Cr&eacute;ation de la campagne Facebook</strong></li>\r\n	<li><strong>Gestion de la campagne sponsoris&eacute;e sur Facebook</strong></li>\r\n	<li><strong>Analyse de la demande des comp&eacute;titeurs</strong></li>\r\n	<li><strong>Etude Marketing et analyse concurrentielle.</strong></li>\r\n	<li><strong>Cr&eacute;ation et Gestion de la campagne</strong></li>\r\n</ul>\r\n', 1),
(115, 50, 3, 6, 2333.33, 13999.98, 'Mois', 'Gestion des rÃ©seaux sociaux', '<p>&bull; Cr&eacute;ation des comptes (si n&eacute;cessaire)<br />\r\n&bull; Animation des pages (Facebook, Instagram)<br />\r\n&bull; 5 partages par semaine sur chaquer&eacute;seau<br />\r\n&bull; cr&eacute;ation du calendrier &eacute;ditorial (1 mois)<br />\r\n&bull; d&eacute;veloppement des interactions des followers</p>\r\n', 2),
(116, 50, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 3),
(117, 51, 7, 1, 1200, 1200, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 0),
(118, 51, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 1),
(119, 52, 6, 1, 900, 900, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 0),
(120, 53, 7, 2, 450, 900, 'An', 'Renouvellement nom de domaine', '<ul>\r\n	<li>Renouvellement nom de domaine&nbsp;https://www.lesborjs.com/</li>\r\n	<li>Renouvellement nom de domaine&nbsp;https://www.lesborjshotel.com/</li>\r\n</ul>\r\n', 0),
(121, 53, 7, 1, 1200, 1200, 'An', ' GESTION NOM DE DOMAINE ET HEBERGEMENT', '<p><b>&bull; Renouvellement nom de domaine+l&#39;h&eacute;bergement</b> https://www.lesborjsdelakasbah.com/</p>\r\n', 1),
(122, 54, 6, 1, 90, 90, 'An', 'Achat Certificat Ssl', '<p><br />\r\n&nbsp;</p>\r\n', 0),
(123, 54, 6, 1, 25, 25, 'An', 'Installation et mise en place du certificat SSL', '<p><br />\r\n&nbsp;</p>\r\n', 1),
(124, 55, 11, 1, 4900, 4900, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des 72 photos&nbsp;</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 0),
(131, 59, 5, 3, 2000, 6000, 'Mois', 'RÃ©fÃ©rencement naturel Â ', '<h3>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Organiser des pages de site.</li>\r\n	<li>&nbsp;Changer le contenu.</li>\r\n	<li>&nbsp;Optimiser toutes les pages.</li>\r\n	<li>&nbsp;Etablir les &eacute;changes de lien avec des sites et des annuaires de qualit&eacute;.</li>\r\n	<li>&nbsp;08 mots cl&eacute;s.</li>\r\n	<li>&nbsp;D&eacute;veloppement du taux de transformation du site.</li>\r\n	<li>&nbsp;Rapport mensuel.</li>\r\n	<li>&nbsp;Google Map<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 2),
(126, 39, 7, 3, 1200, 3600, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<ul>\r\n	<li>NBS&nbsp;Travel</li>\r\n	<li>NBS Propri&eacute;t&eacute;</li>\r\n	<li>NBS Finance</li>\r\n</ul>\r\n', 1),
(127, 57, 15, 4, 1475, 5900, '1', 'Mise Ã  jour site internet ', '<ul>\r\n	<li><b>Modification sur le site internet</b></li>\r\n	<li><b>Am&eacute;liore la s&eacute;curit&eacute; de site internet</b></li>\r\n	<li><b>Optimiser et augmenter la vitesse de chargement de votre site web</b></li>\r\n	<li><b>Mise &agrave; jour les fonctionnalit&eacute;s du site web</b></li>\r\n	<li><b>Ajouter pop-up&nbsp;</b></li>\r\n	<li><b>R&eacute;solutions des bugs&nbsp;</b></li>\r\n	<li><b>Mise &agrave; jour l&rsquo;administration</b></li>\r\n	<li><b>R&eacute;solution des probl&egrave;mes d&#39;affichage des fichiers PDF</b></li>\r\n</ul>\r\n', 0),
(132, 59, 6, 1, 1080, 1080, 'An', 'Certificat Ssl', '<p>Installation et mise en place du certificat SSL<br />\r\n&nbsp;</p>\r\n', 3),
(133, 59, 7, 1, 1440, 1440, 'An', 'Achat nom de domaine + Achat d\'hÃ©bergement ', '<p>&bull; Achat nom de domaine + Achat d&#39;h&eacute;bergement<br />\r\n&nbsp;</p>\r\n', 4),
(134, 59, 11, 1, 5000, 5000, 'Jour/Homme', 'RÃ©alisation shooting photo ', '<ul>\r\n	<li>Prise de vue&nbsp;</li>\r\n	<li>Photographe professionnel</li>\r\n	<li>R&eacute;alisation shooting photo de produis</li>\r\n	<li>prise de photo des produits &nbsp;</li>\r\n	<li>Assistant photographe</li>\r\n	<li>Photoshop et retouche des photos&nbsp;</li>\r\n	<li>Shooting avec un fond blanc,noir,rouge</li>\r\n	<li>Shooting avec mise en place</li>\r\n</ul>\r\n', 5);

-- --------------------------------------------------------

--
-- Structure de la table `cms_langue`
--

CREATE TABLE `cms_langue` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `code` varchar(3) DEFAULT NULL,
  `flag` varchar(200) DEFAULT NULL,
  `defaut` int(11) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_langue`
--

INSERT INTO `cms_langue` (`id`, `nom`, `code`, `flag`, `defaut`, `actif`, `date_add`, `last_edit`) VALUES
(1, 'FranÃ§ais', 'fr', NULL, 1, 1, '2018-05-07', '2018-05-07'),
(2, 'Anglais', 'en', NULL, 0, 1, '2018-05-22', '2018-05-22');

-- --------------------------------------------------------

--
-- Structure de la table `cms_localisation`
--

CREATE TABLE `cms_localisation` (
  `id` int(11) NOT NULL,
  `active` int(3) DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_localisation`
--

INSERT INTO `cms_localisation` (`id`, `active`, `ordre`, `date_add`, `last_edit`) VALUES
(1, 1, 1, '2018-05-09', '2018-05-09'),
(2, 1, 2, '2018-05-09', '2018-05-09'),
(3, 1, 3, '2018-05-09', '2018-05-09');

-- --------------------------------------------------------

--
-- Structure de la table `cms_modules`
--

CREATE TABLE `cms_modules` (
  `id` int(11) NOT NULL,
  `id_module` varchar(100) NOT NULL,
  `enabled` int(11) NOT NULL,
  `installed` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `classe` varchar(30) DEFAULT NULL,
  `nom_table` varchar(30) DEFAULT NULL,
  `translated` int(11) DEFAULT NULL,
  `url` int(11) DEFAULT NULL,
  `system` int(11) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `positioned` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_modules`
--

INSERT INTO `cms_modules` (`id`, `id_module`, `enabled`, `installed`, `nom`, `classe`, `nom_table`, `translated`, `url`, `system`, `icon`, `positioned`) VALUES
(1, 'com_config', 1, 1, 'Configuration', 'config', 'config', 0, 0, 1, 'gears', 'param'),
(2, 'com_lang', 1, 1, 'Gestion des langues', 'langue', 'langue', 0, 0, 1, 'language', 'param'),
(3, 'com_login', 1, 1, 'Authentification', NULL, NULL, 0, 0, 1, 'lock', NULL),
(4, 'com_module', 1, 1, 'Gestion des modules', 'module', 'module', 0, 0, 1, 'cubes', 'param'),
(5, 'com_users', 1, 1, 'Gestion des utilisateurs', 'user', 'users', 0, 0, 1, 'user', 'param'),
(6, 'com_dashboard', 1, 1, 'Tableau de bord', NULL, NULL, 0, 0, 1, 'home', NULL),
(18, 'com_categorie', 1, 1, 'Gestion des categories', 'categorie', 'categorie', 1, 1, 0, 'list', 'side'),
(24, 'com_service', 1, 1, 'Gestion des services', 'service', 'service', 1, 1, 0, 'suitcase', 'side');

-- --------------------------------------------------------

--
-- Structure de la table `cms_payment`
--

CREATE TABLE `cms_payment` (
  `id` int(11) NOT NULL,
  `id_facture` int(11) NOT NULL,
  `montant` double DEFAULT NULL,
  `date_payment` date DEFAULT NULL,
  `methode_payment` varchar(20) DEFAULT NULL,
  `detail` varchar(250) DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `last_edit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_payment`
--

INSERT INTO `cms_payment` (`id`, `id_facture`, `montant`, `date_payment`, `methode_payment`, `detail`, `date_add`, `last_edit`) VALUES
(2, 7, 10000, '2021-01-31', 'ChÃ¨que', '0000000000', '2021-02-07 22:18:33', '2021-02-07 22:18:33'),
(3, 7, 22965, '2021-02-07', 'Virement', NULL, '2021-02-07 22:26:51', '2021-02-07 22:26:51'),
(4, 17, 3240, '2021-03-16', 'ChÃ¨que', NULL, '2021-03-23 08:36:05', '2021-03-23 08:36:05'),
(5, 18, 35100, '2021-03-02', 'ChÃ¨que', NULL, '2021-03-23 08:37:02', '2021-03-23 08:37:02'),
(6, 12, 12240, '2021-03-01', 'Traite', NULL, '2021-03-23 08:38:21', '2021-03-23 08:38:21'),
(7, 13, 1080, '2021-02-18', 'Virement', NULL, '2021-03-23 09:03:38', '2021-03-23 09:08:27'),
(8, 19, 12782.8, '2021-02-18', 'Virement', NULL, '2021-03-23 09:07:43', '2021-03-23 09:07:43'),
(9, 22, 17000, '2021-03-31', 'Virement', NULL, '2021-04-01 09:41:21', '2021-04-01 09:41:21'),
(10, 30, 2880, '2021-05-04', 'Virement', NULL, '2021-05-04 11:31:00', '2021-05-04 11:31:00'),
(11, 31, 10580.04, '2021-05-12', 'ChÃ¨que', NULL, '2021-05-12 15:52:32', '2021-05-12 15:52:32'),
(12, 26, 2280, '2021-04-27', 'Virement', NULL, '2021-05-12 15:53:15', '2021-05-12 15:53:15'),
(13, 23, 3036, '2021-04-14', 'Virement', NULL, '2021-05-12 15:53:57', '2021-05-12 15:53:57'),
(14, 9, 1440, '2021-05-12', 'Virement', NULL, '2021-05-12 15:54:38', '2021-05-12 15:54:38'),
(15, 8, 3408.012, '2021-04-12', 'Traite', NULL, '2021-05-12 15:55:06', '2021-05-24 09:46:52'),
(16, 32, 21420, '2021-05-16', 'EspÃ¨ce', NULL, '2021-05-20 15:51:01', '2021-05-20 15:51:01'),
(17, 24, 1080, '2021-05-12', 'EspÃ¨ce', NULL, '2021-05-20 16:07:45', '2021-05-20 16:07:45'),
(18, 33, 1440, '2021-05-10', 'EspÃ¨ce', NULL, '2021-05-20 16:12:02', '2021-05-20 16:12:02'),
(19, 34, 235, '2021-01-31', 'Virement', NULL, '2021-05-20 16:17:02', '2021-05-27 15:24:25'),
(20, 35, 9999.996, '2021-05-09', 'EspÃ¨ce', NULL, '2021-05-20 16:20:42', '2021-05-20 16:20:42'),
(21, 21, 1596, '2021-05-20', 'ChÃ¨que', NULL, '2021-05-20 16:22:18', '2021-05-20 16:22:18'),
(22, 36, 16000, '2021-03-31', 'Virement', NULL, '2021-05-20 16:30:29', '2021-05-20 16:30:29'),
(23, 39, 15100, '2021-03-09', 'Virement', NULL, '2021-05-21 15:52:32', '2021-05-21 15:52:32'),
(24, 38, 10000, '2021-05-21', 'ChÃ¨que', 'NÂ° 597866 // 30/06/2021', '2021-05-21 16:50:55', '2021-05-24 08:25:11'),
(25, 37, 11000, '2021-05-21', 'ChÃ¨que', 'AWB NÂ°597867 // 31/07/2021', '2021-05-21 16:54:05', '2021-05-27 09:25:19'),
(26, 37, 11000, '2021-05-21', 'ChÃ¨que', 'NÂ°597868 // 31/08/2021', '2021-05-21 16:55:01', '2021-05-21 16:55:01'),
(27, 40, 1176, '2021-02-04', 'ChÃ¨que', NULL, '2021-05-24 08:54:45', '2021-05-24 08:54:45'),
(28, 41, 1440, '2021-01-25', 'Virement', NULL, '2021-05-24 08:58:40', '2021-05-24 08:58:40'),
(29, 42, 3240, '2021-01-08', 'Virement', NULL, '2021-05-24 09:02:39', '2021-05-24 09:02:39'),
(30, 43, 2520, '2021-04-28', 'Virement', NULL, '2021-05-24 09:07:00', '2021-05-24 09:07:00'),
(31, 44, 3648, '2021-02-18', 'Virement', NULL, '2021-05-24 09:13:23', '2021-05-24 09:13:23'),
(32, 45, 7800, '2021-01-25', 'ChÃ¨que', NULL, '2021-05-24 09:21:07', '2021-05-24 09:21:07'),
(33, 46, 17160, '2020-01-30', 'ChÃ¨que', NULL, '2021-05-24 09:27:28', '2021-05-24 09:28:21'),
(34, 46, 10000, '2021-01-06', 'ChÃ¨que', NULL, '2021-05-24 09:27:53', '2021-05-24 09:27:53'),
(35, 46, 7160, '2021-02-04', 'ChÃ¨que', NULL, '2021-05-24 09:28:08', '2021-05-24 09:28:08'),
(36, 47, 5000, '2020-07-28', 'EspÃ¨ce', NULL, '2021-05-24 09:34:54', '2021-05-24 09:34:54'),
(37, 47, 7500, '2020-10-15', 'ChÃ¨que', NULL, '2021-05-24 09:35:19', '2021-05-24 09:35:19'),
(38, 47, 7500, '2020-12-02', 'Virement', NULL, '2021-05-24 09:35:42', '2021-05-24 09:35:42'),
(39, 47, 7500, '2021-01-05', 'Virement', NULL, '2021-05-24 09:36:03', '2021-05-24 09:36:03'),
(40, 48, 10000, '2021-03-04', 'ChÃ¨que', NULL, '2021-05-24 09:43:43', '2021-05-27 09:58:30'),
(41, 48, 7300, '2021-03-04', 'ChÃ¨que', NULL, '2021-05-24 09:44:16', '2021-05-24 09:44:16'),
(42, 49, 35260, '2021-04-30', 'Traite', NULL, '2021-05-24 09:49:36', '2021-05-24 09:49:36'),
(43, 50, 31280, '2021-02-09', 'ChÃ¨que', NULL, '2021-05-24 10:07:47', '2021-05-24 10:07:47'),
(44, 51, 2520, '2021-05-10', 'ChÃ¨que', NULL, '2021-05-24 10:11:04', '2021-05-24 10:11:04'),
(45, 52, 1080, '2021-01-08', 'Virement', NULL, '2021-05-24 10:15:10', '2021-05-24 10:15:10'),
(46, 27, 1080, '2021-05-26', 'ChÃ¨que', 'BP // 6894688', '2021-05-26 15:22:33', '2021-05-26 15:22:33'),
(47, 28, 1440, '2021-05-27', 'Virement', NULL, '2021-05-27 15:22:28', '2021-05-27 15:22:28'),
(48, 36, 16100, '2021-05-25', 'Virement', NULL, '2021-06-07 09:48:58', '2021-06-07 09:48:58'),
(49, 59, 22510, '2021-06-11', 'ChÃ¨que', 'BP // 4049271', '2021-06-11 17:12:44', '2021-06-11 17:12:44'),
(50, 58, 2400, '2021-06-15', 'Virement', NULL, '2021-06-15 08:34:07', '2021-06-15 08:34:07');

-- --------------------------------------------------------

--
-- Structure de la table `cms_profils`
--

CREATE TABLE `cms_profils` (
  `id` int(11) NOT NULL,
  `profil` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_profils`
--

INSERT INTO `cms_profils` (`id`, `profil`) VALUES
(1, 'Administrateur'),
(2, 'RÃ©dacteur');

-- --------------------------------------------------------

--
-- Structure de la table `cms_rappel`
--

CREATE TABLE `cms_rappel` (
  `id` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `domaine` varchar(250) DEFAULT NULL,
  `date_expir` date DEFAULT NULL,
  `remarque` text DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_rappel`
--

INSERT INTO `cms_rappel` (`id`, `id_client`, `type`, `domaine`, `date_expir`, `remarque`, `date_add`, `last_edit`) VALUES
(5, 10, 'ssl', 'www.ademiacentre.com', '2021-07-07', NULL, '2021-06-02', '2021-06-02'),
(2, 47, 'domaine', 'helloworld-agency.com', '2022-06-05', NULL, '2021-05-21', '2021-05-21'),
(3, 7, 'domaine', 'lesborjs.com et lesborjshotel.com', '2021-06-16', NULL, '2021-05-21', '2021-06-14'),
(4, 45, 'ssl', 'www.greenfitclub.fr', '2021-06-10', NULL, '2021-05-21', '2021-05-21'),
(6, 52, 'domaine', 'mluxury.ma', '2021-07-11', NULL, '2021-06-02', '2021-06-02'),
(7, 52, 'ssl', 'mluxury.ma', '2021-07-12', NULL, '2021-06-02', '2021-06-02'),
(8, 53, 'domaine', 'villa-shayanne.com', '2021-07-20', NULL, '2021-06-02', '2021-06-02'),
(9, 39, 'domaine', 'dabapneu.ma', '2021-08-13', NULL, '2021-06-02', '2021-06-02'),
(10, 50, 'domaine', 'ecoleibtissama.com', '2021-08-17', NULL, '2021-06-02', '2021-06-02');

-- --------------------------------------------------------

--
-- Structure de la table `cms_service`
--

CREATE TABLE `cms_service` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  `active` int(3) DEFAULT NULL,
  `date_add` date DEFAULT NULL,
  `last_edit` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_service`
--

INSERT INTO `cms_service` (`id`, `id_categorie`, `prix`, `ordre`, `active`, `date_add`, `last_edit`) VALUES
(1, 1, 2900, 1, 1, '2021-02-01', '2021-02-11'),
(3, 2, 2500, 2, 1, '2021-02-06', '2021-02-17'),
(4, 6, 3000, 3, 1, '2021-02-06', '2021-02-11'),
(5, 3, 2000, 3, 1, '2021-02-11', '2021-02-11'),
(6, 9, 900, 4, 1, '2021-02-11', '2021-02-11'),
(7, 8, 1200, 4, 1, '2021-02-11', '2021-02-11'),
(8, 8, 1200, 4, 1, '2021-02-11', '2021-02-11'),
(9, 10, 29000, 1, 1, '2021-02-11', '2021-02-11'),
(10, 11, 6000, 6, 1, '2021-02-11', '2021-02-11'),
(11, 4, 5000, 5, 1, '2021-02-11', '2021-02-11'),
(12, 12, 1330, 1, 1, '2021-02-11', '2021-02-11'),
(13, 13, 566.66, NULL, 1, '2021-02-16', '2021-02-16'),
(14, 14, 4000, NULL, 1, '2021-02-17', '2021-03-12'),
(15, 15, 1290, NULL, 1, '2021-03-04', '2021-03-04'),
(16, 16, 9800, NULL, 1, '2021-03-05', '2021-03-05'),
(17, 17, 364, NULL, 1, '2021-03-09', '2021-03-09'),
(18, 18, 144, NULL, 1, '2021-03-09', '2021-03-09'),
(19, 19, 9000, NULL, 1, '2021-03-09', '2021-03-09'),
(20, 20, 4000, NULL, 1, '2021-03-12', '2021-03-12'),
(21, 21, 0.77, NULL, 1, '2021-03-22', '2021-03-22'),
(22, 22, 1900, NULL, 1, '2021-03-24', '2021-03-24'),
(23, 23, 1200, NULL, 1, '2021-03-25', '2021-03-25'),
(24, 24, 25000, NULL, 1, '2021-03-31', '2021-06-14'),
(25, 25, 2000, NULL, 1, '2021-04-23', '2021-04-23'),
(26, 26, 6000, 1, 1, '2021-04-29', '2021-04-29'),
(27, 27, 1469.45, NULL, 1, '2021-05-11', '2021-05-11'),
(28, 6, 250, 33, 1, '2021-05-12', '2021-05-12'),
(29, 28, 35000, NULL, 1, '2021-06-07', '2021-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `langue` varchar(3) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `su` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `actif` int(11) DEFAULT NULL,
  `date_add` datetime DEFAULT NULL,
  `last_edit` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cms_users`
--

INSERT INTO `cms_users` (`id`, `login`, `password`, `prenom`, `nom`, `email`, `tel`, `adresse`, `langue`, `photo`, `su`, `id_profil`, `actif`, `date_add`, `last_edit`) VALUES
(1, 'admin', '9b340b026618f4b8cbd74d400b64d629a3875f92f4feb82c78dd9c09fd810556', 'Admin', 'Admin', 'support@helloworld-agency.com', '0674507162', NULL, 'fr', 'zak.jpg', 1, 1, 1, NULL, '2021-05-17 17:32:45'),
(3, 'login', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'prenom', 'nom', 'example@example.com', '1234567890', 'adresse', 'fr', NULL, 0, 1, 0, '2021-01-25 12:32:00', '2021-05-17 17:32:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cms_categorie`
--
ALTER TABLE `cms_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_client`
--
ALTER TABLE `cms_client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_config`
--
ALTER TABLE `cms_config`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_details_categorie`
--
ALTER TABLE `cms_details_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_details_localisation`
--
ALTER TABLE `cms_details_localisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_details_service`
--
ALTER TABLE `cms_details_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_devis`
--
ALTER TABLE `cms_devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_droits`
--
ALTER TABLE `cms_droits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_facture`
--
ALTER TABLE `cms_facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_item_devis`
--
ALTER TABLE `cms_item_devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_item_facture`
--
ALTER TABLE `cms_item_facture`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_langue`
--
ALTER TABLE `cms_langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_localisation`
--
ALTER TABLE `cms_localisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_modules`
--
ALTER TABLE `cms_modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_payment`
--
ALTER TABLE `cms_payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_profils`
--
ALTER TABLE `cms_profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_rappel`
--
ALTER TABLE `cms_rappel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_service`
--
ALTER TABLE `cms_service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cms_categorie`
--
ALTER TABLE `cms_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `cms_client`
--
ALTER TABLE `cms_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT pour la table `cms_details_categorie`
--
ALTER TABLE `cms_details_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `cms_details_localisation`
--
ALTER TABLE `cms_details_localisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cms_details_service`
--
ALTER TABLE `cms_details_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `cms_devis`
--
ALTER TABLE `cms_devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `cms_droits`
--
ALTER TABLE `cms_droits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT pour la table `cms_facture`
--
ALTER TABLE `cms_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `cms_item_devis`
--
ALTER TABLE `cms_item_devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT pour la table `cms_item_facture`
--
ALTER TABLE `cms_item_facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT pour la table `cms_langue`
--
ALTER TABLE `cms_langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `cms_localisation`
--
ALTER TABLE `cms_localisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cms_modules`
--
ALTER TABLE `cms_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `cms_payment`
--
ALTER TABLE `cms_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `cms_profils`
--
ALTER TABLE `cms_profils`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `cms_rappel`
--
ALTER TABLE `cms_rappel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cms_service`
--
ALTER TABLE `cms_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
