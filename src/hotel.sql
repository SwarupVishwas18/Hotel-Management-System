-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 05:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `comment`) VALUES
(2, 'Swarup Vishwas', 'swarupvishwas@gmail.com', 'Good Website'),
(3, 'Swarup Vishwas', 'swarupvishwas@gmail.com', 'Very Good Site'),
(4, 'Swarup Vishwas', 'swarupvishwas@gmail.com', 'My Comment'),
(5, 'Swarup Vishwas', 'swarupvishwas@gmail.com', 'Good Site'),
(6, 'Swarup', 'sdvishwas@gmail.com', 'Very Good Web Site'),
(7, 'Swarup', 'swarupvishwas@gmail.com', 'Very good Site');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(100) NOT NULL,
  `DishName` varchar(127) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `DishName`, `tag`, `Price`) VALUES
(4, 'Paneer Chilly', 'Starter', '140'),
(5, 'Veg Manchow Soup', 'Soups', '85'),
(6, 'Aloo Mutter', 'Main Course', '100'),
(7, 'Aloo Jeera', 'Main Course', '100'),
(8, 'Aloo Gobi', 'Main Course', '100'),
(10, 'Soyabin Masala', 'Main Course', '110'),
(11, 'Mix Veg', 'Main Course', '110'),
(12, 'Paneer Mutter', 'Main Course', '150'),
(14, 'Aloo Palak', 'Main Course', '100');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(100) NOT NULL,
  `empName` varchar(127) NOT NULL,
  `empCategory` varchar(100) NOT NULL,
  `joinDate` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `empName`, `empCategory`, `joinDate`, `salary`) VALUES
(3, 'Rahul', 'Chef', '12-2-2021', 30000),
(6, 'Rajesh', 'Assistant Chef', '12/12/2021', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `filename`) VALUES
(15, 'pexels-chan-walrus-941869.jpg'),
(16, '81f3ff974d82520780078ba1cfbd453a1583259680.png'),
(17, 'pexels-vindhya-chandrasekharan-7406888.jpg'),
(18, 'pexels-prabal-pratap-singh-9609838.jpg'),
(19, 'pexels-thomas-nahar-6363499.jpg'),
(20, 'pexels-alberta-studios-10615309.jpg'),
(21, 'pexels-kulbir-7449105.jpg'),
(22, 'pexels-shiva-kumar-4595313.jpg'),
(23, 'pexels-dapurmelodi-1109197.jpg'),
(24, 'pexels-marvin-ozz-2474661.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(20) NOT NULL,
  `dishName` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `addresss` text NOT NULL,
  `amt` varchar(100) NOT NULL,
  `orderdate` varchar(54) NOT NULL,
  `custName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `dishName`, `qty`, `rate`, `addresss`, `amt`, `orderdate`, `custName`) VALUES
(13, 'Mix Veg', '5', '110', 'Chakan', '550', '2022-01-02', 'Swarup Vishwas'),
(14, 'Mix Veg', '2', '110', 'Pune', '220', '2022-01-02', 'Swarup Vishwas'),
(15, 'Paneer Mutter', '3', '150', 'Nashik', '450', '2022-01-02', 'Swarup Vishwas'),
(16, 'Aloo Mutter', '3', '100', 'Mumbai', '300', '2022-01-02', 'Kanchan Vishwas'),
(17, 'Paneer Chilly', '2', '140', 'Pune', '280', '2022-01-05', 'Swarup'),
(18, 'Paneer Chilly', '2', '140', 'Nashik', '280', '2022-01-05', 'Swarup'),
(19, 'Paneer Chilly', '3', '140', 'Nashik', '420', '2022-01-09', 'Swarup'),
(20, 'Mix Veg', '12', '110', 'Jaipur', '1320', '2022-01-09', 'Swarup'),
(21, 'Aloo Mutter', '12', '100', 'Chakan\r\n', '1200', '2022-01-11', 'Swarup');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(127) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pwd`) VALUES
(7, 'Swarup Vishwas', 'swarupvishwas000@gmail.com', 'e20f517179e9cd52ae29dae43c121b95'),
(8, 'Swarup', 'swarupvishwas@gmail.com', 'e20f517179e9cd52ae29dae43c121b95'),
(9, 'Swarup', 'swarupvishwas123@gmail.com', 'e20f517179e9cd52ae29dae43c121b95');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
