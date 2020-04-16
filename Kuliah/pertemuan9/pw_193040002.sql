-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 16.33
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040002`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'David Dalil Tauhid Syabila ', '193040002', 'daviddts@gmail.com', 'Teknik Informatika', 'daviddts.jpg'),
(2, 'Faza Khoirina', '193030090', 'fazakhoirina@gmail.com', 'Teknik Mesin', 'faza.jpg'),
(3, 'Rizka Trinugraha Septiani', '193010023', 'rizkaTS@gmail.com', 'Teknik Industri', 'rizka.jpg'),
(4, 'Zahra Ashri Aulia', '193020177', 'zahraAA@gmail.com', 'Teknik Industri', 'zahra.jpg'),
(5, 'Natasya Yunia Husdiana', '183020163', 'natasyaYH@gmail.com', 'Teknologi Pangan', 'natasya.jpg'),
(6, 'Putri Agustin', '183010049', 'putriagustin@gmail.com', 'Teknik Industri', 'putri.jpg'),
(7, 'Alda Yolanda', '173020050', 'aldayolanda@gmail.com', 'Teknologi Pangan', 'yolanda.jpg'),
(8, 'Nanda Khairunnisa', '173020008', 'nandakhairunnisa@gmail.com', 'Teknologi Pangan', 'nanda.jpg'),
(9, 'Ajis Pebriyadi', '163030069', 'ajispebriyadi@gmail.com', 'Teknik Mesin', 'ajis.jpg'),
(10, 'Ahmad Naufal', '163060065', 'ahmadnaufal@gmail.com', 'Perancangan Wilayah dan Kota', 'naufal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
