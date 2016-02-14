-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2016 at 10:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twt06`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `leader` varchar(20) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `leader`, `department`) VALUES
('ACC', 'Accounting', 'Mr. Anthony Ramadras', 'FOB'),
('AI', 'Artificial intelligence', 'Dr. Tan', 'FIST'),
('BA', 'Business Administrative', 'Mr. Lee', 'FOB'),
('BI', 'Bioinformatics', 'Dr. Ng Chong Han', 'FIST'),
('DCN', 'Data Communication and Networking', 'Dr. Subarmaniam Kann', 'FIST'),
('FIB', 'Foundation in Business', 'Mrs. Siti Hasmah', 'FOB'),
('FIE', 'Foundation in Engineering', 'Dr. Koo Voon Chet', 'FET'),
('FIL', 'Foundation in Law', 'Mr. Ahmad Rizal bin ', 'FOL'),
('FIT', 'Foundation in Information Technology', 'Dr. Afizan', 'FIST'),
('IL', 'International Law', 'Mr. Wong', 'FOL'),
('ITM', 'Information Technology Management', 'Dr. Afizan', 'FIST'),
('ME', 'Mechanical Engineering', 'Dr. Tso Chih Ping', 'FET'),
('RA', 'Robotics and Automation', 'Dr. Sim Kok Swee', 'FET'),
('ST', 'Security Technology', '	Ms. Ooi Shih Yin', 'FIST'),
('TCM', 'Telecommunications', 'Dr. Koo Voon Chet', 'FET');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_number` int(11) NOT NULL,
  `hall_name` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_number`, `hall_name`, `address`, `tel`) VALUES
(101, 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4234231'),
(102, 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4234231'),
(103, 'Gamma', 'Lot A, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4234231'),
(201, 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4238888'),
(202, 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4238888'),
(203, 'Beta', 'Lot B, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4238888'),
(301, 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4239999'),
(302, 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4239999'),
(303, 'Omega', 'Lot c, Melaka University, Bkt Beruang, 75450 Ayer ', '04-4239999');

-- --------------------------------------------------------

--
-- Table structure for table `lease`
--

CREATE TABLE `lease` (
  `lease_number` varchar(6) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `place_number` int(11) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lease`
--

INSERT INTO `lease` (`lease_number`, `start_date`, `end_date`, `status`, `student_id`, `place_number`, `staff_id`) VALUES
('123', '2016-02-01', '2016-02-29', 'Approve', 1141125063, 1221, '1221334'),
('2345', '2016-02-01', '2016-02-29', 'wait', 1141327308, 1033, '1221334');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_number` int(11) NOT NULL,
  `rent_rate` double DEFAULT NULL,
  `hall_number` int(11) DEFAULT NULL,
  `room_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_number`, `rent_rate`, `hall_number`, `room_number`) VALUES
(10101, 50, 101, 1),
(10102, 50, 101, 2),
(10103, 50, 101, 3),
(10201, 50, 102, 1),
(10202, 50, 102, 2),
(10203, 50, 102, 3),
(10301, 50, 103, 1),
(10302, 50, 103, 2),
(10303, 50, 103, 3),
(20101, 65, 201, 1),
(20102, 65, 201, 2),
(20103, 65, 201, 3),
(20201, 65, 202, 1),
(20202, 65, 202, 2),
(20203, 65, 202, 3),
(20301, 65, 203, 1),
(20302, 65, 203, 2),
(20303, 65, 203, 3),
(30101, 75, 301, 1),
(30102, 75, 301, 2),
(30103, 75, 301, 3),
(30201, 75, 302, 1),
(30202, 75, 302, 2),
(30203, 75, 302, 3),
(30301, 75, 303, 1),
(30302, 75, 303, 2),
(30303, 75, 303, 3);

-- --------------------------------------------------------

--
-- Table structure for table `relative`
--

CREATE TABLE `relative` (
  `relative_name` varchar(20) NOT NULL,
  `relationship` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `tel` varchar(12) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(20) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `course_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fname`, `lname`, `address`, `dob`, `category`, `course_id`) VALUES
(1141125063, 'Ng', 'Tian Ann', '109-M,Jalan Mayang , melaka', '1992-07-18', 'PG', 'ST'),
(1141327308, 'Louis', 'Lee', 'Jalan melaka', '1993-06-30', '2UG', 'ITM'),
(1141333333, 'John', 'Tan', 'jalan dahlia', '1993-02-05', '1UG', 'AI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_number`);

--
-- Indexes for table `lease`
--
ALTER TABLE `lease`
  ADD PRIMARY KEY (`lease_number`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_number`);

--
-- Indexes for table `relative`
--
ALTER TABLE `relative`
  ADD PRIMARY KEY (`relative_name`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
