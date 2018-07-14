-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 04:00 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_for_good`
--

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `org_name` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `descr` varchar(30) NOT NULL,
  `vacancies` int(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`org_name`, `name`, `phone`, `email`, `role`, `descr`, `vacancies`, `date`) VALUES
('Hello', 'Hi', '32323232', 'ar@gm.co', 'soft', 'soft', 2, '12-2-18'),
('Hello', 'Hi', '32323232', 'ar@gm.co', 'soft', 'soft', 2, '12-2-18'),
('Hello', 'Hi', '32323232', 'ar@gm.co', 'soft', 'soft', 2, '12-2-18'),
('Hello', 'Hi', '32323232', 'ar@gm.co', 'sasa', 'sasas', 3, 'sasas'),
('Hello', 'Hi', '32323232', 'ar@gm.co', 'qwq', 'wqwqwq', 4, 'dsds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
