-- --------------------------------------------------------
-- Host:                         81.31.151.15
-- Server version:               10.3.27-MariaDB-log - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for interna5_corsocru
CREATE DATABASE IF NOT EXISTS `interna5_corsocru` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `interna5_corsocru`;

-- Dumping structure for table interna5_corsocru.answers_table
CREATE TABLE IF NOT EXISTS `answers_table` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer_value` text DEFAULT NULL,
  `right_answer` text DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `step_answer` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`answer_id`),
  KEY `FK_answers_table_questions_table` (`question_id`),
  KEY `FK_answers_table_users` (`user_id`),
  CONSTRAINT `FK_answers_table_questions_table` FOREIGN KEY (`question_id`) REFERENCES `questions_table` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_answers_table_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=258 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_corsocru.answers_table: ~60 rows (approximately)
/*!40000 ALTER TABLE `answers_table` DISABLE KEYS */;
INSERT INTO `answers_table` (`answer_id`, `answer_value`, `right_answer`, `question_id`, `step_answer`, `user_id`) VALUES
	(196, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 1),
	(197, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 1),
	(198, '2086 secondo comma', 'indici CNDCEC', 1, 1, 1),
	(199, 'Calcolando il DSCR', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 1),
	(200, 'Altre disposizoni', 'indici CNDCEC', 1, 1, 17),
	(201, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 17),
	(202, '2086 secondo comma', 'indici CNDCEC', 1, 1, 17),
	(203, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 17),
	(204, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 17),
	(205, 'Facendo i budget e analisi di bilancio', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 17),
	(206, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 17),
	(207, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 17),
	(208, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 14),
	(209, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 14),
	(210, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 17),
	(211, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 17),
	(212, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 14),
	(213, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 14),
	(214, '2086 secondo comma', 'indici CNDCEC', 1, 1, 15),
	(215, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(216, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 15),
	(217, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(218, '2086 secondo comma', 'indici CNDCEC', 1, 1, 15),
	(219, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(220, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 15),
	(221, 'Facendo i budget e analisi di bilancio', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(222, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 15),
	(223, 'Facendo i budget e analisi di bilancio', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(224, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 15),
	(225, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 15),
	(226, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 15),
	(227, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 15),
	(228, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 21),
	(229, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 21),
	(230, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 21),
	(231, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 21),
	(232, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 21),
	(233, 'Il calcolo del DSCR', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 21),
	(234, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 21),
	(235, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 21),
	(236, 'Risposta 1', 'indici CNDCEC', 1, 1, 39),
	(237, 'Risposta 1', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(238, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 45),
	(239, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 45),
	(240, '2086 secondo comma', 'indici CNDCEC', 1, 1, 45),
	(241, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 45),
	(242, 'Altre disposizoni', 'indici CNDCEC', 1, 1, 45),
	(243, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 45),
	(244, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 45),
	(245, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 45),
	(246, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 45),
	(247, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 45),
	(248, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 40),
	(249, 'Applicando gli indici del CNDCEC', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 40),
	(250, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 40),
	(251, 'Calcolando il DSCR', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 40),
	(252, '2086 secondo comma', 'indici CNDCEC', 1, 1, 40),
	(253, 'Facendo i budget e analisi di bilancio', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 40),
	(254, 'Indici CNDCEC', 'indici CNDCEC', 1, 1, 40),
	(255, 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 40),
	(256, 'La Balnaced Scorecard di Kaplan e Norton', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 40),
	(257, 'SI ma da sola non basta', 'SI ma da sola non basta', 4, 2, 40);
/*!40000 ALTER TABLE `answers_table` ENABLE KEYS */;

-- Dumping structure for table interna5_corsocru.answers_table_training
CREATE TABLE IF NOT EXISTS `answers_table_training` (
  `answer_id1` int(11) NOT NULL AUTO_INCREMENT,
  `answer_value` text NOT NULL DEFAULT '0',
  `right_answer` text NOT NULL DEFAULT '0',
  `question_id` int(11) NOT NULL DEFAULT 0,
  `step_answer` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`answer_id1`),
  KEY `question_id` (`question_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `FK_answers_table_training_questions_table_training` FOREIGN KEY (`question_id`) REFERENCES `questions_table_training` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_answers_table_training_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_corsocru.answers_table_training: ~23 rows (approximately)
/*!40000 ALTER TABLE `answers_table_training` DISABLE KEYS */;
INSERT INTO `answers_table_training` (`answer_id1`, `answer_value`, `right_answer`, `question_id`, `step_answer`, `user_id`) VALUES
	(3, 'Risposta 1', 'indici CNDCEC', 1, 1, 39),
	(4, 'Risposta 3', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(5, 'Risposta 3', 'indici CNDCEC', 1, 1, 39),
	(6, 'Risposta 1', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(7, 'Risposta 2', 'indici CNDCEC', 1, 1, 39),
	(8, 'Risposta 3', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(9, 'Risposta 1', 'indici CNDCEC', 1, 1, 39),
	(10, 'Risposta 1', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(11, 'Risposta 1', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 39),
	(13, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 39),
	(14, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(15, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 39),
	(16, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(17, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 39),
	(18, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(19, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 39),
	(20, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(21, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 39),
	(22, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 39),
	(23, 'la massima aspirazione, l`obiettivo massimo che vuole raggiungere l`azienda', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 39),
	(24, 'Risposta 2', 'SI ma da sola non basta', 4, 2, 39),
	(25, 'la massima aspirazione, l`obiettivo massimo che vuole raggiungere l`azienda', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 39),
	(26, 'Risposta 2', 'SI ma da sola non basta', 4, 2, 39),
	(27, 'la massima aspirazione, l`obiettivo massimo che vuole raggiungere l`azienda', 'La Balnaced Scorecard di Kaplan e Norton', 3, 2, 39),
	(28, 'Ambiente esterno ed interno all`azienda', 'SI ma da sola non basta', 4, 2, 39),
	(29, 'Capitale circolante netto', 'indici CNDCEC', 1, 1, 43),
	(30, 'Ricavi - costi diretti mensili', 'Introducendo in azienda un sistema di risk control basato sul CONTROLLO QUALITATIVO', 2, 1, 43);
/*!40000 ALTER TABLE `answers_table_training` ENABLE KEYS */;

-- Dumping structure for table interna5_corsocru.questions_table
CREATE TABLE IF NOT EXISTS `questions_table` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_text` text DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_corsocru.questions_table: ~4 rows (approximately)
/*!40000 ALTER TABLE `questions_table` DISABLE KEYS */;
INSERT INTO `questions_table` (`question_id`, `question_text`) VALUES
	(1, 'La linea del fumus decoctionis che se superata per tre mesi determina il passaggio da imprenditore SFORTUNATO AD IMPRENDITORE FRAUDOLENTO &egrave; DELIMITATA dagli indici del Consiglio Nazionale Dottori commercialisti ed esperti contabili o dalle disposizioni del 2086 secondo comma o da altre disposizioni?'),
	(2, 'L`oobligo stabilito per tutti gli imprenditori dal 2086 secondo comma di dotare l\'azienda  di un adeguato assetto organizzativo amministrativo e contabile al fine di intercettare gli indizi di crisi e mantenere la continuit&agrave aziendale come deve essere assolto?'),
	(3, 'Quale &egrave; oggi secondo le scienze aziendali l\'unico strumento al mondo utilizzato per attuare il controllo qualitativo?'),
	(4, 'Secondo l\'analisi di scenario in base al nuovo art. 2086 secondo comma &egrave; un adempimento OBBLIGATORIO PER TUTTI GLI IMPRENDITORI?');
/*!40000 ALTER TABLE `questions_table` ENABLE KEYS */;

-- Dumping structure for table interna5_corsocru.questions_table_training
CREATE TABLE IF NOT EXISTS `questions_table_training` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_text` longtext DEFAULT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_corsocru.questions_table_training: ~4 rows (approximately)
/*!40000 ALTER TABLE `questions_table_training` DISABLE KEYS */;
INSERT INTO `questions_table_training` (`question_id`, `question_text`) VALUES
	(1, 'Se le fonti a lungo superano le attivita a lungo, avremo una differenza che ci indica'),
	(2, 'Come deve essere calcolato il margine di contribuzione mensile'),
	(3, 'Che cosa indica la missione aziendale?'),
	(4, 'Che cosa indica la missione azienNell\'analisi SWOT l`analisi riguardNell`analisi SWOT l`analisi riguardaadale?');
/*!40000 ALTER TABLE `questions_table_training` ENABLE KEYS */;

-- Dumping structure for table interna5_corsocru.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_surname` varchar(50) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_phone` varchar(50) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_province` varchar(50) DEFAULT NULL,
  `user_district` varchar(50) DEFAULT NULL,
  `user_livel` smallint(1) DEFAULT 1 COMMENT '1-user  / 2 - admin',
  `user_last_access` int(11) DEFAULT NULL,
  `question_step` smallint(1) DEFAULT 1,
  `question_step_training` smallint(1) DEFAULT 1,
  `time_started` int(11) NOT NULL DEFAULT 0,
  `time_started_training` int(11) NOT NULL DEFAULT 0,
  `tipology` int(11) NOT NULL DEFAULT 1 COMMENT '1 -Crusscotto / 2-Training',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

-- Dumping data for table interna5_corsocru.users: ~66 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_name`, `user_surname`, `user_username`, `user_password`, `user_email`, `user_phone`, `user_city`, `user_province`, `user_district`, `user_livel`, `user_last_access`, `question_step`, `question_step_training`, `time_started`, `time_started_training`, `tipology`) VALUES
	(1, 'simone', 'Brancozzi', 'simonebrancozzi', 'simone2017', '', '', 'Italy', NULL, NULL, 1, 1642717865, 2, 3, 1586847351, 0, 1),
	(2, 'Simone', 'Brancozzi', 'simonebrancozzi', 'simone2018', NULL, NULL, 'Italy', NULL, NULL, 2, 1638738445, 1, 1, 0, 0, 1),
	(6, 'Giovanni', 'Pezzano', 'giovanni.pezzano', 'Giova@213', NULL, NULL, 'Italy', NULL, NULL, 1, 1618318622, 1, 1, 1586269810, 0, 1),
	(7, 'Elena ', 'Viezzoli', 'viezzolielena@gmail.com', 'viezzo@2020', 'viezzolielena@gmail.com', NULL, 'Italy', NULL, NULL, 1, 1618317872, 1, 1, 1586782001, 0, 1),
	(8, 'Alessandro', 'Villa', 'alessandro.villa@vmvassociati.it ', 'ejQ7*PbV', 'alessandro.villa@vmvassociati.it ', NULL, NULL, NULL, NULL, 1, 1618405769, 1, 1, 0, 0, 1),
	(9, 'Beatrice ', 'Rondoni', 'beatricerondoni', 'Beatrice@591', 'beatrice@gmail.com', '33355555695', 'Italy', 'Italy', 'Italy', 1, 1619085561, 1, 1, 1587549606, 0, 1),
	(10, 'Spiridone', 'Di paola', 'dipaolaspiridione@yahoo.it', 'paola#283', 'dipaolaspiridione@yahoo.it', NULL, NULL, NULL, NULL, 1, 1618687965, 1, 1, 0, 0, 1),
	(11, 'Francesco ', 'Ciliento ', 'Dr.francescoceliento@gmail.com', 'fran$54Cili', 'Dr.francescoceliento@gmail.com', NULL, NULL, NULL, NULL, 1, 1620574011, 1, 1, 1587819924, 0, 1),
	(12, 'Patrizia ', 'Gregori', 'gregoripatrizia', 'patrizia@236', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(13, 'Duilio ', 'Saito', 'duiliosaito', 'Saito878', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(14, 'Livio ', 'Zizza', 'zizzaLivio', 'zizzaLiv!545', NULL, NULL, NULL, NULL, NULL, 1, 1620058826, 3, 1, 0, 0, 1),
	(15, 'Fiorenzo ', 'Trotta', 'trottaFiorenzo', 'Fiorenzo@63', NULL, NULL, NULL, NULL, NULL, 1, 1640624679, 3, 1, 0, 0, 1),
	(16, 'Massimo', 'Zilli', 'massimozilli', 'Massimo!694', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(17, 'Cristiano ', 'Pizzi ', 'cristianopizzi', 'Pizzi*$46', NULL, NULL, NULL, NULL, NULL, 1, 1619967910, 3, 1, 0, 0, 1),
	(18, 'Luigi', 'Romano', 'luigiromano', 'iromano%54w', NULL, NULL, NULL, NULL, NULL, 1, 1620228224, 1, 1, 1588692230, 0, 1),
	(19, 'Sandro', 'Gualtie', 'sandrogualtie', 'Sandro9$6#', NULL, NULL, NULL, NULL, NULL, 1, 1629987754, 1, 1, 1588976055, 0, 1),
	(20, 'Paola ', 'Sesti ', 'paolasesti', 'Sesti$2#2', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(21, 'Max', 'Lello', 'maxlello@tiscali.it', 'Max56@le', 'maxlello@tiscali.it', NULL, NULL, NULL, NULL, 1, 1622735793, 3, 1, 0, 0, 1),
	(22, 'Stefania', 'Boscarino', 'stefania.boscarino@serinf.it ', 'Bosc$54bc', 'stefania.boscarino@serinf.it ', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(24, 'Piero', 'Zacheo', 'Piero.zacheo@gmail.com', 'zacheo5$sw5', 'Piero.zacheo@gmail.com', NULL, NULL, NULL, NULL, 1, 1622451855, 1, 1, 1590908792, 0, 1),
	(25, 'Beatrice', 'Gasparoni', 'beatricegasparoni@gmail.com', 'gasparoni#s4', 'beatricegasparoni@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(26, 'Francesco', 'Ventura', 'ventura.ventures@gmail.com', 'Tures#318', 'ventura.ventures@gmail.com', NULL, NULL, NULL, NULL, 1, 1622299918, 1, 1, 0, 0, 1),
	(27, 'Magni ', 'Franco', 'studio@magnifranco.191.it', 'Franco36%w@', 'studio@magnifranco.191.it', NULL, NULL, NULL, NULL, 1, 1624956722, 1, 1, 1593420731, 0, 1),
	(28, 'Maurizio', ' DElia Fi', 'maurizio@professionistiassociati.eu', 'Maurizio!55#', NULL, NULL, NULL, NULL, NULL, 1, 1628751250, 1, 1, 1597215264, 0, 1),
	(29, 'Giovanni', 'Lucarini', 'g.lucarini@lucarinigremoli.it', 'lucarini.*.*2020@', 'g.lucarini@lucarinigremoli.it', '000', 'Italia', 'Italia', 'Italia', 1, 1631629462, 1, 1, 1600093467, 0, 1),
	(30, 'Accardi', 'Giacomo', 'accardi.giacomo@gmail.com', 'Accardi6%c6', 'accardi.giacomo@gmail.com', NULL, NULL, NULL, NULL, 1, 1632813357, 1, 1, 0, 0, 1),
	(31, 'Gianluca', 'Scaglia', 'gscaglia@ksdata.it', 'Scaglia352@', NULL, NULL, NULL, NULL, NULL, 1, 1636017014, 1, 1, 1602079920, 0, 1),
	(32, 'Luca ', 'Pace ', 'luca.pace@live.com', 'Pace5w$5', NULL, NULL, NULL, NULL, NULL, 1, 1633589780, 1, 1, 1601717940, 0, 1),
	(33, 'Giuseppe', 'Cassara', 'info@edilcisa.it', 'Giuseppe%44@', 'info@edilcisa.it', '33333333333', 'Italia', 'Italia', 'Italia', 1, 1636208068, 1, 1, 0, 0, 1),
	(34, 'Claudio', 'Campetta', 'campetta@studioacroma.it', 'claudio$56@', 'campetta@studioacroma.it', '3333333333', 'italia', 'italia', 'italia', 1, NULL, 1, 1, 0, 0, 1),
	(35, 'Maria', 'Teresa', 'direzione@protek.it', 'Maria#4w$', '1direzione@protek.it', '33333333', 'Maria#4w$', 'Italia', 'Italia', 1, 1636474630, 1, 1, 0, 0, 1),
	(36, 'Massimo', 'Lacerenza', 'massimo.lacerenza@gmail.com', 'Massimo5#2', 'massimo.lacerenza@gmail.com', '333333333333', 'Italia', 'Italia', 'Italia', 1, NULL, 1, 1, 0, 0, 1),
	(37, 'Maurizio ', 'Sinico', 'maurizio@studiosinico.it', 'Sinico#69$', 'maurizio@studiosinico.it', '333333333', 'Italia', NULL, NULL, 1, 1635519267, 1, 1, 0, 0, 1),
	(38, 'Enrico', 'Fornico', 'Enrico.fornito@studiofornito.it', 'Enrico12$', 'Enrico.fornito@studiofornito.it', '3333', 'Italia', 'Italia', 'Italia', 1, 1636131926, 1, 1, 1604595930, 0, 1),
	(39, 'Enrico', 'Fornico', 'test', 'test', 'Enrico.fornito@studiofornito.it', '3333', 'Italia', 'Italia', 'Italia', 1, 1636548916, 1, 3, 1604595930, 0, 1),
	(40, 'Claudia', 'Pecorelli', 'claudia.pecorelli@gmail.com', 'Pecorelli$12', 'claudia.pecorelli@gmail.com', '3333', 'Italia', 'Italia', 'Italia', 1, 1638826024, 3, 1, 0, 0, 1),
	(42, 'Studio Dea', 'Denti', 'Studio.dea.denti@gmail.com', 'Dea$123', 'Studio.dea.denti@gmail.com', '3333', 'Italia', 'Italia', 'Italia', 1, 0, 1, 1, 0, 0, 1),
	(43, 'Petrozzi', 'Dmondo', 'petrozziedmondo@gmail.com', 'dmondo$123', 'petrozziedmondo@gmail.com', '3333', 'Italia', 'Italia', 'Italia', 1, 1637505119, 1, 2, 1605091724, 0, 2),
	(44, 'studio', 'Bortone', 'studiobortone@gmail.com', 'Bortone$123', 'studiobortone@gmail.com', '3333', 'Italia', 'Italia', 'Italia', 1, 1642179264, 1, 1, 1610643267, 0, 2),
	(45, 'Giampietro ', 'Duò   ', 'giampietro.duo@studio-duo.it ', 'Giampietro$877', 'giampietro.duo@studio-duo.it', NULL, NULL, NULL, NULL, 1, 1637312126, 3, 1, 0, 0, 1),
	(46, 'Cristiano ', 'Carli   ', 'carlic1962@gmail.com', 'Cristiano%3@', 'carlic1962@gmail.com', NULL, NULL, NULL, NULL, 1, 1637233737, 1, 1, 0, 0, 1),
	(47, 'Graziano ', 'Taramasso ', 'gt@duetstudio.it', 'Graziano9%4@', 'gt@duetstudio.it', NULL, NULL, NULL, NULL, 1, 1637242958, 1, 1, 0, 0, 1),
	(48, 'Rocco ', 'Cremona ', 'roccocremona1967@libero.it', 'Cremo%4$', 'roccocremona1967@libero.it', NULL, NULL, NULL, NULL, 1, 1637415925, 1, 1, 0, 0, 1),
	(49, 'Alessandro', 'Nacita', 'ale.ciko@hotmail.it', 'Nacita$5#', NULL, NULL, NULL, NULL, NULL, 1, 1637668841, 1, 1, 0, 0, 1),
	(50, 'Diana', 'Domizioli', 'diana.domizioli@gmail.com', 'Domizi99$$', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(51, 'Daniele', 'Izzo', 'daniele.izzo1@gmail.com', 'Daniele$51', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(52, 'Elena', 'Bettelli', 'bettelli@studiobettelli.it', 'Bettelli9#5', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(53, 'Domenico', 'Fabbri', 'fabbridomenico@gmail.com', 'Fabbri9#1', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(54, 'Ezio', 'De ritis', 'ezioderitis@gmail.com', 'Ezio#56$', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(55, 'Fiorenzo', 'Trotta', 'fiorenzotrotta@yahoo.it', 'Trotta9#4', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 2),
	(56, 'Maria', 'Marino', 'mariatmarino@gmail.com', 'Marino#5', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(57, 'Leonardo	', 'Zappanico', 'leonardo@studiozappanico.it', 'Zappanico52$', NULL, NULL, NULL, NULL, NULL, 1, 1642658556, 1, 1, 0, 0, 1),
	(58, 'Paola ', 'Sesti', 'studio@studiosestipaola.it', 'Sesti$e8', 'studio@studiosestipaola.it', NULL, NULL, NULL, NULL, 1, 1638528835, 1, 1, 1606992859, 0, 1),
	(59, 'Franco ', 'Castro', 'castro@cscommercialisti.it', 'Castro#45', NULL, NULL, NULL, NULL, NULL, 1, 1642179224, 1, 1, 1610643190, 0, 1),
	(60, 'Franco ', 'Castro', 'castro@cscommercialisti.it', 'Franco#45', NULL, NULL, NULL, NULL, NULL, 1, 1638612531, 1, 1, 0, 0, 2),
	(61, 'Giulio ', 'Orsimari', 'giulio.orsimari@outlook.com', 'Orsimari$45', NULL, NULL, NULL, NULL, NULL, 1, 1639491784, 1, 1, 0, 0, 1),
	(62, 'Giuseppe', 'De Masi', 'gdmdemasi@libero.it', 'Giuseppe96$', 'gdmdemasi@libero.it', NULL, NULL, NULL, NULL, 1, 1639562113, 1, 1, 0, 0, 1),
	(63, 'Giuseppe', 'De Masi', 'gdmdemasi@libero.it', 'DeMasi6$', 'gdmdemasi@libero.it', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 2),
	(64, 'Fabio ', 'Iacuitto ', 'iacuittofabio@gmail.com', 'Fabio$415', 'iacuittofabio@gmail.com', NULL, NULL, NULL, NULL, 1, 1639647517, 1, 1, 0, 0, 1),
	(65, 'Gloria ', 'Bernardini ', 'g.bernardini@aksilia.com', 'Gloria$55e', 'g.bernardini@aksilia.com', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(66, 'Federico ', 'Longoni ', 'federicolongoni1@gmail.com', 'Longoni#53#', 'federicolongoni1@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(67, 'Francesco ', 'Padrone ', 'f.padrone@sbpassociati.it', 'Padrone$563', 'f.padrone@sbpassociati.it', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(68, 'Giorgio ', 'Palombi ', 'giorgiopalombi93@gmail.com ', 'Palombi$55', 'giorgiopalombi93@gmail.com ', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(69, 'Tiziana ', 'Delfine', 'tiziana.delfine@libero.itv', 'Delfine$88', 'tiziana.delfine@libero.itv', NULL, NULL, NULL, NULL, 1, 1640678284, 1, 1, 0, 0, 1),
	(70, 'Carmela ', 'Soldo ', 'carmela.soldo@gmail.com', 'Soldo%324', 'carmela.soldo@gmail.com', NULL, NULL, NULL, NULL, 1, 1640695132, 1, 1, 1609159147, 0, 1),
	(71, 'Giuseppe Bianco', 'Esposito', 'g.biancoesposito@libero.it', 'Esposito%889', 'g.biancoesposito@libero.it', NULL, NULL, NULL, NULL, 1, 1640679562, 1, 1, 0, 0, 2),
	(72, 'Francesco ', 'aliano ', 'dr.francescoaliano@libero.it', 'Francesco$82', 'dr.francescoaliano@libero.it', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(73, 'Francesca ', 'casagrande ', 'fracas.mobile@gmail.com', 'Francesca%$88', 'fracas.mobile@gmail.com', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(74, 'Gabriele ', 'Restello ', 'gabrirestelli@yahoo.it', 'Restello#46', 'gabrirestelli@yahoo.it', NULL, NULL, NULL, NULL, 1, NULL, 1, 1, 0, 0, 1),
	(75, 'Roberta', 'Bertazzoni', 'studiobertazzoni@gmail.com', 'Roberta$564', NULL, NULL, NULL, NULL, NULL, 1, 1642153390, 1, 1, 0, 0, 1),
	(76, 'Silvia ', 'Dondi', 'silvia.dondi82@yahoo.it', 'Dondi$55', NULL, NULL, NULL, NULL, NULL, 1, 1642256313, 1, 1, 1610720319, 0, 2),
	(77, 'Francesca ', 'Gagliano ', 'f.gagliano52@gmail.com', 'Gagliano$566', 'f.gagliano52@gmail.com', NULL, NULL, NULL, NULL, 1, 1642839270, 1, 1, 0, 0, 1),
	(78, 'Aride ', 'Missiroli', 'aride.missiroli@gmail.com', 'Missiroli#556', 'aride.missiroli@gmail.com', NULL, NULL, NULL, NULL, 1, 1642845322, 1, 1, 0, 0, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
