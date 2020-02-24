-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2016 at 06:21 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
('biggboss', 'shohan', 'chocolate'),
('boss2', 'ananto', 'paykhana'),
('boss3', 'anas', 'gondhopaad');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Name` varchar(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Car_License_Number` varchar(70) NOT NULL,
  `Car_Engine_Number` varchar(80) NOT NULL,
  `Appointment_Date` date NOT NULL,
  `Mechanic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Name`, `Address`, `Phone`, `Car_License_Number`, `Car_Engine_Number`, `Appointment_Date`, `Mechanic`) VALUES
('Bokul', 'Gulshan', '01987654568', '666', '761', '1995-04-30', 'Tyrion Lannister'),
('MJA Shohan', '38 B.K. Gangully Lane ', '01534682303', 'MA-123-596', '21Huehuehue', '2016-08-24', 'The Doctor'),
('kjsdhlhfl', 'dslhfhlqefh', '0923023984028', 'shglsdhl', 'slwsh', '2005-12-24', 'Barry Allen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Car_License_Number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
