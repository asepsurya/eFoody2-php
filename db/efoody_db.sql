-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 01:39 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efoody_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(50) NOT NULL,
  `nm_customer` varchar(30) NOT NULL,
  `alamat_customer` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_kontak` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(2) NOT NULL COMMENT '1=admin 2=pengguna'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `nm_customer`, `alamat_customer`, `kota`, `no_kontak`, `email`, `password`, `level`) VALUES
(625001, 'Asep Surya Somantri', 'lorem Ipsum', '', '087731402487', 'asepsurya1998@gmail.com', '0938fe42b5ee7cddf56bceddd4ece4ff', 1),
(625002, 'Deden Suryana', 'lorem Ipsum', '', '081323899376', 'deden2021@gmail.com', '0192023a7bbd73250516f069df18b500', 2),
(625003, 'ass', 'lorem Ipsum', '', 'sss', 'sss@dasd', '03c7c0ace395d80182db07ae2c30f034', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `jenis_kategori` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `jenis_kategori`, `gambar`) VALUES
('K001', 'Minuman', 'ColaCan.png'),
('K002', 'Jajanan', 'jajanan.svg'),
('K003', 'Sweets', 'donat.svg'),
('K004', 'Aneka Nasi', 'rice.svg'),
('K005', 'Ayam dan Bebek', 'ayam.svg'),
('K006', 'Cepat Saji', 'saji.svg'),
('K007', 'Breakfast', 'Breakfast.png'),
('K008', 'Salad', 'salad.png'),
('K009', 'Fries', 'Fries.png'),
('K010', 'Pizza', 'Pizza.png'),
('K011', 'Burger', 'Burger.png'),
('K012', 'Sandwich', 'Sandwich.png'),
('K013', 'Coffee', 'Coffee.png'),
('K014', 'Steak', 'steak.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang_belanja`
--

CREATE TABLE `tbl_keranjang_belanja` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_transaksi` int(20) NOT NULL,
  `id_customer` int(20) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `jml_produk` int(10) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tgl_pesan` varchar(30) NOT NULL,
  `tgl_kirim` varchar(30) NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `kota_tujuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_transaksi`, `id_customer`, `id_produk`, `jml_produk`, `total_harga`, `tgl_pesan`, `tgl_kirim`, `alamat_tujuan`, `kota_tujuan`) VALUES
(25668, 522, 25004554, 5, 50000, '20-09-2021', '20-09-2021', 'tasikmalaya', 'tasikmalaya');

--
-- Triggers `tbl_pesanan`
--
DELIMITER $$
CREATE TRIGGER `t_pengurangan_stok` BEFORE INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN
   UPDATE tbl_produk SET stok_produk = stok_produk - NEW.jml_produk
   WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(20) NOT NULL,
  `id_supplier` int(30) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `stok_produk` int(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_supplier`, `id_kategori`, `jenis_produk`, `harga_produk`, `stok_produk`, `deskripsi`, `gambar`) VALUES
(25004554, 25445445, 854, 'Chicken Katsu ', 13000, 5, '', ''),
(25004555, 25445445, 854, 'Cilok Mang Didi', 12000, 10, '', ''),
(25004556, 25445445, 854, 'Kwetiaw', 12000, 10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp_supplier` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL COMMENT 'password Type MD5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_customer`, `username`, `password`) VALUES
(1, 112231, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
