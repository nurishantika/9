<?php 
include ("koneksi_inc.php");
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM tblLogin 
	WHERE username='$username' 
	AND password='$password'");

$cek = mysqli_num_rows($login);
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("Location: cetak.php");
}else{
	echo "Gagal Masuk";
}
?>