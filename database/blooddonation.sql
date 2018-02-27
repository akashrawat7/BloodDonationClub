-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 12:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `regform1`
--

CREATE TABLE `regform1` (
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regform1`
--

INSERT INTO `regform1` (`first_name`, `last_name`, `blood_group`, `date_of_birth`, `email_id`, `contact_no`, `address`) VALUES
(' sdfsafd', 'sdfsdfs', 'A+', '0000-00-00', 'aksh@gmail.com', '1234567891', 'sdfsaf'),
(' amar', 'kumar', 'O+', '0000-00-00', 'kamar@gmail.com', '1055197651', 'delhi'),
(' akash', 'Rawat', 'O+', '0000-00-00', 'shubham.durral.raat.del@gmail.com', '8979471468', 'PadampurMotadha'),
(' Shubham', 'Rawat', 'B+', '0000-00-00', 'shubham.durral.rawat.del@gmail.com', '7351335762', ''),
(' akas', 'Rawa', 'O+', '0000-00-00', 'shubham.durral.rwat.del@gmail.com', '8289895665', 'PadampurMotadha'),
(' akas', 'asas', 'O+', '0000-00-00', 'wadlsdjsfj@gmail.com', '9719370845', 'kotdwara a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regform1`
--
ALTER TABLE `regform1`
  ADD PRIMARY KEY (`email_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
