-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 07:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `loc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `pwd`, `loc`) VALUES
('admin1', 'admin1', 'Bangalore'),
('admin2', 'admin2', 'Mangalore'),
('admin3', 'admin3', 'Mysore');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_reg`
--

CREATE TABLE `admin_user_reg` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `lno` varchar(13) NOT NULL,
  `dob` date DEFAULT NULL,
  `bgrp` varchar(3) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `addr` varchar(40) DEFAULT NULL,
  `adrive` varchar(50) DEFAULT NULL,
  `idate` date DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `vno` varchar(10) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user_reg`
--

INSERT INTO `admin_user_reg` (`fname`, `lname`, `lno`, `dob`, `bgrp`, `gender`, `addr`, `adrive`, `idate`, `edate`, `vno`, `pwd`) VALUES
('Sinchan', 'Dikshith', '1234567890123', '1990-02-10', 'A+', 'Female', '#116 1st main,2nd cross Malleshwaram Ban', 'Motorcycles of any cc but with no gears - includin', '2005-01-01', '2010-01-01', 'KA02AC9564', 'qwerty'),
('Sukruth', 'Aithal', '1234567890124', '1994-06-02', 'AB+', 'Female', '#112 2nd Vijaynagar Bangalore-560079', 'Light Motor Vehicle for non transport purposes', '2001-02-12', '2006-02-12', 'KA02AC9564', 'qwerty'),
('Harshith', 'Jain', '1234567890125', '1993-06-01', 'A+', 'Female', '#1123 1st main Vijaynagar Bangalore-5600', 'Motorcycles with engine capacity of 50 cc or less ', '2016-01-31', '2019-01-01', 'KA02AC9565', 'qwerty'),
('Kruthi', 'Nayak', '1234567890126', '1991-02-01', 'B=', 'Female', '#75 vijaynagar 12th cross Bangalore.', 'Motorcycles of any cc but with no gears - includin', '2016-01-01', '2020-01-01', 'KA02AC9578', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `civil_officer_info`
--

CREATE TABLE `civil_officer_info` (
  `id` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phno` int(10) DEFAULT NULL,
  `sno` int(3) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_officer_info`
--

INSERT INTO `civil_officer_info` (`id`, `fname`, `lname`, `dob`, `phno`, `sno`, `city`, `pwd`) VALUES
('cofficer01', 'Sheethal ', 'Shetty', '1994-10-02', 2147483647, 116, 'Mattikere', 'qwerty'),
('officer001', 'Nishanth', 'Nayak', '1987-09-02', 2147483647, 12, 'Malleshwaram', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `lno` varchar(30) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`lno`, `photo`) VALUES
('1234567890123', 'user2.jpg'),
('1234567890124', 'user7.jpg'),
('1234567890125', 'user1.jpg'),
('1234567890126', 'user8.jpg'),
('1234567890127', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `lost_vehicle_info`
--

CREATE TABLE `lost_vehicle_info` (
  `vno` varchar(10) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `cmnts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_vehicle_info`
--

INSERT INTO `lost_vehicle_info` (`vno`, `loc`, `date`, `time`, `cmnts`) VALUES
('KA02AC9564', 'Bangalore at Malleshwaram', '2016-06-12', 12, 'Lost vehicle Bike is found at location Malleshwara'),
('KA02AC9565', 'Bangalore', '2016-01-01', 2, 'sevire.'),
('KA02AC9566', 'Mattikere', '2016-01-01', 4, 'sevire.');

-- --------------------------------------------------------

--
-- Table structure for table `offence_list`
--

CREATE TABLE `offence_list` (
  `oid` int(5) NOT NULL,
  `type` varchar(70) DEFAULT NULL,
  `fine` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offence_list`
--

INSERT INTO `offence_list` (`oid`, `type`, `fine`) VALUES
(1, 'Drink and drive', 500),
(2, 'Driving a non registered vehicle.', 3000),
(3, 'Driving a vehicle on the road without renewal of it''s license. ', 1500),
(4, 'Driving a vehicle on the road without renewal of it''s license. ', 1500),
(5, 'Driving a vehicle without number plates.', 3000),
(6, 'Driving a vehicle in the opposite (wrong) direction.', 1500),
(7, 'Exceeding posted speed limit on the road. ', 3000),
(8, 'If the driver and the front seat passenger do not wear the seat belts ', 3000),
(9, 'Drivers using horns except when facing an imminent danger. ', 3000),
(10, 'Parking vehicle in no parking.', 3000),
(11, 'Signal Jump', 200),
(20, 'not wearing helmet', 200);

-- --------------------------------------------------------

--
-- Table structure for table `officer_offence_reg`
--

CREATE TABLE `officer_offence_reg` (
  `lno` varchar(13) NOT NULL,
  `vno` varchar(12) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `type` varchar(70) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(3) NOT NULL,
  `cmnts` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_offence_reg`
--

INSERT INTO `officer_offence_reg` (`lno`, `vno`, `loc`, `type`, `date`, `time`, `cmnts`, `amount`) VALUES
('1234567890123', 'KA02AC9564', 'Malleshwaram 18 cross Bangalor', 'Driving without carrying a Valid Driving License.', '2016-02-01', '12', 'Found driving at loc', 0),
('1234567890124', 'KA02AC9564', 'Hebbal Bangalore', ' Driving by a minor (aged below 18).', '2016-02-01', '12', 'Driving at location ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `officer_reg`
--

CREATE TABLE `officer_reg` (
  `oid` varchar(10) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phno` int(10) DEFAULT NULL,
  `sno` int(2) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_reg`
--

INSERT INTO `officer_reg` (`oid`, `fname`, `lname`, `dob`, `phno`, `sno`, `city`, `pwd`) VALUES
('officer001', 'Kusum', 'Nayak', '1980-02-02', 2147483647, 201, 'Hebbala', 'qwerty'),
('officer002', 'Sushum ', 'Jain', '1978-01-01', 2147483647, 112, 'Basveshwarnagar', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `lno` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `bgrp` varchar(3) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `addr` varchar(20) DEFAULT NULL,
  `adrive` varchar(40) DEFAULT NULL,
  `idate` date DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `vno` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `pwd`, `status`, `date`) VALUES
('1234567890123', 'qwerty', 0, '2016-12-02'),
('1234567890124', 'qwerty', 0, '2016-12-02'),
('1234567890123', 'qwerty', 0, '2016-12-02'),
('1234567890124', 'qwerty', 0, '2016-12-02'),
('1234567890123', 'qwerty', 0, '2016-12-02'),
('1234567890125', 'qwerty', 0, '2016-12-02'),
('1234567890123', 'qwerty', 0, '2016-12-04'),
('1234567890123', 'qwerty', 0, '2016-12-04'),
('1234567890123', 'qwerty', 0, '2016-12-05'),
('1234567890123', 'qwerty', 1, '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `user_phno`
--

CREATE TABLE `user_phno` (
  `lno` varchar(20) NOT NULL,
  `phno1` varchar(10) DEFAULT NULL,
  `phno2` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_phno_values`
--

CREATE TABLE `user_phno_values` (
  `lno` varchar(13) NOT NULL,
  `phno1` varchar(10) NOT NULL,
  `phno2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_phno_values`
--

INSERT INTO `user_phno_values` (`lno`, `phno1`, `phno2`) VALUES
('', '', ''),
('1234567890123', '9972193448', '7204325857'),
('1234567890124', '9845846463', '9643226754'),
('1234567890125', '1234567890', '1234567890'),
('1234567890126', '8553290187', '335421908'),
('1234567890127', '9972193448', '8553290187');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_user_reg`
--
ALTER TABLE `admin_user_reg`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `civil_officer_info`
--
ALTER TABLE `civil_officer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_vehicle_info`
--
ALTER TABLE `lost_vehicle_info`
  ADD PRIMARY KEY (`vno`);

--
-- Indexes for table `offence_list`
--
ALTER TABLE `offence_list`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `officer_reg`
--
ALTER TABLE `officer_reg`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `user_phno`
--
ALTER TABLE `user_phno`
  ADD PRIMARY KEY (`lno`);

--
-- Indexes for table `user_phno_values`
--
ALTER TABLE `user_phno_values`
  ADD PRIMARY KEY (`lno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_phno`
--
ALTER TABLE `user_phno`
  ADD CONSTRAINT `user_phno_ibfk_1` FOREIGN KEY (`lno`) REFERENCES `user_info` (`lno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
