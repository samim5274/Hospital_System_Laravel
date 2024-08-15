-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2024 at 08:55 PM
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
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `digonesticsaleinfos`
--

CREATE TABLE `digonesticsaleinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regNumber` int(11) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `referid` int(11) NOT NULL,
  `testSaleOfficerId` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `received` int(11) NOT NULL,
  `receivedreminAmount` int(11) NOT NULL,
  `testsalteDate` varchar(255) NOT NULL,
  `dueStatus` int(11) NOT NULL,
  `dueCollection` int(11) NOT NULL,
  `dueDiscount` int(11) NOT NULL,
  `dueCollectDate` varchar(255) NOT NULL,
  `dueCollectOfficerId` int(11) NOT NULL,
  `testReturnOfficerId` int(11) NOT NULL,
  `testReturnStatus` int(11) NOT NULL,
  `testReturnDate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `digonesticsaleinfos`
--
ALTER TABLE `digonesticsaleinfos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `digonesticsaleinfos`
--
ALTER TABLE `digonesticsaleinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
