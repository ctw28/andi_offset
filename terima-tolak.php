<?php 
	include('config/config.php');
	include('function/upload-file.php');

	// UNTUK INPUTAN DATA PENDIDIKAN
	$id_pelamar = $_POST['id_pelamar'];
	$hasil		= $_POST['inputTerima_tolak'];

	$query 	= "UPDATE data_pribadi SET terima_tolak = '$hasil' WHERE id_pelamar=$id_pelamar";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pendidikan: - Error: ".mysqli_error($db), E_USER_ERROR);


	if(mysqli_error($db)){
		$data['response'] ="ada kesalahan";
	}
	else{
		$data['response'] ="success";
	}

	echo json_encode($data);
	
?>