-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 03:51 AM
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
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `email`, `password`, `name`, `type`, `location`, `com_email`, `about`, `linkedin`, `twitter`) VALUES
(1, 'chamodlaffkshitha666@gmail.com', '345', 'dd', 'dd', 'dd', 'dd', '               dd         ', 'dd', 'dd'),
(2, '334@123', '22', 'xxxx', 'xxxxx', 'xxxx', 'xxxx', '             xxxxxx           ', 'xxx', 'xxxx'),
(3, 'kavindualok', '123', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_info_temp`
--

CREATE TABLE `company_info_temp` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `com_email` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education_info`
--

CREATE TABLE `education_info` (
  `id` int(100) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_info`
--

INSERT INTO `education_info` (`id`, `institution`, `sdate`, `edate`, `std_id`) VALUES
(31, 'ananda', '2024-03-04', '2024-03-19', 'chamodt1252'),
(32, 'vvv', '2024-03-04', '2024-03-12', '456dfg'),
(33, 'abc', '2024-03-13', '2024-03-21', '895ABC'),
(34, 'xyz', '2024-03-03', '2024-03-31', '895ABC'),
(35, 'ss', '2024-03-03', '2024-03-12', 'abc123'),
(36, 'ff', '2024-03-12', '2024-03-19', 'abc123'),
(37, 'dd', '2024-03-19', '2024-03-12', 'hjk123'),
(38, 'ff', '2024-03-14', '2024-03-20', 'hjk123'),
(39, 'asd', '2024-03-18', '2024-03-11', 'dfg123'),
(40, 'asf', '2024-03-13', '2024-03-13', 'dfg123'),
(41, 'll', '2024-03-11', '2024-03-04', '345er'),
(42, 'kk', '2024-02-28', '2024-03-20', '345er'),
(43, 'green', '2024-03-12', '2024-03-05', 'xxx999'),
(44, 'orrange', '2024-03-07', '2024-03-13', 'xxx999'),
(45, 'yyy', '2024-03-12', '2024-03-04', 'yyyy223'),
(46, 'uuu', '2024-03-05', '2024-03-12', 'yyyy223');

-- --------------------------------------------------------

--
-- Table structure for table `education_info_temp`
--

CREATE TABLE `education_info_temp` (
  `id` int(100) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_info_temp`
--

INSERT INTO `education_info_temp` (`id`, `institution`, `sdate`, `edate`, `std_id`) VALUES
(31, 'book', '2024-03-04', '2024-03-05', '555555ssssssssss'),
(32, 'ww', '2024-03-05', '2024-03-20', '555555ssssssssss'),
(33, 'huuuuu', '2024-02-26', '2024-03-20', 'ff345gg'),
(34, 'amboo', '2024-03-04', '2024-03-13', 'ravindu1252'),
(35, 'sambola', '2024-03-12', '2024-03-29', 'ravindu1252'),
(37, 'fgh', '2024-03-05', '2024-03-11', 'gg345'),
(38, 'aa', '2024-03-05', '2024-03-11', 'aaa123'),
(39, 'ww', '2024-02-27', '2024-03-12', 'ty567'),
(40, 'hh', '2024-02-21', '2024-03-20', 'ty567');

-- --------------------------------------------------------

--
-- Table structure for table `experience_info`
--

CREATE TABLE `experience_info` (
  `id` int(100) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience_info`
--

INSERT INTO `experience_info` (`id`, `experience`, `sdate`, `edate`, `std_id`) VALUES
(15, 'zxc', '2024-03-05', '2024-03-05', 'dfg123'),
(16, 'zxv', '2024-03-14', '2024-03-20', 'dfg123'),
(17, 'jj', '2024-03-06', '2024-03-12', '345er'),
(18, 'hh', '2024-03-11', '2024-03-31', '345er'),
(19, 'bus', '2024-03-06', '2024-03-12', 'xxx999'),
(20, 'van', '2024-03-04', '2024-03-19', 'xxx999'),
(21, 'iiii', '2024-03-05', '2024-03-12', 'yyyy223'),
(22, 'gggg', '2024-03-12', '2024-03-13', 'yyyy223');

-- --------------------------------------------------------

--
-- Table structure for table `experience_info_temp`
--

CREATE TABLE `experience_info_temp` (
  `id` int(100) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `sdate` varchar(255) NOT NULL,
  `edate` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience_info_temp`
--

INSERT INTO `experience_info_temp` (`id`, `experience`, `sdate`, `edate`, `std_id`) VALUES
(15, 'ww', '2024-03-26', '2024-04-04', '555555ssssssssss'),
(16, 'ppp', '2024-03-18', '2024-04-29', '555555ssssssssss'),
(17, 'huuuuuuu', '2024-03-11', '2024-03-26', 'ff345gg'),
(18, 'defend', '2024-03-19', '2024-03-30', 'ravindu1252'),
(19, 'fgh', '2024-03-03', '2024-03-28', 'ravindu1252'),
(20, 'central', '2024-03-26', '2024-03-26', 'chamodt1252'),
(21, 'fgh', '2024-03-20', '2024-03-26', 'gg345'),
(22, 'aa', '2024-03-26', '2024-03-27', 'aaa123'),
(23, 'mm', '2024-03-27', '2024-03-27', 'ty567'),
(24, 'qq', '2024-03-26', '2024-03-29', 'ty567'),
(25, 'gg', '2024-03-05', '2024-03-20', '456dfg'),
(26, 'dd', '2024-02-28', '2024-03-12', '895ABC'),
(27, 'cc', '2024-03-05', '2024-03-13', 'abc123'),
(28, 'xx', '2024-03-06', '2024-03-20', 'abc123'),
(29, 'bb', '2024-03-14', '2024-03-27', 'hjk123'),
(30, 'ss', '2024-03-12', '2024-03-20', 'hjk123');

-- --------------------------------------------------------

--
-- Table structure for table `language_info`
--

CREATE TABLE `language_info` (
  `id` int(100) NOT NULL,
  `language` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_info`
--

INSERT INTO `language_info` (`id`, `language`, `std_id`) VALUES
(3, 'bb', '345er'),
(4, 'milk', 'xxx999'),
(5, 'rice', 'xxx999'),
(6, 'mm', 'yyyy223'),
(7, 'll', 'yyyy223');

-- --------------------------------------------------------

--
-- Table structure for table `language_info_temp`
--

CREATE TABLE `language_info_temp` (
  `id` int(100) NOT NULL,
  `language` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_info_temp`
--

INSERT INTO `language_info_temp` (`id`, `language`, `std_id`) VALUES
(3, 'tt', '555555ssssssssss'),
(4, 'yy', '555555ssssssssss'),
(5, 'huuuu', 'ff345gg'),
(6, 'bb', 'ravindu1252'),
(7, 'hjk', 'ravindu1252'),
(8, 'english', 'chamodt1252'),
(9, 'fgh', 'gg345'),
(10, 'aa', 'aaa123'),
(11, 'kl', 'ty567'),
(12, 'lp', 'ty567'),
(13, 'gg', '456dfg'),
(14, 'vv', '895ABC'),
(15, 'dsf', 'hjk123'),
(16, 'qe', 'dfg123');

-- --------------------------------------------------------

--
-- Table structure for table `skill_info`
--

CREATE TABLE `skill_info` (
  `id` int(100) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_info`
--

INSERT INTO `skill_info` (`id`, `skill`, `std_id`) VALUES
(7, 'jjj', 'yyyy223'),
(8, 'kkkk', 'yyyy223');

-- --------------------------------------------------------

--
-- Table structure for table `skill_info_temp`
--

CREATE TABLE `skill_info_temp` (
  `id` int(100) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `std_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_info_temp`
--

INSERT INTO `skill_info_temp` (`id`, `skill`, `std_id`) VALUES
(7, 'dd', '555555ssssssssss'),
(8, 'gg', '555555ssssssssss'),
(9, 'huuu', 'ff345gg'),
(10, 'hjk', 'ravindu1252'),
(11, 'klb', 'ravindu1252'),
(12, 'php', 'chamodt1252'),
(13, 'fgh', 'gg345'),
(14, 'aa', 'aaa123'),
(15, 'fgh', 'ty567'),
(16, 'fjj', 'ty567'),
(17, 'gg', '456dfg'),
(18, 'ff', '895ABC'),
(19, 'sdf', 'hjk123'),
(20, 'qw', 'dfg123'),
(21, 'nn', '345er'),
(22, 'vv', '345er'),
(23, 'cricket', 'xxx999'),
(24, 'elle', 'xxx999');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(255) NOT NULL,
  `uocindex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nameinitials` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `uocindex`, `email`, `password`, `fullname`, `nameinitials`, `bio`, `dob`, `address`, `city`, `zipcode`, `github`, `linkedin`, `portfolio`) VALUES
(38, '345er', 'dfr@123', '123', 'qwe', 'qwe', 'qwe', '2024-03-28', 'qwe', 'qe', 22, 'rr', 'tty', 'yy'),
(33, '456dfg', 'chamodlgggakshitha666@gmail.com', '123', 'fgh', 'sd', 'er', '2024-04-05', 'rtyi', 'sdff', 345, 'bb', 'nn', 'mm'),
(26, '555555ssssssssss', 'kavindualssssdddddoka64@gmail.com', '123', '', '', '', '', '', '', 0, '', '', ''),
(34, '895ABC', 'kavindualok@895', '895', 'zzzzzzz', 'zzzzzz', 'zzzzzzzzz', '2024-03-27', 'zzzzzzz', 'zzzzzzzz', 990, 'mm', 'mm', 'mm'),
(28, 'aaa123', 'aaaa@345', '234', 'aaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', '2024-03-21', 'aaaaa', 'aaaaaa', 89, 'aa', 'aa', 'aa'),
(35, 'abc123', '123@123', '123', 'ww', 'ww', 'ww', '2024-03-28', 'ww', 'ww', 23, 'cc', 'cc', 'cc'),
(32, 'chamodt1252', 'chamod@2001', '999', 'chamod lakshitha', 'cl weththasinghe', 'Back End Developer', '2024-03-27', '93/15 Wekadawaththaa, Thumbowila, Piliyandala', 'Piliyandala', 10300, 'ccl', 'vvl', 'bbl'),
(37, 'dfg123', 'ww@123', '23', 'dd', 'dd', 'dd', '2024-04-06', 'dd', 'dd', 234, 'ss', 'ss', 'ss'),
(31, 'ff345gg', 'kavindualokff', '23', 'chamod lakshitha', 'cl weththasinghe', 'Back End Developer', '2024-03-27', '93/15 Wekadawaththaa, Thumbowila, Piliyandala', 'Piliyandala', 10300, 'ccl', 'vvl', 'bbl'),
(30, 'gg345', 'kavinduadfga64@gmail.com', '123', 'fgh', 'fgh', 'fgh', '2024-03-28', 'fgh', 'fgh', 5667, 'fgh', 'fgh', 'fgh'),
(36, 'hjk123', 'dfg@234', '234', 'dd', 'dd', 'dd', '2024-03-29', 'dd', 'dd', 44, 'ss', 'ss', 'ss'),
(29, 'ravindu1252', 'ravindu@123', '567', 'chamod lakshitha', 'cl weththasinghe', 'Back End Developer', '2024-03-27', '93/15 Wekadawaththaa, Thumbowila, Piliyandala', 'Piliyandala', 10300, 'ccl', 'vvl', 'bbl'),
(27, 'ty567', 'chamodlvvbbaksddddhitha666@gmail.com', '123', 'rrrrrrrrrrrrrrr', 'wwwwww', 'Back End Developer', '2024-03-29', 'Elpitiya', 'Elpitiya', 346, 'oo', 'yy', 'ee'),
(39, 'xxx999', 'xxx@123', '123', 'xxx', 'xxx', 'xxx', '2024-03-21', 'xxx', 'xxx', 999, 'dd', 'dd', 'dd'),
(40, 'yyyy223', 'yyyy@234', '234', 'yyyy', 'yyyyy', 'yyyyy', '2024-03-29', 'yyyyy', 'yyyy', 0, 'bb', 'bb', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `student_info_temp`
--

CREATE TABLE `student_info_temp` (
  `id` int(255) NOT NULL,
  `uocindex` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nameinitials` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `github` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info_temp`
--
ALTER TABLE `company_info_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_info`
--
ALTER TABLE `education_info`
  ADD KEY `id` (`id`);

--
-- Indexes for table `education_info_temp`
--
ALTER TABLE `education_info_temp`
  ADD KEY `id` (`id`);

--
-- Indexes for table `experience_info`
--
ALTER TABLE `experience_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience_info_temp`
--
ALTER TABLE `experience_info_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_info`
--
ALTER TABLE `language_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_info_temp`
--
ALTER TABLE `language_info_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_info`
--
ALTER TABLE `skill_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_info_temp`
--
ALTER TABLE `skill_info_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`uocindex`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student_info_temp`
--
ALTER TABLE `student_info_temp`
  ADD PRIMARY KEY (`uocindex`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_info_temp`
--
ALTER TABLE `company_info_temp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education_info`
--
ALTER TABLE `education_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `education_info_temp`
--
ALTER TABLE `education_info_temp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `experience_info`
--
ALTER TABLE `experience_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `experience_info_temp`
--
ALTER TABLE `experience_info_temp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `language_info`
--
ALTER TABLE `language_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `language_info_temp`
--
ALTER TABLE `language_info_temp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `skill_info`
--
ALTER TABLE `skill_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skill_info_temp`
--
ALTER TABLE `skill_info_temp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `student_info_temp`
--
ALTER TABLE `student_info_temp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
