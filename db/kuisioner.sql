-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2020 pada 14.16
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kuisioner`
--

CREATE TABLE `t_kuisioner` (
  `id` int(11) NOT NULL,
  `responden` varchar(250) NOT NULL,
  `p1` varchar(500) NOT NULL,
  `p2` varchar(500) NOT NULL,
  `p3` varchar(500) NOT NULL,
  `p4` varchar(500) NOT NULL,
  `p5` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kuisioner`
--

INSERT INTO `t_kuisioner` (`id`, `responden`, `p1`, `p2`, `p3`, `p4`, `p5`) VALUES
(45, 'Muhamad Rizqi Ardiansyah', 'Sangat Baik', 'Cukup', 'Baik', 'Baik', 'Cukup'),
(46, 'Moch. Sulaiman', 'Baik', 'Cukup', 'Cukup', 'Buruk', 'Cukup'),
(47, 'Rengga Ricardo', 'Baik', 'Cukup', 'Baik', 'Cukup', 'Baik'),
(48, 'Dharma Agung', 'Cukup', 'Sangat Baik', 'Baik', 'Buruk', 'Sangat Baik'),
(49, 'Nurul Isnani', 'Sangat Baik', 'Baik', 'Baik', 'Baik', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pertanyaan`
--

CREATE TABLE `t_pertanyaan` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(250) NOT NULL,
  `isi1` varchar(250) NOT NULL,
  `isi2` varchar(250) NOT NULL,
  `isi3` varchar(250) NOT NULL,
  `isi4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pertanyaan`
--

INSERT INTO `t_pertanyaan` (`id`, `pertanyaan`, `isi1`, `isi2`, `isi3`, `isi4`) VALUES
(1, 'Ruang kuliah tertata dengan bersih, dan rapi', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(2, 'Sarana pembelajaran yang tersedia di ruang kuliah', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(3, 'Bagaimanakah Fasilitas di Univrsitas Muhammadiyah Sidoarjo', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(4, 'Bagaimanakah Penanganan Atas Masalah Mahasiswa Yang di Keluhkan Kepada Universitas ', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk'),
(5, 'Dosen datang tepat waktu', 'Sangat Baik', 'Baik', 'Cukup', 'Buruk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id`, `nama_user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_kuisioner`
--
ALTER TABLE `t_kuisioner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `t_pertanyaan`
--
ALTER TABLE `t_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
