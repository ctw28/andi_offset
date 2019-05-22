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
        <div class="form-group">
          <label for="inputNamaAyah">Nama Ayah</label>
          <input type="text" name="inputNamaAyah" id="inputNamaAyah" placeholder="Isikan Nama Ayah" required data-rule-required="true" 
                   data-msg-required="Nama Ayah harus diisi">
        </div>
        <div class="form-group">
          <label for="inputUsiaAyah">Usia Ayah</label>
          <input type="number" name="inputUsiaAyah" id="inputUsiaAyah" placeholder="Isikan Usia Ayah Anda" required data-rule-required="true" 
                   data-msg-required="Usia Ayah harus diisi">
        </div>
        <div class="form-group">
          <label for="inputPekerjaanAyah">Pekerjaan Ayah</label>
          <input type="text" name="inputPekerjaanAyah" id="inputPekerjaanAyah" placeholder="Isikan Pekerjaan Ayah" required data-rule-required="true" 
                   data-msg-required="Pekerjaan Ayah harus diisi">
        </div>
        <div class="form-group">
          <label for="inputNoTelpAyah">No Telepon Ayah</label>
          <input type="number" name="inputNoTelpAyah" id="inputNoTelpAyah" placeholder="Isikan No Telepon Ayah">
        </div>
        <div class="form-group">
          <label for="inputStatusAyah">Status Ayah</label>
          <select name="inputStatusAyah" id="inputStatusAyah" required data-rule-required="true" 
                   data-msg-required="Status Ayah harus diisi">
            <option value="" selected="selected">Pilih Status Hidup</option>
            <option value="Hidup">Hidup</option>
            <option value="Meninggal">Meninggal</option>
          </select>
        </div>

        <div id="ayah_tiri" style="display: none; padding-left: 80px">
            <div class="form-group">
              <label for="inputNamaAyahTiri">Nama Ayah Tiri (Jika Ada)</label>
              <input type="text" name="inputNamaAyahTiri" id="inputNamaAyahTiri" placeholder="Isikan Nama Ayah Tiri">
            </div>
            <div class="form-group">
              <label for="inputUsiaAyahTiri">Usia Ayah Tiri</label>
              <input type="number" name="inputUsiaAyahTiri" id="inputUsiaAyahTiri" placeholder="Isikan Usia Ayah Tiri Anda">
            </div>
            <div class="form-group">
              <label for="inputPekerjaanAyahTiri">Pekerjaan Ayah Tiri</label>
              <input type="text" name="inputPekerjaanAyahTiri" id="inputPekerjaanAyahTiri" placeholder="Isikan Pekerjaan Ayah Tiri">
            </div>
            <div class="form-group">
              <label for="inputNoTelpAyahTiri">No Telepon Ayah Tiri</label>
              <input type="number" name="inputNoTelpAyahTiri" id="inputNoTelpAyahTiri" placeholder="Isikan No Telepon Ayah Tiri">
            </div>
            <div class="form-group">
              <label for="inputStatusAyahTiri">Status Ayah Tiri</label>
              <select name="inputStatusAyahTiri" id="inputStatusAyahTiri">
                <option value="Hidup">Hidup</option>
                <option value="Meninggal">Meninggal</option>
              </select>
            </div>
        </div>


        <div class="form-group">
          <label for="inputNamaIbu">Nama Ibu</label>
          <input type="text" name="inputNamaIbu" id="inputNamaIbu" placeholder="Isikan Nama Ibu" required data-rule-required="true" 
                   data-msg-required="Nama Ibu harus diisi">
        </div>
        <div class="form-group">
          <label for="inputUsiaIbu">Usia Ibu</label>
          <input type="number" name="inputUsiaIbu" id="inputUsiaIbu" placeholder="Isikan Usia Ibu Anda" required data-rule-required="true" 
                   data-msg-required="Usia Ibu harus diisi">
        </div>
        <div class="form-group">
          <label for="inputPekerjaanIbu">Pekerjaan Ibu</label>
          <input type="text" name="inputPekerjaanIbu" id="inputPekerjaanIbu" placeholder="Isikan Pekerjaan Ibu" required data-rule-required="true" 
                   data-msg-required="Pekerjaan Ibu harus diisi">
        </div>
        <div class="form-group">
          <label for="inputNoTelpIbu">No Telepon Ibu</label>
          <input type="number" name="inputNoTelpIbu" id="inputNoTelpIbu" placeholder="Isikan No Telepon Ibu">
        </div>
        <div class="form-group">
          <label for="inputStatusIbu">Status Ibu</label>
          <select name="inputStatusIbu" id="inputStatusIbu" required data-rule-required="true" 
                   data-msg-required="Status Ibu harus diisi">
            <option selected="selected">Pilih Status Hidup</option>
            <option value="Hidup">Hidup</option>
            <option value="Meninggal">Meninggal</option>
          </select>
        </div>


        <div id="ibu_tiri" style="display: none; padding-left: 80px">
            <div class="form-group">
              <label for="inputNamaIbuTiri">Nama Ibu Tiri</label>
              <input type="text" name="inputNamaIbuTiri" id="inputNamaIbuTiri" placeholder="Isikan Nama Ibu Tiri">
            </div>
            <div class="form-group">
              <label for="inputUsiaIbuTiri">Usia Ibu iri</label>
              <input type="number" name="inputUsiaIbuTiri" id="inputUsiaIbuTiri" placeholder="Isikan Usia Ibu Tiri Anda">
            </div>
            <div class="form-group">
              <label for="inputPekerjaanIbuTiri">Pekerjaan Ibu Tiri</label>
              <input type="text" name="inputPekerjaanIbuTiri" id="inputPekerjaanIbuTiri" placeholder="Isikan Pekerjaan Ibu Tiri">
            </div>
            <div class="form-group">
              <label for="inputNoTelpIbuTiri">No Telepon Ibu Tiri</label>
              <input type="number" name="inputNoTelpIbuTiri" id="inputNoTelpIbuTiri" placeholder="Isikan No Telepon Ibu Tiri">
            </div>
            <div class="form-group">
              <label for="inputStatusIbuTiri">Status Ibu Tiri</label>
              <select name="inputStatusIbuTiri" id="inputStatusIbuTiri">
                <option value="Hidup">Hidup</option>
                <option value="Meninggal">Meninggal</option>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label for="inputJmlSaudara">Jumlah Saudara</label>
          <input type="number" name="inputJmlSaudara" id="inputJmlSaudara" placeholder="Isikan Jumlah Saudara Anda">
        </div>

    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
    <div class="explanation btn btn-small modal-trigger" data-modal-id="modal-3">Bantuan</div>
  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Data Lamaran</h2>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
              <div>
                <label for="inputPosisi1">Pilih Posisi 1</label>
                <select name="inputPosisi1" id="inputPosisi1" required data-rule-required="true" 
                   data-msg-required="Posisi 1 harus diisi">
                  <option value="Manajer Keuangan(MK)">Manajer Keuangan(MK)</option>
                  <option value="Manajer Pemasaran(MP)">Manajer Pemasaran(MP)</option>
                  <option value="Koordinator Marketing(KM)">Koordinator Marketing(KM)</option>
                  <option value="Marketing(MR)">Marketing(MR)</option>
                  <option value="Supervisor Telemarketing(ST)">Supervisor Telemarketing(ST)</option>
                  <option value="Telemarketing Buku(TB)">Telemarketing Buku(TB)</option>
                  <option value="Telemarketing Cetak(TC)">Telemarketing Cetak(TC)</option>
                  <option value="Telemarketing Agen(TA)">Telemarketing Agen(TA)</option>
                </select>
              </div>

              <div>
                <label for="inputPosisi2">Pilih Posisi 2</label>
                <select name="inputPosisi2" id="inputPosisi2" required data-rule-required="true" 
                   data-msg-required="Posisi 2 harus diisi">
                  <option value="Manajer Keuangan(MK)">Manajer Keuangan(MK)</option>
                  <option value="Manajer Pemasaran(MP)">Manajer Pemasaran(MP)</option>
                  <option value="Koordinator Marketing(KM)">Koordinator Marketing(KM)</option>
                  <option value="Marketing(MR)">Marketing(MR)</option>
                  <option value="Supervisor Telemarketing(ST)">Supervisor Telemarketing(ST)</option>
                  <option value="Telemarketing Buku(TB)">Telemarketing Buku(TB)</option>
                  <option value="Telemarketing Cetak(TC)">Telemarketing Cetak(TC)</option>
                  <option value="Telemarketing Agen(TA)">Telemarketing Agen(TA)</option>
                </select>
              </div>
           
              <div>
                <label for="inputPenempatan">Penempatan</label>
                <input type="text" name="inputPenempatan" id="inputPenempatan" placeholder="Isikan Penempatan Anda" required data-rule-required="true" 
                   data-msg-required="Penempatan harus diisi">
              </div>
           
              <div>
                <label for="inputGaji">Gaji Yang Diinginkan</label>
                <input type="number" name="inputGaji" id="inputGaji" placeholder="Isikan Gaji yang anda inginkan" required data-rule-required="true" 
                   data-msg-required="Gaji harus diisi">
              </div>
               
              <div>
                <label for="inputKekurangan">Kekurangan Anda</label>
                <textarea name="inputKekurangan" id="inputKekurangan" required data-rule-required="true" 
                   data-msg-required="Kekurangan harus diisi"></textarea>
              </div>

              <div>
                <label for="inputKelebihan">Kelebihan Anda</label>
                <textarea name="inputKelebihan" id="inputKelebihan" required data-rule-required="true" 
                   data-msg-required="Kelebihan harus diisi"></textarea>
              </div>

              <div>
                <label for="inputBisaKendaraan">Apakah Anda Bisa Mengendarai Kendaraan?</label>
                <div class="radio">
                <label><input type="radio" name="inputBisaKendaraan" id="inputBisaKendaraan" value="Ya" checked>Ya</label>
              </div>
              <div class="radio">
                <label><input type="radio" name="inputBisaKendaraan" id="inputBisaKendaraan" value="Tidak">Tidak</label>
              </div>
              </div>

              <div>
                <label for="inputPunyaSim">Apakah Anda Punya SIM?</label>
                <divclass="radio">
                <label><input type="radio" name="inputPunyaSim" id="inputPunyaSim" value="Ada" checked>Ada</label>
              </div>
              <divclass="radio">
                <label><input type="radio" name="inputPunyaSim" id="inputPunyaSim" value="Tidak Ada">Tidak Ada</label>
              </div>
              </div>

              <div>
                <label for="inputUploadSim">Upload SIM Anda (ekstensi .jpg/.pdf</label>
                <input type="file" name="inputUploadSim" id="inputUploadSim">
              </div>

              <div>
                <label for="inputInfoLowongan">Informasi Lowongan Kerja ini darimana?</label>
                <input type="text" name="inputInfoLowongan" id="inputInfoLowongan" placeholder="Isikan darimana anda memperoleh informasi Lowongan Pekerjaan">
              </div>

              <div>
                <label for="inputKenalan">Siapa yang anda kenal di Andi Offset?</label>
                <input type="text" name="inputKenalan" id="inputKenalan" placeholder="Isikan Kenalan Anda di Andi Offset">
              </div>

              <div>
                <label for="inputPekerjaanSampingan">Apakah Anda Memiliki Pekerjaan Sampingan</label>
                <select name="inputPekerjaanSampingan" id="inputPekerjaanSampingan" required data-rule-required="true" 
                   data-msg-required="Pekerjaan Sampingan harus diisi">
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>

              <div>
                <label for="inputNamaUsaha">Nama Usaha Anda</label>
                <input type="text" name="inputNamaUsaha" id="inputNamaUsaha" placeholder="Isikan Nama Usaha Anda">
              </div>

              <div>
                <label for="inputTahunMulai">Tahun Mulai Usaha</label>
                <input type="number" name="inputTahunMulai" id="inputTahunMulai" placeholder="Isikan Tahun Mulai Usaha">
              </div>

              <div>
                <label for="inputPosisiSampingan">Posisi Anda</label>
                <input type="text" name="inputPosisiSampingan" id="inputPosisiSampingan" placeholder="Isikan Posisi Anda">
              </div>

              <div>
                <label for="inputBidangSampingan">Bidang Anda</label>
                <input type="text" name="inputBidangSampingan" id="inputBidangSampingan" placeholder="Isikan Bidang Anda">
              </div>

              <div>
                <label for="inputTerlibatKejahatan">Apakah Anda Pernah Terlibat Kejahatan/Urusan Polisi/Narkoba?</label>
                <select name="inputTerlibatKejahatan" id="inputTerlibatKejahatan">
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>

              <div>
                <label for="inputUploadSKCK">Upload SKCK</label>
                <input type="file" name="inputUploadSKCK" id="inputUploadSKCK">
              </div>

              <div>
                <label for="inputKebiasaanDisukai">Kebiasaan yang dilakukan atau disukai</label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Membaca">Membaca
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Menulis">Menulis
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Traveling">Traveling
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Makan">Makan
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Mendengar Musik">Mendengar Musik
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Nonton">Nonton
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" name="inputKebiasaanDisukai[]" id="inputKebiasaanDisukai" value="Bicara">Bicara
              </label>
              </div>

              <div>
                <label for="inputMulaiKerja">Jika diterima kapan mulai kerja?</label>
                <input type="text" name="inputMulaiKerja" id="inputMulaiKerja" placeholder="Isikan Waktu">
              </div>

              <div>
                <label for="inputKeperluanMendesak">Keperluan mendesak yang bisa dihubungi</label>
                <input type="text" name="inputKeperluanMendesak" id="inputKeperluanMendesak" placeholder="Isikan Kepeluan mendesak">
              </div>
              <div>
                <label for="inputMoody">Apakah anda pekerja yang moody</label>
                <select name="inputMoody" id="inputMoody">
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
              <div>
                <label for="inputPengalamanHidup">Pengalaman hidup yang paling bersalah (deskripsikan)</label>
                <textarea name="inputPengalamanHidup" id="inputPengalamanHidup"></textarea>
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
      <script>
      $(function() {
          $('#inputStatusAyah').change(function(){
            if($(this).val() == "Hidup" || $(this).val() == ""){
              $('#ayah_tiri').hide();
            }
            else if($(this).val() == "Meninggal"){
              $('#ayah_tiri').show();
          }
          });
          $('#inputStatusIbu').change(function(){
            if($(this).val() == "Hidup" || $(this).val() == ""){
              $('#ibu_tiri').hide();
            }
            else if($(this).val() == "Meninggal"){
              $('#ibu_tiri').show();
          }
          });
      });
  </script>
</body>

</html>
