-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 01:12 PM
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
-- Database: `asmnt`
--

-- --------------------------------------------------------

--
-- Table structure for table `asmnt2`
--

CREATE TABLE `asmnt2` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asmnt2`
--

INSERT INTO `asmnt2` (`id`, `username`, `email`, `password`) VALUES
(3, 'oooo', 'oooo@gmail.com', 'ce7ce9108ae218e'),
(4, 'ffff', 'ffff@gmail.com', '2162f355a791a2a'),
(5, 'ffff', 'sss', 'd41d8cd98f00b20'),
(6, 'ffff', '', 'cf88cdfaa08b6c9'),
(7, 'abcd', 'abcd@gmail.com', '4444fe8b6473698'),
(8, 'pavana', 'pavanaumashankar@gamil.com', 'f25a2fc72690b78'),
(9, 'kirana', 'kirana@gmail.com', '658dfb2e6ee5076'),
(10, 'ooll', 'ooll@gmail.com', '3df7af507b1c1b0');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `product_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `product_category`) VALUES
(4, 'Mobiles'),
(5, 'Laptops'),
(6, 'Television'),
(7, 'Books'),
(8, 'Refreigerators');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `productna` varchar(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `discount` int(255) NOT NULL,
  `sellingCost` int(255) NOT NULL,
  `quantity` bigint(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `subDescription` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productna`, `cost`, `discount`, `sellingCost`, `quantity`, `model`, `category`, `sub_category`, `image`, `subDescription`, `description`) VALUES
(24, 'fff', 34, 0, 0, 3, 'fff', 'fff', 'fff', 0x6c696768742e706e67, '', 'fff'),
(26, 'xxx', 43, 0, 0, 42, 'sd43', 'sdrgert', 'kik', 0x686f6d655f6c696768742e706e67, '', 'gg445'),
(27, 'samsung', 21000, 5, 19950, 20, 'A50', 'Refreigerators', 'Single door or double door', 0x726566726967657261746f722e706e67, 'this is a good one this is a good one this is a good one this is a good one ', 'this is a good one this is a good one this is a good one this is a good one this is a good one '),
(28, 'Redmi ', 10000, 20, 8000, 30, 'note 8', '', '', 0x73616d73756e6735302e706e67, 'this is the best phone this is the best phone this is the best phone this is the best phone this is the best phone ', 'this is the best phone this is the best phone this is the best phone this is the best phone this is the best phone this is the best phone '),
(29, 'Book', 600, 4, 576, 7, 'motivation', '', '', 0x626f6f6b2e706e67, 'ths is ok', 'aldlflsdfhkkjnk');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eamil` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(255) NOT NULL,
  `product_subcategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `product_subcategory`) VALUES
(1, 'Basic '),
(2, 'Androiad'),
(3, 'Single door or double door'),
(6, 'motivation stories'),
(7, 'Full keyboard'),
(8, 'Full led');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `email`, `phone_number`) VALUES
(1, 'ne', '$2y$10$QtC/4GvPy0sYNl2xuU.0a.kwo7.DvubrbB8FE0SjnrfLzS0/jmDRG', 'ne', 'umaglitter95@gmail.com', 809519698),
(28, 'uma', '$2y$10$0Ns2QoK.7LsWnCwlu6MvIO25txNkSuuv7zxxag6AM3RbS9mknz672', 'uma', 'umaglitter95@gmail.com', 809519698),
(29, 'kkk', '$2y$10$hTd6zcVBjDMEAV4WPsrA8OO8weKYqRGpzA./5nOAXLkqUBqR69JE6', 'kkk', 'umaglitter95@gmail.com', 809519698),
(30, 'hh', '$2y$10$UDyrlVq18QT/5Sg24T4Yp.Eso.J9oxLUgH.CVyqyv5AJZnbsmqKXe', 'hh', 'umaglitter95@gmail.com', 809519698),
(31, 'kpdarshan@gmail.com', '$2y$10$rtI0wDxTR4qVl1uRfj8apeq47fckaLcF7itU7AXnMVKUChgXg/Zeu', 'darshan', 'kpdarshan@gmail.com', 2147483647),
(32, 'hemantha', '$2y$10$PuX/5kg7Fz6LtCPxm.lpXOf7gCg8uJZyCqx5mEmHlbs5VVXTS65jm', 'hemantha', 'hemanth@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asmnt2`
--
ALTER TABLE `asmnt2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asmnt2`
--
ALTER TABLE `asmnt2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
