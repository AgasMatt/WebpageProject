-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2023 at 03:02 AM
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
('hrfgbsggs', 'foejfo@fofeef.com', 'WeltjeroBouite', 'grsgsgbdghge', 'What is the color of my rock?', 'lightgray');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`ID`, `Name`, `StartDate`, `EndDate`, `Numdays`, `Leavetype`, `Remarks`) VALUES
(8, 'GontiÃ±as, Liezel B.', '2021-06-06', '2021-07-05', 30, 'Sick Leave', 'with RTS'),
(7, 'Mojeco, Gemmalyn V.', '2021-05-22', '2021-07-21', 60, 'Maternity Leave', 'with RTS'),
(9, 'Padilla, Jonathan B.', '2021-09-13', '2021-10-05', 0, 'Sick Leave', 'Internal Arrangement'),
(10, 'Nacionales, Sheila Mae B.', '2022-01-03', '2022-04-17', 105, 'Maternity Leave', 'Filed RTS'),
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

--
-- Dumping data for table `trtable`
--

INSERT INTO `trtable` (`FirstName`, `MiddleName`, `LastName`, `Status`, `BirthPlace`, `salary`, `Birthdate`, `Empstat`, `TIN`, `SG`, `Gender`, `Course`, `PostGrad`, `GradeLvl`, `Age`) VALUES
('ewrtfgqwekyfiwgf', 'srgewrgesgrsz', 'gwrgwrgrw', 'srgwrgwrgwsg', 'gwgwsgfswf', 5325223, '2023-05-01', 'sgsrgfvsgvsdg', 35235235, 'gdbhdbebh', 'f', 'grsgesrgghehg', 'r4grwgsgergr', 'rgrewgwrgsrg', 36),
('aika', 'longaria', 'aniceto', 'married', 'bfigeifhnc', 12341234, '2023-05-02', 'fvac', 4, '23dewq', 'xdxw', 'dfg df', 'qcxeq', '4', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
