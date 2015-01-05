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
	$pelayanan = $_POST['pelayanan'];
	$ket = "OK";
	$jmlbayar = $_POST['jmlbayar'];

	$aksi = mysql_query("UPDATE pengunjung SET absen='$absen', nama='$nama', tanggal='$tanggal', jam='$jam', kategori='$kategori', gender='$gender', alamat='$alamat', keterangan='$ket',pelayanan='$pelayanan',jmlbayar=$jmlbayar WHERE id='$id' ");
		  
	if($aksi){
		print '<meta http-equiv="refresh" content="0;url=tampil.php" />';
	}else{
		echo "".mysql_error();
	}
  
?>