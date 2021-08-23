<?php
session_start();
include '../../asset/koneksi.php';

$id_transaksi = $_GET['id_transaksi'];
$total = $_GET ['total'];
$id_pelanggan=$_GET['id_customer'];

mysqli_query($koneksi,"INSERT INTO tbl_payment VALUES('$id_transaksi','$id_pelanggan','$total')");
header("location:../../payment/pembayaran/checkout-process.php?pesan=tambah");

