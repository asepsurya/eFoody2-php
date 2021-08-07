<?php
session_start();
// buka koneksi dengan MySQL
include '../../../asset/koneksi.php';
    $id = $_GET["id_kategori"];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_kategori WHERE id_kategori='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../index.php?pesan=hapus");
  
?>
