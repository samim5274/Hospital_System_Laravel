-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 08:06 PM
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
(16, '2hrs ABF CUS', 9, 100, 103, '2024-08-04 15:10:51', '2024-08-04 15:10:51'),
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
(21, '2024_08_11_161500_create_storetests_table', 2);

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
('rvygjltN1VLeZNJ5kfjQVPwWKS7Q3mnrmt5Mi2lS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV0VmcjllSWc2T3pjaXJwQkVPeUM3UzdzZ3dMQnZ0bmFNVGx0ZHBRYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODA4MC90ZXN0LXNhbGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6Mjp7aToxO2E6NTp7czoyOiJpZCI7aToxO3M6NDoibmFtZSI7czozOiJSQlMiO3M6NToiY2F0aWQiO2k6MTtzOjU6InByaWNlIjtpOjIwMDtzOjQ6InJvb20iO2k6MTAyO31pOjI7YTo1OntzOjI6ImlkIjtpOjI7czo0OiJuYW1lIjtzOjM6IkNCQyI7czo1OiJjYXRpZCI7aToxO3M6NToicHJpY2UiO2k6NTAwO3M6NDoicm9vbSI7aToxMDM7fX19', 1723399351);

-- --------------------------------------------------------

--
-- Table structure for table `storetests`
--

CREATE TABLE `storetests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regNum` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  `testprice` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storetests`
--

INSERT INTO `storetests` (`id`, `regNum`, `testid`, `testprice`, `catid`, `room`, `created_at`, `updated_at`) VALUES
(44, 1, 1, 200, 1, 102, '2024-08-11 11:41:39', '2024-08-11 11:41:39'),
(45, 1, 2, 500, 1, 103, '2024-08-11 11:41:41', '2024-08-11 11:41:41'),
(49, 1, 3, 1200, 3, 105, '2024-08-11 11:57:01', '2024-08-11 11:57:01'),
(50, 1, 1, 200, 1, 102, '2024-08-11 12:00:53', '2024-08-11 12:00:53'),
(51, 1, 1, 200, 1, 102, '2024-08-11 12:02:31', '2024-08-11 12:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `storetests`
--
ALTER TABLE `storetests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
