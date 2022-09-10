-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 08:17 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manualescolare`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `AutorID` int(5) NOT NULL,
  `Nume` varchar(20) NOT NULL,
  `Prenume` varchar(20) NOT NULL,
  `CNP` varchar(13) NOT NULL,
  `SEX` enum('M','F') NOT NULL DEFAULT 'F',
  `DataNasterii` date DEFAULT NULL,
  `Adresa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`AutorID`, `Nume`, `Prenume`, `CNP`, `SEX`, `DataNasterii`, `Adresa`) VALUES
(1, 'Noveanu', 'Eugen', '1880611340011', 'M', '1988-06-11', 'Str. General Magheru, Nr. 18'),
(2, 'Dumitrescu', 'Mana', '2960428215927', 'F', '1996-04-28', 'Str. Virtutii, nr. 9'),
(3, 'Lazarescu', 'Rodica', '2930409093841', 'F', '1993-04-09', 'Str. Dr. Hacman, nr. 1'),
(4, 'Chites', 'Costel', '1971127382031', 'M', '1997-11-27', 'str. Republicii, nr. 9'),
(5, 'Petriceanu', 'Daniel', '1861228266154', 'M', '1986-12-28', 'str. Revolutiei, nr. 1'),
(6, 'Vilculescu', 'Andrei', '1890225329891', 'M', '1986-02-25', 'Str. Traian, nr. 3'),
(7, 'Alan', 'Ionela', '2960426339047', 'F', '1996-04-26', 'Str. Buna Vestire, nr. 1'),
(8, 'Badea', 'Irinel', '2890721229567', 'F', '1989-07-21', 'Str. Mihai Eminescu, nr.1 '),
(9, 'Mihail', 'Aurora', '1850730428898', 'F', '1985-07-30', 'Str. Rezervelor, nr. 9'),
(10, 'Rosu', 'Ionel', '1870915514271', 'M', '1987-09-15', 'Str. Regina Maria, nr. 7'),
(11, 'Manescu', 'Luminita', '2560910385570', 'F', '1956-09-10', 'Str. Independentei, nr. 15');

-- --------------------------------------------------------

--
-- Table structure for table `autorimanual`
--

CREATE TABLE `autorimanual` (
  `AutoriManualID` int(5) NOT NULL,
  `ManualID` int(5) NOT NULL,
  `AutorID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autorimanual`
--

INSERT INTO `autorimanual` (`AutoriManualID`, `ManualID`, `AutorID`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 1, 3),
(7, 1, 1),
(8, 2, 3),
(9, 3, 4),
(10, 3, 6),
(11, 4, 5),
(12, 4, 6),
(13, 5, 7),
(14, 8, 7),
(15, 8, 8),
(16, 7, 9),
(17, 7, 10),
(18, 8, 10),
(19, 6, 7),
(20, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `edituri`
--

CREATE TABLE `edituri` (
  `EdituraID` int(5) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Adresa` varchar(50) DEFAULT NULL,
  `Telefon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edituri`
--

INSERT INTO `edituri` (`EdituraID`, `Nume`, `Adresa`, `Telefon`) VALUES
(1, 'Sigma', 'Strada General H. M. Berthelot Nr 38, București 01', '0213153943'),
(2, 'Corint', 'Strada Mihai Eminescu Nr. 54A, București 030167', '0250701294'),
(3, 'Rosetti', 'Strada Ion Brezoianu nr 9, București 050022', '0213147781'),
(4, 'Carminis', 'Str. Exercitiu, Pitesti, Arges, 110438, Pitești', '0248252467'),
(5, 'Booklet', 'Sergent Constantin Apostol 3, București 061462', ' 021430309');

-- --------------------------------------------------------

--
-- Table structure for table `manuale`
--

CREATE TABLE `manuale` (
  `ManualID` int(5) NOT NULL,
  `EdituraID` int(5) NOT NULL,
  `MaterieID` int(5) NOT NULL,
  `TitluManual` varchar(50) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `DataAprobare` date DEFAULT NULL,
  `ModAchizitie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manuale`
--

INSERT INTO `manuale` (`ManualID`, `EdituraID`, `MaterieID`, `TitluManual`, `ISBN`, `DataAprobare`, `ModAchizitie`) VALUES
(1, 1, 3, 'Matematica- Algebra si Analiza', '1930827777329', '2019-11-12', 'MEC'),
(2, 3, 4, 'Matematica -Alegbra, Geometrie, Trigonometrie', '4396933348947', '2004-09-09', 'MECS'),
(3, 2, 1, 'Limba si literatura romana', '4244896320286', '2006-09-10', 'MECS'),
(4, 4, 2, 'Limba si literatura romana', '5781950674546', '2012-10-15', 'MEN'),
(5, 1, 8, 'Biologie Animala', '3849721815091', '2010-11-11', 'piata libera'),
(6, 2, 7, 'Anatomie ', '9450433027520', '2006-08-07', 'MEN'),
(7, 2, 6, 'Chimie organica', '9599347571324', '2007-10-10', 'MECS'),
(8, 4, 5, 'Chimie anorganica', '2372399947978', '2004-09-08', 'MECS');

-- --------------------------------------------------------

--
-- Table structure for table `materie`
--

CREATE TABLE `materie` (
  `MaterieID` int(5) NOT NULL,
  `Denumire` varchar(20) NOT NULL,
  `CicluInvatamant` varchar(5) NOT NULL,
  `AnScolar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materie`
--

INSERT INTO `materie` (`MaterieID`, `Denumire`, `CicluInvatamant`, `AnScolar`) VALUES
(1, 'Limba romana', 'G', 7),
(2, 'Limba romana', 'L', 9),
(3, 'Matematica ', 'G', 7),
(4, 'Matematica', 'L', 9),
(5, 'Chimie', 'G', 7),
(6, 'Chimie', 'L', 9),
(7, 'Biologie', 'G', 7),
(8, 'Biologie', 'L', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`AutorID`);

--
-- Indexes for table `autorimanual`
--
ALTER TABLE `autorimanual`
  ADD PRIMARY KEY (`AutoriManualID`),
  ADD KEY `ManualID` (`ManualID`),
  ADD KEY `AutorID` (`AutorID`);

--
-- Indexes for table `edituri`
--
ALTER TABLE `edituri`
  ADD PRIMARY KEY (`EdituraID`);

--
-- Indexes for table `manuale`
--
ALTER TABLE `manuale`
  ADD PRIMARY KEY (`ManualID`),
  ADD KEY `EdituraID` (`EdituraID`),
  ADD KEY `MaterieID` (`MaterieID`);

--
-- Indexes for table `materie`
--
ALTER TABLE `materie`
  ADD PRIMARY KEY (`MaterieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `AutorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `autorimanual`
--
ALTER TABLE `autorimanual`
  MODIFY `AutoriManualID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `edituri`
--
ALTER TABLE `edituri`
  MODIFY `EdituraID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manuale`
--
ALTER TABLE `manuale`
  MODIFY `ManualID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materie`
--
ALTER TABLE `materie`
  MODIFY `MaterieID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autorimanual`
--
ALTER TABLE `autorimanual`
  ADD CONSTRAINT `autorimanual_ibfk_1` FOREIGN KEY (`AutorID`) REFERENCES `autori` (`AutorID`),
  ADD CONSTRAINT `autorimanual_ibfk_2` FOREIGN KEY (`ManualID`) REFERENCES `manuale` (`ManualID`);

--
-- Constraints for table `manuale`
--
ALTER TABLE `manuale`
  ADD CONSTRAINT `manuale_ibfk_1` FOREIGN KEY (`EdituraID`) REFERENCES `edituri` (`EdituraID`),
  ADD CONSTRAINT `manuale_ibfk_2` FOREIGN KEY (`MaterieID`) REFERENCES `materie` (`MaterieID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
