-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 09:09 AM
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
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catname` varchar(255) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `catname`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Blood', NULL, NULL, NULL),
(2, 'Imaging', NULL, NULL, NULL),
(3, 'Stool', NULL, NULL, NULL),
(4, 'Urine', NULL, NULL, NULL),
(5, 'Cardiovascular', NULL, NULL, NULL),
(6, 'X-ray', NULL, NULL, NULL),
(7, 'Endoscopic', NULL, NULL, NULL),
(8, 'Biopsy and Cytology', NULL, NULL, NULL),
(9, 'Genetic and Molecular', NULL, NULL, NULL),
(10, 'Microbiological', NULL, NULL, NULL),
(11, 'Allergy', NULL, NULL, NULL),
(12, 'Hormone', NULL, NULL, NULL),
(13, 'Metabolic', NULL, NULL, NULL),
(14, 'Neurological', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `digonesticsaleinfos`
--

CREATE TABLE `digonesticsaleinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regNumber` int(11) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `dob` date NOT NULL,
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
  `testsalteDate` date NOT NULL,
  `dueStatus` int(11) NOT NULL,
  `dueCollection` int(11) NOT NULL,
  `dueDiscount` int(11) NOT NULL,
  `dueCollectDate` date DEFAULT NULL,
  `dueCollectOfficerId` int(11) NOT NULL,
  `testReturnStatus` int(11) NOT NULL,
  `testReturnDate` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `digonesticsaleinfos`
--

INSERT INTO `digonesticsaleinfos` (`id`, `regNumber`, `patientName`, `dob`, `gender`, `phone`, `address`, `doctorid`, `referid`, `testSaleOfficerId`, `totalAmount`, `discount`, `received`, `receivedreminAmount`, `testsalteDate`, `dueStatus`, `dueCollection`, `dueDiscount`, `dueCollectDate`, `dueCollectOfficerId`, `testReturnStatus`, `testReturnDate`, `created_at`, `updated_at`) VALUES
(34, 0, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 2, 3, 1, 2000, 400, 1600, 0, '2024-08-16', 0, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:32:40', '2024-08-16 02:32:40'),
(35, 1, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 1, 1, 1200, 0, 1000, 200, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:33:20', '2024-08-16 02:33:20'),
(36, 2, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 4, 1, 1500, 400, 1100, 0, '2024-08-16', 0, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:34:31', '2024-08-16 02:34:31'),
(37, 3, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 1, 1, 1, 6850, 850, 6000, 0, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:35:17', '2024-08-16 02:35:17'),
(38, 4, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 2, 1, 1, 3400, 400, 2500, 500, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:41:41', '2024-08-16 02:41:41'),
(39, 5, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 4, 1, 500, 200, 300, 0, '2024-08-16', 0, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:42:02', '2024-08-16 02:42:02'),
(40, 6, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 2, 1, 6200, 200, 5000, 1000, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:42:24', '2024-08-16 02:42:24'),
(41, 7, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 2, 3, 1, 2750, 450, 2000, 300, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:53:57', '2024-08-16 02:53:57'),
(42, 8, 'Rakib Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 3, 1, 200, 100, 100, 0, '2024-08-16', 0, 0, 0, NULL, 0, 0, NULL, '2024-08-16 02:57:30', '2024-08-16 02:57:30'),
(43, 9, 'Sumon Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 4, 3, 1, 1500, 0, 1000, 500, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 03:00:21', '2024-08-16 03:00:21'),
(44, 10, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 2, 4, 1, 1200, 0, 1000, 200, '2024-08-16', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 03:34:32', '2024-08-16 03:34:32'),
(45, 11, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 3, 1, 1200, 200, 800, 200, '2024-08-17', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 21:14:05', '2024-08-16 21:14:05'),
(46, 12, 'Shamim Hossain', '2001-12-31', 'Male', 1762164746, 'Kaliakair, Gazipur, Dhaka, Bangladesh', 3, 5, 1, 6200, 700, 5000, 500, '2024-08-17', 1, 0, 0, NULL, 0, 0, NULL, '2024-08-16 21:17:12', '2024-08-16 21:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctName` varchar(255) NOT NULL,
  `doctDesignation` varchar(255) NOT NULL,
  `doctPhone` int(11) NOT NULL,
  `doctFee` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctName`, `doctDesignation`, `doctPhone`, `doctFee`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Shohanur Rahman', 'MBBS, FCPS, Microbiology', 152465897, 500, NULL, NULL),
(2, 'Dr. Mazina Tanvir', 'MBBS, FCPS, Microbiology', 152465897, 500, NULL, NULL),
(3, 'Dr. Hasanur Hahman', 'MBBS, FCPS, Microbiology', 152465897, 500, NULL, NULL),
(4, 'Dr. Saidur Rahman', 'MBBS, FCPS, Microbiology', 152465897, 500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2024_08_10_183824_create_categorys_table', 1),
(17, '2024_08_10_183844_create_investigations_table', 1),
(21, '2024_08_11_161500_create_storetests_table', 2),
(22, '2024_08_13_084118_create_digonesticsaleinfos_table', 3),
(23, '2024_08_13_122538_create_doctors_table', 3),
(24, '2024_08_13_122549_create_refers_table', 3),
(26, '2024_08_17_031905_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `refers`
--

CREATE TABLE `refers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refName` varchar(255) NOT NULL,
  `refAddress` varchar(255) NOT NULL,
  `refPhone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refers`
--

INSERT INTO `refers` (`id`, `refName`, `refAddress`, `refPhone`, `created_at`, `updated_at`) VALUES
(1, 'Ashraful Islam', 'Ashuliya, Dhaka, Bangladesh', 132546978, NULL, NULL),
(2, 'Mizanul Islam', 'Ashuliya, Dhaka, Bangladesh', 132546978, NULL, NULL),
(3, 'Faisal Islam', 'Ashuliya, Dhaka, Bangladesh', 132546978, NULL, NULL),
(4, 'Parves Islam', 'Ashuliya, Dhaka, Bangladesh', 132546978, NULL, NULL),
(5, 'Biswajit Islam', 'Ashuliya, Dhaka, Bangladesh', 132546978, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DpvN4oTvOvKkj4jEbYU3CticuTgnvT2n9ziiHczP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnA1d0hBYlV6V01EeXhnYXZYSXRyYXF4U3VacHVNT2NoaTM1ZDA4UCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1723878569);

-- --------------------------------------------------------

--
-- Table structure for table `storetests`
--

CREATE TABLE `storetests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regNum` bigint(11) NOT NULL,
  `testname` longtext NOT NULL,
  `testprice` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storetests`
--

INSERT INTO `storetests` (`id`, `regNum`, `testname`, `testprice`, `catid`, `room`, `created_at`, `updated_at`) VALUES
(271, 0, 'RBS', 200, 1, 102, '2024-08-16 02:32:26', '2024-08-16 02:32:26'),
(272, 0, 'CBC', 500, 1, 103, '2024-08-16 02:32:27', '2024-08-16 02:32:27'),
(273, 0, 'HbsAg', 1200, 3, 105, '2024-08-16 02:32:28', '2024-08-16 02:32:28'),
(274, 0, '2hrs ABS CUS', 100, 9, 103, '2024-08-16 02:32:31', '2024-08-16 02:32:31'),
(275, 1, 'HbsAg', 1200, 3, 105, '2024-08-16 02:33:10', '2024-08-16 02:33:10'),
(276, 2, 'X-ray', 1500, 6, 203, '2024-08-16 02:34:21', '2024-08-16 02:34:21'),
(277, 3, 'USG', 1250, 2, 205, '2024-08-16 02:34:55', '2024-08-16 02:34:55'),
(278, 3, 'Urine ARY', 5000, 4, 103, '2024-08-16 02:34:57', '2024-08-16 02:34:57'),
(279, 3, 'TPHA', 600, 2, 103, '2024-08-16 02:35:01', '2024-08-16 02:35:01'),
(280, 4, 'X-ray', 1500, 6, 203, '2024-08-16 02:41:27', '2024-08-16 02:41:27'),
(281, 4, 'HbsAg', 1200, 3, 105, '2024-08-16 02:41:29', '2024-08-16 02:41:29'),
(282, 4, 'CBC', 500, 1, 103, '2024-08-16 02:41:31', '2024-08-16 02:41:31'),
(283, 4, 'RBS', 200, 1, 102, '2024-08-16 02:41:31', '2024-08-16 02:41:31'),
(284, 5, 'Urine For R/E', 100, 4, 103, '2024-08-16 02:41:44', '2024-08-16 02:41:44'),
(285, 5, 'S.Protein', 400, 12, 103, '2024-08-16 02:41:46', '2024-08-16 02:41:46'),
(286, 6, '5D x-ray', 5500, 6, 205, '2024-08-16 02:42:08', '2024-08-16 02:42:08'),
(287, 6, 'RBS', 200, 1, 102, '2024-08-16 02:42:11', '2024-08-16 02:42:11'),
(288, 6, 'CBC', 500, 1, 103, '2024-08-16 02:42:12', '2024-08-16 02:42:12'),
(289, 7, 'X-ray', 1500, 6, 203, '2024-08-16 02:53:36', '2024-08-16 02:53:36'),
(290, 7, 'USG', 1250, 2, 205, '2024-08-16 02:53:38', '2024-08-16 02:53:38'),
(291, 8, 'RBS', 200, 1, 102, '2024-08-16 02:57:08', '2024-08-16 02:57:08'),
(292, 9, 'X-ray', 1500, 6, 203, '2024-08-16 03:00:05', '2024-08-16 03:00:05'),
(293, 10, 'HbsAg', 1200, 3, 105, '2024-08-16 03:12:57', '2024-08-16 03:12:57'),
(294, 11, 'S.Protein', 400, 12, 103, '2024-08-16 21:13:14', '2024-08-16 21:13:14'),
(295, 11, 'Blood Film', 500, 1, 103, '2024-08-16 21:13:18', '2024-08-16 21:13:18'),
(296, 11, '2hrs ABS CUS', 100, 9, 103, '2024-08-16 21:13:23', '2024-08-16 21:13:23'),
(297, 11, 'Stool R/E', 100, 3, 103, '2024-08-16 21:13:26', '2024-08-16 21:13:26'),
(298, 11, 'Urine For R/E', 100, 4, 103, '2024-08-16 21:13:33', '2024-08-16 21:13:33'),
(299, 12, 'HbsAg', 1200, 3, 105, '2024-08-16 21:16:15', '2024-08-16 21:16:15'),
(300, 12, '3D x-ray', 5000, 6, 205, '2024-08-16 21:16:18', '2024-08-16 21:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userPhone` int(11) DEFAULT NULL,
  `userAddress` varchar(255) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `isActive` int(11) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `dob`, `gender`, `email`, `userName`, `userPassword`, `userPhone`, `userAddress`, `joinDate`, `isActive`, `isAdmin`, `created_at`, `updated_at`) VALUES
(11, 'Shamim', 'Hossain', NULL, NULL, 'samim@gmail.com', 'samim', 's', NULL, NULL, NULL, NULL, NULL, '2024-08-17 00:56:08', '2024-08-17 00:56:08'),
(12, 'Shamim', 'Hossain', NULL, NULL, 'samim@gmail.com', 'samim1', 's', NULL, NULL, NULL, NULL, NULL, '2024-08-17 00:59:06', '2024-08-17 00:59:06'),
(13, 'Shamim', 'Hossain', NULL, NULL, 'samim@gmail.com', 'sabbir', 's', NULL, NULL, NULL, NULL, NULL, '2024-08-17 00:59:17', '2024-08-17 00:59:17'),
(14, 'Shamim', 'Hossain', NULL, NULL, 'samim@gmail.com', 'samim4', 's', NULL, NULL, NULL, NULL, NULL, '2024-08-17 01:00:37', '2024-08-17 01:00:37'),
(15, 'Shamim', 'Hossain', NULL, NULL, 'samim1@gmail.com', 'samim45', 's', NULL, NULL, NULL, NULL, NULL, '2024-08-17 01:04:56', '2024-08-17 01:04:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `digonesticsaleinfos`
--
ALTER TABLE `digonesticsaleinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `investigations`
--
ALTER TABLE `investigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `refers`
--
ALTER TABLE `refers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `storetests`
--
ALTER TABLE `storetests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `digonesticsaleinfos`
--
ALTER TABLE `digonesticsaleinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investigations`
--
ALTER TABLE `investigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `refers`
--
ALTER TABLE `refers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `storetests`
--
ALTER TABLE `storetests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
