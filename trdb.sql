-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 26, 2023 at 02:35 AM
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
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `SecurityQ` varchar(100) DEFAULT NULL,
  `Answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintble`
--

INSERT INTO `admintble` (`Name`, `Email`, `Username`, `Password`, `SecurityQ`, `Answer`) VALUES
('hrfgbsggs', 'foejfo@fofeef.com', 'WeltjeroBouite', 'grsgsgbdghge', 'What is the color of my rock?', 'lightgray'),
('gfsgsrgsr', 'rggws@grgrsgs.frerf', 'LookAtMyEyes', 'LookAtMyEyes', 'Look at me.', 'Done.'),
('hrhgghsrgrg', 'rtststrsrt@mjhmfh.ftgr', 'rtrstsrtsrt', '<br><br><br>', 'Food', 'Yes'),
('What Is This', 'lamborghini@lambor.ghini', 'HahaVeryFunny', 'polis', 'What is this?', 'Yes.');

-- --------------------------------------------------------

--
-- Table structure for table `leavetable`
--

DROP TABLE IF EXISTS `leavetable`;
CREATE TABLE IF NOT EXISTS `leavetable` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Numdays` int(100) DEFAULT NULL,
  `Leavetype` varchar(100) DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`ID`, `Name`, `StartDate`, `EndDate`, `Numdays`, `Leavetype`, `Remarks`) VALUES
(7, 'Mojeco, Gemmalyn V.', '2021-05-22', '2021-07-21', 60, 'Maternity Leave', 'with RTS'),
(11, 'Ponce, Emelia A.', '2022-02-10', '2022-05-26', 105, 'Maternity Leave', 'Filed RTS');

-- --------------------------------------------------------

--
-- Table structure for table `trtable`
--

DROP TABLE IF EXISTS `trtable`;
CREATE TABLE IF NOT EXISTS `trtable` (
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `BirthPlace` varchar(100) NOT NULL,
  `salary` int(100) DEFAULT NULL,
  `Birthdate` varchar(100) DEFAULT NULL,
  `Empstat` varchar(100) DEFAULT NULL,
  `TIN` int(100) NOT NULL,
  `SG` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `PostGrad` varchar(100) DEFAULT NULL,
  `GradeLvl` varchar(100) DEFAULT NULL,
  `Age` int(100) DEFAULT NULL,
  PRIMARY KEY (`TIN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
