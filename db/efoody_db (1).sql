-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2021 pada 12.22
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

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
-- Struktur dari tabel `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_customer` int(50) NOT NULL,
  `nm_customer` varchar(30) NOT NULL,
  `alamat_customer` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_kontak` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_customer`, `nm_customer`, `alamat_customer`, `kota`, `no_kontak`, `email`, `password`, `gambar`) VALUES
(625001, 'Asep Surya Somantri', 'Ruko Hamas, Jl. Pancasila No.1, Lengkongsari, Tawang, Tasikmalaya, West Java 46112', '', '087731402487', 'asepsurya1998@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'One Ok Rock.jpg'),
(625002, 'INOPAK INSTITUTE', 'Osmangazi Mah. Baris Manco Cad. No: 5/2 Kirac, 34522 Esenyurt/İstanbul, Turki Kota Tasikmalaya', '', '085445662112', 'inopakinstitute@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1.jpg'),
(625003, 'Abang Jali', '', '', '08522144544', 'admin2020@gmail.com', '0192023a7bbd73250516f069df18b500', 'user-default.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_driver`
--

CREATE TABLE `tbl_driver` (
  `tanggal` varchar(20) NOT NULL,
  `id_driver` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `plat_nomor` varchar(20) NOT NULL,
  `merek_motor` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `status` int(2) NOT NULL COMMENT '1=aktif 0=non_aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `jenis_kategori` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
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
('K014', 'Steak', 'steak.png'),
('K015', 'Rekomendasi Toko', 'logo_web.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keranjang_belanja`
--

CREATE TABLE `tbl_keranjang_belanja` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL,
  `id_produk` varchar(30) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(20) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keranjang_belanja`
--

INSERT INTO `tbl_keranjang_belanja` (`id_transaksi`, `id_customer`, `tanggal_transaksi`, `id_produk`, `nama_produk`, `harga_produk`, `qty`) VALUES
(9, '625002', '11-08-2021', '62007', 'Kwetiaw', '12000', 6),
(10, '625002', '11-08-2021', '62008', 'Chicken Bumbu Kari', '12000', 1),
(11, '625002', '11-08-2021', '62011', 'Lotek Big Jumbo', '15000', 4),
(12, '625001', '11-08-2021', '62011', 'Lotek Big Jumbo', '15000', 4),
(13, '625001', '11-08-2021', '62010', 'Japanese Beef Burger', '10000', 3),
(14, '625001', '13-08-2021', '62007', 'Kwetiaw', '12000', 3),
(15, '625001', '13-08-2021', '62006', 'Paket Hemat', '50000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_payment`
--

INSERT INTO `tbl_payment` (`id_transaksi`, `id_customer`, `jumlah_bayar`) VALUES
('TRS001', '', '176000'),
('TRS002', '', '176000'),
('TRS003', '625001', '176000'),
('TRS004', '625001', '176000'),
('TRS005', '625001', '176000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
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
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_transaksi`, `id_customer`, `id_produk`, `jml_produk`, `total_harga`, `tgl_pesan`, `tgl_kirim`, `alamat_tujuan`, `kota_tujuan`) VALUES
(25668, 522, 25004554, 5, 50000, '20-09-2021', '20-09-2021', 'tasikmalaya', 'tasikmalaya');

--
-- Trigger `tbl_pesanan`
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
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(20) NOT NULL,
  `id_supplier` int(30) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `jenis_produk` varchar(30) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `stok_produk` int(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_supplier`, `id_kategori`, `jenis_produk`, `harga_produk`, `stok_produk`, `deskripsi`, `gambar`, `status`) VALUES
(62006, 25001, 'K004', 'Paket Hemat', 50000, 13, 'Lrem Ipsum Dolor sit amet Lrem Ipsum Dolor sit amet', 'popular2.png', 1),
(62007, 25001, 'K002', 'Kwetiaw', 12000, 112, 'Kwetiaw Enak, Lezat dan Nikmat', 'popular5.png', 1),
(62008, 25001, 'K010', 'Chicken Bumbu Kari', 12000, 20, 'lorem ipsum Dolor lorem ipsum Dolor lorem ipsum Dolor lorem ipsum Dolor', 'trending2.png', 1),
(62009, 25001, 'K002', 'Banana Rolls', 12000, 50, 'Banana is the Best Product, ', 'trending3.png', 1),
(62010, 25001, 'K011', 'Japanese Beef Burger', 10000, 2, 'Don’t forget to change the file’s path if you downloaded summernote in a different folders.<br>\r\n\r\nYou can however, and a lot of developers do these days, is include the stylesheet’s within the head are of your page, and include the Javascript at the bottom of your page, but before the closing body tag.', 'popular2.png', 0),
(62011, 25001, 'K002', 'Lotek Big Jumbo', 15000, 10, 'Lotek Lezat dengan Bumbu Khas turun temurun ,Masakan Home Made yang <br>dilengkapi dengan Bumbu rempah Pilihan', 'trending2.png', 1),
(62012, 25001, 'K008', 'Pete Khas Jawa', 5000, 20, '-', 'trending1.png', 0),
(62013, 25001, 'K006', 'Nugget ', 12000, 20, 'Nuget Murah', 'popular7.png', 1),
(62014, 25001, 'K002', 'Potato Delife', 5000, 10, '-', 'popular3.png', 1),
(62016, 25001, 'K002', 'Odading Mang Oleh', 20000, 0, 'Odading Mang Oleh Rasanya Pas Banget', 'sales2.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_requesttranskasi`
--

CREATE TABLE `tbl_requesttranskasi` (
  `id` int(11) NOT NULL,
  `status_code` varchar(3) NOT NULL,
  `status_message` varchar(50) NOT NULL,
  `transaction_id` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `gross_amount` decimal(20,0) NOT NULL,
  `payment_type` varchar(40) NOT NULL,
  `transaction_time` datetime NOT NULL,
  `transaction_status` varchar(40) NOT NULL,
  `bank` varchar(40) NOT NULL,
  `va_number` varchar(40) NOT NULL,
  `fraud_status` varchar(40) NOT NULL,
  `bca_va_number` varchar(40) NOT NULL,
  `permata_va_number` varchar(40) NOT NULL,
  `pdf_url` varchar(200) NOT NULL,
  `finish_redirect_url` varchar(200) NOT NULL,
  `bill_key` varchar(20) NOT NULL,
  `biller_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp_supplier` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat`, `no_telp_supplier`, `email`) VALUES
(25001, 'eFoody Store', 'Jl. Krendang Raya No.21, RT.7/RW.12, Krendang,\r\nKec. Tambora, Kota Jakarta Barat,', '087731402487', 'inopakinstitute@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL COMMENT 'password Type MD5',
  `level` int(10) NOT NULL COMMENT '1. admin 2.user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_customer`, `username`, `password`, `level`) VALUES
(1, 625001, 'asepsurya1998@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 625002, 'inopakinstitute@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2),
(3, 625003, 'admin2020@gmail.com', '0192023a7bbd73250516f069df18b500', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `tbl_driver`
--
ALTER TABLE `tbl_driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_keranjang_belanja`
--
ALTER TABLE `tbl_keranjang_belanja`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `id_produk` (`id_produk`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_requesttranskasi`
--
ALTER TABLE `tbl_requesttranskasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_keranjang_belanja`
--
ALTER TABLE `tbl_keranjang_belanja`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_requesttranskasi`
--
ALTER TABLE `tbl_requesttranskasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
