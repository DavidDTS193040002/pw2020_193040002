-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 10.06
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
-- Database: `tubes_193040002`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan_pokok`
--

CREATE TABLE `makanan_pokok` (
  `id` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `nama_makanan` varchar(250) NOT NULL,
  `berat` char(100) NOT NULL,
  `kalori` char(10) NOT NULL,
  `unit` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan_pokok`
--

INSERT INTO `makanan_pokok` (`id`, `gambar`, `nama_makanan`, `berat`, `kalori`, `unit`) VALUES
(1, 'jagung.jpg', 'Jagung Rebus', '250', '90.2', '1.00'),
(2, 'kentang.jpg', 'Kentang Rebus', '200', '166.0', '2.00'),
(3, 'ketan.jpg', 'Ketan Putih', '120', '217.0', '2.75'),
(4, 'ketupat.jpg', 'Ketupat', '160', '32.0', '0.50'),
(5, 'lontong.jpg', 'Lontong', '200', '38.0', '0.50'),
(6, 'nasi.jpg', 'Nasi Putih', '100', '175.0', '2.25'),
(7, 'roti.jpg', 'Roti Tawar', '60', '149.0', '1.75'),
(8, 'singkong.jpg', 'Singkong Rebus', '100', '146.0', '1.75'),
(9, 'talas.jpg', 'Talas Rebus', '100', '98.0', '1.25'),
(10, 'ubi.jpg', 'Ubi Rebus', '100', '125.0', '1.50'),
(29, '5ebfe2f19996d.jpg', 'sdasd', '10', '10', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$EAe5oSQpfgbY2OLK6hz5C.EB/cQv92FRORd1SiwKTIxUKhSMjJDtS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan_pokok`
--
ALTER TABLE `makanan_pokok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan_pokok`
--
ALTER TABLE `makanan_pokok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
