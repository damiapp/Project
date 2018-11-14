-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2018 at 12:40 PM
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
-- Database: `nikola_prj`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_prj`
--

DROP TABLE IF EXISTS `item_prj`;
CREATE TABLE IF NOT EXISTS `item_prj` (
  `item_id` int(255) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_text` text NOT NULL,
  `item_image` blob NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_prj`
--

INSERT INTO `item_prj` (`item_id`, `item_name`, `item_price`, `item_text`, `item_image`) VALUES
(28, 'cvet', 100, 'lep cvet', 0x696d67312e6a706567),
(27, 'Cvetic5', 123, 'lep lep', 0x696d67332e6a706567),
(26, 'Cvetic3', 123, 'lep lep', 0x696d67312e6a706567),
(25, 'drugi cvetic', 100, 'malo skupo', 0x696d67312e6a706567),
(24, 'Cvetic', 1000, 'MNOGO SKUPO', 0x696d67332e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `user_prj`
--

DROP TABLE IF EXISTS `user_prj`;
CREATE TABLE IF NOT EXISTS `user_prj` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(256) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `user_type` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_prj`
--

INSERT INTO `user_prj` (`user_id`, `user_email`, `user_name`, `user_password`, `user_type`) VALUES
(1, 'nikoladamjan@live.com', 'Nikola', '7e0cb86e1f551b83000d16b242bcb533', 0),
(2, 'test@test.com', 'test1', 'aca96358aa3629666208d5df1a937dc5', 0),
(3, 'nekotamo@live.com', 'NekoTamo', '2080741aaed831ae9bcc0e20ae6acfb2', 0),
(4, 'testic@gmail.com', 'mojababa', '3b4df34a31840b455ba7e8be9659030d', 0),
(5, 'admin@admin.com', 'admin', '8f38430f9d60b28e01fd3248dc025b2d', 1),
(6, 'user@user.com', 'Useruser', '7e0cb86e1f551b83000d16b242bcb533', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
