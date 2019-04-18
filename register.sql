-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2019 at 04:34 PM
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
-- Table structure for table `std_detail`
--

CREATE TABLE `std_detail` (
  `id` int(11) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_stream` varchar(30) NOT NULL,
  `std_number` bigint(15) NOT NULL,
  `std_id` bigint(15) NOT NULL,
  `std_regno` bigint(15) NOT NULL,
  `std_rollno` bigint(15) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_detail`
--

INSERT INTO `std_detail` (`id`, `std_name`, `std_email`, `std_stream`, `std_number`, `std_id`, `std_regno`, `std_rollno`) VALUES
(1, 'SHARAD BAID', 'ammu@gmail.com', 'CSE', 987654321, 5646546555, 766767676767, 55555555555);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_detail`
--
ALTER TABLE `std_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `std_id` (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_detail`
--
ALTER TABLE `std_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
