<html>
<head>
	<title>FORM INPUT DATA</title>
</head>
	<body bgcolor="#FFFAF0" leftmargin = "50" topmargin= "50" rightmargin="50">
	
			
			<img src="IMG/header3.jpg" width=100% height=170> 
			
		
			<table  align=center width=100% height=50 bgcolor=black>
			<tr>
				<td rowspan=2 align=center><a href=index.php><font color=white>BERANDA</td>
				<td rowspan=2 align=center><a href=sejarah.php><font color=white>SEJARAH SEKOLAH</td>
				<td rowspan=2 align=center><a href=visi.php><font color=white>VISI & MISI</td>
				<td rowspan=2 align=center><a href=galeri.php><font color=white>GALERI</td>
				<td rowspan=2 align=center><a href=olah.php><font color=white>PENDAFTARAN</td>
				<td rowspan=2 align=center><a href=olah.php?page=login><font color=white>ADMIN</td>
			</tr>			
			</table>
			
			<br>
		<fieldset>
		
		<form action="#" method="POST">
	
			<table border="0" align=center width="900" height="600">

				<td colspan="3" align=center> DATA CALON PESERTA DIDIK </td> 
			
				<tr> <td> NAMA  </td> <td width="20"> : </td>
				<td> <input type="text" name="nama"> </td> </tr>
			 
				<tr> <td> JENIS KELAMIN </td> <td width="20"> : </td> 
				<td> <input type="text" name="kelamin"> </td> </tr> 
				
				<tr> <td> TEMPAT LAHIR </td> <td width="20"> : </td>
				<td> <input type="text" name="tempatlahir"></td> </tr>
				
				<tr> <td> TANGGAL LAHIR <td width="20"> : </td> 
				<td> <input type="text" name="tanggallahir"></td> </tr>
			
				<tr> <td> AGAMA <td width="20"> : </td> 
				<td> <input type="text" name="agama"> </td> </tr>
			
				<tr> <td> ALAMAT <td width="20"> : </td>
				<td> <input type="text" name="alamat"> </td> </tr>
			
				<tr> <td> No HP/Telp <td width="20"> : </td>
				<td> <input type="text" name="tlp"> </td> </tr>
			
				<tr> <td> ASAL SEKOLAH <td width="20"> : </td>
				<td> <input type="text" name="namasekolah"></td> </tr>
		
				<td colspan="3" align=center> DATA ORANG TUA CALON PESERTA DIDIK </td>
			
				<tr> <td> NAMA AYAH <td width="20"> : </td>
				<td> <input type="text" name="namaayah"></td> </tr>
			
				<tr> <td> NAMA IBU <td width="20"> : </td>
				<td> <input type="text" name="namaibu"></td> </tr>
			
				<tr> <td> ALAMAT ORANG TUA <td width="20"> : </td>
				<td> <input type="text" name="alamatorangtua"> </td> </tr>
			
				<td colspan="3" align=center> DATA NILAI </td>
			
				<tr> <td> NILAI <td width="20"> : </td>
				<td> <input type="text" name="nilai"> </td> </tr>
			
					
				<td colspan="3" align=center> <input type="submit" name="daftar" value="DAFTAR"> </td>
			
		</form>
		</fieldset>
</body>
</html>