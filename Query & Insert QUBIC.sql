-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 01:40 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(25) NOT NULL,
  `no_admin` int(12) NOT NULL,
  `email_admin` varchar(25) NOT NULL,
  `alamat_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `no_admin`, `email_admin`, `alamat_admin`) VALUES
('00001', 'Ahmad', 1, 'ahmad@gmail.com', 'Jl. Cikoneng no. 20'),
('00002', 'Arie', 2, 'arieeira@gmail.com', 'Sukabierus'),
('0003', 'Arum', 3, 'aarruumm@gmail.com', 'California'),
('0004', 'Valianda', 4, 'valiandafh@gmail.com', 'sukapura');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id_player` varchar(10) NOT NULL,
  `nama_player` varchar(25) NOT NULL,
  `alamat_player` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email_player` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id_player`, `nama_player`, `alamat_player`, `no_hp`, `email_player`) VALUES
('10015', 'Azhar', 'Sukabumi', 7440456, 'azharmotovlog@gmail.com'),
('10025', 'Ayu', 'Jakarta', 7410305, 'ayuayu@gmail.com'),
('10055', 'Mura Anmuy', 'Jawa', 7448059, 'ayum@gmail.com'),
('10067', 'Eira', 'Cimahi', 7875678, 'eirailfar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `id_score` varchar(10) NOT NULL,
  `nilai_score` int(5) NOT NULL,
  `history_score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id_score`, `nilai_score`, `history_score`) VALUES
('50001', 70, 70),
('50002', 85, 85);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_quiz` varchar(10) NOT NULL,
  `soal_quiz` varchar(100) NOT NULL,
  `jawaban_quiz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_quiz`, `soal_quiz`, `jawaban_quiz`) VALUES
('70001', 'berapakah hasil dari 1+1?', '2'),
('70002', 'Berapakah hasil dari 5+5?', '10'),
('70076', 'selesaikan perhitungan berikut: 80x10=...?', '800'),
('70087', 'Selesaikan perhitungan berikut ini: 20+(50-3) = ', '67');

-- --------------------------------------------------------

--
-- Table structure for table `tergantung`
--

CREATE TABLE `tergantung` (
  `id_score2` varchar(10) NOT NULL,
  `waktu_jawab` int(5) NOT NULL,
  `get_score` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tergantung`
--

INSERT INTO `tergantung` (`id_score2`, `waktu_jawab`, `get_score`) VALUES
('40001', 3, '100'),
('40005', 5, '90'),
('40010', 10, '85'),
('40020', 20, '70'),
('40030', 30, '50');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `id_level` varchar(10) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`id_level`, `nama_level`) VALUES
('01', 'Easy'),
('02', 'Medium'),
('03', 'Hard'),
('04', 'Very Hard'),
('05', 'Expert');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_time` varchar(10) NOT NULL,
  `total_waktu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_time`, `total_waktu`) VALUES
('30005', 5),
('30012', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Indexes for table `tergantung`
--
ALTER TABLE `tergantung`
  ADD PRIMARY KEY (`id_score2`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_time`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
