-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2021 at 11:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `structure`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Ad_ID` int(50) NOT NULL AUTO_INCREMENT,
  `FULLName` varchar(100) NOT NULL,
  `AD_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Ad_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Ad_ID`, `FULLName`, `AD_Name`, `Password`) VALUES
(1, 'Vishwa Nimesh', 'Vishwa', 'vishwa@omobio1234');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

DROP TABLE IF EXISTS `useraccount`;
CREATE TABLE IF NOT EXISTS `useraccount` (
  `U_ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `bday` date NOT NULL,
  PRIMARY KEY (`U_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`U_ID`, `name`, `email`, `Username`, `Password`, `mobile`, `bday`) VALUES
(13, 'Nihal Perera', 'nihal@gmail.com', 'Nihal', '123123', 765447899, '2021-02-01'),
(14, 'Sachini Pramodya', 'sachini@gmail.com', 'sach', 'sach1997', 765447899, '1997-11-01'),
(18, 'Thanuja Yonhewa', 'thanuja@gmail.com', 'Thanuja', '19720412', 765447899, '1972-04-19'),
(19, 'Tharushi Omobio', 'tharushi@gmail.com', 'Tharushi', '19971020', 765447899, '1997-10-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
