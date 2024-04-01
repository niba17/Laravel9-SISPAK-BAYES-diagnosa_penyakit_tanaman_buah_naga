-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 09:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak-bayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `nama`, `updated_at`, `created_at`) VALUES
(2, 'G1', 'Buah gugur sebelum matang', '2023-01-25 16:06:52', '2023-01-20 10:53:43'),
(3, 'G2', 'Busuk pada bagian yang tidak terpapar cahaya matahari', '2023-01-25 16:07:47', '2023-01-20 10:53:50'),
(4, 'G3', 'Buah kerdil', '2023-01-25 16:08:01', '2023-01-25 15:40:05'),
(5, 'G4', 'Buah mengering', '2023-01-25 16:08:10', '2023-01-25 15:40:14'),
(6, 'G5', 'Pada buah terdapat bercak putih atau coklat', '2023-01-25 16:08:19', '2023-01-25 15:40:35'),
(7, 'G6', 'Bercak pada buah menjadi lekukan basah dan berwarna orange', '2023-01-25 19:23:13', '2023-01-25 15:40:45'),
(8, 'G7', 'Bercak pada buah dengan garis-garia melingkar berwarna hitam', '2023-01-25 16:08:44', '2023-01-25 15:40:56'),
(9, 'G8', 'Kondisi tanah terlalu lembab', '2023-01-25 16:08:54', '2023-01-25 15:41:03'),
(10, 'G9', 'Batang busuk disemua sisi', '2023-01-25 16:09:02', '2023-01-25 15:41:11'),
(11, 'G10', 'Tanaman terlihat kusam', '2023-01-25 16:09:11', '2023-01-25 15:41:19'),
(12, 'G11', 'Batang busuk berwarna kuning keemasan', '2023-01-25 16:09:21', '2023-01-25 15:41:28'),
(13, 'G12', 'Batang busuk disatu sisi', '2023-01-25 16:09:31', '2023-01-25 15:41:35'),
(14, 'G13', 'Busuk basah dengan tepi sekitar pembusukan mongering', '2023-01-25 16:09:43', '2023-01-25 15:41:43'),
(15, 'G14', 'Batang busuk awalnya seperti digigit serangga', '2023-01-25 16:09:53', '2023-01-25 15:41:59'),
(16, 'G15', 'Tanaman layu', '2023-01-25 16:10:05', '2023-01-25 15:42:25'),
(17, 'G16', 'Busuk basah', '2023-01-25 15:42:47', '2023-01-25 15:42:47'),
(18, 'G17', 'Batang busuk berlendir kekuningan', '2023-01-25 15:42:56', '2023-01-25 15:42:56'),
(19, 'G18', 'Pangkal batang yang berbatasan dengan tanah membusuk', '2023-01-25 15:43:05', '2023-01-25 15:43:05'),
(20, 'G19', 'Batang yang terinfeksi ditumbuhi bulu putih', '2023-01-25 15:43:12', '2023-01-25 15:43:12'),
(21, 'G20', 'Ujung cabang produktif membusuk', '2023-01-25 15:43:20', '2023-01-25 15:43:20'),
(22, 'G21', 'Busuk kering', '2023-01-25 15:43:27', '2023-01-25 15:43:27'),
(23, 'G22', 'Ujung cabang produktif berkerut', '2023-01-25 15:43:34', '2023-01-25 15:43:34'),
(24, 'G23', 'Bintik-bintik coklat pada ujung cabang produktif', '2023-01-25 15:43:41', '2023-01-25 15:43:41'),
(29, 'G24', 'Batang busuk berwarna kecoklatan', '2023-06-16 07:12:29', '2023-01-25 15:44:37'),
(30, 'G25', 'Akar tanaman membusuk', '2023-06-16 07:12:46', '2023-01-25 15:44:45'),
(31, 'G26', 'Pertumbuhan tanaman terhambat', '2023-06-16 07:13:03', '2023-01-25 15:44:52'),
(33, 'G27', 'Batang membusuk dan mengeluarkan bau tidak enak', '2023-06-16 07:13:34', '2023-06-16 07:13:34'),
(34, 'G28', 'Tekstur batang  menjadi lunak dan berair', '2023-06-16 07:13:59', '2023-06-16 07:13:59'),
(35, 'G29', 'Batang buah naga akan berwarna kecoklatan', '2023-06-16 07:14:28', '2023-06-16 07:14:28'),
(36, 'G30', 'Terdapat bercak berwarna  orange seperti besi berkarat  yang ditemukan pada kulit  buah.', '2023-06-18 06:04:30', '2023-06-18 06:04:30'),
(37, 'G31', 'bercak kecil berair yang  berwarna coklat.', '2023-06-18 06:04:54', '2023-06-18 06:04:54'),
(38, 'G32', 'pada sulur yaitu berwarna  kemerahan agak tua dan  mempunyai permukaan batang  yang agak kasar', '2023-06-18 06:05:15', '2023-06-18 06:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` bigint(20) NOT NULL,
  `gejala_id` bigint(20) DEFAULT NULL,
  `penyakit_id` bigint(20) DEFAULT NULL,
  `bobot` double NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `gejala_id`, `penyakit_id`, `bobot`, `updated_at`, `created_at`) VALUES
(1, 2, 5, 0.4, '2023-01-25 20:27:14', '2023-01-20 10:55:14'),
(14, 3, 5, 0.7, '2023-01-25 20:27:29', '2023-01-25 17:44:54'),
(15, 4, 5, 0.8, '2023-01-25 20:27:42', '2023-01-25 17:45:12'),
(16, 5, 5, 0.6, '2023-01-25 20:30:17', '2023-01-25 17:45:20'),
(17, 6, 5, 0.9, '2023-01-25 20:30:28', '2023-01-25 17:45:29'),
(18, 7, 5, 0.5, '2023-01-25 20:30:50', '2023-01-25 17:45:48'),
(19, 8, 5, 0.7, '2023-01-25 20:31:10', '2023-01-25 17:45:56'),
(20, 10, 6, 0.7, '2023-01-25 20:37:32', '2023-01-25 17:46:59'),
(21, 11, 6, 0.5, '2023-01-25 20:37:47', '2023-01-25 17:55:39'),
(22, 12, 6, 0.4, '2023-01-25 20:38:02', '2023-01-25 17:56:00'),
(23, 13, 6, 0.6, '2023-01-25 20:38:14', '2023-01-25 17:56:13'),
(24, 14, 6, 0.8, '2023-01-25 20:38:25', '2023-01-25 17:57:07'),
(25, 15, 6, 0.3, '2023-01-25 20:38:37', '2023-01-25 17:57:20'),
(27, 9, 7, 0.8, '2023-02-01 00:39:34', '2023-01-25 17:57:44'),
(28, 16, 7, 0.6, '2023-02-01 00:40:11', '2023-01-25 17:57:55'),
(29, 17, 7, 0.7, '2023-02-01 00:40:29', '2023-01-25 17:58:10'),
(30, 18, 7, 0.5, '2023-02-01 00:40:46', '2023-01-25 17:58:23'),
(31, 20, 7, 0.7, '2023-02-01 00:42:26', '2023-01-25 17:58:43'),
(32, 21, 8, 0.7, '2023-01-25 20:41:14', '2023-01-25 17:59:07'),
(33, 22, 8, 0.5, '2023-01-25 20:41:04', '2023-01-25 17:59:23'),
(34, 23, 8, 0.8, '2023-01-25 20:41:24', '2023-01-25 17:59:34'),
(35, 24, 8, 0.3, '2023-01-25 20:41:37', '2023-01-25 17:59:47'),
(48, 9, 6, 0.5, '2023-01-25 20:37:03', '2023-01-25 20:37:03'),
(49, 19, 7, 0.9, '2023-02-01 00:43:07', '2023-01-25 20:40:21'),
(51, 9, 9, 0.6, '2023-06-16 07:23:26', '2023-06-16 07:23:26'),
(52, 16, 9, 0.8, '2023-06-16 22:21:32', '2023-06-16 22:21:32'),
(53, 17, 9, 0.9, '2023-06-16 22:21:51', '2023-06-16 22:21:51'),
(54, 29, 9, 0.6, '2023-06-16 22:22:27', '2023-06-16 22:22:27'),
(55, 30, 9, 0.4, '2023-06-16 22:22:47', '2023-06-16 22:22:47'),
(56, 31, 9, 0.4, '2023-06-16 22:23:08', '2023-06-16 22:23:08'),
(57, 33, 10, 0.7, '2023-06-16 22:23:24', '2023-06-16 22:23:24'),
(58, 34, 10, 0.6, '2023-06-16 22:23:42', '2023-06-16 22:23:42'),
(59, 35, 10, 0.6, '2023-06-16 22:23:57', '2023-06-16 22:23:57'),
(60, 36, 13, 0.7, '2023-06-18 06:07:14', '2023-06-18 06:07:14'),
(61, 37, 14, 0.5, '2023-06-18 06:07:38', '2023-06-18 06:07:38'),
(62, 38, 14, 0.7, '2023-06-18 06:07:53', '2023-06-18 06:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(128) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bobot` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `role`, `bobot`, `updated_at`, `created_at`) VALUES
(1, 'Semester', 'Cost', 30, '2023-01-07 21:00:44', NULL),
(2, 'IPK', 'Benefit', 20, '2023-01-07 21:01:06', NULL),
(4, 'UKT', 'Cost', 15, '2023-01-07 21:01:22', '2023-01-05 08:42:08'),
(8, 'Pekerjaan Ortu', 'Cost', 15, '2023-01-07 21:01:41', '2023-01-07 21:01:41'),
(9, 'Penghasilan Ortu', 'Cost', 10, '2023-01-07 21:01:57', '2023-01-07 21:01:57'),
(10, 'Jenis Transportasi', 'Cost', 10, '2023-01-07 21:02:13', '2023-01-07 21:02:13');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_19_134504_make_kasus_table', 1),
(3, '2022_09_19_145703_create_puskesmas_table', 2),
(4, '2022_09_19_150923_create_kecamatan_table', 3),
(6, '2022_09_19_151045_create_kelurahan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pakar`
--

CREATE TABLE `pakar` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tmpt_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `no_tlp` int(20) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakar`
--

INSERT INTO `pakar` (`id`, `nama`, `jk`, `alamat`, `tmpt_lahir`, `tgl_lahir`, `no_tlp`, `foto`, `updated_at`, `created_at`) VALUES
(1, 'Dr. Ir. Zainal Arifin,MP', 'Laki - laki', 'Baumata', 'Kupang', '04/18/2023', NULL, NULL, '2023-07-13 12:56:21', '2023-04-19 02:08:40'),
(4, 'test', 'Laki - laki', 'adaw', 'dawda', '07/17/2023', 342353454, NULL, '2023-07-13 12:54:41', '2023-07-13 12:54:41'),
(6, 'adw', 'Laki - laki', 'adw', 'awd', '07/22/2023', 234, 'admin_foto_1689233740.jpg', '2023-07-13 14:35:40', '2023-07-13 14:21:13'),
(7, 'addd', 'Laki - laki', 'aa', 'adw', '07/10/2023', 5464, 'admin_foto_1689233152.jpg', '2023-07-13 14:25:52', '2023-07-13 14:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `bobot` double NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `nama`, `bobot`, `updated_at`, `created_at`) VALUES
(5, 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.75, '2023-06-16 07:06:09', '2023-01-25 15:57:27'),
(6, 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.65, '2023-06-16 07:06:25', '2023-01-25 15:58:26'),
(7, 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.85, '2023-01-25 15:59:06', '2023-01-25 15:58:41'),
(8, 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.45, '2023-01-25 15:58:56', '2023-01-25 15:58:56'),
(9, 'H5', 'Uret (Phytophthora sp)', 0.45, '2023-06-16 07:08:00', '2023-01-25 15:59:18'),
(10, 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.75, '2023-06-16 07:08:24', '2023-01-25 15:59:37'),
(13, 'H7', 'Bercak orange Buah', 0.5, '2023-06-18 06:02:54', '2023-06-18 06:02:38'),
(14, 'H8', 'Kudis (Pestalotiopsis sp.).', 0.3, '2023-06-18 06:03:26', '2023-06-18 06:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit_solusi`
--

CREATE TABLE `penyakit_solusi` (
  `id` bigint(20) NOT NULL,
  `penyakit_id` bigint(20) NOT NULL,
  `solusi_id` bigint(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit_solusi`
--

INSERT INTO `penyakit_solusi` (`id`, `penyakit_id`, `solusi_id`, `updated_at`, `created_at`) VALUES
(1, 5, 2, '2023-05-06 19:30:10', '2023-05-06 19:00:11'),
(3, 6, 3, '2023-06-16 07:18:10', '2023-06-16 07:18:10'),
(4, 7, 4, '2023-06-16 07:18:24', '2023-06-16 07:18:24'),
(5, 8, 5, '2023-06-16 07:18:55', '2023-06-16 07:18:55'),
(6, 9, 6, '2023-06-16 07:19:35', '2023-06-16 07:19:35'),
(7, 10, 7, '2023-06-16 07:19:49', '2023-06-16 07:19:49'),
(8, 13, 8, '2023-06-18 06:14:13', '2023-06-18 06:14:13'),
(10, 14, 9, '2023-06-18 07:08:45', '2023-06-18 07:08:45');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_evidence`
--

CREATE TABLE `save_evidence` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `save_date_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `save_evidence`
--

INSERT INTO `save_evidence` (`id`, `user_id`, `user_name`, `kode`, `nama`, `save_date_time`, `created_at`, `updated_at`) VALUES
(108, 19, 'user', 'G1', 'Buah gugur sebelum matang', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(109, 19, 'user', 'G3', 'Buah kerdil', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(110, 19, 'user', 'G5', 'Pada buah terdapat bercak putih atau coklat', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(111, 19, 'user', 'G7', 'Bercak pada buah dengan garis-garia melingkar berwarna hitam', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(112, 19, 'user', 'G1', 'Buah gugur sebelum matang', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(113, 19, 'user', 'G3', 'Buah kerdil', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(114, 19, 'user', 'G5', 'Pada buah terdapat bercak putih atau coklat', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(115, 19, 'user', 'G7', 'Bercak pada buah dengan garis-garia melingkar berwarna hitam', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(116, 21, 'member1', 'G1', 'Buah gugur sebelum matang', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(117, 21, 'member1', 'G3', 'Buah kerdil', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(118, 21, 'member1', 'G1', 'Buah gugur sebelum matang', '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(119, 21, 'member1', 'G2', 'Busuk pada bagian yang tidak terpapar cahaya matahari', '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(120, 21, 'member1', 'G1', 'Buah gugur sebelum matang', '2023-06-24 20:57:52', '2023-06-24 20:57:55', '2023-06-24 20:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `save_hipotesa`
--

CREATE TABLE `save_hipotesa` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `probabilitas` double NOT NULL,
  `persentase_probabilitas` double NOT NULL,
  `save_date_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `save_hipotesa`
--

INSERT INTO `save_hipotesa` (`id`, `user_id`, `user_name`, `kode`, `nama`, `probabilitas`, `persentase_probabilitas`, `save_date_time`, `created_at`, `updated_at`) VALUES
(137, 19, 'user', 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.99739437316534, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(138, 19, 'user', 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.0005607045087239, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(139, 19, 'user', 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.00049473927240344, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(140, 19, 'user', 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.00042877403608298, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(141, 19, 'user', 'H7', 'Bercak orange Buah', 0.0003298261816023, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(142, 19, 'user', 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.00029684356344207, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(143, 19, 'user', 'H5', 'Uret (Phytophthora sp)', 0.00029684356344207, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(144, 19, 'user', 'H8', 'Kudis (Pestalotiopsis sp.).', 0.00019789570896138, 0, '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(145, 19, 'user', 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.99739437316534, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(146, 19, 'user', 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.0005607045087239, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(147, 19, 'user', 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.00049473927240344, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(148, 19, 'user', 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.00042877403608298, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(149, 19, 'user', 'H7', 'Bercak orange Buah', 0.0003298261816023, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(150, 19, 'user', 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.00029684356344207, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(151, 19, 'user', 'H5', 'Uret (Phytophthora sp)', 0.00029684356344207, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(152, 19, 'user', 'H8', 'Kudis (Pestalotiopsis sp.).', 0.00019789570896138, 0, '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(153, 21, 'member1', 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.85867620751342, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(154, 21, 'member1', 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.0304114490161, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(155, 21, 'member1', 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.026833631484794, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(156, 21, 'member1', 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.023255813953488, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(157, 21, 'member1', 'H7', 'Bercak orange Buah', 0.01788908765653, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(158, 21, 'member1', 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.016100178890877, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(159, 21, 'member1', 'H5', 'Uret (Phytophthora sp)', 0.016100178890877, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(160, 21, 'member1', 'H8', 'Kudis (Pestalotiopsis sp.).', 0.010733452593918, 0, '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(161, 21, 'member1', 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.84168336673347, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(162, 21, 'member1', 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.034068136272545, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(163, 21, 'member1', 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.030060120240481, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(164, 21, 'member1', 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.026052104208417, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(165, 21, 'member1', 'H7', 'Bercak orange Buah', 0.020040080160321, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(166, 21, 'member1', 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.018036072144289, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(167, 21, 'member1', 'H5', 'Uret (Phytophthora sp)', 0.018036072144289, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(168, 21, 'member1', 'H8', 'Kudis (Pestalotiopsis sp.).', 0.012024048096192, 0, '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(169, 21, 'member1', 'H1', 'Busuk Buah Antraknosa (Cellototrichum)', 0.43165467625899, 43.165467625899, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(170, 21, 'member1', 'H3', 'Busuk Pangkal Batang (Sclerotium rolfsii Sacc)', 0.12230215827338, 12.230215827338, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(171, 21, 'member1', 'H6', 'Busuk Lunak Batang (Erwinia sp.)', 0.10791366906475, 10.791366906475, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(172, 21, 'member1', 'H2', 'Busuk bakteri (Pseudomonas sp)', 0.093525179856115, 9.3525179856115, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(173, 21, 'member1', 'H7', 'Bercak orange Buah', 0.071942446043165, 7.1942446043165, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(174, 21, 'member1', 'H4', 'Fusarium (Fusarium oxysporium Schl)', 0.064748201438849, 6.4748201438849, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(175, 21, 'member1', 'H5', 'Uret (Phytophthora sp)', 0.064748201438849, 6.4748201438849, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(176, 21, 'member1', 'H8', 'Kudis (Pestalotiopsis sp.).', 0.043165467625899, 4.3165467625899, '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `save_solusi`
--

CREATE TABLE `save_solusi` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `penyakit_kode` varchar(128) NOT NULL,
  `solusi` text NOT NULL,
  `save_date_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `save_solusi`
--

INSERT INTO `save_solusi` (`id`, `user_id`, `user_name`, `penyakit_kode`, `solusi`, `save_date_time`, `created_at`, `updated_at`) VALUES
(4, 10, 'member1', 'H1', 'Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1', '2023-05-07 23:47:59', '2023-05-07 23:48:02', '2023-05-07 23:48:02'),
(5, 10, 'member1', 'H1', 'Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1', '2023-05-07 23:59:08', '2023-05-07 23:59:12', '2023-05-07 23:59:12'),
(6, 12, 'user', 'H1', 'Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1', '2023-06-16 06:58:00', '2023-06-16 06:58:18', '2023-06-16 06:58:18'),
(7, 12, 'user', 'H1', 'Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1Solusi1', '2023-06-16 06:59:14', '2023-06-16 06:59:21', '2023-06-16 06:59:21'),
(8, 13, 'user', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(9, 13, 'user', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(10, 13, 'user', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(11, 13, 'user', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(12, 13, 'user', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(13, 13, 'user', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-16 22:27:24', '2023-06-16 22:27:31', '2023-06-16 22:27:31'),
(14, 13, 'user', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(15, 13, 'user', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(16, 13, 'user', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(17, 13, 'user', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(18, 13, 'user', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(19, 13, 'user', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-16 22:29:58', '2023-06-16 22:30:07', '2023-06-16 22:30:07'),
(20, 14, 'raffi', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(21, 14, 'raffi', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(22, 14, 'raffi', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(23, 14, 'raffi', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(24, 14, 'raffi', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(25, 14, 'raffi', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(26, 14, 'raffi', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(27, 14, 'raffi', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-18 07:35:35', '2023-06-18 07:35:44', '2023-06-18 07:35:44'),
(28, 19, 'user', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(29, 19, 'user', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(30, 19, 'user', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(31, 19, 'user', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(32, 19, 'user', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(33, 19, 'user', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(34, 19, 'user', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(35, 19, 'user', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-18 20:21:31', '2023-06-18 20:21:42', '2023-06-18 20:21:42'),
(36, 19, 'user', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(37, 19, 'user', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(38, 19, 'user', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(39, 19, 'user', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(40, 19, 'user', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(41, 19, 'user', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(42, 19, 'user', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(43, 19, 'user', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-19 05:09:21', '2023-06-19 05:15:15', '2023-06-19 05:15:15'),
(44, 21, 'member1', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(45, 21, 'member1', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(46, 21, 'member1', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(47, 21, 'member1', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(48, 21, 'member1', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(49, 21, 'member1', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(50, 21, 'member1', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(51, 21, 'member1', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-19 20:42:21', '2023-06-19 20:42:28', '2023-06-19 20:42:28'),
(52, 21, 'member1', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-19 20:45:03', '2023-06-19 20:46:25', '2023-06-19 20:46:25'),
(53, 21, 'member1', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(54, 21, 'member1', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(55, 21, 'member1', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(56, 21, 'member1', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(57, 21, 'member1', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(58, 21, 'member1', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(59, 21, 'member1', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-19 20:45:03', '2023-06-19 20:46:26', '2023-06-19 20:46:26'),
(60, 21, 'member1', 'H1', 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(61, 21, 'member1', 'H3', 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(62, 21, 'member1', 'H6', 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(63, 21, 'member1', 'H2', 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(64, 21, 'member1', 'H7', 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(65, 21, 'member1', 'H4', 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(66, 21, 'member1', 'H5', 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-24 20:57:52', '2023-06-24 20:57:56', '2023-06-24 20:57:56'),
(67, 21, 'member1', 'H8', 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-24 20:57:52', '2023-06-24 20:57:57', '2023-06-24 20:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id` bigint(20) NOT NULL,
  `solusi` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id`, `solusi`, `updated_at`, `created_at`) VALUES
(2, 'Mengikis bercak-bercak yang ada  pada kulit buah dan menyemprotkan dengan cairan obat Gusadrin dengan dosis 2 cc/liter air.', '2023-06-16 07:15:35', '2023-05-06 18:48:03'),
(3, 'Mencabut tanaman yang sakit, kemudian pada lubang tanam diberi Basamid dengan dosis 0,5-1 g dalam bentuk serbuk kemudian pada lubang tanam tersebut ditanam bibit baru.', '2023-06-16 07:15:57', '2023-05-06 18:51:26'),
(4, 'Penyemprotan Benlate dengan dosis 2 g/ltr air atau menggunakan Ridomil 2 g/ltr air sebulan sekali. Bila muncul gejala kekuningan pada pangkal batang maka segera dilakukan penyemprotan pada seluruh batang dan diutamakan pada pangkal batang\r\nyang terserang. Pencegahan penyakit ini bisa dilakukan pengairan yang disertai dengan penyemprotan fungisida dan Atonik didaerah pangkal batang pada tanaman yang berumur 30 hari pada awal penanaman.', '2023-06-16 07:16:24', '2023-05-06 18:51:57'),
(5, 'Menyemprotkan Benlate dengan dosis 2g/liter air dalam seminggu 1-2 kali penyemprotan pada bagian batang dan cabang.', '2023-06-16 07:16:56', '2023-06-16 07:16:56'),
(6, 'Menjaga agar kadar air dalam tanah tidak terlalu tinggi. Jika tanaman sudah terinfeksi maka diharuskan mencabut tanaman tersebut dan menggantinya dengan tanaman baru.', '2023-06-16 07:17:18', '2023-06-16 07:17:18'),
(7, 'Pemberian fungisida secara berkala untuk mencegah serangan jamur terhadap tanaman.', '2023-06-16 07:17:39', '2023-06-16 07:17:39'),
(8, 'Membuang sejauh mungkin,\r\nmengubur, atau membakar\r\nbagian buah naga yang\r\nterserang penyakit agar tidak\r\nmenular.', '2023-06-18 06:10:44', '2023-06-18 06:10:44'),
(9, 'Membuang      tanaman yang sudah terserang sejauh mungkin, mengubur, atau membakar bagian buah naga yang terserang penyakit agar tidak menular. Sebaiknya melakukan pencegahan penyakit dengan menggunakan pupuk kandang yang sudah matang Selain itu pengendaliannya dengan cara penyemprotan dengan pestisida jenis. Fungisida atau Bakterisida;', '2023-06-18 07:08:24', '2023-06-18 06:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$sjWmdMvt.0bQg77O/iIaA.faFUEyusZ.GiBpRJTwc8WLUOFIVwVCC', 1, NULL, '2023-01-03 22:09:15'),
(16, 'Pakar', '$2y$10$WQzikfUcWwoNciMfU.Fdx.L15ohgjCUcBW1woww1udF6DzR9S.CC2', 2, '2023-06-18 07:40:34', '2023-06-18 07:40:34'),
(19, 'user', '$2y$10$YZ1hWGe5mKLI4714Os7iluR113BbwBw./EjiHwfYQj2Cz9PqzBoJu', 3, '2023-06-18 20:17:42', '2023-06-18 20:17:42'),
(21, 'member1', '$2y$10$iwUwM7e35C.jSg9bKK2r.OYxVZxXbmwbIhLlUokMPW9Thhk6f.mLG', 3, '2023-06-19 20:42:01', '2023-06-19 20:42:01'),
(22, 'pakar1', '$2y$10$UytZ6zHvU6ZyPT5yHTeJ8uwYkI5.f.KNgFRYLrt34KEkBVNioSafO', 2, '2023-07-13 12:58:32', '2023-07-13 12:58:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakar`
--
ALTER TABLE `pakar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solusi_id` (`solusi_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `save_evidence`
--
ALTER TABLE `save_evidence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_hipotesa`
--
ALTER TABLE `save_hipotesa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_solusi`
--
ALTER TABLE `save_solusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
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
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pakar`
--
ALTER TABLE `pakar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `save_evidence`
--
ALTER TABLE `save_evidence`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `save_hipotesa`
--
ALTER TABLE `save_hipotesa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `save_solusi`
--
ALTER TABLE `save_solusi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `solusi`
--
ALTER TABLE `solusi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyakit_solusi`
--
ALTER TABLE `penyakit_solusi`
  ADD CONSTRAINT `penyakit_solusi_ibfk_1` FOREIGN KEY (`solusi_id`) REFERENCES `solusi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penyakit_solusi_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
