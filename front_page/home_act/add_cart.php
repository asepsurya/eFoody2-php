<?php
session_start();
include '../../asset/koneksi.php';
$id_produk = $_GET['id_produk'];
$id_pelanggan = $_GET['id_customer'];
$tanggal_transaksi = $_GET['tanggal'];
$nama_produk=$_GET['nama_produk'];
$harga=$_GET['harga'];

$query = "SELECT * FROM tbl_keranjang_belanja where id_produk='$id_produk' and id_customer='$id_pelanggan' ";
$result = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($result);
if($cek > 0){
    mysqli_query($koneksi,"UPDATE tbl_keranjang_belanja SET qty = qty + 1 where id_produk='$id_produk' ");
    header("location:../home?pesan=tambah_keranjang");
}else{
    mysqli_query($koneksi,"INSERT INTO tbl_keranjang_belanja VALUES('','$id_pelanggan','$tanggal_transaksi','$id_produk','$nama_produk','$harga','1')");
    header("location:../home?pesan=tambah_keranjang");   
}


