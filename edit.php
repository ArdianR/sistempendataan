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
            	<a href="home.php">Home</a> | <a href="tampil.php">Data Customer Service</a>  | <a href="submit.php">Pendaftaran Customer Service</a> | <a href="logout.php">Logout</a>
            </div>
            
            <div id="welcome">
            	Edit Data Customer Service
            </div>
            
           <div id="isi_data">
           		<form method="post" action="editData.php">
            <table cellspacing="3">
              
              <tr>
                <td>Tanggal</td>
                <td>
                	<?php 
						include 'koneksi.php';
						$id = $_GET['id'];
						$resultt = mysql_query("SELECT * FROM pengunjung WHERE id = '$id'");
						$data2 = mysql_fetch_array($resultt);
						$absen=$data2['absen'];
						$nama=$data2['nama'];
						$tanggal=$data2['tanggal'];
						$jam=$data2['jam'];
						$kategori=$data2['kategori'];
						$gender=$data2['gender'];
						$alamat=$data2['alamat'];
						$ket=$data2['keterangan'];
						$pelayanan=$data2['pelayanan'];
						$jmlbayar=$data2['jmlbayar'];
					?>
                    <input disabled class="kotak" type="text" name="tanggal" value="<?php echo $tanggal; ?>">
                  </td>
              </tr>
              <tr>
                <td>Jam</td>
                <td>
                    <input disabled class="kotak" type="text" name="jam" value="<?php echo $jam; ?>">
                  </td>
              </tr>
              <tr>
                <td>No. Absen</td>
                <td>
                    <input disabled class="kotak" type="text" name="absen" value="<?php echo $absen; ?>">
                  </td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><input class="kotak" type="text" name="nama" value="<?php echo $nama; ?>"></td>
              </tr>
             
             
              <tr>
                <td>Jenis Kelamin</td>
                <td>
                <select name="gender">
                	
                	<option <?php if($gender == "L"){ ?> selected="true" <?php } ?>value="L">Laki-laki</option>
                    <option <?php if($gender == "P"){ ?> selected="true" <?php } ?>value="P">Perempuan</option>
                    
                </select>    
                  </td>
              </tr>
              <tr>
                <td valign="top">Alamat</td>
                <td><textarea class="kotak" name="alamat" rows="5" ><?php echo $alamat; ?></textarea> </td>
              </tr>
			   <tr>
                <td>merk kendaraan</td>
                <td>
                <select name="kategori">
                	<option <?php if($kategori == "honda"){ ?> selected="true" <?php } ?> value="honda">honda</option>
                    <option <?php if($kategori == "yamaha"){ ?> selected="true" <?php } ?>value="yamaha">yamaha</option>
                    <option <?php if($kategori == "kawasaki"){ ?> selected="true" <?php } ?>value="kawasaki">kawasaki</option>
                    <option <?php if($kategori == "suzuki"){ ?> selected="true" <?php } ?>value="suzuki">suzuki</option>
                    <option <?php if($kategori == "lain-lain"){ ?> selected="true" <?php } ?>value="lain-lain">lain-lain</option>
                    
                </select>
                </td>
              </tr>
			  <tr>
                <td>pelayanan</td>
                <td>
                <select name="pelayanan">
                	<option <?php if($pelayanan == "service"){ ?> selected="true" <?php } ?> value="service">service</option>
                    <option <?php if($pelayanan == "cuci"){ ?> selected="true" <?php } ?>value="cuci">cuci</option>
                    <option <?php if($pelayanan == "service+cuci"){ ?> selected="true" <?php } ?>value="service+cuci">service+cuci</option>
                    
                </select>
                </td>
              </tr>
			  <tr>
                <td>jumlah pembayaran</td>
                <td><input class="kotak" type="text" name="jmlbayar" value="<?php echo $jmlbayar; ?>"></td>
              </tr>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
			  <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
			  <input type="hidden" name="jam" value="<?php echo $jam; ?>">	
			  <input type="hidden" name="absen" value="<?php echo $absen; ?>">	
              <tr>
                <td colspan="2" align="right"><input type="submit" value="Save"></td>
              </tr>
            </table>
			
            
          </form>
           </div>
        </div>
	</center>
	</body>
</html>
