-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2021 at 07:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `dl`
--

CREATE TABLE `dl` (
  `AadhaarNumber` int(12) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `cov` varchar(10) NOT NULL,
  `edate` date NOT NULL,
  `dl_id` int(8) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `dl_status` int(11) NOT NULL DEFAULT 0,
  `dl_issue_date` date NOT NULL,
  `City` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dl`
--

INSERT INTO `dl` (`AadhaarNumber`, `Name`, `cov`, `edate`, `dl_id`, `password`, `mail_id`, `dl_status`, `dl_issue_date`, `City`) VALUES
(2147483647, 'Pakhi Prajapati', 'LMV', '2021-03-21', 8, 'RvocfIer89', 'pakhi@gmail.com', 1, '2021-03-14', 'Bhavnagar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`dl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dl`
--
ALTER TABLE `dl`
  MODIFY `dl_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
