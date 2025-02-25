-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 08:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EMS_Project`
--

-- --------------------------------------------------------
--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) PRIMARY KEY,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'ams', 'ams');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `Person` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE KEY,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `attandance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `Person` (`id`, `firstName`, `lastName`, `email`, `birthday`, `gender`, `contact`,'address','attandance') VALUES
(101, 'Om', 'Shete', 'om@xyz.com', '2003-05-28', 'Male', '1234567890','Pune',1),
(102, 'Test', 'Pilot', 'testpilot@gmail.com', '2018-01-01', 'Male', '0202','Pune',1),
(103, 'Steven', 'Wilson', 'wilson@xyz.corp', '1990-02-02', 'Male', '5252','Pune',1),
(104, 'Guthrie', 'Govan', 'guthrie@xyz.corp', '1971-12-01', 'Male', '9595','Pune',1);

-- --------------------------------------------------------
-- --------------------------------------------------------
CREATE TABLE `Person` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL UNIQUE KEY,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `attandance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `Person` (`id`, `firstName`, `lastName`, `email`, `birthday`, `gender`, `contact`,'address','attandance') VALUES
(101, 'Om', 'Shete', 'om@xyz.com', '2003-05-28', 'Male', '1234567890','Pune',1),
(102, 'Test', 'Pilot', 'testpilot@gmail.com', '2018-01-01', 'Male', '0202','Pune',1),
(103, 'Steven', 'Wilson', 'wilson@xyz.corp', '1990-02-02', 'Male', '5252','Pune',1),
(104, 'Guthrie', 'Govan', 'guthrie@xyz.corp', '1971-12-01', 'Male', '9595','Pune',1);

COMMIT;