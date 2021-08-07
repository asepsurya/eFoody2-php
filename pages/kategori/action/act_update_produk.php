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
    if(empty($namafile)){
        mysqli_query($koneksi," UPDATE tbl_kategori SET id_kategori='$id_kategori',jenis_kategori='$jenis_kategori' WHERE id_kategori='$id_kategori'");
        header("location:../index?pesan=ubah"); 
      }
    else{
	    if($ukuran > $limit){
		    header("location:../index?pesan=gagal");		
	    }else{	
			move_uploaded_file($tmp, '../upload/'.$namafile);
			$x = $namafile;
			mysqli_query($koneksi," UPDATE tbl_kategori SET id_kategori='$id_kategori',jenis_kategori='$jenis_kategori' gambar='$x' WHERE id_kategori='$id_kategori'");
			header("location:../index?pesan=ubah");
		
	}
}

