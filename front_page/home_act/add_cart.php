<?php
session_start();
include '../../asset/koneksi.php';
$id_produk = $_GET['id_produk'];
$id_pelanggan = $_GET['id_customer'];
$tanggal_transaksi = $_GET['tanggal'];

mysqli_query($koneksi,"INSERT INTO tbl_keranjang_belanja VALUES('','$id_pelanggan','$tanggal_transaksi','$id_produk')");
header("location:../home?pesan=tambah");

