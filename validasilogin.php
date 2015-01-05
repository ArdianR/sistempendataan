<?php 
	session_start();
	include "koneksi.php";
	
	$user = $_POST['nama'];
	$pass = $_POST['pass'];
	$dpass = md5($pass);
	
	$login = "SELECT * FROM admin WHERE username='$user' AND password='$dpass'";
	$qlogin = mysql_query($login);
	
	if(mysql_num_rows($qlogin) > 0) {
		$_SESSION['user'] = 'admin';
		echo "<script>location.replace('home.php')</script>";
	} else {
		echo "<script>alert('Kombinasi Username dan Password Salah!');location.replace('home.php')</script>";
	}
?>