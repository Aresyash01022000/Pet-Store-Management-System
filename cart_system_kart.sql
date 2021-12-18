-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 01:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system_kart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(65) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_image`, `product_code`, `description`) VALUES
(1, 'Adventure Collar', 800, '31.jpg', '3001', 'Gear up for an adventure with your pet dog'),
(2, 'Adventure Collar ', 799, '32.jpg', '3002', 'The Bobby Camouflage Harness is made of Nylon that is durable  '),
(3, 'Collar Fleece', 699, '33.jpg', '3003', 'Collar fleece is designed for just that purpose – to help cool'),
(4, 'Cascade Drinking Fountain', 1699, '34.jpg', '3004', '3 different drinking areas for and.'),
(5, 'Food Maze', 950, '35.jpg', '3005', 'The All for Paws Interactive Food Maze is for area'),
(6, 'Fun Feeder Food Bowl', 1955, '36.jpg', '3006', 'Wondering why your pooch plays with his food? '),
(7, 'Fun Feeder Mini Slow Feed Bowl', 1699, '36.jpg', '3007', 'Does your dog eat too fast? '),
(8, 'Bolster', 2199, '38.jpg', '3008', 'Want to create a super relaxed area for your furry friend? '),
(9, 'Buster Memory Foam Bed Cover', 2599, '39.jpg', '3009', 'The unique feature of this bed is the completely machine washable'),
(10, 'Buster Memory Foam Dog Bed ', 6000, '40.jpg', '3010', 'The unique feature of this bed is the completely machine washable'),
(11, 'Mochachino Scratching Post With Rubber Bristles', 2405, '43.jpg', '3011', 'Sodt bristles for your soft kittens and puppies and cats'),
(12, 'Fold Away Tunnel Scratch & Hide', 1455, '41.jpg', '3012', 'Want to train your cat to scratch only appropriate spots?'),
(13, 'Easy Life Hammock Scratch & Sleep', 1455, '42.jpg', '3013', ' Life Hammock Scratch & Sleep is a '),
(14, 'Garden Fountain for your beloved', 2199, '44.jpg', '3014', 'Make summer fun with your furry friend'),
(15, 'Ice Track and Thirst Cruncher Ice Balls', 3699, '45.jpg', '3015', 'Looking for fun with your friend');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
