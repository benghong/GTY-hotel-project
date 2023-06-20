-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 11:40 AM
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
-- Database: `gty_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cus_registerlogin`
--

CREATE TABLE `cus_registerlogin` (
  `cust_id` int(11) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_password` varchar(12) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `cust_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cus_registerlogin`
--

INSERT INTO `cus_registerlogin` (`cust_id`, `cust_name`, `cust_password`, `cust_email`, `cust_phone`) VALUES
(1, 'YEW CHOON KIAT', '1211206679', '1211206679@student.mmu.edu.my', '0123456789'),
(2, 'GAN YIK LEI', '1211207038', '1211207038@student.mmu.edu.my', '0122345678'),
(3, 'TAN BENG HONG', '1211206859', '1211206859@student.mmu.edu.my', '0134567892');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cus_registerlogin`
--
ALTER TABLE `cus_registerlogin`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cus_registerlogin`
--
ALTER TABLE `cus_registerlogin`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
