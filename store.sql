-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 08:01 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Cannon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'jigyashu', 'jig@gmail.com', 'abcd', '8373939121', 'delhi', 'asd'),
(3, 'jigyashu', 'jigy@gmail.com', 'Abcd123@', '999886456', 'new delhi', 'ikfdhjfvj'),
(4, 'NARESH KUMAR', 'a@a.com', 'Anshul13@', '9999999999', 'new delhi', ''),
(5, 'NARESH KUMAR', 'jigyashurajput1@gmail.com', 'Abcd123@', '9999999999', 'new delhi', 'ikfdhjfvj'),
(6, 'jigyashu', 'jigyashurajputaa1@gmail.com', '2@Iamkin123', '66545gesf', 'grsg', 'sge'),
(7, 'akanksha', 'kancha@gmail.com', 'Akanksha@123', '9998864566', 'new delhi', 'ikfdhjfvj'),
(8, 'susu', 'potty@gmail.com', 'Tatti123@', '6663629', 'new delhi', 'sge'),
(9, 'Jigyashu Rajput', 'jgtf@gmail.com', 'Akanksha123@', '', '', ''),
(10, 'jigyashu', 'abcd@abcd.com', 'Anshul123@', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 1, 3, 'Confirmed'),
(2, 1, 11, 'Confirmed'),
(3, 1, 9, 'Confirmed'),
(4, 8, 4, 'Confirmed'),
(5, 8, 2, 'Added to cart'),
(6, 8, 3, 'Added to cart'),
(7, 8, 4, 'Added to cart'),
(8, 3, 2, 'Confirmed'),
(9, 3, 1, 'Confirmed'),
(10, 3, 2, 'Confirmed'),
(11, 3, 3, 'Confirmed'),
(12, 3, 4, 'Confirmed'),
(13, 3, 8, 'Confirmed'),
(14, 3, 12, 'Confirmed'),
(15, 3, 11, 'Confirmed'),
(16, 3, 10, 'Confirmed'),
(17, 3, 9, 'Confirmed'),
(18, 3, 1, 'Confirmed'),
(19, 1, 6, 'Added to cart'),
(20, 10, 2, 'Confirmed'),
(21, 10, 1, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `item_id` (`item_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
