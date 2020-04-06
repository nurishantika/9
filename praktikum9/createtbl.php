<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Koneksi Gagal: ". mysqli_connect_error()); }
$sql = "CREATE TABLE kontak (
id INT(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
jkel VARCHAR(10),
email VARCHAR(40),
alamat VARCHAR(50),
kota VARCHAR(20),
pesan text )";
if (mysqli_query($conn, $sql)) {
	echo "Berhasil input data";
} else {
	echo "Gagal input data: ". $sql . "<br>" . mysqli_error($conn); }
mysqli_close($conn);
?>