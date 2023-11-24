-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cdppm_ckmtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_creation`
--

CREATE TABLE `user_creation` (
  `User_ID` varchar(5) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `LogIn_Name` varchar(25) NOT NULL,
  `Pwd` varchar(25) DEFAULT NULL,
  `User_Role` varchar(25) DEFAULT NULL,
  `Template_Id` int(11) DEFAULT NULL,
  `Template_Name` varchar(100) DEFAULT NULL,
  `User_Department` varchar(25) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `branch` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_creation`
--

INSERT INTO `user_creation` (`User_ID`, `User_Name`, `LogIn_Name`, `Pwd`, `User_Role`, `Template_Id`, `Template_Name`, `User_Department`, `company`, `branch`, `status`, `created_at`, `updated_at`) VALUES
('', 'RAJANI', 'RAJANI', 'fdfdsfdsfs', 'Marketing Manager', 6, NULL, 'Marketing Department', '8', '3015', 1, '2023-09-26 11:50:34', '2023-09-26 11:50:34'),

('114', 'MURUGADAS', 'CP-MSP-008', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Resign person', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('115', 'SASI', 'CP-MSP-009', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Resign person', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('116', 'Sudharsan (msp)', 'CP-MSP-010', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Resign person', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11650', 'JIJU J', 'jiju', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Marketting  Department', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11651', 'VIMAL.M', 'vimalnadh', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Marketting  Department', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11652', 'PRASAD K', 'prasadk', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Marketting  Department', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11654', 'irfan rafi', 'irfanrafi', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Marketting  Department', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11655', 'Greenu.P', 'greenu', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Accounts Departmenrt', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11656', 'HARITHA H', 'GREENHOME', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Project Departmenrt', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11657', 'Kishore.V', 'kishore', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Marketting  Department', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11658', 'Ragesh v', 'ragesh', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Project Departmenrt', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11659', 'SALAHUDIN ALGHAZI', 'GHAZIPM', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Project Departmenrt', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('11660', 'vilsy', 'vilsy', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Accounts Departmenrt', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('117', 'NALINI', 'CP-MTC-011', 'xxxxxxxxxxxxx', 'Operator', 0, '', 'Resign person', NULL, NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_creation`
--
ALTER TABLE `user_creation`
  ADD PRIMARY KEY (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
