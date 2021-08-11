<?php
include '../../asset/koneksi.php';
$id= $_POST['id_pelanggan'];
$alamat= $_POST['alamat'];

mysqli_query($koneksi,"UPDATE tbl_customer SET alamat_customer='$alamat' WHERE id_customer='$id'");
header("location:../profile?pesan=update");

?>