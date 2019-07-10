-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 01:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_andioffset`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_buta_warna`
--

CREATE TABLE `data_buta_warna` (
  `id_buta_warna` int(10) UNSIGNED NOT NULL,
  `id_pelamar` int(10) UNSIGNED NOT NULL,
  `buta_warna` char(6) NOT NULL DEFAULT 'Ya',
  `id_gambar` int(10) UNSIGNED NOT NULL,
  `jawaban` int(11) NOT NULL,
  `hasil` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buta_warna`
--

INSERT INTO `data_buta_warna` (`id_buta_warna`, `id_pelamar`, `buta_warna`, `id_gambar`, `jawaban`, `hasil`) VALUES
(22, 119, 'Ya', 3, 8, 'Benar'),
(23, 120, 'Ya', 6, 33, 'Salah'),
(24, 121, 'Ya', 0, 72, 'Salah'),
(97, 201, 'Ya', 0, 0, '-'),
(98, 202, '0', 0, 0, '-'),
(99, 203, '7', 0, 55, 'Salah');

-- --------------------------------------------------------

--
-- Table structure for table `data_gambar_buta_warna`
--

CREATE TABLE `data_gambar_buta_warna` (
  `id_gambar` int(10) UNSIGNED NOT NULL,
  `gambar_path` varchar(100) NOT NULL,
  `nilai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_gambar_buta_warna`
--

INSERT INTO `data_gambar_buta_warna` (`id_gambar`, `gambar_path`, `nilai`) VALUES
(1, '3.jpg', 3),
(2, '6.jpg', 6),
(3, '8.jpg', 8),
(4, '12.jpg', 12),
(5, '15.jpg', 15),
(6, '42.jpg', 42),
(7, '57.jpg', 57),
(8, '74.jpg', 74);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(11) UNSIGNED NOT NULL,
  `id_pelamar` int(11) UNSIGNED NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `usia_ayah` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `no_handphone_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` char(10) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `usia_ibu` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `no_handphone_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` char(10) NOT NULL,
  `jml_saudara` int(10) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_keluarga`, `id_pelamar`, `nama_ayah`, `usia_ayah`, `pekerjaan_ayah`, `no_handphone_ayah`, `status_ayah`, `nama_ibu`, `usia_ibu`, `pekerjaan_ibu`, `no_handphone_ibu`, `status_ibu`, `jml_saudara`) VALUES
(62, 119, 'La Talai', 69, 'Pensiunan', '', 'Meninggal', 'Suriani', 47, 'Ibu Rumah Tangga', '', 'Hidup', 7),
(63, 120, 'Amri Jaya', 55, 'Dosen', '', 'Hidup', 'Ibu Nuni', 50, 'Ibu Rumah Tangga', '', 'Hidup', 4),
(64, 121, 'Ayahnya Amden', 90, 'Guru', '', 'Hidup', 'Maryam', 45, 'Ibu Rumah Tangga', '', 'Hidup', 5),
(144, 201, 'ayah', 44, '', '', 'Hidup', 'Ibu', 44, '', '', 'Hidup', 4),
(145, 202, 'Makbul', 55, '', '', 'Hidup', 'Ibu ferid', 43, '', '', 'Hidup', 3),
(146, 203, 'Ayah', 44, 'pekerjaan ayah', '123', 'Hidup', 'Ibu', 44, 'pekerjaan ibu', '456', 'Meninggal', 4);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga_tiri`
--

CREATE TABLE `data_keluarga_tiri` (
  `id_keluarga_tiri` int(11) NOT NULL,
  `id_keluarga` int(11) UNSIGNED NOT NULL,
  `punya_ayah_tiri` char(5) NOT NULL DEFAULT 'tidak',
  `nama_ayah_tiri` varchar(100) NOT NULL,
  `usia_ayah_tiri` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ayah_tiri` varchar(100) DEFAULT NULL,
  `no_handphone_ayah_tiri` varchar(20) DEFAULT NULL,
  `status_ayah_tiri` char(10) NOT NULL,
  `nama_ibu_tiri` varchar(100) NOT NULL,
  `punya_ibu_tiri` char(5) NOT NULL DEFAULT 'Tidak',
  `usia_ibu_tiri` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ibu_tiri` varchar(100) DEFAULT NULL,
  `no_handphone_ibu_tiri` varchar(20) DEFAULT NULL,
  `status_ibu_tiri` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluarga_tiri`
--

INSERT INTO `data_keluarga_tiri` (`id_keluarga_tiri`, `id_keluarga`, `punya_ayah_tiri`, `nama_ayah_tiri`, `usia_ayah_tiri`, `pekerjaan_ayah_tiri`, `no_handphone_ayah_tiri`, `status_ayah_tiri`, `nama_ibu_tiri`, `punya_ibu_tiri`, `usia_ibu_tiri`, `pekerjaan_ibu_tiri`, `no_handphone_ibu_tiri`, `status_ibu_tiri`) VALUES
(58, 62, 'Ada', 'aaa', 4, '', '', 'Hidup', '', 'Tidak', 0, '', '', 'Hidup'),
(59, 63, 'tidak', '', 0, '', '', 'Hidup', '', 'Tidak', 0, '', '', 'Hidup'),
(60, 64, 'punya', '', 0, '', '', '', '', 'Tidak', 0, '', '', ''),
(140, 144, 'punya', '', 0, '', '', '', '', '', 0, '', '', ''),
(141, 145, 'punya', '', 0, '', '', '', '', '', 0, '', '', ''),
(142, 146, 'punya', '', 0, '', '', '', '', 'Tidak', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_lamaran`
--

CREATE TABLE `data_lamaran` (
  `id_lamaran` int(10) UNSIGNED NOT NULL,
  `id_pelamar` int(10) UNSIGNED NOT NULL,
  `posisi1` varchar(100) NOT NULL,
  `posisi2` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `gaji` varchar(20) NOT NULL,
  `kekurangan` text NOT NULL,
  `kelebihan` text NOT NULL,
  `bisa_kendaraan` char(6) NOT NULL,
  `punya_sim` char(10) NOT NULL,
  `upload_sim` varchar(100) NOT NULL,
  `info_lowongan` varchar(100) DEFAULT NULL,
  `kenalan` varchar(100) DEFAULT NULL,
  `pekerjaan_sampingan` char(6) DEFAULT NULL,
  `nama_usaha` varchar(100) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `posisi_sampingan` varchar(100) DEFAULT NULL,
  `bidang_sampingan` varchar(100) DEFAULT NULL,
  `terlibat_kejahatan` char(6) NOT NULL,
  `upload_skck` varchar(100) NOT NULL,
  `kebiasaan_disukai` varchar(100) NOT NULL,
  `mulai_kerja` varchar(100) NOT NULL,
  `keperluan_mendesak` varchar(100) DEFAULT NULL,
  `moody` char(6) DEFAULT NULL,
  `pengalaman_hidup` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_lamaran`
--

INSERT INTO `data_lamaran` (`id_lamaran`, `id_pelamar`, `posisi1`, `posisi2`, `penempatan`, `gaji`, `kekurangan`, `kelebihan`, `bisa_kendaraan`, `punya_sim`, `upload_sim`, `info_lowongan`, `kenalan`, `pekerjaan_sampingan`, `nama_usaha`, `tahun_mulai`, `posisi_sampingan`, `bidang_sampingan`, `terlibat_kejahatan`, `upload_skck`, `kebiasaan_disukai`, `mulai_kerja`, `keperluan_mendesak`, `moody`, `pengalaman_hidup`) VALUES
(48, 119, 'Telemarketing Buku(TB)', 'Supervisor Telemarketing(ST)', 'Kendari', '100000000', 'Kekurangan', 'Kelebihan', 'Ya', 'Ya', 'sim.jpg', 'Teman', 'Tidak Ada', 'Tidak', '', 0000, '', '', 'Tidak', 'skck.jpg', 'Membaca, Traveling, Makan', 'sekarang', 'Tidak Ada', 'Ya', 'Pengalaman Hidup'),
(49, 120, 'Marketing(MR)', 'Manajer Pemasaran(MP)', 'Makassar', '5000000', 'Kekurangan saya', 'Kelebihan Saya', 'Ya', 'Tidak', '', 'Media Sosial', 'Tidak Ada', 'Tidak', '', 0000, '', '', 'Tidak', 'photo.php.jpg', 'Membaca, Traveling, Mendengar Musik', 'Secepatnya', 'Tidak Ada Keperluan Mendesak', 'Tidak', 'Pengalaman hidup saya adalah'),
(50, 121, 'Telemarketing Buku(TB)', 'Marketing(MR)', 'Raha', '4500000', 'Sedikit Kekurangan', 'Banyak Kelebihan', 'Ya', 'Ya', 'sim.jpg', 'Saudara', 'Semua saya kenal', 'Tidak', '', 0000, '', '', 'Ya', 'skck.jpg', 'Membaca, Mendengar Musik', 'Kalau dihubungi', 'saya sibuk', 'Tidak', 'banyak pengalaman hidup'),
(130, 201, 'Telemarketing Agen(TA)', 'Supervisor Telemarketing(ST)', 'Yogyakarta', '4444', 'kurang', 'lebih', 'Ya', 'Ya', '4s4cEXxBLF8.jpg', 'Media Sosial', 'Rigo', 'Tidak', '', 0000, '', '', 'Ya', 'P2nFFy3XNCs.jpg', 'Membaca, Menulis, Traveling, Mendengar Musik', 'sekarang', 'Tidak Ada', 'Ya', 'banyak'),
(131, 202, 'Telemarketing Agen(TA)', 'Marketing(MR)', 'Kendari', '6767', 'Kekurangan', 'Kelebihan', 'Ya', 'Ya', '8GyT1sPLdxM.jpg', 'Teman', 'Tidak Ada', 'Tidak', '', 0000, '', '', 'Ya', '66BkeCl3yxA.jpg', 'Membaca, Traveling, Nonton', 'sekarang', 'Tidak Ada', 'Ya', 'aetawet'),
(132, 203, 'Koordinator Marketing(KM)', 'Supervisor Telemarketing(ST)', 'Makassar', '7777777777', 'sedikit kekurangan', 'banyak kelebihan', 'Tidak', '', '', 'Lainnya', 'Tidak Ada', 'Ya', 'Wiraswasta', 2010, 'CEO', 'Teknis', 'Tidak', '96Qe7evKD_U.jpg', 'Membaca', 'Menunggu', 'banyak keperluabn', 'Ya', 'selama hidup ini baik baik saja');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id_pendidikan` int(10) UNSIGNED NOT NULL,
  `id_pelamar` int(10) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `ijazah` varchar(100) DEFAULT NULL,
  `transkrip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`id_pendidikan`, `id_pelamar`, `nama_sekolah`, `jurusan`, `tahun_masuk`, `tahun_lulus`, `ijazah`, `transkrip`) VALUES
(66, 119, 'Universitas Halu Oleo', 'Teknik Informatika', 2010, 2015, 'ijazah.jpg', 'transkrip.jpg'),
(67, 120, 'Universitas Halu Oleo', 'S1 Ekonomi Akuntansi', 2010, 2015, '47924100-green-background-images.jpg', 'Stand-By-Me-Doraemon-Iphone-Wallpaper.jpg'),
(68, 121, 'Teknik Mesin', 'Mesin', 2019, 2020, 'foto ila.jpg', 'ket_kerja.jpg'),
(148, 201, 'Universitas Brawijaya', 'Teknik Informatika', 2008, 2013, 'Chibi-killua-zoldyck-2011-35195466-894-894.jpg', 'ejd73p.jpg'),
(149, 202, 'Universitas Halu Oleo', 'Teknik Informatika', 2010, 2015, '2ltsNxajdYM.jpg', '3JtRal9hK7w.jpg'),
(150, 203, 'Universitas Hasanuddin', 'Teknik Sipil', 1998, 2004, '66BkeCl3yxA.jpg', '4fu2qkUxkLs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman`
--

CREATE TABLE `data_pengalaman` (
  `id_pengalaman` int(10) UNSIGNED NOT NULL,
  `id_pelamar` int(10) UNSIGNED NOT NULL,
  `pengalaman` varchar(100) NOT NULL DEFAULT 'Tidak Ada',
  `perusahaan` varchar(100) DEFAULT '-',
  `bidang` varchar(100) DEFAULT '-',
  `jabatan_terakhir` varchar(100) DEFAULT '-',
  `lama_kerja` int(10) UNSIGNED DEFAULT '0',
  `periode` varchar(100) DEFAULT '-',
  `gaji_terakhir` varchar(100) DEFAULT '-',
  `alasan_keluar` text,
  `surat_ket_kerja` varchar(100) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengalaman`
--

INSERT INTO `data_pengalaman` (`id_pengalaman`, `id_pelamar`, `pengalaman`, `perusahaan`, `bidang`, `jabatan_terakhir`, `lama_kerja`, `periode`, `gaji_terakhir`, `alasan_keluar`, `surat_ket_kerja`) VALUES
(91, 119, 'Ya', 'Balai Wilayah Sungai Sulawesi IV Kendari', 'Konsultan Individu', 'Tenaga Ahli Website', 48, '2015-2019', '3500000', 'Masih Kerja', ''),
(92, 120, 'Tidak Ada', '', '', '', 0, '', '', '', ''),
(93, 121, 'Tidak Ada', '', '', '', 0, '', '', '', ''),
(173, 201, 'Tidak Ada', '', '', '', 0, '', '', '', ''),
(174, 202, 'Tidak Ada', '', '', '', 0, '', '', '', ''),
(175, 203, 'Ya', 'Perusahaan', 'bidang', 'jabatan terakhir 1', 44, '2323', '443434', 'tidak keluar', '_66ruSFHraQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_pelamar` int(11) UNSIGNED NOT NULL,
  `nama_pelamar` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `alamat_domisili` text NOT NULL,
  `no_handphone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sudah_dihubungi` char(6) DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`id_pelamar`, `nama_pelamar`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat_ktp`, `alamat_domisili`, `no_handphone`, `email`, `sudah_dihubungi`) VALUES
(119, 'Moh. Bandrigo Talai', 'Kendari', '1992-06-28', 'L', 'Jalan Imam Bonjol Kelurahan Anggilowu', 'Jalan Imam Bonjol Kelurahan Anggilowu (Depan Kantor Lurah Anggilowu)', '085241800852', 'mbandrigo@gmail.com', 'Sudah'),
(120, 'Sri Wahyuni', 'makassar', '1992-05-05', 'P', 'Perdos Unhalu', 'Perdos Unhalu', '088888888', 'srywahyuni@gmail.com', 'Sudah'),
(121, 'Amden Junianto', 'Kendari', '1992-12-06', 'L', 'Anggoeya', 'Anggoeya', '87878', 'amjal@gmail.com', 'Sudah'),
(201, 'Beti Kurniasih', 'Yogyakarta', '2019-07-11', 'P', 'Alamat KTP', 'alamat domisili', '5555', 'beto@gasdf.sdfhk', 'Belum'),
(202, 'Andi Ferid', 'Kendari', '1995-07-10', 'L', 'Saranani', 'Andonohu', '987654321', 'idon@gmail.com', 'Belum'),
(203, 'Hartina', 'makassar', '1998-05-12', 'L', 'Andonohu', 'Puuwatu', '09876565', 'hartina@gmail.com', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `data_status`
--

CREATE TABLE `data_status` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `id_pelamar` int(11) UNSIGNED NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_pasangan` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tempat_lahir_status` varchar(100) DEFAULT NULL,
  `tgl_lahir_status` date DEFAULT NULL,
  `no_handphone_status` varchar(100) DEFAULT NULL,
  `jml_anak` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_status`
--

INSERT INTO `data_status` (`id_status`, `id_pelamar`, `status`, `nama_pasangan`, `pekerjaan`, `tempat_lahir_status`, `tgl_lahir_status`, `no_handphone_status`, `jml_anak`) VALUES
(100, 119, 'Menikah', 'Sri Wahyuni', 'BPTP', 'makassar', '2019-07-09', '08878787887', 7),
(101, 120, 'Belum Menikah', '', '', '', '0000-00-00', '', 0),
(102, 121, 'Belum Menikah', '', '', '', '0000-00-00', '', 0),
(182, 201, 'Menikah', 'Ajib', 'BRI', '', '2019-07-01', '', 3),
(183, 202, 'Belum Menikah', '', '', '', '0000-00-00', '', 0),
(184, 203, 'Menikah', 'nama pasangan', 'pekerjaan pasangan', 'tempat lashi pasangan', '2019-07-24', '5555', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buta_warna`
--
ALTER TABLE `data_buta_warna`
  ADD PRIMARY KEY (`id_buta_warna`),
  ADD KEY `id_lamaran` (`id_pelamar`),
  ADD KEY `id_gambar` (`id_gambar`);

--
-- Indexes for table `data_gambar_buta_warna`
--
ALTER TABLE `data_gambar_buta_warna`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `data_keluarga_tiri`
--
ALTER TABLE `data_keluarga_tiri`
  ADD PRIMARY KEY (`id_keluarga_tiri`),
  ADD KEY `id_keluarga` (`id_keluarga`);

--
-- Indexes for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  ADD PRIMARY KEY (`id_lamaran`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `data_status`
--
ALTER TABLE `data_status`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `id_pelamar` (`id_pelamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_buta_warna`
--
ALTER TABLE `data_buta_warna`
  MODIFY `id_buta_warna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `data_gambar_buta_warna`
--
ALTER TABLE `data_gambar_buta_warna`
  MODIFY `id_gambar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `data_keluarga_tiri`
--
ALTER TABLE `data_keluarga_tiri`
  MODIFY `id_keluarga_tiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  MODIFY `id_lamaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id_pendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  MODIFY `id_pengalaman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_pelamar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `data_status`
--
ALTER TABLE `data_status`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_buta_warna`
--
ALTER TABLE `data_buta_warna`
  ADD CONSTRAINT `data_buta_warna_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_lamaran` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD CONSTRAINT `data_keluarga_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_pribadi` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_keluarga_tiri`
--
ALTER TABLE `data_keluarga_tiri`
  ADD CONSTRAINT `data_keluarga_tiri_ibfk_1` FOREIGN KEY (`id_keluarga`) REFERENCES `data_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  ADD CONSTRAINT `data_lamaran_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_pribadi` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD CONSTRAINT `data_pendidikan_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_pribadi` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD CONSTRAINT `data_pengalaman_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_pribadi` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_status`
--
ALTER TABLE `data_status`
  ADD CONSTRAINT `data_status_ibfk_1` FOREIGN KEY (`id_pelamar`) REFERENCES `data_pribadi` (`id_pelamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
