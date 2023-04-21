-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 avr. 2023 à 16:10
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filred_voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `first_name`, `email`, `password`) VALUES
(1, 'guichard', 'nicolas', 'Nickk57410@gmail.com', '$2y$10$hYJyMGx5qTpDbuZZwqQlx.wFEcKY3i9Hw9WQMS2Fm.TIO86DAP.cK');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Voiture'),
(2, 'Boxster S');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `path` text,
  `id_product` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `path`, `id_product`) VALUES
(16, 'Boxster S', 'uploads/208391_f507e3eb8fdd42d4865572d5d2e60281_mv2.webp', 1),
(17, 'Boxster S', 'uploads/208391_5263431105fa4375a3ee14a9209cf083_mv2.webp', 1),
(18, 'Boxster S', 'uploads/208391_b1e9853fff0d4ea58c665400df5e7c33_mv2.webp', 1),
(19, 'Boxster S', 'uploads/208391_fa30e8b93f0c4d96be0127fde58d6c7b_mv2.webp', 1),
(20, 'Boxster S', 'uploads/208391_66464b94275a49cbbb0ed6f688a18021_mv2.webp', 1),
(21, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_086ffbaced964a29bb04ebac2b41039b_mv2.webp', 2),
(22, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_59b625a5c2884c9ab175a7f10a22fcdc_mv2.webp', 2),
(23, 'DELTA HF INTEGRALE 16V', 'uploads/208391_092b1c00b28843c89f89d658601e20e7_mv2_d_4032_3024_s_4_2.webp', 3),
(24, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_d87a4fcd796d42c8b02b03886cd8cfcc_mv2.webp', 2),
(25, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_ac7512fa8f1f46fab5b3603b6950a8ed_mv2.webp', 2),
(27, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_9421f3d51b6144f3806166ea7a63bc12_mv2.webp', 2),
(28, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_bc8fa5cee8fa471cbc7a48165ac6cb34_mv2.webp', 2),
(29, 'Huracan 5.2 V10 LP580-2', 'uploads/208391_337f7df8a9694115af8d7b24140f5be7_mv2.webp', 2),
(30, 'DELTA HF INTEGRALE 16V', 'uploads/208391_4f29202aa76f4892b0ae1b2c63efc243_mv2_d_4032_3024_s_4_2.webp', 3),
(31, 'DELTA HF INTEGRALE 16V', 'uploads/208391_82c923ed717d4ec69b59243a15155e49_mv2_d_4032_3024_s_4_2.webp', 3),
(32, 'DELTA HF INTEGRALE 16V', 'uploads/208391_8487e4233b58429cbc56c94a43373ec1_mv2_d_4032_3024_s_4_2.webp', 3),
(33, '4.2 Spider', 'uploads/208391_828fc18162b14f07aad786d86e5937e8_mv2_d_3264_2448_s_4_2.webp', 4),
(34, 'LA FERRARI', 'uploads/208391_757915cbd6ad454a92bd4f4ea9c72738_mv2_d_3264_2448_s_4_2.webp', 5),
(35, '4.2 Spider', 'uploads/208391_7a4a9e6a949c4745adcb69784a5d920b_mv2_d_3264_2448_s_4_2.webp', 4),
(36, '4.2 Spider', 'uploads/208391_484e373ca43e4c66afb721b4deba0cfb_mv2_d_3264_2448_s_4_2.webp', 4),
(37, '4.2 Spider', 'uploads/208391_662e5326c0f1410b86f4de08127f33a3_mv2_d_3264_2448_s_4_2.webp', 4),
(38, 'LA FERRARI', 'uploads/208391_e2320c779aa048b396b5f8ba69ca43dc_mv2_d_3264_2448_s_4_2.webp', 5),
(39, 'LA FERRARI', 'uploads/208391_922a7b5d606d4534afb3b837c84b77c6_mv2_d_3264_2448_s_4_2.webp', 5),
(40, 'LA FERRARI', 'uploads/208391_7f09a3dcad374f53995a7cefc1183c73_mv2_d_3264_2448_s_4_2.webp', 5),
(41, 'LA FERRARI', 'uploads/208391_442e468418a6417ab17b255317178e29_mv2_d_3264_2448_s_4_2.webp', 5),
(42, 'V8 SPIDER VANTAGE', 'uploads/4b5985_b071dd8975dd423ca2ab7b1e96dbc03c_mv2_d_4032_3024_s_4_2.webp', 6),
(43, 'V8 SPIDER VANTAGE', 'uploads/261872_ea97e389a0254cd39be1c56695fee696_mv2.webp', 6),
(44, 'V8 SPIDER VANTAGE', 'uploads/261872_3137723a3f714fdd86fa9d1c335e1791_mv2.webp', 6),
(45, 'V8 SPIDER VANTAGE', 'uploads/261872_c49621c5d58c44f69c708d176e60ed35_mv2.webp', 6),
(46, 'V8 SPIDER VANTAGE', 'uploads/261872_895b97a1144c4178baf0bd54a283e994_mv2.webp', 6);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `builder` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `version` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `date_registration` varchar(100) DEFAULT NULL,
  `mileage` varchar(100) DEFAULT NULL,
  `fuel` varchar(100) DEFAULT NULL,
  `gearbox` varchar(100) DEFAULT NULL,
  `colorE` varchar(100) DEFAULT NULL,
  `colorI` varchar(100) DEFAULT NULL,
  `power_tax` varchar(100) DEFAULT NULL,
  `powerDIN` varchar(100) DEFAULT NULL,
  `emisCO2` varchar(100) DEFAULT NULL,
  `Ndoor` varchar(100) DEFAULT NULL,
  `Nspace` varchar(100) DEFAULT NULL,
  `guarantee` varchar(100) DEFAULT NULL,
  `optionInter` text,
  `optionExter` text,
  `safety` text,
  `id_subcategory` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_subcategory` (`id_subcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `builder`, `model`, `version`, `year`, `date_registration`, `mileage`, `fuel`, `gearbox`, `colorE`, `colorI`, `power_tax`, `powerDIN`, `emisCO2`, `Ndoor`, `Nspace`, `guarantee`, `optionInter`, `optionExter`, `safety`, `id_subcategory`) VALUES
(1, 'Boxster S', '29900.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(2, 'Huracan 5.2 V10 LP580-2', '1799000.00', 'LAMBORGHINI', 'HURACAN', '5.2 V10 LP580-2', '2017', '30/06/2017', '20559KM', 'ESSENCE', 'AUTOMATIQUE', 'BLANC', 'CUIR NOIR', '50CV', '580CV', '278G/KM', '2', '2', '6 MOIS', 'CLIMATISATION AUTOMATIQUE, SIEGES CUIR SPORT ELECTRIQUE, VITRES ELECTRIQUES, CENTRALISATION, HYFI, VOLANT SPORT MULTIFONCTION CUIR, SIEGES CHAUFFANT, GPS, ORDINATEUR DE BORD, ACCOUDOIR CENTRAL, MAIN LIBRE, USB, MP3, REGLAGE LOMBAIRE, PALETTE AU VOLANT', 'RETROVISEURS EXTERIEURS ELECTRIQUE, PDC ARRIERE ET AVANT AVEC CAMERA, SUSPENSION SPORT AVEC LEVAGE AVANT, ECLAIRAGE LED, JANTES ALUMINUM 19&quot;, BOITE PDK, ', 'ABS, ALARME, AIRBAG.', 5),
(3, 'DELTA HF INTEGRALE 16V', '34990.00', 'LANCIA', 'DELTA HF INTEGRALE 16V', 'INTERGRAL', '1991', '08/10/91', '110041KM', 'ESSENCE', 'MANUEL', 'ROUGE', 'ALCANTARA GRIS', '0', '200CV', '0', '4', '4', '6 MOIS', '.', '.', '.', 4),
(4, '4.2 Spider', '38900.00', 'MASERATI', '4.2 SPIDER', '4.2 390CV', '2002', '04/11/02', '45409KM', 'ESSENCE', 'F1', 'GRIS METAL', 'CUIR NOIR', '.', '390CV', '0', '2', '2', '6 MOIS', '.', '.', '.', 3),
(5, 'LA FERRARI', '0.00', 'FERRARI', 'LA FERRARI', '.', '.', '.', '.', '.', '.', 'ROUGE', '.', '0', '.', '0', '2', '2', '.', 'CE VEHICULE EST PAS VENDRE', '.', '.', 1),
(6, 'V8 SPIDER VANTAGE', '54900.00', 'ASTON MARTIN', 'V8 SPIDER VANTAGE', '4.2 VANTAGE', '2007', '04/09/07', '39786KM', 'ESSENCE', 'AUTOMATIQUE', 'GRIS', 'GRIS', '31CV', '385CV', '360G/KM', '2', '2', '6 MOIS', 'CLIMATISATION AUTOMATIQUE, SIEGES CUIR SPORT, TABLEAU DE BORD TOUT CUIR, VITRES ELECTRIQUES, CENTRALISATION, RADIO CD, SUSPENSION SPORT, REGULATEUR VITESSE, GPS, SIEGES CHAUFFANT.', 'CLIMATISATION AUTOMATIQUE, SIEGES CUIR SPORT, TABLEAU DE BORD TOUT CUIR, VITRES ELECTRIQUES, CENTRALISATION, RADIO CD, SUSPENSION SPORT, REGULATEUR VITESSE, GPS, SIEGES CHAUFFANT.', 'ABS, ALARME, AIRBAGS.', 6);

-- --------------------------------------------------------

--
-- Structure de la table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `id_category`) VALUES
(1, 'Ferrari', 1),
(2, 'Porsche', 1),
(3, 'Maserati', 1),
(4, 'Lancia', 1),
(5, 'Lamborghini', 1),
(6, 'Aston Martin', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `picture_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_subcategory`) REFERENCES `sub_category` (`id`);

--
-- Contraintes pour la table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
