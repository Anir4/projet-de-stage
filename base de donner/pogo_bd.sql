-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3307
-- Generation Time: Aug 12, 2023 at 10:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pogo_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `km` varchar(30) NOT NULL,
  `duration` int(100) NOT NULL,
  `detail1` varchar(150) NOT NULL,
  `detail2` varchar(150) NOT NULL,
  `detail3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `price`, `image_path`, `km`, `duration`, `detail1`, `detail2`, `detail3`) VALUES
(19, 'POPULAR', 59, './public/images/offres/offer_64d40a3e6fa8d.png', '25 Km', 24, 'Assurance complète', 'Casque délivré', ''),
(20, 'BEST', 119, './public/images/offres/offer_64d40abd727d3.png', 'Kilométrage illimité', 24, 'Assurance complète', 'Casque et chargeur délivrés', ''),
(22, 'PREMIUM', 1499, './public/images/offres/offer_64d40b85a9023.png', 'Kilométrage illimité', 30, 'Assurance tous risques', ' Casque et chargeur délivrés', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `biketype` varchar(255) NOT NULL,
  `rentduration` int(11) NOT NULL,
  `selectedOffer` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Address` text DEFAULT NULL,
  `bikenbr` int(11) NOT NULL,
  `rentDate` datetime NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Processing','Confirmed','Canceled','Rejected') NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `city`, `biketype`, `rentduration`, `selectedOffer`, `quantity`, `Address`, `bikenbr`, `rentDate`, `total`, `orderDate`, `status`) VALUES
(42, 13, 'Marrakech', 'Pogo X', 72, 20, 3, 'mhamid marrakech', 2, '2023-08-10 00:07:00', 714.00, '2023-08-09 22:08:03', 'Confirmed'),
(43, 13, 'Ben guerir', 'Pogo X', 30, 22, 1, 'whus,yjfg', 2, '2023-08-10 00:23:00', 2998.00, '2023-08-09 22:24:11', 'Canceled'),
(45, 44, 'Ben guerir', 'Pogo Z', 60, 22, 2, 'hujuijv', 1, '2023-08-10 01:40:00', 2998.00, '2023-08-09 23:42:38', 'Rejected'),
(56, 1, 'Marrakech', 'Pogo X', 60, 22, 2, '', 1, '2023-08-12 22:04:00', 2998.00, '2023-08-12 20:04:33', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `birth_date`, `reg_date`) VALUES
(1, 'ADMIN', '', 'admin', '$2y$10$MrI8TtDy9SP7ILEOE9QnTusKPL6ie1NxTwIQhOhS.HKQfmgHhUdW6', '', '0000-00-00', '2000-08-01 22:43:57'),
(13, 'ANIR', 'ID', 'a', '$2y$10$i/7h5EwDu9CTgNUGEgM6a.mqK4iqM.ev.AmyLMp7.VFTEual5YjYG', '1234567899', '0012-12-12', '2023-07-23 21:45:01'),
(44, 'ilyas', 'id', 'ilyassid@gmail.com', '$2y$10$BYcL0M5vJsDhw08bEgoos.gD8T30.AH5d7iNl3z6BR7vhs5Qcluh2', '0677777777', '2000-06-24', '2023-08-10 00:38:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `selectedOffer` (`selectedOffer`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`selectedOffer`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
