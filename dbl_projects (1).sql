-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2019 at 09:54 AM
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
-- Database: `dbl_projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `f_name`, `m_name`, `l_name`, `number`, `email`, `username`, `password`) VALUES
(1, 'Kiran', 'raj', 'Pandey', 9867024916, 'kiranrajpandey.kp@gmail.com', 'kiranpandey123', '1234'),
(2, 'Ram', '', 'Bhandari', 9847234567, 'RamBhandari@gamil.com', 'Rambhandari1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(100) NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(255) NOT NULL,
  `M_Name` varchar(255) DEFAULT NULL,
  `L_Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contactnumber` bigint(20) NOT NULL,
  `Gender` tinyint(4) NOT NULL,
  `Identificationnumber` bigint(20) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `F_Name`, `M_Name`, `L_Name`, `Address`, `Email`, `Contactnumber`, `Gender`, `Identificationnumber`, `Username`, `Password`) VALUES
(1, 'Kiran', 'Raj', 'Pandey', 'Butwal', 'kiranrajpandey.kp@gmail.com', 9867024916, 0, 12345678122, 'kiranpandey123', '1234'),
(2, 'Raj123', 'Kumar', 'chaudhary', 'dang', 'rajkumar@gmail.com', 1234567812, 0, 1231231313231233, 'rajkumar12345', '1234'),
(3, 'Raj123', 'Kumar', 'chaudhary', 'dang', 'rajkumar@gmail.com', 1234567812, 0, 1231231313231233, 'rajkumar12345', '1234'),
(4, 'Raj123', 'Kumar', 'chaudhary', 'dang', 'rajkumar@gmail.com', 1234567812, 0, 1231231313231233, 'rajkumar12345', '1234'),
(5, 'Raj123', 'Kumar', 'chaudhary', 'dang', 'rajkumar@gmail.com', 1234567812, 0, 1231231313231233, 'rajkumar12345', '1234'),
(6, 'Hari123', 'raj', 'Pandey', 'Butwal', 'hari123@gmail.com', 9898989898, 0, 1234567891, 'hari1234567', '123456'),
(7, 'ramkumar123', 'raj', 'verma', 'butwal', '123444@gmail.com', 9898989898, 0, 124312412312, 'harikumar12345', '12345'),
(8, 'harikumar1234', 'raj', 'Pandey', 'Butwal', '123445656@gmail.com', 123456781212, 0, 124312412312, 'project12342345', '12345'),
(9, 'Ram', '', 'Bhandari', 'Butwal', 'Rambhandari@gmail.com', 9847234567, 0, 1234567891, 'Rambhandari1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fullreservation`
--

DROP TABLE IF EXISTS `fullreservation`;
CREATE TABLE IF NOT EXISTS `fullreservation` (
  `rd_id` int(100) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bookedby` varchar(255) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `roomtype` varchar(2550) NOT NULL,
  `cus_id` int(11) NOT NULL,
  PRIMARY KEY (`rd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fullreservation`
--

INSERT INTO `fullreservation` (`rd_id`, `f_name`, `l_name`, `number`, `email`, `bookedby`, `checkindate`, `checkoutdate`, `roomtype`, `cus_id`) VALUES
(24, 'Asok', 'Pandey', 1234567891, 'suraj123@gmail.com', 'kiranpandey123', '2019-09-30', '2019-10-01', 'Delux-Twin', 1),
(13, 'Kiran', 'Pandey', 9898989898, 'kiranrajpandey.kp@gmail.com', 'surajbhandari123', '2019-09-20', '2019-09-21', 'Delux-Twin', 9),
(27, 'Suraj', 'Bhandari', 9898989898, 'kiranrajpandey.kp@gmail.com', 'kiranpandey123', '2019-12-05', '2019-12-13', 'Suite', 1),
(15, 'Kiran', 'Pandey', 9898989898, 'Kapilxrestha@yahoo.com', 'kiranpandey123', '2019-09-20', '2019-09-21', 'Delux-Twin', 1),
(16, 'Sita', 'Thapa', 9898989898, 'ram@gmail.com', 'kiranpandey123', '2019-09-20', '2019-09-21', 'Delux-Twin', 1),
(18, 'Sarita', 'Tamang', 9898989898, 'sarita123@gmail.com', 'kiranpandey123', '2019-09-28', '2019-09-29', 'Delux', 1),
(19, 'Kiran', 'Pandey', 9898989898, 'kiranrajpandey.kp@gmail.com', 'kiranpandey123', '2019-09-20', '2019-09-21', 'Delux-Twin', 1),
(26, 'Kiran', 'Pandey', 9898989898, 'kiranrajpandey.kp@gmail.com', 'kiranpandey123', '2019-12-12', '2019-12-13', 'Delux-Twin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `r_id` int(100) NOT NULL AUTO_INCREMENT,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `cus_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `cus_id` (`cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `checkindate`, `checkoutdate`, `cus_id`) VALUES
(16, '2019-09-19', '2019-09-20', 1),
(17, '2019-09-19', '2019-09-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(100) NOT NULL AUTO_INCREMENT,
  `roomtype` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `roomnumber` int(100) NOT NULL,
  `capacity` int(100) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `roomtype`, `price`, `roomnumber`, `capacity`) VALUES
(19, 'Delux', 1500, 102, 5),
(20, 'Deux-twins', 2500, 104, 2),
(21, 'Suite', 3500, 101, 2),
(22, 'Deux-twins', 2200, 12, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
