-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 08:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decastro_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(26, 'Strawberry(pack)', '235.00', 'strawberry.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `email`, `feedback`, `date`) VALUES
(10, 'Greg Francis De Castro', 'gregfrancisdecastro@yahoo.com', 'High quality products! :)', '2022-12-06 13:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `flat` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` int(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Greg Francis De Castro', '23132', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', '231312', '123123', '123123', '123', '1231', 123, 'BBq (1) ', '123'),
(2, 'Greg Francis De Castro', '2312', 'awd@dwadad', 'cash on delivery', 'wadwd', 'awdawd', 'awdad', 'awda', 'wdwadwad', 123213, 'BBq (1) ', '231'),
(3, 'Greg Francis De Castro', '32132213', 'aw@awd', 'cash on delivery', 'awdaw', '2313132', 'awd', 'q23213', 'awdawd', 231, 'BBq (1) , Joyce (1) ', '246'),
(4, 'Greg Francis De Castro', '094572543707', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', '292', 'Purok 5', 'Plaridel', 'Bulacan', 'Philippines', 3004, 'Strawberry (1pack) (1) ', '235'),
(5, 'Greg Francis De Castro', '23121', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', '1323', 'dwwda', 'awdwad', 'awdawd', 'awdawd', 3004, 'Strawberry (1pack) (1) ', '235'),
(6, 'awdadawdad', '2312', 'awdawdwwad@Eawdad', 'cash on delivery', 'awdad', 'awdawda', 'awd', 'dwadww', 'dawda', 2312, 'Orange (1pc) (1) ', '35'),
(7, 'Greg Francis De Castro', '093222313', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', 'Purok 5', 'Rueda', 'Plaridel', 'Bulacan', 'Philippines', 3004, 'Apple (1pc) (1) ', '35'),
(8, 'dawda', '2133', 'adwawd@dawdwad', 'cash on delivery', 'awd', 'awdadw', '123123', 'awdawd', 'awdad', 0, 'Apple (1pc) (1) ', '35'),
(9, 'Greg Francis De Castro', '09457253707', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', '292', 'Rueda', 'Malolos', 'Bulacan', 'Philippines', 3004, 'Strawberry(pack) (1) ', '235'),
(10, 'Greg Francis De Castro', '09457253707', 'gregfrancisdecastro@yahoo.com', 'cash on delivery', '292', 'Rueda', 'Malolos', 'Bulacan', 'Philippines', 3004, 'Strawberry(pack) (1) ', '235');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(9, 'Apple(pc)', '35.00', 'Apple.png'),
(10, 'Strawberry(pack)', '235.00', 'strawberry.png'),
(12, 'Orange(pc)', '35.00', 'Orange.png'),
(13, 'Broccoli(kg)', '580.00', 'Broccoli.png'),
(15, 'Carrot(kg)', '240.00', 'Carrot.png'),
(16, 'Spinach(bundle)', '110.00', 'Spinach.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `contact`, `email`, `address`, `password`, `confirmpassword`, `created`, `modified`) VALUES
(56, 'Greg Francis De Castro', 'gregy', 9457253707, 'gregfrancisdecastro@yahoo.com', 'Rueda Plaridel Bulacan', '123456', '123456', '2022-11-26 16:40:07', '2022-12-06 13:58:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
