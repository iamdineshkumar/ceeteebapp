-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: g0cckk4
-- Generation Time: Nov 24, 2023 at 08:24 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceeteebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_mgmt`
--

CREATE TABLE `branch_mgmt` (
  `Branch_ID` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Company_ID` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BranchName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Branch Description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BranchType` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `BranchAddress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `BTaluk` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `BDistrict` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `BState` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Country` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Branch Head` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Email` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Date` date DEFAULT NULL,
  `branch_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `branch_details` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_mgmt`
--

INSERT INTO `branch_mgmt` (`Branch_ID`, `Company_ID`, `BranchName`, `Branch Description`, `BranchType`, `BranchAddress`, `BTaluk`, `BDistrict`, `BState`, `Country`, `Branch Head`, `Email`, `Date`, `branch_logo`, `branch_details`, `created_at`, `updated_at`) VALUES
('1009', '8', 'HO', 'HO', '', 'Chathamkulam Chambers, NH Bypass', 'Palakkad', 'Palakkad', 'Kerala - 678007', 'India', NULL, NULL, '2008-04-01', '', 'HO', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('1010', '8', 'Mannarkkad', 'Mannarkkad', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'Mannarkkad', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('1011', '8', 'Palakkad', 'Palakkad', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'Palakkad', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('1012', '8', 'Tirur', 'Tirur', '', '676519', 'Malapuram', 'Malapuram', 'Kerala', 'India', NULL, NULL, '2008-04-01', '', 'Tirur', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('2012', '8', 'TECHNOLOGY FRANCHISE', 'TECHNOLOGY FRANCHISE', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'TECHNOLOGY FRANCHISE', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3012', '8', 'HO CTIPL-001', 'Chathamkulam Technology India Pvt. Ltd.', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'HO CTIPL-001', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3013', '8', 'HO CDPPMCA-002', 'HO CDPPMCA-002', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'HO CDPPMCA-002', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3014', '8', 'FR PKD CPDPL-003', 'Chathamkulam Project Digital Platform Ltd', '', 'Chathamkulam Chambers, NH Bypass', NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'FR PKD CPDPL-003', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3015', '8', 'FR PKD CDPPMCA-004', 'Chathamkulam Digital Platform for Project Management Consultancy', 'CDPPMCA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', 'dist/img/ceetee logo.png', 'FR PKD CDPPMCA-004', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3016', '8', 'FR MKD-005', 'FR MKD-005', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'FR MKD-005', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3017', '8', 'FR MKD CDPPMCA-006', 'FR MKD CDPPMCA-006', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'FR MKD CDPPMCA-006', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('3018', '8', 'CCSPL', 'Chathamkulam Consultancy Services Pvt Ltd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2008-04-01', '', 'Chathamkulam Consultancy Services Pvt Ltd', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('6000', '3', 'Chathamkulam Business School', 'Chathamkulam Business School', '', 'Chathamkulam Business School', 'Palakkad', 'Palakkad', 'Kerala', 'India', '', NULL, '2008-04-01', '', 'Chathamkulam Business School', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('7', '8', 'Pattambi', 'Pattambi', '', 'T P M Kutty Building', 'Pattambi', 'Pattambi', 'kerala - 679303', 'India', 'Krishna Kumar M P', NULL, '2008-04-01', '', 'Pattambi', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('7000', '10', 'LAND', 'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007', '', '', '', '', NULL, NULL, NULL, '', '2008-04-01', '', 'Chathamkulam Chambers , NH Byepass Road, Chandranagar , Palakkad- 678007', '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
('8', '8', 'C K Financiers', 'C K Financiers', '', 'Chathamkulam Chambers', 'Palakkad', 'Palakkad', 'Kerala', 'India', '', NULL, '2008-04-01', '', 'C K Financiers', '2023-11-23 11:59:20', '2023-11-23 11:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_mgmt`
--
ALTER TABLE `branch_mgmt`
  ADD PRIMARY KEY (`Branch_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
