<script>
window.print();
</script>
<?php
//KONFIGURASI
$hostDB			= "mysql.idhostinger.com";
$usernameDB		= "u634074838_root";
$passwordDB		= "123456";
$namaDB			= "u634074838_coba";

//KONEKSI KE DATABASE
$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//CEK KONEKSI
if(mysqli_connect_error())
{
	echo "KONEKSI GAGAL";
	die;
}

//AMBIL DATABASE
include("../models/database.php");

//MEMANGGIL DATABASE
$database = new database;
?>


  <table class="table" cellpadding="4" cellspacing="0" border="2" width="100%">
    <tr class="info">
      
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
  //READ
  $no=1;
  $data = $database -> tampil($con);
  foreach ($data as $value) 
  {
    echo'
    <tr>
			
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
			
    </tr>
    ';
    $no++;
  }
?>
  </table>