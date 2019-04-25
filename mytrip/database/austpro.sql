-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 07:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `austpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `u_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `phn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`u_id`, `h_id`, `roomno`, `date`, `days`, `phn`) VALUES
(1, 1, 'ds', 'sds', 'dsdsd', 'sdsd'),
(1, 2, '4', '12/3/3', '5', '9908'),
(1, 2, '', '', '', ''),
(1, 2, '4', '2018/9/2', '7', '5656565'),
(1, 6, '5', '2018/9/2', '7', '2323232323');

-- --------------------------------------------------------

--
-- Table structure for table `contactmsg`
--

CREATE TABLE `contactmsg` (
  `idd` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactmsg`
--

INSERT INTO `contactmsg` (`idd`, `u_id`, `msg`) VALUES
(1, 1, 'bla bla bla'),
(2, 1, 'blaughghghghghghgh');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `area` varchar(100) NOT NULL,
  `img` longblob,
  `descriprtion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `name`, `status`, `area`, `img`, `descriprtion`) VALUES
(5, 'hotel zahad', 1, 'banani', 0x6164642e706e67, 'descriprtion'),
(6, 'Hotel Rohim', 2, 'dhaka', 0x6261636b2e706e67, ''),
(7, 'AkashBari', 5, 'Dhaka', 0x696d67332e6a7067, ''),
(8, 'ghgh', 5, 'dsd', 0x696d67332e6a7067, ''),
(9, 'Ananda', 3, 'Sylhet', 0x696d67312e6a7067, 'dgfgfgfg'),
(10, 'Reddisson', 11, 'Sylhet', 0x696d67312e6a7067, 'Best Experince you Will ever Have'),
(11, 'Chitra', 8, 'Sylhet', 0x36383731313533373533363430305f696d67312e6a7067, 'best place to relief from stress'),
(12, 'Grand Sultan', 13, 'Sylhet', 0x33373835313533373633343931355f696d67312e6a7067, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(13, 'Grand Nawab', 8, 'Sylhet', 0x34383730313533373633353131305f696d67322e6a7067, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(14, 'Grand Rohim', 9, 'Sylhet', 0x35303131313533373633353231385f696d67332e6a7067, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(15, 'Grand Palace', 9, 'Sylhet', 0x39333430313533373633353235355f696d67342e6a7067, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(16, 'Paradise Sylhet', 9, 'Sylhet', 0x31303336313533373633353331355f696d67352e6a7067, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(17, 'Westin', 17, 'Dhaka', 0x39323534313533373633353435305f696d67382e6a7067, 'It is a large, comfortable hotel, situated on the Dhaka. We offer an attentive, personalized service and are always available to offer any help to guests.'),
(18, 'Coxtoday', 11, 'Coxbazar', 0x37303931313533373633353437365f696d67362e6a706567, 'It is a large, comfortable hotel, situated on the Sylhet. We offer an attentive, personalized service and are always available to offer any help to guests.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `password`) VALUES
(1, 'nibir', '1234'),
(2, 'nahid', '345'),
(4, 'rohim', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmsg`
--
ALTER TABLE `contactmsg`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmsg`
--
ALTER TABLE `contactmsg`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
