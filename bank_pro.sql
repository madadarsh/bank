-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 05:30 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(50) NOT NULL,
  `curr_bal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `curr_bal`) VALUES
(1, 'adarsh', 'adarsh@gmail.com', 50700),
(2, 'monu', 'monu@gmail.com', 5000),
(3, 'jagdish ', 'jagdish@yahoo.com', 85500),
(4, 'mandakini', 'manda@gmail.com', 60000),
(5, 'santoshi', 'santa@gmail.com', 49300),
(6, 'shreya', 'shreya@gmail.com', 49500),
(7, 'shivam', 'shivam@gmail.com', 49000),
(8, 'abhinav', 'abhinav@gmail.com', 49000),
(9, 'kunal', 'kunal@gmail.com', 50000),
(10, 'priya', 'priya@gmail.com', 50000),
(11, 'adi', 'adi@gmail.com', 50000),
(12, 'smiti', 'smiti@gmail.com', 50000),
(13, 'kunal', 'kunalm@gmail.com', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `t_id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `ad_amnt` int(11) NOT NULL,
  `up_bal` int(11) NOT NULL,
  `recever` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`t_id`, `sender`, `ad_amnt`, `up_bal`, `recever`) VALUES
(1, 'adarsh', 5000, 55000, 'monu'),
(2, 'monu', 4000, 44000, 'adarsh'),
(3, 'mandakini', 5000, 0, 'adarsh'),
(4, 'adarsh', 1400, 0, 'kunal'),
(5, 'mandakini', 5000, 0, 'adarsh'),
(6, 'adarsh', 1400, 0, 'kunal'),
(7, 'monu', 4000, 44000, 'adarsh'),
(8, 'mandakini', 5000, 0, 'adarsh'),
(9, 'mandakini', 5000, 0, 'adarsh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
