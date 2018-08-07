-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2018 at 11:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooperate-for-ideas`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `PersonID` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE latin1_bin NOT NULL,
  `e_mail` varchar(255) COLLATE latin1_bin NOT NULL,
  `phone_num` varchar(255) COLLATE latin1_bin NOT NULL,
  `motivation` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

DROP TABLE IF EXISTS `ideas`;
CREATE TABLE IF NOT EXISTS `ideas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_bin NOT NULL,
  `about` varchar(255) COLLATE latin1_bin NOT NULL,
  `eml` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `about`, `eml`) VALUES
(1, 'Prima idee', 'Descriere idee', 'contact@cooperateforideas.com'),
(2, 'A doua idee', 'Descriere idee', 'contact@cooperateforideas.com'),
(3, 'A treia idee', 'Descriere idee', 'contact@cooperateforideas.com'),
(4, 'A patra idee', 'Descrierea ideii', 'contact@cooperateforideas.com');

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

DROP TABLE IF EXISTS `userpass`;
CREATE TABLE IF NOT EXISTS `userpass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE latin1_bin NOT NULL,
  `password` varchar(255) COLLATE latin1_bin NOT NULL,
  `email` varchar(255) COLLATE latin1_bin NOT NULL,
  `firstname` varchar(255) COLLATE latin1_bin NOT NULL,
  `lastname` varchar(255) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `username`, `password`, `email`, `firstname`, `lastname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bossulica@no-spam.ws', 'Administrator', 'Sef');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
