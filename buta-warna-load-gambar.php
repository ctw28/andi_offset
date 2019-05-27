<?php 
	include('config/config.php');

	// UNTUK INPUTAN DATA PRIBADI

	$query 	= "SELECT * FROM data_gambar_buta_warna ORDER BY RAND() LIMIT 1";
	$hasil = mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pribadi: - Error: ".mysqli_error($db), E_USER_ERROR);
	$row = mysqli_fetch_assoc($hasil);
	$data_gambar['id_gambar'] = $row['id_gambar'];
	$data_gambar['src'] = $row['gambar_path'];
	echo json_encode($data_gambar);
	// print_r($data_gambar);
?>