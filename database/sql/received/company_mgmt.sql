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
-- Table structure for table `company_mgmt`
--

CREATE TABLE `company_mgmt` (
  `Company_ID` int UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `Company_Name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `Company_Des` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_mgmt`
--

INSERT INTO `company_mgmt` (`Company_ID`, `Date`, `Company_Name`, `Company_Des`, `created_at`, `updated_at`) VALUES
(8, NULL, 'CHATHAMKULAM WEIGH BRIDGE', NULL, '2023-11-23 11:59:20', '2023-11-23 11:59:20'),
(18, NULL, 'CHATHAMKULAM TECHNOLOGIES (AUD', 'N.H BYPASS ROAD', '2023-11-23 11:59:20', '2023-11-23 11:59:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_mgmt`
--
ALTER TABLE `company_mgmt`
  ADD PRIMARY KEY (`Company_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_mgmt`
--
ALTER TABLE `company_mgmt`
  MODIFY `Company_ID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
