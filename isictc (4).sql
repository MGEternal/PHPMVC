-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 03:48 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isictc`
--

-- --------------------------------------------------------

--
-- Table structure for table `aorl`
--

CREATE TABLE `aorl` (
  `aorl_id` int(20) NOT NULL,
  `std_id` int(20) NOT NULL,
  `req_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cls_id` int(20) NOT NULL,
  `cls_name` varchar(50) NOT NULL,
  `cls_group` varchar(50) NOT NULL,
  `dpm_id` int(20) NOT NULL,
  `tch_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cls_id`, `cls_name`, `cls_group`, `dpm_id`, `tch_id`) VALUES
(1, 'สทส.2', '1', 1, 1),
(2, 'สชก.1', '1', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cpn_id` int(20) NOT NULL,
  `cpn_name` varchar(50) NOT NULL,
  `cpn_address` varchar(50) NOT NULL,
  `cpn_email` varchar(50) NOT NULL,
  `cpn_phnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cpn_id`, `cpn_name`, `cpn_address`, `cpn_email`, `cpn_phnumber`) VALUES
(10, 'BEE', '34/104', 'wshdf556@gmail.com', '0927537470'),
(24, 'asdasdasdasd', 'asdasdasd', 'asdasdasd', 'asdasdasd'),
(26, 'BEE1', '34/104', 'wshdf556@gmail.com', '0927537470'),
(27, 'BEE2', '34/104', 'wshdf556@gmail.com', '0927537470');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dpm_id` int(20) NOT NULL,
  `dpm_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dpm_id`, `dpm_name`) VALUES
(1, 'เทคโนโลยีสารสนเทศ'),
(2, 'ช่างกลโรงงาน');

-- --------------------------------------------------------

--
-- Table structure for table `require`
--

CREATE TABLE `require` (
  `req_id` int(20) NOT NULL,
  `dpm_id` int(20) NOT NULL,
  `req_number` varchar(50) NOT NULL,
  `cpn_id` int(20) NOT NULL,
  `req_sex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` int(20) NOT NULL,
  `cls_id` int(20) NOT NULL,
  `std_fname` varchar(50) NOT NULL,
  `std_lname` varchar(20) NOT NULL,
  `std_address` varchar(50) NOT NULL,
  `std_birthday` date NOT NULL,
  `std_age` varchar(2) NOT NULL,
  `std_sex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `cls_id`, `std_fname`, `std_lname`, `std_address`, `std_birthday`, `std_age`, `std_sex`) VALUES
(1, 1, 'นาย ศิริชัย', 'ยงชีพ', '34/134', '2021-02-01', '20', 'ชาย'),
(2, 2, 'นาง เจน', 'สุดสวย', '114/504', '2021-02-10', '21', 'หญิง');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_detail`
-- (See below for the actual view)
--
CREATE TABLE `student_detail` (
`std_id` int(20)
,`std_fname` varchar(50)
,`std_lname` varchar(20)
,`std_address` varchar(50)
,`std_birthday` date
,`std_sex` varchar(20)
,`cls_name` varchar(50)
,`dpm_name` varchar(50)
,`tch_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tch_id` int(20) NOT NULL,
  `tch_name` varchar(50) NOT NULL,
  `tch_tel` varchar(50) NOT NULL,
  `tch_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tch_id`, `tch_name`, `tch_tel`, `tch_code`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd'),
(2, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa'),
(3, 'beeeeeeee', '0927537470', '114400'),
(4, 'beeeeeeee', '0927537470', '114400');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_group` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_group`, `status`, `id`) VALUES
(7, 'bee1', '123456', 'teacher', '1', 1),
(8, 'bee2', '123456', 'student', '1', 10),
(20, 'bee3', '123456', 'teacher', '1', 3),
(23, 'wshdf556', '123456', 'company', '1', 26),
(24, 'admin', '123456', 'admin', '1', 0);

-- --------------------------------------------------------

--
-- Structure for view `student_detail`
--
DROP TABLE IF EXISTS `student_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_detail`  AS  select `student`.`std_id` AS `std_id`,`student`.`std_fname` AS `std_fname`,`student`.`std_lname` AS `std_lname`,`student`.`std_address` AS `std_address`,`student`.`std_birthday` AS `std_birthday`,`student`.`std_sex` AS `std_sex`,`c`.`cls_name` AS `cls_name`,`d`.`dpm_name` AS `dpm_name`,`teacher`.`tch_name` AS `tch_name` from (((`student` join `class` `c` on((`student`.`cls_id` = `c`.`cls_id`))) join `department` `d` on((`c`.`dpm_id` = `d`.`dpm_id`))) join `teacher` on((`c`.`tch_id` = `teacher`.`tch_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aorl`
--
ALTER TABLE `aorl`
  ADD PRIMARY KEY (`aorl_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cls_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cpn_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dpm_id`);

--
-- Indexes for table `require`
--
ALTER TABLE `require`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tch_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aorl`
--
ALTER TABLE `aorl`
  MODIFY `aorl_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cls_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cpn_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dpm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `require`
--
ALTER TABLE `require`
  MODIFY `req_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tch_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
