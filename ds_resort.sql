-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 11:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds_resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama`, `no_identitas`, `pekerjaan`, `jurusan`, `instansi`, `email`, `no_telp`) VALUES
(1, 'ewfw', 1325435, 'Bekerja', 'afdgshdg', 'sardsgf', 'easfgd@gmail.com', '123456'),
(2, 'test', 12345, 'Pelajar/Mahasiswa', 'Teknik Informatika', 'UMRAH', 'hgrtj@gmail.com', '123456'),
(3, 'zayus', 0, 'Bekerja', 'sfgdhf', 'srdghf', 'tes@gmail.com', '2142342'),
(4, 'wgqr', 0, 'Bekerja', 'wqge', 'wg', 'tes@gmail.com', '123456'),
(5, 'Miyu', 123, 'Pelajar/Mahasiswa', 'Teknik Informatika', 'UMRAH', 'miyukirin@gmail.com', '822839999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
