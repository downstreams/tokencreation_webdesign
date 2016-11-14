-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2016 at 05:39 AM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdesi3_downstreams`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `id` int(10) unsigned NOT NULL,
  `value` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `value`, `created_at`, `updated_at`) VALUES
(6, 'https://dsknx.net/U3RR5Z', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(7, 'https://dsknx.net/FV2VRT', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(8, 'https://dsknx.net/K6Y9M7', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(9, 'https://dsknx.net/7GG6MG', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(10, 'https://dsknx.net/GQ5DH3', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(11, 'https://dsknx.net/QM6Y2L', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(12, 'https://dsknx.net/VK64WH', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(13, 'https://dsknx.net/GDWM83', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(14, 'https://dsknx.net/TF228K', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(15, 'https://dsknx.net/A2R2AE', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(16, 'https://dsknx.net/XATG2G', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(17, 'https://dsknx.net/4EV8B6', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(18, 'https://dsknx.net/YW93TH', '2016-10-27 18:38:09', '2016-10-27 18:38:09'),
(19, 'https://dsknx.net/D4UP7E', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(20, 'https://dsknx.net/288YJH', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(21, 'https://dsknx.net/F5CAQJ', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(22, 'https://dsknx.net/UGA2PS', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(23, 'https://dsknx.net/735ZL4', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(24, 'https://dsknx.net/8K88ZA', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(25, 'https://dsknx.net/AW2BW7', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(26, 'https://dsknx.net/UHKF8W', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(27, 'https://dsknx.net/79JFEP', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(28, 'https://dsknx.net/BLJWHE', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(29, 'https://dsknx.net/6FRFAZ', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(30, 'https://dsknx.net/RRZPFM', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(31, 'https://dsknx.net/6EKB6F', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(32, 'https://dsknx.net/V4PDAL', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(33, 'https://dsknx.net/6VXL6G', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(34, 'https://dsknx.net/ZREH48', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(35, 'https://dsknx.net/KLTE9S', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(36, 'https://dsknx.net/2MNCD6', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(37, 'https://dsknx.net/2ASW4F', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(38, 'https://dsknx.net/BAV3LX', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(39, 'https://dsknx.net/2THQAY', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(40, 'https://dsknx.net/GDZZYP', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(41, 'https://dsknx.net/TNNUGB', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(42, 'https://dsknx.net/EA2V95', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(43, 'https://dsknx.net/VDKBSS', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(44, 'https://dsknx.net/GPFE5G', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(45, 'https://dsknx.net/Q337Q5', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(46, 'https://dsknx.net/TNURR6', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(47, 'https://dsknx.net/ZFSJ4E', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(48, 'https://dsknx.net/E2EPMZ', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(49, 'https://dsknx.net/KXZAB4', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(50, 'https://dsknx.net/MSN7GX', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(51, 'https://dsknx.net/7VNRND', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(52, 'https://dsknx.net/FF85WF', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(53, 'https://dsknx.net/4SCNRY', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(54, 'https://dsknx.net/E9A8RM', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(55, 'https://dsknx.net/MGA68G', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(56, 'https://dsknx.net/YNJEEX', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(57, 'https://dsknx.net/KQA9AT', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(58, 'https://dsknx.net/HJMGPH', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(59, 'https://dsknx.net/GY9P2Y', '2016-10-27 18:38:10', '2016-10-27 18:38:10'),
(60, 'https://dsknx.net/XXTMJU', '2016-10-27 18:38:10', '2016-10-27 18:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_24_104024_create_table_subscribers', 2),
(4, '2016_10_24_215015_create_codes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `act_code` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `vcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `act_code`, `status`, `vcode`, `created_at`, `updated_at`) VALUES
(1, 'p.nickson19@gmail.com', '0', 1, 'https://dsknx.net/NUYJ4N', '2016-10-27 19:48:49', '2016-10-27 19:49:03'),
(2, 'jane.king@morgansindall.com', 'a1b8fd3c1f4e24312c8020a2d0e21e99', 0, 'NULL', '2016-10-31 22:09:33', '2016-10-31 22:09:33'),
(3, 'ant@alpsynergy.co.uk', '0', 1, 'https://dsknx.net/DPBY75', '2016-11-01 18:16:15', '2016-11-01 18:16:50'),
(5, 'ant@downstreams.org', '0', 1, 'https://dsknx.net/MEPZKU', '2016-11-03 23:14:42', '2016-11-03 23:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@downstream.com', '$2y$10$4Oo/gEgXQ3RAjR6WVaHPeedzEYBku8pidBlDXOdezG/FeyfG8m4B.', 'DvyHj4K5K2x8gG4v4GbTBhQLo4X3WJHqIyW6e8rrlwvNVdkKIe9Cw4jCN32v', '2016-10-24 04:29:27', '2016-10-27 03:40:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
