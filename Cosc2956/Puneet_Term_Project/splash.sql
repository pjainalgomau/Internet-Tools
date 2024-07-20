-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 05:13 PM
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
-- Database: `splash`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `contact_method` varchar(50) NOT NULL,
  `query` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `contact_method`, `query`) VALUES
('abcdef', '123456789', 'abcdef'),
('Puneet', '123456', '...'),
('Puneet', 'pjain@algomau.ca', '...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `phone`, `dob`, `address`, `name`, `password`) VALUES
('pjain@algoma', 123, '2024-07-02', '123 main st.', 'Puneet', '$2y$10$rjTr3ngsALVLIRVjPg29EeQkSL2RFFOzVFRKQFMuvri1R1vU4DVcC'),
('pjain@algomau.ca', 8765432, '2024-07-24', '12222 address', 'Puneet', '$2y$10$YbMcSGPb65nJBf4cCPsqpeuiw.t/TN.dzn9dyHKM/Gjmea0XAyG5y'),
('puneet@algomau.ca', 123, '2024-07-03', '123 main st.', 'Puneet', '$2y$10$RLPt4ppGI34bAH0CgsV5YOWbRAj5Srppz5x3RQv5Dsop48GuJUESW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
