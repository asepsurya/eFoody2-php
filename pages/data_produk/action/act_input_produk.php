<?php
session_start();
include '../../../asset/koneksi.php';
$limit = 300 * 1024 * 1024;
$ekstensi =  array('png','jpg','jpeg','gif');

$nama_produk = $_POST['nama_produk'];
$id_supplier = $_POST ['supplier'];
$harga = $_POST ['harga'];
$stok =$_POST['stok'];
$deskripsi= $_POST ['deskripsi'];
$kategori= $_POST ['kategori'];
$id_produk=$_POST ['id_produk'];

	$namafile = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'];	
	if($ukuran > $limit){
		header("location:../index?pesan=gagal");		
	}else{	
			move_uploaded_file($tmp, '../upload/'.$namafile);
			$x = $namafile;
			mysqli_query($koneksi,"INSERT INTO tbl_produk VALUES('$id_produk','$id_supplier','$kategori','$nama_produk','$harga','$stok','$deskripsi','$x')");
			header("location:../index?pesan=tambah");
		
	}

