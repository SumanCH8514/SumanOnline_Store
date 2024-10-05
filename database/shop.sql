-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Cannon EOS', 36000),
(2, 'Sony DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 80000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Favre Lueba #111', 18000),
(9, 'Raymond', 1500),
(10, 'Charles', 1000),
(11, 'HXR', 900),
(12, 'PINK', 1200),
(13, 'SAMSUNG Galaxy F05', 28995),
(14, 'SAMSUNG Galaxy S23 5G', 17500),
(15, 'SAMSUNG Galaxy M34 5G', 9995),
(16, 'Motorola Edge 50 Pro 5G', 12750),
(17, 'POCO M6 5G (8 GB RAM)', 7999),
(18, 'Motorola Edge 50 Fusion (12 GB RAM)', 20999),
(19, 'Nothing Phone (2a) Plus (12 GB RAM)', 25999),
(20, 'vivo T3 Ultra Frost Green (8 GB RAM)', 33999),
(21, 'SAMSUNG Galaxy Book4 Intel Core i5 13th Gen 1335U', 58990),
(22, 'HP Intel Core i5 12th Gen 1235U (16 GB/512 GB SSD)', 49999),
(23, 'MSI Thin 15 Intel Core i5 12th Gen 12450H', 45990),
(24, 'Lenovo IdeaPad Slim 3 Intel Core i5 12th Gen 12450H', 12750),
(25, 'ASUS TUF Gaming A15 AMD Ryzen 7 Octa Core 7435HS', 60990),
(26, 'Acer Aspire 7 Intel Core i5 13th Gen 13420H', 57990),
(27, 'MSI Modern 14 Intel Core i5 12th Gen 1235U', 32990),
(28, 'ASUS Vivobook 15, with Backlit Keyboard, Intel Core i3 12th Gen', 33999),
(29, 'Canon EOS R10 Mirrorless Camera', 89990),
(30, 'Canon EOS R50 Mirrorless Camera', 60990),
(31, 'NIKON D7500 DSLR Camera', 69990),
(32, 'SONY Alpha ILCE-6600 APS-C Mirrorless Camera', 62990),
(33, 'SONY Alpha ILCE-7M4 Full Frame Mirrorless Camera', 194490),
(34, 'SONY Alpha ILCE-7M3K Full Frame Mirrorless Camera', 141490),
(35, 'Canon R100 Mirrorless Camera', 39999),
(36, 'Canon EOS 3000D DSLR Camera', 29999),
(37, 'JBL Tune 770NC Active Noise Cancelling', 5499),
(38, 'boAt Rockerz 450 w/ 40mm Drivers', 1498),
(39, 'boAt Nirvanaa 751 ANC Hybrid Active Noise Cancellation', 2798),
(40, 'JBL Tune 770NC Active Noise Cancelling', 5497),
(41, 'SONY WH-CH520 with 50 Hrs Playtime', 3988),
(42, 'Boult Q ENC Mic', 1799),
(43, 'Skullcandy Cassette Wireless Headphones', 1999),
(44, 'ZEBRONICS Zeb-Duke 2', 899),
(45, 'OPPO Enco Buds 2', 1299),
(46, 'boAt Immortal 161', 899),
(47, 'realme Buds T110', 1299),
(48, 'boAt Supreme buds', 999),
(49, 'OnePlus Buds 3 TWS', 4499),
(50, 'realme Buds T300', 1699),
(51, 'Boult W20', 799),
(52, 'Boult Z40 Pro', 1199),
(53, 'Suman Buds NQ', 1799),
(54, 'OnePlus Bullets Z2', 1299),
(55, 'boAt Rockerz 110', 799),
(56, 'OnePlus E305A', 1299),
(57, 'realme Buds 3', 1599),
(58, 'boAt Rockerz 235 Pro', 699),
(59, 'boAt Rockerz 255 Pro+', 999),
(60, 'Boult ProBass EQCharge', 799),
(61, 'Nothing Neckband Pro', 1699),
(62, 'SAMSUNG 25 W GaN 3 A (White)', 999),
(63, 'SAMSUNG 25 W GaN 3 A (Black)', 999),
(64, 'HOMEMO 80 W SVOOC 6 A', 1299),
(65, 'boAt 18W Power WCD QC3A', 349),
(66, 'Mi 10 W Supercharge 2 A', 4499),
(67, 'Apple 20W USB-C', 1499),
(68, 'Mi 22.5 W Quick Charge', 599),
(69, 'RoarX 25 W Quick Charge', 344),
(70, 'Flipkart SmartBuy USB Type C Cable', 199),
(71, 'Portronics Lightning Cable 3 A 1.2 m', 449),
(72, 'boAt USB Type C Cable 3 A', 99),
(73, 'boAt USB Type C Cable', 149),
(74, 'Portronics Lightning Cable 3 A', 199),
(75, 'hybite LAN Cable 30 m Meter', 645),
(76, 'Bestor HDMI Cable 3 m', 609),
(77, 'STORITE Reversible USB 2.0 2 A', 289),
(78, 'boAt 20000 mAh 22.5 W Power Bank', 1399),
(79, 'Mi 20000 mAh 33 W Power Bank', 1799),
(80, 'Ambrane 10000 mAh 12 W Power Bank', 599),
(81, 'Portronics 10000 mAh 22.5 W PB', 649),
(82, 'Ambrane 20000 mAh 10.5 W PB', 899),
(83, 'Intex 20000 mAh 12 W Power Bank', 999),
(84, 'DURACELL 20000 mAh 22.5 W PB', 2799),
(85, 'REDMI 20000 mAh 18 W Power Bank', 1699);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(7, 'Suman Chakrabortty', 'contact@SumanOnline.Com', 'b721bc94b6a323fe167a68b9b9025fb8', '8918153949', 'Barrackpore', 'Mohanpur,Barrackpore,Kolkata,WB,India,700121'),
(8, 'Rajendra Nath Santrra', 'Chomuraj@email.com', '9a4cdab0ee9e2b38a655db94514b0419', '8918153949', 'Bara kanth', 'banupur');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
