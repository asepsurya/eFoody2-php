<?php
session_start();
include '../../../asset/koneksi.php';

$nama_pelanggan = $_POST['nm_pelanggan'];
$id_pelanggan = $_POST ['id_pelanggan'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$telp = $_POST ['telp'];
$level = $_POST ['level'];

mysqli_query($koneksi,"UPDATE tbl_customer SET nm_customer='$nama_pelanggan',alamat_customer='$alamat',no_kontak='$telp',email='$email',level='$level' WHERE id_customer='$id_pelanggan'");
header("location:../index?pesan=tambah");

