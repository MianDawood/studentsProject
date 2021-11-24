-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 08:42 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cities`
--

CREATE TABLE `add_cities` (
  `City_ID` int(11) NOT NULL,
  `Village` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `Province` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_cities`
--

INSERT INTO `add_cities` (`City_ID`, `Village`, `City`, `Province`, `status`) VALUES
(1, 'Babi Qadeem', 'Nowshera', 'KPK', 1),
(3, 'Chamkani', 'Peshawar', 'KPK', 1),
(4, 'lahore', 'lahore', 'Punjab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_classess`
--

CREATE TABLE `add_classess` (
  `Class_ID` int(11) NOT NULL,
  `Class_Name` varchar(45) NOT NULL,
  `Section` varchar(45) NOT NULL,
  `Class_Description` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_classess`
--

INSERT INTO `add_classess` (`Class_ID`, `Class_Name`, `Section`, `Class_Description`, `status`) VALUES
(5, 'Web Development', '', '', 1),
(6, 'App Development', '', '', 1),
(7, 'AI', '', '', 1),
(8, 'software', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `ID` int(11) NOT NULL,
  `User_Name` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`ID`, `User_Name`, `Email`, `Password`, `Status`) VALUES
(1, 'Main Admin', 'main@gmail.com', 'main123', 1),
(2, 'Secondary Admin', 'secondary@gmail.com', 'secondary123', 1),
(3, 'Shayan Ahmad', 'shayanahmad235@gmail.com', 'shayan123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_form_record`
--

CREATE TABLE `student_form_record` (
  `Students_ID` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Phone_no` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `Class_ID` int(10) NOT NULL,
  `City_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_form_record`
--

INSERT INTO `student_form_record` (`Students_ID`, `fname`, `lname`, `email`, `Phone_no`, `password`, `Gender`, `status`, `Class_ID`, `City_ID`) VALUES
(7, 'Shayan', 'Ahmad', 'shayanahmad235@gmail.com', '0244757656', '34567865', 'Male', 0, 5, 3),
(8, 'Abbas', 'Khan', 'main@gmail.com', '76543245645433', '2334567645322', 'Male', 0, 7, 3),
(9, 'Abbas', 'khan', 'abbas@gmail.com', '874237656', '954312455768', 'Male', 0, 5, 1),
(10, 'Tahir', 'Khan', 'main@gmail.com', '23455679786', 'feest5454', 'Male', 0, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Name` varchar(45) NOT NULL,
  `Credit_Hours` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_ID`, `Subject_Name`, `Credit_Hours`, `status`) VALUES
(3, 'Physics', '3+', 1),
(4, 'App', '3+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_ID` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Phone_no` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_ID`, `fname`, `lname`, `email`, `Phone_no`, `password`, `Gender`, `status`) VALUES
(2, 'Dawood', 'Ahmad', 'dawood@gmail.com', '03127645980', '', 'Male', 1),
(3, 'Shayan', 'ahmad', 'shayanahmad235@gmail.com', '76545567', '', 'Male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cities`
--
ALTER TABLE `add_cities`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `add_classess`
--
ALTER TABLE `add_classess`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_form_record`
--
ALTER TABLE `student_form_record`
  ADD PRIMARY KEY (`Students_ID`),
  ADD KEY `FK_student_form_record_1` (`Class_ID`),
  ADD KEY `FK_student_form_record_2` (`City_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cities`
--
ALTER TABLE `add_cities`
  MODIFY `City_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_classess`
--
ALTER TABLE `add_classess`
  MODIFY `Class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_form_record`
--
ALTER TABLE `student_form_record`
  MODIFY `Students_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_form_record`
--
ALTER TABLE `student_form_record`
  ADD CONSTRAINT `FK_student_form_record_1` FOREIGN KEY (`Class_ID`) REFERENCES `add_classess` (`Class_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_student_form_record_2` FOREIGN KEY (`City_ID`) REFERENCES `add_cities` (`City_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
