<?php
session_start();
if(empty($_SESSION["username"]))
{
	
	header("location: olah.php?page=login");
	exit();
}
?>

<html>
	<head>
		<title> Ganti Password</title>
	</head>
	
	<body bgcolor="#FFFAF0" leftmargin = "50" topmargin= "50" rightmargin="50">
	
			
			<img src="IMG/header3.jpg" width=100% height=170> >
	
		<a href="olah.php?page=admin">Admin</a> | 
		<a href="olah.php?page=ganti_pass">Ganti Password</a> | 
		<a href="olah.php?page=logout">Logout</a>
		
		
	
		<form action="#"  method="POST">
			<table border="0" align=center width="500" height="300">
			
			<td colspan="3" > <h1> MENU UBAH PASSWORD </h1> 	<tr>
			
			<tr><tr> <td colspan="3" ><img src ="IMG/LOG.jpg" > <tr><tr>

			<tr> <td > <b>Password Lama </b> <tr>
			<td> <input type="password" name="password_lama" size="50" > <tr> <tr>
			
			<tr> <td > <b> Password Baru </b>  <tr>
			<td> <input type="password" name="password_baru" size="50">  <tr><tr>
		
			<tr> <td > <b> Konfirmasi Password </b> <tr>
			<td> <input type="password" name="konfirmasi_password" size="50"> <br> <br> <tr>
		
			<td colspan="3" align=center> <button type="submit" name="ganti_pass" value="GANTI PASSWORD"> Ubah </button>
		</form>
		
	</body>
</html>