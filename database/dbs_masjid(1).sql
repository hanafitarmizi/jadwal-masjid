-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 02:35 AM
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
-- Database: `dbs_masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `lo` varchar(20) NOT NULL,
  `ln` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `gambar` text NOT NULL,
  `iqomah` int(11) NOT NULL,
  `khotib` varchar(100) NOT NULL,
  `imam` varchar(100) NOT NULL,
  `muadzin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id`, `email`, `password`, `nama`, `alamat`, `lo`, `ln`, `hp`, `gambar`, `iqomah`, `khotib`, `imam`, `muadzin`) VALUES
(1, 'muslimin@gmail.com', 'a5c0ab1522550be3a69dc6dcdf9e9b4fad37793b', 'Masjid Muslimin', 'Jalan Muslimin, No 28, Tanah Datar, Kec. Pekanbaru Kota, Pekanbaru', '101.438309', '0.510440', '', 'txt', 5, 'Ustadz Darmawan', 'Ustadz AA Gym', 'Ustadz Riza');

-- --------------------------------------------------------

--
-- Table structure for table `running_text`
--

CREATE TABLE `running_text` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `running_text`
--

INSERT INTO `running_text` (`id`, `judul`, `isi`) VALUES
(4, 'Nomor Rekening', 'Infak dan donasi dapat anda salurkan melalui rekening Bank Mandiri Syariah- No Rek : 6222-6222-61(An: Masjid Muslimin)-No Rek : 6222-6222-77,An: Masjid Muslimin (Anak Yatim)-No Rek : 6222-6222-77,An: Masjid Muslimin (Sosial, Duafa, MDTA).');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `gambar`) VALUES
(5, 'gambar/slider1.jpg'),
(6, 'gambar/masjid1.jpeg'),
(7, 'gambar/masjid3.jpeg'),
(8, 'gambar/aqsa.jpg'),
(9, 'gambar/haram.jpg'),
(10, 'gambar/nabawi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `running_text`
--
ALTER TABLE `running_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `running_text`
--
ALTER TABLE `running_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
