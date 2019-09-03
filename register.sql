-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2019 at 05:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'Admin', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `fees_detail`
--

CREATE TABLE `fees_detail` (
  `dfees` int(50) NOT NULL,
  `rfees` int(11) NOT NULL,
  `efees` int(11) NOT NULL,
  `ppr` int(11) NOT NULL,
  `backlog` int(11) NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_detail`
--

INSERT INTO `fees_detail` (`dfees`, `rfees`, `efees`, `ppr`, `backlog`, `other`) VALUES
(1200, 1000, 1300, 1400, 1500, 1600),
(1200, 1000, 1300, 1400, 1500, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `serial` varchar(10) NOT NULL,
  `std_rollno` bigint(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `sumofrupee` varchar(50) NOT NULL,
  `dfees` int(50) NOT NULL,
  `rfees` int(50) NOT NULL,
  `efees` int(50) NOT NULL,
  `ppfee` int(50) NOT NULL,
  `backlog` int(50) NOT NULL,
  `other` int(50) NOT NULL,
  `payvia` varchar(50) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `checkno` int(50) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `dateofissue` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_detail`
--

CREATE TABLE `std_detail` (
  `serial` varchar(8) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_number` bigint(15) NOT NULL,
  `std_id` bigint(15) NOT NULL,
  `std_regno` bigint(15) NOT NULL,
  `std_rollno` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `std_rollno` (`std_rollno`);

--
-- Indexes for table `std_detail`
--
ALTER TABLE `std_detail`
  ADD PRIMARY KEY (`serial`),
  ADD UNIQUE KEY `std_id` (`std_id`),
  ADD UNIQUE KEY `std_rollno` (`std_rollno`),
  ADD UNIQUE KEY `std_regno` (`std_regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
