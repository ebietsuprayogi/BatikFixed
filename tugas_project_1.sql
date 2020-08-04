-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 09:27 AM
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
  `ukuran` varchar(250) NOT NULL,
  `harga` int(10) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pria`
--

CREATE TABLE `pria` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `ukuran` varchar(250) NOT NULL,
  `harga` int(10) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('dhika', '123123aa');

-- --------------------------------------------------------

--
-- Table structure for table `wanita`
--

CREATE TABLE `wanita` (
  `kode_brg` char(8) NOT NULL,
  `nama_brg` char(20) NOT NULL,
  `ukuran` varchar(250) NOT NULL,
  `harga` int(10) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak_anak`
--
ALTER TABLE `anak_anak`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `pria`
--
ALTER TABLE `pria`
  ADD PRIMARY KEY (`kode_brg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wanita`
--
ALTER TABLE `wanita`
  ADD PRIMARY KEY (`kode_brg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
