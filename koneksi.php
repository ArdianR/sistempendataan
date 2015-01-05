<?php
$server="localhost";
$usr="root";
$pass="apem";
$db="perpusda";
$sambung=mysql_connect($server,$usr,$pass) or die("Koneksi gagal.");

mysql_select_db($db,$sambung) or die ("Database tidak ditemukan.");
?>