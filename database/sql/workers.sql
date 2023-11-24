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
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int UNSIGNED NOT NULL,
  `company_id` int UNSIGNED NOT NULL,
  `branch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` tinyint NOT NULL COMMENT '1-Male;2-Female;3-Other',
  `id_proof_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proof_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `labour_classification` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `bank_account_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_holder_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_branch_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contractor_id` int NOT NULL,
  `mesthiry_id` int UNSIGNED NOT NULL,
  `work_unit` int UNSIGNED NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint NOT NULL COMMENT '1-Open;2-Cancelled;3-Approved;4-Hold',
  `statusRemarks` text COLLATE utf8mb4_unicode_ci,
  `statusDate` timestamp NULL DEFAULT NULL,
  `statusDoneBy` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workers_mobile_unique` (`mobile`),
  ADD KEY `workers_company_id_foreign` (`company_id`),
  ADD KEY `workers_branch_id_foreign` (`branch_id`),
  ADD KEY `workers_labour_classification_foreign` (`labour_classification`),
  ADD KEY `workers_contractor_id_foreign` (`contractor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branch_mgmt` (`Branch_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `workers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company_mgmt` (`Company_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `workers_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `contractor_master` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `workers_labour_classification_foreign` FOREIGN KEY (`labour_classification`) REFERENCES `contractor_category` (`Category_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
