-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 03:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_entry` date NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `kelamin`, `phone`, `alamat`, `email`, `tgl_entry`) VALUES
('a11530', 'Bagus', 'L', '085293348385', 'Gebang', 'bagus@good.com', '2016-12-02'),
('a11531', 'Lingga', 'L', '085293348384', 'Baron', 'lingga@dr.com', '2014-09-01'),
('a11532', 'Hafidz', 'L', '058233669637', 'Bagor', 'hafidz@live.com', '2014-09-02'),
('a11533', 'Machi', 'P', '085251792568', 'Pace', 'machi@oho.com', '2014-09-03'),
('a11534', 'Merna', 'P', '085264563563', 'Ploso', 'merna@msn.com', '2014-09-04'),
('a11535', 'Idris', 'L', '085287575549', 'Kapas', 'idris@email.com', '2014-09-05'),
('a11536', 'Huda', 'L', '085254578558', 'Pace', 'huda@root.com', '2014-09-06'),
('a11537', 'Moudy', 'L', '085287575753', 'Pace', 'moudy@fb.com', '2014-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` varchar(4) NOT NULL,
  `jml_buku` int(10) NOT NULL,
  `rak_buku` varchar(50) NOT NULL,
  `tgl_entry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `jenis`, `isbn`, `penulis`, `penerbit`, `thn_terbit`, `jml_buku`, `rak_buku`, `tgl_entry`) VALUES
('b877045', 'dig', 'tekno', '979-877-045', 'onno', 'maxikom', '2009', 3, '1', '2014-08-17'),
('b877046', 'geo', 'sipil', '979-877-046', 'elsa', 'maxikom', '2007', 5, '2', '2014-08-09'),
('b877047', 'mec', 'mekanik', '979-877-047', 'erik', 'gramedia', '2008', 4, '4', '2014-08-21'),
('b877048', 'net', 'jaringan', '979-877-048', 'onno', 'maxikom', '2006', 4, '1', '2014-08-31'),
('b877049', 'tav', 'elektro', '979-877-049', 'jono', 'gramedia', '2006', 5, '3', '2014-08-31'),
('b877050', 'tgb', 'sipil', '979-877-050', 'elsa', 'maxikom', '2003', 3, '2', '2014-08-18'),
('b877051', 'tsm', 'motor', '979-877-051', 'erik', 'gramedia', '2009', 5, '4', '2014-08-04'),
('b877052', 'mm', 'elektro', '979-877-052', 'jono', 'modula', '2015', 6, '7', '2016-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `userpass`
--

CREATE TABLE IF NOT EXISTS `userpass` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `sandi` varchar(32) NOT NULL,
  `hak` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userpass`
--

INSERT INTO `userpass` (`id`, `id_user`, `nama`, `nick_name`, `sandi`, `hak`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
