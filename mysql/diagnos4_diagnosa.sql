-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2021 at 02:35 PM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnos4_diagnosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diagnoses`
--

CREATE TABLE `data_diagnoses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_diagnoses`
--

INSERT INTO `data_diagnoses` (`id`, `kode_diagnosis`, `nama_diagnosis`, `created_at`, `updated_at`) VALUES
(1, 'H1', 'Positive', NULL, NULL),
(2, 'D1', 'Tidak Terpapar Penyakit Covid-19', NULL, NULL),
(3, 'D2', 'OTG', NULL, NULL),
(4, 'D3', 'Positif Covid-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_gejalas`
--

CREATE TABLE `data_gejalas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_gejalas`
--

INSERT INTO `data_gejalas` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(15, 'H10', 'flu', NULL, NULL),
(16, 'G1', 'Demam', NULL, NULL),
(17, 'G2', 'Pusing', NULL, NULL),
(18, 'G3', 'Bersin', NULL, NULL),
(19, 'G4', 'Batuk', NULL, NULL),
(20, 'G5', 'Sakit Tenggorokan', NULL, NULL),
(21, 'G6', 'Kelelahan', NULL, NULL),
(22, 'G7', 'Nyeri Dada', NULL, NULL),
(23, 'G8', 'Diare', NULL, NULL),
(24, 'G9', 'Hilang Penciuman', NULL, NULL),
(25, 'G10', 'Hilang Perasa', NULL, NULL),
(26, 'G11', 'Napsu Makan', NULL, NULL),
(27, 'G12', 'Nyeri Sendi', NULL, NULL),
(28, 'G13', 'Tidak Demam', NULL, NULL),
(29, 'G14', 'Tidak Pusing', NULL, NULL),
(30, 'G15', 'Tidak Bersin', NULL, NULL),
(31, 'G16', 'Tidak Batuk', NULL, NULL),
(32, 'G17', 'Tidak Sakit Tenggorokan', NULL, NULL),
(33, 'G18', 'Tidak Kelelahan', NULL, NULL),
(34, 'G19', 'Tidak Nyeri Dada', NULL, NULL),
(35, 'G20', 'Tidak Diare', NULL, NULL),
(36, 'G21', 'Tidak Hilang Penciuman', NULL, NULL),
(37, 'G22', 'Tidak Hilang Perasa', NULL, NULL),
(38, 'G23', 'Tidak Napsu Makan', NULL, NULL),
(39, 'G24', 'Tidak Nyeri Dada', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_roles`
--

CREATE TABLE `data_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_gejala1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_gejala10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2021_09_13_160920_create_data_gejala_table', 1),
(17, '2021_09_13_170649_create_data_diagnosis_table', 1),
(18, '2021_09_13_172709_create_data_role_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('004d6e78e80b6bd820ae872e44615265be4c2f180ebd3949c661d638625dfba346dfc5f46eff7440', 9, 1, 'nApp', '[]', 0, '2021-10-23 06:13:11', '2021-10-23 06:13:11', '2022-10-23 13:13:11'),
('0c6a272b174a91fb94a6c85fafc00fee1a58bba68e1fb3e4536ca5ec767774cb16983d3b1a8e49c0', 10, 1, 'nApp', '[]', 0, '2021-10-23 06:14:48', '2021-10-23 06:14:48', '2022-10-23 13:14:48'),
('0c75dc1e0b95f9df74f23871d5528aaf0ddf46b4a0f5ae2b3c2c0793425597565ec40b10d810ac62', 15, 1, 'nApp', '[]', 0, '2021-11-02 08:45:18', '2021-11-02 08:45:18', '2022-11-02 15:45:18'),
('0d7a0a428f290a1075409f285f6e4ab4acca677f057c5a75307d785dd65c769ccfd32e4ae4799bbc', 1, 1, 'nApp', '[]', 0, '2021-09-26 22:25:25', '2021-09-26 22:25:25', '2022-09-27 05:25:25'),
('14c09e3fe4ace1049b9536014638e34c68ea0a4f6ae78fe640320680d239fce683919cfbc0e69e8f', 15, 1, 'nApp', '[]', 0, '2021-10-25 08:02:06', '2021-10-25 08:02:06', '2022-10-25 15:02:06'),
('2842e2cd7f881cee5cf48904c8f9c8e3e16672b6522cb008bc29c54674d4017ea8705e8740d0cc15', 1, 1, 'nApp', '[]', 0, '2021-09-25 07:57:43', '2021-09-25 07:57:43', '2022-09-25 14:57:43'),
('2ca2953acf32bbb70b9fc0c343de6c4a2770df967228239153d5c17dcced6a0a0c0cbb28c796bcda', 15, 1, 'nApp', '[]', 0, '2021-10-23 07:22:18', '2021-10-23 07:22:18', '2022-10-23 14:22:18'),
('2de6ba14ed313bdbe763ecedcda848ea131c338418e92b1f5fa09b670b671f23366c7303b8419214', 15, 1, 'nApp', '[]', 0, '2021-10-24 00:16:04', '2021-10-24 00:16:04', '2022-10-24 07:16:04'),
('548e582317d9930bb1b19a49d5d4b7c29b798ac98a317efed1b4b7bcef4465a53635f01e66fcb14d', 18, 1, 'nApp', '[]', 0, '2021-10-23 07:14:06', '2021-10-23 07:14:06', '2022-10-23 14:14:06'),
('5c4e9265c8fba1258dc4ed957a23c53aa7c10783a26a16a83a72756b820a0c963c589bf5a5cbafc5', 7, 1, 'nApp', '[]', 0, '2021-09-25 05:30:51', '2021-09-25 05:30:51', '2022-09-25 12:30:51'),
('5cf637d2848d47f283f25716498c4280770056b0118481cc7d2fa55e0de91ffff0dbc104fee14a0a', 15, 1, 'nApp', '[]', 0, '2021-10-23 23:52:24', '2021-10-23 23:52:24', '2022-10-24 06:52:24'),
('6638684f75f63a0fd7f123a3e7bc6418d432f69c109582b2a682351bc7734336fba9f2c86ef1277e', 15, 1, 'nApp', '[]', 0, '2021-10-23 09:41:40', '2021-10-23 09:41:40', '2022-10-23 16:41:40'),
('73ae37d23a64602e9a226d22ec4e2391ce9ab2e110120f55366e46385367dc4384afc7e4017cd8ac', 1, 1, 'nApp', '[]', 0, '2021-09-28 00:12:30', '2021-09-28 00:12:30', '2022-09-28 07:12:30'),
('797b622bf84b0f2e4e941466d4f163d74bf3b54193e01307584b4178c54330cd6f5150406abb0f90', 19, 1, 'nApp', '[]', 0, '2021-10-23 07:16:13', '2021-10-23 07:16:13', '2022-10-23 14:16:13'),
('838f65faa60ee9e0f8e74dba2bed123aab35761d1cab3023d1c00c1737eb7e8fbd13a891466f4799', 15, 1, 'nApp', '[]', 0, '2021-10-23 06:54:42', '2021-10-23 06:54:42', '2022-10-23 13:54:42'),
('867f254f5fda071750eeb3a26690578247b3325102479c4806f454632e03c2e91dc5fb3f5c229953', 15, 1, 'nApp', '[]', 0, '2021-10-23 07:54:54', '2021-10-23 07:54:54', '2022-10-23 14:54:54'),
('8ecb0c88b87d2851d3dc6e80d1f074cd9f5ebdd1d388a12038d213ff2824dd0d41f9ff94ab7a5fe6', 15, 1, 'nApp', '[]', 0, '2021-10-23 09:59:59', '2021-10-23 09:59:59', '2022-10-23 16:59:59'),
('8f04cb57159296f6c9351b61185f64b164be0714cfc8f31d2c5687f8d4fe14e4f5982e287c590dc0', 1, 1, 'nApp', '[]', 0, '2021-09-26 22:26:22', '2021-09-26 22:26:22', '2022-09-27 05:26:22'),
('907ce50b47d39cf3ff5cc8d1160375c98eadc48f427bd9c73461453dd3d96091b2f94147e082df83', 15, 1, 'nApp', '[]', 0, '2021-10-23 08:54:07', '2021-10-23 08:54:07', '2022-10-23 15:54:07'),
('92df3b71499b918f7b69e1a22cf0e2edc54dc7f6d82ab5992bcc38f4c9c53321b1ec36c23353342b', 1, 1, 'nApp', '[]', 0, '2021-09-25 06:16:57', '2021-09-25 06:16:57', '2022-09-25 13:16:57'),
('9382011d7307b81418df41b50d4e17600cfcf439cc444fc2828c4ff141f6b333d9897a487a30e3df', 14, 1, 'nApp', '[]', 0, '2021-10-23 06:16:53', '2021-10-23 06:16:53', '2022-10-23 13:16:53'),
('93c216570b5f04c377a39cedfbcdab21faccb58cac5aa2940bb8f170d410372da225c263c25bf6a8', 22, 1, 'nApp', '[]', 0, '2021-10-24 07:07:20', '2021-10-24 07:07:20', '2022-10-24 14:07:20'),
('93e960f383f7ba0baf6b89f641b17b35671306fc4742933450c0cb8b772c4b7b005269f8bd6d8360', 11, 1, 'nApp', '[]', 0, '2021-09-25 05:30:31', '2021-09-25 05:30:31', '2022-09-25 12:30:31'),
('942617a52e2419e8efee41654089e7fff3d86f66ffc4da41807265f7ebe18c34adbae9e7012a7e9e', 15, 1, 'nApp', '[]', 0, '2021-10-23 07:56:25', '2021-10-23 07:56:25', '2022-10-23 14:56:25'),
('957d523f6c4b266c6362fdfd99e038c0bf80fe8f33651130bb9e89b99d2e01205de514e444b2bd52', 15, 1, 'nApp', '[]', 0, '2021-10-23 07:22:04', '2021-10-23 07:22:04', '2022-10-23 14:22:04'),
('9dd01ab2fd66412fa54d5640ed7a2e0901aae463c0635c31442d89f4d16dd42f630aa1e171cd19d8', 15, 1, 'nApp', '[]', 0, '2021-10-24 00:19:05', '2021-10-24 00:19:05', '2022-10-24 07:19:05'),
('a4ce9a853555d5587e9e73418b479fe510d27b35e232f3781d11857e4f1b224c5c47059c2d0824da', 22, 1, 'nApp', '[]', 0, '2021-10-24 07:10:07', '2021-10-24 07:10:07', '2022-10-24 14:10:07'),
('a7a210a8fa57aad6a162342ac54b2ee9a779de596a33c93d2ac49faa40e5ddf023d5c64bb364735e', 15, 1, 'nApp', '[]', 0, '2021-10-25 08:01:31', '2021-10-25 08:01:31', '2022-10-25 15:01:31'),
('ce3ce8482e586d81a70b01f4c195cc8d5a5718641aefb42b89273b964e1ef316e23ff0b975cbc2df', 15, 1, 'nApp', '[]', 0, '2021-10-23 09:57:24', '2021-10-23 09:57:24', '2022-10-23 16:57:24'),
('d625ca88a1bee4bb3532f8caea88e158e604bc6ff4404446d0a385e2cbf65f4de54b05096b546ad3', 1, 1, 'nApp', '[]', 0, '2021-10-17 07:38:15', '2021-10-17 07:38:15', '2022-10-17 14:38:15'),
('e82f54dad119739add3d54216663dad352f671983b977bc2efb991471366deaba8a48de16a67b311', 15, 1, 'nApp', '[]', 0, '2021-10-24 00:15:03', '2021-10-24 00:15:03', '2022-10-24 07:15:03'),
('ecb02c1c0177422052554b816c6bb4ac670fea0389899f84b6934c47540e523b896528978bc731e2', 15, 1, 'nApp', '[]', 0, '2021-10-23 09:45:07', '2021-10-23 09:45:07', '2022-10-23 16:45:07'),
('f917cd127530ec2282768b1ff75c8e3e08fa35da0d05ec45626b2a65910e9324c1ede88c3dcda12e', 15, 1, 'nApp', '[]', 0, '2021-11-02 08:44:26', '2021-11-02 08:44:26', '2022-11-02 15:44:26'),
('f9dd0051f8f5e2fa28665fb58643f7145edf4f6bcf65a6e053ee741a9abbc4e71186e2b840cd9490', 15, 1, 'nApp', '[]', 0, '2021-10-23 08:38:02', '2021-10-23 08:38:02', '2022-10-23 15:38:02'),
('fc5048b404acd05941ce13307b56d9be07cebf93614567c71b2c9986a389173eb873032c30b75632', 15, 1, 'nApp', '[]', 0, '2021-10-24 00:12:26', '2021-10-24 00:12:26', '2022-10-24 07:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '3djdmovRivj746nvESSZ1QvIfQCjFqgMABRdoVnK', NULL, 'http://localhost', 1, 0, 0, '2021-09-25 05:29:51', '2021-09-25 05:29:51'),
(2, NULL, 'Laravel Password Grant Client', 'H2L6D9xHiS5DJNzmVypaq6Evcjh6DPzS7sADUcVC', 'users', 'http://localhost', 0, 1, 0, '2021-09-25 05:29:51', '2021-09-25 05:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-25 05:29:51', '2021-09-25 05:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `no_hp`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$jeG8VZIYn/f4X936Q3W3meZXRxHdqUoVPAmhZblvq0sEM21FbuQSe', '123123', 'Admin', NULL, '2021-09-13 20:31:25', '2021-09-13 20:31:25'),
(2, 'pengunjung', 'pengunjung', 'pengunjung@admin.com', NULL, '$2y$10$TlUSyI.IEWidQXdVBjqF8Ob7yAuRfvDPxrBIOD0ormSm.gVLfGyd6', 'ad131231', 'Pengunjung', NULL, '2021-09-13 20:45:29', '2021-09-13 20:45:29'),
(4, 'fajar', 'fajarstar@gmail.com', 'fajarstar10@gmail.com', NULL, '$2y$10$BibeOxbe9cgseUfkfoT9E.JbBQC3kSkKpumJE0/4h3olWupIEP1lW', '081293379350', 'Pengunjung', NULL, NULL, NULL),
(5, 'seraga', 'seragasantri@gmail.com', 'seragasantri@gmail.com', NULL, '$2y$10$fxEhy88j6I8cOWYVrdaDtePGtLeyGIOwJfB.voNJYVUg3cfkDdXsS', '0895615505598', 'Pengunjung', NULL, NULL, NULL),
(9, 'R', 'akjsh', 'asljdas@gmail.com', NULL, '$2y$10$Ana1HCtNQz0stDYf5l1qIuO.KZPt2pDAEpZm/KBhYHnMn2XrwAWTe', '088292928292', 'Pengunjung', NULL, '2021-10-23 06:13:11', '2021-10-23 06:13:11'),
(10, 'Test', 'usereeeee', 'email@admin.com', NULL, '$2y$10$mqHz8yBsW6TlQgYiVRxG3.KXz/e7YYcy9ofIZg6zLWqabz2LOD4/6', '089829829829', 'Pengunjung', NULL, '2021-10-23 06:14:48', '2021-10-23 06:14:48'),
(14, 'Rwd', 'akjshdd', 'asljdas@dgdmail.com', NULL, '$2y$10$8M.q2hAQ.4IU2jbkV9GinOr0GUnyE9zr6xnRRLmgBIfuHG6KAi6Ve', '088292928292', 'Pengunjung', NULL, '2021-10-23 06:16:53', '2021-10-23 06:16:53'),
(15, 'Admin Arj', 'arj', 'arj@admin.com', NULL, '$2y$10$9yXB3twEGTCzsy9MZ5MZxe9AkIswHVbqzmeJPYce/xSJGxj8nihh6', '08139283928', 'Pengunjung', NULL, '2021-10-23 06:54:42', '2021-10-23 06:54:42'),
(18, 'Lnasd', 'asdwasdw', 'asdwasdw@gmail.com', NULL, '$2y$10$aE15noQJo4Sc5CwzVDXuJuBUMooPZpvvRIVuEmhMjhfH89DxRFvsy', '08982989282', 'Pengunjung', NULL, '2021-10-23 07:14:06', '2021-10-23 07:14:06'),
(19, 'Ajlshd', 'alshjd', 'aksjhd@asd.com', NULL, '$2y$10$JU5D685yB.BC9Jjy9xImuu85o7uqDIxtznub/9qVsPg3ALC0Sk8TC', '08292829', 'Pengunjung', NULL, '2021-10-23 07:16:13', '2021-10-23 07:16:13'),
(22, 'Test', 'testa', 'test@test.com', NULL, '$2y$10$6lVNiLnXqAJZvdIlMMJWG.KSe525drzT./qtjL2DUi8JAqvhPCQMy', '08123456', 'Pengunjung', NULL, '2021-10-24 07:07:20', '2021-10-24 07:07:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diagnoses`
--
ALTER TABLE `data_diagnoses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_gejalas`
--
ALTER TABLE `data_gejalas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_roles`
--
ALTER TABLE `data_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `data_diagnoses`
--
ALTER TABLE `data_diagnoses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_gejalas`
--
ALTER TABLE `data_gejalas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `data_roles`
--
ALTER TABLE `data_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
