-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 12.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pskd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_baru`
--

CREATE TABLE `siswa_baru` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa_baru`
--

INSERT INTO `siswa_baru` (`id`, `nama`, `ttl`, `alamat`, `email`) VALUES
(7, 'Jeon Jungkook', '2000-09-01', 'Bali', '0uS4uL1YcOD8GZlsT9ju2Mjv'),
(12, 'jubaidah', '1998-05-16', 'Jember', '0uS0vr9TfuP8GZlsT9ju2Mjv'),
(13, 'Ditya Galassepda Putri', '2002-09-13', 'Nganjuk', '3PiiprdQb8vbE5VkSpqj1Mo=');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uts`
--

CREATE TABLE `uts` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `uts`
--

INSERT INTO `uts` (`id`, `name`, `username`, `password`) VALUES
(4, 'risqi andy', 'risqi', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Dita Syahra', 'dita', 'deb9430307753fd29ac47c08398dd156'),
(7, 'Bella Aulia', 'bella', 'e295436c9a8a01a2243ad2674a324a02'),
(8, 'Ditya Galassepda Putri', 'dityagp', '72a45bab407b614cc010c11c0b07d880'),
(14, 'Jeon Jungkook', 'jeon', '04e42ab67fc05cecfc63282944894c51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uts`
--
ALTER TABLE `uts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa_baru`
--
ALTER TABLE `siswa_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `uts`
--
ALTER TABLE `uts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
