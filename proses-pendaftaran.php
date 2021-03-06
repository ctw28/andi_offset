<?php 
	include('config/config.php');
	include('function/upload-file.php');
	session_start();
    unset($_SESSION['error']);


	function stripCleanToHTML($s){
		return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
	}

	function cleanToHTML($s){
		return strip_tags(htmlentities(trim(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
	}
	// VALIDASI FILE YANG AKAN DI UPLOAD

	$suratKeteranganKerja 	= validateFileUpload('inputSuratKeteranganKerja','SURAT KETERANGAN KERJA', true);
	$ijazah 	 			= validateFileUpload('inputIjazah', 'IJAZAH', false);
	$transkrip	 			= validateFileUpload('inputTranskrip', 'TRANSKRIP', false);
	$uploadSim				= validateFileUpload('inputUploadSim', 'SIM', true);
	$uploadSKCK				= validateFileUpload('inputUploadSKCK', 'SKCK', false);		

	// CEK APAKAH FILE YANG DIUPLOAD SESUAI ATAU TIDAK
	if(!empty($_SESSION['error'])){ //JIKA TIDAK
		$data['response'][] = 'failed';
		$data['response'][] = json_encode($_SESSION['error']);
		echo json_encode($data);
		die();
	}
	else{ //JIKA YA, UPLOAD FILENYA
		$suratKeteranganKerja 	= uploadFile('inputSuratKeteranganKerja', 'surat_keterangan_kerja');
		$ijazah 	 			= uploadFile('inputIjazah', 'ijazah');
		$transkrip	 			= uploadFile('inputTranskrip', 'transkrip');
		$uploadSim				= uploadFile('inputUploadSim', 'sim');
		$uploadSKCK				= uploadFile('inputUploadSKCK', 'skck');		
	}

	$namaLengkap 		= $_POST['inputNama'];
	$tempatLahir 		= $_POST['inputTempatLahir'];
	$tanggalLahir 		= $_POST['inputTanggalLahir'];
	$jenisKelamin 		= $_POST['inputJenisKelamin'];
	$alamatKTP 			= $_POST['inputAlamatKTP'];
	$alamatDomisili 	= $_POST['inputAlamatDomisili'];
	$noTelp 			= $_POST['inputNoTelp'];
	$email 				= $_POST['inputEmail'];
	
	$query 	= "INSERT INTO data_pribadi
			  	(nama_pelamar, tempat_lahir, tgl_lahir, jenis_kelamin, alamat_ktp, alamat_domisili, no_handphone, email) 
			  	VALUES 
			  	('$namaLengkap','$tempatLahir','$tanggalLahir', '$jenisKelamin', '$alamatKTP', '$alamatDomisili', '$noTelp', '$email')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pribadi: - Error: ".mysqli_error($db), E_USER_ERROR);

	// echo json_encode($data);

	// ID UNTUK PELAMAR YANG SEDANG MELAKUKAN PENDAFTARAN
	$currentIdPelamar	= mysqli_insert_id($db);

	// UNTUK INPUTAN DATA STATUS
	$status 				= $_POST['inputStatus'];
	$namaPasangan 			= $_POST['inputNamaPasangan'];
	$pekerjaan 				= $_POST['inputPekerjaan'];
	$tempatLahirPasangan 	= $_POST['inputTempatLahirPasangan'];
	$tglLahirPasangan 		= $_POST['inputTanggalLahirPasangan'];
	$noTelpPasangan			= $_POST['inputNoTelpPasangan'];
	$jmlAnak 				= $_POST['inputJumlahAnak'];
	

	$query 	= "INSERT INTO data_status
			  	(id_pelamar, status, nama_pasangan, pekerjaan, tempat_lahir_status, tgl_lahir_status, no_handphone_status, jml_anak) 
			  	VALUES 
			  	($currentIdPelamar,'$status','$namaPasangan','$pekerjaan', '$tempatLahirPasangan', '$tglLahirPasangan', '$noTelpPasangan', '$jmlAnak')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Status: - Error: ".mysqli_error($db), E_USER_ERROR);


	// UNTUK INPUTAN DATA PENGALAMAN KERJA
	$pengalaman 			= $_POST['inputPengalaman'];
	$perusahaan 			= $_POST['inputPerusahaan'];
	$bidang 				= $_POST['inputBidang'];
	$jabatanTerakhir 		= $_POST['inputJabatanTerakhir'];
	$lamaKerja 				= $_POST['inputLamaKerja'];
	$periode				= $_POST['inputPeriode'];
	$gajiTerakhir 			= $_POST['inputGajiTerakhir'];
	$alasanKeluar 			= $_POST['inputAlasanKeluar'];
	

	$query 	= "INSERT INTO data_pengalaman
			  	(id_pelamar, pengalaman, perusahaan, bidang, jabatan_terakhir, lama_kerja, periode, gaji_terakhir, alasan_keluar, surat_ket_kerja) 
			  	VALUES 
			  	($currentIdPelamar,'$pengalaman','$perusahaan','$bidang', '$jabatanTerakhir', '$lamaKerja', '$periode', '$gajiTerakhir', 
			  	'$alasanKeluar', '$suratKeteranganKerja')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pengalaman: - Error: ".mysqli_error($db), E_USER_ERROR);


	// UNTUK INPUTAN DATA PENDIDIKAN
	$namaSekolah = $_POST['inputNamaSekolah'];
	$jurusan 	 = $_POST['inputJurusan'];
	$tahunMasuk  = $_POST['inputTahunMasuk'];
	$tahunLulus  = $_POST['inputTahunLulus'];
	// $ijazah 	 = $_POST['inputIjazah'];
	

	$query 	= "INSERT INTO data_pendidikan
			  	(id_pelamar, nama_sekolah, jurusan, tahun_masuk, tahun_lulus, ijazah, transkrip) 
			  	VALUES 
			  	($currentIdPelamar,'$namaSekolah','$jurusan','$tahunMasuk', '$tahunLulus', '$ijazah', '$transkrip')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pendidikan: - Error: ".mysqli_error($db), E_USER_ERROR);


	// UNTUK INPUTAN DATA KELUARGA
	$namaAyah 		= $_POST['inputNamaAyah'];
	$usiaAyah 		= $_POST['inputUsiaAyah'];
	$pekerjaanAyah 	= $_POST['inputPekerjaanAyah'];
	$noTelpAyah 	= $_POST['inputNoTelpAyah'];
	$statusAyah 	= $_POST['inputStatusAyah'];

	$namaIbu 		= $_POST['inputNamaIbu'];
	$usiaIbu 		= $_POST['inputUsiaIbu'];
	$pekerjaanIbu 	= $_POST['inputPekerjaanIbu'];
	$noTelpIbu 		= $_POST['inputNoTelpIbu'];
	$statusIbu 		= $_POST['inputStatusIbu'];
	
	$jmlSaudara 	= $_POST['inputJmlSaudara'];

	$query 	= "INSERT INTO data_keluarga
			  	(id_pelamar, nama_ayah, usia_ayah, pekerjaan_ayah, no_handphone_ayah, status_ayah, nama_ibu, usia_ibu, pekerjaan_ibu, no_handphone_ibu, status_ibu, jml_saudara) 
			  	VALUES 
			  	($currentIdPelamar,'$namaAyah','$usiaAyah','$pekerjaanAyah', '$noTelpAyah', '$statusAyah', '$namaIbu','$usiaIbu','$pekerjaanIbu', '$noTelpIbu', '$statusIbu', '$jmlSaudara')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Keluarga: - Error: ".mysqli_error($db), E_USER_ERROR);



	// UNTUK INPUTAN DATA KELUARGA TIRI
	$currentIdKeluarga	= mysqli_insert_id($db);

	$punyaAyahTiri 				= $_POST['inputPunyaAyahTiri'];
	if($punyaAyahTiri=='' || $punyaAyahTiri=='Tidak'){
		$namaAyahTiri 		= '';
		$usiaAyahTiri 		= '';
		$pekerjaanAyahTiri 	= '';
		$noTelpAyahTiri 	= '';
		$statusAyahTiri 	= '';
	}
	else{
		$namaAyahTiri 		= $_POST['inputNamaAyahTiri'];
		$usiaAyahTiri 		= $_POST['inputUsiaAyahTiri'];
		$pekerjaanAyahTiri 	= $_POST['inputPekerjaanAyahTiri'];
		$noTelpAyahTiri 	= $_POST['inputNoTelpAyahTiri'];
		$statusAyahTiri 	= $_POST['inputStatusAyahTiri'];

	}

	$punyaIbuTiri 				= $_POST['inputPunyaIbuTiri'];
	if($punyaIbuTiri=='' || $punyaIbuTiri=='Tidak'){
		$namaIbuTiri 		= '';
		$usiaIbuTiri 		= '';
		$pekerjaanIbuTiri 	= '';
		$noTelpIbuTiri 		= '';
		$statusIbuTiri 		= '';
	}
	else{	
		$namaIbuTiri 		= $_POST['inputNamaIbuTiri'];
		$usiaIbuTiri 		= $_POST['inputUsiaIbuTiri'];
		$pekerjaanIbuTiri 	= $_POST['inputPekerjaanIbuTiri'];
		$noTelpIbuTiri 		= $_POST['inputNoTelpIbuTiri'];
		$statusIbuTiri 		= $_POST['inputStatusIbuTiri'];
	}
	

	$query 	= "INSERT INTO data_keluarga_tiri
			  	(id_keluarga, punya_ayah_tiri, nama_ayah_tiri, usia_ayah_tiri, pekerjaan_ayah_tiri, no_handphone_ayah_tiri, status_ayah_tiri, punya_ibu_tiri, nama_ibu_tiri, usia_ibu_tiri, pekerjaan_ibu_tiri, no_handphone_ibu_tiri, status_ibu_tiri) 
			  	VALUES 
			  	($currentIdKeluarga,'punyaAyahTiri','$namaAyahTiri','$usiaAyahTiri','$pekerjaanAyahTiri', '$noTelpAyahTiri', '$statusAyahTiri','$punyaIbuTiri', '$namaIbuTiri','$usiaIbuTiri','$pekerjaanIbuTiri', '$noTelpIbuTiri', '$statusIbuTiri')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Keluarga Tiri: - Error: ".mysqli_error($db), E_USER_ERROR);


	// UNTUK INPUTAN DATA LAMARAN

	$posisi1			= $_POST['inputPosisi1'];
	$posisi2			= $_POST['inputPosisi2'];
	$penempatan			= $_POST['inputPenempatan'];
	$gaji 				= $_POST['inputGaji'];
	$kekurangan			= $_POST['inputKekurangan'];
	$kelebihan 			= $_POST['inputKelebihan'];

	$bisaKendaraan		= $_POST['inputBisaKendaraan'];	//ya atau tidak
	$punyaSim			= $_POST['inputPunyaSim'];	//ya atau tidak
	// $uploadSim			= $_POST['inputUploadSim'];
	
	$infoLowongan		= $_POST['inputInfoLowongan'];
	$kenalan			= $_POST['inputKenalan'];

	
	$pekerjaanSampingan	= $_POST['inputPekerjaanSampingan'];  //ya atau tidak
	$namaUsaha			= $_POST['inputNamaUsaha'];
	$tahunMulai			= $_POST['inputTahunMulai'];
	$posisiSampingan	= $_POST['inputPosisiSampingan'];
	$bidangSampingan	= $_POST['inputBidangSampingan'];
	
	$terlibatKejahatan	= $_POST['inputTerlibatKejahatan'];	//ya atau tidak
	// $uploadSKCK			= $_POST['inputUploadSKCK'];		

	$disukai = '';
	$i = 1;
	$panjangDataKebiasaan = count($_POST['inputKebiasaanDisukai']);
	foreach($_POST['inputKebiasaanDisukai'] as $selected){
		($i==$panjangDataKebiasaan) ? $disukai .=$selected : $disukai .=$selected.", ";
		$i++;
	}	

	$kebiasaanDisukai	= $disukai;
	$mulaiKerja			= $_POST['inputMulaiKerja'];
	$keperluanMendesak	= $_POST['inputKeperluanMendesak'];
	$moody				= $_POST['inputMoody'];
	$pengalamanHidup	= $_POST['inputPengalamanHidup'];	

	$query 	= "INSERT INTO data_lamaran
			  	(id_pelamar, posisi1, posisi2, penempatan, gaji, kekurangan, kelebihan, bisa_kendaraan, punya_sim, upload_sim, info_lowongan, kenalan, pekerjaan_sampingan, nama_usaha, tahun_mulai, posisi_sampingan, bidang_sampingan, terlibat_kejahatan, upload_skck, kebiasaan_disukai, mulai_kerja, keperluan_mendesak, moody, pengalaman_hidup) 
			  	VALUES 
			  	($currentIdPelamar, '$posisi1', '$posisi2', '$penempatan', '$gaji', '$kekurangan', '$kelebihan', '$bisaKendaraan', '$punyaSim', '$uploadSim', '$infoLowongan', '$kenalan', '$pekerjaanSampingan', '$namaUsaha', '$tahunMulai', '$posisiSampingan', '$bidangSampingan', '$terlibatKejahatan', '$uploadSKCK', '$kebiasaanDisukai', '$mulaiKerja', '$keperluanMendesak', '$moody', '$pengalamanHidup')
			  ";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Lamaran: - Error: ".mysqli_error($db), E_USER_ERROR);

	//UNTUK INPUTAN DATA BUTA WARNA

	$butaWarna			= $_POST['inputButaWarna'];  //ya atau tidak
	$idGambar			= '';
	$jawabanButaWarna	= '';
	$hasilButaWarna		= '';		

	if($butaWarna == "Ya"){
		$idGambar			= '0';
		$jawabanButaWarna	= '0';
		$hasilButaWarna		= '-';		
	}
	else{
		$idGambar			= $_POST['InputIdGambar'];
		$jawabanButaWarna	= $_POST['inputJawabanButaWarna'];
		$hasilButaWarna		= '';

		//CEK JAWABAN TEST BUTA WARNA

		$query = "SELECT nilai from data_gambar_buta_warna WHERE id_gambar = $idGambar";
		$hasil = mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Buta Warna: - Error: ".mysqli_error($db), E_USER_ERROR);
		$row = mysqli_fetch_assoc($hasil);

		//JIKA JAWABAN DAN NILAI COCOK, MAKA HASIL BENAR, JIKA BERBEDA MAKA HASIL SALAH
		($row['nilai'] == $jawabanButaWarna) ? $hasilButaWarna	= 'Benar' : $hasilButaWarna	= 'Salah';

	}

	
	$query 	= "INSERT INTO data_buta_warna (id_pelamar, buta_warna, id_gambar, jawaban, hasil) 
			   VALUES ($currentIdPelamar, '$idGambar', '$butaWarna', '$jawabanButaWarna', '$hasilButaWarna')";
	mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Lamaran: - Error: ".mysqli_error($db), E_USER_ERROR);


	if(mysqli_error($db)){
		$data['response'] ="failed";
	}
	else{
		$data['response'] ="success";
		$data['id_pelamar'] = $currentIdPelamar;
	}

	echo json_encode($data);
	
?>