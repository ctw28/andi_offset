<?php 
	include('config/config.php');

	$idPelamar 		= $_GET['id'];

	$query 	= "DELETE FROM data_pribadi WHERE id_pelamar=$idPelamar";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pendidikan: - Error: ".mysqli_error($db), E_USER_ERROR);

	if(mysqli_error($db)){
		echo "ada kesalahan";
	}
	else{
		header('location:admin/data-pelamar.php');
	}

	
?>