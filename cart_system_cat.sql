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
-- Database: `cart_system_cat`
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
(1, 'Acana Cat Pacifica', 799, '16.jpg', '2001', 'Acana‘s Cat Pacifica is the ideal choice of meal so that your cat feels full of energy without gaining excessive weight.'),
(2, 'Adult Cat Salmon', 585, '17.jpg', '2002', 'Does your kitty cat shun food that has no fish? Or want to introduce your cat to fishy food? Arden Grange Adult Cat '),
(3, 'Applaws Cat Pouches – Chicken with Liver in Soft Jelly', 655, '18.jpg', '2003', 'Applaws Cat Pouches are a convenient way to give your cat the highest quality meat chicken  '),
(4, 'Applaws Cat Pouches – Chicken with Pumpkin Broth', 1200, '19.jpg', '2004', 'Applaws Cat Pouches are a convenient way '),
(5, 'Applaws Cat Pouches are a convenient way ', 596, '20.jpg', '2005', 'Applaws Cat Pouches are a convenient way to give your cat food'),
(6, 'Applaws Cat Pouches – Tuna Fillet with Whole Anchovy', 400, '21.jpg', '2006', 'Applaws Cat Pouches are a convenient way to give your cat food'),
(7, 'Arden Grange Adult Cat Chicken', 1800, '23.jpg', '2007', 'Is your cat a fussy eater? Do you worry whether or not your cat is getting all the nutrition it'),
(8, 'Persian Adult', 795, '24.jpg', '2008', 'We recommend this for its high quality ingredients'),
(9, 'Salmon Rings Cat Treat', 995, '25.jpg', '2009', 'We recommend this for its high quality ingredients'),
(10, 'Snapper Jerky Strips Cat Treat', 995, '26.jpg', '2010', 'Kittos are delicious treats to keep your cat happy and healthy'),
(11, 'SP Feline Adult Hairball', 995, '27.jpg', '2011', 'Kittos are delicious treats to keep your cat happy and healthy'),
(12, 'Ultra Light', 995, '28.jpg', '2012', 'Royal Canins’ Ultra-Light Loaf in Sauce is a great option.'),
(13, 'Sterilised', 995, '29.jpg', '2013', 'Royal Canins’ Ultra-Light Loaf in Sauce is a great option.'),
(14, 'SP Feline Kitten Chicken', 995, '30.jpg', '2014', 'SP Feline Kitten Chicken is wholesome and great');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
