<?php
session_start();
include '../../../asset/koneksi.php';

$nama_supplier = $_POST['nm_supplier'];
$id_supplier = $_POST ['id_supplier'];
$alamat = $_POST ['alamat'];
$email = $_POST ['email'];
$telp = $_POST ['telp'];

mysqli_query($koneksi,"INSERT INTO tbl_supplier VALUES('$id_supplier','$nama_supplier','$alamat','$telp','$email')");
header("location:../index?pesan=tambah");

