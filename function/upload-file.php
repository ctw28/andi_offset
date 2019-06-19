<?php

	function validateFileUpload($fileUpload, $jenis, $allowNull){
		$allowedFormat = array("jpg", "pdf"); //hanya file jpg/pdf yang dibolehkan
		$maxFileSize = 1024*100; //maksimal 100 kb

		$fileUploadName 	= $_FILES[$fileUpload]['name']; // mendapatkan nama file
		$fileUploadSize 	= $_FILES[$fileUpload]['size']; // mendapatkan ukuran file
	    $fileUploadFormat 	= pathinfo($fileUploadName, PATHINFO_EXTENSION); // Mendapatkan format file

		if($allowNull == true && $fileUploadName == null){
			return;
		}

		if(!in_array($fileUploadFormat, $allowedFormat)){
		    $_SESSION['error'][] = "Format File ".$jenis." Harus pdf atau jpg";
		}
		if ($fileUploadSize > $maxFileSize){
			$_SESSION['error'][] = "Ukuran File ".$jenis." Melebihi 100 kb";
		}
		return;
	}

	function uploadFile($fileUpload, $folder){
		$path 				= "assets/images/upload/".$folder; // Lokasi folder untuk menampung file
		$fileUploadName 	= $_FILES[$fileUpload]['name']; // mendapatkan nama file
		if(move_uploaded_file($_FILES[$fileUpload]['tmp_name'], $path.'/'.$fileUploadName)){
			return $fileUploadName;
		} else{
			$_SESSION['error'][] = "Gagal Upload ".$folder.". Ada Kesalahan pada server, Silahkan Coba Lagi";			
		}
	}

?>