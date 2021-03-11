-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 23.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(1, 'AP', 'Administrasi Perkantoran'),
(2, 'AKT', 'Akuntansi'),
(3, 'PBK', 'Perbankan'),
(4, 'MKT', 'Marketing'),
(5, 'JNT', 'Jurnalistik'),
(6, 'ANM', 'Animasi'),
(7, 'MMD', ' Multimedia'),
(8, 'TBA', ' Tata Busana'),
(9, 'TBO', 'Tata Boga'),
(10, 'PHT', 'Perhotelan'),
(11, 'PWT', 'Pariwisata'),
(12, 'OTO', 'Otomotif'),
(13, 'ELKT', 'Elektronika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(8) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', '$2y$12$agoHZ9av9iqZ1958zFz8X.ex8taGagGgMQSOs/q6qkSvOQCMYFbJm', 'administrator 1', 'admin'),
(2, 'petugas', '$2y$12$ZB8HVjsPU1X0P26Z7WXcK.1IUSFfxYukxhkbcJseo1WvRVK8joT8i', 'petugas 1', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0051231588', '7539', 'Abdul Hilmi', 7, 'Jakarta', '09876543', 2),
('0051231589', '7555', 'kirana', 1, 'Jakarta', '09876559', 1),
('9962241017', '7540', 'Abdullah Hafidz', 2, 'Jakarta', '09876544', 2),
('9962241018', '7541', 'Achmad Fardhoni', 3, 'Jakarta', '09876545', 2),
('9962241019', '7542', 'afrialdi', 6, 'Jakarta', '09876546', 2),
('9962241020', '7543', 'amin fauzi', 9, 'Jakarta', '09876547', 2),
('9962241021', '7544', 'apriyanto', 1, 'Jakarta', '09876548', 3),
('9962241022', '7545', 'arif hunandar', 10, 'Jakarta', '09876549', 3),
('9962241023', '7546', 'asti afiah', 2, 'Jakarta', '09876550', 3),
('9962241024', '7547', 'bobby perdana', 2, 'Jakarta', '09876551', 3),
('9962241025', '7548', 'devi anisa', 6, 'Jakarta', '09876552', 5),
('9962241026', '7549', 'devina soraya', 7, 'Jakarta', '09876553', 5),
('9962241027', '7550', 'dinda mutiara', 9, 'Jakarta', '09876554', 5),
('9962241028', '7551', 'devi wulandari', 8, 'Jakarta', '09876555', 5),
('9962241029', '7552', 'junaedi ari', 9, 'Jakarta', '09876556', 3),
('9962241030', '7553', 'lutfi pratiwi', 10, 'Jakarta', '09876557', 1),
('9962241031', '7554', 'wulandari sumu', 10, 'Jakarta', '09876558', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, 2015, 100000),
(2, 2016, 200000),
(3, 2017, 315000),
(4, 2018, 425000),
(5, 2019, 508500),
(6, 2020, 328000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
