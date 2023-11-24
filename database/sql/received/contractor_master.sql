-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: g0cckk4
-- Generation Time: Nov 24, 2023 at 08:25 AM
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
-- Table structure for table `contractor_master`
--

CREATE TABLE `contractor_master` (
  `id` int NOT NULL,
  `Contractor_ID` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Contractor_Name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Contractor_J_Date` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Contractor_Category` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Experience` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `previous_History` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `reffered_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Pan_No` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Bank_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `IFSC` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Ac_H_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Address` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `City` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `EMail` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Contractor_Status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Remarks` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `ledger_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Company_ID` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Branch_ID` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractor_master`
--

INSERT INTO `contractor_master` (`id`, `Contractor_ID`, `Contractor_Name`, `Contractor_J_Date`, `Contractor_Category`, `Experience`, `previous_History`, `reffered_by`, `Pan_No`, `Bank_Name`, `IFSC`, `Ac_H_Name`, `Address`, `City`, `EMail`, `Contractor_Status`, `Remarks`, `ledger_name`, `Company_ID`, `Branch_ID`, `created_at`, `updated_at`) VALUES
(1, '100200200422', '701-Aneesh V', '15/06/2017', 'Electrical', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aneesh v ', 'palakkad', 'aneesh123@gmail.com', 'Approved', NULL, '', '', '2', '2023-11-23 11:57:35', '2023-11-23 11:57:35'),
(312, '222', 'Kaladharan R', '2023-03-03', 'Vasthu', NULL, NULL, NULL, NULL, 'Indian Bank', NULL, 'Kaladharan R', 'Vasthu Acharya, Ayyappan KAvu', 'Palakkad', 'chathamkulamk@gmail.com', 'Approved', 'Vasthu Acharya', 'Kaladharan R-222', '8', '3015', '2023-11-23 11:57:35', '2023-11-23 11:57:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractor_master`
--
ALTER TABLE `contractor_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractor_master`
--
ALTER TABLE `contractor_master`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
