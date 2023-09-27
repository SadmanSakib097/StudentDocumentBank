-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 01:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_id` int(10) NOT NULL,
  `Account_type` varchar(50) NOT NULL,
  `Date_opened` date NOT NULL,
  `Date_closed` date DEFAULT NULL,
  `Customerscustomer_id` int(10) NOT NULL,
  `paymentmethod` varchar(200) NOT NULL,
  `Card_information` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_id`, `Account_type`, `Date_opened`, `Date_closed`, `Customerscustomer_id`, `paymentmethod`, `Card_information`) VALUES
(1, 'Yearly', '2021-01-05', '2021-01-13', 1, 'Debit Card', '123456'),
(2, 'Monthly', '2021-01-05', '2021-01-12', 2, 'Credit Card', '98899889'),
(3, 'Yearly', '2021-02-23', NULL, 3, 'E wallet', '98765432123'),
(4, 'Yearly', '2021-01-11', NULL, 4, 'E wallet', '123454321'),
(5, 'Yearly', '2021-01-13', NULL, 5, 'Debit Card', '12345654321'),
(6, 'Yearly', '2021-01-13', '2021-01-13', 6, 'Credit Card', '1234'),
(7, 'Monthly', '2021-01-12', '2021-01-13', 7, 'Debit Card', '123'),
(8, 'Yearly', '2021-01-01', '2021-01-12', 8, 'Debit Card', '123456'),
(9, 'Yearly', '2021-01-14', NULL, 9, 'Credit Card', '100200300'),
(10, 'Yearly', '2021-01-15', NULL, 9, 'Credit Card', '23232323'),
(11, 'Monthly', '2021-01-12', NULL, 7, 'Debit Card', '234345'),
(12, 'Yearly', '2021-01-13', NULL, 7, 'Credit Card', '100200300'),
(13, 'Monthly', '2021-01-11', '2021-01-13', 1, 'Credit Card', '123456'),
(14, 'Yearly', '2021-01-19', NULL, 10, 'Credit Card', '12345'),
(15, 'Monthly', '2021-01-12', NULL, 11, 'Credit Card', '111222333'),
(16, 'Monthly', '2021-01-12', '2021-01-13', 12, 'Credit Card', '123'),
(17, '3 month package', '2021-01-14', NULL, 14, 'Credit Card', '123456'),
(18, '6 month package', '2021-01-14', NULL, 14, 'Credit Card', '1211'),
(19, 'Yearly', '2021-01-12', NULL, 14, 'Credit Card', '1111'),
(20, '3 month package', '2021-01-20', NULL, 14, 'Credit Card', '123321'),
(21, '6 month package', '2021-01-20', '2021-01-05', 1, 'Credit Card', '12345678'),
(22, 'Monthly', '2021-01-05', '2021-01-13', 1, 'Credit Card', '123456'),
(23, 'Monthly', '2021-01-28', '2021-01-04', 1, 'Credit Card', '1111111111111'),
(24, '6 month package', '2021-01-20', '2021-01-01', 2, 'Credit Card', '123456789'),
(25, 'Yearly', '2021-01-12', '2021-01-21', 2, 'Credit Card', '213243655476'),
(26, '3 month package', '2021-01-19', '2021-01-28', 2, 'E wallet', '88888888887'),
(27, 'Yearly', '2021-01-12', NULL, 2, 'Debit Card', '777888999'),
(28, '3 month package', '2021-01-30', '2021-01-12', 2, 'E wallet', '223344');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `Name`, `Mobile_number`, `Address`, `Email`, `Password`) VALUES
(1, 'Harry Potter ', 1177711121, 'Hogwarts', 'harry@gmail.com', '1234'),
(2, 'Ron Weasley', 234565432, 'Hogwarts', 'ginny@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(3, 'Luna Lovegood', 123456789, 'Hogwarts', 'luna@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(4, 'ayylao', 12344321, 'weirdplace', 'abc@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(5, 'gigi', 1234567, 'new jersey', 'gigi@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(6, 'imam', 12345, 'Hogwarts', 'imam@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(7, 'ami', 12345, '', 'rim@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(8, 'bleh', 123456, 'Hogwarts', 'a@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(9, 'albus', 1234567899, 'Hogwarts', 'albus@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(10, 'albus', 1234567, 'Hogwarts', 'al@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(11, 'at', 12345, 'Hogwarts', 'at@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(12, 'aa', 123, 'Hogwarts', 'aa@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(13, 'aa', 1222, 'Hogwarts', 'aaaa@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(14, 'aa', 2147483647, 'ssssssss', 'i@gmail.com', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `Document_number` varchar(20) NOT NULL,
  `Document_details` varchar(255) DEFAULT NULL,
  `AccountAccount_id` int(10) NOT NULL,
  `Document_image_path` varchar(255) DEFAULT 'Not Uploaded Yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`Document_number`, `Document_details`, `AccountAccount_id`, `Document_image_path`) VALUES
('1', 'hsc certificate', 1, 'Credentials/hsc certificate.jpg'),
('1', 'psc certificate', 2, 'Credentials/psc certificate.jpg'),
('1', 'psc certificate', 3, 'Credentials/psc certificate.jpg'),
('1', 'SSC Certificate', 5, 'Credentials/SSC Certificate.jpg'),
('1', 'psc certificate', 6, 'Credentials/psc certificate.jpg'),
('1', 'SSC Certificate', 7, 'Credentials/SSC Certificate.jpg'),
('2', 'HSC marksheet', 1, 'Credentials/HSC marksheet.jpg'),
('2', 'jsc certificate', 2, 'Credentials/jsc certificate.jpg'),
('2', 'jsc certificate', 3, 'Credentials/jsc certificate.jpg'),
('2', 'SSC Marksheet', 6, 'Credentials/SSC Marksheet.jpg'),
('2', 'abcde', 7, 'Credentials/abcde.jpg'),
('3', 'SSC Certificate', 2, 'Credentials/SSC Certificate.jpg'),
('3', 'SSC Certificate', 3, 'Credentials/SSC Certificate.jpg'),
('4', 'SSC Certificate', 2, 'Credentials/SSC Certificate.jpg'),
('4', 'hsc certificate', 3, 'Credentials/hsc certificate.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `document_entrywithdraw`
--

CREATE TABLE `document_entrywithdraw` (
  `Entry_date` date NOT NULL,
  `Withdraw_date` date DEFAULT NULL,
  `DocumentDocument_number` varchar(20) NOT NULL,
  `DocumentAccountAccount_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_entrywithdraw`
--

INSERT INTO `document_entrywithdraw` (`Entry_date`, `Withdraw_date`, `DocumentDocument_number`, `DocumentAccountAccount_id`) VALUES
('2018-01-01', '2019-05-22', '2', 2),
('2019-01-01', '2020-02-02', '1', 1),
('2019-01-01', '2020-02-02', '1', 2),
('2019-01-01', NULL, '2', 1),
('2019-01-01', NULL, '3', 2),
('2019-01-01', '2019-02-02', '4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `document_softcopy`
--

CREATE TABLE `document_softcopy` (
  `Download_serial_number` varchar(50) NOT NULL,
  `Download_date` date NOT NULL,
  `DocumentDocument_number` varchar(20) NOT NULL,
  `DocumentAccountAccount_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_softcopy`
--

INSERT INTO `document_softcopy` (`Download_serial_number`, `Download_date`, `DocumentDocument_number`, `DocumentAccountAccount_id`) VALUES
('1', '2018-02-02', '1', 2),
('1', '2018-02-02', '3', 2),
('2', '2018-02-02', '1', 2),
('3', '2018-02-02', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payemnt`
--

CREATE TABLE `payemnt` (
  `serial_number` int(10) NOT NULL,
  `Payemnt_amount` double NOT NULL,
  `Payment_date` date NOT NULL,
  `AccountAccount_id` int(10) NOT NULL,
  `card_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payemnt`
--

INSERT INTO `payemnt` (`serial_number`, `Payemnt_amount`, `Payment_date`, `AccountAccount_id`, `card_number`) VALUES
(1, 1200, '2021-01-12', 1, '123456'),
(1, 500, '2021-02-23', 2, '100100100'),
(1, 230, '2021-01-01', 3, '222333444'),
(1, 23097, '2021-01-11', 4, '123456654321'),
(1, 540, '2021-01-13', 5, '123444321'),
(1, 500, '2021-01-12', 6, '123456'),
(2, 300, '2021-01-14', 1, '1234567123'),
(2, 1500, '2021-01-05', 2, '1234554321'),
(2, 970, '2021-01-07', 3, '123456654321'),
(2, 50, '2021-01-05', 4, '123'),
(3, 2572, '2021-01-12', 1, '200200'),
(3, 1200, '2021-01-05', 2, '123456'),
(3, 1100, '2021-02-23', 3, '2397199702'),
(4, 2500, '2021-01-12', 2, '111111'),
(5, 230, '2021-01-05', 2, '987654321'),
(6, 1234, '2021-01-21', 2, '123456788987'),
(7, 500, '2021-01-21', 2, '123456789876543'),
(8, 230, '2021-01-23', 2, '1212'),
(9, 2233, '2021-01-30', 2, '123321');

-- --------------------------------------------------------

--
-- Table structure for table `sub_type`
--

CREATE TABLE `sub_type` (
  `package` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `number_of_documents` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_type`
--

INSERT INTO `sub_type` (`package`, `amount`, `number_of_documents`) VALUES
('Monthly', '350', '8'),
('3 Month package', '1000', '12'),
('6 Month package', '2000', '20'),
('Yearly', '3000', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_id`),
  ADD KEY `FKAccount558371` (`Customerscustomer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`Document_number`,`AccountAccount_id`),
  ADD KEY `FKDocument702003` (`AccountAccount_id`);

--
-- Indexes for table `document_entrywithdraw`
--
ALTER TABLE `document_entrywithdraw`
  ADD PRIMARY KEY (`Entry_date`,`DocumentDocument_number`,`DocumentAccountAccount_id`),
  ADD KEY `FKDocument e559862` (`DocumentDocument_number`,`DocumentAccountAccount_id`);

--
-- Indexes for table `document_softcopy`
--
ALTER TABLE `document_softcopy`
  ADD PRIMARY KEY (`Download_serial_number`,`DocumentDocument_number`,`DocumentAccountAccount_id`),
  ADD KEY `FKDocument_s119087` (`DocumentDocument_number`,`DocumentAccountAccount_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `payemnt`
--
ALTER TABLE `payemnt`
  ADD PRIMARY KEY (`serial_number`,`AccountAccount_id`),
  ADD KEY `FKPayemnt78270` (`AccountAccount_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FKAccount558371` FOREIGN KEY (`Customerscustomer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FKDocument702003` FOREIGN KEY (`AccountAccount_id`) REFERENCES `account` (`Account_id`);

--
-- Constraints for table `document_entrywithdraw`
--
ALTER TABLE `document_entrywithdraw`
  ADD CONSTRAINT `FKDocument e559862` FOREIGN KEY (`DocumentDocument_number`,`DocumentAccountAccount_id`) REFERENCES `document` (`Document_number`, `AccountAccount_id`);

--
-- Constraints for table `document_softcopy`
--
ALTER TABLE `document_softcopy`
  ADD CONSTRAINT `FKDocument_s119087` FOREIGN KEY (`DocumentDocument_number`,`DocumentAccountAccount_id`) REFERENCES `document` (`Document_number`, `AccountAccount_id`);

--
-- Constraints for table `payemnt`
--
ALTER TABLE `payemnt`
  ADD CONSTRAINT `FKPayemnt78270` FOREIGN KEY (`AccountAccount_id`) REFERENCES `account` (`Account_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
