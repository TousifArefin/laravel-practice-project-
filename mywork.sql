-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2023 at 09:56 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywork`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(10, 'Orange', 'image/brand/1735792077801994.jpg', '2022-06-16 05:52:04', NULL),
(12, 'Break fast', 'image/brand/1735793570902818.jpg', '2022-06-16 06:15:48', NULL),
(14, 'Healty food', 'image/brand/1735793607144560.jpg', '2022-06-16 06:16:23', NULL),
(15, 'Ots', 'image/brand/1735793649660435.jpg', '2022-06-16 06:17:02', NULL),
(16, 'Soft drinks', 'image/brand/1736401525740386.jpg', '2022-06-22 23:18:59', NULL),
(17, 'Bargars', 'image/brand/1737064443895561.jpg', '2022-06-30 06:55:48', NULL),
(18, 'Quemby Mcmahon', 'image/brand/1742710665374653.jpg', '2022-08-31 14:40:04', NULL),
(19, 'Jerry Robles', 'image/brand/1742710855955132.jpg', '2022-08-31 14:43:04', NULL),
(20, 'Francesca Santana', 'image/brand/1745291201566700.jpg', '2022-09-29 02:16:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(27, 1, 'web design', 'web-design', '2022-07-20 06:26:51', '2022-07-20 06:26:51', NULL),
(28, 1, 'Web Development', 'web-development', '2022-07-20 06:29:01', '2022-07-20 06:29:01', NULL),
(29, 1, 'Networking', 'networking', '2022-07-20 06:29:31', '2022-07-20 06:29:31', NULL),
(30, 1, 'Graphic Design', 'graphic-design', '2022-07-20 06:30:00', '2022-07-20 06:30:00', NULL),
(31, 1, 'App Development', 'app-development', '2022-07-20 06:37:46', '2023-01-23 01:14:12', '2023-01-23 01:14:12');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2022_06_02_101133_create_sessions_table', 1),
(7, '2022_06_06_063757_create_categories_table', 2),
(8, '2022_06_13_103529_create_brands_table', 3),
(9, '2022_06_13_120755_create_brands_table', 4),
(10, '2022_06_14_095646_create_brands_table', 5),
(11, '2022_06_23_141441_create_multipics_table', 6),
(12, '2022_06_30_130221_create_sliders_table', 7),
(13, '2022_07_02_124951_create_protfolios_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `multipics`
--

CREATE TABLE `multipics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multipics`
--

INSERT INTO `multipics` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'image/multi/1736540163761095.jpg', '2022-06-24 12:02:34', NULL),
(2, 'image/multi/1736540165016954.jpg', '2022-06-24 12:02:35', NULL),
(3, 'image/multi/1736540166046082.jpg', '2022-06-24 12:02:36', NULL),
(4, 'image/multi/1736540367075516.jpg', '2022-06-24 12:05:49', NULL),
(5, 'image/multi/1736540368740712.jpg', '2022-06-24 12:05:51', NULL),
(6, 'image/multi/1736540371062547.jpg', '2022-06-24 12:05:53', NULL),
(7, 'image/multi/1736607013374703.jpg', '2022-06-25 05:45:08', NULL),
(8, 'image/multi/1736607015291341.jpg', '2022-06-25 05:45:09', NULL),
(9, 'image/multi/1736607016836176.jpg', '2022-06-25 05:45:11', NULL),
(10, 'image/multi/1736607018830560.jpg', '2022-06-25 05:45:12', NULL),
(11, 'image/multi/1736607019921396.jpg', '2022-06-25 05:45:12', NULL),
(12, 'image/multi/1736630545968641.jpg', '2022-06-25 11:59:09', NULL),
(13, 'image/multi/1736630582176610.jpg', '2022-06-25 11:59:44', NULL),
(14, 'image/multi/1736630623302578.jpg', '2022-06-25 12:00:23', NULL),
(15, 'image/multi/1736630623885476.jpg', '2022-06-25 12:00:24', NULL),
(16, 'image/multi/1736630624906776.jpg', '2022-06-25 12:00:25', NULL),
(17, 'image/multi/1736630626685288.jpg', '2022-06-25 12:00:26', NULL),
(18, 'image/multi/1736630627742370.jpg', '2022-06-25 12:00:26', NULL);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `protfolios`
--

CREATE TABLE `protfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `protfolios`
--

INSERT INTO `protfolios` (`id`, `category_id`, `name`, `title`, `details`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, 27, 'Alibaba', 'E-commerce', 'Realizing the surge in ecommerce platform in bangladesh', 'image/protfolio/1739335661549355.jpg', 'https://www.daraz.com.bd', '2022-07-24 21:45:51', '2022-07-25 08:35:48'),
(3, 29, 'Abbar Network', 'Networking site', 'Amber IT has come a long way since its establishment in 1997. From small beginnings as a provider of dial-up & radio link Internet access to local businesses, we have grown consistently and organically as a communications provider serving a diverse portfolio of business class voice and data services.', 'image/protfolio/1739335575111220.jpg', 'https://www.amberit.com.bd/', '2022-07-24 22:45:20', '2022-07-25 08:34:25'),
(4, 27, 'Wade Lewis', 'In aute tenetur duis', 'Iusto in anim esse b', 'image/protfolio/1742710694142447.jpg', 'Nulla praesentium id', '2022-08-31 14:40:31', NULL),
(5, 30, 'Dahlia Finch', 'Architecto velit fug', 'Voluptatem ut sint a', 'image/protfolio/1742710819805671.jpg', 'Quaerat consequatur', '2022-08-31 14:42:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('s6ViyTwh3x8wSReU2BscAXoaH1YsH6XW9lUxF68F', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZ3BBeHdlMVpJdUoyWEMwYUlRdWxmSk5uZFRLeUJKb1FtaW9wa0QyVyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjMyOiJodHRwOi8vbXl3b3JrLnRlc3QvYnJhbmQvZWRpdC8xOCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcHBtc2pMVFRla0RIWDcyVjNSeWN2dVlKY1ZRSWZ0MUlhVkgydFl4WTlxN2RJbHQzTldRaWEiO30=', 1674465128);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'In perspiciatis tem', 'Autem sunt enim et d', 'image/slider/1737707074212150.jpg', '2022-07-07 09:10:08', NULL),
(2, 'Eu voluptas ad est', 'Sed aliquid quisquam', 'image/slider/1737707097801113.jpg', '2022-07-07 09:10:31', NULL),
(5, 'Do molestias similiq', 'Quam fugiat ratione', 'image/slider/1738218822485003.jpg', '2022-07-13 00:44:09', NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
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
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$ppmsjLTTekDHX72V3RycvuYJcVQIft1IaVH2tYxY9q7dIlt3NWQia', NULL, NULL, NULL, 'wIzc5tMl8IiVkHEzmuoATqdfhIUt3SBcXsr1tecfjZKUUiHUVN4ULRlLziSg', NULL, 'profile-photos/XB7aqEvAcwyVe0PWi0py9HNVUiGmSZTHzcDPTHLN.jpg', '2022-06-02 04:18:49', '2022-07-21 01:07:15'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$K60oVf9PVzREdU98w1h6r.J5FeLAhci9ULPPjSXEDXNhn0FD21.xK', NULL, NULL, NULL, NULL, NULL, 'profile-photos/KLKN7ZedARG5Ra5rirKfgi1SoCC9ZrA1qm2KsLNr.jpg', '2022-06-02 06:38:10', '2022-06-02 06:38:44'),
(3, 'Tousif', 'tousif@gmail.com', NULL, '$2y$10$sOAjW6O2942KIAuCzkD66.vxXNTXN00FZcCMkerzpbgjLX6W6X0cy', NULL, NULL, NULL, NULL, NULL, 'profile-photos/nU1A385Ku9RlsyPzMwhKUNtgGipU51PzsymYXd5t.jpg', '2022-06-02 06:39:23', '2022-06-02 09:27:14'),
(4, 'casio', 'casio@gmail.com', NULL, '$2y$10$dVUZFidb4etZ1hzFmWjm7.rWW6CL6VROPq1Uby.XCJCD8Tr/wbg/m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-03 06:39:13', '2022-06-03 06:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipics`
--
ALTER TABLE `multipics`
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
-- Indexes for table `protfolios`
--
ALTER TABLE `protfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `protfolios_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `multipics`
--
ALTER TABLE `multipics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protfolios`
--
ALTER TABLE `protfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `protfolios`
--
ALTER TABLE `protfolios`
  ADD CONSTRAINT `protfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
