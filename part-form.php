<form method="POST" action="proses-pendaftaran.php">

  	<!-- ISIAN DATA PRIBADI -->

  	<div class="form-group">
    	<label for="inputNama">Nama Lengkap</label>
    	<input type="text" name="inputNama" class="form-control" id="inputNama" placeholder="Isikan Nama Lengkap" required>
  	</div>
  	<div class="form-group">
    	<label for="inputTempatLahir">Tempat lahir</label>
    	<input type="text" name="inputTempatLahir" class="form-control" id="inputTempatLahir" placeholder="Isikan Tempat Lahir" required>
  	</div>
  	<div class="form-group">
    	<label for="inputTanggalLahir">Tanggal Lahir</label>
    	<input type="date" name="inputTanggalLahir" class="form-control" id="inputTanggalLahir" placeholder="Isikan Tanggal Lahir" required>
  	</div>
  	<div class="form-group">
    	<label for="inputJenisKelamin">Jenis Kelamin</label>
    	<input type="radio" name="inputJenisKelamin" class="form-control" id="inputJenisKelamin" value="L" required> Pria
    	<input type="radio" name="inputJenisKelamin" class="form-control" id="inputJenisKelamin" value="P" required> Wanita
  	</div>
  	<div class="form-group">
    	<label for="inputAlamatKTP">Alamat (Sesuai KTP)</label>
    	<textarea name="inputAlamatKTP" class="form-control" id="inputAlamatKTP" required></textarea>
  	</div>
  	<div class="form-group">
    	<label for="inputAlamatDomisili">Alamat Domisili</label>
    	<textarea name="inputAlamatDomisili" class="form-control" id="inputAlamatDomisili" required></textarea>
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelp">No. Handphone</label>
    	<input type="number" name="inputNoTelp" class="form-control" id="inputNoTelp" placeholder="Isikan Tempat Lahir" required>
  	</div>
  	<div class="form-group">
    	<label for="inputEmail">Email</label>
    	<input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Isikan Tempat Lahir" required>
  	</div>



  	<!-- ISIAN DATA STATUS -->


  	<div class="form-group">
    	<label for="inputStatus">Status</label>
    	<select name="inputStatus" id="inputStatus">
    		<option value="Menikah">Menikah</option>
    		<option value="Belum Menikah">Belum Menikah</option>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="inputNamaPasangan">Nama Pasangan</label>
    	<input type="text" name="inputNamaPasangan" class="form-control" id="inputNamaPasangan" placeholder="Isikan Nama Pasangan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPekerjaan">Pekerjaan Pasangan</label>
    	<input type="text" name="inputPekerjaan" class="form-control" id="inputPekerjaan" placeholder="Isikan Pekerjaan Pasangan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputTempatLahirPasangan">Tempat lahir Pasangan</label>
    	<input type="text" name="inputTempatLahirPasangan" class="form-control" id="inputTempatLahirPasangan" placeholder="Isikan Tempat Lahir Pasangan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputTanggalLahirPasangan">Tanggal Lahir Pasangan</label>
    	<input type="date" name="inputTanggalLahirPasangan" class="form-control" id="inputTanggalLahirPasangan" placeholder="Isikan Tanggal Lahir Pasangan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelpPasangan">No. Telp Pasangan</label>
    	<input type="text" name="inputNoTelpPasangan" class="form-control" id="inputNoTelpPasangan" placeholder="Isikan No. Handphone Pasangan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputJumlahAnak">Jumlah Anak</label>
    	<input type="number" name="inputJumlahAnak" class="form-control" id="inputJumlahAnak">
  	</div>


  	<!-- ISIAN DATA PENGALAMAN KERJA -->
  	<div class="form-group">
    	<label for="inputPengalaman">Apakah Anda Memiliki Pengalam Kerja ?</label>
    	<select name="inputPengalaman" id="inputPengalaman">
    		<option value="Ya">Ada</option>
    		<option value="Tidak Ada">Tidak Ada</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="inputPerusahaan">Nama Perusahan</label>
    	<input type="text" name="inputPerusahaan" class="form-control" id="inputPerusahaan" placeholder="Isikan Nama Perusahaan">
  	</div>
  	<div class="form-group">
    	<label for="inputBidang">Bidang</label>
    	<input type="text" name="inputBidang" class="form-control" id="inputBidang" placeholder="Isikan Bidang Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputJabatanTerakhir">Jabatan Terakhir</label>
    	<input type="text" name="inputJabatanTerakhir" class="form-control" id="inputJabatanTerakhir" placeholder="Isikan Jabatan Terakhir Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputLamaKerja">Lama Kerja (dalam Bulan)</label>
    	<input type="number" name="inputLamaKerja" class="form-control" id="inputLamaKerja" placeholder="Isikan Lama Kerja Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPeriode">Periode Kerja</label>
    	<input type="text" name="inputPeriode" class="form-control" id="inputPeriode" placeholder="Isikan Periode Kerja Anda">
  	</div>

  	<div class="form-group">
    	<label for="inputGajiTerakhir">Gaji Terakhir Anda</label>
    	<input type="text" name="inputGajiTerakhir" class="form-control" id="inputGajiTerakhir" placeholder="Isikan Gaji Terakhir Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputAlasanKeluar">Alasan Keluar / Berhenti</label>
    	<textarea name="inputAlasanKeluar" class="form-control" id="inputAlasanKeluar"></textarea>
  	</div>
  	<div class="form-group">
    	<label for="inputSuratKeteranganKerja">Upload Surat Keterangan Kerja (ekstensi .jpg/.pdf</label>
    	<input type="file" name="inputSuratKeteranganKerja" class="form-control" id="inputSuratKeteranganKerja">
  	</div>


  	<!-- ISIAN DATA PENDIDIKAN -->
  	<div class="form-group">
    	<label for="inputNamaSekolah">Nama Sekolah / Universitas</label>
    	<input type="text" name="inputNamaSekolah" class="form-control" id="inputNamaSekolah" placeholder="Isikan Nama Sekolah / Universitas">
  	</div>
  	<div class="form-group">
    	<label for="inputJurusan">Jurusan</label>
    	<input type="text" name="inputJurusan" class="form-control" id="inputJurusan" placeholder="Isikan Jurusan Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputTahunMasuk">Tahun Masuk</label>
    	<input type="number" name="inputTahunMasuk" class="form-control" id="inputTahunMasuk" placeholder="Isikan Tahun Masuk">
  	</div>
  	<div class="form-group">
    	<label for="inputTahunLulus">Tahun Lulus</label>
    	<input type="number" name="inputTahunLulus" class="form-control" id="inputTahunLulus" placeholder="Isikan Tahun Lulus">
  	</div>
  	<div class="form-group">
    	<label for="inputIjazah">Upload Ijazah</label>
    	<input type="file" name="inputIjazah" class="form-control" id="inputIjazah">
  	</div>

  	<div class="form-group">
    	<label for="inputTranskrip">Upload Transkrip</label>
    	<input type="file" name="inputTranskrip" class="form-control" id="inputTranskrip">
  	</div>

  	<!-- ISIAN DATA KELUARGA -->

  	<div class="form-group">
    	<label for="inputNamaAyah">Nama Ayah</label>
    	<input type="text" name="inputNamaAyah" class="form-control" id="inputNamaAyah" placeholder="Isikan Nama Ayah">
  	</div>
  	<div class="form-group">
    	<label for="inputUsiaAyah">Usia Ayah</label>
    	<input type="number" name="inputUsiaAyah" class="form-control" id="inputUsiaAyah" placeholder="Isikan Usia Ayah Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPekerjaanAyah">Pekerjaan Ayah</label>
    	<input type="text" name="inputPekerjaanAyah" class="form-control" id="inputPekerjaanAyah" placeholder="Isikan Pekerjaan Ayah">
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelpAyah">No Telepon Ayah</label>
    	<input type="number" name="inputNoTelpAyah" class="form-control" id="inputNoTelpAyah" placeholder="Isikan No Telepon Ayah">
  	</div>
  	<div class="form-group">
    	<label for="inputStatusAyah">Status Ayah</label>
    	<select name="inputStatusAyah" id="inputStatusAyah">
    		<option value="Hidup">Hidup</option>
    		<option value="Meninggal">Meninggal</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="inputNamaIbu">Nama Ibu</label>
    	<input type="text" name="inputNamaIbu" class="form-control" id="inputNamaIbu" placeholder="Isikan Nama Ibu">
  	</div>
  	<div class="form-group">
    	<label for="inputUsiaIbu">Usia Ibu</label>
    	<input type="number" name="inputUsiaIbu" class="form-control" id="inputUsiaIbu" placeholder="Isikan Usia Ibu Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPekerjaanIbu">Pekerjaan Ibu</label>
    	<input type="text" name="inputPekerjaanIbu" class="form-control" id="inputPekerjaanIbu" placeholder="Isikan Pekerjaan Ibu">
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelpIbu">No Telepon Ibu</label>
    	<input type="number" name="inputNoTelpIbu" class="form-control" id="inputNoTelpIbu" placeholder="Isikan No Telepon Ibu">
  	</div>
  	<div class="form-group">
    	<label for="inputStatusIbu">Status Ibu</label>
    	<select name="inputStatusIbu" id="inputStatusIbu">
    		<option value="Hidup">Hidup</option>
    		<option value="Meninggal">Meninggal</option>
    	</select>
  	</div>

  	<div class="form-group">
    	<label for="inputJmlSaudara">Jumlah Saudara</label>
    	<input type="number" name="inputJmlSaudara" class="form-control" id="inputJmlSaudara" placeholder="Isikan Jumlah Saudara Anda">
  	</div>

  	<!-- INPUTAN DATA KELUARGA TIRI -->
  	<div class="form-group">
    	<label for="inputNamaAyahTiri">Nama Ayah Tiri</label>
    	<input type="text" name="inputNamaAyahTiri" class="form-control" id="inputNamaAyahTiri" placeholder="Isikan Nama Ayah Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputUsiaAyahTiri">Usia Ayah Tiri</label>
    	<input type="number" name="inputUsiaAyahTiri" class="form-control" id="inputUsiaAyahTiri" placeholder="Isikan Usia Ayah Tiri Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPekerjaanAyahTiri">Pekerjaan Ayah Tiri</label>
    	<input type="text" name="inputPekerjaanAyahTiri" class="form-control" id="inputPekerjaanAyahTiri" placeholder="Isikan Pekerjaan Ayah Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelpAyahTiri">No Telepon Ayah Tiri</label>
    	<input type="number" name="inputNoTelpAyahTiri" class="form-control" id="inputNoTelpAyahTiri" placeholder="Isikan No Telepon Ayah Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputStatusAyahTiri">Status Ayah Tiri</label>
    	<select name="inputStatusAyahTiri" id="inputStatusAyahTiri">
    		<option value="Hidup">Hidup</option>
    		<option value="Meninggal">Meninggal</option>
    	</select>
  	</div>
  	
  	<div class="form-group">
    	<label for="inputNamaIbuTiri">Nama Ibu Tiri</label>
    	<input type="text" name="inputNamaIbuTiri" class="form-control" id="inputNamaIbuTiri" placeholder="Isikan Nama Ibu Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputUsiaIbuTiri">Usia Ibu iri</label>
    	<input type="number" name="inputUsiaIbuTiri" class="form-control" id="inputUsiaIbuTiri" placeholder="Isikan Usia Ibu Tiri Anda">
  	</div>
  	<div class="form-group">
    	<label for="inputPekerjaanIbuTiri">Pekerjaan Ibu Tiri</label>
    	<input type="text" name="inputPekerjaanIbuTiri" class="form-control" id="inputPekerjaanIbuTiri" placeholder="Isikan Pekerjaan Ibu Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputNoTelpIbuTiri">No Telepon Ibu Tiri</label>
    	<input type="number" name="inputNoTelpIbuTiri" class="form-control" id="inputNoTelpIbuTiri" placeholder="Isikan No Telepon Ibu Tiri">
  	</div>
  	<div class="form-group">
    	<label for="inputStatusIbuTiri">Status Ibu Tiri</label>
    	<select name="inputStatusIbuTiri" id="inputStatusIbuTiri">
    		<option value="Hidup">Hidup</option>
    		<option value="Meninggal">Meninggal</option>
    	</select>
  	</div>

  	<!-- INPUTAN DATA LAMARAN -->

  	<div class="form-group">
    	<label for="inputPosisi1">Pilih Posisi 1</label>
    	<select name="inputPosisi1" id="inputPosisi1">
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

  	<div class="form-group">
    	<label for="inputPosisi2">Pilih Posisi 2</label>
    	<select name="inputPosisi2" id="inputPosisi2">
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
 
   	<div class="form-group">
    	<label for="inputPenempatan">Penempatan</label>
    	<input type="text" name="inputPenempatan" class="form-control" id="inputPenempatan" placeholder="Isikan Penempatan Anda">
  	</div>
 
   	<div class="form-group">
    	<label for="inputGaji">Gaji Yang Diinginkan</label>
    	<input type="number" name="inputGaji" class="form-control" id="inputGaji" placeholder="Isikan Gaji yang anda inginkan">
  	</div>
     
   	<div class="form-group">
    	<label for="inputKekurangan">Kekurangan Anda</label>
    	<textarea name="inputKekurangan" id="inputKekurangan"></textarea>
  	</div>

   	<div class="form-group">
    	<label for="inputKelebihan">Kelebihan Anda</label>
    	<textarea name="inputKelebihan" id="inputKelebihan"></textarea>
  	</div>

   	<div class="form-group">
    	<label for="inputBisaKendaraan">Apakah Anda Bisa Mengendarai Kendaraan?</label>
    	<div class="radio">
		  <label><input type="radio" name="inputBisaKendaraan" id="inputBisaKendaraan" value="Ya" checked>Ya</label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="inputBisaKendaraan" id="inputBisaKendaraan" value="Tidak">Tidak</label>
		</div>
  	</div>

   	<div class="form-group">
    	<label for="inputPunyaSim">Apakah Anda Punya SIM?</label>
    	<div class="radio">
		  <label><input type="radio" name="inputPunyaSim" id="inputPunyaSim" value="Ada" checked>Ada</label>
		</div>
		<div class="radio">
		  <label><input type="radio" name="inputPunyaSim" id="inputPunyaSim" value="Tidak Ada">Tidak Ada</label>
		</div>
  	</div>

  	<div class="form-group">
    	<label for="inputUploadSim">Upload SIM Anda (ekstensi .jpg/.pdf</label>
    	<input type="file" name="inputUploadSim" class="form-control" id="inputUploadSim">
  	</div>

   	<div class="form-group">
    	<label for="inputInfoLowongan">Informasi Lowongan Kerja ini darimana?</label>
    	<input type="text" name="inputInfoLowongan" class="form-control" id="inputInfoLowongan" placeholder="Isikan darimana anda memperoleh informasi Lowongan Pekerjaan">
  	</div>

   	<div class="form-group">
    	<label for="inputKenalan">Siapa yang anda kenal di Andi Offset?</label>
    	<input type="text" name="inputKenalan" class="form-control" id="inputKenalan" placeholder="Isikan Kenalan Anda di Andi Offset">
  	</div>

  	<div class="form-group">
    	<label for="inputPekerjaanSampingan">Apakah Anda Memiliki Pekerjaan Sampingan</label>
    	<select name="inputPekerjaanSampingan" id="inputPekerjaanSampingan">
    		<option value="Ya">Ya</option>
    		<option value="Tidak">Tidak</option>
    	</select>
  	</div>

   	<div class="form-group">
    	<label for="inputNamaUsaha">Nama Usaha Anda</label>
    	<input type="text" name="inputNamaUsaha" class="form-control" id="inputNamaUsaha" placeholder="Isikan Nama Usaha Anda">
  	</div>

   	<div class="form-group">
    	<label for="inputTahunMulai">Tahun Mulai Usaha</label>
    	<input type="number" name="inputTahunMulai" class="form-control" id="inputTahunMulai" placeholder="Isikan Tahun Mulai Usaha">
  	</div>

   	<div class="form-group">
    	<label for="inputPosisiSampingan">Posisi Anda</label>
    	<input type="text" name="inputPosisiSampingan" class="form-control" id="inputPosisiSampingan" placeholder="Isikan Posisi Anda">
  	</div>

   	<div class="form-group">
    	<label for="inputBidangSampingan">Bidang Anda</label>
    	<input type="text" name="inputBidangSampingan" class="form-control" id="inputBidangSampingan" placeholder="Isikan Bidang Anda">
  	</div>

  	<div class="form-group">
    	<label for="inputTerlibatKejahatan">Apakah Anda Pernah Terlibat Kejahatan/Urusan Polisi/Narkoba?</label>
    	<select name="inputTerlibatKejahatan" id="inputTerlibatKejahatan">
    		<option value="Ya">Ya</option>
    		<option value="Tidak">Tidak</option>
    	</select>
  	</div>

   	<div class="form-group">
    	<label for="inputUploadSKCK">Upload SKCK</label>
    	<input type="file" name="inputUploadSKCK" class="form-control" id="inputUploadSKCK">
  	</div>

   	<div class="form-group">
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

   	<div class="form-group">
    	<label for="inputMulaiKerja">Jika diterima kapan mulai kerja?</label>
    	<input type="text" name="inputMulaiKerja" class="form-control" id="inputMulaiKerja" placeholder="Isikan Waktu">
  	</div>

   	<div class="form-group">
    	<label for="inputKeperluanMendesak">Keperluan mendesak yang bisa dihubungi</label>
    	<input type="text" name="inputKeperluanMendesak" class="form-control" id="inputKeperluanMendesak" placeholder="Isikan Kepeluan mendesak">
  	</div>
   	<div class="form-group">
    	<label for="inputMoody">Apakah anda pekerja yang moody</label>
    	<select name="inputMoody" id="inputMoody">
    		<option value="Ya">Ya</option>
    		<option value="Tidak">Tidak</option>
    	</select>
  	</div>
   	<div class="form-group">
    	<label for="inputPengalamanHidup">Pengalaman hidup yang paling bersalah (deskripsikan)</label>
    	<textarea name="inputPengalamanHidup" id="inputPengalamanHidup"></textarea>
  	</div>

  	<button type="submit" class="btn btn-primary">Submit</button>
</form>    
