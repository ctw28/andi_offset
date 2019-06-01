<?php 
	include('config/config.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM data_pribadi dpri INNER JOIN data_status ds ON dpri.id_pelamar = ds.id_pelamar INNER JOIN data_pengalaman dpengalaman ON dpri.id_pelamar = dpengalaman.id_pelamar INNER JOIN data_pendidikan dpendidikan ON dpri.id_pelamar = dpendidikan.id_pelamar INNER JOIN data_keluarga dk ON dpri.id_pelamar = dk.id_pelamar INNER JOIN data_lamaran dl ON dpri.id_pelamar = dl.id_pelamar WHERE dpri.id_pelamar = $id";
	
	$hasil = mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pribadi: - Error: ".mysqli_error($db), E_USER_ERROR);
	$data = mysqli_fetch_assoc($hasil);
	echo json_encode($data);

?>