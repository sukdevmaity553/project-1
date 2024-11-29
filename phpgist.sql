-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 07:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpgist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'barnali', 'barnali@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `masterorder`
--

CREATE TABLE `masterorder` (
  `order_id` int(11) NOT NULL,
  `pid` varchar(500) NOT NULL,
  `pname` varchar(500) NOT NULL,
  `pprice` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `cphone` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masterorder`
--

INSERT INTO `masterorder` (`order_id`, `pid`, `pname`, `pprice`, `cname`, `cphone`, `caddress`) VALUES
(3, '6 ', 'jewellery ', '1200 ', 'Pritha Maity', '987456321', 'Nandigram');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `description` varchar(600) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `image`, `price`, `description`, `category`) VALUES
(5, 'jewellery', 'handmate jwlry.jpeg', '1200', '<p>Good</p>', 'handmate Accessary'),
(6, 'jewellery', 'jew2.webp', '1200', '<p>Nice</p>', 'handmate Accessary'),
(7, 'jewellery', 'jew3.webp', '1500', '<p>amazing</p>', 'handmate Accessary'),
(8, 'Handmate Bag ', 'handbag3.webp', '1280', '<p>good</p>', 'Photo Frame'),
(9, 'Photo Frame', 'frame7.jpg', '100', '<p>use waste papers&nbsp;</p>', 'handmate Accessary');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `stream` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `dob`, `stream`, `gender`, `image`, `subject`) VALUES
(1, 'Barnali Barman', '2024-07-01', 'BCA', 'female', '078c8c5366a24d0781b043ca0405157e.jpg', 'Java,PHP'),
(2, 'pritha maity', '2024-07-02', 'BHMS', 'female', '9d026fd7e9cc4e5e9ed839de849618a0.jpg', 'C++,Java'),
(3, 'gobinda\'s', '2024-07-01', 'BBA', 'male', 'IMG_20230720_154952_1.jpg', 'Java'),
(4, 'Barnali Barman', '2024-07-02', 'BCA', 'female', '078c8c5366a24d0781b043ca0405157e.jpg', 'C,Java'),
(5, 'Barnali Barman', '2024-07-02', 'BCA', 'female', '078c8c5366a24d0781b043ca0405157e.jpg', 'C,Java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `masterorder`
--
ALTER TABLE `masterorder`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masterorder`
--
ALTER TABLE `masterorder`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
