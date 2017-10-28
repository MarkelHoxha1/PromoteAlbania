-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 08:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `promotealbania`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventId` int(3) NOT NULL,
  `Pershkrimi_eventit` varchar(255) NOT NULL,
  `Qyteti` varchar(50) NOT NULL,
  `Lloji_eventit` varchar(255) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Cmimi` int(10) NOT NULL,
  `Data_Nisjes` date NOT NULL,
  `Nr_i_diteve` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventId`, `Pershkrimi_eventit`, `Qyteti`, `Lloji_eventit`, `Emri`, `Cmimi`, `Data_Nisjes`, `Nr_i_diteve`) VALUES
(1, 'Shetitje me bicileta', 'Tirane', 'Kulturor', 'Shkodra', 1200, '2017-02-07', 19),
(2, 'Shfaqje ne teater', 'Tirane', 'kulturor', 'Pallati 176', 300, '2017-02-14', 1),
(3, 'Ekspozite pikturash', 'Tirane', 'kulturor', 'Ekspozite pikturash', 200, '2017-02-15', 1),
(4, 'Vizite ne kalane e Beratit', 'Berat', 'Kulturor', 'Kalaja e Beratit', 500, '2017-02-17', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fatura`
--

CREATE TABLE `fatura` (
  `FaturaID` int(4) NOT NULL,
  `UserID` int(3) NOT NULL,
  `Koha` datetime NOT NULL,
  `Cmimi` int(15) NOT NULL,
  `paketaID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fatura`
--

INSERT INTO `fatura` (`FaturaID`, `UserID`, `Koha`, `Cmimi`, `paketaID`) VALUES
(1, 24, '2017-01-06 00:00:00', 2500, 2),
(2, 24, '2017-01-05 00:00:00', 1500, 3),
(3, 24, '2017-01-06 00:00:00', 2500, 2),
(4, 24, '2017-01-05 00:00:00', 1500, 3),
(5, 24, '2017-01-06 00:00:00', 3500, 3),
(6, 24, '2017-01-05 00:00:00', 1100, 4),
(18, 4, '2017-01-11 20:35:46', 0, 3),
(19, 4, '2017-01-11 20:37:10', 0, 3),
(20, 24, '2017-01-11 20:38:31', 0, 3),
(21, 24, '2017-01-11 20:45:40', 0, 3),
(22, 24, '2017-01-11 20:49:18', 0, 3),
(23, 24, '2017-01-11 20:49:22', 0, 3),
(24, 24, '2017-01-11 20:49:22', 0, 3),
(25, 24, '2017-01-11 20:49:25', 0, 3),
(27, 15, '2017-01-12 11:41:55', 0, 3),
(32, 24, '2017-01-12 11:52:33', 1200, 2),
(33, 24, '2017-01-12 11:53:57', 1500, 3),
(34, 26, '2017-01-12 15:00:23', 1890, 33),
(35, 26, '2017-01-12 15:03:54', 1890, 33),
(36, 26, '2017-01-12 15:03:54', 1890, 33),
(37, 26, '2017-01-12 15:44:36', 1200, 2),
(38, 26, '2017-01-12 15:44:55', 1580, 15),
(39, 26, '2017-01-12 20:16:16', 1200, 4),
(40, 26, '2017-01-12 20:32:35', 1500, 3),
(41, 24, '2017-01-16 12:51:18', 1500, 3),
(42, 24, '2017-01-21 00:23:29', 1500, 3),
(43, 24, '2017-01-22 17:48:40', 1500, 36),
(44, 26, '2017-01-22 19:43:59', 1250, 34),
(45, 26, '2017-01-23 15:49:36', 1890, 33),
(46, 34, '2017-02-13 09:35:04', 1200, 2),
(47, 34, '2017-02-13 09:37:29', 1500, 36),
(48, 34, '2017-02-13 09:37:43', 1234, 40),
(49, 34, '2017-02-13 09:39:14', 1250, 34),
(50, 34, '2017-02-13 09:39:27', 1500, 36);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(3) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `foto`) VALUES
(1, 'Vlora_cover.jpg'),
(2, 'albania.jpg'),
(3, 'berat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kerkesa`
--

CREATE TABLE `kerkesa` (
  `KerkesaID` int(3) NOT NULL,
  `Data` datetime NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `UserID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerkesa`
--

INSERT INTO `kerkesa` (`KerkesaID`, `Data`, `Pershkrimi`, `UserID`) VALUES
(1, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(2, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(3, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(4, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(5, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(6, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(7, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(8, '2017-01-02 00:00:00', 'Bej nje pakete per ne durres', 24),
(9, '2017-01-17 00:00:00', 'ijionijk', 24);

-- --------------------------------------------------------

--
-- Table structure for table `merr_pjese`
--

CREATE TABLE `merr_pjese` (
  `SfidaId` int(11) NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merr_pjese`
--

INSERT INTO `merr_pjese` (`SfidaId`, `UserID`) VALUES
(1, 15),
(2, 15),
(1, 15),
(2, 26),
(1, 26),
(5, 34),
(2, 34),
(1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `mesazhe`
--

CREATE TABLE `mesazhe` (
  `MesazhID` int(3) NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `Tipi` varchar(50) NOT NULL,
  `UserID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mesazhe`
--

INSERT INTO `mesazhe` (`MesazhID`, `Pershkrimi`, `Tipi`, `UserID`) VALUES
(1, 'ckemi', 'Pershendetje', 4),
(10, 'qsdhfbsuy', 'Kerkese', 24),
(12, 'bdjhbvdjh', 'Kerkese', 24),
(19, 'une jam', 'Kerkese', 31),
(20, 'une jam', 'Kerkese', 31),
(21, 'ckemi', 'Kerkese', 31),
(22, 'du te bej nje pakete', 'Kerkese', 26);

-- --------------------------------------------------------

--
-- Table structure for table `paketa`
--

CREATE TABLE `paketa` (
  `paketaID` int(2) NOT NULL,
  `EmriP` varchar(255) NOT NULL,
  `Vendodhja` varchar(50) NOT NULL,
  `Sasia_e_vendeve` int(2) NOT NULL,
  `Sezoni` enum('Pranvere','Vere','Vjeshte','Dimer') NOT NULL,
  `Pershkrimi` varchar(255) NOT NULL,
  `Cmimi` int(5) NOT NULL,
  `Data_Nisjes` date NOT NULL,
  `Nr_i_diteve` int(3) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `UserID` int(3) NOT NULL,
  `TurizmiID` int(1) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paketa`
--

INSERT INTO `paketa` (`paketaID`, `EmriP`, `Vendodhja`, `Sasia_e_vendeve`, `Sezoni`, `Pershkrimi`, `Cmimi`, `Data_Nisjes`, `Nr_i_diteve`, `Foto`, `UserID`, `TurizmiID`, `keywords`) VALUES
(2, 'Vlora me ne', 'Vlore', 15, 'Vjeshte', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .\r\nShpresoj ta shijoni \r\nJu faleminderit .', 1200, '2017-01-29', 2, 'imazh.jpg', 16, 1, 'Vlora'),
(3, 'Pogradeci si ty', 'Pogradec', 15, 'Vere', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .\r\nShpresoj ta shijoni \r\nJu faleminderit .\r\n', 1500, '2017-07-11', 3, 'imazh.jpg', 15, 2, 'Pogradec'),
(4, 'Vlora jone', 'Vlore', 15, 'Vjeshte', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .\r\nShpresoj ta shijoni \r\nJu faleminderit .', 1200, '2017-01-29', 2, 'imazh.jpg', 16, 2, 'Vlora'),
(15, 'Korca e bukur', 'Korce', 19, 'Vjeshte', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .Shpresoj ta shijoni Ju faleminderit .', 1580, '2017-05-12', 25, 'Saranda1.jpg', 15, 3, 'Korca'),
(33, 'Tirane', 'Tirana', 19, 'Vjeshte', 'Ckemi', 1890, '0000-00-00', 19, 'Saranda1.jpg', 15, 1, 'Tirane'),
(34, 'Durrsi', 'Durres', 14, 'Vjeshte', 'Ky eshte nje alamet pershkrimi', 1250, '2017-05-19', 16, 'Durres.jpg', 15, 2, ''),
(35, 'Sebashku ne vlore', 'Vlore', 12, 'Vere', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .Shpresoj ta shijoni Ju faleminderit .', 1300, '0000-00-00', 15, 'Velipoje2.jpg', 15, 3, ''),
(36, 'Paketa me e mire', 'Shkoder', 11, 'Vjeshte', 'Kjo pakete eshte nje nga paketat me te mira te ketij sezoni .Shpresoj ta shijoni Ju faleminderit .', 1500, '0000-00-00', 52, 'Durres1.jpg', 15, 4, ''),
(38, 'Ne Tirane', 'Tirane', 15, 'Dimer', 'Paketa me e mie qe ekziston', 1500, '2017-08-19', 26, 'butrint.jpg', 15, 1, ''),
(39, 'Nje udhetim ne vlore', 'Vlore', 19, 'Vere', 'Ky udhetim do jete ai i duhuri', 2500, '0000-00-00', 19, 'f873c144e93c9b0100b1dd1e0d31ac53.jpg', 15, 2, ''),
(40, 'voskopoje', 'veskopoje', 34, 'Dimer', 'vend fantastik malor', 1234, '2017-12-02', 5, 'male.jpg', 33, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `sfida`
--

CREATE TABLE `sfida` (
  `SfidaId` int(3) NOT NULL,
  `Emri` varchar(100) NOT NULL,
  `Pershkrimi` varchar(100) NOT NULL,
  `Data_fillimit` date NOT NULL,
  `Data_mbarimit` date NOT NULL,
  `Destinacioni` varchar(100) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfida`
--

INSERT INTO `sfida` (`SfidaId`, `Emri`, `Pershkrimi`, `Data_fillimit`, `Data_mbarimit`, `Destinacioni`, `Foto`) VALUES
(1, 'HardBike', 'Nje udhetim me bicikleta qe nuk mund te harrohet kurre', '2017-02-08', '2017-02-28', 'Shkoze', 'challenge1.jpg'),
(2, 'HardBike', 'Nje udhetim me bicikleta qe nuk mund te harrohet kurre', '2017-02-08', '2017-02-28', 'Shkoze', 'challenge2.jpg'),
(5, 'Planerim', 'bashkohuni me ne ne llogara per te mare pjese ne eventin e organizuar nga arenautika shqiptare. sfid', '2017-09-18', '2017-09-20', 'Llogara', 'sfid2.jpg'),
(6, '', '', '0000-00-00', '0000-00-00', '', ''),
(7, 'a', 'b', '0000-00-00', '0000-00-00', 'e', 'kulture1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `turizmi`
--

CREATE TABLE `turizmi` (
  `TurizmiID` int(1) NOT NULL,
  `Lloji` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turizmi`
--

INSERT INTO `turizmi` (`TurizmiID`, `Lloji`) VALUES
(1, 'Malor'),
(2, 'Blu'),
(3, 'Kulinar'),
(4, 'Kultur');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(3) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `Email` varchar(80) DEFAULT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Username`, `Password`, `Type`, `First_name`, `Last_name`, `Address`, `Email`, `Foto`) VALUES
(4, 'Markel', 'eaf0c29ee2a23f2d2704619055dc4147', 'Admin', 'Markel', 'Hoxha', 'Shkoze', 'markel.hoxha@fshnstudent.info', 'Pogradec3.jpg'),
(15, 'Arlindi', 'eaf0c29ee2a23f2d2704619055dc4147', 'Admin_Agjensie', 'arlindi', 'Hoxha', 'shkoze1', 'arlindi.hoxha@gmail.com', ''),
(16, 'Redian1', 'eaf0c29ee2a23f2d2704619055dc4147', 'Admin_Agjensie', 'Redi', 'Hoxha', 'Shkoze', 'sdihfiuh@ssdvc.com', 'Pogradec.jpg'),
(17, 'Mario', '8a9285a94448db03842aa59266d64b18', 'Admin', 'Mario', 'Coku', 'KullaPArisit', 'mario@jsndj.com', 'Shkoder1.jpg'),
(18, 'Mario_m', 'd956e1df2f4bf1bdd9fbaaa6ade9174f', 'Admin', 'sdnfkj', 'sdklfmlkds', 'fsiodjidufhd', 'msfbhjjh@dhjbvjh.com', 'Vlora_Cover.jpg'),
(24, 'Markel12', 'eaf0c29ee2a23f2d2704619055dc4147', 'User', 'Marke', 'Hoxha', 'Shkoze', 'markel.hoxha@fshnstudent.info', '16129545_374367152919633_1982897562_o.jpg'),
(26, 'Markeli', 'eaf0c29ee2a23f2d2704619055dc4147', 'User', 'Markel', 'Hoxhaa', 'Shkoze', 'markel.hoxha6@gmail.com', '16129545_374367152919633_1982897562_o.jpg'),
(27, 'Ornes', '8bfab71eb0662bab49b314eb86c809fa', 'Admin', 'Ornes', 'Gjoka', 'Tirane', 'njksbnj@hhbdsh.com', ''),
(29, 'Keli', '06fb12f87112b0a9fc725ab9f99300f8', 'Admin_Agjensie', 'Keli', 'Hoxha', 'Shkoze', 'markel.hoxha4@gmail.com', 'Shkoder1.jpg'),
(31, 'Marxhens', '99255cea7c1dd2d16ccdee0774adbdb7', 'User', 'Marxhens', 'Kumurija', 'Elbasan', 'marxhens@gmail.com', '16265464_692774790930139_7996639745565002841_n.jpg'),
(32, 'Marxhens1', '99255cea7c1dd2d16ccdee0774adbdb7', 'User', 'Marxhens', 'Kumurija', 'Elbasan', 'marxhens@gmail.com', '16129545_374367152919633_1982897562_o.jpg'),
(33, 'mario1', 'cea4e07a4b9b78554c5f26b20ecc0517', 'Admin_Agjensie', 'mario1', 'mario1', 'asdksad', 'mario@yahoo.com', 'blu5.jpg'),
(34, 'mario12', '45ad5e57653aebad0d479a0b6c7db743', 'User', 'mario12', 'mario12', 'mario12', 'mario12@yahoo.com', 'bora.jpg'),
(35, 'margegaj', '3012817eabda0af5e9662630c3bac456', 'User', 'margegaj', 'margegaj', 'lnfjsgfkusgef', 'dkjedcbjwe@cgywcgy.com', ''),
(36, 'MArkelii', '98670d8515750899b16e844d1642a43a', 'Admin_Agjensie', 'keli', 'Hoxha', 'Shkoze', 'markel.hoxha4@gmail.com', 'berat2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventId`);

--
-- Indexes for table `fatura`
--
ALTER TABLE `fatura`
  ADD PRIMARY KEY (`FaturaID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `paketaID` (`paketaID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerkesa`
--
ALTER TABLE `kerkesa`
  ADD PRIMARY KEY (`KerkesaID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `mesazhe`
--
ALTER TABLE `mesazhe`
  ADD PRIMARY KEY (`MesazhID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `paketa`
--
ALTER TABLE `paketa`
  ADD PRIMARY KEY (`paketaID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `TurizmiID` (`TurizmiID`);

--
-- Indexes for table `sfida`
--
ALTER TABLE `sfida`
  ADD PRIMARY KEY (`SfidaId`);

--
-- Indexes for table `turizmi`
--
ALTER TABLE `turizmi`
  ADD PRIMARY KEY (`TurizmiID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fatura`
--
ALTER TABLE `fatura`
  MODIFY `FaturaID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kerkesa`
--
ALTER TABLE `kerkesa`
  MODIFY `KerkesaID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mesazhe`
--
ALTER TABLE `mesazhe`
  MODIFY `MesazhID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `paketa`
--
ALTER TABLE `paketa`
  MODIFY `paketaID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `sfida`
--
ALTER TABLE `sfida`
  MODIFY `SfidaId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fatura`
--
ALTER TABLE `fatura`
  ADD CONSTRAINT `fatura_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `fatura_ibfk_2` FOREIGN KEY (`PaketaID`) REFERENCES `paketa` (`paketaID`),
  ADD CONSTRAINT `fatura_ibfk_3` FOREIGN KEY (`PaketaID`) REFERENCES `paketa` (`paketaID`),
  ADD CONSTRAINT `fatura_ibfk_4` FOREIGN KEY (`paketaID`) REFERENCES `paketa` (`paketaID`);

--
-- Constraints for table `kerkesa`
--
ALTER TABLE `kerkesa`
  ADD CONSTRAINT `kerkesa_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `mesazhe`
--
ALTER TABLE `mesazhe`
  ADD CONSTRAINT `mesazhe_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `paketa`
--
ALTER TABLE `paketa`
  ADD CONSTRAINT `paketa_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `paketa_ibfk_2` FOREIGN KEY (`TurizmiID`) REFERENCES `turizmi` (`TurizmiID`),
  ADD CONSTRAINT `paketa_ibfk_3` FOREIGN KEY (`TurizmiID`) REFERENCES `turizmi` (`TurizmiID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
