-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 05:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20236030rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `grafik_desain`
--

CREATE TABLE `grafik_desain` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL,
  `warna` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grafik_desain`
--

INSERT INTO `grafik_desain` (`id`, `kategori`, `nilai`, `warna`) VALUES
(1, 'Minimalis', 12, '#8C4B3E'),
(2, 'Modern', 30, '#D4A017'),
(3, 'Scandi', 20, '#5C4033'),
(4, 'Classic', 20, '#C2B2A3');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kontak`
--

CREATE TABLE `pesan_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan_kontak`
--

INSERT INTO `pesan_kontak` (`id`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(3, 'tes tes', 'kaizen.apta@gmail.com', 'blablabla', '2026-03-02 08:42:26'),
(4, 'tes tes', 'kaizen.apta@gmail.com', 'llhhhoh', '2026-03-03 02:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judul`, `keterangan`) VALUES
(1, 'Design & Build', 'Kami menyediakan layanan komprehensif dalam desain dan konstruksi, memastikan setiap proyek terwujud sesuai visi dan kebutuhan Anda.'),
(2, 'Interior Design', 'Spesialisasi dalam menciptakan ruang interior yang fungsional dan estetis, mencerminkan gaya dan kepribadian klien.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grafik_desain`
--
ALTER TABLE `grafik_desain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_kontak`
--
ALTER TABLE `pesan_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grafik_desain`
--
ALTER TABLE `grafik_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan_kontak`
--
ALTER TABLE `pesan_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
