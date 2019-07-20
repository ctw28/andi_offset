<?php 
	include('config/config.php');
	include('function/upload-file.php');

	// UNTUK INPUTAN DATA PENDIDIKAN
	$idPelamar 		= $_POST['id_pelamar'];
	$statusLamaran 	= $_POST['status_lamaran'];

	$query 	= "UPDATE data_pribadi SET status_lamaran = '$statusLamaran' WHERE id_pelamar=$idPelamar";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pendidikan: - Error: ".mysqli_error($db), E_USER_ERROR);

	if(mysqli_error($db)){
		$data['response'] ="ada kesalahan";
	}
	else{
		$data['response'] ="success";
	}

	echo json_encode($data);
	
?>