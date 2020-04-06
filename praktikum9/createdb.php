<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
	die ("Koneksi Gagal: ". mysqli_connect_error());
}

$sql = "CREATE DATABASE praktikum9";
if (mysqli_query($conn, $sql)) {
	echo "Database berhasil dibuat";
} else {
	echo "Database gagal dibuat: ". mysqli_error($conn);
}
mysqli_close($conn);
?>