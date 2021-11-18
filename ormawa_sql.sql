-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evieta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bem`
--

CREATE TABLE `bem` (
  `id` int(255) NOT NULL,
  `prodi` varchar(3) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bem`
--

INSERT INTO `bem` (`id`, `prodi`, `jumlah`) VALUES
(1, 'EKW', 1),
(2, 'KMN', 37),
(3, 'MAB', 27),
(4, 'MNI', 15),
(5, 'GZI', 12),
(6, 'INF', 17),
(7, 'PVT', 5),
(8, 'JMP', 3),
(9, 'LNK', 9),
(10, 'TEK', 12),
(11, 'TMP', 4),
(12, 'TNK', 7),
(13, 'TIB', 7),
(14, 'AKN', 22),
(15, 'KIM', 8),
(16, 'IKN', 3),
(17, 'PPP', 4);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(126) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `color` varchar(24) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `create_by` varchar(64) DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `modified_by` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `description`, `color`, `start_date`, `end_date`, `create_at`, `create_by`, `modified_at`, `modified_by`) VALUES
(12, 'asd', 'ad', '#008000', '0000-00-00', '2021-11-03', '2021-11-14 16:02:25', NULL, NULL, NULL),
(15, 'Sidang Umum', '', '#0071c5', '2021-11-08', '2021-11-11', '2021-11-15 17:06:33', NULL, '2021-11-16 20:48:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_lpj`
--

CREATE TABLE `data_lpj` (
  `id` int(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `nama_ormawa` varchar(60) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bentuk` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_lpj`
--

INSERT INTO `data_lpj` (`id`, `nama_kegiatan`, `nama_ormawa`, `deskripsi`, `bentuk`, `status`, `berkas`) VALUES
(1, 'Agridation', 'Ormawa', 'Acara Agridation', 'Lomba', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`id`, `nama`, `nim`, `jabatan`, `prestasi`) VALUES
(1, 'Muhammad Luthfi', 'J0303201043', 'Anggota SHN', 'Medali Emas POSI Nasional 2021'),
(2, 'M Arya Rizky R Yoviputranto', 'J3C219160', 'CO Divisi Web Master', 'Juara 1 Web Design Voscreation 2021'),
(3, 'Melisa Aplilia', 'J3A119130', 'Anggota Multimedia', 'Juara 3 Aspirasi Bogor Regional IPB 2020');

-- --------------------------------------------------------

--
-- Table structure for table `data_proposal`
--

CREATE TABLE `data_proposal` (
  `id` int(255) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `nama_ormawa` varchar(60) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bentuk` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `berkas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_proposal`
--

INSERT INTO `data_proposal` (`id`, `nama_kegiatan`, `nama_ormawa`, `deskripsi`, `bentuk`, `status`, `berkas`) VALUES
(1, 'Agridation', 'Ormawa', 'Acara Agridation', 'Lomba', 'Diterima', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `url`, `class`, `start_date`, `end_date`) VALUES
(1, 'Example', 'http://www.example.com', 'event-sucess', '2021-11-15 02:09:14', '2021-11-16 05:11:33'),
(2, 'Jee Tutorials', 'https://roytuts.com', 'event-important', '2021-11-11 12:00:00', '0000-00-00 00:00:00'),
(3, 'Roy Tutorial', 'https://roytuts.com', 'event-info', '2021-11-12 13:03:05', '2021-12-13 01:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `month_revenue`
--

CREATE TABLE `month_revenue` (
  `id` int(11) NOT NULL,
  `bulan` varchar(10) NOT NULL,
  `tahun` int(4) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month_revenue`
--

INSERT INTO `month_revenue` (`id`, `bulan`, `tahun`, `revenue`) VALUES
(1, 'Sep', 2020, 1000),
(2, 'Okt', 2020, 1200),
(3, 'Nov', 2020, 1240),
(4, 'Des', 2020, 1800),
(5, 'Jan', 2021, 1200),
(6, 'Feb', 2021, 1350),
(7, 'Mar', 2021, 1000),
(8, 'Apr', 2021, 970),
(9, 'Mei', 2021, 1100),
(10, 'Jun', 2021, 800);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa`
--

CREATE TABLE `ormawa` (
  `id` int(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormawa`
--

INSERT INTO `ormawa` (`id`, `tahun`, `jumlah`) VALUES
(1, 2018, 150),
(2, 2019, 140),
(3, 2020, 160);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa_proker`
--

CREATE TABLE `ormawa_proker` (
  `id` int(255) NOT NULL,
  `tahun` varchar(60) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormawa_proker`
--

INSERT INTO `ormawa_proker` (`id`, `tahun`, `nilai`) VALUES
(1, '2017/2018', 3),
(2, '2018/2019', 3.3),
(3, '2019/2020', 3.6);

-- --------------------------------------------------------

--
-- Table structure for table `struktur_ormawa_micro`
--

CREATE TABLE `struktur_ormawa_micro` (
  `id` int(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_ormawa_micro`
--

INSERT INTO `struktur_ormawa_micro` (`id`, `nim`, `nama`, `jenis_kelamin`, `jabatan`, `prodi`, `status`) VALUES
(1, 'J3D119069', 'M. Hisyam Agung', 'Pria', 'Ketua Umum', 'TEK/56', 'Aktif'),
(2, 'J3D219143', 'Awalludin Luthfi H. B', 'Pria', 'Wakil Ketua Umum', 'TEK/56', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bem`
--
ALTER TABLE `bem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_lpj`
--
ALTER TABLE `data_lpj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_proposal`
--
ALTER TABLE `data_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month_revenue`
--
ALTER TABLE `month_revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa`
--
ALTER TABLE `ormawa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormawa_proker`
--
ALTER TABLE `ormawa_proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_ormawa_micro`
--
ALTER TABLE `struktur_ormawa_micro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bem`
--
ALTER TABLE `bem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_lpj`
--
ALTER TABLE `data_lpj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_proposal`
--
ALTER TABLE `data_proposal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `month_revenue`
--
ALTER TABLE `month_revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ormawa`
--
ALTER TABLE `ormawa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ormawa_proker`
--
ALTER TABLE `ormawa_proker`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `struktur_ormawa_micro`
--
ALTER TABLE `struktur_ormawa_micro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
