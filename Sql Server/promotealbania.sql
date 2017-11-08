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
