-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 06:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stephys`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `food_id` int(11) NOT NULL,
  `food_name` text NOT NULL,
  `original_file_name` varchar(30) NOT NULL,
  `new_file_name` varchar(30) NOT NULL,
  `food_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`food_id`, `food_name`, `original_file_name`, `new_file_name`, `food_price`) VALUES
(12, 'food2', 'download.jpg', '1596294541.jpg', 300),
(13, 'food3', 'nyama choma.jpg', '1596294564.jpg', 234),
(14, 'food1', 'cocktail.jpg', '1596295830.jpg', 343),
(15, 'food2', 'download.jpg', '1596295847.jpg', 566),
(16, 'food3', '2.jpg', '1596295869.jpg', 788);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `User_id` int(11) NOT NULL,
  `User_name` text NOT NULL,
  `food_name` text NOT NULL,
  `food_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `User_id` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Second_name` text NOT NULL,
  `Email_address` varchar(30) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Phone_No` text NOT NULL,
  `Gender` text NOT NULL,
  `User_name` text NOT NULL,
  `Password` int(11) NOT NULL,
  `User_type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`User_id`, `First_name`, `Second_name`, `Email_address`, `Date_of_Birth`, `Phone_No`, `Gender`, `User_name`, `Password`, `User_type`) VALUES
(1, 'Stephanie', 'Otieno', 'otieno.stephanie@strathmore.ed', '2020-06-02', '0745805782', '0', 'steph', 90, 'Admin'),
(2, 'Susan', 'Ayago', 'susan@gmail.com', '2020-06-16', '0706582446', 'female', 'sue', 456, 'Admin'),
(4, 'Bridget', 'Thomas', 'bridget@strathmore.edu', '2020-07-08', '07468844', 'female', 'bri', 23445, 'Admin'),
(5, 'Bridget', 'Thomas', 'bridget@strathmore.edu', '2020-07-08', '07468844', 'female', 'bri', 23445, 'User'),
(6, 'Ian', 'Omondi', 'ianomondi@gmail.com', '2020-07-10', '0745805782', 'male', 'ian', 87, 'Admin'),
(7, 'Shalet', 'Adhiambo', 'shtalet@gmail.com', '2020-07-01', '0722667394', 'female', 'sha', 8999, 'Admin'),
(8, 'Wayne', 'Ochieng', 'wayne@gmail.com', '2020-07-17', '093647575884', 'male', 'wayne', 38884, 'User'),
(9, 'Kevo', 'Ochieng', 'kevo@gmail.com', '2020-05-12', '27364647884', 'male', 'kevo', 8884993, 'User'),
(10, 'Randys', 'Mwendapole', 'randys@gmail.com', '2020-02-04', '646675786884', 'female', 'Ree', 8904838, 'User'),
(12, 'Rachel', 'Kimani', 'rachel@gmail.com', '2020-07-04', '38748494', 'female', 'beautiful', 3455, 'User'),
(41, 'client1', 'client1', 'client1@gmail.com', '2020-05-01', '1227374', 'male', 'clienta', 12, 'User'),
(42, 'Client2', 'Client2', 'client2@gmail.com', '2020-07-01', '23546665', 'female', 'clientb', 23, 'User'),
(43, 'Admin1', 'Admin1', 'admin1@gmail.com', '2020-05-01', '3473774774', 'female', 'admina', 34, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `User_id` (`User_id`),
  ADD KEY `User_id_2` (`User_id`),
  ADD KEY `food_id` (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooditems`
--
ALTER TABLE `fooditems`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user_details` (`User_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id`) REFERENCES `fooditems` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
