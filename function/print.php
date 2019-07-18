<?php 
include('../config/config.php');
require('../library/fpdf/fpdf.php');
include('other-function.php');



if(isset($_GET['id'])){
   if(is_numeric($_GET['id'])){
       $id = $_GET['id'];
   }
   else{
        dataNotExist();
   }
}
else{
   dataNotExist();
}

$query  = "SELECT * FROM data_pribadi dpribadi 
        INNER JOIN data_status dstatus 
                ON dpribadi.id_pelamar = dstatus.id_pelamar 
        INNER JOIN data_pengalaman dpengalaman 
                ON dpribadi.id_pelamar = dpengalaman.id_pelamar 
        INNER JOIN data_pendidikan dpendidikan 
                ON dpribadi.id_pelamar = dpendidikan.id_pelamar 
        INNER JOIN data_keluarga dkeluarga 
                ON dpribadi.id_pelamar = dkeluarga.id_pelamar
        INNER JOIN data_keluarga_tiri dkeluarga_tiri 
                ON dkeluarga.id_keluarga = dkeluarga_tiri.id_keluarga
        INNER JOIN data_lamaran dlamaran 
                ON dpribadi.id_pelamar = dlamaran.id_pelamar
        WHERE dpribadi.id_pelamar = $id 
        LIMIT 1";
$hasil = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($hasil);
if(!$row) {
   dataNotExist();
}



$pdf = new FPDF('p','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Data Pelamar',0,1,'C');
$pdf->SetFont('Arial','B',9);

$pdf->Ln();
$pdf->Cell(5,6,'A. DATA PRIBADI',0,0);
$pdf->Ln();


$pdf->SetFillColor(224,235,255);
$pdf->SetFont('Arial','',9);

$pdf->Cell(40,6,'ID Pelamar','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['id_pelamar'],'',0,'',true);
$pdf->Ln();
$pdf->Cell(40,6,'Nama Lengkap','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['nama_pelamar'],'',0,'',false);
$pdf->Ln();

$pdf->Cell(40,6,'Tempat, Tanggal Lahir','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['tempat_lahir'].', '.tgl_indo($row['tgl_lahir']),'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Jenis Kelamin','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['jenis_kelamin'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Alamat KTP','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['alamat_ktp'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Alamat Domisili','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['alamat_domisili'],'',0,'',false);

$gambar=$row['upload_skck'];
$pdf->Image('http://localhost/andi_offset/assets/images/upload/skck/' . $gambar,170,20,30,40);

$pdf->Ln();

$pdf->Cell(40,6,'No. Handphone','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['no_handphone'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Email','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['email'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Status','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['status'],'',0,'',true);

if($row['status']=='Menikah'){
    $pdf->Ln();
    
    $pdf->Cell(40,6,'Nama Pasangan','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['nama_pasangan'],'',0,'',false);
    
    $pdf->Ln();
    
    $pdf->Cell(40,6,'Pekerjaan','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['pekerjaan'],'',0,'',true);
    
    $pdf->Ln();
    
    $pdf->Cell(40,6,'TTL Pasangan','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['tempat_lahir_status'].', '.tgl_indo($row['tgl_lahir_status']),'',0,'',false);
        
    $pdf->Ln();
    
    $pdf->Cell(40,6,'No. Telp Pasangan','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['no_handphone_status'],'',0,'',true);
    
    $pdf->Ln();
    
    $pdf->Cell(40,6,'Jumlah Anaka','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['jml_anak'],'',0,'',false);

}
$pdf->SetFont('Arial','B',9);

    $pdf->Cell(10,10,'',0,1);
    $pdf->Cell(120,6,'B. DATA PENGALAMAN KERJA',0,0);
    $pdf->Cell(120,7,'',0,1);

if($row['pengalaman']=="Ya"){
$pdf->SetFont('Arial','',9);

    
    $pdf->Cell(40,6,'Perusahaan','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['perusahaan'],'',0,'',true);
    $pdf->Ln();
    
    $pdf->Cell(40,6,'Bidang','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['bidang'],'',0,'',false);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Jabatan terakhir','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['jabatan_terakhir'],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Lama Kerja','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['lama_kerja'].' Bulan','',0,'',false);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Periode','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['periode'],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Gaji Terkahir','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,rupiah($row['gaji_terakhir']),'',0,'',false);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Alasan Keluar','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['alasan_keluar'],'',0,'',true);
}
else{
    
    $pdf->Cell(40,6,'Tidak Ada Pengalaman Kerja','',0,'',false);
}
$pdf->SetFont('Arial','B',9);

$pdf->Cell(10,10,'',0,1);
$pdf->Cell(120,6,'C. DATA PENDIDIKAN',0,0);
$pdf->Cell(120,7,'',0,1);
$pdf->SetFont('Arial','',9);


$pdf->Cell(40,6,'Nama Sekolah','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['nama_sekolah'],'',0,'',true);
$pdf->Ln();

$pdf->Cell(40,6,'Jurusan','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['jurusan'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Tahun Masuk','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['tahun_masuk'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Tahun lulus','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['tahun_lulus'],'',0,'',false);

$pdf->SetFont('Arial','B',9);

$pdf->Cell(10,10,'',0,1);
$pdf->Cell(140,6,'D. DATA KELUARGA',0,0);
$pdf->Ln();
$pdf->SetFont('Arial','',9);

$pdf->Cell(40,6,'Nama Ayah','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['nama_ayah'],'',0,'',true);
$pdf->Ln();

$pdf->Cell(40,6,'Usia','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['usia_ayah'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Pekerjaan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['pekerjaan_ayah'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'No. Telp','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['no_handphone_ayah'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Status Hidup','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['status_ayah'],'',0,'',true);

if($row['punya_ayah_tiri']=='Ada'){
    $pdf->Ln();
    $pdf->Cell(40,6,'Nama Ayah Tiri','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['nama_ayah_tiri'],'',0,'',false);

    $pdf->Ln();
    $pdf->Cell(40,6,'Usia Ayah Tiri','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['usia_ayah_tiri'],'',0,'',true);

    $pdf->Ln();
    $pdf->Cell(40,6,'Pekerjaan Ayah Tiri','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['pekerjaan_ayah_tiri'],'',0,'',false);

    $pdf->Ln();
    $pdf->Cell(40,6,'No. Hp Ayah Tiri','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['no_handphone_ayah_tiri'],'',0,'',true);

}

$pdf->Ln();

$pdf->Cell(40,6,'Nama  ibu','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['nama_ibu'],'',0,'',false);
$pdf->Ln();

$pdf->Cell(40,6,'Usia','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['usia_ibu'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Pekerjaan','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['pekerjaan_ibu'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'No. Telp','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['no_handphone_ibu'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Status Hidup','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['status_ibu'],'',0,'',false);

if($row['punya_ibu_tiri']=='Ada'){
    $pdf->Ln();
    
    $pdf->Cell(40,6,'Nama Ibu Tiri','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['nama_ibu_tiri'],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Usia Ibu Tiri','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['usia_ibu_tiri'],'',0,'',false);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Pekerjaan Ibu Tiri','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row[' pekerjaan_ibu_tiri '],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'No. Hp Ibu Tiri','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row[' no_handphone_ibu_tiri '],'',0,'',false);

}



$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Arial','B',9);

$pdf->Cell(120,6,'E. DATA LAMARAN',0,0);
$pdf->Cell(120,7,'',0,1);

$pdf->SetFont('Arial','',9);

$pdf->Cell(40,6,'Posisi 1','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['posisi1'],'',0,'',true);
$pdf->Ln();

$pdf->Cell(40,6,'Posisi 2','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['posisi2'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Penempatan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['penempatan'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Gaji','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,rupiah($row['gaji']),'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Kekurangan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['kekurangan'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Kelebihan','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['kelebihan'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Bisa Kendaraan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['bisa_kendaraan'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Punya Sim','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['punya_sim'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Info Lowongan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['info_lowongan'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Kenalan','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['kenalan'],'',0,'',false);

if($row['pekerjaan_sampingan']=='Ada'){

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Nama Usaha','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['nama_usaha'],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Tahun Mulai','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['tahun_mulai'],'',0,'',false);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Posisi Sampingan','',0,'',true);
    $pdf->Cell(5,6,': ','',0,'',true);
    $pdf->Cell(140,6,$row['posisi_sampingan'],'',0,'',true);

    $pdf->Ln();
    
    $pdf->Cell(40,6,'Bidang Sampingan','',0,'',false);
    $pdf->Cell(5,6,': ','',0,'',false);
    $pdf->Cell(140,6,$row['bidang_sampingan'],'',0,'',false);    
}


$pdf->Ln();

$pdf->Cell(40,6,'Terlibat Kejahatan','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['terlibat_kejahatan'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Kebiasaan Disukai','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['kebiasaan_disukai'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Mulai Kerja','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['mulai_kerja'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Keperluan Mendesak','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['keperluan_mendesak'],'',0,'',false);

$pdf->Ln();

$pdf->Cell(40,6,'Moody','',0,'',true);
$pdf->Cell(5,6,': ','',0,'',true);
$pdf->Cell(140,6,$row['moody'],'',0,'',true);

$pdf->Ln();

$pdf->Cell(40,6,'Pengalaman Hidup','',0,'',false);
$pdf->Cell(5,6,': ','',0,'',false);
$pdf->Cell(140,6,$row['pengalaman_hidup'],'',0,'',false);


$pdf->Output();
?>