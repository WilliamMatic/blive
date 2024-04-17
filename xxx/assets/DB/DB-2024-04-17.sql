-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Listage de la structure de table blive. tb_abonne
CREATE TABLE IF NOT EXISTS `tb_abonne` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` text ,
  `dateabonnement` date DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_abonne : ~0 rows (environ)

-- Listage de la structure de table blive. tb_admin
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text ,
  `telephone` text ,
  `email` text ,
  `avatar` text ,
  `pwd` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_admin : ~2 rows (environ)
INSERT INTO `tb_admin` (`id`, `nom`, `telephone`, `email`, `avatar`, `pwd`, `status`) VALUES
	(1, 'Willyam', '0811552166', 'ngutshinsisili@gmail.com', 'will.jpg', '4255cb842e55f2d9b11720ee9c5b87a61960d4533f352e348d77d8983585900d6091ad138b7c5145f3d05a0c807445d33ad9cdd9458ed4494ce46ce23eddf60a', 1),
	(2, 'Héritier bomfima', '0832329099', 'heritierbomfima@gmail.com', 'heritierbomfima@gmail.com_65f6bd3a66dc5.jpg', '902062dc8289d4473c026a16304e4fcae2a0260cf7edfc767a8a635ab4ce1b3db41204f9ef83cb850ca77e5bef5b358d90f8ba0568db631ff245b37bff672aaf', 0);

-- Listage de la structure de table blive. tb_astuce
CREATE TABLE IF NOT EXISTS `tb_astuce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` text ,
  `youtube` text ,
  `price` int DEFAULT NULL,
  `secteur` int DEFAULT NULL,
  `contenue` text ,
  `admin` int DEFAULT NULL,
  `datepublish` date DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `avatar` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_astuce : ~0 rows (environ)
INSERT INTO `tb_astuce` (`id`, `titre`, `youtube`, `price`, `secteur`, `contenue`, `admin`, `datepublish`, `date_event`, `avatar`, `status`) VALUES
	(1, 'Moise mbiye concert Stade de martyrs 19 mai 2024', 'HVMOQyh9fSg', 300, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-04-17', '2024-05-19', '1_661fe11f60ebc.jpg', 1),
	(2, 'Résumé FC Barcelone / Paris SG - Champions League 2023/24 (1/4 de finale retour)', 'dBexH3BKDSE', 150, 1, 'Le PSG a ensuite laisser passer quelques heures avant de récidiver. Cette nuit, le club de la capitale a repris un montage réalisé par les Blaugrana, où l&#039;on voyait le maillot catalan porté par Mona Lisa dans le tableau de La Joconde, au musée du Louvre. Paris a détourné ce premier montage, en ajoutant, à la droite de ce célèbre tableau, un autre tableau, réalisé à Barcelone en 2024 et intitulé &quot;La Bataille de Montjuïc&quot;. Ce tableau représente une photo géante du défenseur central (ou milieu de terrain défensif) international brésilien Marquinhos (29 ans), capitaine du Paris Saint-Germain, qui montre toute sa hargne. D&#039;autres publications ont ensuite suivi, jusqu&#039;à ce mercredi matin, concernant notamment Kylian Mbappé. L&#039;attaquant polyvalent international français (25 ans), auteur d&#039;un doublé, s&#039;était déjà montré décisif, par le passé, contre ce même club. En 2020-2021, l&#039;international français avait notamment inscrit un triplé au Camp Nou.', 1, '2024-04-17', '2024-04-19', '1_661ffd613f2c1.jpg', 1);

-- Listage de la structure de table blive. tb_avatar
CREATE TABLE IF NOT EXISTS `tb_avatar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `avatar` text ,
  `datepublish` date DEFAULT NULL,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_avatar : ~0 rows (environ)

-- Listage de la structure de table blive. tb_candidat
CREATE TABLE IF NOT EXISTS `tb_candidat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text ,
  `datenaiss` date DEFAULT NULL,
  `phone` text ,
  `email` text ,
  `salaire` text ,
  `avatar` text ,
  `password` text ,
  `profil` text ,
  `country` text ,
  `city` text ,
  `secteur` text ,
  `secteur_id` int NOT NULL,
  `type_candidat` tinyint DEFAULT '0',
  `status` tinyint DEFAULT '1',
  `ville` text ,
  `faculte` text ,
  `annee` text ,
  `niveau` text ,
  `adresse` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 ;

-- Listage des données de la table blive.tb_candidat : ~0 rows (environ)

-- Listage de la structure de table blive. tb_competence
CREATE TABLE IF NOT EXISTS `tb_competence` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `competences` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 ;

-- Listage des données de la table blive.tb_competence : ~58 rows (environ)
INSERT INTO `tb_competence` (`id`, `candidat`, `competences`) VALUES
	(2, 2, 'Html 5'),
	(3, 2, 'Css 3'),
	(4, 2, 'Javascript'),
	(5, 2, 'Php'),
	(6, 2, 'Symphonie'),
	(7, 2, 'React native'),
	(8, 2, 'React js'),
	(9, 2, 'UML'),
	(10, 2, 'MySQL'),
	(11, 2, 'SQL'),
	(12, 2, 'MongoDB'),
	(13, 2, 'Next Js'),
	(14, 2, 'Node Js'),
	(17, 14, 'Photographe'),
	(18, 14, 'Vidéaste'),
	(19, 14, 'Cameraman'),
	(20, 16, 'Logo'),
	(21, 16, 'AF.A4'),
	(22, 16, 'AF.A3'),
	(23, 16, 'InDesign'),
	(28, 18, 'Maquillage soirée'),
	(29, 18, 'Prestige'),
	(30, 18, 'Maquillage simple'),
	(31, 18, 'Maquillage civil'),
	(32, 18, 'Maquillage coutumier'),
	(33, 18, 'Maquillage religieux'),
	(34, 19, 'Photographe'),
	(35, 19, 'Cameraman'),
	(37, 19, 'Vidéaste'),
	(43, 21, 'Maquillage simple'),
	(44, 21, 'Maquillage civil'),
	(45, 21, 'Maquillage coutumier'),
	(46, 21, 'Maquillage religieux et dansante'),
	(47, 21, 'Prestige'),
	(49, 21, 'Maquillage soirEE'),
	(50, 22, 'Maquillage soirée'),
	(51, 22, 'Prestige'),
	(52, 22, 'Maquillage simple'),
	(53, 22, 'Coiffure rasta'),
	(54, 22, 'Coiffure Ecailles'),
	(55, 22, 'Coiffure cordelette'),
	(56, 23, 'Photographe'),
	(58, 23, 'Cameraman'),
	(59, 23, 'VidEaste'),
	(60, 24, 'VidEaste'),
	(61, 24, 'Photographe'),
	(62, 24, 'Cameraman'),
	(64, 26, 'Photographe'),
	(65, 26, 'Vidéaste'),
	(66, 26, 'Réalisateur'),
	(67, 27, 'Designer'),
	(68, 28, 'Designer'),
	(69, 29, 'Photographe'),
	(70, 29, 'Réalisateur'),
	(71, 29, 'VidEaste'),
	(72, 29, 'Designer'),
	(73, 30, 'Maquilleuse'),
	(74, 30, 'Coiffeuse');

-- Listage de la structure de table blive. tb_competiton
CREATE TABLE IF NOT EXISTS `tb_competiton` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` text,
  `annee` text,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_competiton : ~0 rows (environ)

-- Listage de la structure de table blive. tb_contact
CREATE TABLE IF NOT EXISTS `tb_contact` (
  `nom` text ,
  `email` text ,
  `sujet` text ,
  `phone` text ,
  `message` text ,
  `status` tinyint DEFAULT '0'
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_contact : ~0 rows (environ)

-- Listage de la structure de table blive. tb_contrant
CREATE TABLE IF NOT EXISTS `tb_contrant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 ;

-- Listage des données de la table blive.tb_contrant : ~8 rows (environ)
INSERT INTO `tb_contrant` (`id`, `designation`, `status`) VALUES
	(2, 'Contrat à durée indéterminée (CDI)', 1),
	(3, 'Contrat à Durée Déterminée (CDD)', 1),
	(4, 'Contrat de Mission (Intérim)', 1),
	(5, 'Contrat de Travail Temporaire (CDTT)', 1),
	(6, 'Contrat de Travail à Temps Partiel', 1),
	(7, 'Contrat d&amp;#039;Apprentissage', 1),
	(8, 'Contrat de Professionnalisation', 1),
	(9, 'Contrat Freelance (ou Indépendant)', 1);

-- Listage de la structure de table blive. tb_education
CREATE TABLE IF NOT EXISTS `tb_education` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `etablissement` text ,
  `titre` text ,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_education : ~0 rows (environ)
INSERT INTO `tb_education` (`id`, `candidat`, `etablissement`, `titre`, `debut`, `fin`) VALUES
	(2, 2, 'Cameskin', 'Meilleur développeur', '2020-10-10', '2020-10-15');

-- Listage de la structure de table blive. tb_experience
CREATE TABLE IF NOT EXISTS `tb_experience` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `societe` text ,
  `poste` text ,
  `contrant` text ,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_experience : ~0 rows (environ)
INSERT INTO `tb_experience` (`id`, `candidat`, `societe`, `poste`, `contrant`, `debut`, `fin`) VALUES
	(2, 2, 'Pnam', 'Informaticien full', 'CDI', '2021-10-03', '2023-10-12');

-- Listage de la structure de table blive. tb_langue
CREATE TABLE IF NOT EXISTS `tb_langue` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `langue` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 ;

-- Listage des données de la table blive.tb_langue : ~34 rows (environ)
INSERT INTO `tb_langue` (`id`, `candidat`, `langue`) VALUES
	(2, 2, 'Anglais'),
	(3, 2, 'Français'),
	(4, 2, 'Lingala'),
	(5, 6, 'FRANCAIS'),
	(7, 6, 'LINGALA'),
	(8, 6, 'SWAHILI'),
	(10, 13, 'Français'),
	(11, 13, 'Lingala'),
	(12, 14, 'Français'),
	(13, 14, 'Lingala'),
	(14, 16, 'Français'),
	(15, 16, 'Lingala'),
	(16, 17, 'Français'),
	(17, 17, 'Lingala'),
	(18, 18, 'Français'),
	(19, 18, 'Lingala'),
	(20, 19, 'Français'),
	(21, 19, 'Lingala'),
	(22, 21, 'Français'),
	(23, 21, 'Lingala'),
	(24, 23, 'Français'),
	(25, 23, 'Lingala'),
	(26, 24, 'Français'),
	(27, 24, 'Lingala'),
	(28, 25, 'Français'),
	(30, 26, 'Français'),
	(31, 26, 'Lingala'),
	(32, 27, 'Français'),
	(33, 27, 'Lingala'),
	(34, 28, 'Français'),
	(35, 28, 'Français'),
	(36, 28, 'Lingala'),
	(37, 29, 'Français'),
	(38, 29, 'Lingala');

-- Listage de la structure de table blive. tb_live
CREATE TABLE IF NOT EXISTS `tb_live` (
  `id` int NOT NULL AUTO_INCREMENT,
  `liveid` text,
  `liveprice` int DEFAULT NULL,
  `datelive` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_live : ~0 rows (environ)

-- Listage de la structure de table blive. tb_message
CREATE TABLE IF NOT EXISTS `tb_message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sujet` text ,
  `nom` text ,
  `email` text ,
  `telephone` text ,
  `message` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 ;

-- Listage des données de la table blive.tb_message : ~5 rows (environ)
INSERT INTO `tb_message` (`id`, `sujet`, `nom`, `email`, `telephone`, `message`, `status`) VALUES
	(1, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(2, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(3, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(4, 'ccc', 'xxx', NULL, 'ccc', 'cc', 0),
	(5, 'ccc', 'xxx', NULL, 'ccc', 'xxxxxxxxxxx', 0);

-- Listage de la structure de table blive. tb_newsletter
CREATE TABLE IF NOT EXISTS `tb_newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255)  DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 ;

-- Listage des données de la table blive.tb_newsletter : ~4 rows (environ)
INSERT INTO `tb_newsletter` (`id`, `email`) VALUES
	(9, ''),
	(7, 'lkanundeyi@gmail.com'),
	(13, 'mardochembodisa4@gmail.com'),
	(5, 'ngutshinsisili@gmail.com');

-- Listage de la structure de table blive. tb_paiement
CREATE TABLE IF NOT EXISTS `tb_paiement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `montpaie` int DEFAULT NULL,
  `datepaie` date DEFAULT NULL,
  `liveid` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_paiement : ~0 rows (environ)

-- Listage de la structure de table blive. tb_pays
CREATE TABLE IF NOT EXISTS `tb_pays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_pays : ~0 rows (environ)
INSERT INTO `tb_pays` (`id`, `designation`, `status`) VALUES
	(2, 'RDCongo', 1);

-- Listage de la structure de table blive. tb_porfolio
CREATE TABLE IF NOT EXISTS `tb_porfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `porfolio` text ,
  `extension` tinytext  NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=218 ;

-- Listage des données de la table blive.tb_porfolio : ~179 rows (environ)
INSERT INTO `tb_porfolio` (`id`, `candidat`, `porfolio`, `extension`) VALUES
	(6, 2, '65f813c3e5994.jpeg', ''),
	(7, 2, '65f813c3e63fe.jpeg', ''),
	(8, 2, '65f813c3e77be.jpeg', ''),
	(9, 2, '65f815e583539.jpeg', ''),
	(10, 13, '65ff03ad681e0.jpg', ''),
	(11, 13, '65ff053be57b5.jpg', ''),
	(12, 13, '65ff0609da137.jpg', ''),
	(14, 13, '65ff10a3e419d.jpg', ''),
	(15, 13, '65ff1234465e3.mp4', ''),
	(16, 13, '65ff15277459a.jpg', ''),
	(17, 14, '65ff1aea5bb8d.jpg', ''),
	(18, 14, '65ff1bc22666c.jpg', ''),
	(19, 14, '65ff1bc226a74.jpg', ''),
	(20, 14, '65ff1bc226efe.jpg', ''),
	(21, 14, '65ff1bc2270ec.jpg', ''),
	(22, 14, '65ff1bc2272b2.jpg', ''),
	(23, 14, '65ff1bc227477.jpg', ''),
	(24, 14, '65ff1bc227605.jpg', ''),
	(25, 14, '65ff1bc22777a.jpg', ''),
	(26, 14, '65ff1bc227990.jpg', ''),
	(27, 14, '65ff1bc227b3c.jpg', ''),
	(28, 14, '65ff1bc227cda.jpg', ''),
	(29, 14, '65ff1bc227e6a.jpg', ''),
	(30, 14, '65ff1bc228018.jpg', ''),
	(31, 16, '65ff26cb3bc3c.jpg', ''),
	(32, 16, '65ff26cb4365d.jpg', ''),
	(33, 16, '65ff26cb437ca.jpg', ''),
	(34, 16, '65ff26cb438f8.jpg', ''),
	(35, 16, '65ff26cb43a27.jpg', ''),
	(36, 16, '65ff26cb44228.jpg', ''),
	(37, 16, '65ff26cb4432a.jpg', ''),
	(38, 16, '65ff26cb4441e.jpg', ''),
	(39, 16, '65ff26cb44527.jpg', ''),
	(40, 16, '65ff26cb4461b.jpg', ''),
	(41, 16, '65ff26cb446fe.jpg', ''),
	(53, 18, '65ff49f374c5c.jpg', 'jpg'),
	(54, 18, '65ff49f374e43.jpg', 'jpg'),
	(55, 18, '65ff49f375042.jpg', 'jpg'),
	(58, 19, '65fff53383073.jpg', 'jpg'),
	(59, 19, '65fff5338a70c.jpg', 'jpg'),
	(60, 19, '65fff5338a94e.jpg', 'jpg'),
	(61, 19, '65fff5338ab39.jpg', 'jpg'),
	(62, 19, '65fff5338ad17.jpg', 'jpg'),
	(63, 19, '65fff5338af1f.jpg', 'jpg'),
	(64, 19, '65fff5338b0df.jpg', 'jpg'),
	(65, 19, '65fff5338b309.jpg', 'jpg'),
	(66, 19, '65fff5338b533.jpg', 'jpg'),
	(67, 19, '65fff5338b786.jpg', 'jpg'),
	(68, 19, '65fff5338bae4.jpg', 'jpg'),
	(69, 19, '65fff5338bc8c.jpg', 'jpg'),
	(70, 21, '66000854a73a4.jpg', 'jpg'),
	(71, 21, '66000854a7739.jpg', 'jpg'),
	(72, 21, '66000854a78f6.jpg', 'jpg'),
	(73, 21, '66000854a7acd.jpg', 'jpg'),
	(74, 21, '66000854a7c98.jpg', 'jpg'),
	(75, 21, '66000854a7e51.jpg', 'jpg'),
	(76, 21, '66000854a8008.jpg', 'jpg'),
	(77, 21, '66000854a8177.jpg', 'jpg'),
	(78, 21, '66000854a82e6.jpg', 'jpg'),
	(79, 21, '66000854a88b8.jpg', 'jpg'),
	(80, 21, '66000854a8aad.jpg', 'jpg'),
	(81, 22, '66000d166eb79.jpg', 'jpg'),
	(82, 22, '66000d166ee96.jpg', 'jpg'),
	(83, 22, '66000d166efdb.jpg', 'jpg'),
	(84, 22, '66000d166f10f.jpg', 'jpg'),
	(85, 22, '66000d166f245.jpg', 'jpg'),
	(86, 22, '66000d166f379.jpg', 'jpg'),
	(87, 22, '66000d166f6d9.jpg', 'jpg'),
	(88, 22, '66000d166f80c.jpg', 'jpg'),
	(89, 22, '66000d166f90c.jpg', 'jpg'),
	(90, 22, '66000d166fa04.jpg', 'jpg'),
	(91, 22, '66000d166faf7.jpg', 'jpg'),
	(92, 22, '66000d166fbef.jpg', 'jpg'),
	(93, 22, '66000d166fd2b.jpg', 'jpg'),
	(94, 22, '66000d166fe26.jpg', 'jpg'),
	(95, 22, '66000d166ff1c.jpg', 'jpg'),
	(96, 22, '66000d167000f.jpg', 'jpg'),
	(97, 23, '660016876aaf4.jpg', 'jpg'),
	(98, 23, '660016876b04b.jpg', 'jpg'),
	(99, 23, '660016876b1f9.jpg', 'jpg'),
	(100, 23, '660016876b371.jpg', 'jpg'),
	(101, 23, '660016876b4f4.jpg', 'jpg'),
	(102, 23, '660016876b66b.jpg', 'jpg'),
	(103, 23, '660016876b7d4.jpg', 'jpg'),
	(104, 23, '660016876b93a.jpg', 'jpg'),
	(105, 23, '660016876bad3.jpg', 'jpg'),
	(106, 23, '660016876bc57.jpg', 'jpg'),
	(107, 24, '66001fa4ca53c.jpg', 'jpg'),
	(108, 24, '66001fa4cfa4a.jpg', 'jpg'),
	(109, 24, '66001fa4cfc81.jpg', 'jpg'),
	(110, 24, '66001fa4d0268.jpg', 'jpg'),
	(111, 24, '66001fa4d04d7.jpg', 'jpg'),
	(112, 24, '66001fa4d06c2.jpg', 'jpg'),
	(113, 24, '66001fa4d0855.jpg', 'jpg'),
	(114, 24, '66001fa4d0acc.jpg', 'jpg'),
	(121, 24, '66001fa4d17de.jpg', 'jpg'),
	(122, 24, '66001fa4d1983.jpg', 'jpg'),
	(123, 24, '66001fa4d1b4a.jpg', 'jpg'),
	(124, 24, '66001fa4d1dcd.jpg', 'jpg'),
	(125, 24, '66001fa4d1f79.jpg', 'jpg'),
	(126, 24, '66001fa4d2106.jpg', 'jpg'),
	(127, 25, '660061c59345e.jpg', 'jpg'),
	(129, 25, '660061c593bda.jpg', 'jpg'),
	(130, 25, '660061c593e2d.jpg', 'jpg'),
	(131, 25, '660061c5940bc.jpg', 'jpg'),
	(143, 26, '66045700d50eb.jpg', 'jpg'),
	(144, 26, '66045700ddf22.jpg', 'jpg'),
	(145, 26, '66045700de10a.jpg', 'jpg'),
	(146, 26, '66045700de725.jpg', 'jpg'),
	(147, 26, '66045700e0212.jpg', 'jpg'),
	(148, 26, '66045700e03e6.jpg', 'jpg'),
	(149, 26, '66045700e0549.jpg', 'jpg'),
	(150, 26, '66045700e071e.jpg', 'jpg'),
	(151, 26, '66045700e09ed.jpg', 'jpg'),
	(152, 26, '66045700e0bbc.jpg', 'jpg'),
	(153, 26, '66045700e0da3.jpg', 'jpg'),
	(154, 26, '66045700e0f04.jpg', 'jpg'),
	(155, 26, '66045700e1068.jpg', 'jpg'),
	(156, 26, '66045700e11e2.jpg', 'jpg'),
	(157, 26, '66045700e131a.jpg', 'jpg'),
	(158, 26, '66045700e143f.jpg', 'jpg'),
	(159, 26, '66045700e156a.jpg', 'jpg'),
	(160, 26, '66045700e174f.jpg', 'jpg'),
	(161, 26, '66045700e261f.jpg', 'jpg'),
	(162, 26, '66045700e280f.jpg', 'jpg'),
	(163, 27, '6604641f663be.JPG', 'JPG'),
	(164, 27, '6604641f668aa.JPG', 'JPG'),
	(165, 27, '6604641f66a5f.JPG', 'JPG'),
	(166, 27, '6604641f66c54.JPG', 'JPG'),
	(167, 27, '6604641f66dfe.JPG', 'JPG'),
	(168, 27, '6604641f66fc3.JPG', 'JPG'),
	(169, 27, '6604641f67202.JPG', 'JPG'),
	(170, 27, '660466a49c585.JPG', 'JPG'),
	(171, 27, '660466a49c97f.JPG', 'JPG'),
	(173, 27, '6604691d031cb.JPG', 'JPG'),
	(174, 27, '66047d1514ad7.JPG', 'JPG'),
	(175, 28, '66059685ae7a6.jpg', 'jpg'),
	(176, 28, '66059685b2cde.jpg', 'jpg'),
	(177, 28, '66059685b2fa9.jpg', 'jpg'),
	(178, 28, '66059685b319a.jpg', 'jpg'),
	(179, 28, '66059685b33a2.jpg', 'jpg'),
	(180, 28, '66059685b3687.jpg', 'jpg'),
	(181, 28, '66059685b3a11.jpg', 'jpg'),
	(182, 28, '66059685b3c81.jpg', 'jpg'),
	(183, 28, '66059685b3f29.jpg', 'jpg'),
	(184, 28, '66059685b4213.jpg', 'jpg'),
	(185, 28, '66059685b4491.jpg', 'jpg'),
	(186, 29, '6607c73f46480.jpg', 'jpg'),
	(187, 29, '6607c73f46851.jpg', 'jpg'),
	(188, 29, '6607c73f46a5f.jpg', 'jpg'),
	(189, 29, '6607c73f46c7f.jpg', 'jpg'),
	(190, 29, '6607c73f46eb1.jpg', 'jpg'),
	(191, 29, '6607c73f470f6.jpg', 'jpg'),
	(192, 29, '6607c73f47319.jpg', 'jpg'),
	(193, 29, '6607c73f475ba.jpg', 'jpg'),
	(194, 29, '6607c73f47856.jpg', 'jpg'),
	(195, 29, '6607c73f47a6a.jpg', 'jpg'),
	(196, 29, '6607c73f47c2f.jpg', 'jpg'),
	(197, 29, '6607c73f47de4.jpg', 'jpg'),
	(198, 29, '6607c73f47fdf.jpg', 'jpg'),
	(199, 29, '6607c73f48139.jpg', 'jpg'),
	(200, 29, '6607c73f48279.jpg', 'jpg'),
	(201, 29, '6607c73f483ad.jpg', 'jpg'),
	(202, 29, '6607c73f484e2.jpg', 'jpg'),
	(203, 29, '6607c73f48611.jpg', 'jpg'),
	(204, 29, '6607c73f48751.jpg', 'jpg'),
	(205, 29, '6607c73f48887.jpg', 'jpg'),
	(206, 30, '66099f8d0b94b.jpg', 'jpg'),
	(207, 30, '66099f8d0e3fb.jpg', 'jpg'),
	(208, 30, '66099f8d0e5f4.jpg', 'jpg'),
	(209, 30, '66099f8d0e785.jpg', 'jpg'),
	(210, 30, '66099f8d0e93f.jpg', 'jpg'),
	(211, 30, '66099f8d0eb28.jpg', 'jpg'),
	(212, 30, '66099f8d0ed04.jpg', 'jpg'),
	(213, 30, '66099f8d0eed4.jpg', 'jpg'),
	(214, 30, '66099f8d0f0d7.jpg', 'jpg'),
	(215, 30, '66099f8d0f2f1.jpg', 'jpg'),
	(216, 30, '66099f8d0f4d2.jpg', 'jpg'),
	(217, 30, '66099f8d0f67c.jpg', 'jpg');

-- Listage de la structure de table blive. tb_secteur
CREATE TABLE IF NOT EXISTS `tb_secteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `designation` text ,
  `icon` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 ;

-- Listage des données de la table blive.tb_secteur : ~7 rows (environ)
INSERT INTO `tb_secteur` (`id`, `designation`, `icon`, `status`) VALUES
	(1, 'Gospel', 'fa-solid fa-camera-retro', 1);

-- Listage de la structure de table blive. tb_tarification
CREATE TABLE IF NOT EXISTS `tb_tarification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `candidat` int DEFAULT NULL,
  `domaine` text ,
  `cout` text ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 ;

-- Listage des données de la table blive.tb_tarification : ~74 rows (environ)
INSERT INTO `tb_tarification` (`id`, `candidat`, `domaine`, `cout`) VALUES
	(2, 2, 'Site web vitrine', '200$'),
	(4, 2, 'Site web dynamique', '500$'),
	(5, 2, 'Application mobile', '800$ - 1200$'),
	(6, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,5 photos cadre, 2 albums book', '950$'),
	(7, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,3 photos cadre, 1 albums book', '800$'),
	(8, 19, 'Mariage civil, coutumier,B.nuptial, soirée dansante flash disque,3 photos cadre', '700$'),
	(9, 19, 'Vidéo : remise coutumier , civil plus drone, B.nuptial + drone  et soirée dansante+ teaser, flash disque', '800$'),
	(10, 19, 'Caméra : remise coutumier, civile+ drone , B.nuptial, soirée dansante + flash disque', '600$'),
	(11, 19, 'Caméra : remise coutumier, civile, B.nuptial, soirée dansante + flash disque', '400$'),
	(12, 19, 'Photo studio : 7 pause', '20$'),
	(15, 21, 'Prestige', '70$'),
	(16, 22, 'Make up jour simple', '15$'),
	(17, 22, 'Make UP soirée complète', '20$'),
	(18, 22, 'Défense et collation', '25'),
	(19, 22, 'Séance photo professionnel', '25$'),
	(20, 22, 'Anniversaire', '18$'),
	(21, 22, 'Prestations coutumier', '60$'),
	(22, 22, 'Prestations  civile', '80$'),
	(23, 22, 'Prestations religieuse', '100$'),
	(24, 22, 'Dames d&amp;#039;honneur', '25$'),
	(25, 23, 'Photo studio : 4 pauses', '20$'),
	(26, 23, 'Photo studio : 1h', '100$'),
	(27, 23, 'Séance à domicile : 15 pause', '150$'),
	(28, 23, 'Predote', '150$'),
	(29, 23, 'Remise dote', '150$'),
	(30, 23, 'Mariage civil', '300$'),
	(31, 23, 'Mariage coutumier', '300$'),
	(32, 23, 'Mariage religieux', '500$'),
	(35, 23, 'Conférence', '150$'),
	(36, 23, 'Concert', '150$'),
	(37, 24, 'Prêt dot', '50$'),
	(38, 24, 'Remise dote', '150$'),
	(39, 24, 'Mariage civil', '200$'),
	(40, 24, 'Mariage religieux', '300$'),
	(41, 24, 'Concert', '150$'),
	(42, 24, 'Conférence', '120$'),
	(43, 24, 'Photo studio : 5 pause', '15$'),
	(44, 24, 'Photo séance à la maison : 20 pause', '50$'),
	(45, 24, 'Séance photo 1h : 30 pause', '100$'),
	(51, 26, 'Séance photo professionnel  couple', '150$'),
	(52, 26, 'Séance photo professionnel  8 photos', '80$'),
	(53, 26, 'Séance photo professionnel artistique 10 photos', '100$'),
	(54, 26, 'Séance photo 1h', '200$'),
	(55, 26, 'Séance photo portrait beauty', '100$'),
	(56, 26, 'Séance photo externe', '200$'),
	(57, 26, 'Mariage civil', '450$'),
	(58, 26, 'Mariage religieux', '600$'),
	(59, 26, 'Mariage coutumier', '420$'),
	(60, 27, 'Conception visuelle', '20$'),
	(61, 27, 'Logo', '100$'),
	(64, 27, 'Identité visuelle', '100$'),
	(65, 28, 'Affiche', '20$'),
	(66, 28, 'Logos', '100$'),
	(67, 28, 'Identité visuelle', '150$'),
	(68, 29, 'Mariage religieux', '300$'),
	(69, 29, 'Mariage civil', '250$'),
	(70, 29, 'Mariage coutumier', '200$'),
	(71, 29, 'Prêt dot', '100$'),
	(72, 29, 'Remise dote', '120$'),
	(73, 29, 'Défense', '100$'),
	(74, 29, 'Conférence', '200$'),
	(75, 29, 'Collation et réception', '150$'),
	(76, 29, 'Séance photo domicile', '100$'),
	(77, 29, 'Autre 1h', '100$'),
	(78, 23, 'Mariage complet, civil, coutumier, religieux avec 1 livres de 11 pages, 1 flash disque , un cadre photo A3', '1100$'),
	(79, 30, 'Maquillage simple', '25$'),
	(80, 30, 'Maquillage jour', '35$'),
	(81, 30, 'Maquillage soirée', '50$'),
	(82, 30, 'Maquillage mariée', '100$'),
	(83, 30, 'Pose lace avec effet naturel', '15$'),
	(84, 30, 'Pose closir', '10$'),
	(85, 30, 'Tissage simple', '10$'),
	(86, 30, 'Tissage closir', '10$'),
	(87, 30, 'Tissage lace', '20$');

-- Listage de la structure de table blive. tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_user : ~0 rows (environ)

-- Listage de la structure de table blive. tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text,
  `phone` text,
  `email` text,
  `avatar` text,
  `password` text,
  `status` tinyint DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 ;

-- Listage des données de la table blive.tb_users : ~0 rows (environ)
INSERT INTO `tb_users` (`id`, `nom`, `phone`, `email`, `avatar`, `password`, `status`) VALUES
	(1, 'Willyam Insisili', '0811552166', 'ngutshinsisili@gmail.com', 'ngutshinsisili@gmail.com_661aad4a56936.jpg', '4255cb842e55f2d9b11720ee9c5b87a61960d4533f352e348d77d8983585900d6091ad138b7c5145f3d05a0c807445d33ad9cdd9458ed4494ce46ce23eddf60a', 1),
	(2, 'Hornella meta', '0897189741', 'meta@gmail.com', NULL, '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 1);

-- Listage de la structure de table blive. tb_users_events
CREATE TABLE IF NOT EXISTS `tb_users_events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` int DEFAULT NULL,
  `event` int DEFAULT NULL,
  `dateaction` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB ;

-- Listage des données de la table blive.tb_users_events : ~0 rows (environ)

-- Listage de la structure de table blive. tb_ville
CREATE TABLE IF NOT EXISTS `tb_ville` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pays` int DEFAULT NULL,
  `designation` text ,
  `status` tinyint DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 ;

-- Listage des données de la table blive.tb_ville : ~26 rows (environ)
INSERT INTO `tb_ville` (`id`, `pays`, `designation`, `status`) VALUES
	(1, 2, 'Bas-Uele', 1),
	(2, 2, 'Équateur', 1),
	(3, 2, 'Haut-Katanga', 1),
	(4, 2, 'Haut-Lomami', 1),
	(5, 2, 'Haut-Uele', 1),
	(6, 2, 'Ituri', 1),
	(7, 2, 'Kasaï', 1),
	(8, 2, 'Kasaï-Central', 1),
	(9, 2, 'Kasaï-Oriental', 1),
	(10, 2, 'Kinshasa', 1),
	(11, 2, 'Kongo-Central', 1),
	(12, 2, 'Kwango', 1),
	(13, 2, 'Kwilu', 1),
	(14, 2, 'Lomami', 1),
	(15, 2, 'Lualaba', 1),
	(16, 2, 'Mai-Ndombe', 1),
	(17, 2, 'Maniema', 1),
	(18, 2, 'Mongala', 1),
	(19, 2, 'Nord-Kivu', 1),
	(20, 2, 'Nord-Ubangi', 1),
	(21, 2, 'Sankuru', 1),
	(22, 2, 'Sud-Kivu', 1),
	(23, 2, 'Sud-Ubangi', 1),
	(24, 2, 'Tanganyika', 1),
	(25, 2, 'Tshopo', 1),
	(26, 2, 'Tshuapa', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
