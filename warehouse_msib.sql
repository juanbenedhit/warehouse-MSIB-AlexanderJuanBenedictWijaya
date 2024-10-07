-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 03:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_msib`
--

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` enum('aktif','tidak_aktif') DEFAULT 'aktif',
  `opening_hour` time DEFAULT NULL,
  `closing_hour` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id`, `name`, `location`, `capacity`, `status`, `opening_hour`, `closing_hour`) VALUES
(8, 'Gudang sedap', 'jaididskadad', 100, 'aktif', '01:00:00', '13:00:00'),
(9, 'Gudang Minuman', 'Malang', 1000, 'aktif', '02:00:00', '14:00:00'),
(10, 'Gudang Sepatu', 'Jakarta', 100, 'aktif', '04:00:00', '15:00:00'),
(11, 'Gudang A', 'Bandunga', 100, 'tidak_aktif', '04:00:00', '16:00:00'),
(12, 'Gudang B', 'Semarang', 10000, 'tidak_aktif', '05:07:00', '17:07:00'),
(13, 'asdasd', 'asdadada', 213, 'aktif', '02:09:00', '14:09:00'),
(14, 'ddad', 'wqd', 12321, 'tidak_aktif', '04:10:00', '16:10:00'),
(15, 'gggsa', 'fsaf', 2133, 'aktif', '06:10:00', '18:10:00'),
(16, 'hhds', 'gdsf', 412, 'aktif', '07:10:00', '19:10:00'),
(17, 'zxc', 'zxccz', 4412, 'tidak_aktif', '09:11:00', '21:11:00'),
(18, 'jjf', 'jgfh', 1231, 'tidak_aktif', '21:29:00', '11:11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
