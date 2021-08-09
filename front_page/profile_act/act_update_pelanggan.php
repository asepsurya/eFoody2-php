<?php
include '../../asset/koneksi.php';
$id= $_POST['id_pelanggan'];
$nama= $_POST['nama'];
$email = $_POST['email'];
$no_telp= $_POST['no_kontak'];

mysqli_query($koneksi,"UPDATE tbl_customer SET nm_customer='$nama',no_kontak='$no_telp'WHERE id_customer='$id'");
header("location:../profile?pesan=update");

?>