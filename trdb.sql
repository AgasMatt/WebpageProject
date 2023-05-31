-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2023 at 02:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintble`
--

DROP TABLE IF EXISTS `admintble`;
CREATE TABLE IF NOT EXISTS `admintble` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `SecurityQ` varchar(100) DEFAULT NULL,
  `Answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leavetable`
--

DROP TABLE IF EXISTS `leavetable`;
CREATE TABLE IF NOT EXISTS `leavetable` (
  `Name` varchar(100) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Numdays` int(100) DEFAULT NULL,
  `Leavetype` varchar(100) DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`Name`, `StartDate`, `EndDate`, `Numdays`, `Leavetype`, `Remarks`) VALUES
('Majeco, Gemmalyn V.', '2023-05-22', '2023-05-22', 1, 'Maternity leave', 'with RTS'),
('ewsa', '2023-05-31', '2023-05-31', 1, 'Sick Leave', 'with RTS'),
('Majeco, Gemmalyn V.', '2023-05-30', '2023-05-30', 1, 'Sick Leave', 'with RTS'),
('fshgwrgwsg', '2023-05-29', '2023-05-31', 3, 'Solo Parent Leave', 'gfeggwegfws'),
('aika', '2023-05-02', '2023-05-29', 1, 'Maternity Leave', 'asdasd'),
('FSFSDSAFSFSF', '2023-05-02', '2023-05-06', 4, 'Sick Leave', 'with RTS'),
('fshgwrgwsg', '2023-05-29', '2023-05-31', 3, 'Solo Parent Leave', 'gfeggwegfws'),
('fshgwrgwsg', '2023-05-29', '2023-05-31', 3, 'Solo Parent Leave', 'gfeggwegfws'),
('assasaSAS', '2023-05-02', '2023-05-03', 1, 'Paternity Leave', 'with RTS'),
('fshgwrgwsg', '2023-05-29', '2023-05-31', 3, 'Solo Parent Leave', 'gfeggwegfws');

-- --------------------------------------------------------

--
-- Table structure for table `trtable`
--

DROP TABLE IF EXISTS `trtable`;
CREATE TABLE IF NOT EXISTS `trtable` (
  `ID` int(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `BirthPlace` varchar(100) NOT NULL,
  `salary` int(100) DEFAULT NULL,
  `Birthdate` int(100) DEFAULT NULL,
  `Empstat` varchar(100) DEFAULT NULL,
  `TIN` int(100) NOT NULL,
  `SG` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `PostGrad` varchar(100) DEFAULT NULL,
  `GradeLvl` varchar(100) DEFAULT NULL,
  `Age` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
