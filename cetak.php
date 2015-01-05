<html>
	<head>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

	<body onload="window.print()">
    <center>
		<?php include "ceksesi.php"; ?>
		<div id="container">
        	<div id="menu_utama">
            	</div>
            
            <div id="welcome">
            	Data Customer Service
            </div>
            
            <div id="tampil_data">
            <table cellpadding="6" bgcolor="#f3f3f3" class="garis">
            <tr align="center" bgcolor="#e4e4e4">
            	 <td>No. Absen</td>
				<td style="width:70px;">Tanggal</td>
				<td>Jam</td>
				<td>Nama Pelanggan</td>
                <td>Jenis Kelamin</td>
                <td style="width:200px;">Alamat</td>
				<td>Merk kendaraan</td>
				<td>Jenis Pelayanan</td>
				<td>Jumlah Bayar</td>
            </tr>
            <?php
				include 'koneksi.php';
				@$cetak = $_GET['pr'];
				if($cetak == "yes"){
					printlaporan();
				}
				$count=0;
				$total = 0;
				$query = mysql_query("SELECT tanggal FROM pengunjung group by tanggal asc");
				while ($data = mysql_fetch_array($query))
				{
					$tanggal=$data['tanggal'];
					$query2=mysql_query("select * from pengunjung where tanggal='$tanggal' order by absen asc");
					while ($data2=mysql_fetch_array($query2))
					{
						$id=$data2['id'];
						$absen=$data2['absen'];
						$nama=$data2['nama'];
						$jam=$data2['jam'];
						$kategori=$data2['kategori'];
						$gender=$data2['gender'];
						$alamat=$data2['alamat'];
						$ket=$data2['keterangan'];
						$pelayanan=$data2['pelayanan'];
						$jumbayar=$data2['jmlbayar'];
						
						$total = $total+$jumbayar;
						$count++;
			?>
            <tr>
            	 <td><?php echo "$absen"; ?></td>
				<td><?php echo "$tanggal"; ?></td>
				<td><?php echo "$jam"; ?></td>
				<td><?php echo "$nama"; ?></td>
                <td><?php echo "$gender"; ?></td>
                <td style="width:200px;"><?php echo "$alamat"; ?></td>
				<td><?php echo "$kategori"; ?></td>
				<td><?php echo "$pelayanan"; ?></td>
				<td><?php echo "$jumbayar"; ?></td></tr>
			<tr bgcolor="#e4e4e4">
			<td colspan = "9" align="right">
			<?php 	} ?>
			Jumlah pengunjung: <?php echo "$count"; ?> orang.<br/>
			Total pendapatan:  <?php echo "$total"; ?>
			</td>
			</tr>
			<?php $count=0; ?>
			<?php } ?>
            </table>
            </div>
        </div>
	</center>
	<?php
			function printlaporan(){
				$filename = "data_powerforce.xls";
				header('Content-type: application/vnd.ms-excel');
				header('Content-Disposition: attachment; filename="'.$filename.'"');
			}

?>
	</body>
</html>
