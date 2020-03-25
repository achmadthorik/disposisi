-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 02:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat2`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` varchar(100) NOT NULL,
  `id_surat_masuk` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ditujukan` varchar(100) NOT NULL,
  `id_sifat` varchar(100) NOT NULL,
  `untuk` varchar(100) NOT NULL,
  `id_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `id_surat_masuk`, `tanggal`, `ditujukan`, `id_sifat`, `untuk`, `id_user`) VALUES
('DS001', 'SM001', '2018-04-11', 'Mr.Budi Sudarsono', '2', 'Diketahui', 'U001'),
('DS002', 'SM001', '2018-04-11', 'Mr.Budi3tyrtyry7sfsdfdsfsf', '3', 'Diketahui', 'U001'),
('DS003', 'SM001', '2018-04-11', 'Mr.Budi[]', '2', 'Diketahui', 'U001'),
('DS004', 'SM001', '2018-04-11', 'Mr.Budi', '1', 'Diketahui', 'U001'),
('DS005', 'SM001', '2018-04-12', 'PAK AGUS KESISWAAN', '1', 'Diketahui', 'U001'),
('DS006', 'SM006', '2018-04-12', 'Mr.Budi KEPALA ELEKTRO', '1', 'Ditindaklanjuti', 'U001'),
('DS007', 'SM001', '2018-04-12', 'ANAS KEPALA PERPUSTAKAAN', '1', 'Diketahui', 'U001'),
('DS008', 'SM001', '2018-04-12', 'Pak Gunaryoko BL', '2', 'Diketahui', 'U001');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` varchar(100) NOT NULL,
  `jenis` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`) VALUES
('1', 'Surat Dinas'),
('2', 'Surat Pribadi');

-- --------------------------------------------------------

--
-- Table structure for table `sifat`
--

CREATE TABLE `sifat` (
  `id_sifat` varchar(100) NOT NULL,
  `nama_sifat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sifat`
--

INSERT INTO `sifat` (`id_sifat`, `nama_sifat`) VALUES
('1', 'Sangat Segera'),
('2', 'Segera'),
('3', 'Penting'),
('4', 'Sangat Rahasia'),
('5', 'Rahasia'),
('6', 'Biasa');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` varchar(100) NOT NULL,
  `id_jenis` varchar(100) NOT NULL,
  `pengirim` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal_entri` date NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `laporan` varchar(200) NOT NULL,
  `id_user` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `id_jenis`, `pengirim`, `tujuan`, `tanggal_surat`, `perihal`, `deskripsi`, `nama_file`, `tanggal_entri`, `kurir`, `laporan`, `id_user`) VALUES
('SK001', '1', 'KETUA LH', 'SMKN 1 JENANGAN', '2018-04-11', 'Perizinan Pembangunan Dapur', 'SURAT YANG ANDA KIRIM SURAT YANG ANDA KIRIM ', 'SK001.jpg', '2018-04-11', 'kurir2', 'Terkirim', ''),
('SK018', '1', 'WAKIL HUMAS RPL', 'SMA 1 PONOROGO', '2018-04-12', 'RAPAT', 'rapat ini membahas kelanjutan sebelumnya', 'SK018.jpg', '2018-04-12', 'kurir', 'Proses Pengiriman', ''),
('SK002', '2', 'KEPALA JURUSAN ELEKTRO', 'SMKN 2 JENANGAN', '2018-04-11', 'Perjanjian Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK002.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK003', '1', 'KEPALA JURUSAN PERMESINAN', 'SMKN 3 JENANGAN', '2018-04-11', 'UnDANGAN', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK003.jpg', '2018-04-11', 'kurir', 'Tertunda', ''),
('SK004', '1', 'KEPALA JURUSAN PENGELASAN', 'SMKN 4 JENANGAN', '2018-04-11', 'Permohonan Maaf', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK004.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK005', '1', 'KEPALA JURUSAN OTOMASI', 'SMKN 5 JENANGAN', '2018-04-11', 'Pertemuan ', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK005.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK006', '2', 'KEPALA HUMAS', 'SMKN 6 JENANGAN', '2018-04-11', 'Pembatalan Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK006.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK007', '1', 'KEPALA KNIP', 'SMKN 7 JENANGAN', '2018-04-11', 'Perpanjangan Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK007.jpg', '2018-04-11', 'kurir', 'Tertunda', ''),
('SK008', '1', 'KEPALA BC', 'SMKN 8 JENANGAN', '2018-04-11', 'Kunjungan Industri', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK008.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK009', '1', 'KETUA LH', 'SMKN 21 JENANGAN', '2018-04-11', 'Perizinan Pembangunan Dapur', 'Surat ini hanya untuk perjanjian didapur yang akan dibangun oleh pak penguji terhormat dari malang', 'SK009.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK010', '2', 'KEPALA JURUSAN ELEKTRO', 'SMKN 22 JENANGAN', '2018-04-11', 'Perjanjian Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK010.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK011', '1', 'KEPALA JURUSAN PERMESINAN', 'SMKN 3 JENANGAN', '2018-04-11', 'UnDANGAN', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK011.jpg', '2018-04-11', 'kurir', 'Tertunda', ''),
('SK012', '1', 'KEPALA JURUSAN PENGELASAN', 'SMKN 24 JENANGAN', '2018-04-11', 'Permohonan Maaf', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK012.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK013', '1', 'KEPALA JURUSAN OTOMASI', 'SMKN 25 JENANGAN', '2018-04-11', 'Pertemuan ', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK013.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK014', '2', 'KEPALA HUMAS', 'SMKN 26 JENANGAN', '2018-04-11', 'Pembatalan Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK014.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK015', '1', 'KEPALA KNIP', 'SMKN 27 JENANGAN', '2018-04-11', 'Perpanjangan Kontrak', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK015.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK016', '1', 'KEPALA BC', 'SMKN 28 JENANGAN', '2018-04-11', 'Kunjungan Industri', 'Surat ini berisi penawaran dalam pelelangan lampu neon yang sudah tidak terpakai', 'SK016.jpg', '2018-04-11', 'kurir', 'Proses Pengiriman', ''),
('SK017', '1', 'PAK BAMBANG RPL', 'SMKN 45 JENANGAN', '2018-04-12', 'PERMOHONAN IZIN', 'SURAT YANG ANDA KIRIM BERISI SEMUA ADA', 'SK017.jpg', '2018-04-12', 'kurir', 'Proses Pengiriman', '');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` varchar(100) NOT NULL,
  `id_jenis` varchar(100) NOT NULL,
  `pengirim` varchar(200) NOT NULL,
  `alamat_pengirim` varchar(200) NOT NULL,
  `nomor_surat` varchar(100) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tanggal_entri` date NOT NULL,
  `id_user` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `id_jenis`, `pengirim`, `alamat_pengirim`, `nomor_surat`, `perihal`, `deskripsi`, `tanggal_surat`, `nama_file`, `tanggal_entri`, `id_user`) VALUES
('SM001', '2', 'PT.PERTAMINA SEJAHTERA', 'SUMATERA', 'AW32522', 'Permohonan Maaf', 'disini kami mengundang anda pada:hari, tanggal = kamis, 8 april 2018tempat          = Sasana Praja', '2018-04-11', 'SM001.jpg', '2018-04-11', 'U001'),
('SM002', '2', 'Bayat', 'Sukoorejo', 'SMK0989', 'PENTING', 'Gatau', '2018-04-11', 'SM002.jpg', '2018-04-11', 'U001'),
('SM005', '1', 'PT. NASIONALRUANG TAMU', 'JL.TEKNIK MESIN, ITS, SUKOLILO', 'AW32522A', 'Penjualan Aset', 'deskripsi 1, dekripsi 2 deskripsi 1, dekripsi ', '2018-04-05', 'SM005.jpg', '2018-04-11', 'U001'),
('SM004', '1', 'PT. NASIONAL ANGKASA3', 'SUMATERA2', 'AW32522', 'Perjanjian Kontrak', 'disini kami mengundang anda pada:', '2018-04-10', 'SM004.jpg', '2018-04-11', 'U001'),
('SM006', '1', 'PT. NASIONAL ANGKASA', 'SUMATERA', 'AW32522', 'Perjanjian Kontrak', 'Deskripsi 1 dan 2 dan 3', '2018-04-11', 'SM006.jpg', '2018-04-11', 'U001'),
('SM007', '2', 'PT. NASIONAL ANGKASA', 'JAWA BARAT', 'AW325223', 'Perjanjian Kontrak Luar Negeri', 'Kami mau izin untuk pulang sekolah', '2018-04-11', 'SM007.jpg', '2018-04-11', 'U001'),
('SM008', '1', 'PT.SINAR DUNIA', 'JALAN RAYA PAGOTAN', 'AW325223DF', 'Perjanjian Kontrak', 'Surat ini dibuat untuk dibaca Surat ini dibuat untuk dibaca ', '2018-04-11', 'SM008.jpg', '2018-04-11', 'U001'),
('SM009', '1', 'PT.PERTAMINA SEJAHTERA3', 'SUMATERA', 'AW32522', 'Permohonan Maaf', 'disini kami mengundang anda pada:hari, tanggal = kamis, 8 april 2018tempat          = Sasana Praja', '2018-03-01', 'SM001.jpg', '2018-03-05', 'U001'),
('SM010', '2', 'Bayat', 'Sukoorejo', 'SMK0989', 'PENTING', 'Gatau', '2018-02-12', 'SM009.jpg', '2017-12-05', 'U001'),
('SM011', '1', 'PT. NASIONALRUANG TAMU4', 'JL.TEKNIK MESIN, ITS, SUKOLILO', 'AW32522A', 'Penjualan Aset', 'deskripsi 1, dekripsi 2 deskripsi 1, dekripsi ', '2017-10-07', 'SM010.jpg', '2017-09-13', 'U001'),
('SM012', '1', 'PT. NASIONAL ANGKASA35', 'SUMATERA2', 'AW32522', 'Perjanjian Kontrak', 'disini kami mengundang anda pada:', '2017-10-11', 'SM011.jpg', '2018-04-11', 'U001'),
('SM013', '1', 'PT. NASIONAL ANGKASA6', 'SUMATERA', 'AW32522', 'Perjanjian Kontrak', 'Deskripsi 1 dan 2 dan 3', '2017-09-06', 'SM012.jpg', '2017-02-01', 'U001'),
('SM014', '2', 'PT. NASIONAL ANGKASA7', 'JAWA BARAT', 'AW325223', 'Perjanjian Kontrak Luar Negeri', 'Kami mau izin untuk pulang sekolah', '2017-01-06', 'SM013.jpg', '2018-04-11', 'U001'),
('SM015', '1', 'PT.SINAR DUNIA8', 'JALAN RAYA PAGOTAN', 'AW325223DF', 'Perjanjian Kontrak', 'Surat ini dibuat untuk dibaca Surat ini dibuat untuk dibaca ', '2018-04-11', 'SM015.jpg', '2018-04-11', 'U001');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` varchar(100) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `FULLNAME` varchar(100) DEFAULT NULL,
  `LEVEL` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `USERNAME`, `PASSWORD`, `FULLNAME`, `LEVEL`) VALUES
('U001', 'ade', 'ade', 'Achmad Torikul Huda', 'Administrator'),
('U002', 'operator', 'operator', 'Tata Usaha', 'Operator'),
('U003', 'kurir', 'kurir', 'Mbah Kurir Dermawan', 'Kurir'),
('U004', 'kurir2', 'kurir2', 'Kurir Berkelas', 'Kurir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`),
  ADD KEY `id_surat_masuk` (`id_surat_masuk`,`id_user`),
  ADD KEY `id_sifat` (`id_sifat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `untuk` (`untuk`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `sifat`
--
ALTER TABLE `sifat`
  ADD PRIMARY KEY (`id_sifat`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_2` FOREIGN KEY (`id_sifat`) REFERENCES `sifat` (`id_sifat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disposisi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`ID_USER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
