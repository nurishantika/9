<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum9";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Koneksi Gagal :".mysqli_connect_error());
}

$sql = "INSERT INTO tblLogin (username, password)
VALUES ('admin', 'admin')";
if (mysqli_query($conn, $sql)) {
	echo "Berhasil input data";
} else {
	echo "Gagal input data ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>