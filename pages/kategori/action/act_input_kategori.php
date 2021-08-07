<?php
session_start();
include '../../../asset/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');

$jenis_kategori = $_POST['jenis_kategori'];
$id_kategori = $_POST ['id_kategori'];

$namafile = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
$ukuran = $_FILES['foto']['size'];	

	if($ukuran > $limit){
		header("location:../index?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../upload/'.$namafile);
			$x = $namafile;
			mysqli_query($koneksi,"INSERT INTO tbl_kategori VALUES('$id_kategori','$jenis_kategori','$x')");
			header("location:../index?pesan=tambah");
		
	}

