-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2020 at 06:04 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblab`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `addr`, `email`) VALUES
('1GA17CS085', 'Javla', 'Bangalore', 'javla@ume.com'),
('1GA17CS028', 'Habla', 'Portugal', 'habla@hotmail.com'),
('1GA17CS032', 'You', 'There', 'you@there.me'),
('1GA17CS026', 'H1N1', 'Japan', 'h1n1@who.com'),
('1GA17CS043', 'Yamaha', 'Vietnam', 'hello@123.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
