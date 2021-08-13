<?php
include '../../asset/koneksi.php';
$id= $_POST['id'];
$qty = $_POST['qty'];

mysqli_query($koneksi,"UPDATE tbl_keranjang_belanja SET qty='$qty'WHERE id_produk='$id'");
header("location:../checkout?pesan=ubah");

?>