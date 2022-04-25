-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 03:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosdot`
--

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE `don` (
  `idDon` int(11) NOT NULL,
  `Id_part` int(11) NOT NULL,
  `Libelle` varchar(20) DEFAULT NULL,
  `typeDon` varchar(20) DEFAULT NULL,
  `Montant` varchar(20) DEFAULT NULL,
  `typeReglement` varchar(50) NOT NULL,
  `estRegle` varchar(50) DEFAULT NULL,
  `dateReglement` varchar(50) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don`
--

INSERT INTO `don` (`idDon`, `Id_part`, `Libelle`, `typeDon`, `Montant`, `typeReglement`, `estRegle`, `dateReglement`, `commentaire`) VALUES
(91, 1, 'lot n°1', 'Lot', '200', 'Carte Bancaire', 'Payé', '2022-03-21', 'cerfa'),
(92, 3, 'lot n°2', 'Lot', '100', 'Cheque', 'Payé', '2022-03-21', ''),
(93, 2, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(94, 1, '', 'Entree', '26', 'PayPal', 'Payé', '2022-03-21', ''),
(95, 3, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(96, 4, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(97, 4, 'un Cadre', 'Lot', '200', 'Carte Bancaire', 'Payé', '2022-03-21', ''),
(98, 5, '', 'Entree', '26', 'Cheque', 'Payé', '2022-03-21', ''),
(99, 5, 'lot n°1', 'Lot', '200', 'Virement', 'Payé', '2022-03-21', ''),
(100, 6, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(101, 7, '', 'Entree', '26', 'Virement', 'Payé', '2022-03-21', ''),
(102, 8, '', 'Don', '300', 'Carte Bancaire', 'Payé', '2022-03-21', 'cerfa'),
(103, 8, '', 'Entree', '26', 'Carte Bancaire', 'Payé', '2022-03-21', 'cerfa'),
(104, 9, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(105, 9, 'lot n°3', 'Lot', '200', 'PayPal', 'Payé', '2022-03-21', ''),
(106, 10, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(107, 11, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(108, 12, '', 'Entree', '26', 'Espece', 'Payé', '2022-03-21', ''),
(109, 1, 'lot n°1', 'Lot', '26', 'Espece', 'Payé', '2022-03-22', ''),
(110, 1, 'test jb', 'Lot', '100', 'Espece', 'Payé', '', 'com jb');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `Id_part` int(11) NOT NULL,
  `Statut` varchar(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Nom_Hebraique` varchar(20) DEFAULT NULL,
  `Nom_hebraique_Parents` varchar(255) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Date_naissance` varchar(50) DEFAULT NULL,
  `Sexe` varchar(3) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Adresse1` varchar(50) DEFAULT NULL,
  `codePostal` int(11) DEFAULT NULL,
  `Ville` varchar(20) DEFAULT NULL,
  `Pays` varchar(20) DEFAULT NULL,
  `Mobile` int(11) DEFAULT NULL,
  `Societe` varchar(20) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`Id_part`, `Statut`, `Nom`, `Prenom`, `Nom_Hebraique`, `Nom_hebraique_Parents`, `Email`, `Date_naissance`, `Sexe`, `Adresse`, `Adresse1`, `codePostal`, `Ville`, `Pays`, `Mobile`, `Societe`, `commentaire`) VALUES
(1, 'donateur', 'Abecassis', 'Orel', NULL, NULL, 'orel.abecassis@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'invite', 'Cohen', 'Raphael', NULL, NULL, 'raph.cohen@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'donateur', 'dadoun', 'Anaia', NULL, NULL, 'anaia.dadoun@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'donateur', 'Sebban', 'Nathane', NULL, NULL, 'nathane.sebban@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'donateur', 'Sroussi', 'Nathan', NULL, NULL, 'nathan.sroussi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'invite', 'Amouyal', 'Ethan', NULL, NULL, 'ethan.amouyal@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'invite', 'Fellous', 'David', NULL, NULL, 'david.fellous@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'donateur', 'Nizard', 'David', NULL, NULL, 'david.nizard@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'donateur', 'Cardoso', 'yonathan', NULL, NULL, 'yonathan.cardoso@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'invite', 'Taieb', 'Jacob', NULL, NULL, 'jacob.taib@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'invite', 'Sadoun', 'Aaron', NULL, NULL, 'aaron.sadoun@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'invite', 'Diai', 'Yossi', NULL, NULL, 'yossi.diaib@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`idDon`),
  ADD KEY `Id_part` (`Id_part`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`Id_part`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `don`
--
ALTER TABLE `don`
  MODIFY `idDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `Id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `don_ibfk_1` FOREIGN KEY (`Id_part`) REFERENCES `participant` (`Id_part`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
