<?php
//ROUTING
if(!empty($_GET["page"]))
{
	$page = mysql_escape_string(strtoupper($_GET["page"]));
	
	//proses login
	if($page == "LOGIN")
	{
		if(!empty($_POST["user"]) && !empty($_POST["pass"]))
		{
			$user = mysql_escape_string($_POST["user"]);
			$pass = mysql_escape_string(md5($_POST["pass"]));
			$database -> login($con,$user,$pass);
		}
		include("views/login.php");
	}
	
	else if($page == "ADMIN")
	{
		//DELETE DATA
		if(!empty($_GET["delete"]))
		{
			$kode = $_GET["delete"];
			$database -> hapusData($con,$kode);
		}
		
		//EDIT DATA
		if(isset($_POST["edit"]))
		{
			$kode = $_GET["edit"];
			$nama = mysql_escape_string($_POST["nama"]);
			$kelamin = mysql_escape_string($_POST["kelamin"]);
			$tempatlahir = mysql_escape_string($_POST["tempatlahir"]);
			$tanggallahir = mysql_escape_string($_POST["tanggallahir"]);
			$agama = mysql_escape_string ($_POST["agama"]);
			$alamat = mysql_escape_string($_POST["alamat"]);
			$tlp = mysql_escape_string($_POST["tlp"]);
			$namasekolah = mysql_escape_string($_POST["namasekolah"]);
			$namaayah = mysql_escape_string($_POST["namaayah"]);
			$namaibu = mysql_escape_string($_POST["namaibu"]);
			$alamatorangtua = mysql_escape_string( $_POST["alamatorangtua"]);
			$nilai = mysql_escape_string($_POST["nilai"]);
			
			$database -> editData($con,$nama,$kelamin,$tempatlahir,$tanggallahir,$agama, $alamat, $tlp, $namasekolah,
			$namaayah, $namaibu, $alamatorangtua, $nilai, $kode);
		}
		
		include("views/admin.php");
	}
	//PROSES LOGOUT
	else if($page == "LOGOUT")
	{
		session_start();
		session_destroy();
		header("location: olah.php?page=login");
	}
	else if ($page == "GANTI_PASS")
	{
		if (!empty($_POST['ganti_pass']))
		{
			session_start();
			$password_lama = mysql_escape_string(md5($_POST['password_lama']));
			$password_baru = mysql_escape_string(md5($_POST['password_baru']));
			$konfirmasi_password = mysql_escape_string(md5($_POST['konfirmasi_password']));
		
			
			$cek = $database->cek_pass($con, $_SESSION['username'], $password_lama);
			if($cek)
			{
				if($password_baru == $konfirmasi_password)
				{
					$database->ganti_pass($con, $_SESSION['username'], $password_baru);
				}
				else
				{
					echo "<script>window.alert('Password Baru dan Konfirmasi Password Tidak Sama !');
					window.location.href='olah.php?page=ganti_pass';</script>";
				}
			}
			else
			{
				echo "<script>window.alert('Password Lama Salah !');
				window.location.href='olah.php?page=ganti_pass';</script>";
			}
		}
		include("views/ganti_password.php");
	}
	else
	{
		//HALAMAN ERROR
		include("views/olah.php");
	}
}
else
{
	//TAMPILAN AWAL TAMBAH DATA
	if(!empty($_POST["daftar"]))
	{
			$nama = mysql_escape_string($_POST["nama"]);
			$kelamin = mysql_escape_string($_POST["kelamin"]);
			$tempatlahir = mysql_escape_string($_POST["tempatlahir"]);
			$tanggallahir = mysql_escape_string($_POST["tanggallahir"]);
			$agama = mysql_escape_string ($_POST["agama"]);
			$alamat = mysql_escape_string($_POST["alamat"]);
			$tlp = mysql_escape_string($_POST["tlp"]);
			$namasekolah = mysql_escape_string($_POST["namasekolah"]);
			$namaayah = mysql_escape_string($_POST["namaayah"]);
			$namaibu = mysql_escape_string($_POST["namaibu"]);
			$alamatorangtua = mysql_escape_string( $_POST["alamatorangtua"]);
			$nilai = mysql_escape_string($_POST["nilai"]);
		
		$input = $database -> daftar($con,$nama,$kelamin,$tempatlahir,$tanggallahir,$agama, $alamat, $tlp, $namasekolah,
			$namaayah, $namaibu, $alamatorangtua,$nilai);
		
	}
	include("views/form.php");
}
?>
