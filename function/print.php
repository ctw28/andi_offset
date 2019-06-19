<?php 
require('../library/fpdf/fpdf.php');
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

        $pdf->Cell(40,6,'Nama Lengkap',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Nama Pelamar',0,0);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Tempat, Tanggal Lahir',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Tempat/00-00-0000',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Jenis Kelamin',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'L/P',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Alamat KTP',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Alamat KTP',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Alamat Domisili',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Alamat Domisili',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'No. Handphone',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'+620000000000',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Email',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'email@gmail.com',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Status',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Status Pelamar',0,0);


        $pdf->Cell(10,15,'',0,1);

        $pdf->Cell(120,6,'B. DATA PENGALAMAN KERJA',0,0);

        $pdf->Cell(120,7,'',0,1);

        $pdf->Cell(40,6,'Perusahaan',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Nama Perusahaan',0,0);
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Bidang',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'Bidang pengalaman',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Jabatan terakhir',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'jabatan terakhir',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Lama Kerja',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'0 Tahun',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Periode',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'0000-0000',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Gaji Terkahir',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'0000000000',0,0);

        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(40,6,'Alasan Keluar',0,0);
        $pdf->Cell(10,6,': ',0,0);
        $pdf->Cell(30,6,'alasan keluar',0,0);

$pdf->Output();
?>