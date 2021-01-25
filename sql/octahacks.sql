-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 01:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octahacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `banking` varchar(30) NOT NULL,
  `inputAge` int(11) NOT NULL,
  `inputRequirement` varchar(100) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`inputName`, `inputContact`, `banking`, `inputAge`, `inputRequirement`, `inputSomething`) VALUES
('Aman', '9876543210', 'Open an Account', 20, 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `bill` int(11) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`inputName`, `inputContact`, `bill`, `inputSomething`) VALUES
('dsdss', 'dcfvg', 0, 'fgvfgb'),
('FVFDV', 'FGBVGFBV', 0, 'GFBGFB');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `service` varchar(30) NOT NULL,
  `inputRequirement` varchar(100) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`inputName`, `inputContact`, `service`, `inputRequirement`, `inputSomething`) VALUES
('aman', '7867867860', 'GST Return', 'nothing', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `cname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `uni` varchar(50) NOT NULL,
  `per` varchar(10) NOT NULL,
  `compExp` varchar(30) NOT NULL,
  `exp` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `hno` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `land` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`cname`, `phone`, `email`, `dob`, `gender`, `qualification`, `coursename`, `year`, `uni`, `per`, `compExp`, `exp`, `city`, `hno`, `area`, `land`) VALUES
('Aman', '9876543210', 'aman@gmail.com', '2020-11-20', 'Male', 'Post Graduation', 'btech', '2020', 'cu', '100', 'outstanding', ' n', 'nothing', 'nothing', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `donate` varchar(30) NOT NULL,
  `inputAddress` varchar(100) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`inputName`, `inputContact`, `donate`, `inputAddress`, `inputSomething`) VALUES
('aman', '9876543210', 'Old Footwear', 'nothing', 'no'),
('aaa', 'aaa', 'Excess Food', 'aaa', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `ename` varchar(30) NOT NULL,
  `emailE` varchar(30) NOT NULL,
  `phoneE` varchar(10) NOT NULL,
  `bname` varchar(10) NOT NULL,
  `typeofjob` varchar(30) NOT NULL,
  `noofcanditates` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`ename`, `emailE`, `phoneE`, `bname`, `typeofjob`, `noofcanditates`) VALUES
('Aman', 'aman@gmail.com', '9876543210', '9876543210', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `insurance` varchar(30) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`inputName`, `inputContact`, `insurance`, `inputSomething`) VALUES
('Aman', '9876543210', 'Medical Insurance', 'nothing'),
('Aman', '9876543210', 'Open an Account', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pickdrop`
--

CREATE TABLE `pickdrop` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `inputPickup` varchar(100) NOT NULL,
  `inputDelivery` varchar(100) NOT NULL,
  `inputSuggestion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickdrop`
--

INSERT INTO `pickdrop` (`inputName`, `inputContact`, `inputPickup`, `inputDelivery`, `inputSuggestion`) VALUES
('aman', '9876543210', 'bti', 'cdg', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `property` varchar(30) NOT NULL,
  `inputRequirement` varchar(100) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`inputName`, `inputContact`, `property`, `inputRequirement`, `inputSomething`) VALUES
('Aman', '9876543210', 'Shop/House Available on Rent', 'nothing', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `inputName` varchar(30) NOT NULL,
  `inputContact` varchar(10) NOT NULL,
  `ticket` varchar(30) NOT NULL,
  `inputSomethingnew` varchar(100) NOT NULL,
  `inputSomething` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`inputName`, `inputContact`, `ticket`, `inputSomethingnew`, `inputSomething`) VALUES
('aman', '9874563210', 'Bus Tickets', 'vbfkvfd', 'fvfdvbfdv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone`, `email`, `pass`, `address`) VALUES
('Raman', '7896541230', 'aman@gmail.com', 'raman', ''),
('Chaman', '9874563210', 'chaman@gmail.com', 'chaman', 'gobindgarh'),
('Aman', '9876543210', 'aman@gmail.com', 'amangmail', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`inputContact`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`phoneE`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
