-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 06:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_first` varchar(128) NOT NULL,
  `a_last` varchar(128) NOT NULL,
  `a_gender` varchar(6) NOT NULL,
  `a_cell` varchar(16) NOT NULL,
  `a_address` varchar(256) NOT NULL,
  `a_position` varchar(80) NOT NULL,
  `a_user` varchar(64) DEFAULT NULL,
  `a_pwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_first`, `a_last`, `a_gender`, `a_cell`, `a_address`, `a_position`, `a_user`, `a_pwd`) VALUES
(1, 'Almarufuzzaman', 'Sajal', 'Male', '+8801677594039', 'North Kamalapur, Motijheel, Dhaka-1217;', 'Manager', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_first` varchar(128) NOT NULL,
  `e_last` varchar(128) NOT NULL,
  `e_gender` varchar(8) NOT NULL,
  `e_cell` varchar(16) NOT NULL,
  `e_address` varchar(256) NOT NULL,
  `e_position` varchar(80) NOT NULL,
  `e_salary` int(11) NOT NULL,
  `e_join` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_first`, `e_last`, `e_gender`, `e_cell`, `e_address`, `e_position`, `e_salary`, `e_join`) VALUES
(1, 'Khurshid', 'Alam', 'Male', '+8801234567890', 'Gopalganj', 'Accountant', 30000, '2017-12-05'),
(2, 'Borun', 'Das', 'Male', '+8801234127890', 'Nator', 'Advisor', 25000, '2016-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(128) NOT NULL,
  `item_type` varchar(128) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_type`, `item_price`, `item_quantity`) VALUES
(1, '1 Week', 'Turkey Chicks', 500, 50),
(2, '2 Weeks', 'Turkey Chicks', 600, 50),
(3, '3 Weeks', 'Turkey Chicks', 700, 50),
(4, 'Less Than 1 Month', 'Turkey Chicks', 800, 50),
(5, '1-2 Month', 'Turkey Chicks', 1500, 50),
(6, '2-3 Month', 'Medium Turkey', 2000, 50),
(7, '3-4 Month', 'Medium Turkey', 2500, 50),
(8, '4-5 Month', 'Medium Turkey', 3000, 50),
(9, '5-6 Month', 'Adult Turkey', 3500, 50),
(10, '6-7 Month', 'Adult Turkey', 4000, 50),
(11, '7-8 Month', 'Adult Turkey', 4200, 50),
(12, '1 Egg', 'Egg', 150, 250),
(13, '1 Egg', 'Egg', 150, 250),
(14, '12 Egg', 'Egg', 1500, 250),
(15, '50 Egg', 'Egg', 150, 250),
(16, '100 Egg', 'Egg', 10000, 250),
(17, '1 KG', 'Meat', 550, 100),
(18, '5 KG', 'Meat', 2700, 100),
(19, '20 KG', 'Meat', 10500, 100),
(20, '30 KG', 'Meat', 15500, 100),
(21, '40 KG', 'Meat', 20000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mgs_id` int(11) NOT NULL,
  `mgs_name` varchar(128) NOT NULL,
  `mgs_cell` varchar(20) NOT NULL,
  `mgs_email` varchar(80) NOT NULL,
  `mgs` varchar(384) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mgs_id`, `mgs_name`, `mgs_cell`, `mgs_email`, `mgs`) VALUES
(1, 'Mostofa', '+8801124251256', 'mosto@faa.com', 'Sample message. testing 123...'),
(2, 'Bokul Miya', '+8801714961590', 'bokul@miya.com', 'Another testing.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mgs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mgs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
