-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2017 at 06:57 AM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diagram`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id`, `nama_brg`, `harga`) VALUES
(1, 'Es TEh', 2000),
(2, 'Nasi', 2000),
(3, 'Ayam', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jual`
--

CREATE TABLE `tbl_detail_jual` (
  `id` int(11) NOT NULL,
  `nonota` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_jual`
--

INSERT INTO `tbl_detail_jual` (`id`, `nonota`, `id_brg`, `nama_brg`, `jml_beli`, `harga`) VALUES
(1, 1, 1, 'Es TEh', 2, 2000),
(2, 1, 3, 'Ayam', 1, 9000),
(3, 2, 1, 'Es TEh', 1, 2000),
(4, 2, 3, 'Ayam', 2, 9000),
(5, 3, 2, 'Nasi', 2, 2000),
(6, 3, 3, 'Ayam', 1, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_brg` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id`, `tanggal`, `id_brg`, `total`) VALUES
(1, '2017-01-01', 1, 10),
(2, '2017-02-01', 1, 20),
(3, '2017-03-01', 1, 10),
(4, '2017-04-01', 1, 5),
(5, '2017-05-01', 1, 4),
(6, '2017-06-01', 1, 21),
(7, '2017-07-01', 1, 10),
(8, '2017-08-01', 1, 20),
(9, '2017-09-01', 1, 15),
(10, '2017-10-01', 1, 10),
(11, '2017-11-01', 1, 5),
(12, '2017-12-01', 1, 12),
(13, '2017-01-01', 2, 15),
(14, '2017-02-01', 2, 10),
(15, '2017-03-01', 2, 21),
(16, '2017-04-01', 2, 12),
(17, '2017-05-01', 2, 12),
(18, '2017-06-01', 2, 16),
(19, '2017-07-01', 2, 18),
(20, '2017-08-01', 2, 11),
(21, '2017-09-01', 2, 12),
(22, '2017-10-01', 2, 20),
(23, '2017-11-01', 2, 21),
(24, '2017-12-01', 2, 20),
(25, '2017-01-01', 3, 14),
(26, '2017-02-01', 3, 16),
(27, '2017-03-01', 3, 17),
(28, '2017-04-01', 3, 19),
(29, '2017-05-01', 3, 21),
(30, '2017-06-01', 3, 25),
(31, '2017-07-01', 3, 22),
(32, '2017-08-01', 3, 21),
(33, '2017-09-01', 3, 26),
(34, '2017-10-01', 3, 23),
(35, '2017-11-01', 3, 21),
(36, '2017-12-01', 3, 26),
(37, '2017-12-15', 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id` int(11) NOT NULL,
  `nonota` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id`, `nonota`, `total`) VALUES
(1, 1, 11000),
(2, 2, 11000),
(3, 3, 11000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
