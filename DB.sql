-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2017 at 01:10 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `currency_conversion`
--
CREATE DATABASE `currency_conversion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `currency_conversion`;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Email` varchar(155) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Pages` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`ID`, `User_Email`, `Time`, `Pages`) VALUES
(1, 'pragati@gmail.com', '2017-04-23 15:56:37', 'Logged IN'),
(2, '123@123.com', '2017-04-23 15:58:53', 'Logged IN'),
(3, '123@abc.etc', '2017-04-23 15:59:31', 'Logged IN'),
(4, 'pragati@gmail.com', '2017-04-23 17:00:35', 'Logged IN'),
(5, 'dhruv@gmail.com', '2017-04-23 17:02:16', 'Logged IN'),
(6, 'pragati@gmail.com', '2017-04-23 17:15:46', 'Logged IN'),
(7, 'pragati@gmail.com', '2017-04-23 17:34:11', 'Logged IN'),
(8, 'pragati@gmail.com', '2017-04-23 18:15:32', 'Logged IN'),
(9, 'pragati@gmail.com', '2017-04-23 18:39:11', 'Logged IN');

-- --------------------------------------------------------

--
-- Table structure for table `currency_list`
--

CREATE TABLE IF NOT EXISTS `currency_list` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(155) NOT NULL,
  `Code` varchar(20) NOT NULL,
  `Rate` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `currency_list`
--

INSERT INTO `currency_list` (`ID`, `Name`, `Code`, `Rate`) VALUES
(1, 'Indian Rupee', 'INR', 0.015),
(2, 'Iraqi Dinar', 'IQD', 0.00085),
(3, 'US Dollar', 'USD', 1),
(5, 'Israel Shekel', 'ILS', 17);
