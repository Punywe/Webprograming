-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 06:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `Customer_Name` varchar(50) NOT NULL,
  `Customer_Lastname` varchar(100) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Age` int(11) NOT NULL,
  `Birthdate` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Zipcode` varchar(5) NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Customer_Description` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `Customer_Name`, `Customer_Lastname`, `Gender`, `Age`, `Birthdate`, `Address`, `Province`, `Zipcode`, `Telephone`, `Customer_Description`, `username`, `password`, `status`) VALUES
(1, 'Peter_Edit', 'Parker', 'male', 21, '17-9-2546', 'สุขุมวิทย์/ซอย5', 'เชียงใหม่', '53100', '053999222', 'I\'m spider man', 'user2', '1234', 0),
(2, 'John', 'Hancock', 'male', 22, '16-6-2545', 'กาดเมฆ', 'ลำปาง', '53121', '054229228', 'hello', 'user1', '1234', 0),
(3, 'dummy', 'de', 'femal', 27, '10-7-2540', 'oooo/pop/zzz', 'แม่ฮ่องสอน', '53121', '0542292287', 'asdsadasdsad', 'user3', '1597', 1),
(4, 'poo', 'bear', 'male', 29, '29-5-2538', 'xxx/yyy/zpo', 'เชียงราย', '53121', '054229228', 'asdasd', 'user4', '4444', 0),
(5, 'test', 'pwd', 'male', 28, '14-10-2539', '455/la', 'แพร่', '53120', '0655859713', 'asdaswggg', 'user5', '1234', 1),
(6, 'jesy', 'wood', 'femal', 18, '14-8-2549', 'sadasd', 'เชียงราย', '53155', '1234587745', 'asdasd', 'user6', '8521', 1),
(7, 'test2', 'xxxx', 'male', 27, '13 8 2540', 'xxxx', 'แพร่', '55555', '54654564', 'asdasdas', 'user7', '7896', 1),
(8, 'test3', 'xxxx', 'femal', 22, '10-5-2545', 'xxxx', 'แพร่', '55555', '54654564', 'ghghhhh', 'user7', '1234', 1),
(9, 'test4', 'x', 'male', 27, '17-6-2540', 'xxxx', 'ลำปาง', '5881', '0321456879', 'ooooooo', 'user7', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
