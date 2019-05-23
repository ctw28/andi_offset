-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 02:32 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
  `id_lamaran` int(10) UNSIGNED NOT NULL,
  `id_gambar` int(10) UNSIGNED NOT NULL,
  `jawaban` int(11) NOT NULL,
  `hasil` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'assets/images/buta-warna/3.jpg', 3),
(2, 'assets/images/buta-warna/6.jpg', 6),
(3, 'assets/images/buta-warna/8.jpg', 8),
(4, 'assets/images/buta-warna/12.jpg', 12),
(5, 'assets/images/buta-warna/15.jpg', 15),
(6, 'assets/images/buta-warna/42.jpg', 42),
(7, 'assets/images/buta-warna/57.jpg', 57),
(8, 'assets/images/buta-warna/74.jpg', 74);

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

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga_tiri`
--

CREATE TABLE `data_keluarga_tiri` (
  `id_keluarga_tiri` int(11) NOT NULL,
  `id_keluarga` int(11) UNSIGNED NOT NULL,
  `nama_ayah_tiri` varchar(100) NOT NULL,
  `usia_ayah_tiri` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ayah_tiri` varchar(100) DEFAULT NULL,
  `no_handphone_ayah_tiri` varchar(20) DEFAULT NULL,
  `status_ayah_tiri` char(10) NOT NULL,
  `nama_ibu_tiri` varchar(100) NOT NULL,
  `usia_ibu_tiri` int(10) UNSIGNED DEFAULT NULL,
  `pekerjaan_ibu_tiri` varchar(100) DEFAULT NULL,
  `no_handphone_ibu_tiri` varchar(20) DEFAULT NULL,
  `status_ibu_tiri` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `data_buta_warna`
--
ALTER TABLE `data_buta_warna`
  ADD PRIMARY KEY (`id_buta_warna`),
  ADD KEY `id_lamaran` (`id_lamaran`),
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
  MODIFY `id_buta_warna` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_gambar_buta_warna`
--
ALTER TABLE `data_gambar_buta_warna`
  MODIFY `id_gambar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `data_keluarga_tiri`
--
ALTER TABLE `data_keluarga_tiri`
  MODIFY `id_keluarga_tiri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `data_lamaran`
--
ALTER TABLE `data_lamaran`
  MODIFY `id_lamaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id_pendidikan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  MODIFY `id_pengalaman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_pelamar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `data_status`
--
ALTER TABLE `data_status`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_buta_warna`
--
ALTER TABLE `data_buta_warna`
  ADD CONSTRAINT `data_buta_warna_ibfk_1` FOREIGN KEY (`id_lamaran`) REFERENCES `data_lamaran` (`id_lamaran`) ON DELETE CASCADE ON UPDATE CASCADE;

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
