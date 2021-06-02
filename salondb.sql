-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2020 at 03:13 PM
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
-- Database: `salondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` varchar(11) NOT NULL,
  `ad_username` varchar(20) DEFAULT NULL,
  `ad_password` varchar(10) DEFAULT NULL,
  `ad_email` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000001 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`, `ad_email`) VALUES
('A0001', 'admin', 'admin123', 'admindarkNshine@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `appo_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_email` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_period` varchar(20) DEFAULT NULL,
  `ser_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`appo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appo_id`, `cus_email`, `date`, `time_period`, `ser_name`) VALUES
(15, 'anjalirangi@gmail.com', '2020-07-11', 'Morning', 'Eyebrow Treading'),
(16, 'anjidilrangi@gmail.com', '2020-07-18', 'Evening', 'Hair Relaxing'),
(23, 'anjalidilrangi@gmail.com', '2020-07-11', 'Morning', 'Hair Wash'),
(24, 'anjalidilrangi@gmail.com', '2020-07-17', 'Morning', 'Hair Colour'),
(25, 'anjalidilrangi@gmail.com', '2020-07-14', 'Evening', 'Jovees Facial');

-- --------------------------------------------------------

--
-- Table structure for table `assistant`
--

DROP TABLE IF EXISTS `assistant`;
CREATE TABLE IF NOT EXISTS `assistant` (
  `assi_id` varchar(11) NOT NULL,
  `assi_name` varchar(50) DEFAULT NULL,
  `assi_tp` int(11) DEFAULT NULL,
  `assi_username` varchar(20) DEFAULT NULL,
  `assi_password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`assi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistant`
--

INSERT INTO `assistant` (`assi_id`, `assi_name`, `assi_tp`, `assi_username`, `assi_password`) VALUES
('ASS01', 'Mihiri Wijesekara', 765432154, 'assistantM', 'assi');

-- --------------------------------------------------------

--
-- Table structure for table `canceled_appointments`
--

DROP TABLE IF EXISTS `canceled_appointments`;
CREATE TABLE IF NOT EXISTS `canceled_appointments` (
  `canAppo_id` int(11) NOT NULL AUTO_INCREMENT,
  `appo_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL,
  `ser_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`canAppo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canceled_appointments`
--

INSERT INTO `canceled_appointments` (`canAppo_id`, `appo_id`, `date`, `cus_email`, `ser_name`) VALUES
(4, 17, '2020-07-25', 'abc@gmail.com', 'Clean up'),
(3, 14, '2020-07-18', 'anjalirangi@gmail.com', 'Jovees Facial'),
(5, 18, '2020-07-20', 'rashmi12@gmail.com', 'Long Layer'),
(6, 19, '2020-07-14', 'anjalidilrangi@gmail.com', 'Hair Wash');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_appointments`
--

DROP TABLE IF EXISTS `confirmed_appointments`;
CREATE TABLE IF NOT EXISTS `confirmed_appointments` (
  `confAppo_id` int(11) NOT NULL AUTO_INCREMENT,
  `appo_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL,
  `ser_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`confAppo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_appointments`
--

INSERT INTO `confirmed_appointments` (`confAppo_id`, `appo_id`, `date`, `time`, `cus_email`, `ser_name`) VALUES
(35, 26, '2020-07-15', '7.00 - 8.00', 'anjalidilrangi@gmail.com', 'Hair Relaxing'),
(32, 20, '2020-07-10', '16.00 - 17.00', 'anjalidilrangi@gmail.com', 'Long Layer'),
(27, 11, '2020-07-17', '11.00 - 12.00', 'anjalirangi@gmail.com', 'Hair Relaxing'),
(33, 21, '2020-07-10', '8.00 - 9.00', 'anjalidilrangi@gmail.com', 'Long Layer'),
(34, 22, '2020-07-10', '15.00 - 16.00', 'anjalidilrangi@gmail.com', 'Long Layer'),
(30, 12, '2020-07-10', '17.00 - 18.00', 'anjalirangi@gmail.com', 'Long Layer'),
(31, 13, '2020-07-22', '16.00 - 17.00', 'anjalirangi@gmail.com', 'Eyebrow Treading');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_Fname` varchar(10) DEFAULT NULL,
  `cus_Lname` varchar(20) DEFAULT NULL,
  `cus_email` varchar(50) DEFAULT NULL,
  `cus_tp` int(10) DEFAULT NULL,
  `cus_password` varchar(100) DEFAULT NULL,
  `forgotPasswordId` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_Fname`, `cus_Lname`, `cus_email`, `cus_tp`, `cus_password`, `forgotPasswordId`) VALUES
(106, 'Hansi', 'Jayasinghe', 'anjidilrangi@gmail.com', 755307578, '917b1d0ba8b8d59c9f052a44de968917', NULL),
(107, 'rashmi', 'senevirathne', 'anjalirangi@gmail.com', 755307578, '81dc9bdb52d04dc20036dbd8313ed055', '9a1824117549480fa6ff77d13773d4f2'),
(108, 'Anjali', 'Jayasinghe', 'anjalidilrangi@gmail.com', 755307578, '79cfeb94595de33b3326c06ab1c7dbda', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `ser_id` varchar(20) NOT NULL,
  `ser_name` varchar(50) DEFAULT NULL,
  `price_range` varchar(30) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ser_id`, `ser_name`, `price_range`, `category`) VALUES
('s01', 'Clean up', '2000.00', 'Face'),
('s02', 'Jovees Facial', '2500.00', 'Face'),
('s03', 'Gold Facial', '3500.00', 'Face'),
('s04', 'Hair Wash', '750.00', 'Hair'),
('s05', 'Hair Trimmimg', '300.00', 'Hair'),
('s06', 'Long Layer', '1500.00', 'Hair'),
('s07', 'Hair Relaxing', '7000.00 - 15000.00', 'Hair'),
('s08', 'Hair Rebonding', '9000.00 - 20000.00', 'Hair'),
('s09', 'Hair Colour', '2000.00 - 8000.00', 'Hair'),
('s10', 'Full Face Treading', '800.00', 'Face'),
('s11', 'Eyebrow Treading', '200.00', 'Face'),
('s12', 'Eyebrow & Upperlip Treading', '300.00', 'Face'),
('s13', 'Waxing', '500.00 - 5000.00', 'Body'),
('s14', 'Makeup', '2000.00 - 5000.00', 'Face'),
('s15', 'Manicure', '1500.00', 'Body'),
('s16', 'Pedicure', '1500.00', 'Body');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
