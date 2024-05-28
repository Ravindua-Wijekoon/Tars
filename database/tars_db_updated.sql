-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2024 at 04:08 PM
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
-- Database: `tars_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`) VALUES
(1, 'test', '123'),
(2, '', '$2y$10$5pHnRQ.NrPwY9Q6TPHal/.3e1slm0v26Je6Fn/qjSre83sh1x1K.2'),
(3, 'eeee', '$2y$10$Y8sn9OwLB8xwS4cDYs17KOGW3dRImM4WBXj4pgN/Y3ieuLIYgbknO'),
(4, '2021t01252', '$2y$10$Y8RJFcgyLPON9zUPG0GAu.o.BU5HVrTfd/tdRMWQ8WLXZCKHzJ0UO'),
(5, '2021t01252@stu.cmb.ac.lk', '$2y$10$00j0ZD2mmh5xDZ3TTsFJGOpMDUh5S1TZDgcTnI2lqHBvz/UvpDo42'),
(6, 'bbbbb', '$2y$10$Ge9Z1OTpUNFNcNx6fDart.jG7V0paFibjPpQ35Q7ufssQSwaFzAAe'),
(7, 'kavindu', '$2y$10$PKDtS7/n6ze4hUF5jt2gNOoopmj2calcgWTZYnP6Z0bNbkPCGhWnK'),
(8, 'ravindu', '12345'),
(9, 'kamal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `Id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `namewithinitials` varchar(255) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `citytown` varchar(50) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `institutionedu` varchar(100) NOT NULL,
  `startedu` int(20) NOT NULL,
  `endedu` int(20) NOT NULL,
  `institutionexp` varchar(100) NOT NULL,
  `startexp` int(20) NOT NULL,
  `endexp` int(20) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`Id`, `name`, `namewithinitials`, `dob`, `address`, `citytown`, `zipcode`, `institutionedu`, `startedu`, `endedu`, `institutionexp`, `startexp`, `endexp`, `skills`, `language`) VALUES
(1, 'wwww', 'wwwwww', '2024-03-20', 'wwww', 'wwww', 123, 'wwww', 22, 22, 'ww', 33, 33, 'ww', 'ww');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
