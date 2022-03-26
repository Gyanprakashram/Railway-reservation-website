-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `pname` text NOT NULL,
  `age` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `gender` text NOT NULL,
  `country` text NOT NULL,
  `preference` text NOT NULL,
  `caddress` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `post` text NOT NULL,
  `pincode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`pname`, `age`, `mobile`, `gender`, `country`, `preference`, `caddress`, `state`, `city`, `post`, `pincode`) VALUES
('sumit', 45, 6465465, 'fenake ', 'India', 'winos', 'sonari', 'jharkhad', 'jamshedpur', 'dimna', 5656),
('sumit', 45, 6465465, 'fenake ', 'India', 'winos', 'sonari', 'jharkhad', 'jamshedpur', 'dimna', 5656),
('sumit', 1, 6465465, 'male', 'India', 'winos', 'sonari', 'jharkhad', 'jamshedpur', 'dimna', 5656),
('sumit', 45, 6465465, 'fenake ', 'India', 'windows', 'sonari', 'jharkhad', 'jamshedpur', '629900', 5656),
('sumit', 45, 6465465, 'fenake ', 'India', 'windows', 'sonari', 'jharkhad', 'jamshedpur', '629900', 5656),
('sumit', 43, 6465465, 'male', 'India', 'windows', 'sonari', 'jharkhad', 'jamshedpur', 'dimna', 5656),
('sumit', 43, 6465465, 'male', 'India', 'windows', 'sonari', 'jharkhad', 'jamshedpur', 'dimna', 5656),
('puskar', 21, 52, 'male', 'bhutan', 'window', 'raidih', 'jharkhand', 'Jamshedpur ', 'aditypur', 831013),
('gfgfg', 21, 656565, 'MALE', 'bhutan', 'no', 'sonati', 'jharkhad', 'Jamshedpur ', 'adit', 831013);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardno` int(100) NOT NULL,
  `expdate` int(100) NOT NULL,
  `cvv` int(100) NOT NULL,
  `holdername` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardno`, `expdate`, `cvv`, `holdername`) VALUES
(0, 0, 0, ''),
(12, 120322, 999, 'puskar'),
(1234, 25411, 123, 'sumit'),
(9546, 9874, 456, 'sony');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `train_no` int(100) NOT NULL,
  `train_name` varchar(255) NOT NULL,
  `fromCity` varchar(255) NOT NULL,
  `toCity` varchar(255) NOT NULL,
  `no_of_station` int(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `Tickets Available` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`train_no`, `train_name`, `fromCity`, `toCity`, `no_of_station`, `duration`, `Tickets Available`) VALUES
(15623, 'ranchi-hatia', 'Ranchi', 'Hatia', 4, 663, 98),
(18181, 'Tata Chapra express', 'Tata', 'Chapra', 42, 663, 90),
(75623, 'Rajdhani-Express', 'Delhi', 'Howrah', 42, 663, 90),
(98569, 'Intercity-express', 'Patna', 'Horah', 69, 663, 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `password`, `username`) VALUES
('1234', 'sada', '1234', ''),
('ash2222', 'ashwini', '2222', 'ash'),
('GyanDhoPrakashpriyanshulover22', 'Gyan Prakash', 'priyanshulover22', 'GyanDhoPrakash'),
('ppmsd420basantichodi420', 'Priyanshu Prakash', 'basantichodi420', 'ppmsd420'),
('puskar1234', 'puskar', '1234', 'puskar'),
('sumitsonu1234', 'sumit', '1234', 'sumitsonu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`cardno`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`train_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
