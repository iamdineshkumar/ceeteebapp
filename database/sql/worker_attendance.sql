-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: g0cckk4
-- Generation Time: Nov 24, 2023 at 08:34 AM
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
-- Table structure for table `worker_attendance`
--

CREATE TABLE `worker_attendance` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `userid` int NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `contractor_id` int NOT NULL,
  `reg_contractor` varchar(25) DEFAULT 'NULL',
  `login_time` timestamp NULL DEFAULT NULL,
  `expected_working_hours` varchar(255) DEFAULT NULL,
  `expected_logout_time` timestamp NULL DEFAULT NULL,
  `logout_time` timestamp NULL DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `status` tinyint NOT NULL COMMENT '1-Open;2-Cancelled;3-Approved;4-Hold',
  `statusRemarks` text,
  `statusDate` timestamp NULL DEFAULT NULL,
  `statusBy` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `worker_attendance`
--
ALTER TABLE `worker_attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `worker_attendance_userid_foreign` (`userid`),
  ADD KEY `worker_attendance_work_type_foreign` (`work_type`),
  ADD KEY `worker_attendance_unit_foreign` (`unit`),
  ADD KEY `worker_attendance_contractor_id_foreign` (`contractor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `worker_attendance`
--
ALTER TABLE `worker_attendance`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `worker_attendance`
--
ALTER TABLE `worker_attendance`
  ADD CONSTRAINT `worker_attendance_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `contractor_master` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_attendance_unit_foreign` FOREIGN KEY (`unit`) REFERENCES `booking_details` (`Booking_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_attendance_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `ceetee_user_creation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `worker_attendance_work_type_foreign` FOREIGN KEY (`work_type`) REFERENCES `contractor_category` (`Category_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
