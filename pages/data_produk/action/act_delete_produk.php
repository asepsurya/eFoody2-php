<?php
session_start();
// buka koneksi dengan MySQL
include '../../../asset/koneksi.php';
    $id = $_GET["id_produk"];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_produk WHERE id_produk='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../index.php?pesan=hapus");
  
?>
