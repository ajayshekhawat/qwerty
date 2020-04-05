-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 12:11 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `modules` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `details`, `modules`, `status`) VALUES
(1, 'BCA', 'Bachloer Of Computer Application', 10, 1),
(2, 'MCA', 'Master Of Computer Application', 5, 1),
(3, 'BBA', 'Bachleor Of Business Administration ', 6, 1),
(4, 'BA', 'Bachleor Of Arts', 5, 1),
(6, 'BSc', 'Bachleor Of Science', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_data`
--

CREATE TABLE `course_data` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `mod_num` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_data`
--

INSERT INTO `course_data` (`id`, `course_id`, `mod_num`, `file`, `status`) VALUES
(3, 2, 1, 'JCTSL Routes.pdf', 1),
(5, 2, 1, 'JCTSL Routes.pdf', 1),
(6, 2, 2, 'WA-DOC-20200302-e0eb6648.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `user` int(1) NOT NULL DEFAULT '1',
  `name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `name`, `l_name`, `email`, `password`, `phone`, `address`, `city`, `country`, `status`) VALUES
(1, 0, 'AJAY', 'SINGH SHEKHAWAT', 'ajayshekhawat.2251@gmail.com', '123456', 7878196997, '201 GOVIND NAGAR D-1ST NIWAROO', 'JAIPUR', 'india', 1),
(3, 1, 'Anu', 'Singh', 'anu@gmail.com', '12345', 1542356254, 'D-202 Niwaru', 'Jaipur', 'India', 1),
(4, 1, 'Kani', 'Singh shekhawat', 'kani@gmail.com', '12345', 9660049590, 'D-201 Govind Nagar', 'Delhi', 'Canada', 1),
(5, 1, 'Singh', 'Kani', 'singh@gmail.com', '12345', 7878196997, 'D-201 Govind nagar', 'Jaipur', 'India', 1),
(6, 1, 'Shyam', 'Singh', 'shyam@gmail.com', '12345', 9660049590, 'D-20 Ram Nagar', 'Delhi', 'India', 1),
(7, 1, 'David', 'Jhonshon', 'david@gmail.com', '12345', 1210245632, 'D-09 Street 1', 'Bengluru', 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_img`
--

CREATE TABLE `user_img` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user` int(11) NOT NULL DEFAULT '1',
  `img_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_img`
--

INSERT INTO `user_img` (`id`, `user_id`, `user`, `img_name`) VALUES
(1, 1, 1, 'g6.jpg'),
(2, 3, 1, 'JCTSL Routes.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_data`
--
ALTER TABLE `course_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_img`
--
ALTER TABLE `user_img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course_data`
--
ALTER TABLE `course_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_img`
--
ALTER TABLE `user_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
