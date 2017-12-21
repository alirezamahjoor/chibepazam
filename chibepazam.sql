-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 07:24 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chibepazam`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_food`
--

CREATE TABLE `t_food` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_food`
--

INSERT INTO `t_food` (`id`, `name`) VALUES
(1, 'تخم مرغ'),
(2, 'ماکارونی'),
(3, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_primary`
--

CREATE TABLE `t_primary` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_primary`
--

INSERT INTO `t_primary` (`id`, `name`) VALUES
(1, 'تخم مرغ'),
(2, 'رب'),
(3, 'سیب زمینی'),
(4, 'پیاز'),
(5, 'گوجه'),
(6, 'پنیر'),
(7, 'پنیر پیتزا'),
(8, 'خمیر پیتزا'),
(9, 'سوسیس'),
(10, 'کالباس'),
(11, 'آرد'),
(12, 'آب'),
(15, 'سیب');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_food`
--
ALTER TABLE `t_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_primary`
--
ALTER TABLE `t_primary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_food`
--
ALTER TABLE `t_food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_primary`
--
ALTER TABLE `t_primary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
