-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 06:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sumi-butik`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pelanggan_send` text NOT NULL,
  `admin_send` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_dummy`
--

CREATE TABLE `data_dummy` (
  `no` int(11) NOT NULL,
  `tgl_transaksi_terakhir` varchar(30) NOT NULL,
  `id_pelanggan` varchar(15) NOT NULL,
  `recency` varchar(15) NOT NULL,
  `frequency` varchar(15) NOT NULL,
  `monetary` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dummy`
--

INSERT INTO `data_dummy` (`no`, `tgl_transaksi_terakhir`, `id_pelanggan`, `recency`, `frequency`, `monetary`, `status`) VALUES
(1, '01/08/2020', 'P01', '27', '4', '980000', 0),
(2, '01/08/2020', 'P02', '27', '3', '220500', 0),
(3, '15/08/2020', 'P03', '28', '5', '508500', 0),
(4, '15/08/2020', 'P04', '28', '4', '317500', 0),
(5, '31/08/2020', 'P05', '12', '4', '372000', 0),
(6, '15/08/2020', 'P06', '28', '7', '1210000', 0),
(7, '11/08/2020', 'P07', '32', '3', '360000', 0),
(8, '16/08/2020', 'P08', '27', '2', '139500', 0),
(9, '24/08/2020', 'P09', '19', '5', '945000', 0),
(10, '19/08/2020', 'P10', '24', '4', '580000', 0),
(11, '31/08/2020', 'P11', '12', '4', '450000', 0),
(12, '22/08/2020', 'P12', '21', '3', '375000', 0),
(13, '18/08/2020', 'P13', '25', '3', '600000', 0),
(14, '20/08/2020', 'P14', '23', '7', '1500000', 0),
(15, '20/08/2020', 'P15', '23', '3', '510000', 0),
(16, '31/08/2020', 'P16', '12', '6', '1750000', 0),
(17, '22/08/2020', 'P17', '21', '2', '100000', 0),
(18, '29/08/2020', 'P18', '14', '3', '60000', 0),
(19, '15/08/2020', 'P19', '28', '1', '120000', 0),
(20, '25/08/2020', 'P20', '18', '2', '475000', 0),
(21, '20/08/2020', 'P21', '23', '3', '980000', 0),
(22, '20/08/2020', 'P22', '23', '2', '80000', 0),
(23, '16/08/2020', 'P23', '27', '1', '270000', 0),
(24, '31/08/2020', 'P24', '12', '4', '615000', 0),
(25, '15/08/2020', 'P25', '28', '1', '75000', 0),
(26, '23/08/2020', 'P26', '20', '4', '225000', 0),
(27, '14/08/2020', 'P27', '29', '3', '486000', 0),
(28, '30/08/2020', 'P28', '13', '3', '375000', 0),
(29, '04/08/2020', 'P29', '39', '2', '223000', 0),
(30, '22/08/2020', 'P30', '21', '2', '390000', 0),
(31, '10/08/2020', 'P31', '33', '2', '275000', 0),
(32, '29/08/2020', 'P32', '14', '2', '460000', 0),
(33, '31/08/2020', 'P33', '12', '3', '390000', 0),
(34, '31/08/2020', 'P34', '12', '5', '1875000', 0),
(35, '31/08/2020', 'P35', '12', '3', '855000', 0),
(36, '09/08/2020', 'P36', '34', '1', '86500', 0),
(37, '16/08/2020', 'P37', '27', '1', '60000', 0),
(38, '29/08/2020', 'P38', '14', '7', '747000', 0),
(39, '31/08/2020', 'P39', '12', '6', '1350000', 0),
(40, '24/08/2020', 'P40', '19', '3', '600000', 0),
(41, '13/08/2020', 'P41', '30', '2', '186000', 0),
(42, '15/08/2020', 'P42', '28', '3', '275000', 0),
(43, '19/08/2020', 'P43', '24', '4', '390000', 0),
(44, '17/08/2020', 'P44', '26', '5', '560000', 0),
(45, '26/08/2020', 'P45', '17', '3', '693000', 0),
(46, '29/08/2020', 'P46', '14', '4', '456000', 0),
(47, '16/08/2020', 'P47', '27', '4', '460000', 0),
(48, '30/08/2020', 'P48', '13', '3', '240000', 0),
(49, '30/08/2020', 'P49', '13', '3', '240000', 0),
(50, '26/08/2020', 'P50', '17', '3', '280000', 0),
(51, '26/08/2020', 'P51', '17', '2', '160000', 0),
(52, '15/08/2020', 'P52', '28', '1', '105000', 0),
(53, '26/08/2020', 'P53', '17', '3', '330000', 0),
(54, '15/08/2020', 'P54', '28', '2', '255000', 0),
(55, '30/08/2020', 'P55', '13', '5', '425000', 0),
(56, '30/08/2020', 'P56', '13', '3', '320000', 0),
(57, '15/08/2020', 'P57', '28', '2', '250000', 0),
(58, '16/08/2020', 'P58', '27', '5', '900000', 0),
(59, '31/08/2020', 'P59', '12', '6', '720000', 0),
(60, '15/08/2020', 'P60', '28', '4', '475000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detail_po`
--

CREATE TABLE `detail_po` (
  `id_detail` int(11) NOT NULL,
  `id_po` varchar(30) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id_diskon` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_diskon` varchar(125) NOT NULL,
  `tgl_selesai` varchar(15) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `id_po` int(11) NOT NULL,
  `isi_kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nm_pel` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpon` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id_po` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_po` varchar(15) NOT NULL,
  `total_bayar` varchar(15) NOT NULL,
  `status_order` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `alamat_detail` text NOT NULL,
  `prov` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `ongkir` varchar(20) NOT NULL,
  `estimasi` varchar(20) NOT NULL,
  `expedisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(125) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(15) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indexes for table `data_dummy`
--
ALTER TABLE `data_dummy`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `detail_po`
--
ALTER TABLE `detail_po`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id_diskon`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_dummy`
--
ALTER TABLE `data_dummy`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `detail_po`
--
ALTER TABLE `detail_po`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id_diskon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
