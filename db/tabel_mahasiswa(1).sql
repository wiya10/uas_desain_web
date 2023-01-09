-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2022 pada 04.37
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
-- Database: `db_ppb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` varchar(10) NOT NULL COMMENT 'Nomor Induk Mahasiswa',
  `nama` varchar(30) NOT NULL COMMENT 'Nama Mahasiswa',
  `tempat_lahir` varchar(30) NOT NULL COMMENT 'Tempat Lahir Mahasiswa',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal Lahir Mahasiwa',
  `jenis_kelamin` enum('male','female') NOT NULL COMMENT 'Jenis Kelamin Mahasiswa',
  `agama` varchar(20) NOT NULL COMMENT 'Agama Mahasiswa',
  `alamat` varchar(100) NOT NULL COMMENT 'ALamat Mahasiswa',
  `no_hp` varchar(13) NOT NULL COMMENT 'No. Handphone Mahasiswa',
  `foto` varchar(50) NOT NULL COMMENT 'Foto Mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('20008', 'Baiq Diki T. Djakhat', 'Lombok', '2000-09-19', '', 'Islam', 'Mataram', '089762392847', 'img-10.png'),
('20021', 'Athaur Muttaqin', 'Rade-Bolo', '2002-09-16', '', 'Islam', 'Naru Sape', '082339070171', 'img-6.png'),
('20075', 'Muhammad Tiran', 'Kota Dompu', '2002-09-01', '', 'Islam', 'Ampenan', '082537313873', 'img-4.png'),
('20086', 'Siti Kartini', 'Kalimantan', '2002-04-21', '', 'Islam', 'Bandung', '081763782635', 'img-7.png'),
('20105', 'Radin Bimantara', 'Dompu', '2001-07-17', '', 'Islam', 'Kadindi', '089736428473', 'img-5.png'),
('20131', 'Nur Cahaya Mentari', 'Jawa', '2001-10-11', '', 'Islam', 'Bali', '087653826351', 'img-9.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
