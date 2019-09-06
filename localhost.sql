-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2019 at 01:58 PM
-- Server version: 8.0.16
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survei_kepuasan`
--
CREATE DATABASE IF NOT EXISTS `survei_kepuasan` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `survei_kepuasan`;

-- --------------------------------------------------------

--
-- Table structure for table `t_hasil_child`
--

CREATE TABLE `t_hasil_child` (
  `id_survei` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `id_jawaban` int(11) NOT NULL,
  `tgl_survei` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_hasil_head`
--

CREATE TABLE `t_hasil_head` (
  `id_survei` int(11) NOT NULL,
  `kode_wil` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('pria','wanita') COLLATE utf8_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `pekerjaan` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `saran` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_jawaban`
--

CREATE TABLE `t_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jawaban`
--

INSERT INTO `t_jawaban` (`id_jawaban`, `id_pertanyaan`, `jawaban`, `gambar`, `bobot`) VALUES
(1, 1, 'Tidak Sesuai', 'sangat_kurang.png', 1),
(2, 1, 'Kurang Sesuai', 'kurang.png', 2),
(3, 1, 'Sesuai', 'puas.png', 3),
(4, 1, 'Sangat Sesuai', 'sangat_puas.png', 4),
(6, 2, 'Tidak Mudah', 'sangat_kurang.png', 1),
(7, 2, 'Kurang Mudah', 'kurang.png', 2),
(8, 2, 'Mudah', 'puas.png', 3),
(9, 2, 'Sangat Mudah', 'sangat_puas.png', 4),
(10, 3, 'Tidak Cepat', 'sangat_kurang.png', 1),
(11, 3, 'Kurang Cepat', 'kurang.png', 2),
(12, 3, 'Cepat', 'puas.png', 3),
(13, 3, 'Sangat Cepat', 'sangat_puas.png', 4),
(14, 4, 'Selalu Tidak Sesuai', 'sangat_kurang.png', 1),
(15, 4, 'Kadang-kadang Sesuai', 'kurang.png', 2),
(16, 4, 'Banyak Sesuainya', 'puas.png', 3),
(17, 4, 'Selalu Sesuai', 'sangat_puas.png', 4),
(18, 5, 'Tidak Sesuai', 'sangat_kurang.png', 1),
(19, 5, 'Kurang Sesuai', 'kurang.png', 2),
(20, 5, 'Sesuai', 'puas.png', 3),
(21, 5, 'Sangat Sesuai', 'sangat_puas.png', 4),
(22, 6, 'Tidak Kompeten', 'sangat_kurang.png', 1),
(23, 6, 'Kurang Kompeten', 'kurang.png', 2),
(24, 6, 'Kompeten', 'puas.png', 3),
(25, 6, 'Sangat Kompeten', 'sangat_puas.png', 4),
(26, 7, 'TIdak Sopan dan Ramah', 'sangat_kurang.png', 1),
(27, 7, 'Kurang Sopan dan Ramah', 'kurang.png', 2),
(28, 7, 'Sopan dan Ramah', 'puas.png', 3),
(29, 7, 'Sangat Sopan dan Ramah', 'sangat_puas.png', 4),
(30, 8, 'Buruk', 'sangat_kurang.png', 1),
(31, 8, 'Cukup', 'kurang.png', 2),
(32, 8, 'Baik', 'puas.png', 3),
(33, 8, 'Sangat Baik', 'sangat_puas.png', 4),
(34, 9, 'Tidak Ada', 'sangat_kurang.png', 1),
(35, 9, 'Ada tetapi Tidak Berfungsi', 'kurang.png', 2),
(36, 9, 'Berfungsi Kurang Maksimal', 'puas.png', 3),
(37, 9, 'Dikelola dengan Baik', 'sangat_puas.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_pertanyaan`
--

CREATE TABLE `t_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pertanyaan`
--

INSERT INTO `t_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `deskripsi`) VALUES
(1, 'Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanan?', ''),
(2, 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini?', ''),
(3, 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan?', ''),
(4, 'Bagaimana pendapat Saudara kesesuaian antara biaya yang dibayarkan dengan biaya yang ditetapkan?', ''),
(5, 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?', ''),
(6, 'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan?', ''),
(7, 'Bagaimana pemahaman Saudara tentang perilaku tugas dalam pelayanan terkait kesopanan dan keramahan?', ''),
(8, 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana?', ''),
(9, 'Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan?', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_wil` int(11) NOT NULL,
  `nama_wil` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_hasil_child`
--
ALTER TABLE `t_hasil_child`
  ADD KEY `id_survei` (`id_survei`),
  ADD KEY `id_pertanyaan` (`id_survei`) USING BTREE,
  ADD KEY `id_jawaban` (`id_survei`) USING BTREE,
  ADD KEY `id_jawaban_2` (`id_jawaban`),
  ADD KEY `id_pertanyaan_2` (`id_pertanyaan`);

--
-- Indexes for table `t_hasil_head`
--
ALTER TABLE `t_hasil_head`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`) USING BTREE;

--
-- Indexes for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_hasil_head`
--
ALTER TABLE `t_hasil_head`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_hasil_child`
--
ALTER TABLE `t_hasil_child`
  ADD CONSTRAINT `t_hasil_child_ibfk_1` FOREIGN KEY (`id_survei`) REFERENCES `t_hasil_head` (`id_survei`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_hasil_child_ibfk_2` FOREIGN KEY (`id_jawaban`) REFERENCES `t_jawaban` (`id_jawaban`),
  ADD CONSTRAINT `t_hasil_child_ibfk_3` FOREIGN KEY (`id_pertanyaan`) REFERENCES `t_pertanyaan` (`id_pertanyaan`);

--
-- Constraints for table `t_jawaban`
--
ALTER TABLE `t_jawaban`
  ADD CONSTRAINT `t_jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `t_pertanyaan` (`id_pertanyaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
