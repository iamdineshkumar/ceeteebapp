-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:17 AM
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
-- Table structure for table `ceetee_user_creation`
--

CREATE TABLE `ceetee_user_creation` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(15) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `username` varchar(200) NOT NULL,
  `login_name` int(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password2` varchar(50) DEFAULT NULL,
  `password3` varchar(50) DEFAULT NULL,
  `remarks` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `action` tinyint(1) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ceetee_user_creation`
--
ALTER TABLE `ceetee_user_creation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ceetee_user_creation`
--
ALTER TABLE `ceetee_user_creation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ceetee_user_creation`
--
ALTER TABLE `ceetee_user_creation`
  ADD CONSTRAINT `ceetee_user_creation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `workers` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
