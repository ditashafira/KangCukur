-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 07:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kangcukur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(52) NOT NULL,
  `pw_admin` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barbershop`
--

CREATE TABLE `barbershop` (
  `id_tcukur` int(11) NOT NULL,
  `statusbuka` varchar(11) NOT NULL,
  `nm_tcukur` varchar(52) NOT NULL,
  `alamat` varchar(355) NOT NULL,
  `telp_tcukur` varchar(20) NOT NULL,
  `email` varchar(52) NOT NULL,
  `password` varchar(11) NOT NULL,
  `koor` varchar(510) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barbershop`
--

INSERT INTO `barbershop` (`id_tcukur`, `statusbuka`, `nm_tcukur`, `alamat`, `telp_tcukur`, `email`, `password`, `koor`) VALUES
(9, 'Buka', 'Bagus', 'Prm. Pondok Mutiara', '087855826655', 'andaru08@gmail.com', 'a', 'https://www.google.com/maps/@-8.200289999999999,113.69720149999999'),
(10, 'Tutup', 'Gandhy', 'proboloinggo', '087855827777', 'aruuyye@gmail.com', 'sas', 'https://www.google.com/maps/@-8.2002366,113.69718759999999'),
(11, 'Buka', 'Andaru Bagus', 'Kencong', '087855829999', 'andru3168@gmail.com', 'a', ''),
(12, 'Buka', 'Andaru', 'Prm. Pondok Mutiara', '087855834343', 'gnhapok@gmail.com', 'a', 'https://www.google.com/maps/@-8.2002039,113.697234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_book` int(11) NOT NULL,
  `id_tcukur` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `pemesan` varchar(255) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nm_pelanggan` varchar(52) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(52) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nm_pelanggan`, `no_telp`, `email`, `password`) VALUES
(14, 'Andaru', '6287855826655', 'andaru08@gmail.com', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barbershop`
--
ALTER TABLE `barbershop`
  ADD PRIMARY KEY (`id_tcukur`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_book`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barbershop`
--
ALTER TABLE `barbershop`
  MODIFY `id_tcukur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
