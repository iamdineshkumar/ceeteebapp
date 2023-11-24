-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 11:21 AM
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
-- Table structure for table `contractor_category`
--

CREATE TABLE `contractor_category` (
  `Category_ID` varchar(12) NOT NULL,
  `Category_Name` varchar(50) NOT NULL,
  `Print Name` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contractor_category`
--

INSERT INTO `contractor_category` (`Category_ID`, `Category_Name`, `Print Name`, `Description`) VALUES
('CC001', 'Earth Worker', 'Earth Worker', 'Earth Worker'),
('CC002', 'Plumbing', 'Plumbing', 'Plumbing'),
('CC003', 'Electrical', 'Electrical', 'Electrical'),
('CC004', 'Mason', 'Mason', 'Mason'),
('CC005', 'Carpenter', 'Carpenter', 'Carpenter'),
('CC006', 'Painting', 'Painting', 'Painting'),
('CC007', 'Fero Work', 'Fero Work', 'Fero Work'),
('CC008', 'Sub-Contractor', 'Sub-Contractor', 'Sub-Contractor'),
('CC009', 'Full-Contractor', 'Full-Contractor', 'Full-Contractor'),
('CC010', 'JCB Operator', 'JCB Operator', 'JCB Operator'),
('CC011', 'Tipper', 'Tipper', 'Tipper'),
('CC012', 'Others', 'Others', 'Others'),
('CC013', 'Vasthu', 'Vasthu', 'Vasthu Consultant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
