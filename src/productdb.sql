-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2023 at 06:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `handtools`
--

CREATE TABLE `handtools` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handtools`
--

INSERT INTO `handtools` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(7, 'Rotary Hammer Gbh 180-Li', 11099, './upload/product7.png'),
(8, 'Makita Hammer Drill With ', 6299.5, './upload/product8.png'),
(9, 'Combination Wrench Set wi', 449, './upload/product9.png'),
(10, 'Standard Jigsaw SD8101', 2399, './upload/product10.png'),
(11, 'Circular Saw 7.5 1600W', 4279.6, './upload/product11.png'),
(12, 'Kyk Socket Wrench Set', 4349.5, './upload/product12.png');

-- --------------------------------------------------------

--
-- Table structure for table `housew`
--

CREATE TABLE `housew` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `housew`
--

INSERT INTO `housew` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(25, 'Promo 2-Pack Pail Set', 695, './upload/product25.png'),
(26, 'Ace Side End Mini Desk/Ta', 1299, './upload/product26.png'),
(27, 'Glass Stove Double Burner', 2024.5, './upload/product27.png'),
(28, 'Stand Mixer With Stainles', 1349.5, './upload/product28.png'),
(29, 'Electronic Computing Scal', 3980, './upload/product29.png'),
(30, 'Hanabishi Coffee Maker Hc', 1579.5, './upload/product30.png');

-- --------------------------------------------------------

--
-- Table structure for table `lawn`
--

CREATE TABLE `lawn` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawn`
--

INSERT INTO `lawn` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(13, 'KYK Reel paintsmower', 7249.5, './upload/product13.png'),
(14, 'Kyk Garden Hose Gh1600', 1807, './upload/product14.png'),
(15, 'Ace 5-Pc Garden Tool Set', 999, './upload/product15.png'),
(16, 'Kingjet 16L Knapsack Spra', 2599.75, './upload/product16.png'),
(17, 'Lotus Shovel LTGT100SHX', 488.5, './upload/product17.png'),
(18, 'Fuji Bush Cutter Td40 Otr', 6999.5, './upload/product18.png');

-- --------------------------------------------------------

--
-- Table structure for table `paints`
--

CREATE TABLE `paints` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paints`
--

INSERT INTO `paints` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(19, 'Storch Baby Roller With T', 159.5, './upload/product19.png'),
(20, 'Aluminum Household Ladde', 7149, './upload/product20.png'),
(21, 'JML Paint Sprayer Elite', 3999.75, './upload/product21.png'),
(22, 'Aluminum Adjustable Exten', 749, './upload/product22.png'),
(23, 'Rain Or Shine Elastomeric', 689, './upload/product23.png'),
(24, 'Boysen Paint', 179.5, './upload/product24.png');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Gasoline Generator RD 391', 32999, './upload/product1.png'),
(2, 'NXLED Emergency Bulb DL7W', 399.75, './upload/product2s.png'),
(3, 'Meiji Circuit Breaker 20a', 259.75, './upload/product3s.png'),
(4, 'Union UGAC-003 Air Cooler', 5099, './upload/product4s.png'),
(5, 'Daimaru Insect Killer Bt ', 1249, './upload/product5.png'),
(6, 'Single Phase Volt Regulat', 4499.75, './upload/product6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handtools`
--
ALTER TABLE `handtools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housew`
--
ALTER TABLE `housew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawn`
--
ALTER TABLE `lawn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paints`
--
ALTER TABLE `paints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handtools`
--
ALTER TABLE `handtools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `housew`
--
ALTER TABLE `housew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2232323;

--
-- AUTO_INCREMENT for table `lawn`
--
ALTER TABLE `lawn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `paints`
--
ALTER TABLE `paints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
