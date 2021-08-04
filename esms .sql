-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2021 at 12:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `age` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `lname`, `age`, `name`, `pass`) VALUES
('gervais', 'Cyurishema', 0, '', ''),
('phol', 'wimana', 0, '', ''),
('Gervais', 'manzi', 18, 'y', '12'),
('gaki', 'gato', 23, 'g', '123'),
('beni', 'izer', 24, 'we', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE IF NOT EXISTS `pc` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `os_name` varchar(200) NOT NULL,
  `system` varchar(200) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `bios_model` varchar(100) NOT NULL,
  `hd` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`id`, `os_name`, `system`, `serial`, `ram`, `processor`, `bios_model`, `hd`) VALUES
(1, 'ws 10 pro', '32', '67543908', '8GB', '2.3GHZ', 'legacy', '500GB'),
(4, '30ps', '32', '1234556', '6gb', '3ghz', 'fm', '1000g'),
(5, 'ws 10 pro', '64', '12', '16GB', '2GHZ', 'legacy', '500GB'),
(6, 'ws xp', '64', '1234dfg708', '8GB', '2.3GHZ', 'LegaCY', '1PB');
