<?php
session_start();
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../../asset/koneksi.php';
// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {
// membuat variabel untuk menampung data dari form
  $nama = $_POST ['nama_lengkap'];
  $username = $_POST ['email'];
  $telp = $_POST ['telp'];
  $password = md5($_POST ['password']);
  $password2 = md5($_POST ['password2']);
  $id_customer = $_POST ['id_customer'];

if($password == $password2){
  $data1 = mysqli_query($koneksi,"select * from tbl_customer where email='$username'");
  $cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
        if($cek > 0){
          header("location:../register?pesan=sudah_ada");
        }else{
         // jalankan query INSERT untuk menambah data ke database
        $query = "INSERT INTO tbl_customer VALUES ('$id_customer','$nama','','','$telp','$username','$password2','user-default.jpg')";
        $result = mysqli_query($koneksi, $query);
        $query2 = "INSERT INTO tbl_user VALUES ('','$id_customer','$username','$password2','2')";
        $result = mysqli_query($koneksi, $query2);

        header("location:../index?pesan=tambah");
        // periska query apakah ada error
        if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
          }
        }
  }else{
    header("location:../register?pesan=tidaksama");
  }
  
}

// melakukan redirect (mengalihkan) ke halaman index.php

?>
