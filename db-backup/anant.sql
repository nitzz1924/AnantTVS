-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 02:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy_vehicles`
--

INSERT INTO `buy_vehicles` (`id`, `customer_id`, `vehicle_id`, `vehicletype`, `chassisnumber`, `color`, `rcnumber`, `invoicenumber`, `insuranceid`, `rcimage`, `invoiceimage`, `status`, `insuranceimage`, `created_at`, `updated_at`) VALUES
(5, '1', '12', 'Bike', '201HAR8', 'Black', '123456', '12345', '12345', '1704350557.webp', '1704350557.webp', '0', '1704350557.webp', '2024-01-04 01:12:37', '2024-01-05 07:13:02'),
(6, '3', '8', 'Cars', '201Y', 'Black', '133455', 'RRR', 'EEE', '1704441068.pdf', '1704441068.pdf', '0', '1704441068.pdf', '2024-01-04 01:34:08', '2024-01-05 02:21:08'),
(7, '1', '9', 'Cars', '201GAAA', 'Dark Blue', '1288AAAA', 'AAA', 'BBB', 'C:\\xampp\\tmp\\php9913.tmp', 'C:\\xampp\\tmp\\php9914.tmp', '0', 'C:\\xampp\\tmp\\php9925.tmp', '2024-01-04 02:15:43', '2024-01-05 02:04:17'),
(8, '3', '13', 'Bike', '301Ydfgdf', 'White', '123AA', 'AAA', 'BBB', '1704444187.pdf', '1704444187.pdf', '0', '1704444187.pdf', '2024-01-04 04:42:50', '2024-01-05 03:13:07');

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customername`, `customerphoneno`, `customeremailaddress`, `customercity`, `customerstate`, `customercountry`, `customeraddress`, `created_at`, `updated_at`) VALUES
(1, 'Nitesh Sharma', '8209165518', 'nitzz@gmail.com', 'Ajmer', 'Rajasthan', 'India', 'this is me', '2024-01-02 05:26:43', '2024-01-03 07:19:36'),
(2, 'Kishan Gopal', '8209165518', 'kishan@gmail.com', 'Jaipur', 'Rajasthan', 'India', 'This is K', '2024-01-02 06:34:58', '2024-01-03 06:49:09'),
(3, 'Anshul Kumar', '8209165518', 'anshul@gmail.com', 'Ajmer', 'Rajasthan', 'India', 'This is Anshul', '2024-01-02 06:45:08', '2024-01-04 02:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `leadid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `leadid`, `name`, `phoneno`, `email`, `city`, `state`, `country`, `created_at`, `updated_at`) VALUES
(4, '13', 'Anshul', '1111111118', 'nitzz@gmail.com', 'Ajmer', 'Rajasthan', 'India', '2024-01-16 07:46:59', '2024-01-16 07:46:59');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `parent_id`, `label`, `value`, `type`, `status`, `created_at`, `updated_at`) VALUES
(10, '1', 'Vehicle', 'Vehicle', 'Master', 'A', '2023-12-30 02:53:53', '2023-12-30 02:53:53'),
(26, '1', 'Bike', 'Bike', 'Vehicle', 'A', '2023-12-30 04:18:24', '2023-12-30 04:18:24'),
(27, '1', 'PPC', 'PPC', 'Pumps', 'A', '2023-12-30 04:18:55', '2023-12-30 04:18:55'),
(28, '1', 'Plastic', 'Plastic', 'Pumps', 'A', '2023-12-30 04:19:09', '2023-12-30 04:19:09'),
(29, '1', 'Cars', 'Cars', 'Vehicle', 'A', '2023-12-30 05:55:05', '2023-12-30 05:55:05'),
(31, '1', 'Python', 'Python', 'Coding', 'A', '2023-12-31 23:48:00', '2023-12-31 23:48:00'),
(32, '1', 'Scooty', 'Scooty', 'Vehicle', 'A', '2024-01-02 00:11:54', '2024-01-02 00:11:54'),
(33, '1', 'Color', 'Color', 'Master', 'A', '2024-01-02 23:13:47', '2024-01-02 23:13:47'),
(34, '1', 'Black', 'Black', 'Color', 'A', '2024-01-02 23:14:00', '2024-01-02 23:14:00'),
(35, '1', 'Dark Blue', 'Dark Blue', 'Color', 'A', '2024-01-02 23:14:13', '2024-01-02 23:14:13'),
(37, '1', 'Payment Button', 'Payment Button', 'Master', 'A', '2024-01-17 01:40:24', '2024-01-17 01:40:24'),
(38, '1', 'Pay Now', 'link', 'Payment Button', 'A', '2024-01-17 01:40:53', '2024-01-17 01:40:53'),
(39, '1', 'Payment with Paytm', 'link', 'Payment Button', 'A', '2024-01-17 01:42:18', '2024-01-17 01:42:18'),
(40, '1', 'Payment with PhonePe', 'link', 'Payment Button', 'A', '2024-01-17 01:42:42', '2024-01-17 01:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aSir9T20iebQwEWrR6cGCSEOB7kkX8JWq48tV6ia', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWWdSUTJhUHV0R3ptT1dZeWM2enpZYjVyQ0N3SVU1MzBQUG5UZ2RsUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC92aWV3bG9naW5wYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ1MzA3d2VkMUpJSTE4dXlyZWQuL3RlVmxBamRzRC5QUjY3WFVHekFuaGpnLi5hTDMyRUhPTyI7fQ==', 1705497987);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `type`, `images`, `created_at`, `updated_at`) VALUES
(1, 'userhomeslider', 'uploads/vehicle/sliderone.jpg,uploads/vehicle/slidertwo.jpg,uploads/vehicle/sliderthree.jpg', '2024-01-17 10:56:18', '2024-01-17 11:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `type`, `modelno`, `price`, `color`, `image`, `status`, `discription`, `created_at`, `updated_at`) VALUES
(8, 'Swift Desire', 'Cars', '201H156', '10000', 'Black', 'uploads/vehicle/94f4ede62112b790c91d5e64fdb09cb8.jpg,uploads/vehicle/243f6a5292350cc163601aac9ad3e854.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quod voluptatibus est repellendus in minima error harum perspiciatis dolores quia! Natus omnis odit, explicabo magni ab possimus ratione suscipit enim deleniti recusandae libero laboriosam ', '2024-01-01 03:28:57', '2024-01-01 07:57:31'),
(9, 'Maruti 800', 'Cars', '201H12', '10000', 'Black', 'uploads/vehicle/800.webp', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quod voluptatibus est repellendus in minima error harum perspiciatis dolores quia! Natus omnis odit, explicabo magni ab possimus ratione suscipit enim deleniti recusandae libero laboriosam illo laudantium eum! Quod fuga a dolorem cupiditate, officia nesciunt aut, temporibus soluta odit aspernatur voluptates.', '2024-01-01 03:58:45', '2024-01-04 07:23:06'),
(10, 'R15', 'Bike', '201H111', '100000', 'Black', 'uploads/vehicle/cfd2b32e4caf5678c34b631f56c03686.jpg,uploads/vehicle/74888d4e8f1b989420edfb5b19659c77.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quod voluptatibus est repellendus in minima error harum perspiciatis dolores quia! Natus omnis odit, explicabo magni ab possimus ratione suscipit enim deleniti recusandae libero laboriosam illo laudantium eum! Quod fuga a dolorem cupiditate, officia nesciunt aut, temporibus soluta odit aspernatur voluptates.', '2024-01-01 07:02:25', '2024-01-01 23:10:10'),
(11, 'Activa 4G', 'Scooty', '401H1588', '60000', 'Brown', 'uploads/vehicle/b6e32320fa6bc5a588b90183b95dc028.jpg,uploads/vehicle/5b8e9841e87fb8fc590434f5d933c92c.jpg', '0', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quod voluptatibus est repellendus in minima error harum perspiciatis dolores quia! Natus omnis odit, explicabo magni ab possimus ratione suscipit enim deleniti recusandae libero laboriosam', '2024-01-02 00:13:04', '2024-01-02 01:18:36'),
(12, 'Pulsar 220', 'Bike', '201H133', '1500000', 'Black', 'uploads/vehicle/58e16dc760ca166c476403499ff5c59b.webp,uploads/vehicle/243f6a5292350cc163601aac9ad3e854.jpg', '0', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda blanditiis, quam natus odio, molestias consequatur quod, soluta fugit et nobis fuga. Iure, nulla magnam veritatis doloribus pariatur, harum eos sequi voluptas animi tempore voluptatibus. Repellat quae corrupti dicta quibusdam eos, itaque at cupiditate temporibus dolores iusto hic ducimus error eligendi?', '2024-01-04 00:43:05', '2024-01-04 06:24:34'),
(13, 'FZ', 'Bike', '205GYX', '120000', 'Black', 'uploads/vehicle/58e16dc760ca166c476403499ff5c59b.webp,uploads/vehicle/243f6a5292350cc163601aac9ad3e854.jpg', '0', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda blanditiis, quam natus odio, molestias consequatur quod, soluta fugit et nobis fuga. Iure, nulla magnam veritatis doloribus pariatur, harum eos sequi voluptas animi tempore voluptatibus. Repellat quae corrupti dicta quibusdam eos, itaque at cupiditate temporibus dolores iusto hic ducimus error eligendi?', '2024-01-04 04:37:34', '2024-01-04 06:24:35');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
