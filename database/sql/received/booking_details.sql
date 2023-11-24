-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 11:21 AM
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
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `Booking_ID` varchar(10) NOT NULL,
  `Booking_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Lead_ID` varchar(12) NOT NULL,
  `Customer_ID` varchar(50) DEFAULT NULL,
  `BCustomer_Name1` varchar(50) NOT NULL,
  `BCustomer_Name2` varchar(25) DEFAULT NULL,
  `BCustomer_Address` varchar(100) DEFAULT NULL,
  `BCustomer_PostOffice` varchar(25) DEFAULT NULL,
  `Bcustomer_District` varchar(25) DEFAULT NULL,
  `BCustomer_State` varchar(25) DEFAULT NULL,
  `Mobile_Number` bigint(20) DEFAULT NULL,
  `Telephone` bigint(20) DEFAULT NULL,
  `Customer_Email` varchar(25) DEFAULT NULL,
  `Lead_Owner` varchar(25) NOT NULL,
  `FollowupOwner` varchar(25) NOT NULL,
  `Booking_Item` varchar(25) NOT NULL,
  `Project` varchar(50) DEFAULT NULL,
  `Product_Land` varchar(25) DEFAULT NULL,
  `Product_Villa` varchar(25) DEFAULT NULL,
  `Agreement_Date` date DEFAULT NULL,
  `Reg_Date` date DEFAULT NULL,
  `Invoice_Date` date DEFAULT NULL,
  `Loan_Amount` int(10) DEFAULT NULL,
  `Income` int(10) DEFAULT NULL,
  `Customer_AccountNo` varchar(200) DEFAULT NULL,
  `Customer_IDProof_Type` varchar(50) DEFAULT NULL,
  `Customer_IDProof` varchar(12) DEFAULT NULL,
  `Booking_Status` varchar(25) NOT NULL,
  `Followup_DateTime` timestamp NULL DEFAULT NULL,
  `Company_ID` varchar(250) NOT NULL,
  `Branch_ID` varchar(250) NOT NULL,
  `Created_By` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`Booking_ID`, `Booking_Date`, `Lead_ID`, `Customer_ID`, `BCustomer_Name1`, `BCustomer_Name2`, `BCustomer_Address`, `BCustomer_PostOffice`, `Bcustomer_District`, `BCustomer_State`, `Mobile_Number`, `Telephone`, `Customer_Email`, `Lead_Owner`, `FollowupOwner`, `Booking_Item`, `Project`, `Product_Land`, `Product_Villa`, `Agreement_Date`, `Reg_Date`, `Invoice_Date`, `Loan_Amount`, `Income`, `Customer_AccountNo`, `Customer_IDProof_Type`, `Customer_IDProof`, `Booking_Status`, `Followup_DateTime`, `Company_ID`, `Branch_ID`, `Created_By`, `created_at`, `updated_at`, `remarks`) VALUES
('10059', '2022-01-25 07:30:00', '48851', '100100713089', 'LEENA V', '', 'W/o.Chandrasekhar.A, 10/73, Abiramam, North Vaniyar Street, Chittur (P.O.), Palakkad-678 101.', '', '', '', 8848103799, 0, '', 'rakithram', 'rakithram', 'Land', 'P200031', '', 'LEENA V', '2022-01-29', '2022-02-15', '2022-02-25', 0, 0, 'LEENA V', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'Mr.Girish Nair', '2022-01-25 07:30:00', '2022-04-27 07:30:00', ''),
('1007', '2023-04-04 00:42:44', '216025', NULL, 'MANIKANDAN.V - ID-216025', '', 'Radhika Nivas, Bank Colony, Andimadam, Kadukkamkunnam (P.O.), Palakkad-678 651.', '', '', '', 7012765012, 0, 'manikandan@gmail.com', 'mehaboo', 'divyasatheesh', 'Villa', 'P200003', 'PKDCKRV 22 & 23', 'MANIKANDAN', '2021-01-19', '2021-01-19', '2021-08-20', 0, 0, 'MANIKANDAN.V - ID-216025', '', '', 'Rejected', '0000-00-00 00:00:00', '8', '3015', 'sa', '2021-01-03 13:00:00', '2021-01-03 13:00:00', NULL),
('1008', '2023-04-04 00:42:44', '215899', NULL, 'Mayalakshmi & Rijesh Kumar', '', 'Reju Bhavan, Thonackadu,Alappuzha', '', '', '', 9947742395, 0, 'No MailID', 'karthkkannan', 'Binoj', 'Villa', 'P200003', 'PKDCTP VILLA 21', 'REJESH KUMAR', '2021-01-22', '2021-02-05', '2020-08-20', 0, 0, 'Mayalakshmi & Rijesh Kumar - ID-215899', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3015', 'sa', '2021-01-06 13:00:00', '2021-01-06 13:00:00', NULL),
('1009', '2023-04-04 00:42:44', '216105', NULL, 'Prasanth E.P. & Tintu K.S.', '', 'Ennazhiyil, Palapram, Ponnani, Malappuram', '', '', '', 919401000000, 0, 'No MailID', 'mehaboo', 'Binoj', 'Villa', 'P200003', 'PKD CTP VILLA 15', 'TINTU PRASANTH', '2021-01-22', '2021-02-10', '2021-01-12', 0, 0, 'Prasanth E.P. & Tintu K.S. - ID-216105', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3015', 'Mr.Girish Nair', '2021-01-11 13:00:00', '2021-01-11 13:00:00', NULL),
('1010', '2019-01-27 07:30:00', '41820', '100100700292', 'Chathamkulam Company Land ', '', 'agtreshyr', '', '', '', 8075262806, 0, '', 'sa', 'sa', 'Land', 'P200014', '', '', '2019-01-28', '2019-01-28', '2019-01-28', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'santhi', '2019-01-27 07:30:00', '2019-01-27 07:30:00', 'plot sold to projects'),
('1011', '2019-01-27 07:30:00', '41820', '100100700292', 'Chathamkulam Company Land ', '', 'sfvsdg', '', '', '', 8075262806, 0, '', 'sa', 'sa', 'Land', 'P200009', '', '', '2019-01-28', '2019-01-28', '2019-01-28', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'santhi', '2019-01-27 07:30:00', '2019-01-27 07:30:00', 'plot sold to projects'),
('1012', '2019-01-27 07:30:00', '41821', '100100700292', 'Chathamkulam Company Land ', '', 'sfgrghredh', '', '', '', 7612479569, 0, '', 'sa', 'sa', 'Land', 'P200023', '', '', '2019-01-28', '2019-01-28', '2019-01-28', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'santhi', '2019-01-27 07:30:00', '2019-01-27 07:30:00', 'plot sold to project'),
('1013', '2019-01-29 07:30:00', '41822', '100100700292', 'Chathamkulam Company Land ', '', 'chandranagar palakkad', '', '', '', 7994839964, 0, '', 'sa', 'sa', 'Land', 'P200023', '', '', '2019-01-30', '2019-01-30', '2019-01-30', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'sa', '2019-01-29 07:30:00', '2019-01-29 07:30:00', 'Purchase of above mentioned plot No. 10 in CRC'),
('1014', '2019-05-31 07:30:00', '41823', '100100713048', 'Chathamkulam Company Land ', '', '159A,TYPE 1 QUATERS ,BLOCK 5 ,NEYVELLI,TAMILNADU', '', '', '', 9442373282, 0, 'enquiry@chathamkulam.com', 'sa', 'sa', 'Land', 'P200023', '', '', '2019-06-01', '2019-06-01', '2019-06-01', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'sa', '2019-05-31 07:30:00', '2019-05-31 07:30:00', 'Plot sold to project'),
('1015', '2019-08-12 07:30:00', '41824', '100100713049', 'Chathamkulam Company Land ', '', '10 Sree Murugan Nivas, Friends Avenue Colony,Puthuppariyaram-1,Palakkad Kerala 678731', '', '', '', 7845726972, 0, 'iamshilpasnair@gmail.com', 'sa', 'sa', 'Land', 'P200031', '', '', '2019-08-13', '2019-08-13', '2019-08-13', 0, 0, 'Chathamkulam Company Land Accounts', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'sa', '2019-08-12 07:30:00', '2019-08-12 07:30:00', ''),
('1016', '2020-11-16 07:30:00', '41827', '100100713052', 'K.M. JOSEPH', '', 'S/O J.JOHN MICHEAL, POLICE OFFICERS QUARTERS, AR CAMP,THRISSUR', '', '', '', 8848084216, 0, '', 'Mr.Girish Nair', 'Mr.Girish Nair', 'Land', 'P200013', '', '', '2020-11-05', '2020-11-05', '2020-11-25', 0, 0, 'K.M. JOSEPH', '', '', 'Cancelled', '0000-00-00 00:00:00', '10', '7000', 'Mr.Girish Nair', '2020-11-16 07:30:00', '2021-04-20 07:30:00', ''),
('1017', '2020-11-16 07:30:00', '41826', '100100713051', 'SARANYA PRABHU', '', 'Saranya Nivas, Mithunampalam, Kodumbu,PALAKKAD.', '', '', '', 9946893341, 0, '', 'Mr.Girish Nair', 'Mr.Girish Nair', 'Land', 'P200031', '', '', '2020-11-19', '2020-12-05', '2020-12-05', 0, 0, 'SARANYA PRABHU', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'Mr.Girish Nair', '2020-11-16 07:30:00', '2021-06-30 07:30:00', ''),
('1018', '2020-11-16 07:30:00', '41825', '100100713050', 'PRINCY', '', 'W/o.Abhishek, Rohini Nivas, Thachankode, Kuzhalmannam, Palakkad.', '', '', '', 9946894431, 0, '', 'Mr.Girish Nair', 'Mr.Girish Nair', 'Land', 'P200031', '', '', '2020-11-05', '2020-12-05', '2020-12-05', 0, 0, 'PRINCY', '', '', 'Approved', '0000-00-00 00:00:00', '10', '7000', 'Mr.Girish Nair', '2020-11-16 07:30:00', '2021-01-07 07:30:00', ''),
('1033', '2023-04-04 00:42:44', '216046', NULL, 'Muhammed Anees - ID-216046', '', 'S/o.Nafeeesa P., Pulatharakkal House, Cherupulassery P.O., Ottappalam, Palakkad - 679 503.', '', '', '', 9895132286, 0, 'No MailID', 'mehaboo', 'divyasatheesh', 'Villa', 'P200003', 'PKD CGV VILLA 127', 'MUHAMMED ANEES', '2021-01-30', '2021-02-14', '2021-10-05', 0, 0, 'Muhammed Anees - ID-216046', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3015', 'sa', '2021-01-14 13:00:00', '2021-01-14 13:00:00', NULL),
('1034', '2023-04-04 00:42:44', '215896', NULL, 'Mithun Nair - ID-215896', '', 'C/o Mohanan,House No.81,Vasant Apartments, Mayur Vihar ph.1,East Delhi-110091', '', '', '', 9868847893, 0, 'No MailID', 'karthkkannan', 'divyasatheesh', 'Villa', 'P200003', 'PKDCG-28A', 'MITHUN NAIR', '2021-01-30', '2021-02-15', '2021-09-20', 0, 0, 'Mithun Nair - ID-215896', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3015', 'sa', '2021-01-26 13:00:00', '2021-01-26 13:00:00', NULL),
('1035', '2023-04-04 00:42:44', '214927', NULL, '103850-BINDU -M.G', '', 'W/o . Rajesh P.N, Archana,Nedungottur , Shoranur, Palakkad-679121', '', '', '', 9446568371, 0, 'No MailID', 'shibinu', 'divyasatheesh', 'Land + Villa', 'P200003', 'Electricity Charges (14', '103850-BINDU -M.G', '2021-02-02', '2021-02-02', '2021-08-20', 0, 0, '103850-BINDU -M.G', '', '', 'Cancelled', '0000-00-00 00:00:00', '8', '3014', 'sa', '2021-02-01 13:00:00', '2021-02-01 13:00:00', NULL),
('1036', '2023-04-04 00:42:44', '214903', NULL, 'Mr Nikhil Kumar (CG 29)', '', '6B-Sammohanam Apartments, Kalvakulam Road, Palakkad-678 001.', '', '', '', 7356122059, 0, 'No MailID', 'shibinu', 'Binoj', 'Land + Villa', 'P200003', 'Electricity Charges CG2', 'Mr Nikhil Kumar (CG 29)', '2020-07-07', '2020-07-30', '2021-05-30', 0, 0, 'Mr Nikhil Kumar (CG 29)', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3014', 'Mr.Girish Nair', '2021-02-01 13:00:00', '2021-02-01 13:00:00', NULL),
('1038', '2023-04-04 00:38:18', '214927', NULL, '103850-BINDU -M.G', '', 'W/o.Rajesh P.N., Archana, Nedungottur, Shoranur, PALAKKAD - 679121.', '', '', '', 9446568371, 0, 'No MailID', 'shibinu', 'divyasatheesh', 'Land + Villa', 'P200031', 'Electricity Charges', '103850-BINDU -M.G', '2020-07-07', '2020-07-25', '2021-08-20', 0, 0, '103850-BINDU -M.G', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3014', 'Mr.Girish Nair', '2021-03-22 13:00:00', '2021-03-22 13:00:00', NULL),
('1039', '2023-04-04 00:42:44', '216790', NULL, 'SINDHU - ID-216790', '', '4/560, Poojapunyam, Cherad, Akathethara, Akathethara (P O), Palakkad, Kerala - 678008', '', '', '', 9400671761, 0, 'No MailID', 'mehaboo', 'Binoj', 'Villa', 'P200003', 'PKDCKRV-21', 'SINDHU', '2021-03-28', '2021-04-12', '2022-05-07', 0, 0, 'SINDHU - ID-216790', '', '', 'Approved', '0000-00-00 00:00:00', '8', '3015', 'Mr.Girish Nair', '2021-03-22 13:00:00', '2021-03-22 13:00:00', NULL),
('1040', '2023-04-04 00:42:44', '216863', NULL, 'Kaviyasri - ID-216863', '', '9/11,Chinniyagowndanpudhur,Andipalayam,Tiruppur-641687', '', '', '', 7904551896, 0, NULL, 'sarath', 'divyasatheesh', 'Villa', 'P200003', 'PKD CG VILLA 54A', 'KAVIYASRI', '2021-04-13', '2021-04-30', '2022-05-04', 0, 0, 'Kaviyasri - ID-216863', '', '', 'Cancelled', '0000-00-00 00:00:00', '8', '3015', 'divyasatheesh', '2021-03-29 13:00:00', '2021-03-29 13:00:00', NULL);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`Booking_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
