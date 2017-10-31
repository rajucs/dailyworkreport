-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 04:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `id` int(10) NOT NULL,
  `admin_id` int(50) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dailywork`
--

CREATE TABLE `dailywork` (
  `id` int(3) NOT NULL,
  `assigned_job` varchar(100) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `progress` varchar(5) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dailywork`
--

INSERT INTO `dailywork` (`id`, `assigned_job`, `project_name`, `progress`, `remarks`) VALUES
(1, 'test', 'test', 'te', 'test'),
(3, 'Bkash_VMS Problem ', 'Bkash VMS', '100%', 'Bkash vms menu problem fix'),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_name`, `user_mobile`, `user_address`) VALUES
(1, 'rubel', 1780240278, 'Dhaka,Bangladesh'),
(2, 'kabir', 1780240278, 'Dhaka,Bangladesh'),
(3, 'rakib', 1780240271, 'rangpur,bangladesh'),
(4, 'rashed', 1780240245, 'Barishal,bangladesh'),
(5, 'rashel', 1780240245, 'Barishal,bangladesh'),
(6, 'naser', 1780240279, 'chittagong,Bangladesh'),
(7, 'rabbi', 1780240211, 'Comilla,Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(10) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `employe_id`, `user_name`, `password`, `user_email`, `user_mobile`) VALUES
(9, 1002, 'rahim', '123', 'rahim@gmail.com', 123456),
(11, 1003, 'karim', '123', 'karim@gmail.com', 123456),
(12, 1004, 'sobuj', '123', 'sobuj@gmail.com', 4562),
(13, 1001, 'farid', '123', 'farid@gmail.com', 123456),
(20, 1005, 'arman', '123', 'arman@gmail.com', 1780240278);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signup`
--
ALTER TABLE `admin_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailywork`
--
ALTER TABLE `dailywork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signup`
--
ALTER TABLE `admin_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailywork`
--
ALTER TABLE `dailywork`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
