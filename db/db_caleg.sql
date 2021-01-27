-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 04.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_caleg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_caleg`
--

CREATE TABLE `tbl_caleg` (
  `id` int(5) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_caleg`
--

INSERT INTO `tbl_caleg` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `telp`, `pendidikan`, `jk`) VALUES
(2, '17240983837465', 'Ihmal Al Azid', 'Sijabut', '1998-12-02', '082437465873', 'SMK', 'Laki-Laki'),
(3, '17240983837469', 'Muhammad Sandri ', 'Pasar Banjar', '1998-12-09', '089537264821', 'SMK', 'Laki-Laki'),
(4, '1234567890', 'Reza Kusuma', 'Bahung', '2020-12-31', '087616262727', 'STM', 'Laki-Laki'),
(8, '12093838282939', 'Sarah Aulia', 'Berastagi', '2021-01-06', '086524142626', 'Strata Satu', 'Perempuan'),
(9, '1234567890', 'Ananda Syahputra', 'Tanjung Balai', '2021-01-20', '1234567890', 'SMA', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_partai`
--

CREATE TABLE `tbl_partai` (
  `id` int(11) NOT NULL,
  `nama_partai` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_partai`
--

INSERT INTO `tbl_partai` (`id`, `nama_partai`) VALUES
(1, 'PKB'),
(2, 'Gerindra'),
(3, 'PDI'),
(4, 'Golkar'),
(5, 'Nasdem'),
(6, 'PKS'),
(7, 'PARTAI JONES INDONESIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', 'admin', 'kpu@gmail.com', 'KPU Asahan', 1, 'Staff KPU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_caleg`
--
ALTER TABLE `tbl_caleg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_partai`
--
ALTER TABLE `tbl_partai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_caleg`
--
ALTER TABLE `tbl_caleg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_partai`
--
ALTER TABLE `tbl_partai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
