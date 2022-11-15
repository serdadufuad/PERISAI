-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 05:47 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perisai_diklatpim`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbox_provinsi`
--

CREATE TABLE `bbox_provinsi` (
  `id` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitudeMin` decimal(10,7) DEFAULT NULL,
  `latitudeMin` decimal(10,7) DEFAULT NULL,
  `longitudeMax` decimal(10,7) DEFAULT NULL,
  `latitudeMax` decimal(10,7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bbox_provinsi`
--

INSERT INTO `bbox_provinsi` (`id`, `name`, `longitudeMin`, `latitudeMin`, `longitudeMax`, `latitudeMax`) VALUES
('1', 'Nama Negara Luar Negeri', NULL, NULL, NULL, NULL),
('11', 'ACEH', '94.9111170', '1.8888638', '98.3681849', '6.1748219'),
('12', 'SUMATERA UTARA', '96.9595036', '-0.7307250', '100.4259171', '4.3025912'),
('13', 'SUMATERA BARAT', '98.4963802', '-3.5908735', '101.8928561', '0.9071761'),
('14', 'RIAU', '100.0251769', '-1.1271481', '104.0625001', '2.6305756'),
('15', 'JAMBI', '101.1284819', '-2.7695121', '104.5950230', '-0.6591650'),
('16', 'SUMATERA SELATAN', '102.0675119', '-4.9253971', '106.3204334', '-1.6267819'),
('17', 'BENGKULU', '100.9647697', '-5.6097201', '103.7635351', '-2.2775509'),
('18', 'LAMPUNG', '103.5351561', '-6.2636259', '106.0154520', '-3.7239739'),
('19', 'KEPULAUAN BANGKA BELITUNG', '104.9414061', '-3.9028728', '108.8161023', '-1.0464808'),
('21', 'KEPULAUAN RIAU', '103.1835936', '-0.9667511', '109.2641785', '4.8921602'),
('31', 'DKI JAKARTA', '106.2910830', '-6.3708651', '106.9726351', '-5.1035388'),
('32', 'JAWA BARAT', '106.2707489', '-7.9139681', '108.8964845', '-5.8158202'),
('33', 'JAWA TENGAH', '108.5562929', '-8.3361855', '111.7899226', '-5.6320350'),
('34', 'DI YOGYAKARTA', '110.3451640', '-7.8402010', '110.4072030', '-7.7667020'),
('35', 'JAWA TIMUR', '110.8998369', '-8.8791676', '116.3704888', '-4.9435977'),
('36', 'BANTEN', '105.0063190', '-7.1152877', '106.7798721', '-5.0547892'),
('51', 'BALI', '114.4118795', '-8.9463646', '115.8117503', '-7.9669548'),
('52', 'NUSA TENGGARA BARAT', '115.7080077', '-9.2083931', '119.3554688', '-7.9815769'),
('53', 'NUSA TENGGARA TIMUR', '118.8271152', '-11.1045869', '125.2418661', '-7.6793105'),
('61', 'KALIMANTAN BARAT', '108.4988139', '-3.1668076', '114.2058451', '2.1722845'),
('62', 'KALIMANTAN TENGAH', '110.7315466', '-3.6301374', '115.8492321', '0.7922191'),
('63', 'KALIMANTAN SELATAN', '114.3325530', '-5.0306246', '116.7159848', '-1.2977809'),
('64', 'KALIMANTAN TIMUR', '113.8358509', '-2.4601813', '119.0982418', '2.6047381'),
('65', 'KALIMANTAN UTARA', '114.5650459', '1.0439249', '118.1157248', '4.4043751'),
('71', 'SULAWESI UTARA', '123.1096659', '0.2162226', '127.2517470', '4.8893632'),
('72', 'SULAWESI TENGAH', '119.4459559', '-3.7290237', '124.2333985', '1.4696892'),
('73', 'SULAWESI SELATAN', '116.9384999', '-7.6963353', '122.3221928', '-1.8859959'),
('74', 'SULAWESI TENGGARA', '120.7655157', '-6.3097079', '124.7161562', '-2.7795529'),
('75', 'GORONTALO', '121.1609239', '0.2178209', '123.5530401', '1.1404959'),
('76', 'SULAWESI BARAT', '118.6601339', '-3.6693252', '119.8852231', '-0.7031073'),
('81', 'MALUKU', '125.6297796', '-8.4501165', '134.9988394', '-2.6258611'),
('82', 'MALUKU UTARA', '124.1894530', '-2.5769170', '129.9023438', '2.7427519'),
('91', 'PAPUA BARAT', '129.1999366', '-4.4204345', '135.2548391', '1.1751077'),
('94', 'PAPUA', '134.1991779', '-9.2240966', '141.0296491', '1.0361163');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_kerja`
--

CREATE TABLE `kunjungan_kerja` (
  `id` bigint UNSIGNED NOT NULL,
  `long` decimal(10,7) NOT NULL,
  `lat` decimal(10,7) NOT NULL,
  `kategori_kunjungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vvip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `file_ebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kunjungan_kerja`
--

INSERT INTO `kunjungan_kerja` (`id`, `long`, `lat`, `kategori_kunjungan`, `vvip`, `id_provinsi`, `tgl_berangkat`, `tgl_pulang`, `file_ebook`, `created_at`, `updated_at`) VALUES
(1, '106.9195742', '-6.2451135', 'Dalam Negeri', 'Presiden Joko Widodo', '31', '2022-11-08', '2022-11-11', 'Ebook_jakarta.pdf', NULL, NULL),
(2, '115.2171131', '-8.6593226', 'Dalam Negeri', 'Ibu Iriana Joko Widodo', '51', '2022-11-08', '2022-11-22', 'Ebook_bali.pdf', '2022-11-14 23:59:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_10_221556_create_permission_tables', 1),
(8, '2022_11_14_220224_create_kunjungan_kerja_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(1, 'App\\Models\\Kunjungan_kerja', 5);

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
-- Table structure for table `pegawai-a`
--

CREATE TABLE `pegawai-a` (
  `asddd` int NOT NULL,
  `asd` int NOT NULL,
  `dddd` int NOT NULL,
  `www` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(2, 'pic', 'web', '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(3, 'substansi', 'web', '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(4, 'pimpinan', 'web', '2022-11-10 20:15:35', '2022-11-10 20:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `jabatan`, `email`, `email_verified_at`, `password`, `file_foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sonya Elfadhila, S.E., M.A.', 'Kasubbag Administrassi Protokol', 'sonya@perisai.com', NULL, '$2y$10$As5EFSmNNpuI1r9hMb8F0OPdAyLBCKn1PvLszWACVAr/.5/DZL7Ni', 'Sonya Elfadhila, S.E., M.A..png', NULL, '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(2, 'Fuad Ahmad', 'PPNPN Biro Protokol', 'fuad@perisai.com', NULL, '$2y$10$2ptjMAtQB1GcchorXhBNIeRACvwlOrmfdEDdh9H.W5zk4knA5AKLi', 'fuad ahmad.jpg', NULL, '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(3, 'Substansi', 'Substansi', 'substansi@perisai.com', NULL, '$2y$10$J7YzbCRsxqjdmuNcE2fyke4ZJ.iphB7nriUui5.8zC/5L4Wqf0S02', 'substansi.jpg', NULL, '2022-11-10 20:15:35', '2022-11-10 20:15:35'),
(4, 'Pimpinan', 'Kepala Sekretariat Presiden', 'kasetpres@perisai.com', NULL, '$2y$10$MjIRyDJIa90IGmvd1uObXuCNunD9bJ8zm/oLX5mECGbKc26Vwxx7S', 'pimpinan.jpg', NULL, '2022-11-10 20:15:35', '2022-11-10 20:15:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbox_provinsi`
--
ALTER TABLE `bbox_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kunjungan_kerja`
--
ALTER TABLE `kunjungan_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungan_kerja`
--
ALTER TABLE `kunjungan_kerja`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
