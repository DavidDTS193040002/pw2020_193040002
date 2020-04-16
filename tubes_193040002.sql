-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 16.32
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
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tahun` year(4) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `sutradara` varchar(200) NOT NULL,
  `episode` int(11) NOT NULL,
  `poster` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `judul`, `tahun`, `genre`, `sutradara`, `episode`, `poster`) VALUES
(1, 'Sword Art Online', 2012, 'Action, Game', 'Tomohiko Itō', 25, 'sao.png'),
(2, 'Tate no Yuusha no Nariagari', 2019, 'Adventure, Fantasy', 'Takao Abo', 25, 'tny.png'),
(3, 'Kuroko no Basket', 2012, 'Sport', 'Shunsuke Tada', 25, 'knb.png'),
(4, 'Overlord', 2015, 'Game, Magic, Fantasy', 'Naoyuki Itou', 13, 'overlord.png'),
(5, 'Shingeki no Kyojin', 2013, 'Action, Fantasy, Military', 'Shinji Higuchi', 25, 'snk.png'),
(6, 'Tokyo Ghoul', 2014, 'Action, Horror', 'Tadahito Matsubayashi', 12, 'tokyoghoul.png'),
(7, 'Nanatsu no Taizai', 2014, 'Action, Adventure', 'Tensai Okamura', 24, 'nnt.png'),
(8, 'Fairy Tail', 2009, 'Action, Magic', 'Shinji Ishihara', 175, 'fairytail.png'),
(9, 'Ansatsu Kyoushitsu', 2015, 'Action, School', 'Seiji Kishi', 22, 'anstsu.png'),
(10, 'One Punch Man', 2015, 'Action, Comedi', 'Akane Fushihara', 12, 'onepunchman.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
