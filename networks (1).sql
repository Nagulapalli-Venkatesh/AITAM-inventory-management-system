-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 11:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `networks`
--

-- --------------------------------------------------------

--
-- Table structure for table `ablock`
--

CREATE TABLE `ablock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `accepts`
--

CREATE TABLE `accepts` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `facid` varchar(225) NOT NULL,
  `item` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `expp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bblock`
--

CREATE TABLE `bblock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cblock`
--

CREATE TABLE `cblock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dblock`
--

CREATE TABLE `dblock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eblock`
--

CREATE TABLE `eblock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fblock`
--

CREATE TABLE `fblock` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inward`
--

CREATE TABLE `inward` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `user` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `cate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `user`, `pass`, `cate`) VALUES
(1, 'admin', 'admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `facid` varchar(225) NOT NULL,
  `item` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `expp` int(11) NOT NULL,
  `priority` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outward`
--

CREATE TABLE `outward` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `infra` varchar(225) NOT NULL,
  `modelname` varchar(225) NOT NULL,
  `serialno` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `purpose` varchar(225) NOT NULL,
  `temper` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rejects`
--

CREATE TABLE `rejects` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `facid` varchar(225) NOT NULL,
  `item` varchar(225) NOT NULL,
  `reason` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestedorder`
--

CREATE TABLE `requestedorder` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `facid` varchar(225) NOT NULL,
  `item` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `expp` int(11) NOT NULL,
  `acre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ablock`
--
ALTER TABLE `ablock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `accepts`
--
ALTER TABLE `accepts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `bblock`
--
ALTER TABLE `bblock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cblock`
--
ALTER TABLE `cblock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dblock`
--
ALTER TABLE `dblock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `eblock`
--
ALTER TABLE `eblock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `fblock`
--
ALTER TABLE `fblock`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `inward`
--
ALTER TABLE `inward`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `outward`
--
ALTER TABLE `outward`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rejects`
--
ALTER TABLE `rejects`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `requestedorder`
--
ALTER TABLE `requestedorder`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ablock`
--
ALTER TABLE `ablock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `accepts`
--
ALTER TABLE `accepts`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bblock`
--
ALTER TABLE `bblock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cblock`
--
ALTER TABLE `cblock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dblock`
--
ALTER TABLE `dblock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eblock`
--
ALTER TABLE `eblock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fblock`
--
ALTER TABLE `fblock`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inward`
--
ALTER TABLE `inward`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `outward`
--
ALTER TABLE `outward`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rejects`
--
ALTER TABLE `rejects`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requestedorder`
--
ALTER TABLE `requestedorder`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
