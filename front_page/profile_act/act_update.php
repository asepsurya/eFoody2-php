<?php
session_start();
include '../../asset/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');
$namafile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto']['size'];
$id=$_POST['id'];

    if($ukuran > $limit){
		header("location:../index?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../../pages/login/img/'.$namafile);
			$x = $namafile;
			mysqli_query($koneksi,"UPDATE tbl_customer SET gambar='$x' WHERE id_customer='$id'");
			header("location:../profile?pesan=tambah");
		
	}

