-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 04:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bskciampea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kode_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `level` enum('keuangan','dinas_sampah') DEFAULT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_admin`, `nama`, `alamat`, `no_telp`, `email`, `password`, `level`, `foto`) VALUES
(102, 'Alvano Hastagina', 'Jl.Ciampea', '089614925681', 'alvano@localhost.com', '272661809b648bf8a9cfe2a2ff836d7c', 'dinas_sampah', 'layout/img/alvano.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sampah`
--

CREATE TABLE `tb_sampah` (
  `id_sampah` int(11) NOT NULL,
  `satuan` enum('kg','pc','lt') DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_setor`
--

CREATE TABLE `tb_setor` (
  `id_setor` int(11) NOT NULL,
  `nama` varchar(40),
  `jenis_sampah` varchar(15),
  `tanggal_setor` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `kode_admin` int(11) DEFAULT NULL,
  `id_sampah` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `jumlah_transaksi` double DEFAULT NULL,
  `kode_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `sampah` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
select * from tb_users;
INSERT INTO `tb_users` (`nik`, `nama`, `alamat`, `no_telp`, `email`, `password`, `saldo`, `sampah`) VALUES
('320115241130000', 'Alvano Hastagina', 'Jl.Ciampea', '089614925681', 'alvano@localhost.com', '272661809b648bf8a9cfe2a2ff836d7c', 0, 'plastik');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD PRIMARY KEY (`id_setor`),
  ADD KEY `nik` (`nik`),
  ADD KEY `kode_admin` (`kode_admin`),
  ADD KEY `id_sampah` (`id_sampah`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nik` (`nik`),
  ADD KEY `kode_admin` (`kode_admin`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tb_sampah`
--
ALTER TABLE `tb_sampah`
  MODIFY `id_sampah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_setor`
--
ALTER TABLE `tb_setor`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_setor`
--
ALTER TABLE `tb_setor`
  ADD CONSTRAINT `tb_setor_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_users` (`nik`),
  ADD CONSTRAINT `tb_setor_ibfk_2` FOREIGN KEY (`kode_admin`) REFERENCES `tb_admin` (`kode_admin`),
  ADD CONSTRAINT `tb_setor_ibfk_3` FOREIGN KEY (`id_sampah`) REFERENCES `tb_sampah` (`id_sampah`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_users` (`nik`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`kode_admin`) REFERENCES `tb_admin` (`kode_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
