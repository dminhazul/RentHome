-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 07:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `area` varchar(255) NOT NULL,
  `masterbed` varchar(5) NOT NULL,
  `singlebed` varchar(5) NOT NULL,
  `balcony` varchar(5) NOT NULL,
  `washroom` int(5) NOT NULL,
  `rent` varchar(200) NOT NULL,
  `ad_title` varchar(200) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `number` varchar(20) NOT NULL,
  `house_details` varchar(200) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `username`, `area`, `masterbed`, `singlebed`, `balcony`, `washroom`, `rent`, `ad_title`, `full_address`, `number`, `house_details`, `Image`) VALUE
(28, 'minhaz', 'Mirpur', '1', '1', '1', 2, '10000', 'Homeboshundhra', 'mirpur dhaka', '01512222222', 'mirpur dhaka', 'Upload/5dd93fa7ece331.71072469.jpg'),
(29, 'minhaz', 'Bashundhara', '1', '1', '0', 1, '3543543', 'hjukyhju', 'kkghkgh', 'kgkghk', 'kjghkghk', 'Upload/5dda8b01309745.88111375.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `uname` varchar(30) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `portfolio` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`uname`, `profile`, `portfolio`) VALUES
('tanvir16', '', ''),
('minhaz', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(64) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `day` int(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `firstname`, `lastname`, `email`, `phone`, `password`, `gender`, `day`, `month`, `year`, `mail`) VALUES
('tanvir', 'Tanvir', 'Ahamed', 'tanvir@gmail.com', '01764004448', 'tanvir', 'male', 18, 'Aug', 1994, 'w1.jpeg'),
('minhaz', 'Minhaz', 'Islam', 'minhaz@gmail.com', '01555555555', 'minhaz', 'male', 2, 'Feb', 2001, 'elon_musk_royal_society.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Usertype` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ConPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`ID`, `Name`, `Username`, `Email`, `Gender`, `Phone`, `Usertype`, `Password`, `ConPassword`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', 'Male', '01766666666', 'Admin', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
