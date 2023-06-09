-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2023 pada 14.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `tb_antri`
--

CREATE TABLE `tb_antri` (
  `id` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_antri`
--

INSERT INTO `tb_antri` (`id`, `no_antrian`, `tanggal`, `waktu`, `nama`, `no_telp`) VALUES
(4, 1, '2023-06-01', '16:00:13', 'agung', 324232342),
(10, 2, '2023-06-01', '16:24:15', 'budi', 23567872),
(11, 3, '2023-06-01', '16:26:39', 'Tono', 24246788),
(350, 1, '2023-06-02', '16:35:06', 'agung', 324232342),
(351, 2, '2023-06-02', '16:35:59', 'budi', 23567872),
(352, 1, '2023-06-03', '16:36:37', 'budi', 23567872),
(353, 2, '2023-06-03', '16:45:58', 'agung', 324232342);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `nik`, `nama`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `no_telp`) VALUES
(4, 'a', 'agung', 'c4ca4238a0b923820dcc509a6f75849b', 12314323, 'agung', 'Laki-Laki', '2023-06-01', 'asd', 324232342),
(5, 'agung', 'asdasasd', '202cb962ac59075b964b07152d234b70', 2147483647, 'agung', 'Laki-Laki', '2023-05-26', 'asdad3d31', 2147483647),
(6, 'agus', 'agus23@gmail.com', '01c3c766ce47082b1b130daedd347ffd', 31414, 'agus', 'Laki-Laki', '2023-05-31', 'jl.pusuk buhit', 2147483647),
(7, 'asdada', 'ssdasda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 233254235, 'sadaf', 'Laki-Laki', '2023-05-31', 'jl.balakan', 2147483647),
(8, 'contoh', 'contoh@gmail.com', '25d55ad283aa400af464c76d713c07ad', 143252, 'contoh', 'Laki-Laki', '2023-05-31', 'jl.tersatu', 2147483647),
(9, 'y', 'y', '415290769594460e2e485922904f345d', 12313, 'y', 'Laki-Laki', '2023-05-31', 'y', 21314),
(10, 'p1', 'p1@gmail.com', '202cb962ac59075b964b07152d234b70', 12345, 'budi', 'Laki-Laki', '2023-06-01', 'jl.bandung', 23567872),
(11, 'p2', 'p2@gmail.com', '202cb962ac59075b964b07152d234b70', 2314256, 'Tono', 'Laki-Laki', '2023-06-01', 'jl.jakarta', 24246788);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_antri`
--
ALTER TABLE `tb_antri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_antri`
--
ALTER TABLE `tb_antri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
