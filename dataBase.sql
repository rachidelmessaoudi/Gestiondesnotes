-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2019 at 06:11 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ListeGi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Numero` int(5) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `profession` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Numero`, `nom`, `prenom`, `profession`) VALUES
(1, 'El Miroun', 'El Mostafa', 'ingenieur'),
(2, 'El Messaoudi', 'Rachid', 'ingenieur'),
(3, 'El Issati' , 'Adnane', 'ingenieur');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `cne` varchar(40) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `date_nai` varchar(40) NOT NULL,
  `id_class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`nom`, `prenom`, `cne`, `cin`, `date_nai`, `id_class`) VALUES
('AASSILA', 'ZINEB', 'R132820641', 'J480750', '23/05/1997', 1),
('AHABCHANE', 'HICHAME', '1513036940', 'R336160', '27/06/1989', 2),
('AKKAD', 'ZAKARIA', 'S133181420', 'BH472487', '27/02/1995', 3),
('AMEJJOUD', 'AMINE', '1513529190', 'R351947', '11/09/1995', 4),
('BADOJJ', 'ABDESSALAM', 'D135584049', 'R360037', '27/05/1996', 5),
('BASBASSI', 'IMANE', 'L139358418', 'FB104605', '12/08/1995', 6),
('BATTA', 'SALOUA', 'H146013755', 'R360293', '11/06/1996', 7),
('BENJELLOUN JBINE', 'BOUCHRA', 'N145031337', 'BJ427081', '06/11/1995', 8),
('BOULLAFT', 'RAFIK', 'S142024078', 'F418254', '28/12/1991', 9),
('CAMARA', 'MORY MOUSSA', 'EH18187127', 'GB209606', '05/09/1995', 10),
('CHAKARI', 'IMANE', 'H135410164', 'AE132354', '16/06/1994', 11),
('CHARJANE', 'FATIMAZAHRA', '1513334014', 'BJ432365', '17/12/1996', 12),
('CHATEI', 'MOHAMED', '1513845524', 'EA200956', '29/02/1996', 13),
('CHLIHFANE', 'BOUCHRA', 'H131409741', 'BJ440791', '12/02/1996', 14),
('DAKKAK', 'OMAR', 'S149004168', 'T264721', '10/05/1995', 15),
('ECH-CHARAY', 'MOHAMED', 'M134428613', 'W390752', '09/03/1995', 16),
('EL AAMRI', 'AYOUB', '1311030736', 'CD254367', '25/10/1995', 17),
('EL ARRASSI', 'ASMAE', 'S135251252', 'G671446', '05/04/1995', 18),
('EL BOUSSALMANI', 'OUALID', '1513807996', 'RB4912', '03/09/1994', 19),
('EL ISSATI', 'ADNAN', '1513808993', 'BK288339', '21/08/1995', 20),
('EL JAIMI', 'WALID', 'J134271829', 'R356624', '01/11/1995', 21),
('EL JOUADI', 'KHADIJA', 'J133512687', 'L596592', '02/12/1996', 22),
('EL MESSAOUDI', 'RACHID', 'M145038276', 'S725549', '02/05/1995', 23),
('EL MEGHABAR', 'CHAIMAE', '1513546694', 'BB130596', '04/08/1994', 24),
('EL MIROUN', 'EL MOSTAFA', 'R142065608', 'T252413', '03/03/1995', 25),
('ES-SEDRATY', 'MOHAMED', 'P136143116', 'IA144457', '19/07/1996', 26),
('ES-SOUNNI', 'YASSINE', '1513350355', 'T268423', '11/08/1995', 27),
('FELOUACH', 'ABDESSAMAD', '1513354045', 'PB236025', '01/07/1997', 28),
('HAJJIOUI', 'ABDELFETTAH', 'Z160502756', 'M576667', '21/04/1996', 29),
('HAMI', 'MERYEM', 'M132436361', 'BB129589', '21/05/1995', 30),
('HIBAT-ALLAH', 'MOHAMED', '1513931823', 'S711287', '02/05/1994', 31),
('HSINI', 'OUMAIMA', 'H130295623', 'L557828', '19/06/1995', 32),
('IDALILAHCEN', 'ABDESSALAM', 'L133347857', 'L584452', '18/09/1994', 33),
('IKHARMEJ', 'ABDERRAZAQ', 'M142040829', 'D925912', '22/08/1996', 34),
('JAYED', 'NAOUFAL', 'P145097698', 'D985935', '12/08/1994', 35),
('KHLIFI TAGHZOUTI', 'YASMINE', 'N139378219', 'UA110326', '08/11/1996', 36),
('KRAIM', 'ISMAIL', 'D130483569', 'BJ436948', '01/06/1996', 37),
('LAFRIZI', 'OMAR', 'S136251277', 'SZ8037', '03/02/1996', 38),
('LAGNAOUI', 'MANAL', '1513807113', 'WA229323', '08/08/1996', 39),
('LAMKADAMI', 'TOURIA', 'S133298149', 'BK522219', '07/06/1994', 40),
('LATRACHE', 'HOUDA', 'L142046371', 'BH471180', '11/02/1995', 41),
('MAACHI', 'AFAF', 'M135537080', 'S711491', '04/05/1995', 42),
('MAACHI', 'BASMA', 'S133298556', 'U184732', '26/07/1996', 43),
('MOKHTARI', 'ZAKARIYAE', 'H134266353', 'K535864', '14/10/1996', 44),
('MOUSSAID', 'KAOUTAR', 'H145002554', 'F442664', '05/08/1995', 45),
('MOUTAAI', 'SOUHAIL', '1513344084', 'IC104681', '05/06/1995', 46),
('NIYA', 'SAHAR', '1513767125', 'CD543978', '23/08/1996', 47),
('OUADOUD', 'AZIZ', 'H135301472', 'R354838', '27/05/1994', 48),
('OUNDOUH', 'CHAYMAE', 'H138093116', 'GM156082', '05/11/1994', 49),
('RAIHAN', 'NAJIB', '1513037652', 'R349991', '01/04/1994', 50),
('RHOUBIR', 'YOUSSEF', '1513544757', 'JK26884', '04/02/1997', 51),
('ROUESSI', 'MOHCINE', '1311344559', 'RB13200', '30/08/1996', 52),
('SAKI', 'YOUNESS', '1513367442', 'IB225968', '04/05/1996', 53),
('SALMI', 'ACHRAF', 'E148009888', 'EE547896', '11/12/1994', 54),
('SBANE', 'AYOUB', 'D130099896', 'IB222829', '28/06/1996', 55),
('ZAKRITI', 'SAID', 'S130016659', 'RB5742', '04/07/1993', 56),
('ZAND', 'AHMED', '1513055002', 'D855028', '30/04/1993', 57),
('ZAR', 'HAMZA', '1513351757', 'S757148', '04/01/1997', 58);

-- --------------------------------------------------------

--
-- Table structure for table `loggin`
--

CREATE TABLE `loggin` (
  `cne` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loggin`
--

INSERT INTO `loggin` (`cne`, `role`, `password`) VALUES
('R132820641', '3', 'J480750'),
('1513036940', '3', 'R336160'),
('S133181420', '3', 'BH472487'),
('1513529190', '3', 'R351947'),
('D135584049', '3', 'R360037'),
('L139358418', '3', 'FB104605'),
('H146013755', '3', 'R360293'),
('N145031337', '3', 'BJ427081'),
('S142024078', '3', 'F418254'),
('EH18187127', '3', 'GB209606'),
('H135410164', '3', 'AE132354'),
('1513334014', '3', 'BJ432365'),
('1513845524', '3', 'EA200956'),
('H131409741', '3', 'BJ440791'),
('S149004168', '3', 'T264721'),
('M134428613', '3', 'W390752'),
('1311030736', '3', 'CD254367'),
('S135251252', '3', 'G671446'),
('1513807996', '3', 'RB4912'),
('1513808993', '3', 'BK288339'),
('J134271829', '3', 'R356624'),
('J133512687', '3', 'L596592'),
('M145038276', '3', 'S725549'),
('1513546694', '3', 'BB130596'),
('R142065608', '3', 'T252413'),
('P136143116', '3', 'IA144457'),
('1513350355', '3', 'T268423'),
('1513354045', '3', 'PB236025'),
('Z160502756', '3', 'M576667'),
('M132436361', '3', 'BB129589'),
('1513931823', '3', 'S711287'),
('H130295623', '3', 'L557828'),
('L133347857', '3', 'L584452'),
('M142040829', '3', 'D925912'),
('P145097698', '3', 'D985935'),
('N139378219', '3', 'UA110326'),
('D130483569', '3', 'BJ436948'),
('S136251277', '3', 'SZ8037'),
('1513807113', '3', 'WA229323'),
('S133298149', '3', 'BK522219'),
('L142046371', '3', 'BH471180'),
('M135537080', '3', 'S711491'),
('S133298556', '3', 'U184732'),
('H134266353', '3', 'K535864'),
('H145002554', '3', 'F442664'),
('1513344084', '3', 'IC104681'),
('1513767125', '3', 'CD543978'),
('H135301472', '3', 'R354838'),
('H138093116', '3', 'GM156082'),
('1513037652', '3', 'R349991'),
('1513544757', '3', 'JK26884'),
('1311344559', '3', 'RB13200'),
('1513367442', '3', 'IB225968'),
('E148009888', '3', 'EE547896'),
('D130099896', '3', 'IB222829'),
('S130016659', '3', 'RB5742'),
('1513055002', '3', 'D855028'),
('1513351757', '3', 'S757148'),
('Boujraf', '2', 'profboujraf'),
('mostafa', '1', 'adminmostafa'),
('dadi', '2', 'profdadi'),
('Rachid', '1', 'adminrachid'),
('', '', ''),
('zeryouhi', '2', 'profzeryouhi'),
('messoudi', '2', 'profmessoudi'),
('allaoui', '2', 'profallaoui');


-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Numero` int(11) NOT NULL,
  `cne` varchar(40) NOT NULL,
  `web` double NOT NULL,
  `complexite` double NOT NULL,
  `uml` double NOT NULL,
  `ro` double NOT NULL,
  `cpp` double NOT NULL,
  `comptabilite` double NOT NULL,
  `management` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Numero`, `cne`, `web`, `complexite`, `uml`, `ro`, `cpp`, `comptabilite`, `management`) VALUES
(1, 'R132820641', 16, 0, 0, 0, 0, 0, 0),
(2, '1513036940', 0, 0, 0, 0, 0, 0, 0),
(3, 'S133181420', 0, 0, 0, 0, 0, 0, 0),
(4, '1513529190', 0, 0, 0, 0, 0, 0, 0),
(5, 'D135584049', 0, 0, 0, 0, 0, 0, 0),
(6, 'L139358418', 0, 0, 0, 0, 0, 0, 0),
(7, 'H146013755', 0, 0, 0, 0, 0, 0, 0),
(8, 'N145031337', 0, 0, 0, 0, 0, 0, 0),
(9, 'S142024078', 0, 0, 0, 0, 0, 0, 0),
(10, 'EH18187127', 0, 0, 0, 0, 0, 0, 0),
(11, 'H135410164', 0, 0, 0, 0, 0, 0, 0),
(12, '1513334014', 0, 0, 0, 0, 0, 0, 0),
(13, '1513845524', 0, 0, 0, 0, 0, 0, 0),
(14, 'H131409741', 0, 0, 0, 0, 0, 0, 0),
(15, 'S149004168', 0, 0, 0, 0, 0, 0, 0),
(16, 'M134428613', 0, 0, 0, 0, 0, 0, 0),
(17, '1311030736', 0, 0, 0, 0, 0, 0, 0),
(18, 'S135251252', 0, 0, 0, 0, 0, 0, 0),
(19, '1513807996', 0, 0, 0, 0, 0, 0, 0),
(20, '1513808993', 0, 0, 0, 0, 0, 0, 0),
(21, 'J134271829', 0, 0, 0, 0, 0, 0, 0),
(22, 'J133512687', 0, 0, 0, 0, 0, 0, 0),
(23, 'M145038276', 0, 0, 0, 0, 0, 0, 0),
(24, '1513546694', 0, 0, 0, 0, 0, 0, 0),
(25, 'R142065608', 0, 0, 0, 0, 0, 0, 0),
(26, 'P136143116', 0, 0, 0, 0, 0, 0, 0),
(27, '1513350355', 0, 0, 0, 0, 0, 0, 0),
(28, '1513354045', 0, 0, 0, 16, 0, 12, 0),
(29, 'Z160502756', 0, 0, 0, 0, 0, 0, 0),
(30, 'BB129589', 0, 0, 0, 0, 0, 0, 0),
(31, '1513931823', 0, 0, 0, 0, 0, 0, 0),
(32, 'H130295623', 0, 0, 0, 0, 0, 0, 0),
(33, 'L133347857', 0, 0, 0, 0, 0, 0, 0),
(34, 'M142040829', 0, 0, 0, 0, 0, 0, 0),
(35, 'P145097698', 0, 0, 0, 0, 0, 0, 0),
(36, 'N139378219', 0, 0, 0, 0, 0, 0, 0),
(37, 'D130483569', 0, 0, 0, 0, 0, 0, 0),
(38, 'S136251277', 0, 0, 0, 0, 0, 0, 0),
(39, '1513807113', 0, 0, 0, 0, 0, 0, 0),
(40, 'S133298149', 0, 0, 0, 0, 0, 0, 0),
(41, 'L142046371', 0, 0, 0, 0, 0, 0, 0),
(42, 'M135537080', 0, 0, 0, 0, 0, 0, 0),
(43, 'S133298556', 0, 0, 0, 0, 0, 0, 0),
(44, 'H134266353', 0, 0, 0, 0, 0, 0, 0),
(45, 'H145002554', 0, 0, 0, 0, 0, 0, 0),
(46, '1513344084', 0, 0, 0, 0, 0, 0, 0),
(47, '1513767125', 0, 0, 0, 0, 0, 0, 0),
(48, 'H135301472', 0, 0, 0, 0, 0, 0, 0),
(49, 'H138093116', 0, 0, 0, 0, 0, 0, 0),
(50, '1513037652', 0, 0, 0, 0, 0, 0, 0),
(51, '1513544757', 0, 0, 0, 0, 0, 0, 0),
(52, '1311344559', 0, 0, 0, 0, 0, 0, 0),
(53, '1513367442', 0, 0, 0, 0, 0, 0, 0),
(54, 'E148009888', 0, 0, 0, 0, 0, 0, 0),
(55, 'D130099896', 17, 16, 15, 17, 19, 17, 15),
(56, 'S130016659', 0, 0, 0, 0, 0, 0, 0),
(57, '1513055002', 0, 0, 0, 0, 0, 0, 0),
(58, '1513351757', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `matiere` varchar(30) NOT NULL,
  `cin` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`id`, `nom`, `prenom`, `matiere`, `cin`) VALUES
(1, 'dadi', 'elwardani', 'web', ''),
(2, 'allaoui', 'ahmed', 'cpp', ''),
(4, 'zeryouhi', 'mohammed', 'management', ''),
(30, 'ahmed', 'boujraf', 'ro', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_class`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Numero`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Numero` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `Numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
