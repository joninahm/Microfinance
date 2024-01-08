-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 12:22 PM
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
-- Database: `microfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `ID` int(11) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `Principle` varchar(100) NOT NULL,
  `Interest` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`ID`, `ClientName`, `Reason`, `Principle`, `Interest`) VALUES
(1, 'Joninah Mary', 'Buying a car', '499999', '12%'),
(2, 'Nkwanga Nathan', 'School fess payment', '1000000', '8%'),
(3, 'Lubowa Benjamin', 'Starting up a business', '500000', '9%'),
(4, 'Nanono Robinah', 'Servicing a car', '800000000', '25%'),
(5, 'Busulwa Tashinim', 'Building a house', '10000000', '30%'),
(6, 'Lujininji Elishah', 'Starting upa small business', '1000000', '10%'),
(8, 'Gitta Ethan Emmanuel', 'Moving house', '800000', '7%'),
(9, 'Lanyero Faith', 'Medical emergency', '17000000', '26%'),
(10, 'Tamara Hope ', 'Travelling', '500000', '6%'),
(11, 'Kwagala Nicole', 'School fees payment', '2000000', '10%'),
(12, 'Nagirinya M', 'Politics', '50000000', '35%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
