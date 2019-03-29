-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 03:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` text NOT NULL,
  `tgl_lahir` text NOT NULL,
  `ipk` varchar(50) NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `tgl_lahir`, `ipk`, `kelas`) VALUES
(69, 'Rizsa El Akbar', '6701174115', '1999-03-25', '3.85', '41-02'),
(70, 'Egan Kusmaya Putra', '6701174110', '1998-11-19', '3.61', '41-02'),
(71, 'Hafizh Aziz', '6701173001', '2000-05-11', '3.1', '41-01'),
(72, 'Fadhil Armando', '6701173211', '1999-10-13', '2.56', '41-01'),
(73, 'Muhamad Yusuf Ramadhan', '6701174969', '1998-01-09', '3.81', '41-02'),
(74, 'Rifqi Riyandi', '6701174254', '1999-08-21', '3.3', '41-02'),
(75, 'Muhammad Amien Fadhillah', '6701174002', '1999-09-03', '2.9', '41-02'),
(76, 'Firza Maulana Nasution', '6701174003', '2000-05-01', '4.0', '41-02'),
(77, 'Fitria Riadathul Chusniah', '6701174034', '1999-02-05', '3.9', '41-02'),
(78, 'Nining Parwati', '6701174304', '1999-04-01', '3.2', '41-02'),
(79, 'Ester Lina Maudya', '6701173222', '1999-06-10', '3.4', '41-02'),
(80, 'Zsavinsky Sulton', '6701174233', '1999-08-17', '2.7', '41-02'),
(81, 'Kamal Ramadhan', '6701173998', '1999-02-29', '2.88', '41-02'),
(82, 'Rizki Saputra Yusuf', '6701174202', '1999-12-18', '2.74', '41-02'),
(83, 'Aan Yuni', '6701174121', '1999-02-21', '3.2', '41-02'),
(84, 'Ikhsan Herdi', '6701176969', '1999-12-21', '3.6', '41-02'),
(85, 'Osama Bin Laden', '670117091', '1999-10-30', '2.8', '41-02'),
(86, 'Erik Lescherr', '6701174123', '1930-01-17', '3.8', '41-02'),
(87, 'Charles Xavier', '6701173462', '1935-06-19', '4.0', '41-02'),
(88, 'Isaac Newton', '6701172222', '1673-03-25', '4.0', '41-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
