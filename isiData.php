<?php
    include("koneksi.php");

		$absen = $_POST['absen'];
		$nama = $_POST['nama'];
		$kategori = $_POST['kategori'];
		$gender = $_POST['gender'];
		$alamat = $_POST['alamat'];
		$tanggal = $_POST['tanggal'];
		$jam = $_POST['jam'];
		$id = $_POST['id'];
		$ket = "OK";
		$pelayanan = $_POST['pelayanan'];
		$jumbayar = $_POST['jumbayar'];
		
		

		$aksi = mysql_query("INSERT INTO pengunjung VALUES ('$id', $absen, '$nama', '$tanggal', '$jam', '$kategori', '$gender', '$alamat', '$ket','$pelayanan','$jumbayar')");
		   	  
		if($aksi){
			print '<meta http-equiv="refresh" content="0;url=tampil.php" />';
		}else{
			echo "ERROR";
		}
  
?>