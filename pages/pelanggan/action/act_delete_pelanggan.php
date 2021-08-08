<?php
session_start();
// buka koneksi dengan MySQL
include '../../../asset/koneksi.php';
    $id = $_GET["id_pelanggan"];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_customer WHERE id_customer='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../index.php?pesan=hapus");
  
?>
