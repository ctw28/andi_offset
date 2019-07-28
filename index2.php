<?php 
    session_start();
  	include('config/config.php');
    include('function/upload-file.php');
    include('function/set-value.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran Andi Offset</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">  
</head>

<body>
    <div class="info" style="width: 100%">
        <h1>Formulir Pendaftaran Karyawan Andi Offset</h1>
    </div>

    <form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" id="form-pendaftaran">
        <ul id="progressbar" style="padding: 0">
            <li class="active">Data Pribadi</li>
            <li>Pengalaman Kerja</li>
            <li>Data Pendidikan</li>
            <li>Data Keluarga</li>
            <li>Data Lamaran</li>
        </ul>

        <!-- DATA PRIBADI FIELDSET --> 
        <fieldset>
        <h2 class="fs-title">Data Pribadi</h2>
            <div>
                <label for="inputNama">Nama Lengkap <span class="required">*</span></label>
                <input type="text" name="inputNama" id="inputNama"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputTempatLahir">Tempat lahir <span class="required">*</span></label>
                <input type="text" name="inputTempatLahir" id="inputTempatLahir"  required data-msg-required="Harus diisi">        
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputTanggalLahir">Tanggal Lahir <span class="required">*</span></label>
                <input type="date" name="inputTanggalLahir" id="inputTanggalLahir"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputJenisKelamin">Jenis Kelamin <span class="required">*</span></label>
      	        <span>
                    <label style="width: 10%">
                    <input type="radio" name="inputJenisKelamin" id="inputJenisKelamin" value="L" checked>Pria</label>
                    <label>
                    <input type="radio" name="inputJenisKelamin" id="inputJenisKelamin" value="P" required> Wanita</label>
                </span>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
    	    	    <label for="inputAlamatKTP">Alamat (KTP) <span class="required">*</span></label>
    	    	    <textarea name="inputAlamatKTP" id="inputAlamatKTP"  required data-msg-required="Harus diisi"></textarea>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
      	  	<div>
        	    	<label for="inputAlamatDomisili">Alamat Domisili <span class="required">*</span></label>
        	    	<textarea name="inputAlamatDomisili" id="inputAlamatDomisili"  required data-msg-required="Harus diisi"></textarea>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
      	  	</div>
      	  	<div>
        	    	<label for="inputNoTelp">No. Handphone <span class="required">*</span></label>
        	    	<input type="number" name="inputNoTelp" id="inputNoTelp"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
      	  	</div>
      	  	<div>
        	    	<label for="inputEmail">Email <span class="required">*</span></label>
        	    	<input type="email" name="inputEmail" id="inputEmail"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
      	  	</div>
      	  	<div>
      	    	  <label for="inputStatus">Status <span class="required">*</span></label>
      	    	  <select name="inputStatus" id="inputStatus"   
                          required data-msg-required="Mohon Memilih Status Pernikahan">
          	    		<option value="">Pilih</option>
          	    		<option value="Menikah">Menikah</option>
          	    		<option value="Belum Menikah">Belum Menikah</option>
      	    	  </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
      	  	</div>

            <div id="status" style="display: none;  ">
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
            </div>
        <input type="button" data-page="1" name="next" class="next action-button" value="Selanjutnya" />  
        </fieldset>


        <!-- DATA PENGALAMAN FIELD SET -->  
        <fieldset>
        <h2 class="fs-title">Data Pengalaman Kerja</h2>
            <div>
              	<label for="inputPengalaman">Apakah Anda Memiliki Pengalaman Kerja ? <span class="required">*</span></label>
              	<select name="inputPengalaman" id="inputPengalaman"  required data-msg-required="Harus diisi">
                		<option value="">Pilih</option>
                    <option value="Ya">Ada</option>
                		<option value="Tidak Ada">Tidak Ada</option>
              	</select>
        	  </div>

            <div id="pengalaman" style="display: none; padding-left: 20px">
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
                    <input type="text" name="inputGajiTerakhir" id="inputGajiTerakhir" placeholder="Isikan Gaji Terakhir Anda" data-a-sign="Rp. " data-a-dec="," data-a-sep=".">
                </div>
                <div>
                    <label for="inputAlasanKeluar">Alasan Keluar / Berhenti</label>
                    <textarea name="inputAlasanKeluar" id="inputAlasanKeluar"></textarea>
                </div>                
                <div>
                    <label for="inputSuratKeteranganKerja">Upload Surat Keterangan Kerja (ekstensi .jpg/.pdf)</label>
                    <input type="file" name="inputSuratKeteranganKerja" id="inputSuratKeteranganKerja">
                </div>
            </div>
        <input type="button" data-page="2" name="previous" class="previous action-button" value="Sebelumnya" />
        <input type="button" data-page="2" name="next" class="next action-button" value="Selanjutnya" />
        </fieldset>


        <!-- DATA PENDIDIKAN FIELD SET -->  
        <fieldset>
        <h2 class="fs-title">Data Pendidikan</h2>
          	<div>
      		    	<label for="inputNamaSekolah">Nama Universitas <span class="required">*</span></label>
      		    	<input type="text" name="inputNamaSekolah" id="inputNamaSekolah"  required data-msg-required="Harus diisi">
    		  	</div>
    		  	<div>
      		    	<label for="inputJurusan">Jurusan <span class="required">*</span></label>
      		    	<input type="text" name="inputJurusan" id="inputJurusan"  required data-msg-required="Harus diisi">
    		  	</div>
    		  	<div>
      		    	<label for="inputTahunMasuk">Tahun Masuk <span class="required">*</span></label>
      		    	<input type="number" name="inputTahunMasuk" id="inputTahunMasuk"  required data-msg-required="Harus diisi">
    		  	</div>
    		  	<div>
      		    	<label for="inputTahunLulus">Tahun Lulus <span class="required">*</span></label>
      		    	<input type="number" name="inputTahunLulus" id="inputTahunLulus"  required data-msg-required="Harus diisi">
    		  	</div>
    		  	<div>
      		    	<label for="inputIjazah">Upload Ijazah <span class="required">*</span></label>
      		    	<input type="file" name="inputIjazah" id="inputIjazah"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
    		  	</div>
    		  	<div>
    		    	  <label for="inputTranskrip">Upload Transkrip <span class="required">*</span></label>
    		    	  <input type="file" name="inputTranskrip" id="inputTranskrip"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
    		  	</div>

            <!-- PENDIDIKAN 2 -->
            <div id="pendidikan2">
                <div>
                    <label for="inputNamaSekolah2">Nama Sekolah / Universitas Ke 2</label>
                    <input type="text" name="inputNamaSekolah2" id="inputNamaSekolah2">
                </div>
                <div>
                    <label for="inputJurusan2">Jurusan</label>
                    <input type="text" name="inputJurusan2" id="inputJurusan2">
                </div>
                <div>
                    <label for="inputTahunMasuk2">Tahun Masuk</label>
                    <input type="number" name="inputTahunMasuk2" id="inputTahunMasuk2">
                </div>
                <div>
                    <label for="inputTahunLulus2">Tahun Lulus</label>
                    <input type="number" name="inputTahunLulus2" id="inputTahunLulus2">
                </div>
                <div>
                    <label for="inputIjazah2">Upload Ijazah</label>
                    <input type="file" name="inputIjazah2" id="inputIjazah2">
                </div>
                <div>
                    <label for="inputTranskrip2">Upload Transkrip</label>
                    <input type="file" name="inputTranskrip2" id="inputTranskrip2">
                </div>
            </div>
        <input type="button" data-page="3" name="previous" class="previous action-button" value="Sebelumnya" />
        <input type="button" data-page="3" name="next" class="next action-button" value="Selanjutnya" />
        </fieldset>

        <!-- DATA KELUARGA FIELD SET -->  
        <fieldset>
        <h2 class="fs-title">Data Keluarga</h2>
            <div>
                <label for="inputNamaAyah">Nama Ayah <span class="required">*</span></label>
                <input type="text" name="inputNamaAyah" id="inputNamaAyah"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputUsiaAyah">Usia Ayah <span class="required">*</span></label>
                <input type="number" name="inputUsiaAyah" id="inputUsiaAyah"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputPekerjaanAyah">Pekerjaan Ayah</label>
                <input type="text" name="inputPekerjaanAyah" id="inputPekerjaanAyah">
            </div>
            <div>
                <label for="inputNoTelpAyah">No Telepon Ayah</label>
                <input type="text" name="inputNoTelpAyah" id="inputNoTelpAyah">
            </div>
            <div>
                <label for="inputStatusAyah">Status Ayah <span class="required">*</span></label>
                <select name="inputStatusAyah" id="inputStatusAyah"  required data-msg-required="Harus diisi">
                    <option value="" selected>Pilih Status Hidup</option>
                    <option value="Hidup">Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <!-- INPUTAN AYAH TIRI -->
            <div id="ayah_tiri" style="display: none; padding-left: 20px">
                <div>
                    <label for="inputPunyaAyahTiri">Apakah Punya Ayah Tiri <span class="required">*</span></label>
                    <select name="inputPunyaAyahTiri" id="inputPunyaAyahTiri" required required data-msg-required="Harus diisi">
                        <option value="" selected>Pilih</option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak">Tidak Ada</option>
                    </select>
                    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
                </div>
                <div id="punya_ayah_tiri" style="display: none; padding-left: 20px">
                    <div>
                        <label for="inputNamaAyahTiri">Nama Ayah Tiri</label>
                        <input type="text" name="inputNamaAyahTiri" id="inputNamaAyahTiri">
                    </div>
                    <div>
                        <label for="inputUsiaAyahTiri">Usia Ayah Tiri</label>
                        <input type="number" name="inputUsiaAyahTiri" id="inputUsiaAyahTiri">
                    </div>
                    <div>
                        <label for="inputPekerjaanAyahTiri">Pekerjaan Ayah Tiri</label>
                        <input type="text" name="inputPekerjaanAyahTiri" id="inputPekerjaanAyahTiri">
                    </div>
                    <div>
                        <label for="inputNoTelpAyahTiri">No Telepon Ayah Tiri</label>
                        <input type="number" name="inputNoTelpAyahTiri" id="inputNoTelpAyahTiri">
                    </div>
                    <div>
                        <label for="inputStatusAyahTiri">Status Ayah Tiri</label>
                        <select name="inputStatusAyahTiri" id="inputStatusAyahTiri">
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <label for="inputNamaIbu">Nama Ibu <span class="required">*</span></label>
                <input type="text" name="inputNamaIbu" id="inputNamaIbu"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputUsiaIbu">Usia Ibu <span class="required">*</span></label>
                <input type="number" name="inputUsiaIbu" id="inputUsiaIbu"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputPekerjaanIbu">Pekerjaan Ibu</label>
                <input type="text" name="inputPekerjaanIbu" id="inputPekerjaanIbu">
            </div>
            <div>
                <label for="inputNoTelpIbu">No Telepon Ibu</label>
                <input type="number" name="inputNoTelpIbu" id="inputNoTelpIbu" placeholder="Isikan No Telepon Ibu">
            </div>
            <div>
                <label for="inputStatusIbu">Status Ibu <span class="required">*</span></label>
                <select name="inputStatusIbu" id="inputStatusIbu"  required data-msg-required="Harus diisi">
                    <option selected="selected">Pilih Status Hidup</option>
                    <option value="Hidup">Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                </select>
            </div>
            <!-- INPUTAN IBU TIRI -->
            <div id="ibu_tiri" style="display: none; padding-left: 20px">
                <div>
                    <label for="inputPunyaIbuTiri">Apakah Punya Ibu Tiri <span class="required">*</span></label>
                    <select name="inputPunyaIbuTiri" id="inputPunyaIbuTiri" required required data-msg-required="Harus diisi">
                        <option value="" selected>Pilih</option>
                        <option value="Ada">Ada</option>
                        <option value="Tidak">Tidak Ada</option>
                    </select>
                    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
                </div>
                <div id="punya_ibu_tiri" style="display: none; padding-left: 20px">
                    <div>
                        <label for="inputNamaIbuTiri">Nama Ibu Tiri</label>
                        <input type="text" name="inputNamaIbuTiri" id="inputNamaIbuTiri" placeholder="Isikan Nama Ibu Tiri">
                    </div>
                    <div>
                        <label for="inputUsiaIbuTiri">Usia Ibu iri</label>
                        <input type="number" name="inputUsiaIbuTiri" id="inputUsiaIbuTiri" placeholder="Isikan Usia Ibu Tiri Anda">
                    </div>
                    <div>
                        <label for="inputPekerjaanIbuTiri">Pekerjaan Ibu Tiri</label>
                        <input type="text" name="inputPekerjaanIbuTiri" id="inputPekerjaanIbuTiri" placeholder="Isikan Pekerjaan Ibu Tiri">
                    </div>
                    <div>
                        <label for="inputNoTelpIbuTiri">No Telepon Ibu Tiri</label>
                        <input type="number" name="inputNoTelpIbuTiri" id="inputNoTelpIbuTiri" placeholder="Isikan No Telepon Ibu Tiri">
                    </div>
                    <div>
                        <label for="inputStatusIbuTiri">Status Ibu Tiri</label>
                        <select name="inputStatusIbuTiri" id="inputStatusIbuTiri">
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <label for="inputJmlSaudara">Jumlah Saudara</label>
                <input type="number" name="inputJmlSaudara" id="inputJmlSaudara" placeholder="Isikan Jumlah Saudara Anda">
            </div>
        <input type="button" data-page="4" name="previous" class="previous action-button" value="Sebelumnya" />
        <input type="button" data-page="4" name="next" class="next action-button" value="Selanjutnya" />
        </fieldset>

        <!-- DATA LAMARAN FIELD SET -->  

        <fieldset>
        <h2 class="fs-title">Data Lamaran</h2>
            <div>
                <label for="inputPosisi1">Pilih Posisi 1 <span class="required">*</span></label>
                <select name="inputPosisi1" id="inputPosisi1"  required data-msg-required="Harus diisi">
                    <option value="Manajer Keuangan(MK)">Manajer Keuangan(MK)</option>
                    <option value="Manajer Pemasaran(MP)">Manajer Pemasaran(MP)</option>
                    <option value="Koordinator Marketing(KM)">Koordinator Marketing(KM)</option>
                    <option value="Marketing(MR)">Marketing(MR)</option>
                    <option value="Supervisor Telemarketing(ST)">Supervisor Telemarketing(ST)</option>
                    <option value="Telemarketing Buku(TB)">Telemarketing Buku(TB)</option>
                    <option value="Telemarketing Cetak(TC)">Telemarketing Cetak(TC)</option>
                    <option value="Telemarketing Agen(TA)">Telemarketing Agen(TA)</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputPosisi2">Pilih Posisi 2 <span class="required">*</span></label>
                <select name="inputPosisi2" id="inputPosisi2"  required data-msg-required="Harus diisi">
                    <option value="Manajer Keuangan(MK)">Manajer Keuangan(MK)</option>
                    <option value="Manajer Pemasaran(MP)">Manajer Pemasaran(MP)</option>
                    <option value="Koordinator Marketing(KM)">Koordinator Marketing(KM)</option>
                    <option value="Marketing(MR)">Marketing(MR)</option>
                    <option value="Supervisor Telemarketing(ST)">Supervisor Telemarketing(ST)</option>
                    <option value="Telemarketing Buku(TB)">Telemarketing Buku(TB)</option>
                    <option value="Telemarketing Cetak(TC)">Telemarketing Cetak(TC)</option>
                    <option value="Telemarketing Agen(TA)">Telemarketing Agen(TA)</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>         
            <div>
                <label for="inputPenempatan">Penempatan <span class="required">*</span></label>
                <input type="text" name="inputPenempatan" id="inputPenempatan"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>         
            <div>
                <label for="inputGaji">Gaji Yang Diinginkan <span class="required">*</span></label>
                <input type="text" name="inputGaji" id="inputGaji" required data-msg-required="Harus diisi" data-a-sign="Rp. " data-a-dec="," data-a-sep=".">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputKekurangan">Kekurangan Anda <span class="required">*</span></label>
                <textarea name="inputKekurangan" id="inputKekurangan"  required data-msg-required="Harus diisi"></textarea>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputKelebihan">Kelebihan Anda <span class="required">*</span></label>
                <textarea name="inputKelebihan" id="inputKelebihan"  required data-msg-required="Harus diisi"></textarea>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputBisaKendaraan">Apakah Anda Bisa Mengendarai Kendaraan? <span class="required">*</span></label>
                <select name="inputBisaKendaraan" id="inputBisaKendaraan"  required data-msg-required="Harus diisi">
                    <option value="">Pilih Jawaban</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div id="sim" style="display: none; padding-left: 20px">
                <label for="inputPunyaSim">Apakah Anda Punya SIM? <span class="required">*</span></label>
                <select name="inputPunyaSim" id="inputPunyaSim"  required data-msg-required="Harus diisi">
                    <option value="">Pilih Jawaban</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div id="sim_upload" style="display: none; padding-left: 20px">
                <label for="inputUploadSim">Upload SIM Anda (ekstensi .jpg/.pdf</label>
                <input type="file" name="inputUploadSim" id="inputUploadSim">
            </div>
            <div>
                <label for="inputInfoLowongan">Informasi Lowongan Kerja ini darimana?</label>
                <select name="inputInfoLowongan" id="inputInfoLowongan">
                    <option value="">Pilih Jawaban</option>
                    <option value="Teman">Teman</option>
                    <option value="Saudara">Saudara</option>
                    <option value="Website">Website</option>
                    <option value="Media Sosial">Media Sosial</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div>
                <label for="inputKenalan">Siapa yang anda kenal di Andi Offset?</label>
                <input type="text" name="inputKenalan" id="inputKenalan">
            </div>
            <div>
                <label for="inputButaWarna">Apakah Anda Buta Warna <span class="required">*</span></label>
                <select name="inputButaWarna" id="inputButaWarna"  required data-msg-required="Harus diisi">
                    <option value="">Pilih Jawaban</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div id="buta_warna" style="display: none; padding-left: 20px">
                <div>
                    <img src="" id="tampil_gambar_test_buta_warna" width="150px" height="150px">
                    <input type="hidden" id="InputIdGambar" name="InputIdGambar" value="">
                </div>
                <div>
                    <label for="inputJawabanButaWarna">Angka Berapa pada Gambar?</label>
                    <input type="number" name="inputJawabanButaWarna" id="inputJawabanButaWarna" placeholder="Isikan Jawaban Anda Anda" value="">
                </div>
            </div>
            <div>
                <label for="inputPekerjaanSampingan">Apakah Anda Memiliki Pekerjaan Sampingan <span class="required">*</span></label>
                <select name="inputPekerjaanSampingan" id="inputPekerjaanSampingan"  required data-msg-required="Harus diisi">
                    <option value="">Pilih Jawaban</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div id="sampingan" style="display: none; padding-left: 20px">
                <div>
                    <label for="inputNamaUsaha">Nama Usaha Anda</label>
                    <input type="text" name="inputNamaUsaha" id="inputNamaUsaha">
                </div>

                <div>
                    <label for="inputTahunMulai">Tahun Mulai Usaha</label>
                    <input type="number" name="inputTahunMulai" id="inputTahunMulai">
                </div>

                <div>
                    <label for="inputPosisiSampingan">Posisi Anda</label>
                    <input type="text" name="inputPosisiSampingan" id="inputPosisiSampingan">
                </div>

                <div>
                    <label for="inputBidangSampingan">Bidang Anda</label>
                    <input type="text" name="inputBidangSampingan" id="inputBidangSampingan">
                </div>
            </div>
            <div>
                <label for="inputTerlibatKejahatan">Apakah Anda Pernah Terlibat Kejahatan/Urusan Polisi/Narkoba? <span class="required">*</span></label>
                <select name="inputTerlibatKejahatan" id="inputTerlibatKejahatan"  required data-msg-required="Harus diisi">
                    <option value="">Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputUploadSKCK">Upload SKCK <span class="required">*</span></label>
                <input type="file" name="inputUploadSKCK" id="inputUploadSKCK"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div class="checkbox">
                <label for="inputKebiasaanDisukai">Kebiasaan yang dilakukan atau disukai <span class="required">*</span></label>
                <div>
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Membaca" checked>Membaca                    
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Menulis">Menulis
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Traveling">Traveling
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Makan">Makan                  
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Nonton">Nonton
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Bicara">Bicara                  
                    <input type="checkbox" name="inputKebiasaanDisukai[]" value="Mendengar Musik">Mendengar Musik
                </div>
            </div>
            <div>
                <label for="inputMulaiKerja">Jika diterima kapan mulai kerja? <span class="required">*</span></label>
                <input type="text" name="inputMulaiKerja" id="inputMulaiKerja"  required data-msg-required="Harus diisi">
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputKeperluanMendesak">Keperluan mendesak yang bisa dihubungi</label>
                <input type="text" name="inputKeperluanMendesak" id="inputKeperluanMendesak">
            </div>
            <div>
                <label for="inputMoody">Apakah anda pekerja yang moody <span class="required">*</span></label>
                <select name="inputMoody" id="inputMoody"  required data-msg-required="Harus diisi">
                    <option value="">Pilih</option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                </select>
                <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
            </div>
            <div>
                <label for="inputPengalamanHidup">Pengalaman hidup yang paling bersalah (deskripsikan)</label>
                <textarea name="inputPengalamanHidup" id="inputPengalamanHidup"></textarea>
            </div>
        <input type="button" data-page="5" name="previous" class="previous action-button" value="Sebelumnya" />
        <input id="submit" class="hs-button primary large action-button next" type="button" value="Submit">
        </fieldset>

        <!-- FIELDSED UNTUK MENAMPILKAN INFORMASI PENDAFTARAN SUKSES ATAU GAGAL -->
        <fieldset>
            <h2 class="fs-title" id="info-form"></h2>
            <h3 class="fs-subtitle" id="message"></h3>
            <a name="previous" class="previous action-button text-center" id="end-button" style="color: #FFFFFF; width: auto">OK</a>
        </fieldset>
    </form>

    <!-- JAVASCRIPT YANG DIGUNAKAN   -->
  	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  	<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
    <script  src="assets/js/index.js"></script>
    <script  src="assets/js/function.js"></script>
    <script type="text/javascript" src="function/autoNumeric/autoNumeric.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#inputGajiTerakhir').autoNumeric('init');
        $('#inputGaji').autoNumeric('init');
    });
</script>

</body>
</html>
