<?php
$servername = "localhost";
$username = "root";
$password = "";//jika tidak ada diisi kosong
$dbname = "db_berita";
$conn = new mysqli($servername, $username, $password, $dbname);
//cek koneksi dulu
if(!$conn)
{
die("koneksi gagal " . mysqli_connect_error());
}
echo "koneksi berhasil";
?>