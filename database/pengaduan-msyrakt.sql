-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2026 pada 14.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan-msyrakt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `telp`, `username`, `password`) VALUES
('1231231231231232', 'batman', '085798614334', 'df', '$2y$10$o.Tw38yS8eii5JH6YCBIw.4ufgthECKxuEnQ9mEFoiMTkbnWaxOJ.'),
('12456768790', 'cintaku', '0867584939', 'as', '$2y$10$uxymmLA4UGAP7ib4WEY3eeeGmx9DwWP2dTi4GVK0SlVgDpzbytDXG'),
('2332424', 'ahyar', '34234234', 'er', '$2y$10$a7VAYWtPH4YIAi3JRnCKs.9NDWeK74UNpVCxadLw.MTjnQabt3rEa'),
('2628183639291726', 'AHYAR', '089768856455', 'AHYAR', '$2y$10$4TmgRHn5.Fen8YKAzbG3xOzGQGfPdm5j7b63vhYptqFVdiYyutH/G'),
('32099999999', 'Naufal Ackerman', '13425', 'kl', '$2y$10$DXTLS.8PHAaWSEpBecCx4.yrZHA/Rpeqz093vlfXzejegKwq6V8gi'),
('3423423423423489', 'jul', '0879745676', 'zx', '$2y$10$aNs3Hry.XjOqgX.4ynCtKe6iG10i9zDQi43Q18mYLEtjoccE2EdS.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `tentang` enum('lingkungan','jalan','air','masyarakat') NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` enum('0','proses','tolak','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `tentang`, `isi_laporan`, `foto`, `status`) VALUES
(29, '2023-03-21', '12456768790', 'lingkungan', 'banyak ', 'ab4baa7a3be962b15cd9562d08bab828.jpg', 'selesai'),
(30, '2023-03-21', '12456768790', 'air', 'air menggenang besar', 'logo.png', 'tolak'),
(31, '2023-03-21', '12456768790', 'masyarakat', 'banyak sekali begal', 'Alia Nur Amelia (4).png', 'selesai'),
(32, '2023-03-21', '12456768790', 'lingkungan', 'sepertinya akan terjadi kebakaran', 'ab4baa7a3be962b15cd9562d08bab828.jpg', 'tolak'),
(33, '2023-03-21', '12456768790', 'jalan', 'oalah', 'WhatsApp Image 2022-11-03 at 18.42.08.jpeg', 'selesai'),
(34, '2023-03-24', '12456768790', 'jalan', 'hmm', '89superman_in_man_of_steel-HD-880x495.jpg', 'tolak'),
(35, '2023-03-24', '12456768790', 'jalan', 'i', '', 'selesai'),
(36, '2023-03-24', '12456768790', 'masyarakat', 'okey', '17WhatsApp Image 2023-03-12 at 01.27.28.jpg', 'selesai'),
(37, '2023-03-24', '12456768790', 'masyarakat', 'df', '19WhatsApp Image 2023-03-12 at 01.27.28.jpg', 'selesai'),
(38, '2023-03-24', '12456768790', 'lingkungan', 'okey', '85WhatsApp Image 2023-03-12 at 01.27.28.jpg', 'tolak'),
(39, '2023-03-25', '1231231231231232', 'air', 'okey', '43Alia Nur Amelia (5).png', 'tolak'),
(40, '2023-08-13', '2628183639291726', 'jalan', 'JALANAN DI SEKITAR KAMPUNG IBEJOG SANGAT DI KHAWATIRKAN AKAN MENIMBULKAN BANYAK PENYAKIT PADA WARGA SEKITAR', '81februari.jpg', 'selesai'),
(41, '2023-09-23', '12456768790', 'air', 'airnya kotor bos', '6peakpx (3).jpg', 'selesai'),
(42, '2024-02-26', '12456768790', 'lingkungan', 'siap', '41Gambar WhatsApp 2024-02-06 pukul 13.20.30_70a88554.jpg', 'selesai'),
(43, '2024-02-26', '12456768790', 'jalan', 'asdasdas', '46Untitled.png', 'proses'),
(44, '2024-02-26', '12456768790', 'lingkungan', 'huehueheuhe', '61februari.jpg', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin', 'admin', '$2y$10$ngoGhCyXg50OX78PFojTRuHFy2QdYZtDwlDaqJexI3ghO.yzMqV3m', '98', 'admin'),
(6, 'nopal', 'sd', '$2y$10$9HkYvyoKaCTX66dxEFBlwuU9aY1kEuTbKUVQPQ0LX/5/hwBGYfcvi', '0987634567', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(14, 29, '2023-03-21', 'terimakasih, laporan anda sudah kami proses ', 1),
(15, 30, '2023-03-21', 'apaan ini logo kami', 1),
(16, 31, '2023-03-21', 'betulkah?', 1),
(17, 32, '2023-03-21', 'sama ky yg tadi', 1),
(18, 33, '2023-03-21', 'terimaksih transfernya', 1),
(19, 35, '2023-03-24', 'baiklah', 1),
(20, 34, '2023-03-24', 'maaf', 1),
(21, 36, '2023-08-13', 'terimkasih telah melapor', 1),
(22, 37, '2023-08-13', 'fuck', 1),
(23, 38, '2023-03-24', 'aneh', 1),
(24, 39, '2023-08-13', 'laporan anda bersifat spam', 1),
(25, 40, '2023-08-13', 'baiklah', 1),
(26, 41, '2023-09-23', 'trmks', 1),
(27, 42, '2024-02-26', 'oke', 1),
(28, 43, '2024-02-26', 'laporan anda sedang di proses oleh petugas', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`,`id_petugas`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
