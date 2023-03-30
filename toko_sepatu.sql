-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 05:16 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `faktur_penjualan`
--

CREATE TABLE `faktur_penjualan` (
  `kode_fakturjual` varchar(15) NOT NULL,
  `ID_pembeli` varchar(10) NOT NULL,
  `tanggal_penjualan` datetime NOT NULL,
  `total` int(15) NOT NULL,
  `alamat_pengiriman` varchar(50) NOT NULL,
  `id_status` varchar(5) NOT NULL,
  `id_tarifpengiriman` varchar(4) NOT NULL,
  `tanggal_jatuhtempo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sepatu`
--

CREATE TABLE `jenis_sepatu` (
  `id_jenissepatu` varchar(10) NOT NULL,
  `nama_jenissepatu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_sepatu`
--

INSERT INTO `jenis_sepatu` (`id_jenissepatu`, `nama_jenissepatu`) VALUES
('A01', 'Basket'),
('A02', 'Football'),
('A03', 'Footsal'),
('A04', 'Sneakers'),
('A05', 'Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(10) NOT NULL,
  `nama_kota` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
('K011', 'P01', 'Palembang'),
('K012', 'P01', 'Baturaja'),
('K021', 'P02', 'Bandung'),
('K022', 'P02', 'Kuningan'),
('K031', 'P03', 'Medan'),
('K032', 'P03', 'Toba'),
('K041', 'P04', 'Lhoksumawe'),
('K042', 'P04', 'Malikul sha'),
('K051', 'P05', 'Padang'),
('K052', 'P05', 'Bukittinggi'),
('K061', 'P06', 'batanghari'),
('K062', 'P06', 'Bungo'),
('K071', 'P07', 'pekalongan'),
('K072', 'P07', 'solo'),
('K081', 'P08', 'surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `ID_pembeli` varchar(10) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`ID_pembeli`, `nama_pembeli`, `no_telepon`, `password`) VALUES
('a', 'a', 'a', 'a'),
('calista', 'calista', '87909', 'calista');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_tarifpengiriman` varchar(4) NOT NULL,
  `id_tipe` varchar(10) NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `tarif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_tarifpengiriman`, `id_tipe`, `id_kota`, `tarif`) VALUES
('TR01', 'L01', 'K011', 4000),
('TR02', 'L01', 'K012', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(10) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('P01', 'Sumatera Selatan'),
('P02', 'Jawa Barat'),
('P03', 'Sumatera Utara'),
('P04', 'Aceh'),
('P05', 'Sumatera Barat'),
('P06', 'Jambi'),
('P07', 'Jawa Tengah'),
('P08', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `kode_sepatu` varchar(10) NOT NULL,
  `nama_sepatu` varchar(20) NOT NULL,
  `harga_jual` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `id_jenissepatu` varchar(10) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `deskripsi` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`kode_sepatu`, `nama_sepatu`, `harga_jual`, `stok`, `id_jenissepatu`, `gambar`, `deskripsi`) VALUES
('NN01', 'Nike Basket', 450000, 15, 'A01', 'basket-1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` varchar(5) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
('R01', 'belum'),
('R02', 'kirim'),
('R03', 'selesai'),
('R04', 'batal');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` varchar(10) NOT NULL,
  `nama_tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `nama_tipe`) VALUES
('L01', 'JNE OK'),
('L02', 'JNE REG'),
('L03', 'J&T');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_barang`
--

CREATE TABLE `transaksi_barang` (
  `kode_fakturjual` varchar(15) NOT NULL,
  `kode_sepatu` varchar(6) NOT NULL,
  `qty_jual` int(11) NOT NULL,
  `subtotal_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_user` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telepon` varchar(12) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_user`, `password`, `nama`, `alamat`, `no_telepon`, `level`) VALUES
('a', 'a', 'a', '', 'a', 'pembeli'),
('admin1', 'admin', 'admin', 'jl.admin', '087765452341', 'superadmin'),
('calista', 'calista', 'calista', '', '87909', 'pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faktur_penjualan`
--
ALTER TABLE `faktur_penjualan`
  ADD PRIMARY KEY (`kode_fakturjual`),
  ADD KEY `ID_pembeli` (`ID_pembeli`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_tarifpengiriman` (`id_tarifpengiriman`);

--
-- Indexes for table `jenis_sepatu`
--
ALTER TABLE `jenis_sepatu`
  ADD PRIMARY KEY (`id_jenissepatu`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`ID_pembeli`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_tarifpengiriman`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`kode_sepatu`),
  ADD KEY `id_jenissepatu` (`id_jenissepatu`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD KEY `kode_fakturjual` (`kode_fakturjual`),
  ADD KEY `kode_sepatu` (`kode_sepatu`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faktur_penjualan`
--
ALTER TABLE `faktur_penjualan`
  ADD CONSTRAINT `faktur_penjualan_ibfk_1` FOREIGN KEY (`ID_pembeli`) REFERENCES `pembeli` (`ID_pembeli`),
  ADD CONSTRAINT `faktur_penjualan_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `faktur_penjualan_ibfk_3` FOREIGN KEY (`id_tarifpengiriman`) REFERENCES `pengiriman` (`id_tarifpengiriman`);

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`),
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_tipe`) REFERENCES `tipe` (`id_tipe`);

--
-- Constraints for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD CONSTRAINT `sepatu_ibfk_1` FOREIGN KEY (`id_jenissepatu`) REFERENCES `jenis_sepatu` (`id_jenissepatu`);

--
-- Constraints for table `transaksi_barang`
--
ALTER TABLE `transaksi_barang`
  ADD CONSTRAINT `transaksi_barang_ibfk_1` FOREIGN KEY (`kode_sepatu`) REFERENCES `sepatu` (`kode_sepatu`),
  ADD CONSTRAINT `transaksi_barang_ibfk_2` FOREIGN KEY (`kode_fakturjual`) REFERENCES `faktur_penjualan` (`kode_fakturjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
