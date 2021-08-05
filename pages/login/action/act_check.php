
<?php 
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include '../../../asset/koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data1 = mysqli_query($koneksi,"select * from tbl_customer where email='$username' or no_kontak='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data1);
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($data1);
	    // cek jika user login sebagai admin
	if($data['level']=="1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("location:../../starter?pesan=login_berhasil");
	    // cek jika user login sebagai pegawai
	}else if($data['level']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		header("location:../../page_ikm/dashboard?id_kota=$data[id_kota]",true, 301);
	    // cek jika user login sebagai pengurus
	}else if($data['level']=="3"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		header("location:halaman_pengurus");
		die();
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	
	header("location:../index?pesan=gagal_login");
}

?>