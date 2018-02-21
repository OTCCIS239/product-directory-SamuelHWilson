-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 07:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elitistsnacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Salty', '2018-02-14 20:40:11', '2018-02-14 20:40:11'),
(2, 'Sweet', '2018-02-14 20:40:28', '2018-02-14 20:40:28'),
(3, 'Beverage', '2018-02-14 20:40:38', '2018-02-14 20:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Combos: Pizzeria Pretzel (6.3oz)', 'The perfect combination of salty and filling. Pepperoni flavored cheese wrapped in a crunchy pretzel shell. No more will you have to deal with wimpy potato chips or boring pretzels. Have a man\'s snack; choose combos.', 6.85, '2018-02-14 20:52:23', '2018-02-14 20:52:23'),
(2, 1, 'David Original Jumbo Sunflower Seeds (16oz)', 'Do you want to be able to eat pure salt, without it being publicly seen as unacceptable? Look no further. \"Oh, what are these? Sunflower seeds.\" you will say. But in reality, you\'re just in it for the salt.', 3.18, '2018-02-14 20:56:41', '2018-02-14 20:56:41'),
(3, 3, 'NOS Original, Cap Can (24oz) ', 'Do you like being tired? Do you enjoy experiencing heart palpitations? If you answered no to both of those questions, NOS is the energy drink for you. Just enough pick-me-up to get you going, while stopping short of a caffeine overdose. It also tastes like hardcore orange juice, which is a plus.', 2.78, '2018-02-14 21:01:37', '2018-02-14 21:01:37'),
(4, 3, 'Mountain Dew Voltage (20oz)', 'Ever wondered what the best soda was? This. It\'s this. Mountain Dew with a shot of raspberry; nothing better.', 2.69, '2018-02-14 21:03:57', '2018-02-14 21:03:57'),
(5, 2, 'Nerds Rainbow Candy (5oz)', 'Pure, unadulterated sugar. ', 1, '2018-02-14 21:06:53', '2018-02-14 21:06:53'),
(6, 2, 'Milky Way Midnight Dark (1.76 oz)', 'Ever eaten a Milky Way and thought, \"Man! This is great! It\'s just a little too sweet...\"? Than this is the product for you. The same delicious Milky Way filling blanketed in semi-sweet dark chocolate.', 0.89, '2018-02-14 21:08:54', '2018-02-14 21:08:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryIndex` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
