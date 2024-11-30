-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 11:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttendanceID` int(11) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TimeIn` time DEFAULT NULL,
  `TimeOut` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttendanceID`, `EmployeeID`, `Date`, `TimeIn`, `TimeOut`) VALUES
(1, 101, '2024-11-25', '08:30:00', '17:00:00'),
(2, 102, '2024-11-25', '09:00:00', '18:00:00'),
(3, 103, '2024-11-25', '08:45:00', '17:15:00'),
(4, 104, '2024-11-25', '09:15:00', '18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DepartmentID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepartmentID`, `Name`) VALUES
(102, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `DepartmentID` int(11) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `HireDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `Name`, `DepartmentID`, `Position`, `HireDate`) VALUES
(101, 'Alice Johnson', 1, 'HR Manager', '2020-05-15'),
(102, 'Bob Smith', 3, 'Software Engineer', '2021-07-01'),
(103, 'Charlie Brown', 2, 'Accountant', '2019-11-20'),
(104, 'Diana White', 4, 'Marketing Specialist', '2022-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `employeeleave`
--

CREATE TABLE `employeeleave` (
  `LeaveID` int(11) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeeleave`
--

INSERT INTO `employeeleave` (`LeaveID`, `EmployeeID`, `StartDate`, `EndDate`) VALUES
(1, 101, '2024-12-01', '2024-12-05'),
(2, 103, '2024-11-15', '2024-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `PayrollID` int(11) NOT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `Salary` decimal(10,2) DEFAULT NULL,
  `NetPay` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`PayrollID`, `EmployeeID`, `Salary`, `NetPay`) VALUES
(1, 101, 50000.00, 45000.00),
(2, 102, 60000.00, 54000.00),
(3, 103, 55000.00, 50000.00),
(4, 104, 48000.00, 43200.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttendanceID`),
  ADD KEY `FK_Attendance_Employee` (`EmployeeID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `FK_Employee_Department` (`DepartmentID`);

--
-- Indexes for table `employeeleave`
--
ALTER TABLE `employeeleave`
  ADD PRIMARY KEY (`LeaveID`),
  ADD KEY `FK_Leave_Employee` (`EmployeeID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`PayrollID`),
  ADD KEY `FK_Payroll_Employee` (`EmployeeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `FK_Attendance_Employee` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `employeeleave`
--
ALTER TABLE `employeeleave`
  ADD CONSTRAINT `FK_Leave_Employee` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `FK_Payroll_Employee` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
