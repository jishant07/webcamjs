-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 09:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcam`
--

-- --------------------------------------------------------

--
-- Table structure for table `webcam_data`
--

CREATE TABLE `webcam_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filelinks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webcam_data`
--

INSERT INTO `webcam_data` (`id`, `name`, `filelinks`) VALUES
(1, 'Jishant Acharya', '[\"uploads/1img1id.jpg\"]'),
(2, 'Jishant Acharya', '[\"uploads/1img2id.jpg\"]'),
(3, 'Jishant Acharya', '[\"uploads/1img3id.jpg\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `webcam_data`
--
ALTER TABLE `webcam_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `webcam_data`
--
ALTER TABLE `webcam_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
