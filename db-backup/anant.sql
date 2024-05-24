-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 09:37 AM
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
-- Database: `anant`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_vehicles`
--

CREATE TABLE `buy_vehicles` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `vehicletype` varchar(255) NOT NULL,
  `chassisnumber` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `rcnumber` varchar(255) DEFAULT NULL,
  `invoicenumber` varchar(255) DEFAULT NULL,
  `insuranceid` varchar(255) DEFAULT NULL,
  `rcimage` text DEFAULT NULL,
  `invoiceimage` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `numberplatestatus` varchar(255) NOT NULL DEFAULT 'inproces',
  `insuranceimage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy_vehicles`
--

INSERT INTO `buy_vehicles` (`id`, `customer_id`, `vehicle_id`, `vehicletype`, `chassisnumber`, `color`, `rcnumber`, `invoicenumber`, `insuranceid`, `rcimage`, `invoiceimage`, `status`, `numberplatestatus`, `insuranceimage`, `created_at`, `updated_at`) VALUES
(24, '1', 'TVS XL 100 COM ITS-BSVI', 'Moped', 'MD621CP20R1B01024', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', NULL, NULL, NULL, NULL, NULL, '0', 'inproces', NULL, '2024-05-13 13:22:27', '2024-05-13 13:22:27'),
(25, '1', 'TVS XL 100 COM ITS-BSVI', 'Moped', 'MD621CP20R1B01025', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', '12345689109', 'RRR', 'xxxxxxxxx', NULL, NULL, '0', 'inproces', NULL, '2024-05-22 04:41:46', '2024-05-22 04:41:46'),
(26, '10', 'TVS XL 100 COM ITS-BSVI', 'Moped', 'MD621CP20R1B01028', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', '333wwwww', 'yyyyy', 'yyyd4544', NULL, NULL, '0', 'fitted', NULL, '2024-05-23 09:46:37', '2024-05-23 11:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customerphoneno` varchar(255) NOT NULL,
  `customeremailaddress` varchar(255) NOT NULL,
  `customercity` varchar(255) NOT NULL,
  `customerstate` varchar(255) NOT NULL,
  `customercountry` varchar(255) NOT NULL,
  `customeraddress` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `customerphoneno`, `customeremailaddress`, `customercity`, `customerstate`, `customercountry`, `customeraddress`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Dummy', '1234567890', 'dummy@gmail.com', 'Ajmer', 'Rajasthan', 'India', 'Dummy was here!', '$2y$10$5307wed1JII18uyred./teVlAjdsD.PR67XUGzAnhjg..aL32EHOO', '2024-01-02 05:26:43', '2024-03-09 11:05:55'),
(7, 'AMRIT', '7665350752', 'amritsankhla64@gmail.com', 'AJMER', 'RAJASTHAN', 'INDIA', 'ADARSH NAGAR,AJMER 305001', '$2y$10$D/hfVQIYfx/Qk/QHekKHOO6kkRwPHBTeCl6PF8wx6rGIeQJUMmBUG', '2024-04-02 07:18:42', '2024-04-02 07:18:42'),
(9, 'ASLAM MOHAMMAD', '9672912862', 'aslam@gmail.com', 'ajmer', 'rajasthan', 'india', 'TEHSIL PARBATSAR, BHAKRI MAULAS, BHAKRI MAULAS, BHAKHARI, NAGAUR 341512', '$2y$10$AAu3rvEXRGWIgfpZhxCg9OzsiVZlrM8OT/Ek0Zv1V6lQoS3ewIAsy', '2024-04-04 09:59:39', '2024-04-04 09:59:39'),
(10, 'Anjali', '9898789878', 'anj@gmail.com', 'Ajmer', 'Raj', 'India', 'This is Anjali Address', '$2y$10$vevN38VWESh71R68bB5J.uFdmuEHF9eolBE.CpvP.Aqh16P9WbVRy', '2024-05-23 09:45:46', '2024-05-23 09:45:46');

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
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `leadid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vehiclename` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `customerstatus` varchar(255) DEFAULT NULL,
  `leadstatus` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `leadid`, `name`, `vehiclename`, `phoneno`, `randomno`, `verifystatus`, `customerstatus`, `leadstatus`, `created_at`, `updated_at`) VALUES
(88, NULL, 'tarun', '', '8619042459', '521093', '0', 'New', 'Purchased', '2024-03-09 12:21:34', '2024-04-18 09:29:04'),
(109, NULL, 'Dummy', '', '1234567890', '1234', '1', 'Existing', 'Booked', '2024-04-18 09:21:03', '2024-04-18 09:24:12'),
(110, NULL, 'Dummy', '', '1234567890', '1234', '1', 'Existing', 'Purchased', '2024-04-18 09:29:15', '2024-04-18 09:29:56'),
(111, NULL, 'Dummy', '', '1234567890', '1234', '1', 'Existing', 'Closed', '2024-04-18 09:29:20', '2024-04-18 09:47:07'),
(112, NULL, 'Dummy', '', '1234567890', '1234', '1', 'Existing', 'Choose...', '2024-04-18 09:29:25', '2024-04-23 13:11:54'),
(113, NULL, 'NiteshAdmin', 'TVS Ronin', '1234567890', '1234', '1', 'Existing', 'Closed', '2024-04-23 13:25:00', '2024-05-22 10:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `make_requests`
--

CREATE TABLE `make_requests` (
  `id` int(11) NOT NULL,
  `requestphoneno` varchar(255) NOT NULL,
  `requestcomments` text NOT NULL,
  `leadstatus` varchar(255) DEFAULT NULL,
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `make_requests`
--

INSERT INTO `make_requests` (`id`, `requestphoneno`, `requestcomments`, `leadstatus`, `randomno`, `verifystatus`, `created_at`, `updated_at`) VALUES
(1, '8209165518', 'dsfsdfdsf', NULL, '', '0', '2024-02-19 07:10:21', '2024-02-19 07:10:21'),
(6, '8209165518', 'this is nitesh', NULL, '415584', '1', '2024-02-20 07:48:34', '2024-02-20 07:48:49'),
(7, '8619158307', 'apache rtr red & black colour full specification & details', NULL, '963626', '0', '2024-04-06 07:03:33', '2024-04-06 07:03:33'),
(8, '8209165518', 'asdsdasdasssssssssssssssss', 'Purchased', '642551', '1', '2024-05-22 09:55:50', '2024-05-22 10:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `parent_id` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'A',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `parent_id`, `label`, `value`, `type`, `status`, `created_at`, `updated_at`) VALUES
(10, '1', 'Vehicle', 'Vehicle', 'Master', 'A', '2023-12-30 02:53:53', '2023-12-30 02:53:53'),
(27, '1', 'PPC', 'PPC', 'Pumps', 'A', '2023-12-30 04:18:55', '2023-12-30 04:18:55'),
(28, '1', 'Plastic', 'Plastic', 'Pumps', 'A', '2023-12-30 04:19:09', '2023-12-30 04:19:09'),
(31, '1', 'Python', 'Python', 'Coding', 'A', '2023-12-31 23:48:00', '2023-12-31 23:48:00'),
(33, '1', 'Color', 'Color', 'Master', 'A', '2024-01-02 23:13:47', '2024-01-02 23:13:47'),
(35, '1', 'Dark Blue', 'Dark Blue', 'Color', 'A', '2024-01-02 23:14:13', '2024-01-02 23:14:13'),
(38, '1', 'Pay Now', 'link', 'Payment Button', 'A', '2024-01-17 01:40:53', '2024-01-17 01:40:53'),
(39, '1', 'Payment with Paytm', 'link', 'Payment Button', 'A', '2024-01-17 01:42:18', '2024-01-17 01:42:18'),
(40, '1', 'Payment with PhonePe', 'link', 'Payment Button', 'A', '2024-01-17 01:42:42', '2024-01-17 01:42:42'),
(46, '1', 'Motorcycles', 'Motorcycles', 'Vehicle', 'A', '2024-02-21 01:32:33', '2024-02-21 01:32:33'),
(47, '1', 'Scooters', 'Scooters', 'Vehicle', 'A', '2024-02-21 01:32:42', '2024-02-21 01:32:42'),
(48, '1', 'Mopeds', 'Mopeds', 'Vehicle', 'A', '2024-02-21 01:32:50', '2024-02-21 01:32:50'),
(49, '1', 'Electric', 'Electric', 'Vehicle', 'A', '2024-02-21 01:32:58', '2024-02-21 01:32:58'),
(50, '1', 'peral-white', 'peral-white', 'Color', 'A', '2024-02-24 05:05:15', '2024-02-24 05:05:15'),
(52, '1', 'RED', 'RED', 'Color', 'A', '2024-03-12 06:27:29', '2024-03-12 06:27:29'),
(53, '1', 'NEON', 'NEON', 'Color', 'A', '2024-03-12 09:19:41', '2024-03-12 09:19:41'),
(59, '1', 'WHITE ,  GRAY , BLUE', 'WHITE ,   GRAY , BLUE ,', 'Color', 'A', '2024-03-13 12:24:34', '2024-03-13 12:24:34'),
(61, '1', 'PURPLE , STARLIGHT BLUE', 'PURPLE , STARLIGHT BLUE', 'Color', 'A', '2024-03-13 12:25:16', '2024-03-13 12:25:16'),
(62, '1', 'democolor', 'democolor', 'Color', 'A', '2024-03-13 12:34:54', '2024-03-13 12:34:54'),
(63, '1', 'BLACK , WHITE , GOLDEN , MATT  GRAY', 'BLACK , WHITE , GOLDEN , MATT  GRAY', 'Color', 'A', '2024-03-13 12:51:45', '2024-03-13 12:51:45'),
(66, '1', 'STRALIGHT BLUE , KLMT GOLD', 'STRALIGHT BLUE , KLMT GOLD', 'Color', 'A', '2024-03-13 13:40:54', '2024-03-13 13:40:54'),
(71, '1', 'WHITE , BLACK ,RED ,BLUE ,GRAY', 'WHITE , BLACK ,RED ,BLUE ,GRAY', 'Color', 'A', '2024-03-15 06:35:20', '2024-03-15 06:35:20'),
(72, '1', 'WHITE , BLACK , RED BLUE , BLUE , GRAY', 'WHITE , BLACK , RED BLUE , BLUE , GRAY', 'Color', 'A', '2024-03-15 06:36:05', '2024-03-15 06:36:05'),
(73, '1', 'WHITE , BLACK', 'WHITE , BLACK', 'Color', 'A', '2024-03-15 06:36:45', '2024-03-15 06:36:45'),
(74, '1', 'BLUE , BLACK , WHITE ,RED', 'BLUE , BLACK , WHITE ,RED', 'Color', 'A', '2024-03-15 06:37:12', '2024-03-15 06:37:12'),
(75, '1', 'BLUE , BLACK , WHITE ,RED', 'BLUE , BLACK , WHITE ,RED', 'Color', 'A', '2024-03-15 06:38:04', '2024-03-15 06:38:04'),
(76, '1', 'WHITE + RED WHEEL , BLACK+RED WHEEL', 'WHITE + RED WHEEL , BLACK+RED WHEEL', 'Color', 'A', '2024-03-15 06:39:01', '2024-03-15 06:39:01'),
(77, '1', 'WHITE , BLACK', 'WHITE , BLACK', 'Color', 'A', '2024-03-15 06:39:30', '2024-03-15 06:39:30'),
(78, '1', 'BLACK', 'BLACK', 'Color', 'A', '2024-03-15 06:39:46', '2024-03-15 06:39:46'),
(79, '1', 'RED , GRAY', 'RED , GRAY', 'Color', 'A', '2024-03-15 06:40:14', '2024-03-15 06:40:14'),
(80, '1', 'BLUE , WHITE ,MATT GRAY , ORANGE', 'BLUE , WHITE ,MATT GRAY , ORANGE', 'Color', 'A', '2024-03-15 06:42:57', '2024-03-15 06:42:57'),
(81, '1', 'ELIGANT RED , COPPER BRONZE', 'ELIGANT RED , COPPER BRONZE', 'Color', 'A', '2024-03-15 06:50:38', '2024-03-15 06:50:38'),
(82, '1', 'BLUE , WHITE , MATT GRAY ,ORANGE', 'BLUE , WHITE , MATT GRAY ,ORANGE', 'Color', 'A', '2024-03-15 06:51:37', '2024-03-15 06:51:37'),
(83, '1', 'YALLOW , BLACK , RED , BLUE', 'YALLOW , BLACK , RED , BLUE', 'Color', 'A', '2024-03-15 06:52:06', '2024-03-15 06:52:06'),
(84, '1', 'BLACK , STARKIGHT BLUE , PURPLE', 'BLACK , STARKIGHT BLUE , PURPLE', 'Color', 'A', '2024-03-15 06:52:50', '2024-03-15 06:52:50'),
(85, '1', 'WHITE , RED , TITANIUM GRAY', 'WHITE , RED , TITANIUM GRAY', 'Color', 'A', '2024-03-15 11:04:04', '2024-03-15 11:04:04'),
(86, '1', 'Magma Red, Lightning Black, Delta Blue, Stargaze Black, Galactic Grey, Dawn Orange, Nimbus Grey.', 'Magma Red, Lightning Black, Delta Blue, Stargaze Black, Galactic Grey, Dawn Orange, Nimbus Grey.', 'Color', 'A', '2024-03-19 13:40:52', '2024-03-19 13:40:52');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_12_29_125736_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ECoDLfJPY7pC5EOm6n71ELHrBuRtpeEfQEZ7OQtb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiN3V6SnBnd25zYmR1ZWpWTlVhbE1lOVRqM2tISkhxUDhVR3A5U256RSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92ZWhpY2xlc3RvY2svMSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJERsQWhGcTN3UUZBYy5nWFRRajNTRU9TREdaa0dBeXguTC85Y3doaDlLallPSHFveVBiQlNhIjtzOjU6ImFsZXJ0IjthOjA6e319', 1716536138);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `type`, `images`, `created_at`, `updated_at`) VALUES
(1, 'userhomeslider', 'uploads/vehicle/sliderone.jpg,uploads/vehicle/slidertwo.jpg,uploads/vehicle/sliderthree.jpg', '2024-01-17 10:56:18', '2024-01-17 11:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `test_rides`
--

CREATE TABLE `test_rides` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customerphoneno` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `leadstatus` varchar(255) DEFAULT NULL,
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_rides`
--

INSERT INTO `test_rides` (`id`, `customername`, `customerphoneno`, `type`, `vehicle`, `leadstatus`, `randomno`, `verifystatus`, `created_at`, `updated_at`) VALUES
(1, 'Dinesh', '8209165518', 'Bike', 'FZ', 'Purchased', '', '0', '2024-02-19 06:32:28', '2024-05-22 10:42:04'),
(17, 'Kane', '2222222222', 'Scooty', 'Activa 4G', NULL, '282160', '1', '2024-02-20 07:06:20', '2024-02-20 07:06:36'),
(18, 'Kane', '2222222222', 'Bike', 'R15', NULL, '361810', '0', '2024-02-21 01:04:34', '2024-02-21 01:04:34');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@ananttvs.in', NULL, '$2y$10$DlAhFq3wQFAc.gXTQj3SEOSDGZkGAyx.L/9cwhh9KjYOHqoyPbBSa', NULL, NULL, NULL, 'qz8YsdBTmGuhJlBZ7hr4GQ7X6o4Bjlls8Pokl0yXd8gqIBRyRtLO0F99xKAp', NULL, NULL, '2023-12-29 07:34:31', '2024-03-09 10:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `bannerimage` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `type`, `modelno`, `price`, `color`, `bannerimage`, `image`, `status`, `discription`, `created_at`, `updated_at`) VALUES
(16, 'TVS Ronin', 'Motorcycles', '2 CH', '207899 on Road price', 'Magma Red, Lightning Black, Delta Blue, Stargaze Black, Galactic Grey, Dawn Orange, Nimbus Grey.', '1709206673.jpg', 'public/uploads/vehicle/34adeb8e3242824038aa65460a47c29e.jpg,public/uploads/vehicle/fbaafc6ec0f0e70f1472122178b4a1a1.jpg,public/uploads/vehicle/ac1ad983e08ad3304a97e147f522747e.jpg', '1', 'TVS Ronin is a cruiser bike available in 4 variants and 7 colours. The TVS Ronin is powered by 225.9cc BS6 engine which develops a power of 20.1 bhp and a torque of 19.93 Nm. With both front and rear disc brakes, TVS Ronin comes up with anti-locking braking system. This Ronin bike weighs 159 kg and has a fuel tank capacity of 14 liters.', '2024-02-21 01:40:01', '2024-03-20 11:26:10'),
(17, 'TVS iQube', 'Scooters', 'I QUBE', '149910/- ON ROAD', 'WHITE , RED , TITANIUM GRAY', '1710240582.jpg', 'public/uploads/vehicle/2f364281f619584f24f63a794a12e354.webp,public/uploads/vehicle/8a88d5f412f2ad376f8597d28cbd3720.jpeg,public/uploads/vehicle/d0f4dae80c3d0277922f8371d5827292.jpg,public/uploads/vehicle/bd5af7cd922fd2603be4ee3dc43b0b77.jpg', '1', 'The TVS iQube base model is an electric scooter manufactured by TVS Motor Company. It\'s designed to offer an eco-friendly commuting solution with a focus on practicality and efficiency.\r\n\r\nKey features of the TVS iQube base model include:\r\n\r\nElectric Powertrain: The scooter is powered by an electric motor, eliminating emissions and reducing environmental impact. It runs on a rechargeable battery, making it cost-effective to operate and maintain.\r\n\r\nPerformance: The iQube base model delivers smooth and efficient performance suitable for urban commuting. While it may not have the same high-performance capabilities as upgraded versions, it offers adequate power for everyday riding needs.\r\n\r\nSmart Connectivity: The scooter features smart connectivity options, allowing riders to pair their smartphones with the scooter\'s display. This enables access to features like navigation, vehicle diagnostics, and notifications through a dedicated app.\r\n\r\nPractical Design: The iQube base model sports a practical design optimized for urban riding. It typically comes with features like ergonomic seating, sufficient storage space, and easy-to-use controls for enhanced convenience.\r\n\r\nSafety: TVS prioritizes safety in its scooters, and the iQube base model is no exception. It\'s equipped with safety features such as reliable braking systems, LED lighting for better visibility, and sturdy construction to ensure rider protection.\r\n\r\nCost-Effective: As a base model, the iQube offers an affordable entry point into electric scooter ownership. Its efficient electric powertrain also helps reduce fuel and maintenance costs over time, making it a cost-effective choice for urban commuters.\r\n\r\nOverall, the TVS iQube base model provides a practical and eco-friendly transportation solution for urban riders, combining electric power, smart connectivity, and safety features in an affordable package.', '2024-02-21 01:41:36', '2024-04-04 12:56:29'),
(18, 'TVS Scooty Pep', 'Scooters', 'null', '00000', 'Black', '1709200124.jpg', 'uploads/vehicle/f1903f234d3ba4da38a18aa25751457d.jpg', '0', 'this is scooty', '2024-02-21 01:42:20', '2024-02-29 12:21:57'),
(19, 'TVS Radeon', 'Motorcycles', 'ES', '83744 ON ROAD', 'peral-white', '1710328084.jpg', 'public/uploads/vehicle/22eda830d1051274a2581d6466c06e6c.jpg,public/uploads/vehicle/13403518ef9c1ce843a289d991f79bf5.jpg,public/uploads/vehicle/9b1fc5df81cadf52164c02bf92678f95.jpg,public/uploads/vehicle/5034a5d62f91942d2a7aeaf527dfe111.png', '1', 'TVS Radeon is a 109cc commuter bike. Radeon price in India ranges between Rs. 62,405 to 80,744. TVS Radeon gives a mileage of 68.6 kmpl. It gets disc brakes in the front and drum brakes at the rear, apart from this it weighs 115 kg and has a fuel tank capacity of 10 liters. The bike has a four speed gearbox.', '2024-02-24 05:05:52', '2024-03-13 11:08:04'),
(21, 'TVS RAIDER 125', 'Motorcycles', 'DISK CONECT', '106245  EX SHOWROOM', 'Black', '1710319391.jpg', 'public/uploads/vehicle/69cd21a0e0b7d5f05dc88a0be36950c7.jpg,public/uploads/vehicle/bfd2308e9e75263970f8079115edebbd.jpg,public/uploads/vehicle/42cbf4730aeac1d645324d4818104826.jpg,public/uploads/vehicle/fd4d801731725513a4d77aa9bb35534b.jpg', '1', 'TVS Raider\r\nIntroducing the TVS Raider 125, a testament to innovation and performance. This dynamic motorcycle combines a powerful 125cc engine with advanced features, including a reliable disc brake system, ensuring optimal safety and control. With its sleek design and agile handling, the TVS Raider 125 is engineered for urban exploration and beyond. Experience the thrill of the road like never before with the TVS Raider 125.', '2024-02-29 09:31:03', '2024-03-13 11:14:45'),
(22, 'Jupiter 125', 'Scooters', 'DISK', '89814  EX SHOWROOM', 'Black', '1710249859.png', 'public/uploads/vehicle/edea298442a67de045e88dfb6e5ea4a2.gif,public/uploads/vehicle/020bf2c45e7bb322f89a226bd2c5d41b.png,public/uploads/vehicle/7806689d934e610d660caf5536fea0b2.png', '1', 'this is jupiter\r\nIntroducing the Jupiter 125 Disk Model: A dynamic blend of power and precision. Equipped with a reliable disc brake system for enhanced safety and control. Designed for urban exploration, it offers superior performance and agility in every ride. Experience the thrill of the road like never before with Jupiter 125 Disk. \r\nON ROAD PRICE :  119106/-', '2024-02-29 09:58:49', '2024-03-12 13:24:19'),
(23, 'APACHE RR 310', 'Motorcycles', '310', '272000 EX- SHOWROOM', 'RED', '1710226706.jpg', 'public/uploads/vehicle/209a38b64aac6816dd61ee8f4286939c.jpg,public/uploads/vehicle/20cf775fa6b5dfe621ade096f5d85d52.png,public/uploads/vehicle/2227d753dc18505031869d44673728e2.jpg,public/uploads/vehicle/fccc64972a9468a11f125cadb090e89e.jpg', '1', 'Discover the adrenaline-pumping performance and cutting-edge technology of the TVS Apache RR 310. With its sleek design, advanced features, and race-inspired engineering, the RR 310 offers an unparalleled riding experience. Explore our website to learn more about this masterpiece of precision and power.\r\nThe TVS Apache RR 310 embodies the perfect fusion of style, performance, and innovation. Designed to thrill, this sportbike boasts cutting-edge technology and race-inspired engineering. Its sleek lines and aerodynamic profile not only turn heads but also enhance performance. With exceptional handling and acceleration, the Apache RR 310 offers an exhilarating riding experience on both the track and the road. Whether you\'re a speed enthusiast or a connoisseur of fine engineering, the Apache RR 310 is sure to exceed your expectations. Experience the ultimate ride with the TVS Apache RR 310.\r\nON ROAD PRICE  325968/- \r\nTVS Apache RR 310\r\nMotorcycle\r\nSportbike\r\nRacing\r\nPerformance\r\nTechnology\r\nDesign\r\nEngineering\r\nSpeed\r\nPrecision', '2024-03-12 06:58:26', '2024-03-12 10:59:05'),
(25, 'SPORT', 'Motorcycles', 'ES BSVI', '59431 EX SHOWROOM', 'Black', '1710234903.jpg', 'public/uploads/vehicle/f77ad541b6b5bc48c47d814b95491fbd.jpg', '1', 'The TVS Sport ES is a commuter motorcycle designed for efficiency and practicality. It features a sleek and sporty design with a focus on fuel economy and affordability. Equipped with an electric start (ES) system, it offers convenience for riders, especially in urban settings where frequent stops and starts are common.\r\n\r\nWith a reliable engine and efficient performance, the TVS Sport ES is ideal for daily commuting and city riding. Its lightweight construction and agile handling make it maneuverable in traffic, while its comfortable seating position ensures a pleasant riding experience, even on longer journeys.\r\n\r\nThe TVS Sport ES also comes with features like alloy wheels, a digital instrument cluster, and a range of vibrant color options, appealing to riders looking for style along with practicality. Overall, it\'s a dependable and economical choice for those seeking a reliable commuter motorcycle.\r\nTVS Sport ES\r\nMotorcycle\r\nCommuter bike\r\nElectric start\r\nFuel efficiency\r\nUrban commuting\r\nLightweight\r\nAgile handling\r\nReliable engine\r\nAffordable\r\nComfortable seating\r\nDigital instrument cluster\r\nAlloy wheels\r\nVibrant colors\r\nDaily commute', '2024-03-12 09:15:03', '2024-03-12 09:15:03'),
(26, 'XL 100', 'Mopeds', 'I TOUCH', '57379 EX SHOWROOM', 'Dark Blue', '1710324387.jpg', 'public/uploads/vehicle/dc116c922217ede2210c57237bd1c1ee.jpg,public/uploads/vehicle/4bbb5420ed2dc9a8eaaedc7ae59de448.jpg,public/uploads/vehicle/93b71ff0836bb95466a9de7aaa34de09.jpg,public/uploads/vehicle/6a30e32e56fce5cf381895dfe6ca7b6f.jpg', '1', 'XL100 Heavy Duty generates 4.29 bhp @ 6,000 rpm of power and 6.5 Nm @ 3,500 rpm of torque from its 99.7cc, single-cylinder, 4-stroke, 1-valve, air-cooled, eco-thrust fuel injection engine. XL100 Heavy Duty has both rear and front drum brakes with SBT (Synchronized Braking Technology). Available in 9 colors.', '2024-03-13 10:06:27', '2024-03-13 10:06:27'),
(27, 'JUPITER 110', 'Scooters', 'SMW', '76041   EX SHOWROOM', 'WHITE ,  GRAY , BLUE', '1710333474.jpg', 'public/uploads/vehicle/9c693b040f150014937c0072d90c00db.jpg,public/uploads/vehicle/2f635a9fe4a4d8d1ec9e3a111cc02f4b.jpg,public/uploads/vehicle/dc2208f9bbd11486d5dbbb9218e03017.jpg,public/uploads/vehicle/ba7e36c43aff315c00ec2b8625e3b719.jpg', '1', 'The new TVS Jupiter SMW is the most affordable model in the entire Jupiter line-up. It offers 110cc single-cylinder engine that equipped with the company’s ETFi (Eco Thrust Fuel injection) which offers smoother performance and enhanced fuel economy.', '2024-03-13 12:37:54', '2024-03-13 12:37:54'),
(29, 'JUPITER 110', 'Scooters', 'AOL', '79106 EX SHOWROOM', 'BLACK , WHITE , GOLDEN , MATT  GRAY', '1710334530.jpg', 'public/uploads/vehicle/afecc60f82be41c1b52f6705ec69e0f1.png,public/uploads/vehicle/5c151c2a9b76f9ef26d7e0f0d00c9a89.jpg,public/uploads/vehicle/64a08e5f1e6c39faeb90108c430eb120.webp', '1', 'The TVS Jupiter AOL, or Advanced Oil-cooled OHC Engine, is a variant of the popular TVS Jupiter scooter. This version boasts an advanced oil-cooled overhead cam (OHC) engine, which enhances the scooter\'s performance and durability. The oil-cooling system helps regulate engine temperature, ensuring optimal performance even under demanding conditions. With this technology, the TVS Jupiter AOL delivers improved fuel efficiency, smoother acceleration, and reduced engine wear, making it a reliable and efficient choice for riders seeking a dependable and powerful scooter experience.', '2024-03-13 12:55:30', '2024-03-13 12:55:30'),
(30, 'JUPITER 110', 'Scooters', 'ZX AOL', '83581  EX SHOWROOM', 'PURPLE , STARLIGHT BLUE', '1710335952.jpg', 'public/uploads/vehicle/dc9fa5f217a1e57b8a6adeb065560b38.png,public/uploads/vehicle/f9fe83f1ea3dd2108188fb7bf8aa5b3c.png,public/uploads/vehicle/d3d80b656929a5bc0fa34381bf42fbdd.jpg,public/uploads/vehicle/883e881bb4d22a7add958f2d6b052c9f.jpg,public/uploads/vehicle/acef5cc0bd5a0c190494e34ea4b04811.png,public/uploads/vehicle/7230b2b03e2da37352abf1a659545b44.jpg', '1', 'The TVS Jupiter ZX AOL combines style and performance with its Advanced Oil-cooled OHC Engine. This variant of the popular Jupiter series boasts a sophisticated oil-cooled overhead cam (OHC) engine, ensuring enhanced performance and durability. The oil-cooling system optimizes engine temperature, resulting in improved fuel efficiency, smoother acceleration, and reduced engine wear. With its striking design and advanced technology, the TVS Jupiter ZX AOL offers riders a reliable and efficient riding experience. Whether navigating city streets or cruising on the highway, this scooter delivers power, comfort, and style in equal measure.', '2024-03-13 13:19:12', '2024-03-13 13:19:12'),
(32, 'APACHE   RTR', 'Motorcycles', '200 2 CH', '178814 ON ROAD', 'BLACK', '1710488430.jpg', 'public/uploads/vehicle/adc8ca1b15e20915c3ea6008fc2f52ed.jpg,public/uploads/vehicle/b7da6669894867f04b8727876a69ffc0.jpg,public/uploads/vehicle/c1619d2ad66f7629c12c87fe21d32a58.jpg,public/uploads/vehicle/e0854e3c03ec877be65d351b90680d46.jpg,public/uploads/vehicle/b597460c506e8e35fb0cc1c1905dd3bc.jpg,public/uploads/vehicle/4b5b81483048c8942ed00caaa17b9535.jpg,public/uploads/vehicle/80384bb51273c4bd610693564d31e860.jpg,public/uploads/vehicle/fc76150735dde1d2d860aeb77ee2009e.jpg,public/uploads/vehicle/31c97cbb941d3e92d0e6f9925e9bc4d7.jpg,public/uploads/vehicle/fcc7fbed7c7c66964a52463e7498ad91.jpg,public/uploads/vehicle/305ddad049f65a2c241dbb6e6f746c54.jpg', '1', 'Apache RTR 200 – a masterpiece of engineering, design, and performance crafted to elevate your riding experience to unparalleled heights. As you embark on your journey, let us delve into what makes the Apache RTR 200 an epitome of excellence, destined to captivate every rider and enthusiast alike.\r\n\r\nSleek Design: From its aggressive stance to its aerodynamic contours, every aspect of the Apache RTR 200 exudes style and sophistication. With its sharp lines and dynamic silhouette, this motorcycle commands attention wherever it goes.\r\n\r\nPowerful Performance: Beneath its striking exterior lies a heart that beats with raw power. Equipped with a high-performance engine, the Apache RTR 200 delivers an adrenaline-fueled ride like no other. Whether you\'re navigating city streets or conquering winding highways, this machine offers unmatched performance and responsiveness.\r\n\r\nCutting-Edge Technology: Innovation is at the core of the Apache RTR 200. With advanced features such as ABS, EFI, and digital instrumentation, this motorcycle redefines the standards of technology in its class. Stay connected and informed with intuitive controls and seamless connectivity options.\r\n\r\nExceptional Handling: Designed to thrill, the Apache RTR 200 offers precise handling and agility that instills confidence in every rider. Whether you\'re carving through corners or navigating urban landscapes, this motorcycle responds with precision and poise, ensuring a thrilling and dynamic riding experience.\r\n\r\nComfort and Convenience: Ride in comfort with ergonomically designed seating and intuitive controls that prioritize rider convenience. With thoughtful features such as adjustable suspension and ample storage space, the Apache RTR 200 is engineered to enhance your riding pleasure mile after mile.\r\n\r\nUnmatched Safety: Safety is paramount, and the Apache RTR 200 is equipped with a range of safety features to ensure peace of mind on every ride. From advanced braking systems to superior grip tires, this motorcycle is engineered to keep you safe and secure in all riding conditions.\r\n\r\nPersonalization Options: Express your individuality with a range of customization options available for the Apache RTR 200. From vibrant color schemes to accessories that enhance both style and performance, make your mark on the road with a motorcycle that reflects your unique personality.\r\n\r\nJoin the Apache Family: Experience the thrill of riding like never before with the Apache RTR 200. Join a community of passionate riders and enthusiasts who share your love for adventure, performance, and the open road. Welcome to the world of Apache – where every ride is an unforgettable journey.\r\n\r\nDiscover the Apache RTR 200 and ignite your passion for riding today.', '2024-03-15 07:40:30', '2024-03-15 07:40:30'),
(33, 'APACHE   RTR', 'Motorcycles', '160 2 V', '146243', 'WHITE , BLACK ,RED ,BLUE ,GRAY', '1710498420.png', 'public/uploads/vehicle/0731460a8a5ce1626210cbf4385ae0ef.png,public/uploads/vehicle/af94ed0d6f5acc95f97170e3685f16c0.jpg,public/uploads/vehicle/59ab3ba90ae4b4ab84fe69de7b8e3f5f.jpg,public/uploads/vehicle/51f15efdd170e6043fa02a74882f0470.png', '1', 'Welcome to the world of adrenaline-pumping performance and cutting-edge design with the Apache 160 2V. Crafted to redefine your riding experience, this dynamic motorcycle combines power, style, and precision engineering to deliver an unparalleled journey on the road.\r\n\r\nPerformance:\r\nAt the heart of the Apache 160 2V lies a robust engine, meticulously designed to offer unmatched power and efficiency. Whether you\'re navigating through city streets or conquering winding highways, the Apache 160 2V\'s 160cc engine ensures a seamless blend of exhilarating acceleration and fuel economy. Experience the thrill of responsive throttle control and seamless gear shifts as you command the road with confidence.\r\n\r\nDesign:\r\nSleek and sporty, the Apache 160 2V is a visual masterpiece that commands attention wherever it goes. From its aggressive stance to its aerodynamic contours, every aspect of its design exudes a sense of power and dynamism. With its eye-catching graphics and premium finish, the Apache 160 2V stands out as a symbol of style and sophistication on the streets.\r\n\r\nFeatures:\r\nEquipped with advanced features and cutting-edge technology, the Apache 160 2V offers an unmatched riding experience. Whether it\'s the precision-engineered chassis for enhanced stability or the responsive braking system for superior control, every aspect of this motorcycle is designed to elevate your journey to new heights. With features such as LED lighting, digital instrumentation, and a comfortable seating posture, the Apache 160 2V ensures a ride that\'s as enjoyable as it is exhilarating.\r\n\r\nSafety:\r\nYour safety is our top priority, which is why the Apache 160 2V comes equipped with a range of safety features to keep you protected on every ride. From its robust frame construction to its advanced braking system, every aspect of this motorcycle is engineered to provide you with peace of mind on the road.\r\n\r\nJoin the Apache family today and experience the thrill of riding like never before. Whether you\'re a seasoned rider or a newcomer to the world of motorcycling, the Apache 160 2V promises an unforgettable journey filled with excitement, adventure, and endless possibilities.', '2024-03-15 10:27:00', '2024-03-15 10:27:00'),
(34, 'I QUBE', 'Electric', 'S', '163100', 'WHITE ,  GRAY , BLUE', '1710500304.jpg', 'public/uploads/vehicle/3a15c7d0bbe60300a39f76f8a5ba6896.jpg,public/uploads/vehicle/80c0e8c4457441901351e4abbcf8c75c.jpg,public/uploads/vehicle/0cc6ee01c82fc49c28706e0918f57e2d.jpg,public/uploads/vehicle/cd6b73b67c77edeaff94e24b961119dd.jpg,public/uploads/vehicle/43b52842663fa6e4100c72751d08de6f.jpg,public/uploads/vehicle/8832ae39136fb470b3fbbf9f47b4570d.png', '1', 'Discover the epitome of eco-friendly urban commuting with the TVS iQube S Electric Scooter. Designed to revolutionize your daily travels, the iQube S combines cutting-edge technology with stylish aesthetics for a truly electrifying riding experience. Say goodbye to fuel emissions and hello to seamless performance as you navigate city streets with ease. Visit our website to learn more about the iQube S and join the electric revolution today.\r\n\r\nElectric scooter\r\nEco-friendly commuting\r\nUrban mobility\r\nSustainable transportation\r\nCutting-edge technology\r\nStylish design\r\nZero emissions\r\nCity travel\r\nSeamless performance\r\nElectric revolution\r\nTVS iQube S\r\nElectric vehicle innovation\r\nGreen transportation\r\nSustainable living\r\nSmart mobility solution', '2024-03-15 10:58:24', '2024-03-15 10:58:24'),
(35, 'TVS NTORQ 125', 'Scooters', 'RACE XP', '124043', 'BLACK', '1710570981.jpg', 'public/uploads/vehicle/e9b82e4d55c91c6abbf9dedf898172a0.jpg,public/uploads/vehicle/0a65e195cb51418279b6fa8d96847a60.jpg,public/uploads/vehicle/d53697441ef12a45422f6660202f9840.jpg,public/uploads/vehicle/71e9c6620d381d60196ebe694840aaaa.jpg,public/uploads/vehicle/c2839bed26321da8b466c80a032e4714.jpg,public/uploads/vehicle/82f292a22966b857d968fb578ccbead9.jpeg', '1', 'The NTORQ Race XP Edition boasts a sleek and sporty design that exudes confidence and dynamism. With its sharp lines, bold graphics, and eye-catching colors, this scooter is sure to grab attention wherever you go. Whether you\'re cruising through city streets or making a statement at a gathering, the NTORQ Race XP Edition is guaranteed to make heads turn.\r\n\r\nBut it\'s not just about looks – this scooter is packed with power and performance to match its striking appearance. Equipped with an advanced engine and performance-tuned features, the NTORQ Race XP Edition delivers exhilarating acceleration and superior handling, ensuring an adrenaline-pumping ride every time you hit the road.\r\n\r\nStay connected and in control with the latest technology integrated into the NTORQ Race XP Edition. From the intuitive digital console with smartphone connectivity to advanced navigation features, this scooter keeps you informed and entertained throughout your journey.\r\n\r\nSafety is always a top priority, and the NTORQ Race XP Edition is equipped with cutting-edge safety features to give you peace of mind on every ride. With advanced braking systems, superior grip tires, and responsive handling, you can ride confidently knowing that you\'re protected on all fronts.\r\n\r\nExperience the thrill of the ride like never before with the TVS NTORQ Race XP Edition. Whether you\'re a seasoned rider or a newcomer to the world of scooters, this is the ultimate choice for those who demand style, performance, and excitement in every ride. Don\'t just ride – race ahead with the NTORQ Race XP Edition.\r\n\r\nDiscover the unmatched features of the TVS NTORQ Race XP Edition:\r\n\r\nPowerful Performance: Equipped with a high-performance engine, the NTORQ Race XP Edition delivers exhilarating acceleration and dynamic performance, making every ride an adventure.\r\n\r\nSporty Design: With its sleek lines, aggressive styling, and vibrant colors, the NTORQ Race XP Edition stands out from the crowd, turning heads wherever you go.\r\n\r\nAdvanced Technology: Stay connected on the go with the NTORQ Race XP Edition\'s advanced technology features, including a digital console with smartphone connectivity and navigation assistance.\r\n\r\nSuperior Handling: Engineered for precision and control, this scooter offers responsive handling and superior grip, ensuring a smooth and confident ride on any terrain.\r\n\r\nSafety First: Built with safety in mind, the NTORQ Race XP Edition comes equipped with advanced braking systems, superior grip tires, and other safety features to keep you protected on every ride.\r\n\r\nComfortable Ride: Designed with rider comfort in mind, the NTORQ Race XP Edition features ergonomic seating, ample legroom, and adjustable suspension for a smooth and enjoyable riding experience.\r\n\r\nConvenience: Enjoy added convenience with features like USB charging ports, under-seat storage, and remote keyless ignition, making your daily commute or weekend adventure hassle-free.\r\n\r\nCustomizable Experience: Personalize your ride with a range of accessories and customization options available for the NTORQ Race XP Edition, allowing you to make it truly your own.\r\n\r\nExperience the thrill of the ride like never before with the TVS NTORQ Race XP Edition – where style, performance, and technology come together to redefine the scooter experience.', '2024-03-16 06:36:21', '2024-03-16 06:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_stocks`
--

CREATE TABLE `vehicle_stocks` (
  `id` int(11) NOT NULL,
  `vehiclecategory` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `vehiclemodal` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `frameno` varchar(255) DEFAULT NULL,
  `engineno` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_stocks`
--

INSERT INTO `vehicle_stocks` (`id`, `vehiclecategory`, `series`, `vehiclemodal`, `color`, `frameno`, `engineno`, `status`, `created_at`, `updated_at`) VALUES
(53, 'Moped', 'XL 101', 'TVS XL 100 COM ITS-BSVI', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', 'MD621CP20R1B01025', 'BP2BR1307543', '1', '2024-05-24 07:33:07', '2024-05-24 07:33:40'),
(54, 'Moped', 'XL 102', 'TVS XL 100 COM ITS-BSVI', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', 'MD621CP20R1B01026', 'BP2BR1307544', '1', '2024-05-24 07:33:07', '2024-05-24 07:33:42'),
(56, 'Moped', 'XL 104', 'TVS XL 100 COM ITS-BSVI', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', 'MD621CP20R1B01028', 'BP2BR1307546', '0', '2024-05-24 07:33:07', '2024-05-24 07:33:07'),
(57, 'Moped', 'XL 105', 'TVS XL 100 COM ITS-BSVI', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', 'MD621CP20R1B01029', 'BP2BR1307547', '0', '2024-05-24 07:33:07', '2024-05-24 07:33:07'),
(58, 'Moped', 'XL 106', 'TVS XL 100 COM ITS-BSVI', 'TVS XL100COMFORT I-TOUCHSTART-OBDIIA G.B', 'MD621CP20R1B01030', 'BP2BR1307548', '0', '2024-05-24 07:33:07', '2024-05-24 07:33:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_vehicles`
--
ALTER TABLE `buy_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_requests`
--
ALTER TABLE `make_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_rides`
--
ALTER TABLE `test_rides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_stocks`
--
ALTER TABLE `vehicle_stocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_vehicles`
--
ALTER TABLE `buy_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `make_requests`
--
ALTER TABLE `make_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_rides`
--
ALTER TABLE `test_rides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vehicle_stocks`
--
ALTER TABLE `vehicle_stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
