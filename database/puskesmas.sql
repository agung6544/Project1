-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 11:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_antri`
--

CREATE TABLE `tb_antri` (
  `id` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_antri`
--

INSERT INTO `tb_antri` (`id`, `no_antrian`, `tanggal`, `waktu`, `nama`, `no_telp`) VALUES
(302, 1, '2023-05-24', '15:15:38', 'agung', 232113342),
(303, 2, '2023-05-24', '15:36:49', 'YOGINARA', 222222),
(304, 3, '2023-05-24', '15:38:01', 'yogi', 23121),
(305, 4, '2023-05-24', '15:40:10', 'Yogiiii', 2147483647),
(306, 5, '2023-05-24', '16:17:51', 'agung', 2147483647),
(307, 6, '2023-05-24', '17:27:55', 'agung', 453453463),
(308, 7, '2023-05-24', '17:39:49', 'agung232345', 453453463),
(309, 8, '2023-05-25', '13:53:53', 'andika', 912281),
(310, 9, '2023-05-26', '05:55:50', 'agung', 42423243);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nik` int(12) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `nik`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`) VALUES
(4, 'a', 'agung', 'c4ca4238a0b923820dcc509a6f75849b', 12314323, 'agung', 'Laki-Laki', '2023-06-01', 'asd', 324232342),
(5, 'agung', 'asdasasd', '202cb962ac59075b964b07152d234b70', 2147483647, 'agung', 'Laki-Laki', '2023-05-26', 'asdad3d31', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_antri`
--
ALTER TABLE `tb_antri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_antri`
--
ALTER TABLE `tb_antri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
