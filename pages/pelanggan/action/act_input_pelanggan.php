<?php
session_start();
include '../../../asset/koneksi.php';

$nama_pelanggan = $_POST['nm_pelanggan'];
$id_pelanggan = $_POST ['id_pelanggan'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$telp = $_POST ['telp'];
$level = $_POST ['level'];

mysqli_query($koneksi,"INSERT INTO tbl_customer VALUES('$id_pelanggan','$nama_pelanggan','$alamat','','$telp','$email','','$level')");
header("location:../index?pesan=tambah");

