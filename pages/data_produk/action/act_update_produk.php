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
$status=$_POST['status'];

	$namafile = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
	$ukuran = $_FILES['foto']['size'];	
    if(empty($namafile)){
        mysqli_query($koneksi," UPDATE tbl_produk SET id_supplier='$id_supplier',id_kategori='$kategori',jenis_produk='$nama_produk',harga_produk='$harga',stok_produk='$stok',deskripsi='$deskripsi',status='$status' WHERE id_produk='$id_produk'");
        header("location:../index?pesan=ubah"); 
      }
    else{
	    if($ukuran > $limit){
		    header("location:../index?pesan=gagal");		
	    }else{	
			move_uploaded_file($tmp, '../upload/'.$namafile);
			$x = $namafile;
			mysqli_query($koneksi,"UPDATE tbl_produk SET id_supplier='$id_supplier',id_kategori='$kategori',jenis_produk='$nama_produk',harga_produk='$harga',stok_produk='$stok',deskripsi='$deskripsi',gambar='$x',status='$status' WHERE id_produk='$id_produk'");
			header("location:../index?pesan=ubah");
		
	}
}

