-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 mai 2024 à 12:14
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supercar`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `lien_case` varchar(500) NOT NULL,
  `titre_case` varchar(500) NOT NULL,
  `image_case` varchar(500) NOT NULL,
  `description_case` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`lien_case`, `titre_case`, `image_case`, `description_case`) VALUES
('', '', '', ''),
('supercar_bmw.php', 'BMW', 'images/card1.png', 'Découvrez notre sélection de voiture de la marque BMW'),
('supercar_tesla.php', 'Tesla', 'images/card2.png', 'Découvrez notre sélection de voiture de la marque Tesla'),
('supercar_mercedes.php', 'Mercedes', 'images/card3.png', 'Découvrez notre sélection de voiture de la marque Mercedes'),
('supercar_porsche.php', 'Porsche', 'images/card4.png', 'Sélection de voiture de la marque Porsche bientôt disponible');

-- --------------------------------------------------------

--
-- Structure de la table `accueil_infos`
--

CREATE TABLE `accueil_infos` (
  `titre` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `bouton` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(5) NOT NULL,
  `utilisateur` varchar(200) DEFAULT NULL,
  `motdepasse` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `utilisateur`, `motdepasse`) VALUES
(1, 'jade@mail.com', '1234'),
(2, 'maeva@mail.com', '1111\r\n'),
(3, 'elisee@mail.com', '2222\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `idcontact` int(5) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `adresse_mail_contact` varchar(25) DEFAULT NULL,
  `sujet` varchar(45) DEFAULT NULL,
  `message` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idcontact`, `nom`, `prenom`, `adresse_mail_contact`, `sujet`, `message`) VALUES
(1, 'Bissessur', 'Jade', 'jade@mail.com', 'Mot de Passe', 'Bonjour,Je souhaite modifier mon mot de passe si possible...'),
(4, 'Tuckmansing', 'Ethan', 'ethan@mail.com', 'Mot de Passe', ' je veux changer mon mdp '),
(5, 'Mohit', 'Nikhil', 'nikhil@mail.com', 'Accès au compte', 'Je n\'ai plus accès a mon compte'),
(10, 'Tuckmansing', 'Ethan', 'ethan@mail.com', 'Connexion', ' Connexion ');

-- --------------------------------------------------------

--
-- Structure de la table `demande_essai`
--

CREATE TABLE `demande_essai` (
  `idessai` int(5) NOT NULL,
  `nom_utilisateur` varchar(20) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `adresse_mail_client` varchar(45) DEFAULT NULL,
  `adresse_physique_client` varchar(45) DEFAULT NULL,
  `telephone` varchar(11) NOT NULL,
  `marque` varchar(25) DEFAULT NULL,
  `modele` varchar(25) DEFAULT NULL,
  `date_debut_essai` date DEFAULT NULL,
  `heure_debut_essai` time NOT NULL,
  `heure_fin_essai` time NOT NULL,
  `statut` varchar(150) NOT NULL DEFAULT 'En cours'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `demande_essai`
--

INSERT INTO `demande_essai` (`idessai`, `nom_utilisateur`, `nom`, `prenom`, `adresse_mail_client`, `adresse_physique_client`, `telephone`, `marque`, `modele`, `date_debut_essai`, `heure_debut_essai`, `heure_fin_essai`, `statut`) VALUES
(1, 'jade', 'jade', 'lujgyt', 'jade@mail.com', 'Flacq', '12345678', 'Tesla', 'Model S', '2023-04-10', '00:00:00', '00:00:00', 'En cours'),
(2, 'mae', 'mae', 'maeva', 'maeva@mail.com', 'Curepipe', '44444444', 'BMW', 'M5 Décapotable', '2023-04-10', '00:00:00', '00:00:00', 'En cours'),
(3, 'raforce', 'Aiguille', 'Elisee', 'raforce@mail.com', 'Plage', '123445678', 'BMW', 'M5 Décapotable', '2023-04-10', '10:00:00', '15:00:00', 'En cours'),
(5, 'zad', 'biss', 'jade', 'jade15@gmail.com', 'Flacq', '57657203', 'BMW', 'M5 Décapotable', '2023-04-10', '10:00:00', '15:00:00', 'En cours'),
(8, 'ethan', 'Tuckmansing', 'Ethan', 'ethan@mail.com', 'Albion', '555 555 55', 'Tesla', 'Model X', '2023-10-10', '07:00:00', '12:30:00', 'En cours'),
(9, 'nikhil', 'Mohit', 'Nikhil', 'nikhil@mail.com', 'Curepipe', '555 555 55', 'BMW', 'M4', '2023-04-10', '07:00:00', '11:00:00', 'En cours'),
(12, 'jade', 'biss', 'jade', 'jade@mail.com', 'Flacq', '12345678', 'BMW', 'M5 Décapotable', '2023-04-10', '10:00:00', '15:00:00', 'Terminé'),
(13, 'jeancabris', 'Jean', 'Cabris', 'jean@mail.com', 'Rose-Hill', '555 555 55', 'Porsche', '911', '2024-03-19', '10:00:00', '00:30:00', 'En cours'),
(14, 'jade', 'biss', 'jade', 'jade@mail.com', 'Flacq', '12345678', 'BMW', 'M5 Décapotable', '2023-04-10', '10:00:00', '15:00:00', 'En cours');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `idevenement` int(11) NOT NULL,
  `titre` varchar(200) DEFAULT NULL,
  `soustitre` varchar(200) DEFAULT NULL,
  `description_event` varchar(500) DEFAULT NULL,
  `description_info` varchar(900) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idevenement`, `titre`, `soustitre`, `description_event`, `description_info`, `image`) VALUES
(1, 'Journée Portes Ouvertes', 'samedi 22 avril de 9h à 18h', 'Cette journée est ouverte à tous les clients potentiels qui souhaitent découvrir nos offres de location de véhicules.', 'Supercar organise une journée portes ouvertes le samedi 22 avril de 9h à 18h dans son agence située à Ebène. Cette journée est ouverte à tous les clients potentiels qui souhaitent découvrir nos offres de location de véhicules.Lors de cette journée, les visiteurs pourront rencontrer l\'équipe SUPERCAR, poser toutes leurs questions sur les différents modèles de voitures disponibles à la location ', 'images/journee-porte-ouverte-evenement.jpg'),
(2, 'Découverte Tesla Model S', 'Vendredi 2 juin de 10h à 18h', 'Venez découvrir la Tesla Model S en avant-première avant qu\'elle soit disponible à la demande d\'essai !', 'Cet événement est une opportunité pour les passionnés d\'automobiles et les curieux de découvrir en avant-première la nouvelle Tesla Model S, avant sa disponibilité pour les essais. Les participants pourront explorer la voiture, en apprendre davantage sur ses fonctionnalités et technologies, et poser des questions aux représentants de Tesla présents sur place. L\'événement peut être organisé par Tesla elle-même, un concessionnaire ou un revendeur agréé. Les personnes intéressées peuvent se présenter sur place pendant la durée de l\'événement.', 'images/teslamodelsevenement.png\r\n'),
(3, 'Reduction sur les BMW', 'Samedi 1er juillet au Lundi 31', 'Profitez d\'une réduction exceptionnelle sur les frais de la période d\'essai de tous les modèles BMW disponibles.', 'La concession automobile \"BMW Motors\" organise une promotion exceptionnelle du 1er au 31 mai, offrant une réduction de 20% sur les frais de la période d\'essai de tous les modèles BMW disponibles sur notre site. Les conseillers BMW Motors seront également présents pour répondre aux questions des clients potentiels sur les différents modèles, options de financement et autres avantages proposés par BMW. ', 'images/bmw-reduction-evenement.jpg\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_client` int(5) NOT NULL,
  `nom_utilisateur` varchar(30) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `adresse_mail_client` varchar(30) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `mot_de_passe` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_client`, `nom_utilisateur`, `nom`, `prenom`, `adresse_mail_client`, `telephone`, `mot_de_passe`) VALUES
(1, 'jade', 'biss', 'jade', 'jade@mail.com', '12345678', '1234'),
(2, 'supertoto', 'supertoto', 'supertoto', 'toto@mail.com', '87654321', 'password'),
(3, 'supertest', 'nomtest', 'prenomtest', 'test@mail.com', '09876543', 'test'),
(4, 'nikss', 'mohit', 'nikhil', 'nikhil@mail.com', '555555555', '12345'),
(5, 'mae', 'dora', 'maeva', 'maeva@mail.com', '4444 4444', '1111'),
(6, 'ethan', 'Tuckmansing', 'Ethan', 'ethan@mail.com', '555555555', '3333'),
(7, 'jeancabris', 'Cabris', 'Jean', 'jean@mail.com', '57480923', '4444');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

CREATE TABLE `visites` (
  `id` int(11) NOT NULL,
  `adresse_ip` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `visites`
--

INSERT INTO `visites` (`id`, `adresse_ip`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::2'),
(5, '::2'),
(6, '::3'),
(7, '::1'),
(8, '::4'),
(15, '::1'),
(16, '::5'),
(17, '::1'),
(18, '::6'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1'),
(24, '::1'),
(25, '::1'),
(26, '::1'),
(27, '::1'),
(28, '::1'),
(29, '::1'),
(30, '::1'),
(31, '::1'),
(32, '::1'),
(33, '::1'),
(34, '::1'),
(35, '::1'),
(36, '::1'),
(37, '::1'),
(38, '::1'),
(39, '::1'),
(40, '::1'),
(41, '::1'),
(42, '::1'),
(43, '::1'),
(44, '::1'),
(45, '::1'),
(46, '::1'),
(47, '::1'),
(48, '::1'),
(49, '::1'),
(50, '::1'),
(51, '::1'),
(52, '::1'),
(53, '::1'),
(54, '::1'),
(55, '::1'),
(56, '::1'),
(57, '::1'),
(58, '::1'),
(59, '::1'),
(60, '::1'),
(61, '::1'),
(62, '::1'),
(63, '::1'),
(64, '::1'),
(65, '::1'),
(66, '::1'),
(67, '::1'),
(68, '::1'),
(69, '::1'),
(70, '::1'),
(71, '::1'),
(72, '::1'),
(73, '::1'),
(74, '::1'),
(75, '::1'),
(76, '::1'),
(77, '::1'),
(78, '::1'),
(79, '::1'),
(80, '::1'),
(81, '::1'),
(82, '::1'),
(83, '::1'),
(84, '::1'),
(85, '::1'),
(86, '::1'),
(87, '::1'),
(88, '::1'),
(89, '::1'),
(90, '::1'),
(91, '::1'),
(92, '::1'),
(93, '::1'),
(94, '::1'),
(95, '::1'),
(96, '::1'),
(97, '::1'),
(98, '::1'),
(99, '::1'),
(100, '::1'),
(101, '::1'),
(102, '::1'),
(103, '::1'),
(104, '::1'),
(105, '::1'),
(106, '::1'),
(107, '::1'),
(108, '::1'),
(109, '::1'),
(110, '::1'),
(111, '::1'),
(112, '::1'),
(113, '::1'),
(114, '::1'),
(115, '::1'),
(116, '::1'),
(117, '::1'),
(118, '::1'),
(119, '::1'),
(120, '::1'),
(121, '::1'),
(122, '::1'),
(123, '::1'),
(124, '::1'),
(125, '::1'),
(126, '::1'),
(127, '::1'),
(128, '::1'),
(129, '::1'),
(130, '::1'),
(131, '::1'),
(132, '::1'),
(133, '::1'),
(134, '::1'),
(135, '::1'),
(136, '::1'),
(137, '::1'),
(138, '::1'),
(139, '::1'),
(140, '::1'),
(141, '::1'),
(142, '::1'),
(143, '::1'),
(144, '::1'),
(145, '::1'),
(146, '::1'),
(147, '::1'),
(148, '::1'),
(149, '::1'),
(150, '::1'),
(151, '::1'),
(152, '::1'),
(153, '::1'),
(154, '::1'),
(155, '::1'),
(156, '::1'),
(157, '::1'),
(158, '::1'),
(159, '::1'),
(160, '::1'),
(161, '::1'),
(162, '::1'),
(163, '::1'),
(164, '::1'),
(165, '::1'),
(166, '::1'),
(167, '::1'),
(168, '::1'),
(169, '::1'),
(170, '::1'),
(171, '::1'),
(172, '::1'),
(173, '::1'),
(174, '::1'),
(175, '::1'),
(176, '::1'),
(177, '::1'),
(178, '::1'),
(179, '::1'),
(180, '::1'),
(181, '::1'),
(182, '::1'),
(183, '::1'),
(184, '::1'),
(185, '::1'),
(186, '::1'),
(187, '::1'),
(188, '::1'),
(189, '::1'),
(190, '::1'),
(191, '::1'),
(192, '::1'),
(193, '::1'),
(194, '::1'),
(195, '::1'),
(196, '::1'),
(197, '::1'),
(198, '::1'),
(199, '::1'),
(200, '::1'),
(201, '::1'),
(202, '::1'),
(203, '::1'),
(204, '::1'),
(205, '::1'),
(206, '::1'),
(207, '::1'),
(208, '::1'),
(209, '::1'),
(210, '::1'),
(211, '::1'),
(212, '::1'),
(213, '::1'),
(214, '::1'),
(215, '::1'),
(216, '::1'),
(217, '::1'),
(218, '::1'),
(219, '::1'),
(220, '::1'),
(221, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `idvoiture` int(5) NOT NULL,
  `marque` varchar(20) DEFAULT NULL,
  `modele` varchar(30) DEFAULT NULL,
  `annee` varchar(25) DEFAULT NULL,
  `description1` varchar(85) DEFAULT NULL,
  `description` varchar(465) DEFAULT NULL,
  `prix` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`idvoiture`, `marque`, `modele`, `annee`, `description1`, `description`, `prix`, `image`) VALUES
(1, 'BMW', 'M5 Décapotable', '2018', 'La BMW M5 décapotable est une berline de luxe sportive produite par le constructeur a', 'La BMW M5 décapotable est une berline de luxe sportive produite par le constructeur automobile allemand BMW. Elle est également équipée d\'un châssis et d\'une suspension améliorés pour une meilleure tenue de route et une meilleure maniabilité. L\'intérieur de la BMW M5 est luxueux et sportif, avec des sièges sport, un volant en cuir et un système audio haut de gamme. Elle est conçue pour les conducteurs qui apprécient les performances, le confort et le style.', '147.3', 'images\\bmw-m5.png'),
(2, 'BMW', 'M5', '2018', 'La BMW M5 décapotable est une berline de luxe sportive produite par le constructeur a', 'La BMW M5 décapotable est une berline de luxe sportive produite par le constructeur automobile allemand BMW. Elle est également équipée d\'un châssis et d\'une suspension améliorés pour une meilleure tenue de route et une meilleure maniabilité. L\'intérieur de la BMW M5 est luxueux et sportif, avec des sièges sport, un volant en cuir et un système audio haut de gamme. Elle est conçue pour les conducteurs qui apprécient les performances, le confort et le style.', '135.3', 'images\\franklin1.png'),
(3, 'BMW', 'M4', '2019', 'La BMW M4 possède un design audacieux et une expérience de conduite exceptionelle', 'La BMW M4 est une voiture de sport de luxe qui incarne l\'élégance, la puissance et la performance. Elle a un design aérodynamique et agressif, avec des lignes épurées et des angles prononcés qui reflètent sa vitesse et son dynamisme. La BMW M4 a une suspension sportive et une direction précise qui permettent une manipulation agile et réactive sur les routes. C’est une voiture de sport de luxe impressionnante, qui offre une performance exceptionnelle, un design ', '70.758', 'images/bmw-m4-2019.png'),
(4, 'BMW', 'I8', '2019', 'La BMW I8 est conçue pour les conducteurs qui apprécient la performance et les design', 'La BMW i8 est une voiture de sport hybride rechargeable. La i8 a un design aérodynamique distinctif qui reflète son caractère sportif et futuriste, offrant des performances exceptionnelles et une expérience de conduite unique. Elle est conçue pour les conducteurs qui apprécient la performance et la technologie avancée, tout en étant soucieux de l\'environnement.\r\n', '145.950', 'images/bmw-i8-2019.png'),
(5, 'BMW', 'M2 Coupé ', '2021', 'La BMW M2 Coupé est une voiture de sport possédant un design moderne et agressif.\r\n\r\n', 'La BMW M2 Coupé est une voiture de sport haut de gamme. Elle est conçue pour offrir des performances de conduite exceptionnelles et une expérience de conduite dynamique. Possédant un design sportif et agressif, avec une carrosserie compacte et des lignes épurées, elle est également équipée d\'une suspension sportive, d\'un système de freinage haute performance et d\'un différentiel arrière à glissement limité pour une meilleure tenue de route et une meilleure mani', '81.100', 'images/bmw-m2-coupe-white-car.png\r\n'),
(6, 'BMW', 'X5 M Sport', '2018', 'Le BMW X5 M Sport est un SUV sportive pour les amateurs de voitures performantes.', 'Le BMW X5 M Sport est un SUV de luxe sportif produit par le constructeur automobile allemand BMW. Il est conçu pour offrir une performance exceptionnelle ainsi qu\'un confort de conduite élevé. Le BMW X5 M Sport possède un design élégant et athlétique, avec une carrosserie imposante et des lignes épurées. Il est parfait pour les conducteurs qui cherchent à allier la puissance et le style dans leur expérience de conduite quotidienne.\r\n', '159.300', 'images/bmw-x5msport-2022.png'),
(7, 'Mercedes', 'Benz AMG C63 Coupe', '2016', 'La Mercedes-AMG C63 est une voiture de sport luxueuses et performante.', 'La Mercedes-AMG C63 2016 est une voiture de sport haut de gamme produite par le constructeur automobile allemand Mercedes-Benz. Elle est conçue pour offrir une performance de conduite exceptionnelle ainsi qu\'un style distinctif et agressif. Le design extérieur de la Mercedes-AMG C63 Coupé 2016 est à la fois élégant et agressif. Elle est conçue pour les conducteurs qui apprécient les performances, le confort et le style.', '72.000', 'images/mercedes-benz-amgc63-2016.png'),
(8, 'Mercedes', 'Benz C 300', '2018', 'La Mercedes C300 est une berline de luxe avec un design élégant et raffiné.', 'La Mercedes C300 est une berline de luxe produite par le constructeur automobile allemand Mercedes-Benz. Le design extérieur de la Mercedes C300 est élégant et raffiné, avec des lignes fluides et des courbes douces. En termes de performance de conduite, la Mercedes C300 offre une conduite confortable et souple. Elle dispose également d\'un système ', '56.806', 'images/mercedes-benz-c300-2018.png'),
(9, 'Mercedes', 'Benz Classe C', '2016', 'La Mercedes Benz Classe C est conçue pour les conducteurs qui apprécient la performan', 'La Mercedes Classe C 2016 est une berline de luxe produite par le constructeur automobile allemand Mercedes-Benz. Le design extérieur de la Mercedes Classe C 2016 est élégant et sophistiqué, avec des lignes fluides et des courbes douces.En termes de performance de conduite, la Mercedes Classe C 2016 offre une conduite confortable et souple. Elle dispose également d\'un système de suspension adaptatif pour une meilleure tenue de route et une meilleure maniabilité', '32.300', 'images/mercedes-benz-classc-2016.png'),
(10, 'Mercedes', 'Benz GLA', '2015', 'La Mercedes Benz GLA est conçue pour les conducteurs qui apprécient le confort et le ', 'La Mercedes Benz GLA 2015 est un SUV compact de luxe produit par le constructeur automobile allemand Mercedes-Benz. Le design extérieur de la Mercedes Benz GLA 2015 est sportif et élégant, avec des lignes dynamiques et une posture athlétique. Elle dispose également d\'un système de suspension adaptatif pour une meilleure tenue de route et une meilleure maniabilité. Elle est conçue pour les conducteurs qui apprécient le confort et le luxe.\r\n', '45.299', 'images/mercedes-benz-gla-2015.png'),
(11, 'Mercedes', 'Benz SL', '2019', 'La Mercedes SL est une voiture de sport avec un design élégant offrant une expérience', 'La Mercedes-Benz SL est une voiture de sport de luxe fabriquée par le constructeur allemand Mercedes-Benz. La SL est une voiture emblématique de la marque. Le modèle de l\'année 2019 de la SL est un cabriolet biplace avec un toit escamotable en dur. La SL 2019 dispose d\'un intérieur élégant et confortable avec des sièges en cuir. Elle est conçue pour les conducteurs qui apprécient le luxe que propose la gamme.', '168.700', 'images/mercedes-benz-sl-2019.png'),
(12, 'Tesla', 'Model X', '2021', 'La Tesla Model X est un SUV électrique de luxe avec une autonomie et une performance ', 'La Tesla Model X est un SUV électrique de luxe fabriqué par le constructeur automobile américain Tesla. La version 2021 de la Model X présente plusieurs améliorations par rapport aux modèles précédents. L\'intérieur de la Model X 2021 est spacieux et moderne, avec une grande tablette tactile au centre du tableau de bord qui contrôle la plupart des fonctions du véhicule. Elle est une voiture électrique de luxe avec une autonomie et une performance impressionnante', '141.990', 'images/tesla-modelx-2021.png'),
(13, 'Tesla', 'Model S', '2015', 'La Tesla Model S est une berline électrique de luxe spacieuse et performante.', 'La Tesla Model S est une berline électrique de luxe produite par le constructeur automobile américain Tesla. La version de 2015 de la Model S était l\'un des modèles les plus populaires de la gamme. L\'intérieur de la Model S 2015 était spacieux et moderne, avec un grand écran tactile central qui contrôlait la plupart des fonctions du véhicule. La voiture était également équipée d\'un système de toit en verre panoramique qui offrait une vue dégagée sur le ciel. El', '114.700', 'images/tesla-models-2015.png'),
(14, 'Porsche', '911', '2016', 'La Porsche 911 convertible de 2016 incarne l\'essence du luxe sportif et de l\'ingénie', 'La Porsche 911 convertible de 2016 incarne l\'essence du luxe sportif et de l\'ingénierie de pointe. Cette voiture emblématique, produite par le célèbre constructeur automobile allemand Porsche, allie élégance et performance de manière inégalée.L\'intérieur de la Porsche 911 convertible de 2016 est une fusion parfaite entre le luxe et le sport. La marque Porsche, séduisant les conducteurs qui recherchent la quintessence du luxe, de la performance et du style. ', '147.9', 'images\\porsche-911-convertible-2016.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`);

--
-- Index pour la table `demande_essai`
--
ALTER TABLE `demande_essai`
  ADD PRIMARY KEY (`idessai`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`idevenement`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `visites`
--
ALTER TABLE `visites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`idvoiture`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `idcontact` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `demande_essai`
--
ALTER TABLE `demande_essai`
  MODIFY `idessai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `idevenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id_client` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `visites`
--
ALTER TABLE `visites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `idvoiture` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
