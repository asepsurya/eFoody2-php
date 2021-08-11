<?php
session_start();
include '../../../asset/koneksi.php';

$id_driver = $_POST['id_driver'];
$nama_driver = $_POST ['nama_driver'];
$alamat = $_POST ['alamat'];
$plat_no= $_POST ['no_plat'];
$telp = $_POST ['telp'];
$merek_motor=$_POST['merek'];
$tanggal=date("d-m-Y");

mysqli_query($koneksi,"INSERT INTO tbl_driver VALUES('$tanggal','$id_driver','$nama_driver','$alamat','$telp','$plat_no','','1')");
header("location:../index?pesan=tambah");
?>
