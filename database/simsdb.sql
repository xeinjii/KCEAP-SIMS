-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'student',
  `created_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `user_type`, `created_at`) VALUES
(9, 'kceap', 'kceap@gmail.com', '$2y$10$sfA7g9QpdAY9pDC.RAZRH.NB9RyI4w9exXJP8Yh.9es7VWgdNazva', 'staff', '2025-03-23 16:22:02.000000'),
(11, 'Matt Andrei Belano', 'matt@gmail.com', '$2y$10$9TcY/Vlhjb515so4MdbE0.gi1p5oFycuLEGHs/T9avHMhr29IpxwO', 'student', '2025-03-23 16:58:23.000000'),
(12, 'Carlo Cahoy', 'carlo@gmail.com', '$2y$10$bOQxsDVYhkx96iIcloFpWu/yclmi.jXSIp9ChwkPt0PaxDHCa.ZVS', 'staff', '2025-03-23 17:02:28.000000'),
(13, 'Rianne Aguilar', 'Rianne@gmail.com', '$2y$10$Ez2BpQdCY9w5yvUARXmAeeqi0VDekiNjdEQIcgWRyhLgsYgNSCRdy', 'student', '2025-03-23 17:11:16.000000'),
(14, 'Sample admin', 'admin@gmail.com', '$2y$10$6Iq/sUNLqFTIxFGZwNZOvOuaGULwixiTFPij9kdLUj1G209BfHvBC', 'admin', '2025-03-23 17:52:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `college_pending`
--

CREATE TABLE `college_pending` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `comelec_certificate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hsrecords`
--

CREATE TABLE `hsrecords` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `gradelvl` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hsrecords`
--

INSERT INTO `hsrecords` (`id`, `name`, `school`, `gradelvl`, `brgy`, `phone`) VALUES
(16, 'BELANO, MATT ANDREI G.', 'TABUGON-NHS', '121', 'TAGOC', '09665028045');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `courseYear` varchar(250) NOT NULL,
  `brgy` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `name`, `school`, `courseYear`, `brgy`, `phone`) VALUES
(31, 'AGUILAR, RIANNE CRISTOPHER J.', 'CPSU-MAIN', 'BSIT 3', 'TAGOC', '09758320544'),
(32, 'ACEBRON, JEZREL B.', 'CPSU-MAIN', 'BSIT 4', 'TABUGON', '09089391251'),
(33, 'BALINAS, KEN T.', 'CPSU-MAIN', 'BSIT 3', 'LINAO', '09978264253'),
(44, 'BELANO, MATT ANDREI G.', 'CPSU-MAIN', 'BSIT 4', 'TAGOC', '09665028045'),
(45, 'sdsd', 'CPSU-MAIN', 'dsd', 'dsd', '09089391251'),
(46, 'cxcsdf', 'CPSU-MAIN', 'BSIT 4', 'rwd', '09665028045'),
(47, 'dsdsdsdd', 'CPSU-MAIN', 'sdsd', 'sdsd', '98'),
(48, 'dsdsdsd', 'CPSU-MAIN', 'dsdsd', 'sd', '09665028045'),
(49, 'dsdsdsdddsds', 'CPSU-MAIN', 'dsd', 'dsdsd', '09089391251'),
(50, 'dsdxcxFesfd', 'CPSU-MAIN', 'erere', 'ree', '09'),
(51, 'dsdssdsdsd', 'CPSU-MAIN', 'sdsdsd', 'sdsdsd', '7867'),
(52, 'Matt', 'CPSU-MAIN', 'ada', 'dad', '09665028045'),
(53, 'asasasasasWSQ', 'CPSU-MAIN', 'BSIT 3', '09', '09665028045');

-- --------------------------------------------------------

--
-- Table structure for table `renew_college_pending`
--

CREATE TABLE `renew_college_pending` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `comelec_certificate` varchar(250) NOT NULL,
  `grades` varchar(250) NOT NULL,
  `enrollment_certificate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsrecords`
--
ALTER TABLE `hsrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renew_college_pending`
--
ALTER TABLE `renew_college_pending`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hsrecords`
--
ALTER TABLE `hsrecords`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `renew_college_pending`
--
ALTER TABLE `renew_college_pending`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
