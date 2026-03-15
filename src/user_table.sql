-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 02:43 PM
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
-- Database: `user_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `handtools`
--

CREATE TABLE `handtools` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `handtools`
--

INSERT INTO `handtools` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(7, 'Rotary Hammer Gbh 180-Li', 11099, './upload/product7.png'),
(8, 'Makita Hammer Drill With ', 6299.5, './upload/product8.png'),
(9, 'Combination Wrench Set wi', 449, './upload/product9.png'),
(10, 'Standard Jigsaw SD8101', 2399, './upload/product10.png'),
(11, 'Circular Saw 7.5 1600W', 4279.6, './upload/product11.png'),
(12, 'Kyk Socket Wrench Set', 4349.5, './upload/product12.png');

-- --------------------------------------------------------

--
-- Table structure for table `handtools_orders`
--

CREATE TABLE `handtools_orders` (
  `handtools_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `housew`
--

CREATE TABLE `housew` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `housew`
--

INSERT INTO `housew` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(25, 'Promo 2-Pack Pail Set', 695, './upload/product25.png'),
(26, 'Ace Side End Mini Desk/Ta', 1299, './upload/product26.png'),
(27, 'Glass Stove Double Burner', 2024.5, './upload/product27.png'),
(28, 'Stand Mixer With Stainles', 1349.5, './upload/product28.png'),
(29, 'Electronic Computing Scal', 3980, './upload/product29.png'),
(30, 'Hanabishi Coffee Maker Hc', 1579.5, './upload/product30.png');

-- --------------------------------------------------------

--
-- Table structure for table `housewares_orders`
--

CREATE TABLE `housewares_orders` (
  `housewares_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawn`
--

CREATE TABLE `lawn` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawn`
--

INSERT INTO `lawn` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(13, 'KYK Reel paintsmower', 7249.5, './upload/product13.png'),
(14, 'Kyk Garden Hose Gh1600', 1807, './upload/product14.png'),
(15, 'Ace 5-Pc Garden Tool Set', 999, './upload/product15.png'),
(16, 'Kingjet 16L Knapsack Spra', 2599.75, './upload/product16.png'),
(17, 'Lotus Shovel LTGT100SHX', 488.5, './upload/product17.png'),
(18, 'Fuji Bush Cutter Td40 Otr', 6999.5, './upload/product18.png');

-- --------------------------------------------------------

--
-- Table structure for table `lawn_orders`
--

CREATE TABLE `lawn_orders` (
  `lawn_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `delivery_address` varchar(255) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `additional_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paints`
--

CREATE TABLE `paints` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paints`
--

INSERT INTO `paints` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(19, 'Storch Baby Roller With T', 159.5, './upload/product19.png'),
(20, 'Aluminum Household Ladde', 7149, './upload/product20.png'),
(21, 'JML Paint Sprayer Elite', 3999.75, './upload/product21.png'),
(22, 'Aluminum Adjustable Exten', 749, './upload/product22.png'),
(23, 'Rain Or Shine Elastomeric', 689, './upload/product23.png'),
(24, 'Boysen Paint', 179.5, './upload/product24.png');

-- --------------------------------------------------------

--
-- Table structure for table `paints_orders`
--

CREATE TABLE `paints_orders` (
  `paints_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Gasoline Generator RD 391', 32999, './upload/product1.png'),
(2, 'NXLED Emergency Bulb DL7W', 399.75, './upload/product2s.png'),
(3, 'Meiji Circuit Breaker 20a', 259.75, './upload/product3s.png'),
(4, 'Union UGAC-003 Air Cooler', 5099, './upload/product4s.png'),
(5, 'Daimaru Insect Killer Bt ', 1249, './upload/product5.png'),
(6, 'Single Phase Volt Regulat', 4499.75, './upload/product6.png');

-- --------------------------------------------------------

--
-- Table structure for table `producttb_orders`
--

CREATE TABLE `producttb_orders` (
  `producttb_order_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob_month` date NOT NULL,
  `dob_day` date NOT NULL,
  `dob_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `middle_name`, `email`, `phone`, `password`, `gender`, `dob_month`, `dob_day`, `dob_year`) VALUES
(1, 'Sigma', 'Euler', '', 'Sigma@gmail.com', '09667099554', '', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(2, '', '', '', '', '', '', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 'matthew', 'suiza', 'Contreras', 'matt@gmail.com', '09667099554', '', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 'memen', 'lopez', '', 'memen@gmail.com', '09667099554', '$2y$10$S4GcXv64IVoIfH4uHBPUsO/nUhXNHU1oHWX2df5PNTssogukh7yv2', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, 'geof', 'esguerra', '', 'geof@gmail.com', '09667099554', '$2y$10$oIE6sQ0Lm5yX4Xc66th4LO9XYLL/EOItswnWK4Hhm92iNlOsdt/5O', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, 'jing', 'santos', '', 'jing@gmail.com', '095545454', '$2y$10$gHYZPQCJWQMQCinLbn7XHer74M1sKazCs6gUBZH3i3O1jNfiTUPJK', 'female', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, 'def', 'deaf', '', 'deef@gmail.com', '09667066554', '$2y$10$9eFO4EQ68MjtM/U0KrGKSe..ay//QVIhuvxOayw1EiFs0YvAc1eoq', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 'aja', 'ponte', '', 'aja@gmail.com', '456789123', '$2y$10$UXbmI9TNZfutbDBwtOTWKOf2/i9zu.noudH.zsULNsNXohR.jOMJ.', 'female', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 'matthew', 'suiza', '', 'matthew@gmail.com', '09667099554', '$2y$10$aEjYe3Hv5/CPLU3H1d1xluoSjvPp.CbzHK2UNIR6FKlUSzjjLiSx2', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 'nate', 'lepon', '', 'nate@gmail.com', '09667099554', '', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, '', '', '', 'sigma@gmail.com', '09667099554', '$2y$10$YBKsnChAvdocGW.D6uAYo.VKxsB6av3NLeIJUi6Hyf0FGpiQL/uoO', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, '', '', '', 'sigma@gmail.com', '09667099554', '$2y$10$g6pICZ5GYDn6JPJ2er4OqeLQQ/lVr30aMQhiBLheF.lrooEMpiHRC', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(14, 'migos', 'ponte', 'Ponteee', 'migoos@gmail.com', '09667099554', '$2y$10$Twjogrq081pDNzvHjE7i2O4Oy6/.RS9iGZEQ07HzrQ1vvD5o31Vka', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(15, 'Aeko', 'Ponte', 'Mantua', 'aekoo@gmail.com', '09667099554', '$2y$10$/ynAYx5ssnivTTT/udtWF.AupgPIxDwoH8BPAN6Q59aeG40l3oLi6', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(16, 'Nami', 'Ponte', '', 'nami@gmail.com', '09667099554', '$2y$10$baXNrpfv0I3NgDKk0.QYVuicW6PKynOT5hpwgWDXuyIux1wWpUNkm', 'female', '0000-00-00', '0000-00-00', '0000-00-00'),
(17, 'andy', 'santos', '', 'andy@gmail.com', '09667099554', '$2y$10$j6KOpUfpiDwN.UotlWrneumBIztonhRqa35LIaqX7VVSx7MM/rsFq', 'male', '0000-00-00', '0000-00-00', '0000-00-00'),
(18, 'jhermeigne genesis', 'lopez', 'Tolentino', 'jhermeigne@gmail.com', '09667099554', '$2y$10$ucKmWxkVpC8F396ZoeWB8.znDHWg2P5YGLAdxaEOnNCUShQVJWJn6', 'female', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handtools`
--
ALTER TABLE `handtools`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `handtools_orders`
--
ALTER TABLE `handtools_orders`
  ADD PRIMARY KEY (`handtools_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `housew`
--
ALTER TABLE `housew`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `housewares_orders`
--
ALTER TABLE `housewares_orders`
  ADD PRIMARY KEY (`housewares_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `lawn`
--
ALTER TABLE `lawn`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `lawn_orders`
--
ALTER TABLE `lawn_orders`
  ADD PRIMARY KEY (`lawn_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `paints`
--
ALTER TABLE `paints`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `paints_orders`
--
ALTER TABLE `paints_orders`
  ADD PRIMARY KEY (`paints_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `producttb_orders`
--
ALTER TABLE `producttb_orders`
  ADD PRIMARY KEY (`producttb_order_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handtools`
--
ALTER TABLE `handtools`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `handtools_orders`
--
ALTER TABLE `handtools_orders`
  MODIFY `handtools_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `housew`
--
ALTER TABLE `housew`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2232323;

--
-- AUTO_INCREMENT for table `housewares_orders`
--
ALTER TABLE `housewares_orders`
  MODIFY `housewares_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawn`
--
ALTER TABLE `lawn`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lawn_orders`
--
ALTER TABLE `lawn_orders`
  MODIFY `lawn_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paints`
--
ALTER TABLE `paints`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `paints_orders`
--
ALTER TABLE `paints_orders`
  MODIFY `paints_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `producttb_orders`
--
ALTER TABLE `producttb_orders`
  MODIFY `producttb_order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `handtools_orders`
--
ALTER TABLE `handtools_orders`
  ADD CONSTRAINT `handtools_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `handtools_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `handtools` (`product_id`);

--
-- Constraints for table `housewares_orders`
--
ALTER TABLE `housewares_orders`
  ADD CONSTRAINT `housewares_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `housewares_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `housew` (`product_id`);

--
-- Constraints for table `lawn_orders`
--
ALTER TABLE `lawn_orders`
  ADD CONSTRAINT `lawn_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `lawn_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `lawn` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `paints_orders`
--
ALTER TABLE `paints_orders`
  ADD CONSTRAINT `paints_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `paints_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `paints` (`product_id`);

--
-- Constraints for table `producttb_orders`
--
ALTER TABLE `producttb_orders`
  ADD CONSTRAINT `producttb_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `producttb_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `producttb` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
