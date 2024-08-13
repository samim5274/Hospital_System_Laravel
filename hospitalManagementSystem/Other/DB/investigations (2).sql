-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 08:58 PM
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
-- Table structure for table `investigations`
--

CREATE TABLE `investigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investigations`
--

INSERT INTO `investigations` (`id`, `name`, `catid`, `price`, `room`, `created_at`, `updated_at`) VALUES
(1, 'RBS', 1, 200, 102, '2024-08-03 00:48:53', '2024-08-03 00:48:53'),
(2, 'CBC', 1, 500, 103, '2024-08-03 00:50:09', '2024-08-03 00:50:09'),
(3, 'HbsAg', 3, 1200, 105, '2024-08-04 10:34:30', '2024-08-04 10:34:30'),
(4, 'X-ray', 6, 1500, 203, '2024-08-04 10:41:32', '2024-08-04 10:41:32'),
(5, 'Urine ARY', 4, 5000, 103, '2024-08-04 10:41:52', '2024-08-04 10:41:52'),
(6, 'USG', 2, 1250, 205, '2024-08-04 10:51:43', '2024-08-04 10:51:43'),
(7, '3D x-ray', 6, 5000, 205, '2024-08-04 14:20:53', '2024-08-04 14:20:53'),
(8, '5D x-ray', 6, 5500, 205, '2024-08-04 14:21:12', '2024-08-04 14:21:12'),
(9, 'S.Uric Acid', 3, 400, 103, '2024-08-04 15:08:57', '2024-08-04 15:08:57'),
(10, 'TPHA', 2, 600, 103, '2024-08-04 15:09:15', '2024-08-04 15:09:15'),
(11, 'ABO', 9, 100, 103, '2024-08-04 15:09:32', '2024-08-04 15:09:32'),
(12, 'Urine For P/T', 4, 100, 103, '2024-08-04 15:09:45', '2024-08-04 15:09:45'),
(13, 'Urine For R/E', 4, 100, 103, '2024-08-04 15:09:59', '2024-08-04 15:09:59'),
(14, 'Stool R/E', 3, 100, 103, '2024-08-04 15:10:16', '2024-08-04 15:10:16'),
(15, 'Electrolytes', 7, 1000, 103, '2024-08-04 15:10:37', '2024-08-04 15:10:37'),
(16, '2hrs ABS CUS', 9, 100, 103, '2024-08-04 15:10:51', '2024-08-04 15:10:51'),
(17, 'Blood Film', 1, 500, 103, '2024-08-04 15:11:03', '2024-08-04 15:11:03'),
(18, 'S.Protein', 12, 400, 103, '2024-08-04 15:11:19', '2024-08-04 15:11:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
