-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 01:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `core_event`
--

CREATE TABLE `core_event` (
  `event_id` int(6) NOT NULL,
  `event_date` date NOT NULL,
  `prize_money` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(6) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `student_id` int(6) NOT NULL,
  `university_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` varchar(6) NOT NULL,
  `club_id` varchar(6) NOT NULL,
  `event_name` varchar(20) NOT NULL,
  `event_date` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `sponsor` varchar(15) NOT NULL,
  `budget` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `id` varchar(6) NOT NULL,
  `role` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(6) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `faculty_fname` varchar(10) NOT NULL,
  `faculty_lname` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_fname`, `faculty_lname`, `email`, `department`) VALUES
('f001', 'Hassan ', 'Zaman', 'hzaman@gmail.com', 'ECE'),
('f002', 'Asad ', 'Zaman', 'azaman@gmail.com', 'ECE'),
('f003', 'Iqbal', 'Rokon', 'iqr@gmail.com', 'ECE'),
('f004', 'Nadia', 'Kamal', 'nkamal@gmail.com', 'English'),
('f005', 'Mezbah', 'Uddin', 'muddin@gmail.com', 'Business'),
('f006', 'Tamanna ', 'Motahar', 'tmm@gmail.com', 'ENV');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `club_id` varchar(6) NOT NULL,
  `location_name` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` varchar(6) NOT NULL,
  `member_name` varchar(20) NOT NULL,
  `club_id` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `fb_link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subexecutive`
--

CREATE TABLE `subexecutive` (
  `id` varchar(6) NOT NULL,
  `role` varchar(20) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `club_id` varchar(6) NOT NULL,
  `event_id` varchar(6) NOT NULL,
  `no_of_trips` int(10) NOT NULL,
  `budget` int(10) NOT NULL,
  `trip_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_name` varchar(15) NOT NULL,
  `uni_address` varchar(20) NOT NULL,
  `uni_contact` int(15) NOT NULL,
  `city` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `event_id` int(6) NOT NULL,
  `event_date` int(10) NOT NULL,
  `prize_money` int(10) NOT NULL,
  `workshop_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `core_event`
--
ALTER TABLE `core_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_name`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `subexecutive`
--
ALTER TABLE `subexecutive`
  ADD PRIMARY KEY (`id`,`role`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`trip_name`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_name`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`workshop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
