-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 05:47 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE IF NOT EXISTS `doctorinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `doctorQulification` varchar(255) NOT NULL,
  `doctorspecialist` varchar(255) DEFAULT NULL,
  `doctorExprience` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`id`, `name`, `doctorQulification`, `doctorspecialist`, `doctorExprience`) VALUES
(1, 'test121312', 'BAMS', 'MBBS', 4),
(2, 'testdemo', 'BAMS', 'BAMS', 5),
(3, 'testdemo', 'BAMS', 'BAMS', 5),
(4, 'jhghjgjhgjh', 'BAMS', 'BAMS', 5),
(5, 'sdjgklsjgkj', 'MD', 'MD', 4),
(6, 'dgadg', 'MD', 'MD', 1),
(7, 'test121312', 'MD', 'BAMS', 4),
(8, 'test12345', 'BAMS', 'BAMS', 4),
(9, 'abc', 'BAMS', 'BAMS', 4),
(10, 'test23145', 'MBBS', 'MBBS', 5),
(11, 'test23145', 'MBBS', 'MBBS', 5),
(12, 'Puja', 'BAMS', 'BAMS', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
