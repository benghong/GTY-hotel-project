-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:34 PM
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
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'PETER YEW', '1211206679'),
(2, 'LEI', '1211207038'),
(3, 'BENGHONG', '1211206859');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_phone` varchar(12) NOT NULL,
  `cus_email` varchar(60) NOT NULL,
  `booking_date` date NOT NULL,
  `cus_checkin` date NOT NULL,
  `cus_checkout` date NOT NULL,
  `cus_checkintime` time NOT NULL,
  `cus_checkouttime` time NOT NULL,
  `cus_qty` int(2) NOT NULL,
  `booking_room_type` varchar(100) NOT NULL,
  `booking_room_price` decimal(5,2) NOT NULL,
  `booking_room_code` int(5) NOT NULL,
  `booking_isdelete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`cus_id`, `cus_name`, `cus_phone`, `cus_email`, `booking_date`, `cus_checkin`, `cus_checkout`, `cus_checkintime`, `cus_checkouttime`, `cus_qty`, `booking_room_type`, `booking_room_price`, `booking_room_code`, `booking_isdelete`) VALUES
(1, 'Peter Parker', '012-3456789', 'peterparker@gmail.com', '2023-05-15', '2023-05-22', '2023-05-24', '11:00:00', '11:45:00', 1, 'Family Rooms', '250.00', 0, 0),
(2, 'Tan Beng Hong', '011-23456789', 'benghong@gmail.com', '2023-05-17', '2023-05-21', '2023-05-22', '10:00:00', '00:00:00', 1, 'Daily Room', '90.00', 0, 0),
(3, 'Gan Yik Lei', '013-456789', 'yiklei@gmail.com', '2023-05-18', '2023-05-24', '2023-05-27', '10:30:00', '00:00:00', 1, 'Exclusive Room', '150.00', 0, 0),
(4, 'Lau She Hong', '010-3456789', 'shehong@gmail.com', '2023-05-27', '2023-05-25', '2023-05-27', '00:00:00', '00:00:00', 1, 'Panoramic Room', '350.00', 0, 0),
(5, 'Peter Yew', '014-3456789', 'peteryew@gmail.com', '2023-05-20', '2023-06-02', '2023-06-05', '11:00:00', '00:00:00', 1, 'Family Room', '250.00', 0, 0),
(6, 'Nicole Sim', '016-23456789', 'nicole@gmail.com', '2023-06-03', '2023-06-08', '2023-06-10', '00:00:00', '00:00:00', 1, 'Daily Room', '90.00', 0, 0),
(38, 'test11', '', 'test11@gmail.com', '0000-00-00', '2023-06-20', '2023-06-22', '00:00:00', '00:00:00', 3, 'Panoramic Rooms', '0.00', 0, 0),
(39, 'test11', '', 'test11@gmail.com', '0000-00-00', '2023-06-20', '2023-06-22', '00:00:00', '00:00:00', 3, 'Panoramic Rooms', '0.00', 0, 0),
(40, 'test11', '', 'test11@gmail.com', '0000-00-00', '2023-06-20', '2023-06-22', '00:00:00', '00:00:00', 3, 'Panoramic Rooms', '0.00', 0, 0),
(41, 'test11', '', 'test11@gmail.com', '0000-00-00', '2023-06-20', '2023-06-22', '00:00:00', '00:00:00', 3, 'Panoramic Rooms', '0.00', 0, 0),
(42, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 1, 'Exclusive Rooms', '0.00', 0, 0),
(43, '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 1, 'Exclusive Rooms', '0.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(3) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_phone_number` varchar(12) NOT NULL,
  `customer_password` varchar(12) NOT NULL,
  `customer_isDelete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_phone_number`, `customer_password`, `customer_isDelete`) VALUES
(1, 'Peter Parker', 'PeterParker@gmail.com', '016-1234567', '12345', 1),
(2, 'Peter Parker', 'PeterParker@gmail.com', '016-1234567', '123', 1),
(3, 'customer3', 'customer3', '011-1111111', 'customer3', 0),
(4, 'tan', 'tan@gmail.com', '016-3335778', '12345', 0);

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
(3, 'TAN BENG HONG', '1211206859', '1211206859@student.mmu.edu.my', '0134567892'),
(8, 'Peter Yew', '123456', 'peteryew@gmail.com', '0123456789'),
(9, 'Peter Yew', '123456', 'peteryew@gmail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_number` int(5) NOT NULL,
  `invoice_customer_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `invoice_date` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `invoice_amount` decimal(5,2) NOT NULL,
  `invoice_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `invoice_isDelete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_number`, `invoice_customer_name`, `invoice_date`, `invoice_amount`, `invoice_status`, `invoice_isDelete`) VALUES
(1, 'sad', '2023-06-19', '12.00', 'in_customer', 1),
(2, 'saqq', '2023-06-20', '12.00', 'in_customer', 1),
(3, 'r', '2023-06-20', '12.00', 'out_customer', 0),
(4, 'dasd', '2023-06-19', '12.00', 'out_customer', 0),
(5, 'dsad', '2023-06-26', '0.00', 'out_customer', 0),
(6, '', '', '0.00', 'in_customer', 0),
(7, '', '', '0.00', 'in_customer', 0),
(8, 'as', '', '0.00', 'in_customer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `pricing_no` int(10) NOT NULL,
  `room_type` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `room_price` decimal(6,2) NOT NULL,
  `room_facilities` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`pricing_no`, `room_type`, `room_price`, `room_facilities`) VALUES
(1, 'Exclusive Room', '150.00', 'asd'),
(2, 'Family Room', '250.00', '13'),
(3, 'Daily Room', '90.00', '13'),
(4, 'Panoramic Room', '350.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_code` int(5) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `room_price` decimal(5,2) NOT NULL,
  `room_stock` int(3) NOT NULL,
  `room_details` text NOT NULL,
  `room_isdelete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_code`, `room_type`, `room_price`, `room_stock`, `room_details`, `room_isdelete`) VALUES
(1, 'Exclusive Room', '150.00', 24, '', 0),
(2, 'Family Room', '250.00', 25, '', 0),
(3, 'Daily Room', '90.00', 25, '', 0),
(4, 'Panoramic Room', '350.00', 10, '', 0),
(1413, 'vvip', '450.00', 0, '', 0),
(1234243, 'wqeqehjhg', '450.00', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `cus_registerlogin`
--
ALTER TABLE `cus_registerlogin`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_number`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`pricing_no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cus_registerlogin`
--
ALTER TABLE `cus_registerlogin`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_number` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `pricing_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_code` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234244;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
