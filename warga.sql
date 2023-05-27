-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warga`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `kk` varchar(16) NOT NULL,
  `nkk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`kk`, `nkk`, `alamat`, `desa`, `kecamatan`, `kabupaten`, `kodepos`, `provinsi`) VALUES
('320437*********', 'ATUN KURNIA', 'Kp Legok Nangka', 'PANYIRAPAN', 'SOREANG', 'BANDUNG', 40915, 'JAWA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `data_kk`
--

CREATE TABLE `data_kk` (
  `id` int(11) NOT NULL,
  `nkk` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tl` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `jenispekerjaan` varchar(30) NOT NULL,
  `status` varchar(11) NOT NULL,
  `statusdikeluarga` varchar(17) NOT NULL,
  `kewarganegaraan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kk`
--

INSERT INTO `data_kk` (`id`, `nkk`, `nama`, `nik`, `jeniskelamin`, `tempatlahir`, `tl`, `agama`, `pendidikan`, `jenispekerjaan`, `status`, `statusdikeluarga`, `kewarganegaraan`) VALUES
(1, '320437**********', 'ATUN KURNIA', '320437**********', 'LAKI-LAKI', 'BANDUNG', '07-07-1972', 'ISLAM', 'TAMAT SD/SEDERAJAT', 'BURUH HARIAN LEPAS', 'KAWIN', 'KEPALA KELUARGA', 'WNI'),
(2, '320437**********', 'RUKOYAH', '320437**********', 'PEREMPUAN', 'TASIKMALAYA', '06-06-1988', 'ISLAM', 'TAMAT SD/SEDERAJAT', 'MEGURUS RUMAH TANGGA', 'KAWIN', 'ISTRI', 'WNI'),
(3, '320437**********', 'ADAM MARWADI', '320437**********', 'LAKI-LAKI', 'TASIKMALAYA', '03-12-2005', 'Islam', 'BELUM TAMAT SMA/SMK', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI'),
(4, '320437**********', 'NAYLA SILVA TUN NABILA', '320437**********', 'PEREMPUAN', 'BANDUNG', '27-02-2011', 'ISLAM', 'BELUM TAMAT SD', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', 'WNI');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_p` int(11) NOT NULL,
  `no` int(10) NOT NULL,
  `pengumuman` varchar(100) NOT NULL,
  `yang_lapor` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_p`, `no`, `pengumuman`, `yang_lapor`, `hari`, `jam`) VALUES
(1, 1, 'Pendataan Capres 2024', 'RW', 'Senin', '08.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Adam', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`kk`);

--
-- Indexes for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kk`
--
ALTER TABLE `data_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
