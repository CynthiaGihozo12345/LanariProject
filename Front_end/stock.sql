-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 09:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Branch_id` int(11) NOT NULL,
  `Company_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Branch_id`, `Company_id`, `Name`, `Location`, `Contact`, `Created_at`) VALUES
(1, 1, 'Gishushu', 'Gasabo,Gishushu', '', '2024-11-16 12:25:02'),
(3, 1, 'gikondo', 'gikondo', '', '2024-11-16 12:28:39'),
(4, 1, 'nyarugenge', 'nyarugenge', '0787654321', '2024-11-16 12:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Company_Id`, `Name`, `Address`, `Phone`, `Created_at`) VALUES
(1, 'Simba', 'Kigali city', '0786754321', '2024-11-12 07:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Contact_Info` varchar(15) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `FullName`, `Contact_Info`, `Address`) VALUES
(1, 'Igihozo', 'Cynthia', 'Kigali city'),
(2, 'Uwera', 'Alice', 'Muhanga'),
(3, 'mukeshimana', 'aline', 'huye');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `loan_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `outstanding_balance` varchar(100) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `Name`, `Description`, `Category`, `Price`, `Created_at`) VALUES
(1, 'Chicken', 'Meat of Chicken', 'A', 1000, '2024-11-12 09:34:28'),
(2, 'rice', 'tanzania', '1', 40000, '2024-11-18 20:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Sale_id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Company_Id` int(11) NOT NULL,
  `Branch_id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_Price` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Sale_id`, `Product_Id`, `Company_Id`, `Branch_id`, `Quantity`, `Unit_Price`, `TotalAmount`, `Status`, `Created-at`) VALUES
(1, 1, 1, 3, 2, 1000, 2000, '', '2024-11-18 18:05:25'),
(2, 1, 1, 4, 3, 5000, 15000, '', '2024-11-18 18:35:34'),
(3, 2, 1, 1, 5, 4000, 20000, 'payed', '2024-11-18 18:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FullName`, `Email`, `Password`, `Role`) VALUES
(1, 'Uwera', 'aline@gmail.com', '12345', 'admin'),
(3, 'cynthia', 'igihozoc16@gmail.com', '123', 'manager'),
(4, 'nina', 'nina@gmail.com', '12', 'store-keeper'),
(5, 'biju', 'biju@gmail.com', '123', 'supplier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Branch_id`),
  ADD UNIQUE KEY `Name` (`Name`),
  ADD KEY `Company_id` (`Company_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `Customer_id` (`Customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`Sale_id`),
  ADD KEY `Branch_id` (`Branch_id`),
  ADD KEY `Product_Id` (`Product_Id`),
  ADD KEY `Company_Id` (`Company_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `Branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `Company_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `Sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`Company_id`) REFERENCES `company` (`Company_Id`);

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`Sale_id`),
  ADD CONSTRAINT `loans_ibfk_2` FOREIGN KEY (`Customer_id`) REFERENCES `customer` (`Customer_Id`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`Branch_id`) REFERENCES `branches` (`Branch_id`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`Product_Id`) REFERENCES `products` (`Product_Id`),
  ADD CONSTRAINT `sales_ibfk_3` FOREIGN KEY (`Company_Id`) REFERENCES `company` (`Company_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
