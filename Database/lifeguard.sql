-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 07:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `pincode` int(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `gender`, `phone`, `blood_group`, `dob`, `address`, `pincode`, `country`, `state`, `district`) VALUES
('Kamalesh C', 'Male', '9677315946', 'AB+', '2002-05-27', '6/8b Ayya kovil street, Avaraikulam', 627133, 'TamilNadu', 'India', 'Tirunelveli'),
('Mari', 'Male', '979898981', 'A+', '2002-01-14', '14A,puliyadi str,Author', 628151, 'TamilNadu', 'India', 'Thoothukudi'),
('surendhar', 'Male', '8148565999', 'B+', '1999-05-10', 'shanthi nagr thoothukudi', 627133, 'TamilNadu', 'India', 'Thoothukudi');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `repassword`) VALUES
(0, 'kamalesh', 'abcd@gmail.com', 'gjfhfh', 'hgvhjg'),
(0, 'kamalesh', 'kckamalesh95@gmail.com', 'kamal1518', 'kamal1518');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
