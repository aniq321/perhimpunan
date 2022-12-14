-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 10:08 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perhimpunan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `student` (
  `no_ndp` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(10) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `no_telefon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `tarikh` varchar(10) NOT NULL,
  `bacaan_doa` text NOT NULL,
  `bacaanbuku_tatatertib` varchar(10) NOT NULL,
  `senaman_ringkas` varchar(30) NOT NULL,
  `public_speaking` varchar(15) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`no_ndp`, `nama`, `no_ic`, `kelas`, `no_telefon`, `email`) VALUES
('23221021', 'AHMAD QAMARUL ANIQ', '020828160169', 'Tpp', '01162190345', 'fnaticniq@gmail.com'),;

--
-- Dumping data for table `work`
--
INSERT INTO `work` (`tarikh`, `bacaan_doa`, `bacaanbuku_tatatertib`, `senaman_ringkas`, `public_speaking`) VALUES
('24/11/2022(KHAMIS)', 'AMIRUL HAKIM', '	LIVANYAH', 'HANIF', 'AINA ATIKAH'),;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`no_ndp`);
COMMIT;

-
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`tarikh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
