-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2020 pada 14.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_kelinci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `kelompok_gejala_id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `kelompok_gejala_id`, `kode`, `nama_gejala`) VALUES
(51, 1, 'G1', 'Kelinci Sering Menggoyangkan kepala'),
(52, 1, 'G2', 'Menggaruk Daun Telinga'),
(53, 1, 'G3', 'Disertai Penyakit Skunder'),
(54, 1, 'G4', 'Menggaruk Telinga, Bulu, Kuping'),
(55, 1, 'G6', 'Kulit dapat berubah bentuk pada sekliling hidung'),
(56, 1, 'G5', 'Bulu Kasar'),
(57, 1, 'G6', 'Kulit bersisik'),
(58, 1, 'G7', 'Bulu Rontok'),
(59, 1, 'G8', 'Bulu Menjadi kasar'),
(60, 1, 'G9', 'Perut berisi bulu'),
(61, 1, 'G10', 'Bulu Menjadi kasar'),
(62, 1, 'G11', 'Mencret campur darah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `penyakit_id` int(11) NOT NULL,
  `md` float NOT NULL,
  `mb` float NOT NULL,
  `cf_pakar` float NOT NULL,
  `cf_user` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala_penyakit`
--

INSERT INTO `gejala_penyakit` (`id`, `gejala_id`, `penyakit_id`, `md`, `mb`, `cf_pakar`, `cf_user`) VALUES
(106, 51, 15, 0.7, 0.5, 0.4, 0.8),
(107, 52, 15, 0.7, 0.5, 0.8, 0.8),
(108, 53, 15, 0.6, 0.5, 1, NULL),
(109, 54, 15, 0.6, 0.5, 0.8, 0.8),
(110, 55, 15, 0.7, 0.5, 1, 0.6),
(111, 56, 15, 0.7, 0.5, 0.8, 0.6),
(112, 57, 15, 0.7, 0.5, 0.8, 0.6),
(113, 58, 15, 0.7, 0.5, 0.6, NULL),
(114, 59, 16, 0.7, 0.5, 0.6, 0.8),
(115, 60, 16, 0.7, 0.5, 0.4, 0.8),
(116, 61, 17, 0.6, 0.5, 0.6, 0.6),
(117, 62, 17, 0, 0, 0.6, 0.8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_diagnosa`
--

CREATE TABLE `hasil_diagnosa` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kepercayaan` float NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_diagnosa`
--

INSERT INTO `hasil_diagnosa` (`id`, `user_id`, `kode`, `nama`, `kepercayaan`, `keterangan`, `created_at`) VALUES
(91, 0, 'P001', 'Sifilis', 99.25, 'sss									', '2020-06-21 18:15:44'),
(92, 0, 'P001', 'Sifilis', 100, 'sss									', '2020-06-21 18:19:50'),
(93, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-21 18:21:41'),
(94, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-21 18:22:43'),
(95, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:33:08'),
(96, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:33:39'),
(97, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:33:47'),
(98, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:33:52'),
(99, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:34:18'),
(100, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:14'),
(101, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:25'),
(102, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:36'),
(103, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:45'),
(104, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:51'),
(105, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:35:59'),
(106, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:36:09'),
(107, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:36:18'),
(108, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:36:28'),
(109, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:37:01'),
(110, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:38:48'),
(111, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:38:52'),
(112, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:40:09'),
(113, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:41:45'),
(114, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:41:58'),
(115, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:42:04'),
(116, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:43:04'),
(117, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:45:14'),
(118, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:45:44'),
(119, 0, 'P001', 'Sifilis', 99.2512, 'sss									', '2020-06-22 06:45:52'),
(120, 0, 'P001', 'Sifilis', 96.256, 'sss									', '2020-06-22 06:48:46'),
(121, 0, 'P001', 'Sifilis', 96.256, 'sss									', '2020-06-22 06:50:00'),
(122, 0, 'P001', 'Sifilis', 96.256, 'sss									', '2020-06-22 06:50:08'),
(123, 0, 'P001', 'Sifilis', 81.28, 'sss									', '2020-06-22 07:00:02'),
(124, 0, 'P001', 'Sifilis', 96.256, 'sss									', '2020-06-22 07:03:44'),
(125, 0, 'P001', 'Sifilis', 96.256, 'sss									', '2020-06-22 17:11:14'),
(126, 0, 'P1', 'Scabies', 97.3522, 'Scabies									', '2020-06-22 20:05:31'),
(127, 0, 'P1', 'Scabies', 97.3522, 'Scabies									', '2020-06-22 20:08:56'),
(128, 0, 'P1', 'Scabies', 97.3522, 'Scabies									', '2020-06-22 20:19:07'),
(129, 0, 'P2', 'Kebiasaan Makan Bulu', 64.64, 'Kebiasaan Makan Bulu									', '2020-06-22 20:40:23'),
(130, 0, 'P3', 'Koksidiosis', 76.96, 'Koksidiosis											', '2020-06-22 20:46:19'),
(131, 0, 'P3', 'Koksidiosis', 66.72, 'Koksidiosis											', '2020-06-22 20:48:14'),
(132, 0, 'P1', 'Scabies', 97.3522, 'Scabies									', '2020-06-22 20:51:23'),
(133, 0, 'P1', 'Scabies', 75.5, 'Scabies									', '2020-06-23 12:20:26'),
(134, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:21:24'),
(135, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:23:35'),
(136, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:24:58'),
(137, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:25:16'),
(138, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:25:40'),
(139, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:27:50'),
(140, 0, 'P1', 'Scabies', 75.52, 'Scabies									', '2020-06-23 12:28:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `user_id` int(11) NOT NULL,
  `gejala_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`user_id`, `gejala_id`, `created_at`) VALUES
(3, 5, '2018-08-30 10:39:41'),
(3, 6, '2018-08-30 10:39:41'),
(3, 11, '2018-08-30 10:39:41'),
(3, 12, '2018-08-30 10:39:41'),
(3, 8, '2018-08-30 10:41:04'),
(3, 7, '2018-08-30 10:41:04'),
(6, 7, '2018-08-30 11:18:05'),
(6, 9, '2018-08-30 11:18:05'),
(6, 10, '2018-08-30 11:18:05'),
(3, 10, '2018-08-30 13:01:09'),
(3, 11, '2018-08-30 13:01:09'),
(3, 1, '2018-08-30 15:43:26'),
(3, 2, '2018-08-30 15:43:26'),
(3, 3, '2018-08-30 15:43:26'),
(3, 1, '2018-08-30 15:45:11'),
(3, 4, '2018-08-30 15:45:11'),
(3, 5, '2018-08-30 15:45:11'),
(3, 6, '2018-08-30 15:45:11'),
(0, 9, '2018-08-31 07:08:35'),
(0, 10, '2018-08-31 07:08:35'),
(3, 16, '2018-09-04 14:34:02'),
(3, 17, '2018-09-04 14:34:02'),
(3, 18, '2018-09-04 14:34:02'),
(3, 20, '2018-09-04 14:34:02'),
(3, 16, '2018-09-04 14:34:32'),
(3, 17, '2018-09-04 14:34:32'),
(3, 18, '2018-09-04 14:34:32'),
(3, 20, '2018-09-04 14:34:32'),
(3, 32, '2018-09-04 14:34:32'),
(3, 33, '2018-09-04 14:34:32'),
(4, 1, '2018-09-05 00:22:36'),
(4, 2, '2018-09-05 00:22:36'),
(4, 3, '2018-09-05 00:22:36'),
(4, 28, '2018-09-05 00:41:54'),
(4, 31, '2018-09-05 00:41:54'),
(4, 32, '2018-09-05 00:41:54'),
(4, 28, '2018-09-05 00:44:03'),
(4, 31, '2018-09-05 00:44:03'),
(4, 32, '2018-09-05 00:44:03'),
(3, 1, '2018-09-05 09:16:38'),
(3, 2, '2018-09-05 09:16:38'),
(3, 3, '2018-09-05 09:16:38'),
(3, 4, '2018-09-05 09:16:38'),
(3, 1, '2018-09-05 10:12:03'),
(4, 1, '2018-09-07 12:56:57'),
(4, 2, '2018-09-07 12:56:57'),
(4, 3, '2018-09-07 12:56:57'),
(3, 30, '2018-09-22 16:20:50'),
(3, 33, '2018-09-22 16:34:33'),
(3, 30, '2018-09-22 16:34:33'),
(0, 1, '2020-01-28 03:56:02'),
(0, 18, '2020-01-28 03:56:02'),
(0, 1, '2020-01-28 03:57:43'),
(0, 18, '2020-01-28 03:57:43'),
(0, 1, '2020-01-28 03:57:47'),
(0, 18, '2020-01-28 03:57:47'),
(0, 1, '2020-01-28 03:58:03'),
(0, 18, '2020-01-28 03:58:03'),
(0, 1, '2020-01-28 03:58:53'),
(0, 2, '2020-01-28 03:58:53'),
(0, 3, '2020-01-28 03:58:53'),
(0, 4, '2020-01-28 03:58:53'),
(0, 15, '2020-01-28 03:58:53'),
(0, 17, '2020-01-28 03:58:53'),
(0, 33, '2020-01-28 03:58:53'),
(0, 35, '2020-01-28 03:58:53'),
(0, 36, '2020-01-28 03:58:53'),
(0, 4, '2020-01-28 04:48:40'),
(0, 5, '2020-01-28 04:48:40'),
(0, 6, '2020-01-28 04:48:40'),
(0, 9, '2020-01-28 04:48:40'),
(0, 10, '2020-01-28 04:48:40'),
(0, 11, '2020-01-28 04:48:40'),
(0, 15, '2020-01-28 04:48:40'),
(0, 31, '2020-01-28 04:48:40'),
(0, 32, '2020-01-28 04:48:40'),
(0, 33, '2020-01-28 04:48:40'),
(0, 35, '2020-01-28 04:48:40'),
(0, 36, '2020-01-28 04:48:40'),
(0, 1, '2020-06-16 17:35:08'),
(0, 7, '2020-06-16 17:35:08'),
(0, 15, '2020-06-16 17:35:08'),
(0, 36, '2020-06-16 17:35:08'),
(0, 1, '2020-06-16 18:02:50'),
(0, 3, '2020-06-16 18:02:50'),
(0, 1, '2020-06-17 12:48:15'),
(0, 5, '2020-06-17 12:48:15'),
(0, 11, '2020-06-17 12:48:15'),
(0, 33, '2020-06-17 12:48:15'),
(0, 37, '2020-06-17 13:55:09'),
(0, 38, '2020-06-17 13:55:09'),
(0, 37, '2020-06-17 14:11:12'),
(0, 38, '2020-06-17 14:11:12'),
(0, 37, '2020-06-17 14:12:33'),
(0, 38, '2020-06-17 14:12:33'),
(0, 37, '2020-06-17 14:15:35'),
(0, 38, '2020-06-17 14:15:35'),
(0, 37, '2020-06-17 14:16:45'),
(0, 38, '2020-06-17 14:16:45'),
(0, 37, '2020-06-17 14:18:05'),
(0, 38, '2020-06-17 14:18:05'),
(0, 37, '2020-06-17 14:19:55'),
(0, 38, '2020-06-17 14:19:55'),
(0, 37, '2020-06-17 14:22:56'),
(0, 38, '2020-06-17 14:22:56'),
(0, 37, '2020-06-17 14:23:15'),
(0, 38, '2020-06-17 14:23:15'),
(0, 37, '2020-06-17 14:26:23'),
(0, 38, '2020-06-17 14:26:23'),
(0, 37, '2020-06-17 14:28:07'),
(0, 38, '2020-06-17 14:28:07'),
(0, 37, '2020-06-17 14:32:56'),
(0, 38, '2020-06-17 14:32:56'),
(0, 37, '2020-06-17 14:33:52'),
(0, 38, '2020-06-17 14:33:52'),
(0, 37, '2020-06-17 14:35:08'),
(0, 38, '2020-06-17 14:35:08'),
(0, 37, '2020-06-17 14:36:01'),
(0, 38, '2020-06-17 14:36:01'),
(0, 37, '2020-06-17 14:37:36'),
(0, 38, '2020-06-17 14:37:36'),
(0, 37, '2020-06-17 14:37:59'),
(0, 38, '2020-06-17 14:37:59'),
(0, 37, '2020-06-17 14:39:04'),
(0, 38, '2020-06-17 14:39:04'),
(0, 37, '2020-06-17 14:41:23'),
(0, 38, '2020-06-17 14:41:23'),
(0, 37, '2020-06-17 14:44:07'),
(0, 38, '2020-06-17 14:44:07'),
(0, 37, '2020-06-17 14:49:36'),
(0, 38, '2020-06-17 14:49:36'),
(0, 37, '2020-06-17 14:50:31'),
(0, 38, '2020-06-17 14:50:31'),
(0, 37, '2020-06-17 14:51:08'),
(0, 38, '2020-06-17 14:51:08'),
(0, 37, '2020-06-17 14:51:22'),
(0, 38, '2020-06-17 14:51:22'),
(0, 37, '2020-06-17 14:52:24'),
(0, 38, '2020-06-17 14:52:24'),
(0, 37, '2020-06-17 15:00:21'),
(0, 38, '2020-06-17 15:00:21'),
(0, 37, '2020-06-17 15:03:17'),
(0, 38, '2020-06-17 15:03:17'),
(0, 37, '2020-06-17 15:04:35'),
(0, 38, '2020-06-17 15:04:35'),
(0, 37, '2020-06-17 15:08:01'),
(0, 38, '2020-06-17 15:08:01'),
(0, 37, '2020-06-17 15:09:47'),
(0, 38, '2020-06-17 15:09:47'),
(0, 37, '2020-06-17 15:10:41'),
(0, 38, '2020-06-17 15:10:41'),
(0, 37, '2020-06-17 15:12:44'),
(0, 38, '2020-06-17 15:12:44'),
(0, 38, '2020-06-17 17:47:37'),
(0, 39, '2020-06-17 17:47:37'),
(0, 41, '2020-06-17 17:47:37'),
(0, 38, '2020-06-17 17:50:33'),
(0, 39, '2020-06-17 17:50:33'),
(0, 41, '2020-06-17 17:50:33'),
(0, 38, '2020-06-17 17:51:27'),
(0, 39, '2020-06-17 17:51:27'),
(0, 41, '2020-06-17 17:51:27'),
(0, 38, '2020-06-17 17:52:20'),
(0, 39, '2020-06-17 17:52:20'),
(0, 41, '2020-06-17 17:52:20'),
(0, 38, '2020-06-17 17:53:14'),
(0, 39, '2020-06-17 17:53:14'),
(0, 41, '2020-06-17 17:53:14'),
(0, 38, '2020-06-17 17:53:34'),
(0, 39, '2020-06-17 17:53:34'),
(0, 41, '2020-06-17 17:53:34'),
(0, 38, '2020-06-17 17:54:23'),
(0, 39, '2020-06-17 17:54:23'),
(0, 41, '2020-06-17 17:54:23'),
(0, 38, '2020-06-17 17:55:23'),
(0, 39, '2020-06-17 17:55:23'),
(0, 41, '2020-06-17 17:55:23'),
(0, 37, '2020-06-17 19:37:16'),
(0, 39, '2020-06-17 19:37:16'),
(0, 37, '2020-06-17 19:39:57'),
(0, 39, '2020-06-17 19:39:57'),
(0, 37, '2020-06-20 12:57:20'),
(0, 39, '2020-06-20 12:57:20'),
(0, 41, '2020-06-20 12:57:20'),
(0, 37, '2020-06-21 14:29:45'),
(0, 39, '2020-06-21 14:29:45'),
(0, 37, '2020-06-21 14:33:16'),
(0, 39, '2020-06-21 14:33:16'),
(0, 37, '2020-06-21 15:02:08'),
(0, 39, '2020-06-21 15:02:08'),
(0, 37, '2020-06-21 15:02:28'),
(0, 39, '2020-06-21 15:02:28'),
(0, 37, '2020-06-21 15:03:02'),
(0, 39, '2020-06-21 15:03:02'),
(0, 37, '2020-06-21 15:05:54'),
(0, 39, '2020-06-21 15:05:54'),
(0, 37, '2020-06-21 15:08:34'),
(0, 39, '2020-06-21 15:08:34'),
(0, 37, '2020-06-21 15:18:51'),
(0, 39, '2020-06-21 15:18:51'),
(0, 37, '2020-06-21 15:23:12'),
(0, 39, '2020-06-21 15:23:12'),
(0, 37, '2020-06-21 15:23:50'),
(0, 39, '2020-06-21 15:23:50'),
(0, 37, '2020-06-21 15:24:53'),
(0, 39, '2020-06-21 15:24:53'),
(0, 37, '2020-06-21 15:25:21'),
(0, 39, '2020-06-21 15:25:21'),
(0, 37, '2020-06-21 15:26:04'),
(0, 39, '2020-06-21 15:26:04'),
(0, 37, '2020-06-21 15:27:16'),
(0, 39, '2020-06-21 15:27:16'),
(0, 37, '2020-06-21 15:27:59'),
(0, 39, '2020-06-21 15:27:59'),
(0, 38, '2020-06-21 15:43:25'),
(0, 40, '2020-06-21 15:43:25'),
(0, 39, '2020-06-21 15:44:06'),
(0, 42, '2020-06-21 15:44:06'),
(0, 39, '2020-06-21 15:45:54'),
(0, 42, '2020-06-21 15:45:54'),
(0, 39, '2020-06-21 15:47:19'),
(0, 40, '2020-06-21 15:47:19'),
(0, 42, '2020-06-21 15:47:19'),
(0, 37, '2020-06-21 16:03:33'),
(0, 39, '2020-06-21 16:03:33'),
(0, 40, '2020-06-21 16:03:33'),
(0, 42, '2020-06-21 16:03:33'),
(0, 37, '2020-06-21 16:05:38'),
(0, 39, '2020-06-21 16:05:38'),
(0, 40, '2020-06-21 16:05:38'),
(0, 42, '2020-06-21 16:05:38'),
(0, 37, '2020-06-21 16:06:25'),
(0, 39, '2020-06-21 16:06:25'),
(0, 40, '2020-06-21 16:06:25'),
(0, 42, '2020-06-21 16:06:25'),
(0, 37, '2020-06-21 16:07:26'),
(0, 39, '2020-06-21 16:07:26'),
(0, 40, '2020-06-21 16:07:26'),
(0, 42, '2020-06-21 16:07:26'),
(0, 37, '2020-06-21 16:08:11'),
(0, 39, '2020-06-21 16:08:11'),
(0, 40, '2020-06-21 16:08:11'),
(0, 42, '2020-06-21 16:08:11'),
(0, 37, '2020-06-21 17:16:54'),
(0, 40, '2020-06-21 17:16:54'),
(0, 42, '2020-06-21 17:16:54'),
(0, 37, '2020-06-21 17:19:45'),
(0, 40, '2020-06-21 17:19:45'),
(0, 42, '2020-06-21 17:19:45'),
(0, 37, '2020-06-21 17:20:08'),
(0, 38, '2020-06-21 17:20:08'),
(0, 37, '2020-06-21 17:26:06'),
(0, 38, '2020-06-21 17:26:06'),
(0, 37, '2020-06-21 17:26:51'),
(0, 38, '2020-06-21 17:26:51'),
(0, 37, '2020-06-21 17:30:16'),
(0, 38, '2020-06-21 17:30:16'),
(0, 37, '2020-06-21 17:30:38'),
(0, 38, '2020-06-21 17:30:38'),
(0, 37, '2020-06-21 17:33:30'),
(0, 38, '2020-06-21 17:33:30'),
(0, 37, '2020-06-21 17:35:14'),
(0, 38, '2020-06-21 17:35:14'),
(0, 43, '2020-06-21 18:09:11'),
(0, 44, '2020-06-21 18:09:11'),
(0, 45, '2020-06-21 18:09:11'),
(0, 43, '2020-06-21 18:15:19'),
(0, 44, '2020-06-21 18:15:19'),
(0, 45, '2020-06-21 18:15:19'),
(0, 43, '2020-06-21 18:15:31'),
(0, 44, '2020-06-21 18:15:31'),
(0, 45, '2020-06-21 18:15:31'),
(0, 43, '2020-06-21 18:15:44'),
(0, 44, '2020-06-21 18:15:44'),
(0, 45, '2020-06-21 18:15:44'),
(0, 43, '2020-06-21 18:19:50'),
(0, 44, '2020-06-21 18:19:50'),
(0, 45, '2020-06-21 18:19:50'),
(0, 43, '2020-06-21 18:21:41'),
(0, 44, '2020-06-21 18:21:41'),
(0, 45, '2020-06-21 18:21:41'),
(0, 43, '2020-06-21 18:22:43'),
(0, 44, '2020-06-21 18:22:43'),
(0, 45, '2020-06-21 18:22:43'),
(0, 43, '2020-06-22 06:33:08'),
(0, 44, '2020-06-22 06:33:08'),
(0, 45, '2020-06-22 06:33:08'),
(0, 43, '2020-06-22 06:33:39'),
(0, 44, '2020-06-22 06:33:39'),
(0, 45, '2020-06-22 06:33:39'),
(0, 43, '2020-06-22 06:33:47'),
(0, 44, '2020-06-22 06:33:47'),
(0, 45, '2020-06-22 06:33:47'),
(0, 43, '2020-06-22 06:33:52'),
(0, 44, '2020-06-22 06:33:52'),
(0, 45, '2020-06-22 06:33:52'),
(0, 43, '2020-06-22 06:34:18'),
(0, 44, '2020-06-22 06:34:18'),
(0, 45, '2020-06-22 06:34:18'),
(0, 43, '2020-06-22 06:35:14'),
(0, 44, '2020-06-22 06:35:14'),
(0, 45, '2020-06-22 06:35:14'),
(0, 43, '2020-06-22 06:35:25'),
(0, 44, '2020-06-22 06:35:25'),
(0, 45, '2020-06-22 06:35:25'),
(0, 43, '2020-06-22 06:35:36'),
(0, 44, '2020-06-22 06:35:36'),
(0, 45, '2020-06-22 06:35:36'),
(0, 43, '2020-06-22 06:35:45'),
(0, 44, '2020-06-22 06:35:45'),
(0, 45, '2020-06-22 06:35:45'),
(0, 43, '2020-06-22 06:35:51'),
(0, 44, '2020-06-22 06:35:51'),
(0, 45, '2020-06-22 06:35:51'),
(0, 43, '2020-06-22 06:35:59'),
(0, 44, '2020-06-22 06:35:59'),
(0, 45, '2020-06-22 06:35:59'),
(0, 43, '2020-06-22 06:36:09'),
(0, 44, '2020-06-22 06:36:09'),
(0, 45, '2020-06-22 06:36:09'),
(0, 43, '2020-06-22 06:36:18'),
(0, 44, '2020-06-22 06:36:18'),
(0, 45, '2020-06-22 06:36:18'),
(0, 43, '2020-06-22 06:36:28'),
(0, 44, '2020-06-22 06:36:28'),
(0, 45, '2020-06-22 06:36:28'),
(0, 43, '2020-06-22 06:37:01'),
(0, 44, '2020-06-22 06:37:01'),
(0, 45, '2020-06-22 06:37:01'),
(0, 43, '2020-06-22 06:38:47'),
(0, 44, '2020-06-22 06:38:47'),
(0, 45, '2020-06-22 06:38:47'),
(0, 43, '2020-06-22 06:38:52'),
(0, 44, '2020-06-22 06:38:52'),
(0, 45, '2020-06-22 06:38:52'),
(0, 43, '2020-06-22 06:40:09'),
(0, 44, '2020-06-22 06:40:09'),
(0, 45, '2020-06-22 06:40:09'),
(0, 43, '2020-06-22 06:41:45'),
(0, 44, '2020-06-22 06:41:45'),
(0, 45, '2020-06-22 06:41:45'),
(0, 43, '2020-06-22 06:41:58'),
(0, 44, '2020-06-22 06:41:58'),
(0, 45, '2020-06-22 06:41:58'),
(0, 43, '2020-06-22 06:42:04'),
(0, 44, '2020-06-22 06:42:04'),
(0, 45, '2020-06-22 06:42:04'),
(0, 43, '2020-06-22 06:43:04'),
(0, 44, '2020-06-22 06:43:04'),
(0, 45, '2020-06-22 06:43:04'),
(0, 43, '2020-06-22 06:45:13'),
(0, 44, '2020-06-22 06:45:13'),
(0, 45, '2020-06-22 06:45:13'),
(0, 43, '2020-06-22 06:45:44'),
(0, 44, '2020-06-22 06:45:44'),
(0, 45, '2020-06-22 06:45:44'),
(0, 43, '2020-06-22 06:45:52'),
(0, 44, '2020-06-22 06:45:52'),
(0, 45, '2020-06-22 06:45:52'),
(0, 43, '2020-06-22 06:48:46'),
(0, 44, '2020-06-22 06:48:46'),
(0, 45, '2020-06-22 06:48:46'),
(0, 43, '2020-06-22 06:50:00'),
(0, 44, '2020-06-22 06:50:00'),
(0, 45, '2020-06-22 06:50:00'),
(0, 43, '2020-06-22 06:50:08'),
(0, 44, '2020-06-22 06:50:08'),
(0, 45, '2020-06-22 06:50:08'),
(0, 43, '2020-06-22 07:00:02'),
(0, 44, '2020-06-22 07:00:02'),
(0, 43, '2020-06-22 07:03:44'),
(0, 44, '2020-06-22 07:03:44'),
(0, 45, '2020-06-22 07:03:44'),
(0, 43, '2020-06-22 17:11:14'),
(0, 44, '2020-06-22 17:11:14'),
(0, 45, '2020-06-22 17:11:14'),
(0, 51, '2020-06-22 20:05:31'),
(0, 54, '2020-06-22 20:05:31'),
(0, 55, '2020-06-22 20:05:31'),
(0, 56, '2020-06-22 20:05:31'),
(0, 57, '2020-06-22 20:05:31'),
(0, 51, '2020-06-22 20:08:56'),
(0, 54, '2020-06-22 20:08:56'),
(0, 55, '2020-06-22 20:08:56'),
(0, 56, '2020-06-22 20:08:56'),
(0, 57, '2020-06-22 20:08:56'),
(0, 51, '2020-06-22 20:19:07'),
(0, 54, '2020-06-22 20:19:07'),
(0, 55, '2020-06-22 20:19:07'),
(0, 56, '2020-06-22 20:19:07'),
(0, 57, '2020-06-22 20:19:07'),
(0, 59, '2020-06-22 20:40:23'),
(0, 60, '2020-06-22 20:40:23'),
(0, 61, '2020-06-22 20:46:19'),
(0, 62, '2020-06-22 20:46:19'),
(0, 61, '2020-06-22 20:48:14'),
(0, 62, '2020-06-22 20:48:14'),
(0, 51, '2020-06-22 20:51:23'),
(0, 54, '2020-06-22 20:51:23'),
(0, 55, '2020-06-22 20:51:23'),
(0, 56, '2020-06-22 20:51:23'),
(0, 57, '2020-06-22 20:51:23'),
(0, 61, '2020-06-22 20:51:23'),
(0, 62, '2020-06-22 20:51:23'),
(0, 51, '2020-06-23 12:20:26'),
(0, 52, '2020-06-23 12:20:26'),
(0, 51, '2020-06-23 12:21:24'),
(0, 52, '2020-06-23 12:21:24'),
(0, 51, '2020-06-23 12:23:35'),
(0, 52, '2020-06-23 12:23:35'),
(0, 51, '2020-06-23 12:24:58'),
(0, 52, '2020-06-23 12:24:58'),
(0, 51, '2020-06-23 12:25:16'),
(0, 52, '2020-06-23 12:25:16'),
(0, 51, '2020-06-23 12:25:40'),
(0, 52, '2020-06-23 12:25:40'),
(0, 51, '2020-06-23 12:27:49'),
(0, 52, '2020-06-23 12:27:49'),
(0, 51, '2020-06-23 12:28:40'),
(0, 52, '2020-06-23 12:28:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_gejala`
--

CREATE TABLE `kelompok_gejala` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelompok_gejala`
--

INSERT INTO `kelompok_gejala` (`id`, `nama`, `keterangan`) VALUES
(1, 'Gejala Fisik', '-'),
(2, 'Gejala Non Fisik', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `nama`, `keterangan`) VALUES
(15, 'P1', 'Scabies', 'Scabies									'),
(16, 'P2', 'Kebiasaan Makan Bulu', 'Kebiasaan Makan Bulu									'),
(17, 'P3', 'Koksidiosis', 'Koksidiosis											'),
(18, 'P4', 'Mucoid Enteritis', 'Mucoid Enteritis											');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'stephenstrange', 'stephenstrange@avenger.com', 'admin', ''),
(3, 'obet', 'ac8052eb700a9d93f7ff3762a39abd1a', 'obet', 'obet@obet.com', 'admin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userx`
--

CREATE TABLE `userx` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userx`
--

INSERT INTO `userx` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(3, 'pasien', '21232f297a57a5a743894a0e4a801fc3', 'pasien1', 'hardiantix.1@gmail.com', 'pasien'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'hardianti', 'hardiantix.1@gmail.com', 'admin'),
(6, 'hardianti', '3843a08b3283e5603449b42a746ac973', 'hardianti', 'hardiantix.1@gmail.com', 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelompok_gejala_id` (`kelompok_gejala_id`);

--
-- Indeks untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gejala_id` (`gejala_id`),
  ADD KEY `penyakit_id` (`penyakit_id`);

--
-- Indeks untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelompok_gejala`
--
ALTER TABLE `kelompok_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userx`
--
ALTER TABLE `userx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `hasil_diagnosa`
--
ALTER TABLE `hasil_diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT untuk tabel `kelompok_gejala`
--
ALTER TABLE `kelompok_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `userx`
--
ALTER TABLE `userx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `gejala_ibfk_1` FOREIGN KEY (`kelompok_gejala_id`) REFERENCES `kelompok_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_ibfk_1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_ibfk_2` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;