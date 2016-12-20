<?php
//KONFIGURASI
$hostDB     = "mysql.idhostinger.com";
$usernameDB = "u634074838_root";
$passwordDB = "123456";
$namaDB     = "u634074838_coba";

//KONEKSI KE DATABASE
$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//CEK KONEKSI
if(mysqli_connect_error())
{
	echo "KONEKSI GAGAL";
	die;
}

//AKSES DATABASE
include("MODELS/database.php");

//MEMANGGIL DATABASE
$database = new database;

//AKSES CONTROLLERS
include("CONTROLLERS/controllers.php");



?>
