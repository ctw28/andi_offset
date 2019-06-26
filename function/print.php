<?php 
include('../config/config.php');
require('../library/fpdf/fpdf.php');

function dataNotExist(){
    echo "DATA TIDAK DITEMUKAN";
    die();                
}

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
        INNER JOIN data_pengalaman dpengalaman 
                ON dpribadi.id_pelamar = dpengalaman.id_pelamar 
        INNER JOIN data_pendidikan dpendidikan 
                ON dpribadi.id_pelamar = dpendidikan.id_pelamar 
        INNER JOIN data_keluarga dkeluarga 
                ON dpribadi.id_pelamar = dkeluarga.id_pelamar
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

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,6,'A. DATA PRIBADI',0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(4,6,'',0,0);

$pdf->Cell(40,6,'ID Pelamar',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['id_pelamar'],0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(4,6,'',0,0);
$pdf->Cell(40,6,'Nama Lengkap',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['nama_pelamar'],0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Tempat, Tanggal Lahir',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['tempat_lahir'].', '.$row['tgl_lahir'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Jenis Kelamin',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['jenis_kelamin'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Alamat KTP',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['alamat_ktp'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Alamat Domisili',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['alamat_domisili'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'No. Handphone',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['no_handphone'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Email',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['email'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Status',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,'Status Pelamar',0,0);


$pdf->Cell(10,15,'',0,1);



if($row['pengalaman']=="Ya"){

        $pdf->Cell(120,6,'B. DATA PENGALAMAN KERJA',0,0);

        $pdf->Cell(120,7,'',0,1);

        $pdf->Cell(40,6,'Perusahaan',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['perusahaan'],0,0);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Bidang',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['bidang'],0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Jabatan terakhir',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['jabatan_terakhir'],0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Lama Kerja',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['lama_kerja'].' Bulan',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Periode',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['periode'],0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Gaji Terkahir',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Rp. '.$row['gaji_terakhir'],0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Alasan Keluar',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,$row['alasan_keluar'],0,0);
}

$pdf->Cell(10,15,'',0,1);

$pdf->Cell(120,6,'C. DATA PENDIDIKAN',0,0);

$pdf->Cell(120,7,'',0,1);

$pdf->Cell(40,6,'Nama Sekolah',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['nama_sekolah'],0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Jurusan',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['jurusan'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Tahun Masuk',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['tahun_masuk'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Tahun lulus',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['tahun_lulus'],0,0);




$pdf->Cell(10,15,'',0,1);

$pdf->Cell(120,6,'D. DATA KELUARGA',0,0);
$pdf->Cell(120,7,'',0,1);
$pdf->Cell(40,6,'Nama Ayah',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['nama_ayah'],0,0);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Usia',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['usia_ayah'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Pekerjaan',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['pekerjaan_ayah'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'No. Telp',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['no_handphone_ayah'],0,0);

$pdf->Cell(10,7,'',0,1);
$pdf->Cell(40,6,'Status Hidup',0,0);
$pdf->Cell(10,6,': ',0,0);
$pdf->Cell(30,6,$row['status_ayah'],0,0);




$pdf->Output();
?>