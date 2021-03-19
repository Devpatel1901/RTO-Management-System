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
-- Table structure for table `llr`
--

CREATE TABLE `llr` (
  `AadhaarNumber` int(12) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `cov` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `llr_id` int(9) NOT NULL,
  `llr_status` int(11) NOT NULL DEFAULT 0,
  `llr_reg_date` date NOT NULL,
  `llr_expiry_date` date NOT NULL,
  `City` varchar(15) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `llr`
--

INSERT INTO `llr` (`AadhaarNumber`, `Name`, `cov`, `password`, `email_id`, `llr_id`, `llr_status`, `llr_reg_date`, `llr_expiry_date`, `City`, `Address`, `Gender`) VALUES
(2147483647, 'Pakhi Prajapati', 'LMV', 'ZfDsDvQNl9mTMmq', 'pakhi@gmail.com', 1, 1, '2021-02-11', '2021-08-08', 'Bhavnagar', 'Bhavmagar', 'Female'),
(21345512, 'Dhruv Sakariya', 'LMV', 'BE3Z2xDsChsNTvU', 'Dhruv.sa@gmail.com', 2, 0, '0000-00-00', '0000-00-00', 'Porbandar', 'Porbanadar', 'Male'),
(2147483647, 'Manoj Thakkar', 'LMV', 'qNYMJhLcdl5Ss8u', 'manoj@gmail.com', 9, 0, '0000-00-00', '0000-00-00', 'Godhra', 'Godhra', 'Male'),
(2147483647, 'sasdasd', 'LMV', 'Ck8cGe7DKBn0ob6', 'abc@xya.com', 10, 1, '2021-03-16', '2021-09-12', 'Palanpur', 'Palanpur', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `llr`
--
ALTER TABLE `llr`
  ADD PRIMARY KEY (`llr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `llr`
--
ALTER TABLE `llr`
  MODIFY `llr_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
