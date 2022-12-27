-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krs`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `kode_fakultas` varchar(100) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`kode_fakultas`, `nama_fakultas`) VALUES
('FE ', 'Fakultas Ekonomi '),
('FT', 'Fakultas Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` varchar(100) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `kode_fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`, `kode_fakultas`) VALUES
('TIF', 'Teknik Informatika', 'FT');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm_mhs` varchar(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `tgl_lahir_mhs` date NOT NULL,
  `semester_mhs` varchar(100) NOT NULL,
  `jurusan_mhs` varchar(100) NOT NULL,
  `password_mhs` varchar(100) NOT NULL,
  `foto_mhs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm_mhs`, `nama_mhs`, `tgl_lahir_mhs`, `semester_mhs`, `jurusan_mhs`, `password_mhs`, `foto_mhs`) VALUES
('20081010031', 'Ranca Bonges', '2003-02-27', 'SMTR2', 'TIF', '$2y$10$h.NCA4NbQ0KvEWI6Ys072eiSsMCOe57EAVdG0ElVl9pOqSi1DDhE6', 'default.png'),
('20081010032', 'Ahmad Hasby Bik', '2002-05-26', 'SMTR1', 'TIF', '$2y$10$e2ydRFAD2FU/Yse22rWZl.WAoLfz6QWrytkLsSTU78xyPbdRJ31eG', '20081010032.jpg'),
('20081010033', 'Khalid bin Walid', '2004-11-28', 'SMTR2', 'TIF', '$2y$10$e2ydRFAD2FU/Yse22rWZl.WAoLfz6QWrytkLsSTU78xyPbdRJ31eG', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` varchar(100) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks_matkul` varchar(100) DEFAULT NULL,
  `jenis_matkul` varchar(100) DEFAULT NULL,
  `kode_jurusan` varchar(100) DEFAULT NULL,
  `kode_semester` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_matkul`, `nama_matkul`, `sks_matkul`, `jenis_matkul`, `kode_jurusan`, `kode_semester`) VALUES
('ALGSMTR1', 'ALGORITMA', '3', 'teori', 'TIF', 'SMTR1'),
('BIDSMSTR1', 'BAHASA INGGRIS DASAR', '2', 'teori', 'TIF', 'SMTR1'),
('BISMTR1', 'BAHASA INDONESIA', '3', 'teori', 'TIF', 'SMTR1'),
('EKISMSTR1', 'ETIKA & KOMPETENSI INFORMATIKA', '3', 'teori', 'TIF', 'SMTR1'),
('MATKOMSMSTR1', 'MATEMATIKA KOMPUTASI', '3', 'teori', 'TIF', 'SMTR1'),
('PCSLSMTR1', 'PENDIDIKAN PANCASILA', '3', 'teori', 'TIF', 'SMTR1'),
('SISTISMTR1', 'SISTEM & TEKNOLOGI INFORMASI', '3', 'teori', 'TIF', 'SMTR1');

-- --------------------------------------------------------

--
-- Table structure for table `pilih_krs`
--

CREATE TABLE `pilih_krs` (
  `id_krs` int(100) NOT NULL,
  `npm_mhs` varchar(100) NOT NULL,
  `kode_matkul` varchar(100) NOT NULL,
  `semester_krs` varchar(100) NOT NULL,
  `akademik_krs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pilih_krs`
--

INSERT INTO `pilih_krs` (`id_krs`, `npm_mhs`, `kode_matkul`, `semester_krs`, `akademik_krs`) VALUES
(20, '20081010032', 'ALGORITMA', 'Semester 1', '2022'),
(21, '20081010032', 'BAHASA INGGRIS DASAR', 'Semester 1', '2022'),
(22, '20081010032', 'BAHASA INDONESIA', 'Semester 1', '2022'),
(23, '20081010032', 'ETIKA & KOMPETENSI INFORMATIKA', 'Semester 1', '2022'),
(24, '20081010032', 'MATEMATIKA KOMPUTASI', 'Semester 1', '2022'),
(25, '20081010032', 'PENDIDIKAN PANCASILA', 'Semester 1', '2022'),
(26, '20081010032', 'SISTEM & TEKNOLOGI INFORMASI', 'Semester 1', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `kode_semester` varchar(100) NOT NULL,
  `nama_semester` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`kode_semester`, `nama_semester`) VALUES
('SMTR1', 'Semester 1'),
('SMTR2', 'Semester 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `foto_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `alamat_user`, `foto_user`) VALUES
(1, 'Admin', 'admin@admin.ac.id', '$2y$10$wYuTaR0B7fkxRKCAQSF1G.BV7ZjfjGp0xWgt3JCIc7FGETVfQdooy', 'jakarta', 'admin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm_mhs`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `pilih_krs`
--
ALTER TABLE `pilih_krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`kode_semester`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pilih_krs`
--
ALTER TABLE `pilih_krs`
  MODIFY `id_krs` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
