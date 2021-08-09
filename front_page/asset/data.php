<?php
// Koneksi Database
$host = 'localhost';
$username = 'root';
$password = '';
$Dbname = 'efoody_db';
$db = new mysqli($host,$username,$password,$Dbname);
// cari dan tampilkan data ke AutoComplete

$query = $db->query("SELECT * FROM tbl_produk");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['jenis_produk'];
}
echo json_encode($data);
?>
