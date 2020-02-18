-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 08:26 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `cdescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdescription`) VALUES
(1, 'student', 'Student of College or school'),
(2, 'Manager', 'Manager of the company'),
(3, 'staff', 'faculty of college or school'),
(4, 'candidate', 'participator'),
(5, 'ss', 'asgdvgsh');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(11) NOT NULL,
  `ename` varchar(20) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `no_of_participants` int(20) NOT NULL,
  `estatus` int(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `ename`, `description`, `no_of_participants`, `estatus`, `start_date`, `end_date`) VALUES
(1, 'Internship', 'Final year internship programme', 15, 1, '2020-01-15', NULL),
(2, 'Marathon', 'Marathon for smart city', 20, 3, '2020-02-15', '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `manage_entries`
--

CREATE TABLE `manage_entries` (
  `mid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `ass_task` varchar(20) NOT NULL,
  `sid` int(11) NOT NULL,
  `prid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_entries`
--

INSERT INTO `manage_entries` (`mid`, `eid`, `pname`, `ass_task`, `sid`, `prid`) VALUES
(1, 1, 'Apurva', 'coder', 2, 1),
(2, 1, 'Sanjukumari', 'Designer', 2, 3),
(3, 2, 'Sanket', 'runner', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `prid` int(11) NOT NULL,
  `prname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`prid`, `prname`) VALUES
(1, 'high'),
(2, 'low'),
(3, 'medium');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`sid`, `sname`) VALUES
(1, 'Started'),
(2, 'pending'),
(3, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `take_entries`
--

CREATE TABLE `take_entries` (
  `pid` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `paddr` varchar(30) NOT NULL,
  `pmbl` varchar(15) NOT NULL,
  `payment` int(11) NOT NULL,
  `sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `take_entries`
--

INSERT INTO `take_entries` (`pid`, `eid`, `cid`, `pname`, `paddr`, `pmbl`, `payment`, `sdate`) VALUES
(1, 1, 1, 'Apurva', 'Yellur', '9856231475', 1000, '2020-01-16'),
(2, 1, 1, 'Farheen', 'camp belgaum', '8956214756', 1000, '2020-01-16'),
(3, 1, 1, 'Sanjukumari', 'Omkar Nagar', '7854896512', 500, '2020-01-15'),
(4, 1, 1, 'Shreeya', 'Vadgoan', '9856214756', 500, '2020-01-15'),
(5, 2, 4, 'Sanket', 'azam nagar', '9856123575', 600, '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Admin', 'admin'),
(2, 'Sanju', 'sanju'),
(3, 'Apurva', 'apurva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `estatus` (`estatus`);

--
-- Indexes for table `manage_entries`
--
ALTER TABLE `manage_entries`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `pid` (`eid`,`sid`,`prid`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `take_entries`
--
ALTER TABLE `take_entries`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `eid` (`eid`,`cid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_entries`
--
ALTER TABLE `manage_entries`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `take_entries`
--
ALTER TABLE `take_entries`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
