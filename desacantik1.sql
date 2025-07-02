-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 08:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desacantik1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`, `created_at`, `updated_at`) VALUES
(1, 'Islam', NULL, NULL),
(2, 'Protestan', NULL, NULL),
(3, 'Katolik', NULL, NULL),
(4, 'Hindu ', NULL, NULL),
(5, 'Budha', NULL, NULL),
(6, 'Konghucu', NULL, NULL),
(7, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bahanbakarmasak`
--

CREATE TABLE `bahanbakarmasak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bahanbakar_masak` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahanbakarmasak`
--

INSERT INTO `bahanbakarmasak` (`id`, `bahanbakar_masak`, `created_at`, `updated_at`) VALUES
(1, 'Listrik ', NULL, NULL),
(2, 'Gas > 3 kg', NULL, NULL),
(3, 'Gas 3 kg', NULL, NULL),
(4, 'Gas kota/biogas ', NULL, NULL),
(5, 'Minyak tanah ', NULL, NULL),
(6, 'Briket', NULL, NULL),
(7, 'Arang ', NULL, NULL),
(8, 'Kayu Bakar', NULL, NULL),
(9, 'Tidak memasak dirumah ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bansos`
--

CREATE TABLE `bansos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bansos` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bansos`
--

INSERT INTO `bansos` (`id`, `bansos`, `created_at`, `updated_at`) VALUES
(1, 'PKH', NULL, NULL),
(2, 'Baznas', NULL, NULL),
(3, 'PKH ,  Baznas', NULL, NULL),
(4, 'BPNT', NULL, NULL),
(5, 'PKH, BPNT', NULL, NULL),
(6, 'Baznas, BPNT', NULL, NULL),
(7, 'PKH, Baznas , BPNT', NULL, NULL),
(8, 'BLT DD', NULL, NULL),
(9, 'PKH , BLT DD', NULL, NULL),
(10, 'Baznas, BLT DD', NULL, NULL),
(11, 'PKH, Baznas , BLT DD', NULL, NULL),
(12, 'BPNT , BLT DD', NULL, NULL),
(13, 'PKH , BPNT , BLT DD', NULL, NULL),
(14, 'Baznas , BPNT , BLT DD', NULL, NULL),
(15, 'PKH , Baznas , BPNT , BLT DD', NULL, NULL),
(16, 'KIS PBI', NULL, NULL),
(17, 'PKH, KIS PBI', NULL, NULL),
(18, 'Baznas , KIS PBI', NULL, NULL),
(19, 'PKH , Baznas , KIS PBI', NULL, NULL),
(20, 'BPNT , KIS PBI', NULL, NULL),
(21, 'PKH , BPNT , KIS PBI', NULL, NULL),
(22, 'Baznas , BPNT , KIS PBI', NULL, NULL),
(23, 'PKH , Baznas , BPNT , KIS PBI', NULL, NULL),
(24, 'BLT DD , KIS PBI', NULL, NULL),
(25, 'PKH , BLT DD , KIS PBI', NULL, NULL),
(26, 'Baznas , BLT DD , KIS PBI', NULL, NULL),
(27, 'PKH , Baznas , BLT DD , KIS PBI', NULL, NULL),
(28, 'BPNT , BLT DD , KIS PBI', NULL, NULL),
(29, 'PKH , BPNT , BLT DD , KIS PBI', NULL, NULL),
(30, 'Baznas , BPNT , BLT DD , KIS PBI', NULL, NULL),
(31, 'PKH , Baznas , BPNT , BLT DD , KIS BPI', NULL, NULL),
(32, 'KIP ', NULL, NULL),
(33, 'PKH , KIP', NULL, NULL),
(34, 'Baznas , KIP', NULL, NULL),
(35, 'PKH , Baznas , KIP', NULL, NULL),
(36, 'BPNT , KIP', NULL, NULL),
(37, 'PKH , BPNT , KIP', NULL, NULL),
(38, 'Baznas , BPNT , KIP', NULL, NULL),
(39, 'PKH , Baznas , BPNT , KIP', NULL, NULL),
(40, 'BLT DD , KIP', NULL, NULL),
(41, 'PKH , BLT DD , KIP', NULL, NULL),
(42, 'Baznas , BLT DD , KIP', NULL, NULL),
(43, 'PKH, Baznas , BLT DD , KIP', NULL, NULL),
(44, 'BPNT, BLT DD , KIP', NULL, NULL),
(45, 'PKH , BPNT , BLT DD , KIP', NULL, NULL),
(46, 'Baznas , BPNT , BLT DD , KIP', NULL, NULL),
(47, 'PKH , Bazns , BPNT , BLT DD , KIP', NULL, NULL),
(48, 'KIS PBI , KIP', NULL, NULL),
(49, 'PKH , KIS PBI , KIP', NULL, NULL),
(50, 'Baznas , KIS PBI , KIP', NULL, NULL),
(51, 'PKH , Baznas , KIS PBI , KIP', NULL, NULL),
(52, 'BPNT , KIS PBI , KIP', NULL, NULL),
(53, 'PKH , BPNT , KIS PBI , KIP', NULL, NULL),
(54, 'Baznas , BPNT , KIS PBI , KIP', NULL, NULL),
(55, 'PKH , Baznas , BPNT , KIS PBI , KIP', NULL, NULL),
(56, 'BLT DD , KIS PBI , KIP', NULL, NULL),
(57, 'PKH, BLT DD , KIS PBI , KIP', NULL, NULL),
(58, 'Baznas , BLT DD , KIS PBI , KIP', NULL, NULL),
(59, 'PKH, Baznas , BLT DD , KIS PBI, KIP', NULL, NULL),
(60, 'BPNT , BLT DD , KIS  PBI , KIP', NULL, NULL),
(61, 'PKH , BPNT , BLT DD, KIS PBI, KIP', NULL, NULL),
(62, 'Baznas , BPNT , BLT DD , KIS PBI , KIP', NULL, NULL),
(63, 'PKH , Baznas , BPNT , BLT DD , KIS PBI , KIP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `berita` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `berita`, `created_at`, `updated_at`) VALUES
(1, NULL, '2025-05-08 20:55:16', '2025-05-08 20:55:16'),
(2, NULL, '2025-05-08 20:55:19', '2025-05-08 20:55:19'),
(3, 'adsadsad', '2025-05-08 20:58:38', '2025-05-08 20:58:38'),
(4, 'Lorem ipsum (/ˌlɔː.rəm ˈɪp.səm/ LOR-əm IP-səm) is a dummy or placeholder text commonly used in graphic design, publishing, and web development. Its purpose is to permit a page layout to be designed, independently of the copy that will subsequently populate it, or to demonstrate various fonts of a typeface without meaningful text that could be distracting.\n\nLorem ipsum is typically a corrupted version of De finibus bonorum et malorum, a 1st-century BC text by the Roman statesman and philosopher Cicero, with words altered, added, and removed to make it nonsensical and improper Latin. The first two words are the truncation of dolorem ipsum (\"pain itself\").\n\nVersions of the Lorem ipsum text have been used in typesetting since the 1960s, when advertisements for Letraset transfer sheets popularized it.[1] Lorem ipsum was introduced to the digital world in the mid-1980s, when Aldus employed it in graphic and word-processing templates for its desktop publishing program PageMaker. Other popular word processors, including Pages and Microsoft Word, have since adopted Lorem ipsum,[2] as have many LaTeX packages,[3][4][5] web content managers such as Joomla! and WordPress, and CSS libraries such as Semantic UI', '2025-05-08 20:59:12', '2025-05-08 20:59:12'),
(5, 'aasdasdadadad', '2025-06-02 17:16:40', '2025-06-02 17:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `blok6`
--

CREATE TABLE `blok6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warga_id` int(11) NOT NULL,
  `nama_lahan` varchar(100) DEFAULT NULL,
  `jenislahan_id` char(100) DEFAULT NULL,
  `sppt_id` char(100) DEFAULT NULL,
  `nomor_pajak` varchar(100) DEFAULT NULL,
  `luas_lahan` varchar(100) DEFAULT NULL,
  `hakmiliksertif_id` char(100) DEFAULT NULL,
  `nama_hakmilik` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blok6`
--

INSERT INTO `blok6` (`id`, `warga_id`, `nama_lahan`, `jenislahan_id`, `sppt_id`, `nomor_pajak`, `luas_lahan`, `hakmiliksertif_id`, `nama_hakmilik`, `created_at`, `updated_at`) VALUES
(177, 27, 'lahan 8', '1', '1', '13331', '120000', '2', 'was', NULL, NULL),
(178, 27, 'lahan 9', '1', '1', '1333', '11000', '1', 'asd', NULL, NULL),
(179, 26, '5', NULL, '1', '12345678', '11000', '1', 'art', NULL, NULL),
(180, 26, 'lahan 76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 26, 'lahan 76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 26, 'lahan 76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 26, 'lahan 76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 26, 'lahan 2321', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 29, 'lahan coba 1', '1', '1', '12435', '11000', '1', 'marv', NULL, NULL),
(187, 29, 'lahan coba 2', '1', '1', '12121', '120000', '1', 'art', NULL, NULL),
(192, 30, 'lahan coba 2', NULL, '1', '12121', '11000', '1', 'art', NULL, NULL),
(193, 30, 'lahan coba 2', NULL, '1', '1', '1', '1', 'art', NULL, NULL),
(194, 31, '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(195, 32, '2', '2', '2', '2', '2', '2', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blok7`
--

CREATE TABLE `blok7` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_warga` int(11) NOT NULL,
  `nomor_urut` varchar(20) DEFAULT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `hubungan_keluarga_id` char(10) DEFAULT NULL,
  `keberadaan_id` char(10) DEFAULT NULL,
  `jenis_kelamin_id` char(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `agama_id` char(10) DEFAULT NULL,
  `suku_id` char(10) DEFAULT NULL,
  `domisili_id` char(10) DEFAULT NULL,
  `bansos_id` char(10) DEFAULT NULL,
  `status_kawin_id` char(10) DEFAULT NULL,
  `kepemilikan_bukunikah_id` char(10) DEFAULT NULL,
  `KK_id` char(10) DEFAULT NULL,
  `identitas_id` char(10) DEFAULT NULL,
  `kehamilan_id` char(10) DEFAULT NULL,
  `KB_id` char(10) DEFAULT NULL,
  `sekolah_id` char(10) DEFAULT NULL,
  `jenjang_sekolah_id` char(10) DEFAULT NULL,
  `kelas_id` char(10) DEFAULT NULL,
  `ijazah_id` char(10) DEFAULT NULL,
  `pensiunan_id` char(10) DEFAULT NULL,
  `bekerja_id` char(10) DEFAULT NULL,
  `lamabekerja_id` char(10) DEFAULT NULL,
  `pekerjaan_utama_id` char(10) DEFAULT NULL,
  `status_pekerjaan_id` char(10) DEFAULT NULL,
  `NPWP_id` char(10) DEFAULT NULL,
  `transaksi_id` char(10) DEFAULT NULL,
  `usaha_id` char(10) DEFAULT NULL,
  `lapangan_usaha` varchar(100) DEFAULT NULL,
  `pekerja_dibayar` varchar(100) DEFAULT NULL,
  `pekerja_tidakdibayar` varchar(100) DEFAULT NULL,
  `perizinan_usaha_id` char(10) DEFAULT NULL,
  `perizinan_usaha` varchar(100) DEFAULT NULL,
  `tempat_usaha_id` char(10) DEFAULT NULL,
  `omset_id` char(10) DEFAULT NULL,
  `internet_id` char(10) DEFAULT NULL,
  `cacat_id` char(10) DEFAULT NULL,
  `penyakitkronis_id` char(10) DEFAULT NULL,
  `golongandarah_id` char(10) DEFAULT NULL,
  `kondisigizi_id` char(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blok7`
--

INSERT INTO `blok7` (`id`, `id_warga`, `nomor_urut`, `nama_anggota`, `nik`, `hubungan_keluarga_id`, `keberadaan_id`, `jenis_kelamin_id`, `tanggal_lahir`, `umur`, `agama_id`, `suku_id`, `domisili_id`, `bansos_id`, `status_kawin_id`, `kepemilikan_bukunikah_id`, `KK_id`, `identitas_id`, `kehamilan_id`, `KB_id`, `sekolah_id`, `jenjang_sekolah_id`, `kelas_id`, `ijazah_id`, `pensiunan_id`, `bekerja_id`, `lamabekerja_id`, `pekerjaan_utama_id`, `status_pekerjaan_id`, `NPWP_id`, `transaksi_id`, `usaha_id`, `lapangan_usaha`, `pekerja_dibayar`, `pekerja_tidakdibayar`, `perizinan_usaha_id`, `perizinan_usaha`, `tempat_usaha_id`, `omset_id`, `internet_id`, `cacat_id`, `penyakitkronis_id`, `golongandarah_id`, `kondisigizi_id`, `created_at`, `updated_at`) VALUES
(42, 26, '1', 'Marviana', '121374t18', NULL, NULL, NULL, NULL, '21', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2', '1', NULL, NULL, '1', '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL),
(43, 26, '2', 'Rahma', '10183628', NULL, NULL, NULL, NULL, '21', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, '2', '2', NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL),
(44, 26, '3', 'Marviana', '174638210', NULL, NULL, NULL, NULL, '21', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2', '1', NULL, NULL, '2', '2', NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL),
(45, 26, '4', 'Marviana', '1948467', NULL, NULL, NULL, NULL, '21', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, '2', '2', NULL, '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL),
(60, 30, '1', 'marvia', '1234354657658', '2', '1', '1', '2023-01-30', '21', '2', '2', '2', '63', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '8', '7', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '2', '2', NULL, NULL),
(61, 29, '3', 'maesih', '1234354657658', '1', '2', '1', '2023-02-07', '2', '2', '2', '2', '34', '1', '1', '1', '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 29, '2', 'lala', NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 28, '1', 'ab', '12131', '2', NULL, NULL, NULL, '23', NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '1', '3', NULL, NULL, '2', '1', NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '5', '2', NULL, NULL, NULL),
(66, 31, '1', '1', '1', '1', '1', '1', '2025-06-14', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', '1', '1', '1', '1', '1', NULL, NULL),
(67, 32, '2', '2', '2', '2', '2', '2', '2025-06-06', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bukunikah`
--

CREATE TABLE `bukunikah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buku_nikah` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukunikah`
--

INSERT INTO `bukunikah` (`id`, `buku_nikah`, `created_at`, `updated_at`) VALUES
(1, 'Tidak', NULL, NULL),
(2, 'Ya, dapat ditunjukkan', NULL, NULL),
(3, 'Ya, tidak dapat ditunjukkan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cacat`
--

CREATE TABLE `cacat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cacat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cacat`
--

INSERT INTO `cacat` (`id`, `cacat`, `created_at`, `updated_at`) VALUES
(1, 'Tidak cacat', NULL, NULL),
(2, 'Tidak daksa / cacat tubuh', NULL, NULL),
(3, 'Tuna netra / buta', NULL, NULL),
(4, 'Tuna Rungu', NULL, NULL),
(5, 'Tuna Wicara', NULL, NULL),
(6, 'Tuna rungu & wicara', NULL, NULL),
(7, 'Tuna netra & cacat tubuh ', NULL, NULL),
(8, 'Tuna netra, rungu & wicara', NULL, NULL),
(9, 'Tuna rungu, wicara & cacat tubuh', NULL, NULL),
(10, 'Tuna rungu, wicara, netra & cacat tubuh', NULL, NULL),
(11, 'Cacat mental retardasi', NULL, NULL),
(12, 'Mantan penderita gangguan jiwa', NULL, NULL),
(13, 'Cacat fisik & mental', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daya`
--

CREATE TABLE `daya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `daya` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daya`
--

INSERT INTO `daya` (`id`, `daya`, `created_at`, `updated_at`) VALUES
(1, '450 watt', NULL, NULL),
(2, '900 watt', NULL, NULL),
(3, '1300 watt ', NULL, NULL),
(4, '2200 watt', NULL, NULL),
(5, '>2200 watt ', NULL, NULL),
(6, 'Tanpa meteran', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `desa_kelurahan`
--

CREATE TABLE `desa_kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desa_kel` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa_kelurahan`
--

INSERT INTO `desa_kelurahan` (`id`, `desa_kel`, `created_at`, `updated_at`) VALUES
(4, 'Korano Jaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domisili` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`id`, `domisili`, `created_at`, `updated_at`) VALUES
(1, 'Alamat tempat tinggal dan KTP/KK di dalam desa.', NULL, NULL),
(2, 'Alamat tempat tinggal di dalam desa tap KTP/KK di luar desa.', NULL, NULL),
(3, 'Alamat tempat tinggal di luar desa tapi KTP/KK di dalam desa.', NULL, NULL);

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
-- Table structure for table `fasilitasmasak`
--

CREATE TABLE `fasilitasmasak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_masak` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fasilitasmasak`
--

INSERT INTO `fasilitasmasak` (`id`, `fasilitas_masak`, `created_at`, `updated_at`) VALUES
(1, 'Sendiri', NULL, NULL),
(2, 'Bersama', NULL, NULL),
(3, 'Umum ', NULL, NULL),
(4, 'Tidak ada', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fotos`
--

INSERT INTO `fotos` (`id`, `name`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'adadddd', 'adadddd', NULL, '2025-05-08 17:09:37', '2025-05-08 17:09:37'),
(2, 'addddd', 'ddddd', NULL, '2025-05-08 17:09:56', '2025-05-08 17:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `gizi`
--

CREATE TABLE `gizi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gizi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gizi`
--

INSERT INTO `gizi` (`id`, `gizi`, `created_at`, `updated_at`) VALUES
(1, 'Kurang gizi', NULL, NULL),
(2, 'Kerdil', NULL, NULL),
(3, 'Tidak ada catatan', NULL, NULL),
(4, 'Tidak Tahu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `goldar`
--

CREATE TABLE `goldar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `goldar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `goldar`
--

INSERT INTO `goldar` (`id`, `goldar`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'AB', NULL, NULL),
(4, 'O', NULL, NULL),
(5, 'Tidak Tahu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hakmiliksertif`
--

CREATE TABLE `hakmiliksertif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hakmilik_sertif` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hakmiliksertif`
--

INSERT INTO `hakmiliksertif` (`id`, `hakmilik_sertif`, `created_at`, `updated_at`) VALUES
(1, 'SHM', NULL, NULL),
(2, 'HGB', NULL, NULL),
(3, 'Tidak \r\nbersertifikat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hasilcacah`
--

CREATE TABLE `hasilcacah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hasilcacah` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasilcacah`
--

INSERT INTO `hasilcacah` (`id`, `hasilcacah`, `created_at`, `updated_at`) VALUES
(1, 'Selesai dicacah', NULL, NULL),
(2, 'Keluarga tidak ditemukan', NULL, NULL),
(3, 'Keluarga pindah/bangunan kosong ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hubungankeluarga`
--

CREATE TABLE `hubungankeluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hubungan_keluarga` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hubungankeluarga`
--

INSERT INTO `hubungankeluarga` (`id`, `hubungan_keluarga`, `created_at`, `updated_at`) VALUES
(1, 'Kepala keluarga', NULL, NULL),
(2, 'Suami/istri', NULL, NULL),
(3, 'Anak', NULL, NULL),
(4, 'Menantu', NULL, NULL),
(5, 'Cucu', NULL, NULL),
(6, 'Orangtua/mertua', NULL, NULL),
(7, 'Pembantu/\r\nsopir', NULL, NULL),
(8, ' Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identitas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `identitas`, `created_at`, `updated_at`) VALUES
(1, 'Akta kelahiran ', NULL, NULL),
(2, 'Kartu pelajar ', NULL, NULL),
(3, 'Akta kelahiran,Kartu pelajar ', NULL, NULL),
(4, 'KTP', NULL, NULL),
(5, 'Akta kelahiran,KTP ', NULL, NULL),
(6, 'Kartu pelajar, KTP ', NULL, NULL),
(7, 'Akta kelahiran , Kartu pelajar, KTP    ', NULL, NULL),
(8, 'SIM', NULL, NULL),
(9, 'Akta kelahiran,SIM', NULL, NULL),
(10, 'Kartu pelajar,SIM ', NULL, NULL),
(11, 'Akta kelahiran ,Kartu pelajar,SIM ', NULL, NULL),
(12, 'KTP,SIM ', NULL, NULL),
(13, 'Akta kelahiran,KTP,SIM ', NULL, NULL),
(14, 'Kartu pelajar,KTP,SIM ', NULL, NULL),
(15, 'Akta kelahiran , Kartu pelajar, KTP, SIM    ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenisatap`
--

CREATE TABLE `jenisatap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_atap` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisatap`
--

INSERT INTO `jenisatap` (`id`, `jenis_atap`, `created_at`, `updated_at`) VALUES
(1, 'Beton/genteng beton', NULL, NULL),
(2, 'Genteng keramik ', NULL, NULL),
(3, 'Genteng metal ', NULL, NULL),
(4, 'Genteng tanah liat', NULL, NULL),
(5, 'Asbes ', NULL, NULL),
(6, 'Seng ', NULL, NULL),
(7, 'Sirap', NULL, NULL),
(8, 'Bambu ', NULL, NULL),
(9, 'Jerami/ijuk/daun daunan/rumbia', NULL, NULL),
(10, 'Lainnya ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenisdinding`
--

CREATE TABLE `jenisdinding` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_dinding` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisdinding`
--

INSERT INTO `jenisdinding` (`id`, `jenis_dinding`, `created_at`, `updated_at`) VALUES
(1, 'Tembok', NULL, NULL),
(2, 'Plesteran anyaman bambu/kawat', NULL, NULL),
(3, 'Kayu ', NULL, NULL),
(4, 'Anyaman bambu ', NULL, NULL),
(5, 'Batang kayu ', NULL, NULL),
(6, 'Bambu ', NULL, NULL),
(7, ' Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenislahan`
--

CREATE TABLE `jenislahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_lahan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenislahan`
--

INSERT INTO `jenislahan` (`id`, `jenis_lahan`, `created_at`, `updated_at`) VALUES
(1, 'Pekarangan', NULL, NULL),
(2, 'Sawah Irigasi', NULL, NULL),
(3, 'Sawah Tadah hujan', NULL, NULL),
(4, 'Tegalan', NULL, NULL),
(5, 'Kolam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenislantai`
--

CREATE TABLE `jenislantai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_lantai` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenislantai`
--

INSERT INTO `jenislantai` (`id`, `jenis_lantai`, `created_at`, `updated_at`) VALUES
(1, ' Marmer/granit ', NULL, NULL),
(2, 'Keramik', NULL, NULL),
(3, 'Parket/vinil/permada', NULL, NULL),
(4, 'Ubin/tegel/teraso', NULL, NULL),
(5, ' Kayu/papan', NULL, NULL),
(6, ' Semen/bata merah ', NULL, NULL),
(7, 'Bambu', NULL, NULL),
(8, 'Tanah', NULL, NULL),
(9, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenislintang`
--

CREATE TABLE `jenislintang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_lintang` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenislintang`
--

INSERT INTO `jenislintang` (`id`, `jenis_lintang`, `created_at`, `updated_at`) VALUES
(1, ' Lintang Utara', NULL, NULL),
(2, 'Lintang Selatan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jk`
--

CREATE TABLE `jk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jk`
--

INSERT INTO `jk` (`id`, `jk`, `created_at`, `updated_at`) VALUES
(1, 'Laki – laki', NULL, NULL),
(2, 'Perempuan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kab` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kab`, `created_at`, `updated_at`) VALUES
(17, 'Teluk Bintuni', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kb` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id`, `kb`, `created_at`, `updated_at`) VALUES
(1, 'MOW/Tubektomi', NULL, NULL),
(2, 'MOP/Vasektomi', NULL, NULL),
(3, 'AKDR/IUD/Spiral ', NULL, NULL),
(4, 'Suntikan KB', NULL, NULL),
(5, 'Susuk KB/Norplan ', NULL, NULL),
(6, 'Pil KB', NULL, NULL),
(7, 'Kondom/Karet KB ', NULL, NULL),
(8, 'Intravag/Tisue/Kondom Wanita', NULL, NULL),
(9, 'Cara Tradisional ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keberadaankeluarga`
--

CREATE TABLE `keberadaankeluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keberadaan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keberadaankeluarga`
--

INSERT INTO `keberadaankeluarga` (`id`, `keberadaan`, `created_at`, `updated_at`) VALUES
(1, 'Tinggal bersama keluarga', NULL, NULL),
(2, 'Meninggal', NULL, NULL),
(3, 'Tidak tinggal bersama keluarga/pindah', NULL, NULL),
(4, 'Anggota keluarga baru\r\n', NULL, NULL),
(5, 'Tidak ditemukan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keberadaansppt`
--

CREATE TABLE `keberadaansppt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keberadaan_sppt` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keberadaansppt`
--

INSERT INTO `keberadaansppt` (`id`, `keberadaan_sppt`, `created_at`, `updated_at`) VALUES
(1, 'Ada SPPT', NULL, NULL),
(2, 'Tidak ada \r\nSPPT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kec` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kec`, `created_at`, `updated_at`) VALUES
(20, 'Manimeri', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan_a`
--

CREATE TABLE `kepemilikan_a` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepemilikan_a` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepemilikan_a`
--

INSERT INTO `kepemilikan_a` (`id`, `kepemilikan_a`, `created_at`, `updated_at`) VALUES
(1, ' Milik sendiri ', NULL, NULL),
(2, 'Kontrak/sewa ', NULL, NULL),
(3, ' Bebas Sewa', NULL, NULL),
(4, ' Dinas', NULL, NULL),
(5, ' Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kepemilikan_b`
--

CREATE TABLE `kepemilikan_b` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kepemilikan_b` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepemilikan_b`
--

INSERT INTO `kepemilikan_b` (`id`, `kepemilikan_b`, `created_at`, `updated_at`) VALUES
(1, 'Milik sendiri ', NULL, NULL),
(2, ' Milik orang lain ', NULL, NULL),
(3, 'Tanah Negara ', NULL, NULL),
(4, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `klasifikasi` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `klasifikasi`, `created_at`, `updated_at`) VALUES
(1, 'Perkotaan', NULL, NULL),
(2, 'Perdesaan ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kloset`
--

CREATE TABLE `kloset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kloset` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kloset`
--

INSERT INTO `kloset` (`id`, `jenis_kloset`, `created_at`, `updated_at`) VALUES
(1, 'Leher angsa', NULL, NULL),
(2, 'Plengsengan ', NULL, NULL),
(3, 'Cemplung/cubluk', NULL, NULL),
(4, 'Tidak pakai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, 'Bagus/kualitas tinggi ', NULL, NULL),
(2, ' Jelek/kualitas rendah', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lokasiusaha`
--

CREATE TABLE `lokasiusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_usaha` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasiusaha`
--

INSERT INTO `lokasiusaha` (`id`, `lokasi_usaha`, `created_at`, `updated_at`) VALUES
(1, 'Ada', NULL, NULL),
(2, 'Tidak Ada', NULL, NULL);

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
(159, '2023_01_02_102749_create_warga', 1),
(800, '2023_01_13_070753_create_products_table', 3),
(857, '2014_10_12_000000_create_users_table', 4),
(858, '2014_10_12_100000_create_password_resets_table', 4),
(859, '2019_08_19_000000_create_failed_jobs_table', 4),
(860, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(861, '2022_12_29_184604_create_provinsi', 4),
(862, '2022_12_29_185336_create_kabupaten', 4),
(863, '2022_12_29_194154_create_kecamatan', 4),
(864, '2022_12_29_194228_create_desa_kelurahan', 4),
(865, '2022_12_29_194254_create_klasifikasi', 4),
(866, '2022_12_29_194415_create_dusun', 4),
(867, '2023_01_02_113748_create_jenislantai', 4),
(868, '2023_01_03_122924_create_hasilcacah', 4),
(869, '2023_01_03_133030_create_kepemilikan_a', 4),
(870, '2023_01_03_135718_create_kepemilikan_b', 4),
(871, '2023_01_05_063151_create_jenisdinding', 4),
(872, '2023_01_05_150206_create_kondisi', 4),
(873, '2023_01_05_160654_create_jenisatap', 4),
(874, '2023_01_05_162449_create_sumberminum', 4),
(875, '2023_01_05_162501_create_perolehminum', 4),
(876, '2023_01_05_180347_create_daya', 4),
(877, '2023_01_05_180400_create_sumberpenerangan', 4),
(878, '2023_01_05_180413_create_bahanbakarmasak', 4),
(879, '2023_01_05_182933_create_fasilitasmasak', 4),
(880, '2023_01_05_182943_create_kloset', 4),
(881, '2023_01_05_183014_create_tpa', 4),
(882, '2023_01_05_191633_create_pilihan', 4),
(883, '2023_01_06_181211_create_jenislahan', 4),
(884, '2023_01_06_181510_create_hakmiliksertif', 4),
(885, '2023_01_06_190821_create_keberadaansppt', 4),
(886, '2023_01_07_135945_create_jenislintang', 4),
(887, '2023_01_09_171853_create_hubungankeluarga', 4),
(888, '2023_01_09_171933_create_keberadaankeluarga', 4),
(889, '2023_01_09_172004_create_jk', 4),
(890, '2023_01_09_172026_create_agama', 4),
(891, '2023_01_09_172049_create_suku', 4),
(892, '2023_01_09_172112_create_domisili', 4),
(893, '2023_01_09_172129_create_bansos', 4),
(894, '2023_01_09_172154_create_statuskawin', 4),
(895, '2023_01_09_172226_create_bukunikah', 4),
(896, '2023_01_09_172252_create_identitas', 4),
(897, '2023_01_09_172322_create_kb', 4),
(898, '2023_01_09_172349_create_pendidikan', 4),
(899, '2023_01_09_172439_create_pekerjaanutama', 4),
(900, '2023_01_09_172508_create_statuskerja', 4),
(901, '2023_01_09_172604_create_npwp', 4),
(902, '2023_01_09_172628_create_transaksi', 4),
(903, '2023_01_09_172725_create_lokasiusaha', 4),
(904, '2023_01_09_172752_create_omset', 4),
(905, '2023_01_09_172813_create_penggunaaninternet', 4),
(906, '2023_01_09_172850_create_cacat', 4),
(907, '2023_01_09_172913_create_penyakitkronis', 4),
(908, '2023_01_09_172940_create_goldar', 4),
(909, '2023_01_09_173009_create_gizi', 4),
(910, '2023_01_09_175440_create_warga', 4),
(911, '2023_01_09_191743_create_partisipasi', 4),
(912, '2023_01_14_155948_create_blok6_table', 4),
(913, '2023_01_15_100141_create_blok7_table', 5),
(914, '2023_01_18_150434_create_user_table', 6),
(915, '2025_05_08_053746_create_foto_table', 7),
(916, '2025_05_08_073911_create_fotos_table', 8),
(917, '2025_05_09_010303_create_foto_table', 9),
(918, '2025_05_09_045011_create_berita_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `npwp`
--

CREATE TABLE `npwp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `npwp`
--

INSERT INTO `npwp` (`id`, `npwp`, `created_at`, `updated_at`) VALUES
(1, ' Ada, dapat menunjukkan ', NULL, NULL),
(2, 'Ada, tidak dapat menunjukkan', NULL, NULL),
(3, 'Tidak ada', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `omset`
--

CREATE TABLE `omset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `omset` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `omset`
--

INSERT INTO `omset` (`id`, `omset`, `created_at`, `updated_at`) VALUES
(1, '< 1 Juta ', NULL, NULL),
(2, '1 - < 5 Juta', NULL, NULL),
(3, '5 - < 10 Juta ', NULL, NULL),
(4, '≥ 10 Juta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partisipasi`
--

CREATE TABLE `partisipasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partisipasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partisipasi`
--

INSERT INTO `partisipasi` (`id`, `partisipasi`, `created_at`, `updated_at`) VALUES
(1, 'Tidak/belum pernah sekolah', NULL, NULL),
(2, 'Masih sekolah ', NULL, NULL),
(3, 'Tidak bersekolah lagi ', NULL, NULL);

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
-- Table structure for table `pekerjaanutama`
--

CREATE TABLE `pekerjaanutama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_utama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaanutama`
--

INSERT INTO `pekerjaanutama` (`id`, `pekerjaan_utama`, `created_at`, `updated_at`) VALUES
(1, 'Pertanian tanaman padi & palawija', NULL, NULL),
(2, 'Hortikultura', NULL, NULL),
(3, 'Perkebunan ', NULL, NULL),
(4, 'Perikanan tangkap ', NULL, NULL),
(5, 'Perikanan budidaya', NULL, NULL),
(6, 'Peternakan ', NULL, NULL),
(7, 'Kehutanan & pertanian lainnya', NULL, NULL),
(8, 'Pertambangan/ penggalian ', NULL, NULL),
(9, 'Industri pengolahan', NULL, NULL),
(10, 'Listrik dan gas', NULL, NULL),
(11, 'Bangunan/ konstruksi ', NULL, NULL),
(12, 'Perdagangan ', NULL, NULL),
(13, 'Hotel & rumah makan', NULL, NULL),
(14, 'Transportasi & pergudangan ', NULL, NULL),
(15, 'Informasi & komunikasi', NULL, NULL),
(16, 'Keuangan & asuransi', NULL, NULL),
(17, 'Jasa pendidikan', NULL, NULL),
(18, 'Jasa kesehatan', NULL, NULL),
(19, 'Jasa kemasyarakatan, pemerintahan & \r\nperorangan', NULL, NULL),
(20, 'Pemulung\r\n', NULL, NULL),
(21, 'TKI ', NULL, NULL),
(22, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'TK ', NULL, NULL),
(2, 'SD ', NULL, NULL),
(3, 'SMP', NULL, NULL),
(4, 'SMA', NULL, NULL),
(5, 'S1', NULL, NULL),
(6, 'S2 ', NULL, NULL),
(7, 'S3\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penggunaaninternet`
--

CREATE TABLE `penggunaaninternet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penggunaan_internet` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggunaaninternet`
--

INSERT INTO `penggunaaninternet` (`id`, `penggunaan_internet`, `created_at`, `updated_at`) VALUES
(1, 'Tidak menggunakan internet ', NULL, NULL),
(2, 'Sebagian sarana komunikasi', NULL, NULL),
(3, 'Untuk mencari informasi', NULL, NULL),
(4, 'Sebagai pemasaran atau iklan ', NULL, NULL),
(5, 'Sebagai saran penjulan produk/output', NULL, NULL),
(6, 'Sebagai pembelian', NULL, NULL),
(7, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyakitkronis`
--

CREATE TABLE `penyakitkronis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penyakit_kronis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakitkronis`
--

INSERT INTO `penyakitkronis` (`id`, `penyakit_kronis`, `created_at`, `updated_at`) VALUES
(1, 'Tidak ada', NULL, NULL),
(2, 'Hipertensi', NULL, NULL),
(3, 'Rematik', NULL, NULL),
(4, 'Asma', NULL, NULL),
(5, ' Masalah jantung', NULL, NULL),
(6, 'Diabestes  (kencing manis)', NULL, NULL),
(7, 'Tuberculosis (TBC)', NULL, NULL),
(8, 'Stroke', NULL, NULL),
(9, 'Kanker atau tumor ganas', NULL, NULL),
(10, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perolehminum`
--

CREATE TABLE `perolehminum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peroleh_minum` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perolehminum`
--

INSERT INTO `perolehminum` (`id`, `peroleh_minum`, `created_at`, `updated_at`) VALUES
(1, 'Membeli eceran ', NULL, NULL),
(2, 'Langganan', NULL, NULL),
(3, 'Tidak membeli', NULL, NULL);

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
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pilihan` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id`, `pilihan`, `created_at`, `updated_at`) VALUES
(1, 'Ya', NULL, NULL),
(2, 'Tidak', NULL, NULL),
(3, 'Ya', NULL, NULL),
(4, 'Tidak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_prov` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_prov`, `created_at`, `updated_at`) VALUES
(33, 'Papua Barat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuskawin`
--

CREATE TABLE `statuskawin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_kawin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuskawin`
--

INSERT INTO `statuskawin` (`id`, `status_kawin`, `created_at`, `updated_at`) VALUES
(1, 'Belum kawin', NULL, NULL),
(2, 'Kawin/nikah', NULL, NULL),
(3, 'Cerai hidup', NULL, NULL),
(4, 'Cerai mati', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuskerja`
--

CREATE TABLE `statuskerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_kerja` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuskerja`
--

INSERT INTO `statuskerja` (`id`, `status_kerja`, `created_at`, `updated_at`) VALUES
(1, 'Berusaha sendiri', NULL, NULL),
(2, 'Berusaha dibantu buruh tidak tetap/tidak \r\ndibayar', NULL, NULL),
(3, 'Berusaha dibantu buruh/dibayar', NULL, NULL),
(4, 'Buruh/karyawan/pegawai swasta', NULL, NULL),
(5, 'PNS/TNI/Polri/BUMN/BUMD/anggota \r\nlegislatif', NULL, NULL),
(6, 'Pekerja bebas pertanian', NULL, NULL),
(7, 'Pekerja bebas non-pertanian', NULL, NULL),
(8, 'Pekerja keluarga tidak dibayar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suku`
--

CREATE TABLE `suku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suku` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suku`
--

INSERT INTO `suku` (`id`, `suku`, `created_at`, `updated_at`) VALUES
(1, 'Arab', NULL, NULL),
(2, 'Ambon', NULL, NULL),
(3, 'Bali', NULL, NULL),
(4, 'Batak', NULL, NULL),
(5, 'Betawi', NULL, NULL),
(6, 'Bugis', NULL, NULL),
(7, 'China', NULL, NULL),
(8, 'Dayak', NULL, NULL),
(9, 'India', NULL, NULL),
(10, 'Jawa', NULL, NULL),
(11, 'Madura', NULL, NULL),
(12, 'Melayu', NULL, NULL),
(13, 'Minang', NULL, NULL),
(14, 'Papua', NULL, NULL),
(15, 'Sunda', NULL, NULL),
(16, 'Timor', NULL, NULL),
(17, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sumberminum`
--

CREATE TABLE `sumberminum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_minum` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumberminum`
--

INSERT INTO `sumberminum` (`id`, `sumber_minum`, `created_at`, `updated_at`) VALUES
(1, 'Air kemasan ber-merk', NULL, NULL),
(2, 'Air isi ulang ', NULL, NULL),
(3, 'Leding ', NULL, NULL),
(4, 'Sumur berpompa', NULL, NULL),
(5, 'Sumur terlindung', NULL, NULL),
(6, 'Sumur tak terlindung ', NULL, NULL),
(7, 'Mata air terlindung ', NULL, NULL),
(8, 'Mata air tak terlindung ', NULL, NULL),
(9, 'Air Permukaan\r\n(Sungai/danau/kolam/waduk/\r\nirigasi)', NULL, NULL),
(10, 'Air hujan ', NULL, NULL),
(11, 'Lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sumberpenerangan`
--

CREATE TABLE `sumberpenerangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sumber_penerangan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sumberpenerangan`
--

INSERT INTO `sumberpenerangan` (`id`, `sumber_penerangan`, `created_at`, `updated_at`) VALUES
(1, 'Listrik PLN ', NULL, NULL),
(2, 'Listrik non PLN', NULL, NULL),
(3, 'Bukan Listrik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tpa`
--

CREATE TABLE `tpa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tpa` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tpa`
--

INSERT INTO `tpa` (`id`, `tpa`, `created_at`, `updated_at`) VALUES
(1, 'Tangki ', NULL, NULL),
(2, 'SPAL ', NULL, NULL),
(3, 'Lubang Tanah ', NULL, NULL),
(4, 'Kolam/sawah/sungai/danau/ laut ', NULL, NULL),
(5, 'Pantai/tanah lapang/kebun', NULL, NULL),
(6, 'Lainnya \r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaksi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `transaksi`, `created_at`, `updated_at`) VALUES
(1, 'Ada, seluruh transaksi menggunakan \r\nlayanan digital/internet ', NULL, NULL),
(2, 'Ada, sebagian transaksi menggunakan \r\nlayanan digital/internet', NULL, NULL),
(3, 'Tidak menggunakan layanan \r\ndigital/internet\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL,
  `kecamatan_id` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `role`, `kecamatan_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1', '', 'admin', '$2y$10$6vRffRFs70UO3OaKMhnN0OoEVignrsPEj7lWQ1JhhUdad0gmHhq/K', '2023-01-18 08:17:45', '2023-01-18 08:17:45'),
(3, 'intan', '2', '20', 'jatiyoso', '$2y$10$OvXG6y9JXQP3FwU0gUwC3.GWhxWh3HJBDMgbj1zefGsHtVU/Eaj9.', '2023-01-20 03:08:12', '2023-01-20 03:08:12'),
(4, 'Daffa', '2', '40', 'jumantono', '$2y$10$kXrQ1nKtPD68YHJPtQbmquemK5lIVPgFvpM7VZvO1yD0xONa0QsUK', '2023-01-20 05:34:05', '2023-01-20 05:34:05'),
(5, 'bps', '2', '60', 'tawangmangu', '$2y$10$F4fDmnxCJ0/0FahzVXA1hOnNauQ6GL0gtenGsrEdhrjlFjCvtXFMC', '2023-01-20 05:35:28', '2023-01-20 05:35:28'),
(6, 'bps', '2', '80', 'karangpandan', '$2y$10$jX6yWMgL6VI.YjURT/3/QO0iC1yk0vz4gwnmMQ7ceBsA1VlaBEpC2', '2023-01-20 05:36:03', '2023-01-20 05:36:03'),
(7, 'bps', '2', '140', 'kebakkramat', '$2y$10$ZFpEH43ygrghqm7oQaFzr.2mSuJeBTyY6VMhkxACafQcuZYPwIDGK', '2023-01-20 05:36:19', '2023-01-20 05:36:19'),
(8, 'martin simamora', '1', '20', 'martin', '$2y$10$QoxATITyom9eO5Tn7AZXA.eaP1iCnMK/BFLd0GE75Nogz1gGCGaPu', '2025-04-28 23:35:59', '2025-04-28 23:35:59'),
(9, 'ajeng', '1', '80', 'ajeng', '$2y$10$exYgmBJ.eER4eWAdIAZoa.06qe2IUSfjAmZrU3zHzfyCAPbdIaegS', '2025-05-01 23:32:08', '2025-05-01 23:32:08'),
(10, 'cobas', '1', '20', 'cobas', '$2y$10$khnF/sAePM/xzXVYxstpa.QtYSrpvpE1t3OJAnoNdz/4/65SBAF5C', '2025-06-02 14:43:54', '2025-06-02 14:43:54'),
(11, 'yusuf', '1', '20', 'yusuf', '$2y$10$kQhXmqmcpDGMcQwIgBoobuSnBX.b7.rALN6b4sVvcT4GIA6oTd29W', '2025-06-02 17:17:36', '2025-06-02 17:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi_id` char(10) DEFAULT NULL,
  `kabupaten_id` char(10) DEFAULT NULL,
  `kecamatan_id` char(100) DEFAULT NULL,
  `desa_kel_id` char(100) DEFAULT NULL,
  `klasifikasi_id` char(100) DEFAULT NULL,
  `nama_dusun` varchar(100) DEFAULT NULL,
  `kode_sls` varchar(100) DEFAULT NULL,
  `nama_sls` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `lattitude` varchar(100) DEFAULT NULL,
  `jenis_lintang_id` char(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `nubtt` varchar(100) DEFAULT NULL,
  `no_kk` varchar(100) DEFAULT NULL,
  `nukhp` varchar(100) DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `jumlah_anggota` varchar(100) DEFAULT NULL,
  `tanggal_cacah` date DEFAULT NULL,
  `nama_cacah` varchar(100) DEFAULT NULL,
  `kode_cacah` varchar(100) DEFAULT NULL,
  `tgl_periksa` date DEFAULT NULL,
  `nama_periksa` varchar(100) DEFAULT NULL,
  `kode_periksa` varchar(100) DEFAULT NULL,
  `hasilcacah_id` char(100) DEFAULT NULL,
  `kepemilikan_a_id` char(100) DEFAULT NULL,
  `kepemilikan_b_id` char(100) DEFAULT NULL,
  `luas_lantai` varchar(100) DEFAULT NULL,
  `jenislantai_id` char(100) DEFAULT NULL,
  `jenis_dinding_id` char(100) DEFAULT NULL,
  `kondisi_dinding_id` char(100) DEFAULT NULL,
  `jenis_atap_id` char(100) DEFAULT NULL,
  `kondisi_atap_id` char(100) DEFAULT NULL,
  `jumlah_kamar` varchar(100) DEFAULT NULL,
  `sumber_minum_id` char(100) DEFAULT NULL,
  `peroleh_minum_id` char(100) DEFAULT NULL,
  `penerangan_id` char(100) DEFAULT NULL,
  `daya_id` char(100) DEFAULT NULL,
  `bahanmasak_id` char(100) DEFAULT NULL,
  `fasilitasmasak_id` char(100) DEFAULT NULL,
  `kloset_id` char(100) DEFAULT NULL,
  `tpa_id` char(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `kode_lapangan_usaha` varchar(100) DEFAULT NULL,
  `pendapatan` varchar(100) DEFAULT NULL,
  `gas_id` char(10) DEFAULT NULL,
  `lemari_id` char(10) DEFAULT NULL,
  `ac_id` char(10) DEFAULT NULL,
  `pemanas_id` char(10) DEFAULT NULL,
  `pstn_id` char(10) DEFAULT NULL,
  `tv_id` char(10) DEFAULT NULL,
  `emas_id` char(10) DEFAULT NULL,
  `laptop_id` char(10) DEFAULT NULL,
  `sepeda_id` char(10) DEFAULT NULL,
  `motor_id` char(10) DEFAULT NULL,
  `mobil_id` char(10) DEFAULT NULL,
  `perahu_id` char(10) DEFAULT NULL,
  `motortempel_id` char(10) DEFAULT NULL,
  `perahumotor_id` char(10) DEFAULT NULL,
  `kapal_id` char(10) DEFAULT NULL,
  `nomor_hp` varchar(20) DEFAULT NULL,
  `jumlah_tv` varchar(10) DEFAULT NULL,
  `lahan_id` char(10) DEFAULT NULL,
  `lahan_meter` varchar(100) DEFAULT NULL,
  `rumahlain_id` char(10) DEFAULT NULL,
  `sapi` varchar(100) DEFAULT NULL,
  `kerbau` varchar(100) DEFAULT NULL,
  `kuda` varchar(100) DEFAULT NULL,
  `babi` varchar(100) DEFAULT NULL,
  `kambing` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `provinsi_id`, `kabupaten_id`, `kecamatan_id`, `desa_kel_id`, `klasifikasi_id`, `nama_dusun`, `kode_sls`, `nama_sls`, `alamat`, `lattitude`, `jenis_lintang_id`, `longitude`, `nubtt`, `no_kk`, `nukhp`, `kepala_keluarga`, `jumlah_anggota`, `tanggal_cacah`, `nama_cacah`, `kode_cacah`, `tgl_periksa`, `nama_periksa`, `kode_periksa`, `hasilcacah_id`, `kepemilikan_a_id`, `kepemilikan_b_id`, `luas_lantai`, `jenislantai_id`, `jenis_dinding_id`, `kondisi_dinding_id`, `jenis_atap_id`, `kondisi_atap_id`, `jumlah_kamar`, `sumber_minum_id`, `peroleh_minum_id`, `penerangan_id`, `daya_id`, `bahanmasak_id`, `fasilitasmasak_id`, `kloset_id`, `tpa_id`, `pekerjaan`, `kode_lapangan_usaha`, `pendapatan`, `gas_id`, `lemari_id`, `ac_id`, `pemanas_id`, `pstn_id`, `tv_id`, `emas_id`, `laptop_id`, `sepeda_id`, `motor_id`, `mobil_id`, `perahu_id`, `motortempel_id`, `perahumotor_id`, `kapal_id`, `nomor_hp`, `jumlah_tv`, `lahan_id`, `lahan_meter`, `rumahlain_id`, `sapi`, `kerbau`, `kuda`, `babi`, `kambing`, `created_at`, `updated_at`) VALUES
(24, '33', '17', '20', '4', '2', 'Dusun baa', '1234', 'Marv', 'Jl.Sulawesi No 12 A', '120', '2', '111', '11', '22222222222222', '121', '1', '1', '2023-01-27', 'Marv', '12', '2023-01-27', 'Marvv', '13', '1', '1', '1', '1', '1', '1', '2', '1', '2', '1', '2', '1', '1', '2', '2', '2', '2', '2', '1', '12', '12000000', '1', '3', '1', '3', '1', '3', '2', '4', '2', '4', '2', '4', '2', '4', '2', '1', '1', '1', '1111', '1', '3', '5', '6', '4', '6', '2023-01-26 22:00:42', '2023-01-26 22:00:42'),
(32, '33', '17', '20', '4', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2025-06-02 15:06:44', '2025-06-02 15:06:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahanbakarmasak`
--
ALTER TABLE `bahanbakarmasak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bansos`
--
ALTER TABLE `bansos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blok6`
--
ALTER TABLE `blok6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blok7`
--
ALTER TABLE `blok7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukunikah`
--
ALTER TABLE `bukunikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cacat`
--
ALTER TABLE `cacat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daya`
--
ALTER TABLE `daya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desa_kelurahan`
--
ALTER TABLE `desa_kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fasilitasmasak`
--
ALTER TABLE `fasilitasmasak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gizi`
--
ALTER TABLE `gizi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hakmiliksertif`
--
ALTER TABLE `hakmiliksertif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasilcacah`
--
ALTER TABLE `hasilcacah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungankeluarga`
--
ALTER TABLE `hubungankeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisatap`
--
ALTER TABLE `jenisatap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisdinding`
--
ALTER TABLE `jenisdinding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenislahan`
--
ALTER TABLE `jenislahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenislantai`
--
ALTER TABLE `jenislantai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenislintang`
--
ALTER TABLE `jenislintang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jk`
--
ALTER TABLE `jk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keberadaankeluarga`
--
ALTER TABLE `keberadaankeluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keberadaansppt`
--
ALTER TABLE `keberadaansppt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepemilikan_a`
--
ALTER TABLE `kepemilikan_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepemilikan_b`
--
ALTER TABLE `kepemilikan_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kloset`
--
ALTER TABLE `kloset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasiusaha`
--
ALTER TABLE `lokasiusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `npwp`
--
ALTER TABLE `npwp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `omset`
--
ALTER TABLE `omset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partisipasi`
--
ALTER TABLE `partisipasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pekerjaanutama`
--
ALTER TABLE `pekerjaanutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penggunaaninternet`
--
ALTER TABLE `penggunaaninternet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakitkronis`
--
ALTER TABLE `penyakitkronis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perolehminum`
--
ALTER TABLE `perolehminum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuskawin`
--
ALTER TABLE `statuskawin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuskerja`
--
ALTER TABLE `statuskerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suku`
--
ALTER TABLE `suku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumberminum`
--
ALTER TABLE `sumberminum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumberpenerangan`
--
ALTER TABLE `sumberpenerangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpa`
--
ALTER TABLE `tpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bahanbakarmasak`
--
ALTER TABLE `bahanbakarmasak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bansos`
--
ALTER TABLE `bansos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blok6`
--
ALTER TABLE `blok6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `blok7`
--
ALTER TABLE `blok7`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `bukunikah`
--
ALTER TABLE `bukunikah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cacat`
--
ALTER TABLE `cacat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `daya`
--
ALTER TABLE `daya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `desa_kelurahan`
--
ALTER TABLE `desa_kelurahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitasmasak`
--
ALTER TABLE `fasilitasmasak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gizi`
--
ALTER TABLE `gizi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hakmiliksertif`
--
ALTER TABLE `hakmiliksertif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hasilcacah`
--
ALTER TABLE `hasilcacah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hubungankeluarga`
--
ALTER TABLE `hubungankeluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenisatap`
--
ALTER TABLE `jenisatap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenisdinding`
--
ALTER TABLE `jenisdinding`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenislahan`
--
ALTER TABLE `jenislahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenislantai`
--
ALTER TABLE `jenislantai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenislintang`
--
ALTER TABLE `jenislintang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jk`
--
ALTER TABLE `jk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kb`
--
ALTER TABLE `kb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keberadaankeluarga`
--
ALTER TABLE `keberadaankeluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keberadaansppt`
--
ALTER TABLE `keberadaansppt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `kepemilikan_a`
--
ALTER TABLE `kepemilikan_a`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kepemilikan_b`
--
ALTER TABLE `kepemilikan_b`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kloset`
--
ALTER TABLE `kloset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lokasiusaha`
--
ALTER TABLE `lokasiusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;

--
-- AUTO_INCREMENT for table `npwp`
--
ALTER TABLE `npwp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `omset`
--
ALTER TABLE `omset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partisipasi`
--
ALTER TABLE `partisipasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaanutama`
--
ALTER TABLE `pekerjaanutama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penggunaaninternet`
--
ALTER TABLE `penggunaaninternet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyakitkronis`
--
ALTER TABLE `penyakitkronis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perolehminum`
--
ALTER TABLE `perolehminum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `statuskawin`
--
ALTER TABLE `statuskawin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuskerja`
--
ALTER TABLE `statuskerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suku`
--
ALTER TABLE `suku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sumberminum`
--
ALTER TABLE `sumberminum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sumberpenerangan`
--
ALTER TABLE `sumberpenerangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tpa`
--
ALTER TABLE `tpa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
