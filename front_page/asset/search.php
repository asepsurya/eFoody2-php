<?php
$koneksi = mysqli_connect("localhost","root","","efoody_db");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
$searchTerm = $_GET['term']; // Menerima kiriman data dari inputan pengguna

$sql="SELECT * FROM tbl_produk WHERE jenis_produk LIKE '%".$searchTerm."%' ORDER BY jenis_produk ASC"; // query sql untuk menampilkan data mahasiswa dengan operator LIKE

$hasil=mysqli_query($koneksi,$sql); //Query dieksekusi

//Disajikan dengan menggunakan perulangan
while ($row = mysqli_fetch_array($hasil)) {
    $data[] = $row['jenis_produk'];
}
//Nilainya disimpan dalam bentuk json
echo json_encode($data);
?>