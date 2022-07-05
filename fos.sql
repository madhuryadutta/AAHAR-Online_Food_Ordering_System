-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 11:05 AM
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
-- Database: `fos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('alpha', 'alpha');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(25) NOT NULL,
  `cat_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Soft Drink', 'abcd'),
(2, 'Juice', 'aaaaaaaaaaa'),
(3, 'Milk', 'ABCdddddd');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_fname` varchar(30) NOT NULL,
  `cust_lname` varchar(30) NOT NULL,
  `cust_password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_fname`, `cust_lname`, `cust_password`, `email`, `phone`, `address`) VALUES
(1, 'Madhurya', 'Dutta', 'alphabeta', '', 2147483647, 'Lakhimpur, Assam'),
(2, 'Madhurya', 'Dutta', 'a', 'a@a.com', 2147483647, 'aaaa'),
(3, 'Madhurya', 'Dutta', 'qwert', 'Iam@dutta.com', 2147483647, 'aaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(25) NOT NULL,
  `item_price` int(5) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_desc`, `cat_id`, `image`) VALUES
(42, 'Allu Pitika', 100, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 2, 'card-8-1656538640.jpg'),
(43, 'Anirban', 101, 'Test', 2, 'card-5-1656555065.jpg'),
(44, 'Allu Pitika11', 100, 'Allu & Pitika', 3, 'card-8-1656556627.jpg'),
(45, '1', 1, 'ssssssssss', 1, 'cart-1656556688.svg'),
(46, 'aaa', 111, 'dssssssssssa', 3, 'screenshot-(1)-1656630144.png'),
(47, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(48, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(49, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(50, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(51, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(52, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(53, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(54, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(55, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(56, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(57, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(58, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(59, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(60, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(61, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n'),
(62, 'pizzaaaa', 1, 'dddddd', 1, 'screenshot-(1)-1656630144.png\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `date` date NOT NULL,
  `payment_mode` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `oi_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_order_cust` (`cust_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`oi_id`),
  ADD KEY `FK_order_items_cust` (`cust_id`),
  ADD KEY `FK_order_items_order` (`order_id`),
  ADD KEY `FK_order_items_items` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `oi_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_order_cust` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK_order_items_cust` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_order_items_items` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_order_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
