<?php 
	include('config/config.php');

	$id = $_GET['id'];
	$query = "SELECT 
	dpri.id_pelamar,nama_pelamar,tempat_lahir,tgl_lahir,jenis_kelamin,alamat_ktp,alamat_domisili,no_handphone,email,status,nama_pasangan,pekerjaan,tempat_lahir_status,tgl_lahir_status,no_handphone_status,jml_anak,
	pengalaman,perusahaan,bidang,jabatan_terakhir,lama_kerja,periode,gaji_terakhir,alasan_keluar,surat_ket_kerja,
	nama_sekolah, jurusan, tahun_masuk, tahun_lulus,
	nama_ayah, usia_ayah, pekerjaan_ayah, no_handphone_ayah, status_ayah, nama_ibu, usia_ibu, pekerjaan_ibu, no_handphone_ibu, status_ibu, jml_saudara,
	 posisi1, posisi2,penempatan,gaji,kekurangan,kelebihan,bisa_kendaraan,punya_sim,info_lowongan,kenalan,pekerjaan_sampingan,nama_usaha,tahun_mulai,posisi_sampingan,bidang_sampingan,terlibat_kejahatan,kebiasaan_disukai,mulai_kerja,keperluan_mendesak,moody,pengalaman_hidup
	FROM data_pribadi dpri INNER JOIN data_status ds ON dpri.id_pelamar = ds.id_pelamar INNER JOIN data_pengalaman dpengalaman ON dpri.id_pelamar = dpengalaman.id_pelamar INNER JOIN data_pendidikan dpendidikan ON dpri.id_pelamar = dpendidikan.id_pelamar INNER JOIN data_keluarga dk ON dpri.id_pelamar = dk.id_pelamar INNER JOIN data_lamaran dl ON dpri.id_pelamar = dl.id_pelamar WHERE dpri.id_pelamar = $id";
	
	$hasil = mysqli_query($db, $query) or trigger_error("Ada Kesalahan pada SQL Data Pribadi: - Error: ".mysqli_error($db), E_USER_ERROR);
	$data = mysqli_fetch_array($hasil);
	echo json_encode($data);

?>