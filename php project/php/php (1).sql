-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 07:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `dob` text NOT NULL,
  `department` text NOT NULL,
  `designation` text NOT NULL,
  `dateofjoin` text NOT NULL,
  `mobailno` text NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `basicsalary` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `dob`, `department`, `designation`, `dateofjoin`, `mobailno`, `email`, `city`, `basicsalary`, `password`) VALUES
(6, 'vishal singh', '   2018-12-25', 'testing', '     emp', '    1999-10-10', '245221552', 'ankit.rama.yadav@gmail.com', 'MUMBAI', ' 10000', ' 1234567');

-- --------------------------------------------------------

--
-- Table structure for table `salaryslip`
--

CREATE TABLE `salaryslip` (
  `id` int(30) NOT NULL,
  `month` varchar(255) NOT NULL,
  `ca` text NOT NULL,
  `ma` text NOT NULL,
  `ha` text NOT NULL,
  `tax` text NOT NULL,
  `totalleave` text NOT NULL,
  `grosspay` text NOT NULL,
  `netpay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryslip`
--
ALTER TABLE `salaryslip`
  ADD KEY `id` (`id`),
  ADD KEY `month` (`month`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `salaryslip`
--
ALTER TABLE `salaryslip`
  ADD CONSTRAINT `salaryslip_ibfk_1` FOREIGN KEY (`id`) REFERENCES `emp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
