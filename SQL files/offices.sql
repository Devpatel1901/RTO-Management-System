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
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `RTO Code` varchar(4) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `email_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`RTO Code`, `City`, `Location`, `email_id`) VALUES
('GJ01', 'Ahemdabad', 'RTO Office, Subhash Bridge, Sabarmati,Ahmedabad- 380027.', 'rto-trans-ahd@gujarat.gov.in'),
('GJ02', 'Mehsana', 'RTO Office, Near Khari Nadi, Palavasna highway, Mehsana - 384002.', 'rto-trans-meh@gujarat.gov.in'),
('GJ03', 'Rajkot', 'RTO Office, Near Market yard, Rajkot - 360001.', 'rto-trans-raj@gujarat.gov.in'),
('GJ04', 'Bhavnagar', 'RTO Office, Dhanechi Vadla, Bhavnagar - 364003.', 'rto-trans-bhv@gujarat.gov.in'),
('GJ05', 'Surat', 'RTO Office, Pal , Surat - 395009', 'rto-trans-sur@gujarat.gov.in'),
('GJ06', 'Vadodra', 'Nr.Golden Chokdi NH-8, Darjipura,Vadodra - 390006.', 'rto-trans-vad@gujarat.gov.in'),
('GJ07', 'Nadiad', 'Opposite Gov. Circuit house, Mile Road,Nadiad-Kheda -387001.', 'rto-trans-khe@gujarat.gov.in'),
('GJ08', 'Palanpur', 'RTO Office, Ambaji Road,Palanpur (Banaskatha) - 385001.', 'rto-trans-pln@gujarat.gov.in'),
('GJ09', 'Himatnagar', 'Savgadh vijapur bypass Road, Himatnagar,Sabarkantha.', 'rto-trans-hmt@gujarat.gov.in'),
('GJ10', 'Jamnagar', 'Lal Bangla Compound,Jamnagar - 388005.', 'rto-trans-jmn@gujarat.gov.in'),
('GJ11', 'Junagadh', 'B/H -Dr Shubhash Academy,Junagadh - 362001.', 'rto-trans-jun@gujarat.gov.in'),
('GJ12', 'Kutch-Bhuj', 'Near Military Garrison, Madhaper Road,Bhuj - 370000.', 'rto-trans-bhj@gujarat.gov.in'),
('GJ13', 'Surendrana', 'Multi Store Building, Block-C, Ground floor,Kehrali Road, Surendranagar -363001.', 'rto-trans-srn@gujarat.gov.in'),
('GJ14', 'Amreli', 'ARTO Office, Second floor, M. S. Building,Rajmahel Compound. Amreli - 365001.', 'rto-trans-amr@gujarat.gov.in'),
('GJ15', 'Valsad', 'RTO Office, Atakpardi, Dharanpur Road,Valsad - 369001.', 'rto-trans-val@gujarat.gov.in'),
('GJ16', 'Bharuch', 'ARTO Office, Nandevan Chokdi,Bharuch - 392001.', 'arto-trans-brc@gujarat.gov.in'),
('GJ17', 'Godhra', 'ARTO Office, Near Commerce College,Godhra -389001.', 'arto-trans-gdr@gujarat.gov.in'),
('GJ18', 'Gandhinaga', 'ARTO Office, Sec-3A, Near G0 Circle, Gandhinagar.', 'arto-trans-gnr@gujarat.gov.in'),
('GJ19', 'Bharuch', 'ARTO Office, Opposite Power House, Octroy Naka,Bardoli -344601. Dis: Surat.', 'arto-trans-brd@gujarat.gov.in'),
('GJ20', 'Navsari', 'ARTO Office, Italva, Navsari -396445.', 'arto-trans-nvs@gujarat.gov.in'),
('GJ21', 'Rajpipla', 'ARTO Office, Sevasadan Office, Collector Office Building,R No.-13/14, DIS: Narmada - 393145.', 'arto-trans-rjp@gujarat.gov.in'),
('GJ23', 'Anand', 'ARTO Office, Sevasadan Ground, D.S.P. Office,Borsad Chokdi, Anand -388001.', 'arto-trans-and@gujarat.gov.in'),
('GJ24', 'Patan', 'ARTO Office, GIDC Estate Building, No-3,Near Navjivan Hotel, Sidhpur Cross Road,Patan - 384265.', 'arto-trans-ptn@gujarat.gov.in'),
('GJ25', 'Porbandar', 'ARTO Office, Opposite D. S. P. Office, New Kuvara, Vadia Road, Porbandar - 360575.', 'arto-trans-por@gujarat.gov.in'),
('GJ26', 'Vyara', 'ARTO Office, Japanese Farm, Panvadi, Bhenskatri Road, Vyara.', 'arto-trans-vyr@gujarat.gov.in'),
('GJ27', 'Ahmedabad ', 'ARTO Office, Ahmedabad East, Mahadev Nagar Tekra, Vastral, Ahmedabad.', 'artoe-trans-ahd@gujarat.gov.in'),
('GJ30', 'Aahwa', 'ARTO Office, Aahwa, District: Surat.', 'arto-trans-dng@gujarat.gov.in'),
('GJ31', 'Arvalli', 'ARTO Office, Shah Mukundadasa Vithaldas, Public Pharmacy College, Shamlaji Modasa highway, Modasa.', 'arto-trans-arv@gujarat.gov.in'),
('GJ32', 'Veraval', 'ARTO Office, R & B building, Veraval.', 'arto-trans-grs@gujarat.gov.in'),
('GJ33', 'Botad', 'ARTO Office, Government colony, D Colony,Old Province Office,Botad police in front of the parade ground,Pura Road, Botad.', 'arto-trans-btd@gujarat.gov.in'),
('GJ34', 'Chhota Ude', 'ARTO Office, Fatehpura Road, Choota Udepur, Dist: Chhota Udepur-391165.', 'arto-trans-chu@gujarat.gov.in'),
('GJ35', 'Lunawada', 'ARTO Office,Bhadar Canal Colony, Opp: Lunawada Bus Stand, Lunawada, Dist: Mahisagar-389230.', 'arto-trans-mhs@gujarat.gov.in'),
('GJ36', 'Morbi', 'ARTO Office, Old Toll Naka Building, Opp: Uma Resort, Morbi Maliya Bypass, Morbi-363642.', 'arto-trans-mrb@gujarat.gov.in'),
('GJ37', 'Khambhaliy', 'ARTO Office, Opp: New ITI Jamnagar Highway, Khambhaliya-361305.', 'arto-trans-dbd@gujarat.gov.in'),
('GJ38', 'Bavla', 'ARTO Office, Amrutbaug, Nr. Swaminarayan Gate, Bavla, Dist: Ahmedabad.', 'artor-trans-ahd@gujarat.gov.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`RTO Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
