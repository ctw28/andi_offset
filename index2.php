<?php 
	include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran Andi Offset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  
</head>

<body>

<div class="info" style="width: 100%">
    <h1>Selamat Datang di Formulir Pendaftaran Kerja Andi Offset</h1>
    <span><div class="spoilers">Mohon menyediakan file yang akan di upload.</div></span>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" id="form-pendaftaran" method="POST" action="proses-pendaftaran.php">
    <ul id="progressbar">
        <li class="active">Data Pribadi</li>
        <li>Pengalaman Kerja</li>
        <li>Pendidikan</li>
        <li>Data Keluarga</li>
        <li>Data Lamaran</li>
    </ul>


  <!-- DATA PRIBADI FIELDSET --> 
    <fieldset style="margin-bottom: 50px !important;">
        <h2 class="fs-title">Data Pribadi</h2>
        <h3 class="fs-subtitle">Mohon mengisi data dengan sebenar-benarnya</h3>

        <div>
            <label for="inputNama">Nama Lengkap</label>
            <input type="text" name="inputNama" id="inputNama" required data-rule-required="true" 
                   data-msg-required="Mohon Isi Nama Lengkap Anda">
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
        </div>

        <div>
            <label for="inputTempatLahir">Tempat lahir</label>
            <input type="text" name="inputTempatLahir" id="inputTempatLahir" required data-rule-required="true" 
                   data-msg-required="Mohon Isi Tempat Lahir Anda">        
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
        </div>

        <div>
            <label for="inputTanggalLahir">Tanggal Lahir</label>
            <input type="date" name="inputTanggalLahir" id="inputTanggalLahir" required data-rule-required="true" 
                   data-msg-required="Mohon Isi Tanggal Lahir Anda">
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
        </div>


        <div>
            <label for="inputJenisKelamin">Jenis Kelamin</label>
	    	<label>Pria<input type="radio" name="inputJenisKelamin" id="inputJenisKelamin" value="L" required>
	    	Wanita <input type="radio" name="inputJenisKelamin" id="inputJenisKelamin" value="P" required> </label>
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
        </div>
        <div>
	    	<label for="inputAlamatKTP">Alamat (Sesuai KTP)</label>
	    	<textarea name="inputAlamatKTP" id="inputAlamatKTP" required data-rule-required="true" 
                   data-msg-required="Mohon Isi Alamat KTP Anda"></textarea>
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

        </div>
	  	<div>
	    	<label for="inputAlamatDomisili">Alamat Domisili</label>
	    	<textarea name="inputAlamatDomisili" id="inputAlamatDomisili" required data-rule-required="true" 
                   data-msg-required="Alamat Domisili Harus Di Isi"></textarea>
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
	  	</div>
	  	<div>
	    	<label for="inputNoTelp">No. Handphone</label>
	    	<input type="number" name="inputNoTelp" id="inputNoTelp" required data-rule-required="true" 
                   data-msg-required="Nomor Telepon Harus di isi">
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
	  	</div>
	  	<div>
	    	<label for="inputEmail">Email</label>
	    	<input type="email" name="inputEmail" id="inputEmail" required data-rule-required="true" 
                   data-msg-required="Email Tidak Boleh Kosong dan harus valid">
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
	  	</div>

	  	<div>
	    	<label for="inputStatus">Status</label>
	    	<select name="inputStatus" id="inputStatus"  required data-rule-required="true" 
                   data-msg-required="Mohon Memilih Status Pernikahan">
	    		<option value="">Pilih Status</option>
	    		<option value="Menikah">Menikah</option>
	    		<option value="Belum Menikah">Belum Menikah</option>
	    	</select>
            <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
	  	</div>
	  	<div>
	    	<label for="inputNamaPasangan">Nama Pasangan</label>
	    	<input type="text" name="inputNamaPasangan" id="inputNamaPasangan" placeholder="Isikan Nama Pasangan Anda">
	  	</div>
	  	<div>
	    	<label for="inputPekerjaan">Pekerjaan Pasangan</label>
	    	<input type="text" name="inputPekerjaan" id="inputPekerjaan" placeholder="Isikan Pekerjaan Pasangan Anda">
	  	</div>
	  	<div>
	    	<label for="inputTempatLahirPasangan">Tempat lahir Pasangan</label>
	    	<input type="text" name="inputTempatLahirPasangan" id="inputTempatLahirPasangan" placeholder="Isikan Tempat Lahir Pasangan Anda">
	  	</div>
	  	<div>
	    	<label for="inputTanggalLahirPasangan">Tanggal Lahir Pasangan</label>
	    	<input type="date" name="inputTanggalLahirPasangan" id="inputTanggalLahirPasangan" placeholder="Isikan Tanggal Lahir Pasangan Anda">
	  	</div>
	  	<div>
	    	<label for="inputNoTelpPasangan">No. Telp Pasangan</label>
	    	<input type="text" name="inputNoTelpPasangan" id="inputNoTelpPasangan" placeholder="Isikan No. Handphone Pasangan Anda">
	  	</div>
	  	<div>
	    	<label for="inputJumlahAnak">Jumlah Anak</label>
	    	<input type="number" name="inputJumlahAnak" id="inputJumlahAnak">
	  	</div>

    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Bantuan?</div>
    
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset style="display: none;">
    <h2 class="fs-title">PENGALAMAN KERJA</h2>
      <div>
    	<label for="inputPengalaman">Apakah Anda Memiliki Pengalam Kerja ?</label>
    	<select name="inputPengalaman" id="inputPengalaman" required data-rule-required="true" 
                   data-msg-required="Pengalaman Kerja Harus di isi>
    		<option value="Ya">Ada</option>
    		<option value="Tidak Ada">Tidak Ada</option>
    	</select>
  	</div>

  	<div>
    	<label for="inputPerusahaan">Nama Perusahan</label>
    	<input type="text" name="inputPerusahaan" id="inputPerusahaan" placeholder="Isikan Nama Perusahaan">
  	</div>
  	<div>
    	<label for="inputBidang">Bidang</label>
    	<input type="text" name="inputBidang" id="inputBidang" placeholder="Isikan Bidang Anda">
  	</div>
  	<div>
    	<label for="inputJabatanTerakhir">Jabatan Terakhir</label>
    	<input type="text" name="inputJabatanTerakhir" id="inputJabatanTerakhir" placeholder="Isikan Jabatan Terakhir Anda">
  	</div>
  	<div>
    	<label for="inputLamaKerja">Lama Kerja (dalam Bulan)</label>
    	<input type="number" name="inputLamaKerja" id="inputLamaKerja" placeholder="Isikan Lama Kerja Anda">
  	</div>
  	<div>
    	<label for="inputPeriode">Periode Kerja</label>
    	<input type="text" name="inputPeriode" id="inputPeriode" placeholder="Isikan Periode Kerja Anda">
  	</div>

  	<div>
    	<label for="inputGajiTerakhir">Gaji Terakhir Anda</label>
    	<input type="text" name="inputGajiTerakhir" id="inputGajiTerakhir" placeholder="Isikan Gaji Terakhir Anda">
  	</div>
  	<div>
    	<label for="inputAlasanKeluar">Alasan Keluar / Berhenti</label>
    	<textarea name="inputAlasanKeluar" id="inputAlasanKeluar"></textarea>
  	</div>
  	<div>
    	<label for="inputSuratKeteranganKerja">Upload Surat Keterangan Kerja (ekstensi .jpg/.pdf)</label>
    	<input type="text" name="inputSuratKeteranganKerja" id="inputSuratKeteranganKerja">
  	</div>

    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Bantuan?</div>
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Data Pendidikan</h2>
      <!-- Begin Average Gift Size in Year 1 Field -->
          	<div>
		    	<label for="inputNamaSekolah">Nama Sekolah / Universitas</label>
		    	<input type="text" name="inputNamaSekolah" id="inputNamaSekolah" required data-rule-required="true" 
                   data-msg-required="Nama Sekolah / Universitas Harus diisi">
		  	</div>
		  	<div>
		    	<label for="inputJurusan">Jurusan</label>
		    	<input type="text" name="inputJurusan" id="inputJurusan" required data-rule-required="true" 
                   data-msg-required="Jurusan Harus Di Isi">
		  	</div>
		  	<div>
		    	<label for="inputTahunMasuk">Tahun Masuk</label>
		    	<input type="number" name="inputTahunMasuk" id="inputTahunMasuk" required data-rule-required="true" 
                   data-msg-required="Tahun Masuk harus diisi">
		  	</div>
		  	<div>
		    	<label for="inputTahunLulus">Tahun Lulus</label>
		    	<input type="number" name="inputTahunLulus" id="inputTahunLulus" required data-rule-required="true" 
                   data-msg-required="Tahun Lulus Harus Diisi">
		  	</div>
		  	<div>
		    	<label for="inputIjazah">Upload Ijazah</label>
		    	<input type="file" name="inputIjazah" id="inputIjazah">
		  	</div>

		  	<div>
		    	<label for="inputTranskrip">Upload Transkrip</label>
		    	<input type="file" name="inputTranskrip" id="inputTranskrip">
		  	</div>
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Bantuan?</div>
  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Data Keluarga</h2>
    <h3 class="fs-subtitle">Let's talk about your donations as a whole</h3>
              <!-- Begin Total Giving In Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield" id="webform-component-cultivation--amount-3 hs_total_giving_in_year_1 field hs-form-field">
        
          <label for=" edit-submitted-cultivation-amount-3 total_giving_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 1? *</label>

          <input id="edit-submitted-cultivation-amount-3" class="form-text hs-input" name="total_giving_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Giving In Year 1 Field -->

      <!-- Begin Total Giving In Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_giving_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-4"> 
        
          <label for=" edit-submitted-cultivation-amount-4 total_giving_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">What was your total giving in Year 2? *</label>

          <input id="edit-submitted-cultivation-amount-4" class="form-text hs-input" name="total_giving_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        
        <!-- End Total Giving In Year 2 Field -->

      <!-- Begin Average Gift Size Percent Change Field 2 -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_giving_percent_change field hs-form-field" id="webform-component-cultivation--percent-change2">

          <label for=" edit-submitted-cultivation-percent-change2 total_giving_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Average Gift Size Percent Change</label>

          <input id="edit-submitted-cultivation-percent-change2" class="form-text hs-input" name="total_giving_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Average Gift Size Percent Change Field 2 -->
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Retention of your donors</h2>
    <h3 class="fs-subtitle">How long can you keep your donors and their donations?</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1? *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="number_of_donors_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->


        <!-- Begin Total Number of Donors Who Gave in Year 1 and Year 2 Field -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--amount-2 hs_number_of_year_1_donors_who_also_gave_in_year_2 field hs-form-field">
        
          <label for=" edit-submitted-retention-amount-2 number_of_year_1_donors_who_also_gave_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">What was your total number of donors who gave in year 1 that also gave in year 2? *</label>

          <input id="edit-submitted-retention-amount-2" class="form-text hs-input" name="number_of_year_1_donors_who_also_gave_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 and Year 2 Field -->

        <!-- Begin Retention Rate Percent -->
          <div class="form-item webform-component webform-component-textfield" id="webform-component-retention--percent-change field hs-form-field">
        
          <label for="edit-submitted-retention-percent-change">Retention Rate</label>

         <input id="edit-submitted-retention-percent-change" class="form-text hs-input" name="retention_rate_percent" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
          
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>

        <!-- End Retention Rate Percent -->


        <!-- Begin Final Calc -->
          <div class="form-item webform-component webform-component-textfield hs_fundraising_400_index field hs-form-field" id="webform-component-final-grade--grade">

          <label for=" fundraising_400_index-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Fundraising 400 Index Score</label>

          <input id="edit-submitted-final-grade-grade" class="form-text hs-input" name="fundraising_400_index" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
          </div>
        <!-- End Final Calc -->
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
</fieldset>

  <fieldset>
    <h2 class="fs-title" id="info-form">It's on the way!</h2>
    <h3 class="fs-subtitle">Thank you for trying out our marketing grader, please go check your email for your fundraising report card and some helpful tips to improve it!</h3>
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">What Is This?</div>
  </fieldset>
  	

  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
	<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
    <script  src="assets/js/index.js"></script>
    <script>
    	$(function(){
    		var form = $("#form-pendaftaran");
    		form.submit(function(e){
    			$(this).attr("disabled","disabled");
    			e.preventDefault();
    			$.ajax({
    				type 		: form.attr('method'),
    				url			: form.attr('action'),
    				data 		: form.serialize(),
    				dataType	: "json",
    				success: function(data){
    					$('#info-form').text(data.response);
    					console.log(data);
    				},
    				error: function(data){
    					$('#info-form').text(data.response);
    					console.log(data);
    				}
    			});
    		});
    	});
    </script>
</body>

</html>
