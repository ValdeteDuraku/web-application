-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 05:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swimclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Note_Id` int(11) NOT NULL,
  `file1` varchar(100) NOT NULL,
  `difference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`firstname`, `lastname`, `email`, `password`, `Note_Id`, `file1`, `difference`) VALUES
('Amber', 'Hilton', 'amber@gmail.com', 'amber1234', 0, '', 1),
('Ben', 'Smith', 'ben@gmail.com', 'ben1234', 0, '', 1),
('Jack', 'Hilton', 'jack@gmail.com', 'jack1234', 0, '', 1),
('Nick', 'Luis', 'nick@gmail.com', 'nick1234', 0, '', 1),
('Pitter', 'Green', 'pitter@gmail.com', 'pitter1234', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `Comp_Id` int(11) NOT NULL,
  `Perf` int(11) NOT NULL,
  `Swim_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`Comp_Id`, `Perf`, `Swim_Id`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `fname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `emergency` int(11) NOT NULL,
  `performance` varchar(100) NOT NULL,
  `Coach` varchar(25) NOT NULL,
  `Parent` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `difference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`fname`, `lastname`, `email`, `age`, `emergency`, `performance`, `Coach`, `Parent`, `password`, `difference`) VALUES
('Ana', 'Potter', 'ana@gmail.com', 21, 1234567, 'Basic_Level', 'Ben', 'John', 'ana1234', 0),
('Besi', 'Duraku', 'besi@gmail.com', 18, 47802990, 'excellent', 'Amber', 'Dan', 'besi1234', 0),
('Chris', 'Smith', 'chris@gmail.com', 34, 1234567, 'Middle_level', 'Ben', 'Joseph', 'chris1234', 0),
('Henri', 'Smith', 'henri@gmail.com', 25, 3243452, 'Fail', 'Jack', 'Flori', 'henri1234', 0),
('jonas', 'Doe', 'jonas@gmail.com', 23, 233445, 'Good', 'Ben', 'Jack', 'jonas1234', 0),
('Misa', 'Duraku', 'misa@gmail.com', 23, 12345678, 'excellent', 'Amber', 'Xeni', 'misa1234', 0),
('Vali', 'Duraku', 'vali@gmail.com', 25, 234569, 'excellent', 'Ben', 'Kelvin', 'vali1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Note_Id` int(11) NOT NULL,
  `Notes` int(11) NOT NULL,
  `Member` varchar(25) NOT NULL,
  `Coach` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Note_Id`, `Notes`, `Member`, `Coach`) VALUES
(6, 8, 'Ana', 'Ben'),
(7, 8, 'Chris', 'Ben'),
(8, 8, 'Vali', 'Ben'),
(28, 5, 'Misa', 'Amber'),
(55, 5, 'Ana', 'Ben'),
(56, 6, 'Chris', 'Ben'),
(57, 7, 'Vali', 'Ben'),
(59, 12, 'Misa', 'Amber'),
(62, 9, 'Vali', 'Ben'),
(63, 4, 'Ana', 'Ben'),
(64, 5, 'Chris', 'Ben'),
(65, 9, 'Vali', 'Ben'),
(66, 4, 'Ana', 'Ben'),
(68, 9, 'Vali', 'Ben'),
(69, 9, 'Ana', 'Ben'),
(70, 9, 'Chris', 'Ben'),
(71, 9, 'Vali', 'Ben'),
(72, 9, 'Ana', 'Ben'),
(73, 9, 'Chris', 'Ben'),
(74, 9, 'Vali', 'Ben'),
(75, 5, 'Ana', 'Ben'),
(76, 6, 'Ana', 'Ben'),
(77, 6, 'Ania', 'Ben'),
(78, 7, 'Chris', 'Ben'),
(79, 8, 'Vali', 'Ben'),
(80, 8, 'Ania', 'Amber'),
(81, 9, 'Besi', 'Amber'),
(82, 9, 'Misa', 'Amber'),
(83, 6, 'Ana', 'Ben'),
(84, 7, 'Chris', 'Ben'),
(85, 8, 'jonas', 'Ben'),
(86, 9, 'Vali', 'Ben');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `P_Id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`P_Id`, `firstname`, `lastname`, `email`, `contact`, `password`) VALUES
(1, 'John', 'Fish', 'john@gmail.com', 23456, 'john1234'),
(2, 'Kelvin', 'Duff', 'Kelvin@gmail.com', 68732846, 'kelvin1234'),
(3, 'Dan', 'Deep', 'dan@gmail.com', 873491237, 'dan1234');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `Performance_Id` int(11) NOT NULL,
  `Member` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`Performance_Id`, `Member`) VALUES
(2, 'Ana'),
(1, 'Besi');

-- --------------------------------------------------------

--
-- Table structure for table `swimmer`
--

CREATE TABLE `swimmer` (
  `Swim_Id` int(11) NOT NULL,
  `Coach` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `performance` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swimmer`
--

INSERT INTO `swimmer` (`Swim_Id`, `Coach`, `firstname`, `performance`, `lastname`, `age`) VALUES
(1, 'Dilan', 'Inna', 'excellent', 'Andrea', 20),
(2, 'Roan', 'Emma', 'good', 'Jolie', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`email`),
  ADD KEY `Note_Id` (`Note_Id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`Comp_Id`),
  ADD KEY `Perf_Id_fk` (`Perf`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`email`),
  ADD KEY `coach` (`Coach`),
  ADD KEY `P_Id` (`Parent`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Note_Id`),
  ADD KEY `Member` (`Member`),
  ADD KEY `Coach` (`Coach`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`Performance_Id`),
  ADD KEY `Member_Id_fk` (`Member`);

--
-- Indexes for table `swimmer`
--
ALTER TABLE `swimmer`
  ADD PRIMARY KEY (`Swim_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `Comp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `Note_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `Performance_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `swimmer`
--
ALTER TABLE `swimmer`
  MODIFY `Swim_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
