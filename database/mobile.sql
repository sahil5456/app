-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 01:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `dart`
--

CREATE TABLE `dart` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mob` int(15) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dart`
--

INSERT INTO `dart` (`id`, `uname`, `pass`, `mob`, `email`) VALUES
(1, '', '', 0, ''),
(2, '', '', 0, ''),
(3, '', '', 0, ''),
(4, '', '', 0, ''),
(5, '', '', 0, ''),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, '', '', 0, ''),
(9, '', '', 0, ''),
(10, '', '', 0, ''),
(11, '', '', 0, ''),
(12, '', '', 0, ''),
(13, '', '', 0, ''),
(14, '', '', 0, ''),
(15, '', '', 0, ''),
(16, '', '', 0, ''),
(17, '', '', 0, ''),
(18, '', '', 0, ''),
(19, '', '', 0, ''),
(20, '', '', 0, ''),
(21, '', '', 0, ''),
(22, '', '', 0, ''),
(23, '', '', 0, ''),
(24, 'jay', '123', 1111111111, 'sahil@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dart`
--
ALTER TABLE `dart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dart`
--
ALTER TABLE `dart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
