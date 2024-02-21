-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 08:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `rcnumber` varchar(255) NOT NULL,
  `invoicenumber` varchar(255) NOT NULL,
  `insuranceid` varchar(255) NOT NULL,
  `rcimage` text DEFAULT NULL,
  `invoiceimage` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `insuranceimage` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy_vehicles`
--

INSERT INTO `buy_vehicles` (`id`, `customer_id`, `vehicle_id`, `vehicletype`, `chassisnumber`, `color`, `rcnumber`, `invoicenumber`, `insuranceid`, `rcimage`, `invoiceimage`, `status`, `insuranceimage`, `created_at`, `updated_at`) VALUES
(5, '1', '12', 'Bike', '201HAR8', 'Black', '123456', '12345', '12345', '1704350557.webp', '1704350557.webp', '0', '1704350557.webp', '2024-01-04 01:12:37', '2024-01-05 07:13:02'),
(6, '3', '8', 'Cars', '201Y', 'Black', '133455', 'RRR', 'EEE', '1704441068.pdf', '1704441068.pdf', '0', '1704441068.pdf', '2024-01-04 01:34:08', '2024-01-05 02:21:08'),
(7, '1', '9', 'Cars', '201GAAA', 'Dark Blue', '1288AAAA', 'AAA', 'BBB', 'C:\\xampp\\tmp\\php9913.tmp', 'C:\\xampp\\tmp\\php9914.tmp', '0', 'C:\\xampp\\tmp\\php9925.tmp', '2024-01-04 02:15:43', '2024-01-05 02:04:17'),
(8, '3', '13', 'Bike', '301Ydfgdf', 'White', '123AA', 'AAA', 'BBB', '1704444187.pdf', '1704444187.pdf', '0', '1704444187.pdf', '2024-01-04 04:42:50', '2024-01-05 03:13:07'),
(10, '6', '13', 'Bike', 'QQQQ2', 'Black', '12345689109', 'AAA', 'BBB', '1705570981.jpg', '1705570981.jpg', '0', '1705570981.jpg', '2024-01-18 04:13:02', '2024-01-18 04:13:02');

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
(1, 'Nitesh Sharma', '8209165518', 'nitzz@gmail.com', 'Ajmer', 'Rajasthan', 'India', 'this is me', '$2y$10$5307wed1JII18uyred./teVlAjdsD.PR67XUGzAnhjg..aL32EHOO', '2024-01-02 05:26:43', '2024-01-18 06:09:37'),
(2, 'Kishan Gopal', '8209167518', 'kishan@gmail.com', 'Jaipur', 'Rajasthan', 'India', 'This is K', '', '2024-01-02 06:34:58', '2024-01-18 05:24:07'),
(3, 'Anshul Kumar', '8209775518', 'anshul@gmail.com', 'Ajmer', 'Rajasthan', 'India', 'This is Anshul', '12345678', '2024-01-02 06:45:08', '2024-01-18 08:49:13'),
(6, 'Roman Reings', '2222222222', 'roman@gmail.com', 'Ajmer', 'Raj', 'India', 'sadas', '$2y$10$4G7CJnoIEhlnHZeLGxsSWuk.c6v7J3ey2VeGHrz7tWYMiEFHKLVI2', '2024-01-18 01:28:35', '2024-01-18 01:28:35');

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
  `phoneno` varchar(255) DEFAULT NULL,
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `leadid`, `name`, `phoneno`, `randomno`, `verifystatus`, `created_at`, `updated_at`) VALUES
(22, NULL, 'admin', '9999999999', '', '0', '2024-02-10 04:32:51', '2024-02-10 04:32:51'),
(23, NULL, 'Anshul', '9999999999', '', '0', '2024-02-10 04:33:42', '2024-02-10 04:33:42'),
(24, NULL, 'admin', '9999999999', '', '0', '2024-02-10 04:37:16', '2024-02-10 04:37:16'),
(72, NULL, 'Nitesh', '8209165518', '336064', '1', '2024-02-20 06:10:29', '2024-02-20 06:10:53'),
(73, NULL, 'shakti', '8794651987', '941713', '0', '2024-02-20 06:11:37', '2024-02-20 06:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `make_requests`
--

CREATE TABLE `make_requests` (
  `id` int(11) NOT NULL,
  `requestphoneno` varchar(255) NOT NULL,
  `requestcomments` text NOT NULL,
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `make_requests`
--

INSERT INTO `make_requests` (`id`, `requestphoneno`, `requestcomments`, `randomno`, `verifystatus`, `created_at`, `updated_at`) VALUES
(1, '8209165518', 'dsfsdfdsf', '', '0', '2024-02-19 07:10:21', '2024-02-19 07:10:21'),
(6, '8209165518', 'this is nitesh', '415584', '1', '2024-02-20 07:48:34', '2024-02-20 07:48:49');

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
(34, '1', 'Black', 'Black', 'Color', 'A', '2024-01-02 23:14:00', '2024-01-02 23:14:00'),
(35, '1', 'Dark Blue', 'Dark Blue', 'Color', 'A', '2024-01-02 23:14:13', '2024-01-02 23:14:13'),
(37, '1', 'Payment Button', 'Payment Button', 'Master', 'A', '2024-01-17 01:40:24', '2024-01-17 01:40:24'),
(38, '1', 'Pay Now', 'link', 'Payment Button', 'A', '2024-01-17 01:40:53', '2024-01-17 01:40:53'),
(39, '1', 'Payment with Paytm', 'link', 'Payment Button', 'A', '2024-01-17 01:42:18', '2024-01-17 01:42:18'),
(40, '1', 'Payment with PhonePe', 'link', 'Payment Button', 'A', '2024-01-17 01:42:42', '2024-01-17 01:42:42'),
(46, '1', 'Motorcycles', 'Motorcycles', 'Vehicle', 'A', '2024-02-21 01:32:33', '2024-02-21 01:32:33'),
(47, '1', 'Scooters', 'Scooters', 'Vehicle', 'A', '2024-02-21 01:32:42', '2024-02-21 01:32:42'),
(48, '1', 'Mopeds', 'Mopeds', 'Vehicle', 'A', '2024-02-21 01:32:50', '2024-02-21 01:32:50'),
(49, '1', 'Electric', 'Electric', 'Vehicle', 'A', '2024-02-21 01:32:58', '2024-02-21 01:32:58');

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
('lT9AJeEOXpjzpBkR3HwJwj2muzGsUek1f0rktvLf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQWFva01TM3NHSklBMDZVTUE4cjlYTnQwYzh5bkozemEzN09lTkVqWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9uZXdjdXN0b21lciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDUzMDd3ZWQxSklJMTh1eXJlZC4vdGVWbEFqZHNELlBSNjdYVUd6QW5oamcuLmFMMzJFSE9PIjt9', 1708499561);

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
  `randomno` varchar(255) NOT NULL,
  `verifystatus` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_rides`
--

INSERT INTO `test_rides` (`id`, `customername`, `customerphoneno`, `type`, `vehicle`, `randomno`, `verifystatus`, `created_at`, `updated_at`) VALUES
(1, 'Dinesh', '8209165518', 'Bike', 'FZ', '', '0', '2024-02-19 06:32:28', '2024-02-19 06:32:28'),
(17, 'Kane', '2222222222', 'Scooty', 'Activa 4G', '282160', '1', '2024-02-20 07:06:20', '2024-02-20 07:06:36'),
(18, 'Kane', '2222222222', 'Bike', 'R15', '361810', '0', '2024-02-21 01:04:34', '2024-02-21 01:04:34');

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
(1, 'Nitesh', 'nitzz@gmail.com', NULL, '$2y$10$5307wed1JII18uyred./teVlAjdsD.PR67XUGzAnhjg..aL32EHOO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-29 07:34:31', '2023-12-29 07:34:31');

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
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `type`, `modelno`, `price`, `color`, `image`, `status`, `discription`, `created_at`, `updated_at`) VALUES
(14, 'TVS Jupiter 125', 'Scooters', 'null', '00000', 'Black', 'uploads/vehicle/731c83db8d2ff01bdc000083fd3c3740.jpg', '1', 'this is jupiter', '2024-02-21 01:37:52', '2024-02-21 01:37:52'),
(15, 'TVS Raider', 'Motorcycles', 'null', '0000', 'Black', 'uploads/vehicle/6b5ce5a5aa1b506c66ece16c4cd9138d.jpg', '1', 'this is raider', '2024-02-21 01:39:02', '2024-02-21 01:39:02'),
(16, 'TVS Ronin', 'Motorcycles', 'null', '00000', 'Black', 'uploads/vehicle/1d49780520898fe37f0cd6b41c5311bf.jpg', '1', 'this is ronin', '2024-02-21 01:40:01', '2024-02-21 01:40:01'),
(17, 'TVS iQube', 'Scooters', 'null', '00000', 'Dark Blue', 'uploads/vehicle/e334fd9dac68f13fa1a57796148cf812.jpg', '1', 'this is IQube', '2024-02-21 01:41:36', '2024-02-21 01:41:36'),
(18, 'TVS Scooty Pep', 'Scooters', 'null', '00000', 'Black', 'uploads/vehicle/f1903f234d3ba4da38a18aa25751457d.jpg', '1', 'this is scooty', '2024-02-21 01:42:20', '2024-02-21 01:42:20');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy_vehicles`
--
ALTER TABLE `buy_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `make_requests`
--
ALTER TABLE `make_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
