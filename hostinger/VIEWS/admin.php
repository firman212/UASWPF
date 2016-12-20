<?php
	//CEK SESSION
	session_start();
	if(empty($_SESSION["username"]))
	{
		header("location: olah.php?page=login");
	}
?>
<html>
	<head>
		<title>Halaman Admin</title>
	</head>
	
	<body bgcolor="#FFFAF0" leftmargin = "50" topmargin= "50" rightmargin="50">
	
			
			<img src="IMG/header3.jpg" width=100% height=170> <br><br>
	<fieldset>
	<a href="olah.php?page=admin">Admin</a> | 
	<a href="olah.php?page=ganti_pass">Ganti Password</a> | 
	<a href="olah.php?page=logout">Logout</a>
	</fieldset><br>
	<fieldset>

<?php
		if(!empty($_GET["edit"]))
		{
		$kode = $_GET["edit"];
		//TAMPIL DATA DETAIL
		$data = $database -> detailData($con,$kode);
?>
	
		<form action="#" method="POST" >
		<table border="0" align=center width="900" height="600">
		
		<tr> <td> NAMA  </td> <td width="20"> : </td>
		     <td><input type="text" value="<?php echo $data["nama"]; ?>" name="nama"> </td> </tr>
	
		<tr> <td> JENIS KELAMIN </td> <td width="20"> : </td>
			<td><input type="text" value="<?php echo $data["kelamin"]; ?>" name="kelamin"></td> </tr>
	
		<tr> <td> TEMPAT LAHIR </td> <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["tempatlahir"];?>" name="tempatlahir"></td> </tr>
	
		<tr> <td> TANGGAL LAHIR <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["tanggallahir"];?>" name="tanggallahir"> </td> </tr>
	
		
		<tr> <td> AGAMA <td width="20"> : </td> 
		<td><input type="text" value="<?php echo $data["agama"];?>" name="agama"></td> </tr>
	
		<tr> <td> ALAMAT <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["alamat"];?>" name="alamat"></td> </tr>
	
		<tr> <td> No HP/Telp <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["tlp"];?>" name="tlp"></td> </tr>
	
		<tr> <td> ASAL SEKOLAH <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["namasekolah"];?>" name="namasekolah"></td> </tr>
	
		<tr> <td> NAMA AYAH <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["namaayah"];?>" name="namaayah"></td> </tr>
	
		<tr> <td> NAMA IBU <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["namaibu"];?>" name="namaibu"></td> </tr>
	
		<tr> <td> ALAMAT ORANG TUA <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["alamatorangtua"];?>" name="alamatorangtua"></td> </tr>
	
		<tr> <td> NILAI <td width="20"> : </td>
		<td><input type="text" value="<?php echo $data["nilai"];?>" name="nilai"></td> </tr>

		<td colspan="3" align=center> <input type="submit" name="edit" value="EDIT DATA"> </td>
		
		</form>
		</fieldset>
		
		<?php
		}
		else
		{
?>



<h2 align=center>DAFTAR PENDAFTAR</h2>
<a href="olah.php" target="window"><button>TAMBAH PENDAFTAR</button></a>
<a href="views/cetak_pendaftar.php" target="window" > <button> Print </button> </a>
<table cellpadding="4" cellspacing="0" border="1" width="100%">
	<tr>
	<th>No.</th>
	<th>NAMA</th>
	<th>JENIS KELAMIN</th>
	<th>TEMPAT LAHIR</th>
	<th>TANGGAL LAHIR</th>
	<th>AGAMA</th>
	<th>ALAMAT</th>
	<th>No HP/Telp</th> 
	<th>ASAL SEKOLAH</th>
	<th>NAMA AYAH</th>
	<th>NAMA IBU</th>
	<th>ALAMAT ORANG TUA</th>
	<th>NILAI</th>
	<th>PERINTAH</th>
	</tr>
	<?php
	//READ (Membaca Data)
	$no= 1 ;
	$data = $database -> tampil($con);
	foreach($data as $value)
	{
		echo '
		<tr>
			<td>'.$no.'</td>
			
			<td>'.$value["nama"].'</td>
			
			<td>'.$value["kelamin"].'</td>
			
			<td>'.$value["tempatlahir"].'</td>
			
			<td>'.$value["tanggallahir"].'</td>
			
			<td>'.$value["agama"].'</td>
			
			<td>'.$value["alamat"].'</td>
			
			<td>'.$value["tlp"].'</td>
			
			<td>'.$value["namasekolah"].'</td>
			
			<td>'.$value["namaayah"].'</td>
			
			<td>'.$value["namaibu"].'</td>
			
			<td>'.$value["alamatorangtua"].'</td>
			
			<td>'.$value["nilai"].'</td>
			<td>
				<a href="olah.php?page=admin&edit='.$value["id_pendaftar"].'">Edit</a> | 
				<a href="olah.php?page=admin&delete='.$value["id_pendaftar"].'">Delete</a>
			</td>
		</tr>
		';
		$no++;
	}
	?>
</table>
<?php
}
?>
</body>
</html>