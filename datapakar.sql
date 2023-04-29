-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 06:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(50) NOT NULL,
  `rules` varchar(50) NOT NULL,
  `rules1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `rules`, `rules1`) VALUES
(1, 'G1', 'S1'),
(2, 'G2', 'S2'),
(3, 'G3', 'S3'),
(4, 'G4', 'S4'),
(5, 'G5', 'S5'),
(6, 'G6 G7', 'S6'),
(7, 'G7', 'S7');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `iduser` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`iduser`, `username`, `password`) VALUES
(6, 'HRTT', 'RIYU'),
(7, 'SOVRL', 'SAVRL'),
(8, 'IRLV', 'IRTV'),
(9, 'HRTTLN', 'RIYU'),
(10, 'HDXWU', 'HDXWU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kode`, `gejala`) VALUES
(1, 'G1', 'Rontoknya buah sebelum matang'),
(2, 'G2', 'Kekuningan pada daun'),
(3, 'G3', 'Daun pucat dan gugur'),
(4, 'G4', 'Keriting pada daun'),
(5, 'G5', 'Bercak-bercak pada daun dan buah'),
(6, 'G6', 'Daun dan buah berjemur'),
(7, 'G7', 'Busuk pada akar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id` int(5) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `penyakit` varchar(50) DEFAULT NULL,
  `solusi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id`, `kode`, `penyakit`, `solusi`) VALUES
(1, 'S1', 'Serangan Hama Penggerek Buah', 'Menggunakan insektisida nabati atau kimia. Membersihkan pohon dari daun-daun yang jatuh dan membuang buah-buah yang terinfeksi.'),
(2, 'S2', 'Kekurangan Nitrogen', 'Memberikan pupuk nitrogen \r\ndalam bentuk urea atau pupuk kandang.'),
(3, 'S3', 'Antraknosa', 'Membersihkan daun atau buah yang terinfeksi dan memotong ranting-ranting yang terinfeksi. Menggunakan fungisida nabati atau kimia.'),
(4, 'S4', 'Penyakit Akar Busuk', ': Membersihkan akar yang terinfeksi dan memotong bagian akar \r\nyang sudah busuk. Menanam pohon kurma di media tanam yang steril dan menggunakan fungisida.\r\n'),
(5, 'S5', 'Kekurangan Zat Besi', 'Memberikan pupuk yang mengandung \r\nzat besi atau memberikan pupuk kandang atau kompos.'),
(6, 'S6', 'Serangan Kutu Daun', 'Menggunakan insektisida nabati atau kimia.'),
(7, 'S7', 'Kutu Daun', 'Membersihkan daun atau buah yang terinfeksi dan memotong \r\nranting-ranting yang terinfeksi. Menggunakan fungisida nabati atau kimia.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
