-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 10:34 AM
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
(10, 'Main Course', 'The  biggest dish on a menu. The main ingredient is often meat or fish. It most often follows an app'),
(11, 'Starter', 'Starters are complex yeast-based ingredients that make bread products rise. '),
(12, 'Biryani', 'an Indian dish of meat, fish, or vegetables cooked with rice flavored especially with saffron or tur'),
(13, 'Thali', ' Vegetarian and Meat Thalis (Combo Type meals), along with other dishes. '),
(14, 'PANEER MAIN COURSE', 'Paneer Butter Masala.\r\nKadai Paneer. \r\n'),
(15, 'Breakfast', 'Breakfast is the first meal of the day'),
(16, 'Meals', 'Others'),
(17, 'Rice', '.');

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
(11, 'Ani', 'dewana', '123456', 'ani@gmail.com', 2147483647, 'Hospital Road, Kaimanj , 748710');

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
  `image` varchar(100) NOT NULL,
  `availability` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_desc`, `cat_id`, `image`, `availability`) VALUES
(67, 'Okhomiya Chicken Thali', 135, 'The platter includes rice, yellow Daal, Chicken curry cooked in home-style assamese curry with 2 pieces delicious and fresh chicken, dry sabji with home grown vegetables such as koldil, bhendi, gazor etc. and salad.', 12, '48f2e4e32b1e55ca2ae7d1a860c920f4-1657582926.jpg', 1),
(68, 'Okhomiya Fish Thali', 145, 'The platter includes rice, yellow Daal, 1 piece of Fish curry cooked in home-style Assamese curry and dry sabji with home grown vegetables such as koldil, bhendi, gazor etc. and salad.', 13, '7f357c703f006969390f42f39c7d86c4-1657583209.avif', 1),
(70, 'Okhomiya Egg Thali', 130, 'The platter includes rice, yellow Daal, 1 egg curry cooked in home-style Assamese curry and dry sabji with home grown vegetables such as koldil, bhendi, gazor etc. and salad.', 13, 'aa-1657583375.jpg', 1),
(71, 'Chicken Dry Fry', 250, 'Chicken dry fry is a slightly roasted chicken Half with 5pcs and Full with 10pcs', 11, 'ssss-1657583441.jpg', 1),
(72, 'Amazing Chicken 65', 250, 'Chicken 65 is a spicy, deep-fried Indian chicken dish which is served as an appetizer or entrée. ', 11, 'aaaaaaa-1657583523.jpg', 1),
(73, 'Plain Dal', 98, 'Dal', 10, 'aaaaa-1657583618.jpg', 1),
(74, 'Aloo Paneer', 220, 'আলু আৰু মটৰৰ লগত পনীৰ)', 10, 'aaaaaaaaaaaaaaaaaaaaaaaaaa-1657583673.jpg', 1),
(75, 'Paneer Butter Masala', 250, 'Diced cottage cheese prepared in the gravy containing butter, tomatoes, onions, cashews and cream accompanied by delicious Indian spices.', 10, '10101-1657583761.jpg', 1),
(76, 'Ethnic Til Chicken', 224, 'An ethnic Assamese Cuisine in which the Chicken is cooked with sesame seeds along with onions, flavoured with ginger,', 10, '6e8df8afa74da2af69c647ffa17ad3a1-1657583818.jpg', 1),
(77, 'Veg Pulao', 100, 'How do you describe pulao? Pulao is a rice dish, cooked in seasoned broth with rice, meat, and an array of spices including: coriander seeds, cumin, cardamom, cloves and others.', 17, '431242434-1657584014.jpg', 1);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `cust_id`, `amount`, `date`, `payment_mode`, `status`) VALUES
(242651524, 11, 714, '2022-07-12', 1, 2),
(799430138, 11, 609, '2022-07-12', 1, 2),
(1200985891, 11, 431, '2022-07-12', 2, 3),
(1675790716, 11, 851, '2022-07-12', 2, 4);

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
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`oi_id`, `order_id`, `cust_id`, `item_id`, `quantity`) VALUES
(25, 1200985891, 11, 67, 1),
(26, 1200985891, 11, 68, 1),
(27, 1200985891, 11, 70, 1),
(32, 799430138, 11, 68, 4),
(33, 1675790716, 11, 67, 6),
(34, 242651524, 11, 67, 3),
(35, 242651524, 11, 68, 1),
(36, 242651524, 11, 70, 1);

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
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `oi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
