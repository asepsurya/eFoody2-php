<?php
session_start();
include '../../../asset/koneksi.php';

$nama_supplier = $_POST['nm_supplier'];
$id_supplier = $_POST ['id_supplier'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$telp = $_POST ['telp'];

mysqli_query($koneksi,"UPDATE tbl_supplier SET nama_supplier='$nama_supplier', alamat='$alamat', no_telp_supplier='$telp', email='$email' WHERE id_supplier='$id_supplier'");
header("location:../index?pesan=ubah");

