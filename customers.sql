-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 12, 2021 at 05:46 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_ID` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email_ID` varchar(20) NOT NULL,
  `Balance` int(10) NOT NULL,
  PRIMARY KEY (`Cust_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Name`, `Email_ID`, `Balance`) VALUES
(102, 'Aslesha', 'aslesha@gmail.com', 20100),
(101, 'Rahul', 'rahul@gmail.com', 10000),
(103, 'Sakshi', 'sakshi@gmail.com', 21000),
(104, 'Ashutos', 'ashutosh@gmail.com', 25350),
(105, 'Ritvij', 'ritvij@gmail.com', 22400),
(106, 'Harshada', 'harshada@gmail.com', 30000),
(107, 'Navina', 'navina@gmail.com', 45400),
(108, 'Umesh', 'umesh@gmail.com', 32100),
(109, 'mahesh', 'mahesh@gmail.com', 28900),
(110, 'snehal', 'snehal@gmail.com', 24600);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

DROP TABLE IF EXISTS `transfer`;
CREATE TABLE IF NOT EXISTS `transfer` (
  `Transaction_emailID` varchar(20) NOT NULL,
  `Amount_Received` int(10) NOT NULL,
  `Previou_Balance` int(10) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Transaction_emailID`, `Amount_Received`, `Previou_Balance`, `Timestamp`) VALUES
('navina@gmail.com', 400, 45400, '2021-02-12 17:35:47'),
('ritvij@gmail.com', 300, 22400, '2021-02-12 17:20:12'),
('ashutosh@gmail.com', 350, 25350, '2021-02-12 17:36:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
