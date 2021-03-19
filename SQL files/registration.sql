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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `AadhaarNumber` int(12) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cov` varchar(15) NOT NULL,
  `model` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `rdate` date NOT NULL,
  `r_id` int(9) NOT NULL,
  `reg_status` int(11) NOT NULL DEFAULT 0,
  `reg_issue_date` date NOT NULL,
  `reg_expiry_date` date NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `Gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`AadhaarNumber`, `name`, `password`, `cov`, `model`, `company`, `rdate`, `r_id`, `reg_status`, `reg_issue_date`, `reg_expiry_date`, `mail_id`, `Gender`) VALUES
(2147483647, 'Kruti Patel', 'Kruti', 'LMV', 'Access125', 'Suzuki', '2021-03-13', 604, 0, '0000-00-00', '0000-00-00', 'Kruti@abc.com', 'Female'),
(1234567891, 'Parth Shah', 'abc', 'LMV', 'Activa', 'Honda', '2021-02-02', 25678941, 1, '2021-03-13', '2041-03-13', 'Parth@abc.com', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25678942;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
