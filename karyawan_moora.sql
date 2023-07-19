-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan_moora`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tgl_absensi` varchar(15) NOT NULL,
  `stat_absensi` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_karyawan`, `tgl_absensi`, `stat_absensi`, `time`) VALUES
(1, 1, '2023-06-01', 1, '07:00:00'),
(2, 1, '2023-06-02', 1, '07:00:00'),
(3, 1, '2023-06-03', 1, '07:00:00'),
(4, 1, '2023-06-04', 1, '07:00:00'),
(5, 1, '2023-06-05', 1, '07:00:00'),
(6, 1, '2023-06-06', 1, '07:00:00'),
(7, 1, '2023-06-07', 1, '07:00:00'),
(8, 1, '2023-06-08', 1, '07:00:00'),
(9, 1, '2023-06-09', 1, '07:00:00'),
(10, 1, '2023-06-10', 1, '07:00:00'),
(11, 1, '2023-06-11', 3, '07:00:00'),
(12, 1, '2023-06-12', 1, '07:00:00'),
(13, 1, '2023-06-13', 1, '07:00:00'),
(14, 1, '2023-06-14', 1, '07:00:00'),
(15, 1, '2023-06-15', 1, '07:00:00'),
(16, 1, '2023-06-16', 1, '07:00:00'),
(17, 1, '2023-06-17', 1, '07:00:00'),
(18, 1, '2023-06-18', 1, '07:00:00'),
(19, 1, '2023-06-19', 1, '07:00:00'),
(20, 1, '2023-06-20', 1, '07:00:00'),
(21, 2, '2023-06-01', 1, '07:00:00'),
(22, 2, '2023-06-02', 1, '07:00:00'),
(23, 2, '2023-06-03', 1, '07:00:00'),
(24, 2, '2023-06-04', 1, '07:00:00'),
(25, 2, '2023-06-05', 9, '07:20:00'),
(26, 2, '2023-06-06', 1, '07:00:00'),
(27, 2, '2023-06-07', 1, '07:00:00'),
(28, 2, '2023-06-08', 1, '07:00:00'),
(29, 2, '2023-06-09', 1, '07:00:00'),
(30, 2, '2023-06-10', 9, '07:30:00'),
(31, 2, '2023-06-11', 3, '07:30:00'),
(32, 2, '2023-06-12', 1, '07:00:00'),
(33, 2, '2023-06-13', 9, '07:10:00'),
(34, 2, '2023-06-14', 1, '07:00:00'),
(35, 2, '2023-06-15', 3, '07:00:00'),
(36, 2, '2023-06-16', 1, '07:00:00'),
(37, 2, '2023-06-17', 1, '07:00:00'),
(38, 2, '2023-06-18', 1, '07:00:00'),
(39, 2, '2023-06-19', 1, '07:00:00'),
(40, 2, '2023-06-20', 1, '07:00:00'),
(41, 3, '2023-06-01', 1, '07:00:00'),
(42, 3, '2023-06-02', 9, '07:20:00'),
(43, 3, '2023-06-03', 1, '07:00:00'),
(44, 3, '2023-06-04', 1, '07:00:00'),
(45, 3, '2023-06-05', 3, '07:00:00'),
(46, 3, '2023-06-06', 1, '07:00:00'),
(47, 3, '2023-06-07', 1, '07:00:00'),
(48, 3, '2023-06-08', 1, '07:00:00'),
(49, 3, '2023-06-09', 1, '07:00:00'),
(50, 3, '2023-06-10', 1, '07:00:00'),
(51, 3, '2023-06-11', 3, '07:00:00'),
(52, 3, '2023-06-12', 1, '07:00:00'),
(53, 3, '2023-06-13', 9, '07:10:00'),
(54, 3, '2023-06-14', 1, '07:00:00'),
(55, 3, '2023-06-15', 1, '07:00:00'),
(56, 3, '2023-06-16', 1, '07:00:00'),
(57, 3, '2023-06-17', 1, '07:00:00'),
(58, 3, '2023-06-18', 1, '07:00:00'),
(59, 3, '2023-06-19', 1, '07:00:00'),
(60, 3, '2023-06-20', 1, '07:00:00'),
(61, 4, '2023-06-01', 1, '07:00:00'),
(62, 4, '2023-06-02', 1, '07:00:00'),
(63, 4, '2023-06-03', 1, '07:00:00'),
(64, 4, '2023-06-04', 1, '07:00:00'),
(65, 4, '2023-06-05', 1, '07:00:00'),
(66, 4, '2023-06-06', 1, '07:00:00'),
(67, 4, '2023-06-07', 1, '07:00:00'),
(68, 4, '2023-06-08', 1, '07:00:00'),
(69, 4, '2023-06-09', 1, '07:00:00'),
(70, 4, '2023-06-10', 1, '07:00:00'),
(71, 4, '2023-06-11', 3, '07:00:00'),
(72, 4, '2023-06-12', 1, '07:00:00'),
(73, 4, '2023-06-13', 9, '07:10:00'),
(74, 4, '2023-06-14', 1, '07:00:00'),
(75, 4, '2023-06-15', 1, '07:00:00'),
(76, 4, '2023-06-16', 1, '07:00:00'),
(77, 4, '2023-06-17', 9, '07:20:00'),
(78, 4, '2023-06-18', 1, '07:00:00'),
(79, 4, '2023-06-19', 1, '07:00:00'),
(80, 4, '2023-06-20', 3, '07:00:00'),
(81, 5, '2023-06-01', 1, '07:00:00'),
(82, 5, '2023-06-02', 1, '07:00:00'),
(83, 5, '2023-06-03', 1, '07:00:00'),
(84, 5, '2023-06-04', 1, '07:00:00'),
(85, 5, '2023-06-05', 1, '07:00:00'),
(86, 5, '2023-06-06', 1, '07:00:00'),
(87, 5, '2023-06-07', 1, '07:00:00'),
(88, 5, '2023-06-08', 1, '07:00:00'),
(89, 5, '2023-06-09', 2, '07:00:00'),
(90, 5, '2023-06-10', 1, '07:00:00'),
(91, 5, '2023-06-11', 3, '07:00:00'),
(92, 5, '2023-06-12', 1, '07:00:00'),
(93, 5, '2023-06-13', 9, '07:10:00'),
(94, 5, '2023-06-14', 1, '07:00:00'),
(95, 5, '2023-06-15', 1, '07:00:00'),
(96, 5, '2023-06-16', 1, '07:00:00'),
(97, 5, '2023-06-17', 1, '07:00:00'),
(98, 5, '2023-06-18', 3, '07:00:00'),
(99, 5, '2023-06-19', 3, '07:00:00'),
(100, 5, '2023-06-20', 1, '07:00:00'),
(101, 6, '2023-06-01', 1, '07:00:00'),
(102, 6, '2023-06-02', 1, '07:00:00'),
(103, 6, '2023-06-03', 1, '07:00:00'),
(104, 6, '2023-06-04', 9, '07:10:00'),
(105, 6, '2023-06-05', 1, '07:00:00'),
(106, 6, '2023-06-06', 3, '07:00:00'),
(107, 6, '2023-06-07', 1, '07:00:00'),
(108, 6, '2023-06-08', 1, '07:00:00'),
(109, 6, '2023-06-09', 2, '07:00:00'),
(110, 6, '2023-06-10', 1, '07:00:00'),
(111, 6, '2023-06-11', 3, '07:00:00'),
(112, 6, '2023-06-12', 1, '07:00:00'),
(113, 6, '2023-06-13', 9, '07:10:00'),
(114, 6, '2023-06-14', 1, '07:00:00'),
(115, 6, '2023-06-15', 1, '07:00:00'),
(116, 6, '2023-06-16', 1, '07:00:00'),
(117, 6, '2023-06-17', 1, '07:00:00'),
(118, 6, '2023-06-18', 1, '07:00:00'),
(119, 6, '2023-06-19', 1, '07:00:00'),
(120, 6, '2023-06-20', 9, '07:02:00'),
(121, 7, '2023-06-01', 1, '07:00:00'),
(122, 7, '2023-06-02', 1, '07:00:00'),
(123, 7, '2023-06-03', 1, '07:00:00'),
(124, 7, '2023-06-04', 1, '07:00:00'),
(125, 7, '2023-06-05', 1, '07:00:00'),
(126, 7, '2023-06-06', 1, '07:00:00'),
(127, 7, '2023-06-07', 1, '07:00:00'),
(128, 7, '2023-06-08', 1, '07:00:00'),
(129, 7, '2023-06-09', 1, '07:00:00'),
(130, 7, '2023-06-10', 1, '07:00:00'),
(131, 7, '2023-06-11', 3, '07:00:00'),
(132, 7, '2023-06-12', 1, '07:00:00'),
(133, 7, '2023-06-13', 9, '07:10:00'),
(134, 7, '2023-06-14', 1, '07:00:00'),
(135, 7, '2023-06-15', 1, '07:00:00'),
(136, 7, '2023-06-16', 1, '07:00:00'),
(137, 7, '2023-06-17', 1, '07:00:00'),
(138, 7, '2023-06-18', 1, '07:00:00'),
(139, 7, '2023-06-19', 1, '07:00:00'),
(140, 7, '2023-06-20', 1, '07:00:00'),
(141, 8, '2023-06-01', 1, '07:00:00'),
(142, 8, '2023-06-02', 1, '07:00:00'),
(143, 8, '2023-06-03', 1, '07:00:00'),
(144, 8, '2023-06-04', 1, '07:00:00'),
(145, 8, '2023-06-05', 1, '07:00:00'),
(146, 8, '2023-06-06', 1, '07:00:00'),
(147, 8, '2023-06-07', 1, '07:00:00'),
(148, 8, '2023-06-08', 1, '07:00:00'),
(149, 8, '2023-06-09', 1, '07:00:00'),
(150, 8, '2023-06-10', 1, '07:00:00'),
(151, 8, '2023-06-11', 3, '07:00:00'),
(152, 8, '2023-06-12', 1, '07:00:00'),
(153, 8, '2023-06-13', 9, '07:10:00'),
(154, 8, '2023-06-14', 1, '07:00:00'),
(155, 8, '2023-06-15', 1, '07:00:00'),
(156, 8, '2023-06-16', 1, '07:00:00'),
(157, 8, '2023-06-17', 1, '07:00:00'),
(158, 8, '2023-06-18', 1, '07:00:00'),
(159, 8, '2023-06-19', 1, '07:00:00'),
(160, 8, '2023-06-20', 1, '07:00:00'),
(161, 9, '2023-06-01', 1, '07:00:00'),
(162, 9, '2023-06-02', 1, '07:00:00'),
(163, 9, '2023-06-03', 1, '07:00:00'),
(164, 9, '2023-06-04', 1, '07:00:00'),
(165, 9, '2023-06-05', 1, '07:00:00'),
(166, 9, '2023-06-06', 1, '07:00:00'),
(167, 9, '2023-06-07', 1, '07:00:00'),
(168, 9, '2023-06-08', 1, '07:00:00'),
(169, 9, '2023-06-09', 1, '07:00:00'),
(170, 9, '2023-06-10', 1, '07:00:00'),
(171, 9, '2023-06-11', 3, '07:00:00'),
(172, 9, '2023-06-12', 1, '07:00:00'),
(173, 9, '2023-06-13', 9, '07:10:00'),
(174, 9, '2023-06-14', 1, '07:00:00'),
(175, 9, '2023-06-15', 1, '07:00:00'),
(176, 9, '2023-06-16', 1, '07:00:00'),
(177, 9, '2023-06-17', 1, '07:00:00'),
(178, 9, '2023-06-18', 1, '07:00:00'),
(179, 9, '2023-06-19', 1, '07:00:00'),
(180, 9, '2023-06-20', 1, '07:00:00'),
(181, 10, '2023-06-01', 1, '07:00:00'),
(182, 10, '2023-06-02', 1, '07:00:00'),
(183, 10, '2023-06-03', 1, '07:00:00'),
(184, 10, '2023-06-04', 1, '07:00:00'),
(185, 10, '2023-06-05', 1, '07:00:00'),
(186, 10, '2023-06-06', 1, '07:00:00'),
(187, 10, '2023-06-07', 1, '07:00:00'),
(188, 10, '2023-06-08', 1, '07:00:00'),
(189, 10, '2023-06-09', 1, '07:00:00'),
(190, 10, '2023-06-10', 1, '07:00:00'),
(191, 10, '2023-06-11', 3, '07:00:00'),
(192, 10, '2023-06-12', 1, '07:00:00'),
(193, 10, '2023-06-13', 9, '07:10:00'),
(194, 10, '2023-06-14', 1, '07:00:00'),
(195, 10, '2023-06-15', 1, '07:00:00'),
(196, 10, '2023-06-16', 1, '07:00:00'),
(197, 10, '2023-06-17', 1, '07:00:00'),
(198, 10, '2023-06-18', 1, '07:00:00'),
(199, 10, '2023-06-19', 1, '07:00:00'),
(200, 10, '2023-06-20', 1, '07:00:00'),
(202, 2, '2023-07-05', 9, '21:01:02'),
(203, 11, '2023-07-07', 1, '06:13:33'),
(204, 2, '2023-07-19', 9, '19:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(125) NOT NULL,
  `jk_karyawan` varchar(125) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `no_hp_karyawan` varchar(125) NOT NULL,
  `divisi` varchar(125) NOT NULL,
  `jabatan` varchar(125) NOT NULL,
  `tgl_mulai` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id_karyawan`, `nama_karyawan`, `jk_karyawan`, `alamat_karyawan`, `no_hp_karyawan`, `divisi`, `jabatan`, `tgl_mulai`) VALUES
(1, 'Andi', 'Laki - Laki', 'Kuningan', '089876565432', 'HRD', 'Ketua', '2020-05-12'),
(2, 'Ari', 'Laki - Laki', 'Kuningan', '089776545578', 'Sekretaris', 'Staff', '2019-03-13'),
(3, 'Ahmad', 'Laki - Laki', 'Kuningan', '086544545567', 'Bendahara', 'Staff', '2019-03-14'),
(4, 'Bayu', 'Laki - Laki', 'Kuningan', '085676651221', 'Marketing', 'Staff', '2021-03-15'),
(5, 'Bima', 'Laki - Laki', 'Kuningan', '089987654554', 'Marketing', 'Staff', '2020-03-16'),
(6, 'Dani', 'Laki - Laki', 'Kuningan', '085667651234', 'Marketing', 'Staff', '2019-03-17'),
(7, 'Dadan', 'Laki - Laki', 'Kuningan', '087665455129', 'Sales', 'Staff', '2019-03-18'),
(8, 'Gilang', 'Laki - Laki', 'Kuningan', '087665612908', 'Sales', 'Staff', '2018-03-19'),
(9, 'Hendi', 'Laki - Laki', 'Kuningan', '085677612232', 'Sales', 'Staff', '2019-03-20'),
(10, 'Irawan', 'Laki - Laki', 'Kuningan', '087667612432', 'Sales', 'Staff', '2019-03-21'),
(11, 'coba', 'Perempuan', 'Ciawigebang, Kuningan', '089876545676', 'Chef', 'Ketua divisi', '2020-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(125) NOT NULL,
  `bobot` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `type`) VALUES
(1, '10', 1, 1),
(2, '15', 2, 1),
(3, '19', 3, 1),
(4, '23', 4, 1),
(5, '0', 4, 2),
(6, '1', 3, 2),
(7, '2', 2, 2),
(8, '3', 1, 2),
(9, '0', 4, 3),
(10, '1', 3, 3),
(11, '2', 2, 3),
(12, '3', 1, 3),
(13, '1', 4, 4),
(14, '3', 3, 4),
(15, '5', 2, 4),
(16, '7', 1, 4),
(17, '37', 4, 5),
(18, '25', 3, 5),
(19, '13', 2, 5),
(20, '1', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggaran`
--

CREATE TABLE `tbl_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `alasan_pelanggaran` text NOT NULL,
  `tgl_pelanggaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`id_pelanggaran`, `id_karyawan`, `alasan_pelanggaran`, `tgl_pelanggaran`) VALUES
(2, 5, 'Tidak bertanggung jawab atas kendala yang terjadi', '2023-06-02'),
(3, 9, 'Tidak memberikan contoh yang baik', '2023-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengelolaan_alat`
--

CREATE TABLE `tbl_pengelolaan_alat` (
  `id_pengelolaan_alat` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `nama_alat` varchar(125) NOT NULL,
  `qty` int(11) NOT NULL,
  `tgl_pinjam` varchar(15) NOT NULL,
  `stat_kelola` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengelolaan_alat`
--

INSERT INTO `tbl_pengelolaan_alat` (`id_pengelolaan_alat`, `id_karyawan`, `nama_alat`, `qty`, `tgl_pinjam`, `stat_kelola`) VALUES
(1, 1, 'Tanggen atau Ragum', 2, '2020-03-12', 0),
(2, 2, 'Palu', 1, '2020-03-13', 0),
(3, 3, 'Kikir', 1, '2020-03-14', 0),
(4, 4, 'Obeng', 2, '2020-03-15', 0),
(5, 5, 'Sekrap Tangan', 1, '2020-03-16', 1),
(6, 6, 'Gergaji', 1, '2020-03-17', 0),
(7, 7, 'Penyiku', 2, '2020-03-18', 0),
(8, 8, 'Tang', 1, '2020-03-19', 1),
(9, 9, 'Excavator', 1, '2020-03-20', 0),
(11, 11, 'Mesin Bor A-998', 3, '2023-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_proses` varchar(15) NOT NULL,
  `nilai_kehadiran` varchar(5) NOT NULL,
  `nilai_keterlambatan` varchar(5) NOT NULL,
  `nilai_pelanggaran` varchar(5) NOT NULL,
  `nilai_pengelolaan` varchar(5) NOT NULL,
  `nilai_masa_kerja` varchar(5) NOT NULL,
  `hasil` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id_penilaian`, `id_karyawan`, `id_user`, `tgl_proses`, `nilai_kehadiran`, `nilai_keterlambatan`, `nilai_pelanggaran`, `nilai_pengelolaan`, `nilai_masa_kerja`, `hasil`) VALUES
(1, 1, 1, '19-07-2023', '0.137', '0.107', '0.063', '0.045', '0.031', '0.383'),
(2, 2, 1, '19-07-2023', '0.092', '0.027', '0.063', '0.045', '0.031', '0.258'),
(3, 3, 1, '19-07-2023', '0.092', '0.054', '0.063', '0.045', '0.031', '0.285'),
(4, 4, 1, '19-07-2023', '0.092', '0.054', '0.063', '0.045', '0.024', '0.278'),
(5, 5, 1, '19-07-2023', '0.092', '0.08', '0.047', '0.045', '0.031', '0.295'),
(6, 6, 1, '19-07-2023', '0.046', '0.027', '0.063', '0.045', '0.031', '0.212'),
(7, 7, 1, '19-07-2023', '0.092', '0.08', '0.063', '0.045', '0.031', '0.311'),
(8, 8, 1, '19-07-2023', '0.092', '0.08', '0.063', '0.045', '0.031', '0.311'),
(9, 9, 1, '19-07-2023', '0.092', '0.08', '0.047', '0.045', '0.031', '0.295'),
(10, 10, 1, '19-07-2023', '0.092', '0.08', '0.063', '0.045', '0.031', '0.311'),
(11, 11, 1, '19-07-2023', '0.046', '0.107', '0.063', '0.045', '0.024', '0.285');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat_user` text NOT NULL,
  `no_hp_user` varchar(15) NOT NULL,
  `jk_user` varchar(20) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `alamat_user`, `no_hp_user`, `jk_user`, `username`, `password`, `level_user`) VALUES
(3, 'Pengawas', 'kuningan', '089987656543', 'Laki - Laki', 'pengawas', 'pengawas', 2),
(4, 'Manager', 'Kuningan', '0899876565', 'Laki - Laki', 'manager', 'manager', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `tbl_pengelolaan_alat`
--
ALTER TABLE `tbl_pengelolaan_alat`
  ADD PRIMARY KEY (`id_pengelolaan_alat`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengelolaan_alat`
--
ALTER TABLE `tbl_pengelolaan_alat`
  MODIFY `id_pengelolaan_alat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
