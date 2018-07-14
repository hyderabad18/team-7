-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2018 at 08:14 PM
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
-- Database: `team7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(10) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `contact_name`, `user_name`, `password`) VALUES
(1, 'admin1', 'adm', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_login`
--

CREATE TABLE `corporate_login` (
  `c_id` int(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `org_desc` varchar(100) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_login`
--

INSERT INTO `corporate_login` (`c_id`, `company_name`, `org_desc`, `contact_name`, `contact_no`, `user_name`, `email_id`, `password`) VALUES
(1, 'com_name', 'org_desc', 'con_pers_name', '1234567890', 'user1', 'teja@gmail.com', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `dummy1`
--

CREATE TABLE `dummy1` (
  `a1` int(10) NOT NULL,
  `a2` int(10) NOT NULL,
  `a3` int(10) NOT NULL,
  `a4` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy1`
--

INSERT INTO `dummy1` (`a1`, `a2`, `a3`, `a4`) VALUES
(411, 412, 413, 414),
(511, 512, 513, 514);

-- --------------------------------------------------------

--
-- Table structure for table `dummy2`
--

CREATE TABLE `dummy2` (
  `b1` int(10) NOT NULL,
  `b2` int(10) NOT NULL,
  `b3` int(10) NOT NULL,
  `b4` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy2`
--

INSERT INTO `dummy2` (`b1`, `b2`, `b3`, `b4`) VALUES
(111, 112, 113, 114),
(211, 212, 213, 214),
(111, 112, 113, 114),
(211, 212, 213, 214);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `m_id` int(11) NOT NULL,
  `pdf_file` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `s_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `marks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s_id`, `name`, `email`, `contact_no`, `disability`, `sector`, `user_name`, `password`, `marks`) VALUES
(2, 'Rosy', 'rosy@mail.com', '1234567', 'blind', 'software', 'rosy', 'rosy', '50'),
(3, 'stud1', 'stud1@mail.com', '1234', 'deaf', 'software', 'stud1', 'stud1', '75'),
(4, 'stud2', 'stud2@mail.com', '3456', 'deaf', 'software', 'stud2', 'stud2', '40');

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
('com_name', 'con_pers_name', '1234567890', 'teja@gmail.com', 'engineer', 'engineer', 3, '12-2-18'),
('com_name', 'con_pers_name', '1234567890', 'teja@gmail.com', 'designer', 'designer', 4, '15-7-18'),
('com_name', 'con_pers_name', '1234567890', 'teja@gmail.com', 'designer', 'designer', 5, '12-2-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `corporate_login`
--
ALTER TABLE `corporate_login`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corporate_login`
--
ALTER TABLE `corporate_login`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
