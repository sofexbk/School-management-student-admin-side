-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 02:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensatdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(255) NOT NULL,
  `CNE` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `CNE`, `Nom`, `Prenom`, `Code`) VALUES
(1, 'K4556', 'Alami', 'Fouad', 'fgh@[htm'),
(3, 'KB4122', 'Azami', 'allal', 'fertog@'),
(4, 'kb141', 'Alami', 'Faris', 'azerf'),
(5, 'KB142', 'bakkali', 'Nouhaila', 'berto'),
(8, 'kb586', 'Alami', 'karim', 'ferto'),
(9, 'ght', 'google', 'gg', 'ghtt');

-- --------------------------------------------------------

--
-- Table structure for table `emploi`
--

CREATE TABLE `emploi` (
  `ID` int(255) NOT NULL,
  `Prof` varchar(255) NOT NULL,
  `Salle` varchar(255) NOT NULL,
  `Matiére` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emploi`
--

INSERT INTO `emploi` (`ID`, `Prof`, `Salle`, `Matiére`) VALUES
(1, 'Samadi', 'B22', 'Analyse1'),
(2, 'fdd', 'oo', 'iii'),
(3, 'Khalid', 'B22', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `ID` int(255) NOT NULL,
  `CNE` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `CNE`, `Nom`, `Prenom`, `Ville`, `Email`) VALUES
(4, 'uu', 'Alami', 'karim', 'casa', 'soufihjn.@gmail.com'),
(7, 'K45', 'dalal', 'Toto', 'Asilah', 'soufianbouktaib1@gmail.com'),
(9, 'vbn', 'Alami', 'Adam', 'rabat', 'alamika@gmail.com'),
(10, 'K4556', 'Elgrande', 'Toto', 'Asilah', 'soufianbouktaib1@gmail.com'),
(11, 'kb586', 'toto', 'Soufian', 'rabat', 'soufian.bouktaib@gmail.com'),
(12, 'hth', 'Kamal', 'Fouad', 'Tanger', 'soufianbouktaib1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emploi`
--
ALTER TABLE `emploi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emploi`
--
ALTER TABLE `emploi`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
