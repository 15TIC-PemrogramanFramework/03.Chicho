-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 03:16 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perentalan`
--
CREATE DATABASE IF NOT EXISTS `perentalan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `perentalan`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(50) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jenis_barang`, `nama_barang`) VALUES
(512353, 'Komik', 'One Puch Man'),
(512354, 'DVD', 'Doraemon'),
(512355, 'DVD', 'Hang Out'),
(512356, 'DVD', 'One Puch Man');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjam` int(50) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `status_peminjam` varchar(50) NOT NULL,
  `alamat_peminjam` varchar(50) DEFAULT NULL,
  `username_peminjam` varchar(50) NOT NULL,
  `password_peminjam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjam`, `nama_peminjam`, `jenis_kelamin`, `status_peminjam`, `alamat_peminjam`, `username_peminjam`, `password_peminjam`) VALUES
(51223, 'Kurima', 'Laki-laki', 'Aktif', 'Jln.Durian', 'kuri', ''),
(51224, 'Dukir', 'Laki-laki', 'Aktif', 'Jln.Mangga', 'duk', ''),
(51227, 'Bokir Dusin', 'Laki-laki', 'Aktif', 'Jln.Manggis', 'bokir', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(50) NOT NULL,
  `nama_pengurus` varchar(50) DEFAULT NULL,
  `alamat_pengurus` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama_pengurus`, `alamat_pengurus`, `username`, `password`) VALUES
(612516, 'Judir', 'Jln.Suramadu', 'judri112', 'd41d8cd98f00b204e9800998ecf8427e'),
(612517, 'Ciko', 'Jln.Sakinah', 'ciko01', 'pantek');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(50) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `id_peminjam` int(50) NOT NULL,
  `id_pengurus` int(50) DEFAULT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_transaksi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_peminjam`, `id_pengurus`, `tgl_peminjaman`, `tgl_pengembalian`, `status_transaksi`) VALUES
(536664, 512353, 51223, 612516, '2017-11-14', '2017-11-16', 'Peminjaman'),
(536665, 512355, 51227, 612517, '2017-11-15', '2017-11-16', 'Dikembalikan'),
(536666, 512354, 51223, 612516, '2017-11-15', '2017-11-17', 'Dikembalikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_peminjam` (`id_peminjam`),
  ADD KEY `id_pengurus` (`id_pengurus`),
  ADD KEY `id_barang_2` (`id_barang`),
  ADD KEY `id_peminjam_2` (`id_peminjam`),
  ADD KEY `id_peminjam_3` (`id_peminjam`),
  ADD KEY `id_pengurus_2` (`id_pengurus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=512357;
--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjam` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51228;
--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612518;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536667;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_pengurus`) REFERENCES `pengurus` (`id_pengurus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_peminjam`) REFERENCES `peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
