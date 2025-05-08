-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Apr 2025 pada 18.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safenet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `judol`
--

CREATE TABLE `judol` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `judol`
--

INSERT INTO `judol` (`id`, `judul`, `slug`, `media`, `deskripsi`, `created_at`, `updated_at`) VALUES
(5, 'Financial Analyst', 'financial-analyst', 'default.jpg', 'dqwfqwfqfcqev', '2025-04-29', '2025-04-29'),
(6, 'iPhone 16 Resmi Dirilis: Inovasi Tanpa Batas', 'iphone-16-resmi-dirilis-inovasi-tanpa-batas', '1745941009_28c4d7a258859df2f26c.jpg', 'dwqdfqwfqwf', '2025-04-29', '2025-04-29'),
(9, 'Arif Susanto', 'arif-susanto', '1745940995_3696053a61b262796efd.jpeg', 'asvavva', '2025-04-29', '2025-04-29'),
(11, 'iyah', 'iyah', '1745940352_43f9de5ae50a8fd2b1b7.jpeg', 'blalalaalallaal', '2025-04-29', '2025-04-29'),
(12, 'Arif avsvasv', 'arif-avsvasv', '1745940372_9bc01f40422ac6029c1b.jpg', 'tgwrhgrhrj', '2025-04-29', '2025-04-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `created_at`) VALUES
(4, 'admin', '$2y$10$DUP3L60MxuRkSKU/pg9WpOOj/yf1F.qYg6WOEsAHZNMmOjehukGT6', 'Admin', NULL),
(5, 'dhae', '$2y$10$Md3YyNJoEaUBCDbnqizjwexfwnOnmvupeRJQXg06bVLjIpDO5krRC', 'Andricha Dea Mitra', NULL),
(6, 'meylin', '$2y$10$1hBHgHZP.jwwi7yyMM60wOSWoJdtOJcBDTjaNpakxs5AqzPoiOAUu', 'Meylinda', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `judol`
--
ALTER TABLE `judol`
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
-- AUTO_INCREMENT untuk tabel `judol`
--
ALTER TABLE `judol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
