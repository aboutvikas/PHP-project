-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 08:42 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `shanni_std`
--

CREATE TABLE `shanni_std` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shanni_std`
--

INSERT INTO `shanni_std` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(3, '', '', '', 0),
(1, 'Neeraj Seth', 'aranagpt@gmail.com', '', 2147483647),
(2, 'Vikas Seth', 'to.vikas.seth@gmail.', 'jjj', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `roll_no` int(25) NOT NULL,
  `course` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `father_name`, `roll_no`, `course`, `email`, `password`, `gender`, `city`, `mobile`) VALUES
(8, 'Neeraj', 'Seth', 'Ashok Seth', 1410814041, 'mca', 'mr.vikas.seth@gmail.com', 'qweqwe', 'male', 'Milpitas', '4089562033'),
(63, 'Neeraj', 'Seth', 'Ashok Seth', 12312, 'MBA', 'to.vikas.seth@gmail.com', '11111111', 'Male', 'Milpitas', '4089562033'),
(72, 'Vikas', 'Seth', 'kkk', 98, 'MBA', 'aranagpt@gmail.com', 'vvvvvvvv', 'Male', 'Mughalsarai', '9307819147'),
(73, 'Ashutosh', 'Seth', 'Bhola Nath', 356000239, 'BCA', 'ashutoshsetha669@gmail.com', 'qwer1234', 'Male', 'Mughalsarai', '7052480658');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shanni_std`
--
ALTER TABLE `shanni_std`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shanni_std`
--
ALTER TABLE `shanni_std`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
