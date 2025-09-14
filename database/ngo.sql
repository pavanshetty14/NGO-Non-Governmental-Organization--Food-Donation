-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 06:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cname` varchar(100) NOT NULL,
  `cmail` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ngoregister`
--

CREATE TABLE `ngoregister` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngoregister`
--

INSERT INTO `ngoregister` (`name`, `email`, `phone`, `address`, `lat`, `lng`) VALUES
('Dharmasthala Charitable Trust', 'dharmasthalacharitabletrust@gmail.com', 9875621430, 'Dakshina Kannada', '12.838020', '75.267190'),
('Hassan Charitable Trust', 'hassancharitabletrust@gmail.com', 9548631640, 'Hassan', '13.075258', '76.178375'),
('Mangaluru Charitable Trust', 'mangalurucharitabletrust@gmail.com', 9548742130, 'Mangaluru', '12.940322', '74.866356'),
('Tumakuru Charitable Trust', 'tumakurucharitabletrust@gmail.com', 7336549210, 'Tumakuru', '13.347490', '77.102173');

-- --------------------------------------------------------

--
-- Table structure for table `vregister`
--

CREATE TABLE `vregister` (
  `vname` varchar(100) NOT NULL,
  `vemail` varchar(100) NOT NULL,
  `vphone` bigint(100) NOT NULL,
  `vmsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngoregister`
--
ALTER TABLE `ngoregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `vregister`
--
ALTER TABLE `vregister`
  ADD PRIMARY KEY (`vemail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
