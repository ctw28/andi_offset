<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$namaDatabase = "db_andioffset";

	$db = mysqli_connect($server, $user, $password, $namaDatabase);
	if(!$db){
		die('Tidak dapat terhubung ke Database, Kode Error : '.mysqli_connect_errno().' - Pesan Error : '.mysqli_connect_error());	
	}
?>
