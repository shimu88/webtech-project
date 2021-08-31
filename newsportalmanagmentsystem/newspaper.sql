-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 08:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` char(6) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `passsword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `gender`, `phone`, `passsword`) VALUES
(5, 'Sultana', 'Shimu', 'shimuadmin@gmail.com', 'Female', 12345678912, 'admin'),
(6, 'Monsufa', 'Mou', 'mouauthor@gmail.com', 'Female', 67890900, 'author'),
(7, 'Fuad', 'Hasan', 'fuaduser@gmail.com', 'Male', 12345678912, 'user'),
(8, 'Ashif', 'Raian', 'ashifvendor@gmail.com', 'Male', 1826852673, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_email`
--

CREATE TABLE `vendor_email` (
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_email`
--

INSERT INTO `vendor_email` (`email`) VALUES
('xyz@gmail.com'),
('rafasgj@mac.com'),
('yami@ecallen.com'),
('seesh@k377.me'),
('0robson@cuenmex.com'),
('yaudib@asistx.net'),
('t123naseer.215j@wavleg.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
