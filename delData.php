<?php
    include("koneksi.php");

		$id = $_GET['id'];
		$query=mysql_query("select absen from pengunjung where id='$id' ");
		$data=mysql_fetch_array($query);
		$absen=$data['absen'];
		
		$aksi = mysql_query("delete from pengunjung WHERE id='$id' ");
		
		if($aksi){
			$query2=mysql_query("select id from pengunjung where absen > $absen order by absen asc");
			while ($data2=mysql_fetch_array($query2))
			{
				$idd=$data2['id'];
				$query3=mysql_query("update pengunjung set absen=$absen where id='$idd' ");
				$absen++;
			}
			
			print '<meta http-equiv="refresh" content="0;url=tampil.php" />';
		}else{
			echo "ERROR";
		}
  
?>