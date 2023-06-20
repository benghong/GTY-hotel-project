-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:44 AM
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
(40, 'test11', '', 'test11@gmail.com', '0000-00-00', '2023-06-20', '2023-06-22', '00:00:00', '00:00:00', 3, 'Panoramic Rooms', '0.00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
