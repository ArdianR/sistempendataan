<html>
	<head>
		<title>PT. Segoro Mas Abadi</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
	</head>

	<body>
    <center>
		<?php include "ceksesi.php"; ?>
		<div id="container">
        	<div id="menu_utama">
            	<a href="home.php">Home</a> | <a href="tampil.php">Data Customer Service</a> | <a href="submit.php">Pendaftaran Customer Service</a> | <a href="logout.php">Logout</a>
            </div>
            
            <div id="welcome">
            	Data Customer Service
            </div>
            
            <?php	
				include 'koneksi.php';
				$resultt = mysql_query("SELECT * FROM pengunjung");
				$hitung = 1;
				while ($data = mysql_fetch_row($resultt)){
					$hitung++;
				}
				date_default_timezone_set('Asia/Jakarta');
			?>
            
           <div id="isi_data">
           		<form method="post" action="isiData.php">
            <table cellspacing="3">
              
              <tr>
                <td>Tanggal</td>
                <td>
                	
                    <input disabled class="kotak" type="text" value="<?php echo date("Y-m-d"); ?>">
                  </td>
              </tr>
				<tr>
                <td>Jam</td>
                <td>
                	
                    <input disabled class="kotak" type="text" value="<?php echo date('H:i:s'); ?>">
                  </td>
              </tr>
              <tr>
              <tr>
                <td>No. Absen</td>
                <td>
                    <input disabled class="kotak" type="text" value="<?php echo $hitung; ?>">
                  </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><input class="kotak" type="text" name="nama"></td>
              </tr>
              
			  
              
              <tr>
                <td>Jenis Kelamin</td>
                <td>
                <select name="gender">
                	<option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    
                </select>    
                  </td>
              </tr>
              
                <td valign="top">Alamat</td>
                <td><textarea class="kotak" name="alamat" rows="5"></textarea> </td>
              </tr>
			  <tr>
                <td>merk kendaraan</td>
                <td>
                <select name="kategori">
                	<option value="honda">honda</option>
                    <option value="suzuki">suzuki</option>
                    <option value="kawasaki">kawasaki</option>
                    <option value="yamaha">yamaha</option>
                    <option value="lain-lain">lain-lain</option>
                </select>
                </td>
              </tr>
			   <tr>
                <td>pelayanan</td>
                <td>
                <select name="pelayanan">
                	<option value="service">service</option>
                    <option value="cuci">cuci</option>
                    <option value="service+cuci">service+cuci</option>
                </select>
                </td>
              </tr>
              <tr>
                <td>jumlah pembayaran</td>
                <td><input class="kotak" type="text" name="jumbayar"></td>
              </tr>
              <tr>
                <td colspan="2" align="right"><input type="submit" value="Submit"></td>
              </tr>
            </table>
            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
			  <input type="hidden" name="jam" value="<?php echo date("H:i:s"); ?>">	
            <input type="hidden" name="absen" value="<?php echo $hitung; ?>">	
            <input type="hidden" name="id" value="<?php echo date("YmdHis"); ?>">
          </form>
           </div>
        </div>
	</center>
	</body>
</html>
