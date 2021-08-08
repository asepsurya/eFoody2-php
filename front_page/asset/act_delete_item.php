<?php
session_start();
// buka koneksi dengan MySQL
include '../../asset/koneksi.php';
    $id = $_GET["item_id"];
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM tbl_keranjang_belanja WHERE id_transaksi='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);
  // melakukan redirect ke halaman index.php
  header("location:../home?pesan=hapus");
  
?>
