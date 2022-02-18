-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 09:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_nilai`
--

CREATE TABLE `t_nilai` (
  `id_user` int(11) NOT NULL,
  `matematika` int(11) NOT NULL,
  `indonesia` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `inggris` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `saw` float NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_nilai`
--

INSERT INTO `t_nilai` (`id_user`, `matematika`, `indonesia`, `ipa`, `inggris`, `jumlah`, `saw`, `status`) VALUES
(24, 90, 90, 85, 100, 365, 0.913, 1),
(25, 60, 80, 50, 50, 240, 0.6, 1),
(26, 60, 70, 50, 50, 230, 0.575, 1),
(27, 90, 100, 100, 60, 350, 0.875, 1),
(28, 60, 80, 90, 55, 285, 0.713, 1),
(29, 60, 70, 100, 55, 285, 0.713, 1),
(30, 89, 80, 85, 50, 304, 0.76, 1),
(31, 60, 80, 80, 100, 320, 0.8, 1),
(32, 60, 70, 100, 90, 320, 0.8, 1),
(33, 90, 80, 80, 100, 350, 0.875, 1),
(34, 60, 80, 50, 100, 290, 0.725, 1),
(35, 90, 70, 80, 100, 340, 0.85, 1),
(36, 60, 70, 50, 60, 240, 0.6, 1),
(37, 100, 100, 100, 100, 400, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `status_lulus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `status_lulus`) VALUES
(23, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADMIN', 'Bandung', '2000-06-27', 'Laki-Laki', 'Pajajaran', 0),
(24, 'deffinad', 'eeff6c9595dddb947543ee3f541e348ea2270138', 'DEFFIN', 'Bandung', '2000-06-27', 'Laki-Laki', 'Pajajaran', 2),
(25, 'azis', '6163e6a9c5c30ef7ad487969e88c1ed390562f2f', 'AZIS', 'Sumedang', '2000-01-01', 'Laki-Laki', 'Sumedang', 1),
(26, 'ardi', '0bd9da89839528b632e08f7a833c30a77f1480f4', 'ARDI', 'Bandung', '2000-02-02', 'Laki-Laki', 'Bandung', 1),
(27, 'irenanda', 'd8f000846847423e176ed38a50c31528fbdfd2c8', 'IRENANDA', 'Bandung', '1999-10-20', 'Perempuan', 'Kopo', 2),
(28, 'sonda', '5518e531c77b991b936e8262a5261102b1f03b26', 'SONDA', 'Subang', '2000-03-03', 'Perempuan', 'Subang', 1),
(29, 'alyya', '3efd6b0c0cf0d106bd70f81c0a6e5e5383b845cc', 'ALYYA', 'Bandung', '2000-06-04', 'Perempuan', 'Bandung', 2),
(30, 'andin', '6d9441ac5a8e9af5f963f67d5ec8baebf3292697', 'ANDIN', 'Bandung', '2000-04-04', 'Perempuan', 'Bandung', 2),
(31, 'puput', 'a12551c3cc31510fe3a8f535f9fff9f59f524b85', 'PUPUT', 'Majalengka', '2000-05-05', 'Perempuan', 'Majalengka', 2),
(32, 'koes', 'b32f31344197c3647f0ebc173af9bdd3e7d5ce62', 'KOES', 'Bandung', '1999-10-20', 'Perempuan', 'Kopo', 2),
(33, 'fahri', '5b18bb6641ef208740515238db03e90c0b68a521', 'FAHRI', 'Bandung', '2000-02-02', 'Laki-Laki', 'Bandung', 2),
(34, 'argi', 'ea9011a84b5a7fd70ae0d02005207c04bdd367b8', 'ARGI', 'Bandung', '2000-02-02', 'Laki-Laki', 'Bandung', 2),
(35, 'sahrul', 'dcc44147479837bb772800a903c789f2fa27e59a', 'SAHRUL', 'Bandung', '2000-02-02', 'Laki-Laki', 'Bandung', 2),
(36, 'afif', '5399fd5b15fc3c0608ee5ee2d345476e1dc26f92', 'AFIF', 'Bandung', '2000-02-02', 'Laki-Laki', 'Bandung', 1),
(37, 'delan', '41859693029740fa8bd55fdc0e9245c0b48ae8a4', 'DELAN', 'Bandung', '1999-02-12', 'Laki-Laki', 'Kopo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_nilai`
--
ALTER TABLE `t_nilai`
  ADD CONSTRAINT `t_nilai_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
