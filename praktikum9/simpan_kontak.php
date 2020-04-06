<?php
include ("admin/koneksi_inc.php");

$vnama=$_POST['nama'];
$vjkel=$_POST['jkel'];
$vemail=$_POST['email'];
$valamat=$_POST['alamat'];
$vkota=$_POST['kota'];
$vpesan=$_POST['pesan'];

$sql = "INSERT INTO kontak set 
nama='$vnama',
jkel='$vjkel',
email='$vemail',
alamat='$valamat',
kota='$vkota',
pesan='$vpesan'";

mysqli_query($conn, $sql) or die("Gagal menyimpan data");
mysqli_close();
header("Location: kontak.html");
?>