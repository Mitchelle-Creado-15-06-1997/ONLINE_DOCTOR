-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2017 at 07:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `phone`, `message`) VALUES
('admin', 'creadomitchellee@gma', 987654321, 'bbvtv\r\n'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `docprofile`
--

CREATE TABLE `docprofile` (
  `name` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `spec` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `spec` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`fname`, `lname`, `email`, `spec`, `pass`, `cpass`) VALUES
('', '', '', '', '', ''),
('mitchelle', 'creado', 'creado@gmail.com', 'opd', 'mars', 'mars');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `doccont` varchar(5000) NOT NULL,
  `extn` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('abc', 'abc@gmail.com', 'jggjg'),
('mira', 'mira@gmail.com', 'hi'),
('mitchelle', 'creadomitchellee@gma', 'HI');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `adhar` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `cpass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fname`, `lname`, `email`, `adhar`, `pass`, `cpass`) VALUES
('rhea', 'butala', 'butala@gmail.com', '123456789', 'mmm', 'mmm'),
('sarah', 'creado', 'sara@gmail.com', '123456789', 'ooo', 'ooo');

-- --------------------------------------------------------

--
-- Table structure for table `patprofile`
--

CREATE TABLE `patprofile` (
  `name` varchar(30) NOT NULL,
  `dise` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patprofile`
--

INSERT INTO `patprofile` (`name`, `dise`, `age`) VALUES
('maudie', '', '80');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `name` varchar(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, 'document', 'pdforimg', '1000'),
(2, 'document', 'pdforimg', '1000'),
(3, 'document', 'pdforimg', '1000'),
(4, '83148-', '', ''),
(5, '90759-', '', ''),
(6, '29960-', '', ''),
(7, 'documents', 'pdf', '500'),
(8, 'documents', 'pdf', '500');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`photo`) VALUES
(0x434f4c4c454354494f4e2e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(0x434f4c4c454354494f4e2e706e67),
(0x434f4c4c454354494f4e2e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(0x652d79616e7472612e706e67),
(''),
(''),
(0x434f4c4c454354494f4e2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `txtDate` varchar(30) NOT NULL,
  `txtTime` varchar(30) NOT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pname`, `dname`, `email`, `tel`, `txtDate`, `txtTime`, `status`) VALUES
(1, 'richa', 'dr.butala', 'rb@gmail.com', '987654321', '12/12/12', '13/13/13', '1'),
(2, 'mitchelle', 'ngyf', 'ngftyf@jhgjkhg', '25464687', '2017-10-19', '22:21', NULL),
(3, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(4, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(5, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(6, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(7, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(8, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(9, 'mitchelle', 'MGUY', 'NFY@HVJH', 'HGFY', '2017-10-19', '11:11', NULL),
(10, 'mitchelle', 'ngyf', 'creadomitchellee@gma', '25464687', '2017-10-19', '19:59', NULL),
(11, 'mitchelle', 'ngyf', 'creadomitchellee@gma', '25464687', '2017-10-19', '19:59', NULL),
(12, 'mitchelle', 'ngyf', 'creadomitchellee@gma', '25464687', '2017-10-19', '19:59', NULL),
(13, 'mitchelle', 'ngyf', 'creadomitchellee@gma', '25464687', '2017-10-19', '19:59', NULL),
(14, 'mitchelle', 'ngyf', 'creadomitchellee@gma', '25464687', '2017-10-19', '19:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
