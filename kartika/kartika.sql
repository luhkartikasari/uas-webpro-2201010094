-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2023 at 12:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartika`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `email`, `kontak`, `alamat`, `deskripsi`) VALUES
(1, 'kartika1027@gmail.com', '082144634045', 'JL. Nangka Permai GG. Dalem No.1', 'Saya merupakan lulusan SMK Akuntansi yang sedang mengenyam pendidikan kuliah Teknik Informatika di Institut Bisnis dan Teknologi\r\nIndonesia. Saya memiliki pengalaman bekerja sebagai barista dan kasir di es teh Indonesia dan saya mampu bekerja sama dalam tim dengan baik berkat pengalaman organisasi yang saya miliki di kampus.');

-- --------------------------------------------------------

--
-- Table structure for table `pendidkan`
--

CREATE TABLE `pendidkan` (
  `id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidkan`
--

INSERT INTO `pendidkan` (`id`, `nama`, `dari`, `sampai`) VALUES
(1, 'SD Saraswati 6 Denpasar', '2010-06-10', '2016-05-11'),
(2, 'SMP Negeri 10 Denpasar', '2016-06-08', '2019-06-08'),
(3, 'SMK Bali Dewata', '2019-07-01', '2022-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `perusahaan`, `deskripsi`) VALUES
(1, 'Barista dan Kasir\r\n', 'Es Teh Indonesia\r\n', 'Saya memiliki pengalaman untuk\r\nmengasir dan membuat minuman,\r\ndan di es teh Indonesia saya bekerja\r\ndengan menggunakan sistem shift.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidkan`
--
ALTER TABLE `pendidkan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendidkan`
--
ALTER TABLE `pendidkan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
