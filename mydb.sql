-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 01, 2023 at 05:33 PM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(29) NOT NULL,
  `Email` int(30) NOT NULL,
  `Password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Email`, `Password`) VALUES
(1, 0, 123),
(2, 0, 123);

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `AdminId` int(44) NOT NULL,
  `Email` varchar(44) NOT NULL,
  `Password` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`AdminId`, `Email`, `Password`) VALUES
(3, '0', 123),
(5, 'sumchand@gmail.com', 123),
(10, '0', 321);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Email` varchar(69) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Email`, `Message`) VALUES
('harshitpandey7784@gmail.com', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `EmpId` int(40) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `EmployeeEmail` varchar(50) NOT NULL,
  `Department` varchar(25) NOT NULL,
  `salary` int(255) DEFAULT NULL,
  `Password` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`EmpId`, `EmployeeName`, `EmployeeEmail`, `Department`, `salary`, `Password`) VALUES
(1, 'Harshit', 'kanpur', 'cs', NULL, NULL),
(2, 'Harshit Pandey', 'harshitpandey7784@gmail.com', 'Data Base service', 12, 123);

-- --------------------------------------------------------

--
-- Table structure for table `employeeattendence`
--

CREATE TABLE `employeeattendence` (
  `Attid` int(35) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Date` int(11) DEFAULT NULL,
  `IsPresent` tinyint(1) DEFAULT NULL,
  `Currt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeeattendence`
--

INSERT INTO `employeeattendence` (`Attid`, `Email`, `Date`, `IsPresent`, `Currt`) VALUES
(1, 'harshit@gmail.com', 2147483647, 1, NULL),
(2, 'punar@gmail.com', 2147483647, 1, NULL),
(3, 'sachin@gmail.com', 2147483647, 1, NULL),
(4, 'shaily@gmail.com', 20230529, 1, NULL),
(5, 'hdhdwqd@gmail.com', 20230529, 1, NULL),
(7, 'sumchand@gmail.com', 233133, 1, NULL),
(13, 'jk@gmail.com', 20230530, 1, 223749),
(15, 'harshitpandey7784@gmail.com', 20230601, 1, 74810);

-- --------------------------------------------------------

--
-- Table structure for table `empp`
--

CREATE TABLE `empp` (
  `EmpEmail` varchar(55) NOT NULL,
  `FullName` varchar(55) NOT NULL,
  `Department` varchar(55) NOT NULL,
  `Salary` int(55) NOT NULL,
  `Password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empp`
--

INSERT INTO `empp` (`EmpEmail`, `FullName`, `Department`, `Salary`, `Password`) VALUES
('jk@gmail.com', 'jk', 'cs', 11, '111');

-- --------------------------------------------------------

--
-- Table structure for table `harshit`
--

CREATE TABLE `harshit` (
  `EmpId` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `harshit`
--

INSERT INTO `harshit` (`EmpId`, `Email`, `Password`) VALUES
(3, 'sachin@gmail.com', '123'),
(14, 'sumchand@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `Month` varchar(20) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`Month`, `Date`, `Description`) VALUES
('August', '2023-06-01', 'First Day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `employeeattendence`
--
ALTER TABLE `employeeattendence`
  ADD PRIMARY KEY (`Attid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `empp`
--
ALTER TABLE `empp`
  ADD PRIMARY KEY (`EmpEmail`);

--
-- Indexes for table `harshit`
--
ALTER TABLE `harshit`
  ADD PRIMARY KEY (`EmpId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `EmpId` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employeeattendence`
--
ALTER TABLE `employeeattendence`
  MODIFY `Attid` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
