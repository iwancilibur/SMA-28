-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 10:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irciot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namadevice` varchar(100) NOT NULL,
  `suhu` int(30) NOT NULL,
  `kelembaban` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`waktu`, `namadevice`, `suhu`, `kelembaban`) VALUES
('2020-11-21 03:28:19', 'iwancilibur', 26, 76);

-- --------------------------------------------------------

--
-- Table structure for table `tb_simpan`
--

CREATE TABLE `tb_simpan` (
  `no` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `namadevice` varchar(100) NOT NULL,
  `suhu` int(30) NOT NULL,
  `kelembaban` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_simpan`
--

INSERT INTO `tb_simpan` (`no`, `waktu`, `namadevice`, `suhu`, `kelembaban`) VALUES
(801, '2020-11-21 03:28:16', 'iwancilibur', 28, 75),
(802, '2020-11-21 03:28:18', 'iwancilibur', 27, 70),
(803, '2020-11-21 03:28:19', 'iwancilibur', 26, 76);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_simpan`
--
ALTER TABLE `tb_simpan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_simpan`
--
ALTER TABLE `tb_simpan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=804;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
