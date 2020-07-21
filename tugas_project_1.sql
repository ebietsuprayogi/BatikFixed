-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak_anak`
--

CREATE TABLE `anak_anak` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `ukuran` enum('S','M','L','') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak_anak`
--

INSERT INTO `anak_anak` (`kode_brg`, `nama_brg`, `ukuran`, `harga`) VALUES
('A1', 'Batik 1', 'M', 50000),
('A2', 'Batik 2', 'S', 50000),
('A3', 'Batik 3', 'L', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `batik`
--

CREATE TABLE `batik` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pria`
--

CREATE TABLE `pria` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `ukuran` enum('S','M','L','XL') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pria`
--

INSERT INTO `pria` (`kode_brg`, `nama_brg`, `ukuran`, `harga`) VALUES
('P1', 'Batik 1', 'XL', 85000),
('P2', 'Batik 2', 'L', 90000),
('P3', 'Batik 3', 'S', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `wanita`
--

CREATE TABLE `wanita` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `ukuran` enum('S','M','L','XL') NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wanita`
--

INSERT INTO `wanita` (`kode_brg`, `nama_brg`, `ukuran`, `harga`) VALUES
('W1', 'Batik 1', 'M', 75000),
('W2', 'Batik 2', 'L', 90000),
('W3', 'Batik 3', 'M', 85000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak_anak`
--
ALTER TABLE `anak_anak`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `batik`
--
ALTER TABLE `batik`
  ADD KEY `kode_brg` (`kode_brg`);

--
-- Indexes for table `pria`
--
ALTER TABLE `pria`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `wanita`
--
ALTER TABLE `wanita`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batik`
--
ALTER TABLE `batik`
  ADD CONSTRAINT `batik_ibfk_1` FOREIGN KEY (`kode_brg`) REFERENCES `wanita` (`kode_brg`),
  ADD CONSTRAINT `batik_ibfk_2` FOREIGN KEY (`kode_brg`) REFERENCES `anak_anak` (`kode_brg`),
  ADD CONSTRAINT `batik_ibfk_3` FOREIGN KEY (`kode_brg`) REFERENCES `pria` (`kode_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
